<?php
/**
 * Help dock — circular FAB + “How can we help you?” bar + panel.
 */
if (!defined('SMS_SITE_NAME')) {
    require_once dirname(__DIR__, 2) . '/config.php';
}
$_hd_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_hd_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_hd_about = defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php';
$_hd_gallery = defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php';
$_hd_courses = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
$_hd_courses_href = (strpos($_hd_courses, '#') === 0) ? ('index.php' . $_hd_courses) : $_hd_courses;
$_hd_phone = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$_hd_tel = $_hd_phone !== '' ? preg_replace('/\s+/', '', $_hd_phone) : '';
$_hd_digits = preg_replace('/\D/', '', $_hd_phone);
$_hd_wa = (strlen($_hd_digits) >= 10) ? 'https://wa.me/91' . substr($_hd_digits, -10) : '#';
?>
<div class="sms-help-dock" id="sms-help-dock" data-sms-help-dock>
    <div class="sms-help-dock__panel" id="sms-help-dock-panel" role="dialog" aria-modal="false" aria-labelledby="sms-help-dock-title" aria-hidden="true">
        <div class="sms-help-dock__panel-inner">
            <div class="sms-help-dock__panel-header">
                <h2 id="sms-help-dock-title" class="sms-help-dock__title">How can we help you?</h2>
                <button type="button" class="sms-help-dock__close" id="sms-help-dock-close" aria-label="Close help menu">
                    <svg class="sms-help-dock__close-svg" width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                        <path d="M18 6 6 18M6 6l12 12" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <p class="sms-help-dock__intro">Quick links — one tap to the right page.</p>
            <ul class="sms-help-dock__simple-list" role="list">
                <li><a class="sms-help-dock__link" href="<?php echo htmlspecialchars($_hd_apply, ENT_QUOTES, 'UTF-8'); ?>">Apply for admission</a></li>
                <li><a class="sms-help-dock__link" href="<?php echo htmlspecialchars($_hd_courses_href, ENT_QUOTES, 'UTF-8'); ?>">Programmes &amp; courses</a></li>
                <li><a class="sms-help-dock__link" href="<?php echo htmlspecialchars($_hd_contact, ENT_QUOTES, 'UTF-8'); ?>">Contact the office</a></li>
                <li><a class="sms-help-dock__link" href="<?php echo htmlspecialchars($_hd_about, ENT_QUOTES, 'UTF-8'); ?>">About the college</a></li>
                <li><a class="sms-help-dock__link" href="<?php echo htmlspecialchars($_hd_gallery, ENT_QUOTES, 'UTF-8'); ?>">Gallery</a></li>
                <li><a class="sms-help-dock__link" href="index.php#faq">FAQs</a></li>
                <?php if ($_hd_phone !== '' && $_hd_tel !== '') : ?>
                <li><a class="sms-help-dock__link" href="tel:<?php echo htmlspecialchars($_hd_tel, ENT_QUOTES, 'UTF-8'); ?>">Call <?php echo htmlspecialchars($_hd_phone, ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php endif; ?>
                <?php if ($_hd_wa !== '#') : ?>
                <li><a class="sms-help-dock__link" href="<?php echo htmlspecialchars($_hd_wa, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="sms-help-dock__fab-wrap">
        <button type="button" class="sms-help-dock__fab-row" id="sms-help-dock-toggle" aria-expanded="false" aria-controls="sms-help-dock-panel" aria-haspopup="dialog" aria-label="How can we help you? Open help menu." title="How can we help you?">
            <span class="sms-help-dock__fab-bar" aria-hidden="true">
                <span class="sms-help-dock__fab-bar-text sms-help-dock__fab-bar-text--open">How can we help you?</span>
                <span class="sms-help-dock__fab-bar-text sms-help-dock__fab-bar-text--close">Close</span>
            </span>
            <span class="sms-help-dock__fab-circle" aria-hidden="true">
                <span class="sms-help-dock__fab-ring"></span>
                <span class="sms-help-dock__fab-circle-inner">
                    <svg class="sms-help-dock__fab-svg sms-help-dock__fab-svg--chat" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 10h.01M12 10h.01M16 10h.01" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                    <svg class="sms-help-dock__fab-svg sms-help-dock__fab-svg--x" width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 6 6 18M6 6l12 12" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
            </span>
        </button>
    </div>
</div>
