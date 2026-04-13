<?php
$_f_site = defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'Sant Manjit Singh College of Nursing & Allied Healthcare';
$_f_short = defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'SMS College';
$_f_addr = defined('SMS_ADDRESS') ? SMS_ADDRESS : '';
$_f_phone = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$_f_email = defined('SMS_EMAIL') ? SMS_EMAIL : '';
$_f_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_f_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_f_about = defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php';
$_f_gallery = defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php';
$_f_year = (int) date('Y');
?>
<footer class="sms-footer-ds">
    <div class="sms-footer-ds__news">
        <div>
            <h4>Subscribe to our newsletter</h4>
            <p>Updates on admissions, events, and healthcare news</p>
        </div>
        <form class="sms-footer-ds__form" action="#" method="get" onsubmit="return false;">
            <input type="email" name="email" placeholder="Enter your email" aria-label="Email for newsletter">
            <button type="submit">Subscribe →</button>
        </form>
    </div>
    <div class="sms-footer-ds__main">
        <div class="sms-footer-ds__grid">
            <div class="sms-footer-ds__col">
                <a href="index.php" class="d-inline-block mb-2">
                    <img class="sms-logo-header sms-logo-header--brand" src="<?php echo htmlspecialchars(defined('SMS_LOGO_FOOTER') ? SMS_LOGO_FOOTER : (defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png')); ?>" alt="<?php echo htmlspecialchars($_f_site); ?>" width="300" height="76" loading="lazy" decoding="async">
                </a>
                <div style="font-size:16px;font-weight:700;color:#fff;"><?php echo htmlspecialchars($_f_short); ?></div>
                <p class="sms-footer-ds__brand-desc">Nursing and allied healthcare education affiliated with University of Jammu, with clinical training at GMC Jammu.</p>
                <div class="sms-footer-ds__social">
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/91<?php echo preg_replace('/\D/', '', $_f_phone); ?>" aria-label="WhatsApp" rel="noopener"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="sms-footer-ds__col">
                <h5>Quick Links</h5>
                <a href="index.php">Home</a>
                <a href="<?php echo htmlspecialchars($_f_about); ?>">About</a>
                <a href="index.php#programs">Courses</a>
                <a href="<?php echo htmlspecialchars($_f_apply); ?>">Admissions</a>
                <a href="<?php echo htmlspecialchars($_f_gallery); ?>">Gallery</a>
                <a href="<?php echo htmlspecialchars($_f_contact); ?>">Contact</a>
            </div>
            <div class="sms-footer-ds__col">
                <h5>Programmes</h5>
                <a href="course.php?code=bsc">BSc Nursing</a>
                <a href="course.php?code=gnm">GNM</a>
                <a href="<?php echo htmlspecialchars($_f_apply); ?>#process">Admissions Process</a>
                <a href="<?php echo htmlspecialchars($_f_apply); ?>">JKBOPEE Guidance</a>
                <a href="<?php echo htmlspecialchars($_f_apply); ?>">Eligibility Criteria</a>
            </div>
            <div class="sms-footer-ds__col">
                <h5>Contact Us</h5>
                <span style="display:block;font-size:13.5px;color:rgba(255,255,255,0.65);line-height:2;"><?php echo htmlspecialchars($_f_addr); ?></span>
                <?php if ($_f_phone) : ?>
                <a href="tel:<?php echo htmlspecialchars(preg_replace('/\s+/', '', $_f_phone)); ?>"><?php echo htmlspecialchars($_f_phone); ?></a>
                <?php endif; ?>
                <?php if ($_f_email) : ?>
                <a href="mailto:<?php echo htmlspecialchars($_f_email); ?>"><?php echo htmlspecialchars($_f_email); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="sms-footer-ds__bottom">
        <span>© <?php echo $_f_year; ?> <?php echo htmlspecialchars($_f_site); ?>. All rights reserved.</span>
    </div>
</footer>
