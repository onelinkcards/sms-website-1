<?php
require_once __DIR__ . '/config.php';
$page_title = 'About Us';
$body_class = 'page sms-inner sms-about-page';
$sms_active_nav = 'about';
$_a_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_a_gallery = defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php';
$_a_short = defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'SMS College';
$_a_phone = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '9149585221';
$_a_tel = $_a_phone !== '' ? preg_replace('/\s+/', '', $_a_phone) : '';
$_a_split_img = defined('SMS_STOCK_ABOUT_COLUMN') && SMS_STOCK_ABOUT_COLUMN !== ''
    ? SMS_STOCK_ABOUT_COLUMN
    : (defined('SMS_PAGE_HERO_ABOUT') ? SMS_PAGE_HERO_ABOUT : '');
ob_start();
include_once __DIR__ . '/partials/header/header-sms.php';

$sms_page_hero_title = 'About Us';
$sms_page_hero_crumb = 'About';
$sms_page_hero_image = defined('SMS_PAGE_HERO_ABOUT') ? SMS_PAGE_HERO_ABOUT : (defined('SMS_STOCK_BREADCRUMB') ? SMS_STOCK_BREADCRUMB : '');
include_once __DIR__ . '/partials/components/sms-page-hero.php';
?>

<div class="sms-about-body">

<!-- Section 1 — Who we are -->
<section class="sms-about-body__s1" aria-labelledby="sms-about-who-heading">
    <div class="sms-about-body__contain">
        <div class="sms-about-body__s1-grid">
            <div class="sms-about-body__s1-media fade-up">
                <?php if ($_a_split_img !== '') : ?>
                <img class="sms-about-body__s1-img" src="<?php echo htmlspecialchars($_a_split_img, ENT_QUOTES, 'UTF-8'); ?>" alt="Students and campus at <?php echo htmlspecialchars($_a_short, ENT_QUOTES, 'UTF-8'); ?>" width="800" height="1000" loading="lazy" decoding="async" sizes="(max-width: 767px) 100vw, 50vw">
                <?php else : ?>
                <div class="sms-about-body__s1-ph" role="img" aria-label="Campus photo placeholder"></div>
                <?php endif; ?>
            </div>
            <div class="sms-about-body__s1-copy fade-up">
                <div class="sms-about-body__eyebrow">
                    <span class="sms-about-body__eyebrow-line" aria-hidden="true"></span>
                    <span class="sms-about-body__eyebrow-text">About <?php echo htmlspecialchars($_a_short, ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
                <h2 class="sms-about-body__h2" id="sms-about-who-heading">Who We Are</h2>
                <p class="sms-about-body__lead">We focus on nurses who are clinically competent, ethically grounded, and ready to serve across J&amp;K and beyond. Modern classrooms, eight nursing laboratories, a digital library, hostel, and transport help students stay focused on learning.</p>
                <div class="sms-about-body__mv-row">
                    <span class="sms-about-body__mv-ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.75"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.75"/><circle cx="12" cy="12" r="1.25" fill="currentColor"/></svg>
                    </span>
                    <div>
                        <span class="sms-about-body__mv-label">Mission</span>
                        <p class="sms-about-body__mv-value">Recognised nursing education with hands-on training and values-led mentoring.</p>
                    </div>
                </div>
                <div class="sms-about-body__mv-row">
                    <span class="sms-about-body__mv-ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.75"/></svg>
                    </span>
                    <div>
                        <span class="sms-about-body__mv-label">Vision</span>
                        <p class="sms-about-body__mv-value">A trusted college for nursing and allied healthcare in the region.</p>
                    </div>
                </div>
                <div class="sms-about-body__cta-row">
                    <a class="sms-about-body__btn-primary" href="<?php echo htmlspecialchars($_a_apply, ENT_QUOTES, 'UTF-8'); ?>">Apply for admission →</a>
                    <a class="sms-about-body__link-gallery" href="<?php echo htmlspecialchars($_a_gallery, ENT_QUOTES, 'UTF-8'); ?>">Campus gallery →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 — Approvals & partnerships -->
<section class="sms-about-body__s2" aria-labelledby="sms-about-approvals-heading">
    <div class="sms-about-body__contain">
        <header class="sms-about-body__s2-head">
            <div class="sms-about-body__eyebrow">
                <span class="sms-about-body__eyebrow-line" aria-hidden="true"></span>
                <span class="sms-about-body__eyebrow-text">At a glance</span>
            </div>
            <h2 class="sms-about-body__h2--s2" id="sms-about-approvals-heading">Approvals &amp; Partnerships</h2>
        </header>
        <div class="sms-about-body__cards">
            <article class="sms-about-body__card fade-up">
                <div class="sms-about-body__card-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="9" r="4" stroke="currentColor" stroke-width="1.65"/><path d="M8.5 13L6 22l6-3 6 3-2.5-9" stroke="currentColor" stroke-width="1.65" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="sms-about-body__card-title">University of Jammu</h3>
                <p class="sms-about-body__card-desc">Formal affiliation for our degree and diploma programmes.</p>
            </article>
            <article class="sms-about-body__card fade-up">
                <div class="sms-about-body__card-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 3l8 4v6c0 5-3.5 9-8 10-4.5-1-8-5-8-10V7l8-4z" stroke="currentColor" stroke-width="1.65" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="sms-about-body__card-title">J&amp;K State Health Nursing Council</h3>
                <p class="sms-about-body__card-desc">Programmes approved for professional registration pathways.</p>
            </article>
            <article class="sms-about-body__card fade-up">
                <div class="sms-about-body__card-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 21V8l8-5 8 5v13" stroke="currentColor" stroke-width="1.65" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 21V12h6v9" stroke="currentColor" stroke-width="1.65" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="sms-about-body__card-title">GMC Jammu</h3>
                <p class="sms-about-body__card-desc">Structured clinical training at Government Medical College, Jammu.</p>
            </article>
            <article class="sms-about-body__card fade-up">
                <div class="sms-about-body__card-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 10v1.8M2 10l10-5 10 5-10 5-10-5z" stroke="currentColor" stroke-width="1.55" stroke-linejoin="round"/><path d="M6 12v5c0 1.8 2.2 3 6 3s6-1.2 6-3v-5" stroke="currentColor" stroke-width="1.55" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3 class="sms-about-body__card-title">Admissions</h3>
                <p class="sms-about-body__card-desc">JKBOPEE and management quota — we support you through the process.</p>
            </article>
        </div>
    </div>
</section>

<!-- Section 3 — Stats -->
<section class="sms-about-body__s3" aria-label="College facts">
    <div class="sms-about-body__contain">
        <div class="sms-about-body__stats">
            <div class="sms-about-body__stat fade-up">
                <p class="sms-about-body__stat-num">2025</p>
                <p class="sms-about-body__stat-label">Year established</p>
            </div>
            <div class="sms-about-body__stat fade-up">
                <p class="sms-about-body__stat-num">2</p>
                <p class="sms-about-body__stat-label">Programmes offered</p>
            </div>
            <div class="sms-about-body__stat fade-up">
                <p class="sms-about-body__stat-num">8</p>
                <p class="sms-about-body__stat-label">Nursing laboratories</p>
            </div>
            <div class="sms-about-body__stat fade-up">
                <p class="sms-about-body__stat-num">GMC</p>
                <p class="sms-about-body__stat-label">Clinical partner</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4 — Admission CTA -->
<section class="sms-about-body__s4" aria-labelledby="sms-about-cta-heading">
    <div class="sms-about-body__contain">
        <div class="sms-about-body__s4-inner">
            <div>
                <p class="sms-about-body__s4-kicker">2025 Admissions open</p>
                <h2 class="sms-about-body__s4-title" id="sms-about-cta-heading">Ready to Join SMS College?</h2>
                <p class="sms-about-body__s4-sub">Apply for BSc Nursing or GNM — JKBOPEE and Direct Quota available.</p>
            </div>
            <div class="sms-about-body__s4-actions">
                <a class="sms-about-body__s4-btn" href="<?php echo htmlspecialchars($_a_apply, ENT_QUOTES, 'UTF-8'); ?>">Apply Now →</a>
                <?php if ($_a_tel !== '') : ?>
                <p class="sms-about-body__s4-call">Call <a href="tel:<?php echo htmlspecialchars($_a_tel, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($_a_phone, ENT_QUOTES, 'UTF-8'); ?></a></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

</div>

<?php
$class = 'rts-footer-padding v_2';
$cclass = 'v_1';
include_once __DIR__ . '/partials/footer/footer-sms.php';
$content = ob_get_clean();
include __DIR__ . '/base.php';
