<?php
require_once __DIR__ . '/config.php';

$page_title = 'Programmes';
$body_class = 'page sms-inner sms-courses-page';
$sms_active_nav = 'courses';
$_co_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
ob_start();
include_once __DIR__ . '/partials/header/header-sms.php';

$sms_page_hero_title = 'Our Programmes';
$sms_page_hero_crumb = 'Programmes';
$sms_page_hero_image = defined('SMS_PAGE_HERO_COURSES') ? SMS_PAGE_HERO_COURSES : (defined('SMS_STOCK_BREADCRUMB') ? SMS_STOCK_BREADCRUMB : '');
include_once __DIR__ . '/partials/components/sms-page-hero.php';
?>

<section class="section section--surface sms-hs-courses sms-hs-courses--listing" id="courses-list" aria-labelledby="sms-courses-list-title">
    <div class="sms-hs-container">
        <header class="sms-hs-courses__head">
            <div class="sms-hs-courses__head-text">
                <p class="eyebrow fade-up"><span class="eyebrow-line" aria-hidden="true"></span><span class="eyebrow-text">Our Programmes</span></p>
                <h2 class="section-heading sms-hs-courses__title fade-up" id="sms-courses-list-title">Two Pathways Into Healthcare</h2>
                <p class="section-subtext fade-up" style="margin-top: 12px; max-width: 640px;">Choose a programme to read full details — duration, eligibility, clinical training, and how to apply.</p>
            </div>
            <a class="sms-hs-courses__cta sms-hs-courses__cta--text fade-up" href="<?php echo htmlspecialchars($_co_apply, ENT_QUOTES, 'UTF-8'); ?>">
                <span>Apply for admission</span>
                <span class="sms-hs-courses__cta-arrow" aria-hidden="true">→</span>
            </a>
        </header>
        <div class="sms-hs-courses__grid sms-hs-courses__grid--two">
            <a href="course.php?code=bsc" class="sms-hs-course-card fade-up">
                <div class="sms-hs-course-card__media-wrap">
                    <span class="sms-hs-course-card__badge">4-year degree</span>
                    <div class="sms-hs-course-card__ph sms-hs-course-card__ph--bsc" aria-hidden="true"></div>
                </div>
                <div class="sms-hs-course-card__body">
                    <h3 class="sms-hs-course-card__name">BSc Nursing</h3>
                    <p class="sms-hs-course-card__desc">A 4-year undergraduate degree in nursing science, affiliated with the University of Jammu. Open to students with 10+2 Medical background, with full clinical training at Government Medical College, Jammu.</p>
                    <div class="sms-hs-course-card__key-grid" aria-label="Key details">
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Duration</span>
                            <span class="sms-hs-course-card__key-value">4 Years</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Eligibility</span>
                            <span class="sms-hs-course-card__key-value">10+2 Medical</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Seats</span>
                            <span class="sms-hs-course-card__key-value">100</span>
                        </div>
                    </div>
                    <div class="sms-hs-course-card__pills" aria-label="Programme highlights">
                        <span class="sms-hs-course-card__pill">4 Years</span>
                        <span class="sms-hs-course-card__pill">Univ. of Jammu</span>
                        <span class="sms-hs-course-card__pill">10+2 Medical</span>
                        <span class="sms-hs-course-card__pill">GMC Training</span>
                    </div>
                </div>
                <div class="sms-hs-course-card__foot">
                    <span class="sms-hs-course-card__foot-left">View programme details →</span>
                    <span class="sms-hs-course-card__foot-right">Duration: 4 Years</span>
                </div>
            </a>
            <a href="course.php?code=gnm" class="sms-hs-course-card fade-up">
                <div class="sms-hs-course-card__media-wrap">
                    <span class="sms-hs-course-card__badge">3-year diploma</span>
                    <div class="sms-hs-course-card__ph sms-hs-course-card__ph--gnm" aria-hidden="true"></div>
                </div>
                <div class="sms-hs-course-card__body">
                    <h3 class="sms-hs-course-card__name">GNM — General Nursing &amp; Midwifery</h3>
                    <p class="sms-hs-course-card__desc">A 3-year diploma in General Nursing &amp; Midwifery, open to students with 10+2 from any stream. Hands-on clinical training at GMC Jammu with JKBOPEE and direct quota admission options.</p>
                    <div class="sms-hs-course-card__key-grid" aria-label="Key details">
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Duration</span>
                            <span class="sms-hs-course-card__key-value">3 Years</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Eligibility</span>
                            <span class="sms-hs-course-card__key-value">Any 10+2</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Seats</span>
                            <span class="sms-hs-course-card__key-value">100</span>
                        </div>
                    </div>
                    <div class="sms-hs-course-card__pills" aria-label="Programme highlights">
                        <span class="sms-hs-course-card__pill">3 Years</span>
                        <span class="sms-hs-course-card__pill">Any 10+2</span>
                        <span class="sms-hs-course-card__pill">GMC Training</span>
                        <span class="sms-hs-course-card__pill">JKBOPEE Eligible</span>
                    </div>
                </div>
                <div class="sms-hs-course-card__foot">
                    <span class="sms-hs-course-card__foot-left">View programme details →</span>
                    <span class="sms-hs-course-card__foot-right">Duration: 3 Years</span>
                </div>
            </a>
        </div>
    </div>
</section>

<?php
$class = 'rts-footer-padding v_2';
$cclass = 'v_1';
include_once __DIR__ . '/partials/footer/footer-sms.php';
$content = ob_get_clean();
include __DIR__ . '/base.php';
