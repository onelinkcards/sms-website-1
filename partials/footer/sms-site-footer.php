<?php
/**
 * Maroon 4-column site footer + floating admission CTA (overlap).
 * Self-contained — safe to include from any page after config.php.
 */
if (!defined('SMS_SITE_NAME')) {
    require_once dirname(__DIR__, 2) . '/config.php';
}

$_sf_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_sf_courses = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
$_sf_gallery = defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php';
$_sf_about = defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php';
$_sf_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_sf_site = defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'Sant Manjit Singh College of Nursing & Allied Healthcare';
$_sf_address = defined('SMS_ADDRESS') ? SMS_ADDRESS : '';
$_sf_address_full = $_sf_address !== '' ? $_sf_address : 'Babliana Jeevan Nagar Road, Near Airport, Jammu — 180001, Jammu & Kashmir';
$_sf_phone = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$_sf_phone2 = defined('SMS_PHONE_2') ? SMS_PHONE_2 : '';
$_sf_tel = $_sf_phone !== '' ? preg_replace('/\s+/', '', $_sf_phone) : '';
$_sf_tel2 = $_sf_phone2 !== '' ? preg_replace('/\s+/', '', $_sf_phone2) : '';
$_sf_email = defined('SMS_EMAIL') ? SMS_EMAIL : '';
$_sf_digits = preg_replace('/\D/', '', $_sf_phone);
$_sf_wa = (strlen($_sf_digits) >= 10)
    ? 'https://wa.me/91' . substr($_sf_digits, -10)
    : '#';
$_sf_logo = defined('SMS_LOGO_FOOTER') ? SMS_LOGO_FOOTER : (defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png');
$_sf_crest = defined('SMS_LOGO_CREST') ? SMS_LOGO_CREST : 'assets/images/logo/sms-college-crest.png';
?>
<!-- Site footer — same maroon layout on all SMS pages -->
<footer class="sms-hs-footer sms-hs-footer--eduvet" id="site-footer">
    <div class="sms-hs-footer__overlap">
        <div class="sms-hs-container">
            <div class="sms-hs-footer__cta sms-hs-footer__cta--apply">
                <div class="sms-hs-footer__cta-brand">
                    <span class="sms-hs-footer__cta-crest-wrap" aria-hidden="true">
                        <img class="sms-hs-footer__cta-crest" src="<?php echo htmlspecialchars($_sf_crest); ?>" alt="" width="72" height="72" loading="lazy" decoding="async">
                    </span>
                    <div class="sms-hs-footer__cta-brand-text">
                        <p class="sms-hs-footer__cta-eyebrow">Admissions</p>
                        <h2 class="sms-hs-footer__cta-title">Apply for admission</h2>
                    </div>
                </div>
                <div class="sms-hs-footer__cta-body">
                    <p class="sms-hs-footer__cta-text">BSc Nursing &amp; GNM — JKBOPEE &amp; management quota. Get eligibility guidance and your next steps.</p>
                    <a class="sms-hs-footer__apply-btn btn-primary" href="<?php echo htmlspecialchars($_sf_apply); ?>">Apply now&nbsp;→</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sms-hs-footer__maroon">
        <div class="sms-hs-footer__maroon-bg" aria-hidden="true"></div>
        <div class="sms-hs-container sms-hs-footer__main">
            <div class="sms-hs-footer__brand">
                <a class="sms-hs-footer__logo-box sms-hs-footer__logo-box--knockout" href="index.php" aria-label="<?php echo htmlspecialchars($_sf_site); ?> — Home">
                    <img class="sms-hs-footer__logo sms-hs-footer__logo--header sms-hs-footer__logo--white" src="<?php echo htmlspecialchars($_sf_logo); ?>" alt="<?php echo htmlspecialchars($_sf_site); ?>" width="300" height="76" loading="lazy" decoding="async">
                </a>
                <p class="sms-hs-footer__fdesc"><strong>SMS College · Jammu</strong> — A premier nursing college in Jammu offering BSc Nursing and GNM programmes affiliated with the University of Jammu, approved by J&amp;K State Health Nursing Council.</p>
                <div class="sms-hs-footer__social">
                    <a href="#" aria-label="Instagram"><?php sms_svg_icon('instagram', 'sms-svg sms-svg--footer-social'); ?></a>
                    <a href="<?php echo htmlspecialchars($_sf_wa); ?>" aria-label="WhatsApp"<?php echo $_sf_wa === '#' ? '' : ' target="_blank" rel="noopener noreferrer"'; ?>><?php sms_svg_icon('whatsapp', 'sms-svg sms-svg--footer-social'); ?></a>
                </div>
            </div>

            <div class="sms-hs-footer__col sms-hs-footer__col--essential">
                <h4 class="sms-hs-footer__col-title">Quick links</h4>
                <div class="sms-hs-footer__link-cols">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="<?php echo htmlspecialchars($_sf_about); ?>">About</a></li>
                        <li><a href="<?php echo htmlspecialchars($_sf_courses, ENT_QUOTES, 'UTF-8'); ?>">Courses</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo htmlspecialchars($_sf_apply); ?>">Admissions</a></li>
                        <li><a href="<?php echo htmlspecialchars($_sf_gallery); ?>">Gallery</a></li>
                        <li><a href="<?php echo htmlspecialchars($_sf_contact); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="sms-hs-footer__col">
                <h4 class="sms-hs-footer__col-title">Programmes</h4>
                <ul>
                    <li><a href="course.php?code=bsc">BSc Nursing</a></li>
                    <li><a href="course.php?code=gnm">GNM Programme</a></li>
                    <li><a href="<?php echo htmlspecialchars($_sf_apply); ?>">Post Basic Nursing</a></li>
                    <li><a href="<?php echo htmlspecialchars($_sf_apply); ?>">Admission Process</a></li>
                    <li><a href="<?php echo htmlspecialchars($_sf_contact); ?>">JKBOPEE Guidance</a></li>
                    <li><a href="<?php echo htmlspecialchars($_sf_apply); ?>">Eligibility Criteria</a></li>
                </ul>
            </div>

            <div class="sms-hs-footer__col sms-hs-footer__col--touch">
                <h4 class="sms-hs-footer__col-title">Contact</h4>
                <div class="sms-hs-footer__touch">
                    <i class="fa-light fa-location-dot" aria-hidden="true"></i>
                    <div class="sms-hs-footer__touch-text">
                        <span class="sms-hs-footer__touch-primary"><?php echo htmlspecialchars($_sf_address_full); ?></span>
                        <span class="sms-hs-footer__touch-label">Address</span>
                    </div>
                </div>
                <?php if ($_sf_phone !== '' && $_sf_tel !== '') : ?>
                <div class="sms-hs-footer__touch">
                    <i class="fa-light fa-phone" aria-hidden="true"></i>
                    <div class="sms-hs-footer__touch-text">
                        <a class="sms-hs-footer__touch-primary" href="tel:<?php echo htmlspecialchars($_sf_tel); ?>"><?php echo htmlspecialchars($_sf_phone); ?></a>
                        <span class="sms-hs-footer__touch-label">Phone</span>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($_sf_phone2 !== '' && $_sf_tel2 !== '') : ?>
                <div class="sms-hs-footer__touch">
                    <i class="fa-light fa-phone" aria-hidden="true"></i>
                    <div class="sms-hs-footer__touch-text">
                        <a class="sms-hs-footer__touch-primary" href="tel:<?php echo htmlspecialchars($_sf_tel2); ?>"><?php echo htmlspecialchars($_sf_phone2); ?></a>
                        <span class="sms-hs-footer__touch-label">Phone (alternate)</span>
                    </div>
                </div>
                <?php endif; ?>
                <?php if ($_sf_email !== '') : ?>
                <div class="sms-hs-footer__touch">
                    <i class="fa-light fa-envelope" aria-hidden="true"></i>
                    <div class="sms-hs-footer__touch-text">
                        <a class="sms-hs-footer__touch-primary" href="mailto:<?php echo htmlspecialchars($_sf_email); ?>"><?php echo htmlspecialchars($_sf_email); ?></a>
                        <span class="sms-hs-footer__touch-label">Email</span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="sms-hs-footer__bottom">
            <div class="sms-hs-container sms-hs-footer__bottom-inner">
                <a class="sms-hs-footer__logo-box sms-hs-footer__logo-box--sm sms-hs-footer__logo-box--knockout" href="index.php" aria-label="Home">
                    <img class="sms-hs-footer__logo-sm sms-hs-footer__logo--header sms-hs-footer__logo--white sms-hs-footer__logo--compact" src="<?php echo htmlspecialchars($_sf_logo); ?>" alt="" width="300" height="76" loading="lazy" decoding="async">
                </a>
                <p class="sms-hs-footer__copyright">© <?php echo date('Y'); ?> <?php echo htmlspecialchars($_sf_site); ?>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
