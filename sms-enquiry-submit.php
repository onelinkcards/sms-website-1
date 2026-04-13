<?php
/**
 * Admission enquiry — POST handler: validates input, logs every submission, emails SMS_ENQUIRY_NOTIFY_EMAIL.
 *
 * - Success UI uses PHP session (clean URL) so refresh does not repeat the message.
 * - If mail() fails on your host, check storage/enquiries.log and enable SMS_ENQUIRY_RESEND_API_KEY in config.php.
 */
declare(strict_types=1);

require_once __DIR__ . '/config.php';

sms_enquiry_session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php', true, 303);
    exit;
}

$notifyTo = defined('SMS_ENQUIRY_NOTIFY_EMAIL') ? SMS_ENQUIRY_NOTIFY_EMAIL : 'hello@repixelx.tech';
$siteName = defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'SMS College';

// Honeypot — pretend success for bots, no flash
if (!empty($_POST['website'])) {
    header('Location: index.php', true, 303);
    exit;
}

$redirectRaw = isset($_POST['redirect_ok']) ? (string) $_POST['redirect_ok'] : 'contact.php';
$redirectBase = basename($redirectRaw);
if (!preg_match('/^[a-z0-9_.-]+\.php$/i', $redirectBase)) {
    $redirectBase = 'contact.php';
}
$formSource = isset($_POST['form_source']) ? preg_replace('/[^a-z0-9_-]/i', '', (string) $_POST['form_source']) : 'unknown';

function sms_enquiry_clean(string $s, int $max = 500): string
{
    $s = trim(strip_tags($s));
    if (strlen($s) > $max) {
        $s = substr($s, 0, $max);
    }
    return $s;
}

function sms_enquiry_storage_dir(): string
{
    $logDir = __DIR__ . '/storage';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    return $logDir;
}

function sms_enquiry_log(string $label, string $body): void
{
    $logFile = sms_enquiry_storage_dir() . '/enquiries.log';
    @file_put_contents($logFile, "\n" . date('c') . ' [' . $label . "]\n" . $body . "\n---\n", FILE_APPEND | LOCK_EX);
}

/**
 * Send via Resend HTTP API when SMS_ENQUIRY_RESEND_API_KEY is defined in config.php.
 */
function sms_enquiry_try_resend(string $to, string $subject, string $plainBody, string $replyTo): bool
{
    if (!function_exists('curl_init')) {
        return false;
    }
    if (!defined('SMS_ENQUIRY_RESEND_API_KEY') || SMS_ENQUIRY_RESEND_API_KEY === '') {
        return false;
    }
    $from = defined('SMS_ENQUIRY_RESEND_FROM') ? SMS_ENQUIRY_RESEND_FROM : '';
    if ($from === '') {
        return false;
    }
    $payload = json_encode([
        'from' => $from,
        'to' => [$to],
        'subject' => $subject,
        'text' => $plainBody,
        'reply_to' => $replyTo,
    ], JSON_UNESCAPED_UNICODE);
    if ($payload === false) {
        return false;
    }
    $ch = curl_init('https://api.resend.com/emails');
    if ($ch === false) {
        return false;
    }
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . SMS_ENQUIRY_RESEND_API_KEY,
            'Content-Type: application/json',
        ],
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 15,
    ]);
    $raw = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($code >= 200 && $code < 300) {
        return true;
    }
    sms_enquiry_log('resend_http_' . $code, (string) $raw . "\n" . $plainBody);
    return false;
}

$name = sms_enquiry_clean((string) ($_POST['name'] ?? ''), 120);
$email = trim((string) ($_POST['email'] ?? ''));
$phone = sms_enquiry_clean((string) ($_POST['phone'] ?? ''), 20);
$dob = sms_enquiry_clean((string) ($_POST['dob'] ?? ''), 32);
$city = sms_enquiry_clean((string) ($_POST['city'] ?? ''), 80);
$course = sms_enquiry_clean((string) ($_POST['course'] ?? ''), 20);
$session = sms_enquiry_clean((string) ($_POST['session'] ?? ''), 20);
$fromFlag = sms_enquiry_clean((string) ($_POST['from'] ?? ''), 20);
$message = sms_enquiry_clean((string) ($_POST['message'] ?? ''), 800);

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['sms_enquiry_flash'] = 'error';
    header('Location: ' . $redirectBase . '#enquiry', true, 303);
    exit;
}

if ($phone === '' || $dob === '' || $city === '' || $course === '' || $session === '') {
    $_SESSION['sms_enquiry_flash'] = 'error';
    header('Location: ' . $redirectBase . '#enquiry', true, 303);
    exit;
}

$lines = [
    'New admission enquiry — ' . $siteName,
    '---',
    'Source form: ' . $formSource,
    'From flag: ' . ($fromFlag !== '' ? $fromFlag : '—'),
    'Name: ' . $name,
    'Email: ' . $email,
    'Phone: +91 ' . $phone,
    'DOB: ' . $dob,
    'City: ' . $city,
    'Course: ' . $course,
    'Session: ' . $session,
];
if ($message !== '') {
    $lines[] = 'Message: ' . $message;
}
$lines[] = '---';
$lines[] = 'Submitted: ' . date('c');
$lines[] = 'IP: ' . (string) ($_SERVER['REMOTE_ADDR'] ?? '');

$body = implode("\n", $lines);
$subject = '[SMS Enquiry] ' . $name . ' — ' . $course;

// Always keep a server copy (even if email fails)
sms_enquiry_log('submission', $body);

$fromHeader = defined('SMS_ENQUIRY_MAIL_FROM') ? SMS_ENQUIRY_MAIL_FROM : 'noreply@repixelx.tech';
$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';
$headers[] = 'Content-Transfer-Encoding: 8bit';
$headers[] = 'From: ' . $siteName . ' <' . $fromHeader . '>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . PHP_VERSION;

$encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

$sent = false;
if (sms_enquiry_try_resend($notifyTo, $subject, $body, $email)) {
    $sent = true;
} else {
    $extra = '';
    if (preg_match('/[^\s<>]+@[^\s<>]+/', $fromHeader, $m)) {
        $extra = '-f' . $m[0];
    }
    $sent = $extra !== ''
        ? @mail($notifyTo, $encodedSubject, $body, implode("\r\n", $headers), $extra)
        : @mail($notifyTo, $encodedSubject, $body, implode("\r\n", $headers));
}

if (!$sent) {
    sms_enquiry_log('mail_failed', $body);
}

$_SESSION['sms_enquiry_flash'] = $sent ? 'sent' : 'queued';
header('Location: ' . $redirectBase . '#enquiry', true, 303);
exit;
