<?php
require_once __DIR__ . '/config.php';

if (!empty($_GET['enquiry']) && is_string($_GET['enquiry'])) {
    sms_enquiry_session_start();
    $legacy = $_GET['enquiry'];
    if (in_array($legacy, ['sent', 'queued', 'error'], true)) {
        $_SESSION['sms_enquiry_flash'] = $legacy;
    }
    header('Location: contact.php#enquiry', true, 302);
    exit;
}

sms_enquiry_session_start();
$sms_enquiry_toast = null;
if (!empty($_SESSION['sms_enquiry_flash'])) {
    $tf = (string) $_SESSION['sms_enquiry_flash'];
    if (in_array($tf, ['sent', 'queued', 'error'], true)) {
        $sms_enquiry_toast = $tf;
    }
    unset($_SESSION['sms_enquiry_flash']);
}

$page_title = 'Contact';
$body_class = 'page sms-inner sms-contact-page';
$sms_active_nav = 'contact';
$_c_site = defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'Sant Manjit Singh College of Nursing & Allied Healthcare';
$_c_addr = defined('SMS_ADDRESS') ? SMS_ADDRESS : 'Babliana Jeevan Nagar Road, Near Airport, Jammu — 180001, Jammu & Kashmir';
$_c_addr_strip = preg_replace('/,\s*Jammu\s*&\s*Kashmir\s*$/i', '', $_c_addr);
/* Strip line: short address without pin (layout: single line) */
$_c_addr_short = preg_replace('/\s*—\s*180001.*$/u', '', $_c_addr_strip);
$_c_p1 = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$_c_p2 = defined('SMS_PHONE_2') ? SMS_PHONE_2 : '';
$_c_email = defined('SMS_EMAIL') ? SMS_EMAIL : '';
$_c_tel1 = $_c_p1 !== '' ? preg_replace('/\s+/', '', $_c_p1) : '';
$_c_tel2 = $_c_p2 !== '' ? preg_replace('/\s+/', '', $_c_p2) : '';
$_c_phone_bits = array_values(array_filter([$_c_p1, $_c_p2], static function ($x) {
    return $x !== '';
}));
$_c_phone_display = implode(' · ', $_c_phone_bits);
$_c_maps_q = 'Babliana Jeevan Nagar Road near Jammu Airport Jammu 180001';
$_c_maps_src = 'https://maps.google.com/maps?q=' . rawurlencode($_c_maps_q) . '&output=embed';
$_c_maps_link = 'https://maps.google.com/?q=' . rawurlencode($_c_maps_q);
ob_start();
include_once __DIR__ . '/partials/header/header-sms.php';

$sms_page_hero_title = 'Contact';
$sms_page_hero_crumb = 'Contact';
$sms_page_hero_image = defined('SMS_PAGE_HERO_CONTACT') ? SMS_PAGE_HERO_CONTACT : (defined('SMS_STOCK_BREADCRUMB') ? SMS_STOCK_BREADCRUMB : '');
include_once __DIR__ . '/partials/components/sms-page-hero.php';
?>

<?php include __DIR__ . '/partials/components/sms-enquiry-toast.php'; ?>

<!-- Section 1 — Quick contact strip -->
<section class="sms-contact-body__strip" aria-label="Quick contact">
    <div class="sms-contact-body__strip-inner">
        <?php if ($_c_phone_display !== '') : ?>
        <div class="sms-contact-body__strip-item sms-contact-body__strip-item--static">
            <div class="sms-contact-body__strip-cell">
                <span class="sms-contact-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 4h2.5l1.8 4.5-1.2.9a11 11 0 0 0 5.5 5.5l.9-1.2L19 16.5V19a2 2 0 0 1-2 2h-.5A16 16 0 0 1 3 5.5V5a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                </span>
                <span class="sms-contact-body__strip-text">
                    <span class="sms-contact-body__strip-label">Phone</span>
                    <span class="sms-contact-body__strip-value sms-contact-body__strip-value--phone">
                        <?php
                        $sep = '';
                        foreach ($_c_phone_bits as $i => $num) {
                            $t = $i === 0 ? $_c_tel1 : $_c_tel2;
                            echo $sep;
                            if ($t !== '') {
                                echo '<a href="tel:' . htmlspecialchars($t, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($num, ENT_QUOTES, 'UTF-8') . '</a>';
                            } else {
                                echo htmlspecialchars($num, ENT_QUOTES, 'UTF-8');
                            }
                            $sep = '<span class="sms-contact-body__strip-sep" aria-hidden="true">&nbsp;&nbsp;&middot;&nbsp;&nbsp;</span>';
                        }
                        ?>
                    </span>
                </span>
            </div>
        </div>
        <?php else : ?>
        <div class="sms-contact-body__strip-item sms-contact-body__strip-item--static">
            <div class="sms-contact-body__strip-cell">
                <span class="sms-contact-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 4h2.5l1.8 4.5-1.2.9a11 11 0 0 0 5.5 5.5l.9-1.2L19 16.5V19a2 2 0 0 1-2 2h-.5A16 16 0 0 1 3 5.5V5a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                </span>
                <span class="sms-contact-body__strip-text">
                    <span class="sms-contact-body__strip-label">Phone</span>
                    <span class="sms-contact-body__strip-value sms-contact-body__strip-value--muted">—</span>
                </span>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($_c_email !== '') : ?>
        <a class="sms-contact-body__strip-item" href="mailto:<?php echo htmlspecialchars($_c_email, ENT_QUOTES, 'UTF-8'); ?>">
            <div class="sms-contact-body__strip-cell">
                <span class="sms-contact-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16v12H4V6z" stroke="currentColor" stroke-width="1.5"/><path d="M4 7l8 5.5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </span>
                <span class="sms-contact-body__strip-text">
                    <span class="sms-contact-body__strip-label">Email</span>
                    <span class="sms-contact-body__strip-value"><?php echo htmlspecialchars($_c_email, ENT_QUOTES, 'UTF-8'); ?></span>
                </span>
            </div>
        </a>
        <?php else : ?>
        <div class="sms-contact-body__strip-item sms-contact-body__strip-item--static">
            <div class="sms-contact-body__strip-cell">
                <span class="sms-contact-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16v12H4V6z" stroke="currentColor" stroke-width="1.5"/><path d="M4 7l8 5.5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </span>
                <span class="sms-contact-body__strip-text">
                    <span class="sms-contact-body__strip-label">Email</span>
                    <span class="sms-contact-body__strip-value sms-contact-body__strip-value--muted">—</span>
                </span>
            </div>
        </div>
        <?php endif; ?>

        <div class="sms-contact-body__strip-item sms-contact-body__strip-item--static">
            <div class="sms-contact-body__strip-cell">
                <span class="sms-contact-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 21s7-4.55 7-11a7 7 0 1 0-14 0c0 6.45 7 11 7 11z" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="1.6"/></svg>
                </span>
                <span class="sms-contact-body__strip-text">
                    <span class="sms-contact-body__strip-label">Address</span>
                    <span class="sms-contact-body__strip-value"><?php echo htmlspecialchars($_c_addr_short, ENT_QUOTES, 'UTF-8'); ?></span>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 — Map + form -->
<section class="sms-contact-body__main" id="enquiry" aria-labelledby="sms-contact-form-heading">
    <div class="sms-contact-body__main-inner">
        <div class="sms-contact-body__map-col">
            <div class="sms-contact-body__map-frame">
                <iframe title="Map — <?php echo htmlspecialchars($_c_site, ENT_QUOTES, 'UTF-8'); ?>" src="<?php echo htmlspecialchars($_c_maps_src, ENT_QUOTES, 'UTF-8'); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="sms-contact-body__map-caption">Babliana Jeevan Nagar Road, Near Airport, Jammu — 180001</p>
            <div class="sms-contact-body__hours-card">
                <p class="sms-contact-body__hours-label">Office hours</p>
                <p class="sms-contact-body__hours-row">
                    <span class="sms-contact-body__hours-dot sms-contact-body__hours-dot--red" aria-hidden="true"></span>
                    <span>Monday – Saturday: 9:00 AM – 5:00 PM</span>
                </p>
                <p class="sms-contact-body__hours-row sms-contact-body__hours-row--muted">
                    <span class="sms-contact-body__hours-dot sms-contact-body__hours-dot--grey" aria-hidden="true"></span>
                    <span>Sunday: Closed</span>
                </p>
            </div>
            <a class="sms-contact-body__directions" href="<?php echo htmlspecialchars($_c_maps_link, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">Get Directions →</a>
        </div>
        <div class="sms-contact-body__form-col">
            <div class="sms-contact-body__form-card sms-hero-cu__card sms-hero-cu__card--cu">
                <h2 class="sms-hero-cu__card-headline" id="sms-contact-form-heading">Admission Enquiry</h2>
                <p class="sms-hero-cu__card-intro">Apply for <strong>BSc Nursing</strong> or <strong>GNM</strong>. We&apos;ll respond with eligibility and next steps.</p>
                <p class="sms-hero-cu__card-tag">Free counselling · JKBOPEE guidance</p>
                <?php
                $sms_enquiry_suffix = 'contact';
                $sms_enquiry_return_url = 'contact.php';
                $sms_enquiry_from_flag = 'contact';
                include __DIR__ . '/partials/components/sms-enquiry-form.php';
                ?>
            </div>
        </div>
    </div>
</section>

<?php
$class = 'rts-footer-padding v_2';
$cclass = 'v_1';
include_once __DIR__ . '/partials/footer/footer-sms.php';
$content = ob_get_clean();
include __DIR__ . '/base.php';
