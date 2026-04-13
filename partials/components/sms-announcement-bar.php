<?php
/**
 * Announcement ticker — use below hero (cream) for CU-style strip.
 * Set $sms_announce_bar_modifier = 'dark' before include for legacy navy bar.
 */
$phone = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$email = defined('SMS_EMAIL') ? SMS_EMAIL : '';
$apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$bar_theme = isset($sms_announce_bar_modifier) && $sms_announce_bar_modifier === 'dark' ? 'dark' : 'cream';
$bar_class = 'sms-announcement-bar sms-announcement-bar--' . $bar_theme;
?>
<div class="<?php echo htmlspecialchars($bar_class); ?>" role="region" aria-label="College announcements">
    <div class="sms-announcement-bar__viewport">
        <div class="sms-announcement-bar__track">
            <?php for ($t = 0; $t < 2; $t++) : ?>
            <ul class="sms-announcement-bar__list"<?php echo $t === 1 ? ' aria-hidden="true"' : ''; ?>>
                <li class="sms-announcement-bar__item">
                    <span class="sms-announcement-bar__badge">Latest</span>
                    <span>Admissions open — BSc Nursing &amp; GNM · Enquire for eligibility &amp; JKBOPEE updates</span>
                </li>
                <li class="sms-announcement-bar__item">
                    <span class="sms-announcement-bar__badge">Affiliation</span>
                    <span>Nursing programmes aligned with University of Jammu</span>
                </li>
                <li class="sms-announcement-bar__item">
                    <span class="sms-announcement-bar__badge">Clinical</span>
                    <span>Training exposure at GMC Jammu &amp; modern campus labs</span>
                </li>
                <?php if ($phone) : ?>
                <li class="sms-announcement-bar__item sms-announcement-bar__item--link">
                    <span class="sms-announcement-bar__badge">Call</span>
                    <a href="tel:<?php echo htmlspecialchars(preg_replace('/\s+/', '', $phone)); ?>"><?php echo htmlspecialchars($phone); ?></a>
                </li>
                <?php endif; ?>
                <?php if ($email) : ?>
                <li class="sms-announcement-bar__item sms-announcement-bar__item--link">
                    <span class="sms-announcement-bar__badge">Email</span>
                    <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
                </li>
                <?php endif; ?>
                <li class="sms-announcement-bar__item sms-announcement-bar__item--link">
                    <span class="sms-announcement-bar__badge">Apply</span>
                    <a href="<?php echo htmlspecialchars($apply); ?>">Start your application</a>
                </li>
                <li class="sms-announcement-bar__item sms-announcement-bar__item--link">
                    <span class="sms-announcement-bar__badge">Visit</span>
                    <a href="<?php echo htmlspecialchars($contact); ?>">Campus visit &amp; counselling</a>
                </li>
            </ul>
            <?php endfor; ?>
        </div>
    </div>
</div>
