<?php
/**
 * Homepage FAQ — two-column: photo + accordion (SMS crimson accents).
 */
if (!defined('SMS_STOCK_FAQ_SIDE')) {
    require_once dirname(__DIR__, 2) . '/config.php';
}
$_faq_img = defined('SMS_STOCK_FAQ_SIDE') ? SMS_STOCK_FAQ_SIDE : 'assets/images/about/about-campus-02.jpg';
$_faq_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_faq_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_faq_courses = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
?>
<section class="section section--white sms-home-faq" id="faq" aria-labelledby="sms-home-faq-title">
    <div class="sms-hs-container">
        <header class="sms-home-faq__head fade-up">
            <p class="eyebrow sms-home-faq__eyebrow">
                <span class="eyebrow-line" aria-hidden="true"></span>
                <span class="eyebrow-text">FAQ &amp; answers</span>
            </p>
            <h2 class="section-heading sms-home-faq__title" id="sms-home-faq-title">Answers to your questions, every step of the way.</h2>
            <p class="section-subtext sms-home-faq__sub">Admissions, programmes, clinical training, and campus life — clear answers for students and parents.</p>
        </header>
        <div class="sms-home-faq__grid">
            <figure class="sms-home-faq__media fade-up">
                <img
                    class="sms-home-faq__img"
                    src="<?php echo htmlspecialchars($_faq_img); ?>"
                    alt="Students on campus at SMS College"
                    width="800"
                    height="800"
                    loading="lazy"
                    decoding="async"
                >
            </figure>
            <div class="sms-home-faq__acc fade-up" data-sms-home-faq>
                <div class="sms-faq-item is-open">
                    <button type="button" class="sms-faq-item__btn" aria-expanded="true" id="sms-faq-btn-1" aria-controls="sms-faq-panel-1">
                        <span class="sms-faq-item__q">Who can apply for BSc Nursing and GNM?</span>
                        <span class="sms-faq-item__icon" aria-hidden="true"></span>
                    </button>
                    <div class="sms-faq-item__panel-wrap">
                        <div id="sms-faq-panel-1" class="sms-faq-item__panel" role="region" aria-labelledby="sms-faq-btn-1">
                            <p class="sms-faq-item__a"><strong>BSc Nursing</strong> requires 10+2 with Physics, Chemistry, Biology and English (PCB). <strong>GNM</strong> is open to 10+2 from any stream. Both programmes follow council and university norms; we help you check eligibility before you apply.</p>
                        </div>
                    </div>
                </div>
                <div class="sms-faq-item">
                    <button type="button" class="sms-faq-item__btn" aria-expanded="false" id="sms-faq-btn-2" aria-controls="sms-faq-panel-2">
                        <span class="sms-faq-item__q">What is the difference between JKBOPEE and management quota?</span>
                        <span class="sms-faq-item__icon" aria-hidden="true"></span>
                    </button>
                    <div class="sms-faq-item__panel-wrap">
                        <div id="sms-faq-panel-2" class="sms-faq-item__panel" role="region" aria-labelledby="sms-faq-btn-2">
                            <p class="sms-faq-item__a"><strong>JKBOPEE</strong> admissions are through the state entrance process. <strong>Direct / management quota</strong> seats are filled as per college and government guidelines. Our office explains timelines, documents, and fees for both paths.</p>
                        </div>
                    </div>
                </div>
                <div class="sms-faq-item">
                    <button type="button" class="sms-faq-item__btn" aria-expanded="false" id="sms-faq-btn-3" aria-controls="sms-faq-panel-3">
                        <span class="sms-faq-item__q">Where does clinical training take place?</span>
                        <span class="sms-faq-item__icon" aria-hidden="true"></span>
                    </button>
                    <div class="sms-faq-item__panel-wrap">
                        <div id="sms-faq-panel-3" class="sms-faq-item__panel" role="region" aria-labelledby="sms-faq-btn-3">
                            <p class="sms-faq-item__a">Students complete structured clinical training at <strong>Government Medical College (GMC) Jammu</strong>, alongside skills practice in our on-campus nursing laboratories. This combination builds real ward confidence before you graduate.</p>
                        </div>
                    </div>
                </div>
                <div class="sms-faq-item">
                    <button type="button" class="sms-faq-item__btn" aria-expanded="false" id="sms-faq-btn-4" aria-controls="sms-faq-panel-4">
                        <span class="sms-faq-item__q">Do you provide hostel, transport, and library facilities?</span>
                        <span class="sms-faq-item__icon" aria-hidden="true"></span>
                    </button>
                    <div class="sms-faq-item__panel-wrap">
                        <div id="sms-faq-panel-4" class="sms-faq-item__panel" role="region" aria-labelledby="sms-faq-btn-4">
                            <p class="sms-faq-item__a">Yes. We offer <strong>hostel</strong> accommodation (subject to availability), <strong>transport</strong> routes for day scholars, a <strong>digital library</strong> with Wi-Fi, and modern labs — so you can focus on learning and clinical preparation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sms-home-faq__actions fade-up">
            <a class="sms-home-faq__btn sms-home-faq__btn--primary" href="<?php echo htmlspecialchars($_faq_apply, ENT_QUOTES, 'UTF-8'); ?>">Apply for admission</a>
            <a class="sms-home-faq__btn sms-home-faq__btn--outline" href="<?php echo htmlspecialchars($_faq_contact, ENT_QUOTES, 'UTF-8'); ?>">Contact us</a>
            <a class="sms-home-faq__btn sms-home-faq__btn--outline" href="<?php echo htmlspecialchars($_faq_courses, ENT_QUOTES, 'UTF-8'); ?>">View programmes</a>
        </div>
    </div>
</section>
