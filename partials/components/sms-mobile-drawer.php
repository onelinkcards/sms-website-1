<?php
/**
 * Mobile navigation drawer (slides from right). Used with header-sms.php + sms-site-polish.css.
 */
$_md_nav = $sms_active_nav ?? '';
$_md_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_md_courses_raw = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
$_md_courses_href = $_md_courses_raw;
if (strpos($_md_courses_href, '#') === 0) {
    $_md_courses_href = ((isset($_SERVER['PHP_SELF']) && basename((string) $_SERVER['PHP_SELF']) === 'index.php') ? '' : 'index.php') . $_md_courses_href;
}
$_md_logo = isset($sms_logo_main) ? $sms_logo_main : (defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png');
$_md_site_name = defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'Sant Manjit Singh College';
$_md_about = defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php';
$_md_gallery = defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php';
$_md_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_md_adm = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
?>
<div class="sms-mobile-drawer" id="sms-mobile-drawer" aria-hidden="true">
    <div class="sms-mobile-drawer__backdrop" data-sms-close-mobile-nav tabindex="-1"></div>
    <div class="sms-mobile-drawer__panel" role="dialog" aria-modal="true" aria-labelledby="sms-mobile-drawer-title">
        <div class="sms-mobile-drawer__head">
            <a href="index.php" class="sms-mobile-drawer__brand">
                <img src="<?php echo htmlspecialchars($_md_logo); ?>" alt="<?php echo htmlspecialchars($_md_site_name); ?>" class="sms-mobile-drawer__logo" width="280" height="72" loading="eager" decoding="async">
            </a>
            <button type="button" class="sms-mobile-drawer__close" data-sms-close-mobile-nav aria-label="Close menu">
                <svg class="sms-mobile-drawer__close-svg" width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                    <path d="M18 6 6 18M6 6l12 12" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <p class="sms-mobile-drawer__menu-caption" id="sms-mobile-drawer-title">Menu</p>
        <nav class="sms-mobile-drawer__nav" aria-label="Primary navigation">
            <a class="sms-mobile-drawer__link<?php echo $_md_nav === 'home' ? ' is-active' : ''; ?>" href="index.php">
                <span class="sms-mobile-drawer__link-ico" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 22V12h6v10" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span class="sms-mobile-drawer__link-label">Home</span>
            </a>
            <a class="sms-mobile-drawer__link<?php echo $_md_nav === 'about' ? ' is-active' : ''; ?>" href="<?php echo htmlspecialchars($_md_about); ?>">
                <span class="sms-mobile-drawer__link-ico" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.75"/><path d="M12 16v-4M12 8h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                </span>
                <span class="sms-mobile-drawer__link-label">About</span>
            </a>
            <a class="sms-mobile-drawer__link<?php echo $_md_nav === 'courses' ? ' is-active' : ''; ?>" href="<?php echo htmlspecialchars($_md_courses_href); ?>">
                <span class="sms-mobile-drawer__link-ico" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/></svg>
                </span>
                <span class="sms-mobile-drawer__link-label">Courses</span>
            </a>
            <a class="sms-mobile-drawer__link<?php echo $_md_nav === 'admissions' ? ' is-active' : ''; ?>" href="<?php echo htmlspecialchars($_md_adm); ?>">
                <span class="sms-mobile-drawer__link-ico" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>
                </span>
                <span class="sms-mobile-drawer__link-label">Admissions</span>
            </a>
            <a class="sms-mobile-drawer__link<?php echo $_md_nav === 'gallery' ? ' is-active' : ''; ?>" href="<?php echo htmlspecialchars($_md_gallery); ?>">
                <span class="sms-mobile-drawer__link-ico" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="1.75"/><circle cx="8.5" cy="8.5" r="1.5" fill="currentColor"/><path d="m21 15-5-5L5 21" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span class="sms-mobile-drawer__link-label">Gallery</span>
            </a>
            <a class="sms-mobile-drawer__link<?php echo $_md_nav === 'contact' ? ' is-active' : ''; ?>" href="<?php echo htmlspecialchars($_md_contact); ?>">
                <span class="sms-mobile-drawer__link-ico" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/><path d="m22 6-10 7L2 6" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span class="sms-mobile-drawer__link-label">Contact</span>
            </a>
        </nav>
        <a class="btn-primary sms-mobile-drawer__apply" href="<?php echo htmlspecialchars($_md_apply); ?>">Apply Now →</a>
    </div>
</div>
