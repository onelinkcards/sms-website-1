<?php
/**
 * Full-bleed image hero — matches admissions reference (breadcrumb + serif title + overlay).
 * Set before include:
 *   $sms_page_hero_title (string, required)
 *   $sms_page_hero_crumb (string, optional — breadcrumb label; defaults to title)
 *   $sms_page_hero_image (string, optional — path from site root; default campus banner)
 */
if (!defined('SMS_SITE_NAME')) {
    require_once dirname(__DIR__, 2) . '/config.php';
}
$_ph_title = isset($sms_page_hero_title) ? (string) $sms_page_hero_title : 'Page';
$_ph_crumb = isset($sms_page_hero_crumb) && $sms_page_hero_crumb !== '' ? (string) $sms_page_hero_crumb : $_ph_title;
$_ph_img = isset($sms_page_hero_image) && $sms_page_hero_image !== ''
    ? (string) $sms_page_hero_image
    : (defined('SMS_STOCK_BREADCRUMB') ? SMS_STOCK_BREADCRUMB : '');
if ($_ph_img === '' && defined('SMS_STOCK_HERO_1')) {
    $_ph_img = SMS_STOCK_HERO_1;
}
$_ph_img_esc = htmlspecialchars($_ph_img, ENT_QUOTES, 'UTF-8');
$_ph_bg = $_ph_img !== '' ? "background-image: url('" . $_ph_img_esc . "'); background-position: center center;" : '';
?>
<section class="sms-page-hero" aria-labelledby="sms-page-hero-heading">
    <div class="sms-page-hero__media" style="<?php echo $_ph_bg; ?>" aria-hidden="true"></div>
    <div class="sms-page-hero__scrim" aria-hidden="true"></div>
    <div class="sms-page-hero__inner sms-hs-container">
        <nav class="sms-page-hero__crumbs" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <span class="sms-page-hero__crumb-sep" aria-hidden="true">›</span>
            <span class="sms-page-hero__crumb-current" aria-current="page"><?php echo htmlspecialchars($_ph_crumb, ENT_QUOTES, 'UTF-8'); ?></span>
        </nav>
        <h1 class="sms-page-hero__title" id="sms-page-hero-heading"><?php echo htmlspecialchars($_ph_title, ENT_QUOTES, 'UTF-8'); ?></h1>
    </div>
</section>
