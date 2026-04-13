<?php
/**
 * Info strip — 3 facts below hero (affiliation, clinical, contact).
 */
$phone1 = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$phone2 = defined('SMS_PHONE_2') ? SMS_PHONE_2 : '';
$email = defined('SMS_EMAIL') ? SMS_EMAIL : '';
$tel1 = $phone1 ? preg_replace('/\s+/', '', $phone1) : '';
$tel2 = $phone2 ? preg_replace('/\s+/', '', $phone2) : '';
?>
<section class="section sms-info-strip sms-info-strip--triple sms-info-strip--v2" aria-label="Highlights">
    <div class="container">
        <div class="row g-0 sms-info-strip__row sms-info-strip__row--v2 justify-content-center">
            <div class="col-12 col-md-4">
                <div class="sms-info-strip__cell">
                    <div class="sms-info-strip__item">
                        <span class="sms-info-strip__icon" aria-hidden="true"><?php sms_svg_icon('document', 'sms-svg sms-svg--md'); ?></span>
                        <div class="sms-info-strip__text">
                            <h3 class="sms-info-strip__label">Affiliated with University of Jammu</h3>
                            <p class="sms-info-strip__desc">Nationally recognised nursing qualifications</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="sms-info-strip__cell">
                    <div class="sms-info-strip__item">
                        <span class="sms-info-strip__icon" aria-hidden="true"><?php sms_svg_icon('pin', 'sms-svg sms-svg--md'); ?></span>
                        <div class="sms-info-strip__text">
                            <h3 class="sms-info-strip__label">Clinical Training at GMC Jammu</h3>
                            <p class="sms-info-strip__desc">Government Medical College, Jammu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="sms-info-strip__cell">
                    <div class="sms-info-strip__item">
                        <span class="sms-info-strip__icon" aria-hidden="true"><?php sms_svg_icon('phone', 'sms-svg sms-svg--md'); ?></span>
                        <div class="sms-info-strip__text">
                            <h3 class="sms-info-strip__label sms-info-strip__label--phones">
                                <?php if ($phone1) : ?><a href="tel:<?php echo htmlspecialchars($tel1); ?>"><?php echo htmlspecialchars($phone1); ?></a><?php endif; ?>
                                <?php if ($phone1 && $phone2) : ?><span class="sms-info-strip__sep"> · </span><?php endif; ?>
                                <?php if ($phone2) : ?><a href="tel:<?php echo htmlspecialchars($tel2); ?>"><?php echo htmlspecialchars($phone2); ?></a><?php endif; ?>
                            </h3>
                            <?php if ($email) : ?>
                            <p class="sms-info-strip__desc sms-info-strip__desc--email"><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
