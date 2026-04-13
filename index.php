<?php
require_once __DIR__ . '/config.php';

/* Old links ?enquiry=sent — migrate to session + clean URL (refresh won’t repeat banner) */
if (!empty($_GET['enquiry']) && is_string($_GET['enquiry'])) {
    sms_enquiry_session_start();
    $legacy = $_GET['enquiry'];
    if (in_array($legacy, ['sent', 'queued', 'error'], true)) {
        $_SESSION['sms_enquiry_flash'] = $legacy;
    }
    header('Location: index.php#enquiry', true, 302);
    exit;
}

sms_enquiry_session_start();

/* Homepage refresh → welcome curtain (client redirects here once; skip splash + play entrance) */
if (isset($_GET['home_welcome']) && (string) $_GET['home_welcome'] === '1') {
    $_SESSION['sms_tribute_ack'] = true;
    unset($_SESSION['sms_play_home_entrance']);
    header('Location: index.php', true, 302);
    exit;
}

/* Tribute splash — show until user clicks Enter; then keep off for this session (refresh home or any page stays in site) */
if (defined('SMS_TRIBUTE_SPLASH') && SMS_TRIBUTE_SPLASH) {
    if (isset($_GET['continue']) && (string) $_GET['continue'] === '1') {
        $_SESSION['sms_tribute_ack'] = true;
        unset($_SESSION['sms_play_home_entrance']);
        header('Location: index.php', true, 302);
        exit;
    }
    if (empty($_SESSION['sms_tribute_ack'])) {
        require __DIR__ . '/splash-tribute.php';
        exit;
    }
}
$sms_home_enter_reveal = !empty($_SESSION['sms_play_home_entrance']);
if ($sms_home_enter_reveal) {
    unset($_SESSION['sms_play_home_entrance']);
}
$sms_home_welcome_reload_js = !$sms_home_enter_reveal;
$sms_enquiry_toast = null;
if (!empty($_SESSION['sms_enquiry_flash'])) {
    $tf = (string) $_SESSION['sms_enquiry_flash'];
    if (in_array($tf, ['sent', 'queued', 'error'], true)) {
        $sms_enquiry_toast = $tf;
    }
    unset($_SESSION['sms_enquiry_flash']);
}

$page_title = 'Home - Nursing & Allied Healthcare';
$body_class = 'page sms-home' . ($sms_home_enter_reveal ? ' sms-home--enter-reveal' : '');
$sms_show_ai_widget = true;
$sms_home_js = true;
$sms_active_nav = 'home';
ob_start();
include_once 'partials/header/header-sms.php';
?>

<?php include __DIR__ . '/partials/components/sms-enquiry-toast.php'; ?>

<!-- 1. HERO — static campus photo + enquiry form (see .sms-hero-cu__bg--hero-photo in sms-theme.css) -->
<?php
$_sms_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_sms_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_sms_gallery = defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php';
$_sms_about_url = defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php';
$_sms_courses = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
$_sms_hero_video_primary = defined('SMS_HERO_VIDEO_PRIMARY') ? SMS_HERO_VIDEO_PRIMARY : 'assets/video/DJI_0323.MP4';
$_sms_hero_video_sequence = defined('SMS_HERO_VIDEO_SEQUENCE') ? SMS_HERO_VIDEO_SEQUENCE : 'assets/video/DJI_0337.MP4,assets/video/DJI_0344.MP4';
$_sms_enable_hero_video = ($_sms_hero_video_primary !== '');
$_sms_hero_video_poster = defined('SMS_STOCK_HERO_1') ? SMS_STOCK_HERO_1 : '';
$_sms_hero_images = array_values(array_unique(array_filter([
    defined('SMS_PAGE_HERO_COURSES') ? (string) SMS_PAGE_HERO_COURSES : '',
    defined('SMS_PAGE_HERO_ADMISSION') ? (string) SMS_PAGE_HERO_ADMISSION : '',
    defined('SMS_PAGE_HERO_GALLERY') ? (string) SMS_PAGE_HERO_GALLERY : '',
])));
$_sms_hero_bg = !empty($_sms_hero_images) ? $_sms_hero_images[0] : $_sms_hero_video_poster;
?>
<section class="sms-hero-cu" id="enquiry">
    <div class="sms-hero-cu__bg sms-hero-cu__bg--hero-photo sms-hero-cu__bg--video" data-sms-hero-root<?php echo !empty($_sms_hero_images) ? ' data-sms-hero-images="' . htmlspecialchars(implode('|', $_sms_hero_images), ENT_QUOTES, 'UTF-8') . '"' : ''; ?><?php echo $_sms_hero_bg !== '' ? ' style="background-image:url(\'' . htmlspecialchars($_sms_hero_bg, ENT_QUOTES, 'UTF-8') . '\');"' : ''; ?>>
        <?php if ($_sms_enable_hero_video) : ?>
        <video class="sms-hero-cu__video" autoplay muted playsinline loop preload="none" aria-hidden="true"<?php echo $_sms_hero_video_poster !== '' ? ' poster="' . htmlspecialchars($_sms_hero_video_poster, ENT_QUOTES, 'UTF-8') . '"' : ''; ?><?php echo trim($_sms_hero_video_sequence) !== '' ? ' data-sms-video-sequence="' . htmlspecialchars($_sms_hero_video_sequence, ENT_QUOTES, 'UTF-8') . '"' : ''; ?>>
            <source src="<?php echo htmlspecialchars($_sms_hero_video_primary, ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
        </video>
        <?php endif; ?>
        <div class="sms-hero-cu__scrim" aria-hidden="true"></div>
        <div class="sms-hero-cu__inner">
            <div class="sms-hero-cu__text">
                <div class="sms-hero-cu__copy sms-hero-cu__copy--plain text-start fade-up">
                    <p class="sms-hero-cu__eyeline"><?php echo defined('SMS_SITE_TAGLINE') ? htmlspecialchars(SMS_SITE_TAGLINE) : 'Excellence in nursing education'; ?></p>
                    <h1 class="sms-hero-cu__title sms-hero-cu__title--main"><?php echo defined('SMS_SITE_NAME') ? htmlspecialchars(SMS_SITE_NAME) : 'Sant Manjit Singh College of Nursing &amp; Allied Healthcare'; ?></h1>
                    <p class="sms-hero-cu__lead sms-hero-cu__lead--muted">BSc Nursing and GNM programmes recognised by J&amp;K State Health Nursing Council. Clinical training at Government Medical College, Jammu — preparing skilled nurses for a lifetime of service.</p>
                    <div class="sms-hero-cu__actions">
                        <a href="<?php echo htmlspecialchars($_sms_apply); ?>" class="sms-hero-cu__btn sms-hero-cu__btn--primary btn-primary">Apply Now <?php sms_svg_icon('arrow-right', 'sms-svg sms-svg--btn'); ?></a>
                        <a href="<?php echo htmlspecialchars($_sms_courses, ENT_QUOTES, 'UTF-8'); ?>" class="sms-hero-cu__btn sms-hero-cu__btn--outline btn-outline">View Programmes</a>
                    </div>
                </div>
            </div>
            <div class="sms-hero-cu__form-slot d-none d-md-flex">
                <div class="sms-hero-cu__card sms-hero-cu__card--cu text-start">
                    <h2 class="sms-hero-cu__card-headline">Admission Enquiry</h2>
                    <p class="sms-hero-cu__card-intro">Apply for <strong>BSc Nursing</strong> or <strong>GNM</strong>. We&apos;ll respond with eligibility and next steps.</p>
                    <p class="sms-hero-cu__card-tag">Free counselling · JKBOPEE guidance</p>
                    <?php
                    $sms_enquiry_suffix = 'hero';
                    $sms_enquiry_return_url = 'index.php';
                    $sms_enquiry_from_flag = 'hero';
                    include __DIR__ . '/partials/components/sms-enquiry-form.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (count($_sms_hero_images) > 1) : ?>
<script>
  (function () {
    var root = document.querySelector('[data-sms-hero-images]');
    if (!root) return;
    var items = (root.getAttribute('data-sms-hero-images') || '').split('|').filter(Boolean);
    if (items.length < 2) return;
    var idx = 0;
    window.setInterval(function () {
      idx = (idx + 1) % items.length;
      root.style.backgroundImage = "url('" + items[idx].replace(/'/g, "\\'") + "')";
    }, 2800);
  })();
</script>
<?php endif; ?>

<?php include_once __DIR__ . '/partials/components/sms-marquee-band.php'; ?>

<!-- Mobile: sticky bar + enquiry bottom sheet (form in hero from md+ ) -->
<div class="sms-enquiry-sticky d-md-none" role="region" aria-label="Quick enquiry">
    <button type="button" class="sms-enquiry-sticky__primary" data-sms-open-enquiry>
        <span>Enquire for Admission →</span>
    </button>
</div>

<div class="sms-enquiry-sheet d-md-none" id="sms-enquiry-sheet" hidden aria-hidden="true">
    <div class="sms-enquiry-sheet__backdrop" data-sms-close-enquiry tabindex="-1"></div>
    <div class="sms-enquiry-sheet__panel" role="dialog" aria-modal="true" aria-labelledby="sms-enquiry-sheet-title">
        <div class="sms-enquiry-sheet__grab" aria-hidden="true"></div>
        <div class="sms-enquiry-sheet__head">
            <h2 class="sms-enquiry-sheet__title" id="sms-enquiry-sheet-title">Admission Enquiry</h2>
            <button type="button" class="sms-enquiry-sheet__close" data-sms-close-enquiry aria-label="Close enquiry form">&times;</button>
        </div>
        <p class="sms-enquiry-sheet__intro">Apply for <strong>BSc Nursing</strong> or <strong>GNM</strong>. We&apos;ll respond with eligibility and next steps.</p>
        <div class="sms-enquiry-sheet__body">
            <?php
            $sms_enquiry_suffix = 'sheet';
            $sms_enquiry_return_url = 'index.php';
            $sms_enquiry_from_flag = 'sheet';
            include __DIR__ . '/partials/components/sms-enquiry-form.php';
            ?>
        </div>
    </div>
</div>

<!-- 2. ABOUT — editorial block + stats band (clinical sits after gallery in sms-home-sections) -->
<?php
$_sms_short = defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'SMS College';
?>
<section class="section section--white sms-about-pro" id="about" aria-labelledby="sms-about-heading">
    <div class="sms-about-pro__inner">
        <?php include __DIR__ . '/partials/home/sms-about-rebuild.php'; ?>
    </div>

    <div class="sms-about-pro__stats sms-about-pro__stats--refined sms-about-pro__stats--trustline sms-trust-stats-strip" role="region" aria-label="Recognition and clinical training">
        <p class="visually-hidden">Established 2025. Two programmes: BSc Nursing and GNM. Eight nursing laboratories. Clinical partner: Government Medical College, Jammu.</p>
        <div class="sms-trust-stats-strip__inner">
            <div class="sms-trust-stats-strip__col">
                <p class="sms-trust-stats-strip__value"><span class="sms-trust-stats-strip__outline" aria-hidden="true">2025</span></p>
                <p class="sms-trust-stats-strip__label">Year established</p>
            </div>
            <div class="sms-trust-stats-strip__col">
                <p class="sms-trust-stats-strip__value"><span class="sms-trust-stats-strip__outline" aria-hidden="true">2</span></p>
                <p class="sms-trust-stats-strip__label">Programmes offered</p>
            </div>
            <div class="sms-trust-stats-strip__col">
                <p class="sms-trust-stats-strip__value"><span class="sms-trust-stats-strip__outline" aria-hidden="true">8</span></p>
                <p class="sms-trust-stats-strip__label">Nursing laboratories</p>
            </div>
            <div class="sms-trust-stats-strip__col">
                <p class="sms-trust-stats-strip__value">
                    <span class="sms-trust-stats-strip__outline sms-trust-stats-strip__outline--letters" aria-label="Government Medical College, Jammu">GMC</span>
                </p>
                <p class="sms-trust-stats-strip__label">Clinical partner</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/partials/home/sms-home-sections.php'; ?>

<?php
$content = ob_get_clean();
include 'base.php';
?>
