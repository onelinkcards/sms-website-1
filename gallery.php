<?php
require_once __DIR__ . '/config.php';
$page_title = 'Gallery - Campus Life';
$body_class = 'page sms-inner sms-gallery';
$sms_home_js = true;
$sms_active_nav = 'gallery';
$_g_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_g_about = defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php';
$_g_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_g_courses = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
$_g_short = defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'SMS College';
$_g_photo = static function (string $file): string {
    return 'photo/' . rawurlencode($file);
};
$_g_mosaic = function_exists('sms_gallery_mosaic_files') ? sms_gallery_mosaic_files() : [];
ob_start();
include_once 'partials/header/header-sms.php';

$sms_page_hero_title = 'Gallery';
$sms_page_hero_crumb = 'Gallery';
$sms_page_hero_image = defined('SMS_PAGE_HERO_GALLERY') ? SMS_PAGE_HERO_GALLERY : (defined('SMS_STOCK_BREADCRUMB') ? SMS_STOCK_BREADCRUMB : '');
include_once __DIR__ . '/partials/components/sms-page-hero.php';
?>

<section class="section section--white sms-gallery-section">
    <div class="sms-hs-container">
        <header class="sms-gallery-section__intro fade-up">
            <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span><span class="eyebrow-text">Campus &amp; facilities</span></p>
            <h2 class="section-heading" style="margin-bottom: 8px;">Life at <?php echo htmlspecialchars($_g_short); ?></h2>
            <p class="section-subtext" style="margin: 0 auto;">Photos from our campus in Jammu.</p>
        </header>

        <?php if (!empty($_g_mosaic)) : ?>
        <div class="sms-gallery-grid sms-gallery-grid--mosaic fade-up" aria-label="Campus photos">
            <?php foreach ($_g_mosaic as $_gf) :
                $_g_src = $_g_photo($_gf);
                ?>
            <div
                class="sms-gallery-card sms-gallery-card--mosaic sms-gallery-card--plain"
                style="background-image: url('<?php echo htmlspecialchars($_g_src, ENT_QUOTES, 'UTF-8'); ?>');"
                role="img"
                aria-label="Campus photo"
            ></div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="sms-gallery-section__cta fade-up">
            <p class="section-subtext mb-3 text-center">Planning a visit or need programme details?</p>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a class="sms-btn sms-btn--primary" href="<?php echo htmlspecialchars($_g_apply); ?>">Admissions</a>
                <a class="sms-btn sms-btn--outline" href="<?php echo htmlspecialchars($_g_about); ?>">About</a>
                <a class="sms-btn sms-btn--outline" href="<?php echo htmlspecialchars($_g_contact); ?>">Contact</a>
                <a class="sms-btn sms-btn--outline" href="<?php echo htmlspecialchars($_g_courses); ?>">Programmes</a>
            </div>
        </div>
    </div>
</section>
<?php include_once 'partials/footer/footer-sms.php'; ?>
<?php $content = ob_get_clean(); include 'base.php'; ?>
