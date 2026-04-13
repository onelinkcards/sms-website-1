<?php
/**
 * Admission enquiry form — POSTs to sms-enquiry-submit.php (email notification).
 */
$sfx = isset($sms_enquiry_suffix) ? preg_replace('/[^a-z0-9_-]/i', '', (string) $sms_enquiry_suffix) : 'hero';
$returnUrl = isset($sms_enquiry_return_url) ? (string) $sms_enquiry_return_url : 'contact.php';
$returnBase = basename($returnUrl);
if (!preg_match('/^[a-z0-9_.-]+\.php$/i', $returnBase)) {
    $returnBase = 'contact.php';
}
$formAction = isset($sms_enquiry_form_action) ? (string) $sms_enquiry_form_action : 'sms-enquiry-submit.php';
$_from_flag = isset($sms_enquiry_from_flag) ? preg_replace('/[^a-z0-9_-]/i', '', (string) $sms_enquiry_from_flag) : $sfx;
$_show_message = !empty($sms_enquiry_show_message);
$_submit_label = isset($sms_enquiry_submit_label) && (string) $sms_enquiry_submit_label !== ''
    ? (string) $sms_enquiry_submit_label
    : 'Submit Enquiry';
$_submit_extra_class = ($sfx === 'admission') ? ' sms-hero-cu__submit--admission' : '';
?>
<form class="sms-hero-cu__form sms-hero-cu__form--grid sms-form--compact text-start" action="<?php echo htmlspecialchars($formAction, ENT_QUOTES, 'UTF-8'); ?>" method="post" novalidate data-sms-enquiry-form="<?php echo htmlspecialchars($sfx); ?>">
    <input type="hidden" name="redirect_ok" value="<?php echo htmlspecialchars($returnBase, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="form_source" value="<?php echo htmlspecialchars($sfx, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="from" value="<?php echo htmlspecialchars($_from_flag, ENT_QUOTES, 'UTF-8'); ?>">
    <div class="sms-enquiry-hp" aria-hidden="true">
        <label for="<?php echo htmlspecialchars($sfx); ?>-hp">Leave blank</label>
        <input type="text" id="<?php echo htmlspecialchars($sfx); ?>-hp" name="website" value="" tabindex="-1" autocomplete="off">
    </div>
    <div class="row sms-hero-cu__form-row sms-hero-cu__form-row--stack g-2 g-md-3">
        <div class="col-12">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-name">Student name</label>
            <input class="sms-hero-cu__input" id="<?php echo htmlspecialchars($sfx); ?>-name" name="name" type="text" autocomplete="name" placeholder="Full name" required>
        </div>
        <div class="col-12">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-email">Email</label>
            <input class="sms-hero-cu__input" id="<?php echo htmlspecialchars($sfx); ?>-email" name="email" type="email" autocomplete="email" placeholder="Email address" required>
        </div>
        <div class="col-12">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-phone">Mobile no.</label>
            <div class="sms-hero-cu__phone-row">
                <span class="sms-hero-cu__cc" aria-hidden="true">+91</span>
                <input class="sms-hero-cu__input sms-hero-cu__input--phone" id="<?php echo htmlspecialchars($sfx); ?>-phone" name="phone" type="tel" autocomplete="tel" inputmode="numeric" placeholder="10-digit number" required>
            </div>
        </div>
        <div class="col-6 col-lg-6">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-dob">Date of birth</label>
            <input class="sms-hero-cu__input" id="<?php echo htmlspecialchars($sfx); ?>-dob" name="dob" type="text" inputmode="numeric" autocomplete="bday" placeholder="DD/MM/YYYY" required>
        </div>
        <div class="col-6 col-lg-6">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-city">City</label>
            <input class="sms-hero-cu__input" id="<?php echo htmlspecialchars($sfx); ?>-city" name="city" type="text" placeholder="City" required>
        </div>
        <div class="col-6 col-lg-6">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-course">Course</label>
            <select class="sms-hero-cu__input sms-hero-cu__select" id="<?php echo htmlspecialchars($sfx); ?>-course" name="course" required>
                <option value="">Course</option>
                <option value="bsc">BSc Nursing</option>
                <option value="gnm">GNM</option>
            </select>
        </div>
        <div class="col-6 col-lg-6">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-program">Session</label>
            <select class="sms-hero-cu__input sms-hero-cu__select" id="<?php echo htmlspecialchars($sfx); ?>-program" name="session" required>
                <option value="">Session</option>
                <option value="current">Current</option>
                <option value="next">Next</option>
                <option value="unsure">Unsure</option>
            </select>
        </div>
        <?php if ($_show_message) : ?>
        <div class="col-12">
            <label class="sms-hero-cu__label" for="<?php echo htmlspecialchars($sfx); ?>-message">Message <span class="text-muted fw-normal">(optional)</span></label>
            <textarea class="sms-hero-cu__input sms-hero-cu__textarea sms-hero-cu__textarea--short" id="<?php echo htmlspecialchars($sfx); ?>-message" name="message" rows="2" placeholder="Optional note"></textarea>
        </div>
        <?php endif; ?>
    </div>
    <button type="submit" class="sms-hero-cu__submit btn-primary<?php echo htmlspecialchars($_submit_extra_class, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($_submit_label, ENT_QUOTES, 'UTF-8'); ?></button>
    <div class="sms-hero-cu__form-foot">
        <p class="sms-hero-cu__disclaimer sms-hero-cu__disclaimer--compact">You agree to be contacted about admissions.</p>
        <?php if ($sfx === 'hero') :
            $_foot_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
            ?>
        <p class="sms-hero-cu__card-foot sms-hero-cu__card-foot--in-form">Already enquired? <a href="<?php echo htmlspecialchars($_foot_contact); ?>">Contact the office</a>
            <?php if (defined('SMS_PHONE_1') && SMS_PHONE_1) : ?>
            · <a href="tel:<?php echo htmlspecialchars(preg_replace('/\s+/', '', SMS_PHONE_1)); ?>"><?php echo htmlspecialchars(SMS_PHONE_1); ?></a>
            <?php endif; ?>
        </p>
        <?php endif; ?>
    </div>
</form>
