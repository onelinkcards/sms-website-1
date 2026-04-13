<footer class="sms-footer-premium">
    <div class="sms-footer-premium__inner">
        <div class="sms-footer-premium__col">
            <a href="index.php" class="sms-footer-premium__logo">
                <img class="sms-logo-header sms-logo-header--brand" src="<?php echo htmlspecialchars(defined('SMS_LOGO_FOOTER') ? SMS_LOGO_FOOTER : (defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png')); ?>" alt="<?php echo htmlspecialchars(defined('SMS_SITE_NAME') ? SMS_SITE_NAME : (defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'SMS College')); ?>" width="300" height="76" loading="lazy" decoding="async">
            </a>
            <p class="sms-footer-premium__desc">
                Sant Manjit Singh College of Nursing & Allied Healthcare is committed to excellence in nursing education and preparing the next generation of healthcare professionals in Jammu & Kashmir.
            </p>
        </div>
        <div class="sms-footer-premium__col">
            <h6>Quick Links</h6>
            <ul>
                <li><a href="<?php echo defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php'; ?>">About</a></li>
                <li><a href="#programs">Courses</a></li>
                <li><a href="<?php echo defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php'; ?>">Admissions</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
        </div>
        <div class="sms-footer-premium__col">
            <h6>Programs</h6>
            <ul>
                <li><a href="course.php?code=bsc">BSc Nursing</a></li>
                <li><a href="course.php?code=gnm">GNM Nursing</a></li>
            </ul>
        </div>
        <div class="sms-footer-premium__col">
            <h6>Contact</h6>
            <ul>
                <li><a href="https://maps.google.com/?q=<?php echo urlencode(defined('SMS_ADDRESS') ? SMS_ADDRESS : ''); ?>"><?php echo defined('SMS_ADDRESS') ? SMS_ADDRESS : ''; ?></a></li>
                <li><a href="tel:<?php echo defined('SMS_PHONE_1') ? SMS_PHONE_1 : ''; ?>"><?php echo defined('SMS_PHONE_1') ? SMS_PHONE_1 : ''; ?></a></li>
                <li><a href="mailto:<?php echo defined('SMS_EMAIL') ? SMS_EMAIL : ''; ?>"><?php echo defined('SMS_EMAIL') ? SMS_EMAIL : ''; ?></a></li>
            </ul>
        </div>
    </div>
    <div class="sms-footer-premium__bar">
        <span>Copyright &copy; <span id="year"></span> <?php echo defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'SMS College'; ?>. All rights reserved.</span>
        <span>Designed by <a href="https://repixelx.com" target="_blank" rel="noopener">RepixelX Studio</a></span>
    </div>
</footer>
