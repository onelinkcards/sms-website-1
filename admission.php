<?php
require_once __DIR__ . '/config.php';

sms_enquiry_session_start();
$sms_enquiry_toast = null;
if (!empty($_SESSION['sms_enquiry_flash'])) {
    $tf = (string) $_SESSION['sms_enquiry_flash'];
    if (in_array($tf, ['sent', 'queued', 'error'], true)) {
        $sms_enquiry_toast = $tf;
    }
    unset($_SESSION['sms_enquiry_flash']);
}

$page_title = 'Admissions';
$body_class = 'page sms-inner sms-admission sms-admission-page';
$sms_active_nav = 'admissions';
$_sms_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_p1 = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '9149585221';
$_p2 = defined('SMS_PHONE_2') ? SMS_PHONE_2 : '9906585221';
$_email = defined('SMS_EMAIL') ? SMS_EMAIL : 'sms.conaps@gmail.com';
$_tel1 = preg_replace('/\s+/', '', $_p1);
$_tel2 = preg_replace('/\s+/', '', $_p2);
$_phones_sub = $_p1 . ($_p2 !== '' ? ' · ' . $_p2 : '');
$_addr_short = defined('SMS_ADDRESS') ? preg_replace('/\s*—\s*180001.*$/u', '', preg_replace('/,\s*Jammu\s*&\s*Kashmir\s*$/i', '', SMS_ADDRESS)) : '';
ob_start();
include_once 'partials/header/header-sms.php';

$sms_page_hero_title = 'Admissions';
$sms_page_hero_crumb = 'Admissions';
$sms_page_hero_image = defined('SMS_PAGE_HERO_ADMISSION') ? SMS_PAGE_HERO_ADMISSION : (defined('SMS_STOCK_BREADCRUMB') ? SMS_STOCK_BREADCRUMB : '');
include_once __DIR__ . '/partials/components/sms-page-hero.php';
?>

<?php include __DIR__ . '/partials/components/sms-enquiry-toast.php'; ?>

<div class="sms-adm-body">

<section class="sms-adm-body__lead-form" id="enquiry" aria-labelledby="sms-adm-h1">
    <div class="sms-adm-body__contain">
        <div class="sms-adm-body__split">
            <div class="sms-adm-body__split-left">
                <div class="sms-adm-body__eyebrow">
                    <span class="sms-adm-body__eyebrow-line" aria-hidden="true"></span>
                    <span class="sms-adm-body__eyebrow-text">Admissions 2025</span>
                </div>
                <h1 class="sms-adm-body__h1" id="sms-adm-h1">Application &amp; Enquiry</h1>
                <p class="sms-adm-body__subtitle">BSc Nursing and GNM — affiliated with University of Jammu. Complete the form and our admissions team will respond with eligibility and next steps.</p>
                <ul class="sms-adm-body__highlights" role="list">
                    <li>Recognised programmes — University of Jammu affiliation &amp; J&amp;K Nursing Council</li>
                    <li>Clinical training at GMC Jammu; modern labs and campus facilities</li>
                    <li>JKBOPEE entrance and Direct Management Quota — guidance at every step</li>
                </ul>
                <p class="sms-adm-body__split-meta">
                    <a class="sms-adm-body__split-meta-link" href="tel:<?php echo htmlspecialchars($_tel1, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($_p1, ENT_QUOTES, 'UTF-8'); ?></a><?php if ($_p2 !== '') : ?>
                    <span class="sms-adm-body__split-meta-sep" aria-hidden="true"> · </span><a class="sms-adm-body__split-meta-link" href="tel:<?php echo htmlspecialchars($_tel2, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($_p2, ENT_QUOTES, 'UTF-8'); ?></a><?php endif; ?>
                    <br>
                    <a class="sms-adm-body__split-meta-link" href="mailto:<?php echo htmlspecialchars($_email, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($_email, ENT_QUOTES, 'UTF-8'); ?></a>
                </p>
                <?php if ($_addr_short !== '') : ?>
                <p class="sms-adm-body__split-address"><?php echo htmlspecialchars($_addr_short, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
                <p class="sms-adm-body__split-more"><a class="sms-adm-body__split-more-link" href="<?php echo htmlspecialchars($_sms_contact, ENT_QUOTES, 'UTF-8'); ?>">Visit or call the office →</a></p>
            </div>
            <div class="sms-adm-body__split-right" aria-label="Application form">
                <div class="sms-admission-pro__form-shell sms-admission-form--boxed sms-admission-form--hero-wrap text-start">
                    <div class="sms-hero-cu__card sms-hero-cu__card--cu">
                        <h2 class="sms-hero-cu__card-headline">Admission Enquiry</h2>
                        <p class="sms-hero-cu__card-intro">Apply for <strong>BSc Nursing</strong> or <strong>GNM</strong>. We&apos;ll respond with eligibility and next steps.</p>
                        <p class="sms-hero-cu__card-tag">Free counselling · JKBOPEE guidance</p>
                        <?php
                        $sms_enquiry_suffix = 'admission';
                        $sms_enquiry_return_url = 'admission.php';
                        $sms_enquiry_from_flag = 'admission';
                        $sms_enquiry_show_message = true;
                        $sms_enquiry_submit_label = 'Submit application';
                        include __DIR__ . '/partials/components/sms-enquiry-form.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sms-adm-body__strip" aria-label="Contact admissions">
    <div class="sms-adm-body__strip-inner">
        <div class="sms-adm-body__strip-item sms-adm-body__strip-item--static">
            <div class="sms-adm-body__strip-cell">
                <span class="sms-adm-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 4h2.5l1.8 4.5-1.2.9a11 11 0 0 0 5.5 5.5l.9-1.2L19 16.5V19a2 2 0 0 1-2 2h-.5A16 16 0 0 1 3 5.5V5a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
                </span>
                <span class="sms-adm-body__strip-text">
                    <span class="sms-adm-body__strip-label">Need help?</span>
                    <span class="sms-adm-body__strip-value sms-adm-body__strip-value--phones"><a href="tel:<?php echo htmlspecialchars($_tel1, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($_p1, ENT_QUOTES, 'UTF-8'); ?></a><?php if ($_p2 !== '') : ?><span class="sms-adm-body__strip-sep" aria-hidden="true">&nbsp;&nbsp;&middot;&nbsp;&nbsp;</span><a href="tel:<?php echo htmlspecialchars($_tel2, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($_p2, ENT_QUOTES, 'UTF-8'); ?></a><?php endif; ?></span>
                </span>
            </div>
        </div>
        <a class="sms-adm-body__strip-item" href="mailto:<?php echo htmlspecialchars($_email, ENT_QUOTES, 'UTF-8'); ?>">
            <div class="sms-adm-body__strip-cell">
                <span class="sms-adm-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16v12H4V6z" stroke="currentColor" stroke-width="1.5"/><path d="M4 7l8 5.5L20 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </span>
                <span class="sms-adm-body__strip-text">
                    <span class="sms-adm-body__strip-label">Email</span>
                    <span class="sms-adm-body__strip-value"><?php echo htmlspecialchars($_email, ENT_QUOTES, 'UTF-8'); ?></span>
                </span>
            </div>
        </a>
        <div class="sms-adm-body__strip-item sms-adm-body__strip-item--static">
            <div class="sms-adm-body__strip-cell">
                <span class="sms-adm-body__strip-ico" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </span>
                <span class="sms-adm-body__strip-text">
                    <span class="sms-adm-body__strip-label">Office hours</span>
                    <span class="sms-adm-body__strip-value">Mon–Sat: 9AM–5PM</span>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="sms-adm-body__process" aria-labelledby="sms-adm-process-h2">
    <div class="sms-adm-body__contain">
        <header class="sms-adm-body__process-head">
            <div class="sms-adm-body__eyebrow">
                <span class="sms-adm-body__eyebrow-line" aria-hidden="true"></span>
                <span class="sms-adm-body__eyebrow-text">How to apply</span>
            </div>
            <h2 class="sms-adm-body__process-h2" id="sms-adm-process-h2">Admission Process</h2>
        </header>
        <div class="sms-adm-body__steps">
            <div class="sms-adm-body__step">
                <div class="sms-adm-body__step-num">1</div>
                <h3 class="sms-adm-body__step-title">Check Eligibility</h3>
                <p class="sms-adm-body__step-desc">BSc Nursing: 10+2 Medical. GNM: 10+2 any stream. Both JKBOPEE eligible.</p>
            </div>
            <div class="sms-adm-body__step">
                <div class="sms-adm-body__step-num">2</div>
                <h3 class="sms-adm-body__step-title">Fill the Form</h3>
                <p class="sms-adm-body__step-desc">Complete the enquiry form above. Our team will confirm your eligibility and next steps.</p>
            </div>
            <div class="sms-adm-body__step">
                <div class="sms-adm-body__step-num">3</div>
                <h3 class="sms-adm-body__step-title">Document Checklist</h3>
                <p class="sms-adm-body__step-desc">10th &amp; 12th marksheets, domicile, Aadhaar card, category certificate if applicable.</p>
            </div>
            <div class="sms-adm-body__step">
                <div class="sms-adm-body__step-num">4</div>
                <h3 class="sms-adm-body__step-title">Admission Confirmation</h3>
                <p class="sms-adm-body__step-desc">Through JKBOPEE entrance or Direct Management Quota — we&apos;ll guide you through the process.</p>
            </div>
        </div>
    </div>
</section>

<section class="sms-adm-body__cta" aria-labelledby="sms-adm-cta-h2">
    <div class="sms-adm-body__contain">
        <div class="sms-adm-body__cta-inner">
            <div>
                <p class="sms-adm-body__cta-kicker">2025 Admissions open</p>
                <h2 class="sms-adm-body__cta-title" id="sms-adm-cta-h2">Have Questions? Call Us.</h2>
                <p class="sms-adm-body__cta-sub"><?php echo htmlspecialchars($_phones_sub, ENT_QUOTES, 'UTF-8'); ?> — Monday to Saturday, 9AM to 5PM</p>
            </div>
            <div class="sms-adm-body__cta-actions">
                <a class="sms-adm-body__cta-btn" href="tel:<?php echo htmlspecialchars($_tel1, ENT_QUOTES, 'UTF-8'); ?>">Call now →</a>
            </div>
        </div>
    </div>
</section>

</div>

<?php
$class = 'rts-footer-padding v_2';
$cclass = 'v_1';
include_once 'partials/footer/footer-sms.php';
$content = ob_get_clean();
include 'base.php';
