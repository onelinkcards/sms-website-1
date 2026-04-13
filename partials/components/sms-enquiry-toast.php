<?php
/**
 * One-time toast after enquiry submit (session flash). Expects $sms_enquiry_toast: sent|queued|error|null
 */
if (empty($sms_enquiry_toast) || !is_string($sms_enquiry_toast)) {
    return;
}
$toastKind = in_array($sms_enquiry_toast, ['sent', 'queued', 'error'], true) ? $sms_enquiry_toast : null;
if ($toastKind === null) {
    return;
}
$isOk = ($toastKind === 'sent' || $toastKind === 'queued');
$toastClass = $isOk ? 'sms-enquiry-toast--ok' : 'sms-enquiry-toast--err';
$role = $isOk ? 'status' : 'alert';
if ($toastKind === 'error') {
    $msg = 'Something was missing or invalid. Please check the form and try again.';
} elseif ($toastKind === 'queued') {
    $msg = 'Your enquiry was saved. Our team will contact you soon.';
} else {
    $msg = 'Our team will contact you soon.';
}
?>
<div id="sms-enquiry-toast" class="sms-enquiry-toast <?php echo htmlspecialchars($toastClass, ENT_QUOTES, 'UTF-8'); ?>" role="<?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?>" data-sms-enquiry-toast data-sms-enquiry-toast-kind="<?php echo htmlspecialchars($toastKind, ENT_QUOTES, 'UTF-8'); ?>">
    <span class="sms-enquiry-toast__text"><?php echo htmlspecialchars($msg); ?></span>
    <button type="button" class="sms-enquiry-toast__close" data-sms-enquiry-toast-close aria-label="Dismiss">&times;</button>
</div>
<?php if ($toastKind === 'sent') : ?>
<script>
document.documentElement.setAttribute('data-sms-enquiry-ok', '1');
</script>
<?php endif; ?>
