<!-- Apply for Admission CTA (same design as newsletter / Don't Miss Alumni) -->
<div class="rts-newsletter v_1 rts-cta-background <?= htmlspecialchars($class ?? ''); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-newsletter-box" style="background-image: url(assets/images/newsletter/bg-1.jpg);">
                    <div class="rts-newsletter-box-content rts-newsletter-box-content--apply">
                        <h4 class="newsletter-title">Apply for Admission — Start Your Journey in Healthcare</h4>
                        <p class="newsletter-desc">Admissions are open for BSc Nursing and GNM. Join Sant Manjit Singh College of Nursing & Allied Healthcare.</p>
                        <div class="newsletter-form newsletter-form--apply">
                            <a href="<?php echo defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php'; ?>" class="rts-theme-btn btn-arrow">Apply for Admission <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
