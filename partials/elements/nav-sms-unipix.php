<?php
$_nav = $sms_active_nav ?? '';
$_courses_raw = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
$_courses_href = $_courses_raw;
if (strpos($_courses_href, '#') === 0) {
    $_courses_href = ((isset($_SERVER['PHP_SELF']) && basename((string) $_SERVER['PHP_SELF']) === 'index.php') ? '' : 'index.php') . $_courses_href;
}
?>
<div class="navigation sms-nav-pro">
    <nav class="navigation__menu">
        <ul>
            <li class="navigation__menu--item<?php echo $_nav === 'home' ? ' is-active' : ''; ?>"><a href="index.php" class="navigation__menu--item__link">Home</a></li>
            <li class="navigation__menu--item<?php echo $_nav === 'about' ? ' is-active' : ''; ?>"><a href="<?php echo defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php'; ?>" class="navigation__menu--item__link">About</a></li>
            <li class="navigation__menu--item<?php echo ($_nav === 'courses') ? ' is-active' : ''; ?>"><a href="<?php echo htmlspecialchars($_courses_href); ?>" class="navigation__menu--item__link">Courses</a></li>
            <li class="navigation__menu--item<?php echo $_nav === 'admissions' ? ' is-active' : ''; ?>"><a href="<?php echo defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php'; ?>" class="navigation__menu--item__link">Admissions</a></li>
            <li class="navigation__menu--item<?php echo $_nav === 'gallery' ? ' is-active' : ''; ?>"><a href="<?php echo defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php'; ?>" class="navigation__menu--item__link">Gallery</a></li>
            <li class="navigation__menu--item<?php echo $_nav === 'contact' ? ' is-active' : ''; ?>"><a href="<?php echo defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php'; ?>" class="navigation__menu--item__link">Contact</a></li>
        </ul>
    </nav>
</div>
