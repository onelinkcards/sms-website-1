<?php
/**
 * About block — final: two-column (copy + single image). Data strip & stats bar unchanged in index.php.
 */
if (!defined('SMS_STOCK_ABOUT_COLUMN')) {
    require_once dirname(__DIR__, 2) . '/config.php';
}
$_ar_short = isset($_sms_short) ? $_sms_short : (defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'SMS College');
$_ar_about = isset($_sms_about_url) ? $_sms_about_url : (defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php');
$_ar_apply = isset($_sms_apply) ? $_sms_apply : (defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php');
$_ar_img = defined('SMS_STOCK_ABOUT_COLUMN') && SMS_STOCK_ABOUT_COLUMN !== ''
    ? SMS_STOCK_ABOUT_COLUMN
    : (defined('SMS_STOCK_HERO_1') ? SMS_STOCK_HERO_1 : '');
?>
<div class="sms-about-rebuild">
    <div class="sms-about-rebuild__container">
        <div class="sms-about-rebuild__grid">
            <div class="sms-about-rebuild__text fade-up">
                <div class="sms-about-rebuild__eyebrow">
                    <span class="sms-about-rebuild__eyebrow-line" aria-hidden="true"></span>
                    <span class="sms-about-rebuild__eyebrow-text">Excellence in nursing education</span>
                </div>

                <h2 class="sms-about-rebuild__title" id="sms-about-heading">Quality Nursing Education for<br class="sms-about-rebuild__title-br" aria-hidden="true">Jammu &amp; Kashmir.</h2>

                <p class="sms-about-rebuild__body">
                    Sant Manjit Singh College prepares nurses through University of Jammu affiliated programmes, clinical training at GMC Jammu, and modern lab infrastructure — giving every student a clear path into healthcare.
                </p>

                <div class="sms-about-rebuild__stats" role="presentation">
                    <div class="sms-about-rebuild__stat">
                        <span class="sms-about-rebuild__stat-ico" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.31"/><path d="M14 9.3V2"/><path d="M8.5 2h7"/><path d="M14 9.3a6.5 6.5 0 1 1-4 0"/><path d="M5.52 16h12.96"/></svg>
                        </span>
                        <div class="sms-about-rebuild__stat-copy">
                            <span class="sms-about-rebuild__stat-value">8+</span>
                            <span class="sms-about-rebuild__stat-label">Nursing laboratories</span>
                            <p class="sms-about-rebuild__stat-desc">Modern labs for clinical skills, simulation, and hands-on learning.</p>
                        </div>
                    </div>
                    <div class="sms-about-rebuild__stat">
                        <span class="sms-about-rebuild__stat-ico" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
                        </span>
                        <div class="sms-about-rebuild__stat-copy">
                            <span class="sms-about-rebuild__stat-value">GMC</span>
                            <span class="sms-about-rebuild__stat-label">Clinical training</span>
                            <p class="sms-about-rebuild__stat-desc">Structured ward exposure at Government Medical College, Jammu.</p>
                        </div>
                    </div>
                </div>

                <div class="sms-about-rebuild__actions">
                    <a class="sms-about-rebuild__btn sms-about-rebuild__btn--primary" href="<?php echo htmlspecialchars($_ar_apply); ?>">Apply now&nbsp;→</a>
                    <a class="sms-about-rebuild__btn sms-about-rebuild__btn--outline" href="<?php echo htmlspecialchars($_ar_about); ?>">Learn more about us</a>
                </div>
            </div>

            <div class="sms-about-rebuild__media fade-up">
                <div class="sms-about-rebuild__figure">
                    <img class="sms-about-rebuild__photo sms-about-rebuild__photo--campus" src="assets/images/hero/q1.png" alt="Campus and college building at <?php echo htmlspecialchars($_ar_short); ?>" width="1600" height="1000" loading="lazy" decoding="async" sizes="(max-width: 767px) 100vw, 50vw">
                    <div class="sms-about-rebuild__float-card" aria-hidden="true">
                        <span class="sms-about-rebuild__float-ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12 3 2.582 9.084a1 1 0 0 0 0 1.832l9.538 5.9a1 1 0 0 0 1.162 0l9.538-5.9a1 1 0 0 0-.019-1.838Z"/><path d="M22 10v6"/><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/></svg>
                        </span>
                        <div class="sms-about-rebuild__float-text">
                            <span class="sms-about-rebuild__float-value">University of Jammu</span>
                            <span class="sms-about-rebuild__float-sub">Affiliated programme</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
