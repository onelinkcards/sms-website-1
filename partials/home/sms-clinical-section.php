<?php
/**
 * Homepage: Clinical training at GMC Jammu (after gallery)
 */
$_cl_details = isset($_hs_apply) ? $_hs_apply : (defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php');
if (!defined('SMS_STOCK_CLINICAL_A')) {
    require_once dirname(__DIR__, 2) . '/config.php';
}
$_cl_img1 = defined('SMS_STOCK_CLINICAL_A') ? SMS_STOCK_CLINICAL_A : 'assets/images/clinical/gmc-clinical-training.jpg';
$_cl_img2 = defined('SMS_STOCK_CLINICAL_B') ? SMS_STOCK_CLINICAL_B : 'assets/images/clinical/gmc-clinical-training.jpg';
$_cl_img3 = defined('SMS_STOCK_CLINICAL_C') ? SMS_STOCK_CLINICAL_C : 'assets/images/clinical/gmc-clinical-training.jpg';
?>
<!-- Clinical — GMC Jammu (card grid) -->
<section class="section section--surface sms-hs-clinical sms-hs-clinical--rebuild" id="clinical" aria-labelledby="sms-hs-clinical-title">
    <div class="sms-hs-container">
        <header class="sms-hs-clinical__head fade-up">
            <div class="sms-hs-clinical__head-left">
                <p class="eyebrow">
                    <span class="eyebrow-line" aria-hidden="true"></span>
                    <span class="eyebrow-text">Clinical Training</span>
                </p>
                <h2 class="sms-hs-clinical__title" id="sms-hs-clinical-title">Real Clinical Experience at GMC Jammu</h2>
            </div>
            <div class="sms-hs-clinical__head-right">
                <a class="sms-hs-clinical__cta btn-primary" href="<?php echo htmlspecialchars($_cl_details); ?>">
                    <span>View all details</span>
                    <svg class="sms-hs-clinical__cta-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="m12 5 7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </header>

        <div class="sms-hs-clinical__cards">
            <article class="sms-hs-clinical__card fade-up">
                <div class="sms-hs-clinical__card-thumb sms-hs-clinical__card-thumb--a">
                    <span class="sms-hs-clinical__card-badge">Hospital wards</span>
                    <img
                        class="sms-hs-clinical__card-img"
                        src="<?php echo htmlspecialchars($_cl_img1, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="Hospital ward clinical training at GMC Jammu"
                        width="800"
                        height="440"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
                <div class="sms-hs-clinical__card-body">
                    <h3 class="sms-hs-clinical__card-title">Supervised Ward Rotations</h3>
                    <p class="sms-hs-clinical__card-desc">Rotations across medical, surgical, paediatric, maternity, and community health wards at GMC Jammu under qualified supervision.</p>
                </div>
                <footer class="sms-hs-clinical__card-footer">
                    <div class="sms-hs-clinical__card-partner">
                        <span class="sms-hs-clinical__card-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 7v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 21v-3a2 2 0 0 0-4 0v3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 9h-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <div class="sms-hs-clinical__card-meta">
                            <span class="sms-hs-clinical__card-name">GMC Jammu</span>
                            <span class="sms-hs-clinical__card-sub">Government Teaching Hospital</span>
                        </div>
                    </div>
                    <a class="sms-hs-clinical__card-arrow" href="<?php echo htmlspecialchars($_cl_details); ?>" aria-label="View details: Supervised Ward Rotations">
                        <svg class="sms-hs-clinical__card-arrow-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M7 7h10v10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 17 17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </footer>
            </article>

            <article class="sms-hs-clinical__card fade-up">
                <div class="sms-hs-clinical__card-thumb sms-hs-clinical__card-thumb--b">
                    <span class="sms-hs-clinical__card-badge">Procedures</span>
                    <img
                        class="sms-hs-clinical__card-img"
                        src="<?php echo htmlspecialchars($_cl_img2, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="Nursing students in hands-on clinical procedure training"
                        width="800"
                        height="440"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
                <div class="sms-hs-clinical__card-body">
                    <h3 class="sms-hs-clinical__card-title">Hands-on Procedure Training</h3>
                    <p class="sms-hs-clinical__card-desc">Students perform and assist in real clinical procedures under qualified nursing supervisors — building practical confidence before graduation.</p>
                </div>
                <footer class="sms-hs-clinical__card-footer">
                    <div class="sms-hs-clinical__card-partner">
                        <span class="sms-hs-clinical__card-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 2v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 2v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 15a6 6 0 0 0 12 0v-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="20" cy="10" r="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <div class="sms-hs-clinical__card-meta">
                            <span class="sms-hs-clinical__card-name">Clinical Faculty</span>
                            <span class="sms-hs-clinical__card-sub">Qualified nursing supervisors</span>
                        </div>
                    </div>
                    <a class="sms-hs-clinical__card-arrow" href="<?php echo htmlspecialchars($_cl_details); ?>" aria-label="View details: Hands-on Procedure Training">
                        <svg class="sms-hs-clinical__card-arrow-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M7 7h10v10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 17 17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </footer>
            </article>

            <article class="sms-hs-clinical__card fade-up">
                <div class="sms-hs-clinical__card-thumb sms-hs-clinical__card-thumb--c">
                    <span class="sms-hs-clinical__card-badge">Exam aligned</span>
                    <img
                        class="sms-hs-clinical__card-img"
                        src="<?php echo htmlspecialchars($_cl_img3, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="Students preparing for nursing examinations"
                        width="800"
                        height="440"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
                <div class="sms-hs-clinical__card-body">
                    <h3 class="sms-hs-clinical__card-title">JKBOPEE Exam Preparation</h3>
                    <p class="sms-hs-clinical__card-desc">Clinical exposure is directly aligned with JKBOPEE examination requirements — giving students a strong advantage in competitive nursing exams.</p>
                </div>
                <footer class="sms-hs-clinical__card-footer">
                    <div class="sms-hs-clinical__card-partner">
                        <span class="sms-hs-clinical__card-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 7v14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <div class="sms-hs-clinical__card-meta">
                            <span class="sms-hs-clinical__card-name">JKBOPEE Aligned</span>
                            <span class="sms-hs-clinical__card-sub">Structured clinical curriculum</span>
                        </div>
                    </div>
                    <a class="sms-hs-clinical__card-arrow" href="<?php echo htmlspecialchars($_cl_details); ?>" aria-label="View details: JKBOPEE Exam Preparation">
                        <svg class="sms-hs-clinical__card-arrow-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M7 7h10v10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 17 17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </footer>
            </article>
        </div>
    </div>
</section>
