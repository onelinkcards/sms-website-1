<?php
/**
 * Homepage: Courses → Footer (Hero + About live in index.php only)
 */
if (!defined('SMS_STOCK_GALLERY_1')) {
    require_once dirname(__DIR__, 2) . '/config.php';
}
$_hs_apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$_hs_courses = defined('SMS_COURSES_URL') ? SMS_COURSES_URL : 'courses.php';
$_hs_gallery = defined('SMS_GALLERY_URL') ? SMS_GALLERY_URL : 'gallery.php';
$_hs_about = defined('SMS_ABOUT_URL') ? SMS_ABOUT_URL : 'about.php';
$_hs_contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';
$_hs_site = defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'Sant Manjit Singh College of Nursing & Allied Healthcare';
$_hs_address = defined('SMS_ADDRESS') ? SMS_ADDRESS : '';
$_hs_address_full = $_hs_address !== '' ? $_hs_address : 'Babliana Jeevan Nagar Road, Near Airport, Jammu — 180001, Jammu & Kashmir';
$_hs_phone = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$_hs_phone2 = defined('SMS_PHONE_2') ? SMS_PHONE_2 : '';
$_hs_tel = $_hs_phone !== '' ? preg_replace('/\s+/', '', $_hs_phone) : '';
$_hs_tel2 = $_hs_phone2 !== '' ? preg_replace('/\s+/', '', $_hs_phone2) : '';
$_hs_email = defined('SMS_EMAIL') ? SMS_EMAIL : '';
$_hs_maps_query = 'Babliana Jeevan Nagar Road near Jammu Airport Jammu 180001';
$_hs_maps_src = 'https://maps.google.com/maps?q=' . rawurlencode($_hs_maps_query) . '&output=embed';
$_hs_maps_link = 'https://maps.google.com/?q=' . rawurlencode($_hs_maps_query);
$_hs_digits = preg_replace('/\D/', '', $_hs_phone);
$_hs_wa = (strlen($_hs_digits) >= 10)
    ? 'https://wa.me/91' . substr($_hs_digits, -10)
    : '#';
$_hs_crest = defined('SMS_LOGO_CREST') ? SMS_LOGO_CREST : 'assets/images/logo/sms-college-crest.png';
$_hs_logo = defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png';
$_hs_phone_display = trim($_hs_phone . (($_hs_phone !== '' && $_hs_phone2 !== '') ? ' · ' : '') . $_hs_phone2);
if ($_hs_phone_display === '') {
    $_hs_phone_display = '9149585221 · 9906585221';
}
$_hs_email_display = $_hs_email !== '' ? $_hs_email : 'sms.conaps@gmail.com';
$_hs_addr_display = $_hs_address_full !== '' ? $_hs_address_full : 'Babliana Jeevan Nagar Road, Near Airport, Jammu — 180001, J&K';
$_hs_tel_for_href = $_hs_tel !== '' ? $_hs_tel : ($_hs_tel2 !== '' ? $_hs_tel2 : '9149585221');
$_hs_cta_phone_note = $_hs_phone !== '' ? $_hs_phone : ($_hs_phone2 !== '' ? $_hs_phone2 : '9149585221');
$_hs_campus_mp4 = defined('SMS_CAMPUS_VIDEO_MP4') ? SMS_CAMPUS_VIDEO_MP4 : (function_exists('sms_photo_path') ? sms_photo_path('SMS_VIDEO_WITHAUDIO_F1.mp4') : ('photo/' . rawurlencode('SMS_VIDEO_WITHAUDIO_F1.mp4')));
$_hs_campus_poster = function_exists('sms_photo_path') ? sms_photo_path('IMG_0429.jpg') : ('photo/' . rawurlencode('IMG_0429.jpg'));

?>

<!-- 3. Courses — areas of study (uniform: surface + eyebrow + fade-up) -->
<section class="section section--surface sms-hs-courses" id="programs" aria-labelledby="sms-hs-courses-title">
    <div class="sms-hs-container">
        <header class="sms-hs-courses__head">
            <div class="sms-hs-courses__head-text">
                <p class="eyebrow fade-up"><span class="eyebrow-line" aria-hidden="true"></span><span class="eyebrow-text">Our Programmes</span></p>
                <h2 class="section-heading sms-hs-courses__title fade-up" id="sms-hs-courses-title">Two Pathways Into Healthcare</h2>
            </div>
            <a class="sms-hs-courses__cta sms-hs-courses__cta--text fade-up" href="<?php echo htmlspecialchars($_hs_courses); ?>">
                <span>View all programmes</span>
                <span class="sms-hs-courses__cta-arrow" aria-hidden="true">→</span>
            </a>
        </header>
        <div class="sms-hs-courses__grid sms-hs-courses__grid--two">
            <a href="course.php?code=bsc" class="sms-hs-course-card fade-up">
                <div class="sms-hs-course-card__media-wrap">
                    <span class="sms-hs-course-card__badge">4-year degree</span>
                    <div class="sms-hs-course-card__ph sms-hs-course-card__ph--bsc" aria-hidden="true"></div>
                </div>
                <div class="sms-hs-course-card__body">
                    <h3 class="sms-hs-course-card__name">BSc Nursing</h3>
                    <p class="sms-hs-course-card__desc">A 4-year undergraduate degree in nursing science, affiliated with the University of Jammu. Open to students with 10+2 Medical background, with full clinical training at Government Medical College, Jammu.</p>
                    <div class="sms-hs-course-card__key-grid" aria-label="Key details">
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Duration</span>
                            <span class="sms-hs-course-card__key-value">4 Years</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Eligibility</span>
                            <span class="sms-hs-course-card__key-value">10+2 Medical</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Seats</span>
                            <span class="sms-hs-course-card__key-value">100</span>
                        </div>
                    </div>
                    <div class="sms-hs-course-card__pills" aria-label="Programme highlights">
                        <span class="sms-hs-course-card__pill">4 Years</span>
                        <span class="sms-hs-course-card__pill">Univ. of Jammu</span>
                        <span class="sms-hs-course-card__pill">10+2 Medical</span>
                        <span class="sms-hs-course-card__pill">GMC Training</span>
                    </div>
                </div>
                <div class="sms-hs-course-card__foot">
                    <span class="sms-hs-course-card__foot-left">Learn more →</span>
                    <span class="sms-hs-course-card__foot-right">Duration: 4 Years</span>
                </div>
            </a>
            <a href="course.php?code=gnm" class="sms-hs-course-card fade-up">
                <div class="sms-hs-course-card__media-wrap">
                    <span class="sms-hs-course-card__badge">3-year diploma</span>
                    <div class="sms-hs-course-card__ph sms-hs-course-card__ph--gnm" aria-hidden="true"></div>
                </div>
                <div class="sms-hs-course-card__body">
                    <h3 class="sms-hs-course-card__name">GNM — General Nursing &amp; Midwifery</h3>
                    <p class="sms-hs-course-card__desc">A 3-year diploma in General Nursing &amp; Midwifery, open to students with 10+2 from any stream. Hands-on clinical training at GMC Jammu with JKBOPEE and direct quota admission options.</p>
                    <div class="sms-hs-course-card__key-grid" aria-label="Key details">
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Duration</span>
                            <span class="sms-hs-course-card__key-value">3 Years</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Eligibility</span>
                            <span class="sms-hs-course-card__key-value">Any 10+2</span>
                        </div>
                        <div class="sms-hs-course-card__key-item">
                            <span class="sms-hs-course-card__key-label">Seats</span>
                            <span class="sms-hs-course-card__key-value">100</span>
                        </div>
                    </div>
                    <div class="sms-hs-course-card__pills" aria-label="Programme highlights">
                        <span class="sms-hs-course-card__pill">3 Years</span>
                        <span class="sms-hs-course-card__pill">Any 10+2</span>
                        <span class="sms-hs-course-card__pill">GMC Training</span>
                        <span class="sms-hs-course-card__pill">JKBOPEE Eligible</span>
                    </div>
                </div>
                <div class="sms-hs-course-card__foot">
                    <span class="sms-hs-course-card__foot-left">Learn more →</span>
                    <span class="sms-hs-course-card__foot-right">Duration: 3 Years</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Campus aerial — after Programmes: preview + simple play → lightbox with sound -->
<section class="section sms-hs-campus-film" id="campus-film" aria-labelledby="sms-hs-campus-film-title">
    <div class="sms-hs-container">
        <header class="sms-hs-campus-film__head fade-up">
            <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span><span class="eyebrow-text">Campus tour</span></p>
            <h2 class="section-heading sms-hs-campus-film__title" id="sms-hs-campus-film-title">See SMS College from above.</h2>
            <p class="section-subtext sms-hs-campus-film__sub">Experience the campus like never before.</p>
        </header>

        <div class="sms-hs-campus-film__wrap fade-up" data-sms-campus-film>
            <div class="sms-hs-campus-film__frame">
                <div class="sms-hs-campus-film__ratio">
                    <video
                        class="sms-hs-campus-film__video sms-hs-campus-film__video--preview"
                        data-sms-campus-preview-video
                        muted
                        loop
                        playsinline
                        autoplay
                        preload="metadata"
                        poster="<?php echo htmlspecialchars($_hs_campus_poster, ENT_QUOTES, 'UTF-8'); ?>"
                    >
                        <source src="<?php echo htmlspecialchars($_hs_campus_mp4, ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
                    </video>
                    <button type="button" class="sms-hs-campus-film__play" data-sms-campus-film-open aria-label="Play campus video with sound and controls">
                        <span class="sms-hs-campus-film__play-inner">
                            <svg class="sms-hs-campus-film__play-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M9 7.5v9l7.5-4.5L9 7.5z"/></svg>
                        </span>
                        <span class="sms-hs-campus-film__play-label">Play with sound</span>
                    </button>
                </div>
            </div>
            <p class="sms-hs-campus-film__video-hint">Click to view.</p>
        </div>
    </div>
</section>

<div id="sms-campus-film-lightbox" class="sms-campus-film-lightbox" hidden data-sms-campus-film-lightbox role="dialog" aria-modal="true" aria-labelledby="sms-campus-film-lightbox-title">
    <div class="sms-campus-film-lightbox__backdrop" data-sms-campus-film-close tabindex="-1" aria-hidden="true"></div>
    <div class="sms-campus-film-lightbox__panel">
        <div class="sms-campus-film-lightbox__top">
            <p class="sms-campus-film-lightbox__title" id="sms-campus-film-lightbox-title">Campus video</p>
            <button type="button" class="sms-campus-film-lightbox__close" data-sms-campus-film-close aria-label="Close video player">
                <svg class="sms-campus-film-lightbox__close-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2.25" stroke-linecap="round"/></svg>
            </button>
        </div>
        <div class="sms-campus-film-lightbox__video-wrap">
            <video class="sms-campus-film-lightbox__video" controls playsinline preload="metadata" aria-label="SMS College campus drone tour with audio">
                <source src="<?php echo htmlspecialchars($_hs_campus_mp4, ENT_QUOTES, 'UTF-8'); ?>" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<!-- 4. Why SMS — crimson band, glass cards (icon + title + copy) -->
<section class="section section--crimson sms-hs-why sms-hs-why--editorial" id="why-sms" aria-labelledby="sms-hs-why-title">
    <div class="sms-hs-container">
        <div class="sms-hs-why__animate">
            <header class="sms-hs-why__head">
                <div class="sms-hs-why__head-inner fade-up">
                    <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span><span class="eyebrow-text">Why Choose SMS College</span></p>
                    <h2 class="section-heading sms-hs-why__title" id="sms-hs-why-title">What Sets <span class="sms-hs-why__title-accent">SMS College</span> Apart</h2>
                    <p class="section-subtext sms-hs-why__sub">Recognised qualifications, real hospital training, modern infrastructure — and full JKBOPEE support.</p>
                </div>
            </header>
            <div class="sms-hs-why__grid">
                <article class="sms-hs-why__card fade-up">
                    <svg class="sms-hs-why__card-icon-svg" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="12" cy="8" r="6" stroke="currentColor" stroke-width="1.5"/><path d="m15.477 12.89 1.515 8.396a.75.75 0 0 1-1.091.83l-4.423-2.512-4.423 2.512a.75.75 0 0 1-1.091-.83l1.515-8.396" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <h3 class="sms-hs-why__card-title">J&amp;K Council &amp; University Approved</h3>
                    <p class="sms-hs-why__card-desc">Programmes recognised by J&amp;K State Health Nursing Council and affiliated with the University of Jammu — ensuring your qualification is accepted statewide.</p>
                </article>
                <article class="sms-hs-why__card fade-up">
                    <svg class="sms-hs-why__card-icon-svg" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 12h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 16h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 6h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 10h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <h3 class="sms-hs-why__card-title">GMC Jammu Clinical Training</h3>
                    <p class="sms-hs-why__card-desc">Structured live training at Government Medical College Jammu — one of J&amp;K&apos;s largest government teaching hospitals — from day one of your programme.</p>
                </article>
                <article class="sms-hs-why__card fade-up">
                    <svg class="sms-hs-why__card-icon-svg" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M10 2v7.5L4 22h16l-6-12.5V2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.5 2h7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 16h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <h3 class="sms-hs-why__card-title">8 Labs · Digital Library · Wi-Fi</h3>
                    <p class="sms-hs-why__card-desc">Eight modern nursing labs, a fully air-conditioned digital library, and complete Wi-Fi across the campus for uninterrupted learning.</p>
                </article>
                <article class="sms-hs-why__card fade-up">
                    <svg class="sms-hs-why__card-icon-svg" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2V3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7V3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <h3 class="sms-hs-why__card-title">JKBOPEE &amp; Direct Quota Support</h3>
                    <p class="sms-hs-why__card-desc">Admissions open through JKBOPEE entrance and Direct Management Quota, with full eligibility guidance, documentation support, and counselling.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- 5. Facilities — rebuild: header + stats strip + full-width list (item 1 active) -->
<section class="section sms-hs-fac sms-hs-fac--rebuild" id="facilities" aria-labelledby="sms-hs-fac-title">
    <div class="sms-hs-container">
        <header class="sms-hs-fac__head fade-up">
            <p class="sms-hs-fac__eyebrow">
                <span class="sms-hs-fac__eyebrow-line" aria-hidden="true"></span>
                <span class="sms-hs-fac__eyebrow-text">Facilities</span>
            </p>
            <h2 class="section-heading sms-hs-fac__title" id="sms-hs-fac-title">Infrastructure Built for Excellence</h2>
            <p class="sms-hs-fac__intro">Modern classrooms, nursing labs, digital library, hostel, and transport — everything built for focused learning.</p>
        </header>

        <?php
        $_hs_fac_u = static function (string $file): string {
            return function_exists('sms_photo_path') ? sms_photo_path($file) : ('photo/' . rawurlencode($file));
        };
        /* Jumbled vs row labels — all five PNGs used (image.png on stats strip below) */
        $_hs_fac_i1 = $_hs_fac_u('image copy 2.png');
        $_hs_fac_i2 = $_hs_fac_u('image copy 4.png');
        $_hs_fac_i3 = $_hs_fac_u('image copy 3.png');
        $_hs_fac_i4 = $_hs_fac_u('image copy.png');
        $_hs_fac_strip_bg = $_hs_fac_u('image.png');
        ?>

        <div
            class="sms-hs-fac__strip sms-hs-fac__strip--photo fade-up"
            aria-label="Facilities at a glance"
            style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.93), rgba(255, 255, 255, 0.93)), url('<?php echo htmlspecialchars($_hs_fac_strip_bg, ENT_QUOTES, 'UTF-8'); ?>'); background-size: cover; background-position: center;"
        >
            <div class="sms-hs-fac__strip-cell">
                <span class="sms-hs-fac__strip-val">10</span>
                <span class="sms-hs-fac__strip-lbl">Classrooms</span>
            </div>
            <div class="sms-hs-fac__strip-cell">
                <span class="sms-hs-fac__strip-val">8</span>
                <span class="sms-hs-fac__strip-lbl">Nursing labs</span>
            </div>
            <div class="sms-hs-fac__strip-cell">
                <span class="sms-hs-fac__strip-val">GMC</span>
                <span class="sms-hs-fac__strip-lbl">Clinical partner</span>
            </div>
            <div class="sms-hs-fac__strip-cell">
                <span class="sms-hs-fac__strip-val">Wi-Fi</span>
                <span class="sms-hs-fac__strip-lbl">Digital library</span>
            </div>
        </div>

        <div class="sms-hs-fac__items" data-sms-fac-items role="list">
            <button type="button" class="sms-hs-fac__item sms-hs-fac__item--active sms-hs-fac__item--i1 fade-up" data-sms-fac-item aria-current="true">
                <span class="sms-hs-fac__item-bg" style="background-image:url('<?php echo htmlspecialchars($_hs_fac_i1, ENT_QUOTES, 'UTF-8'); ?>')" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-scrim" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-inner">
                    <span class="sms-hs-fac__item-num" aria-hidden="true">01</span>
                    <span class="sms-hs-fac__item-copy">
                        <span class="sms-hs-fac__item-title">Nursing Laboratories</span>
                        <span class="sms-hs-fac__item-desc">Eight state-of-the-art labs equipped for clinical skills, procedure simulation, wound care, IV practice, and anatomical training — supervised by qualified nursing faculty.</span>
                    </span>
                    <a class="sms-hs-fac__item-arrow" href="<?php echo htmlspecialchars($_hs_gallery); ?>" data-sms-fac-arrow aria-label="Nursing laboratories — view gallery">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M7 17L17 7M17 7H9M17 7V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </span>
            </button>
            <button type="button" class="sms-hs-fac__item sms-hs-fac__item--i2 fade-up" data-sms-fac-item>
                <span class="sms-hs-fac__item-bg" style="background-image:url('<?php echo htmlspecialchars($_hs_fac_i2, ENT_QUOTES, 'UTF-8'); ?>')" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-scrim" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-inner">
                    <span class="sms-hs-fac__item-num" aria-hidden="true">02</span>
                    <span class="sms-hs-fac__item-copy">
                        <span class="sms-hs-fac__item-title">Modern Digital Library</span>
                        <span class="sms-hs-fac__item-desc">Air-conditioned reading space with nursing textbooks, anatomy references, JKBOPEE prep materials, and digital resources — full Wi-Fi across the campus.</span>
                    </span>
                    <a class="sms-hs-fac__item-arrow" href="<?php echo htmlspecialchars($_hs_gallery); ?>" data-sms-fac-arrow aria-label="Digital library — view gallery" onclick="event.stopPropagation();">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M7 17L17 7M17 7H9M17 7V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </span>
            </button>
            <button type="button" class="sms-hs-fac__item sms-hs-fac__item--i3 fade-up" data-sms-fac-item>
                <span class="sms-hs-fac__item-bg" style="background-image:url('<?php echo htmlspecialchars($_hs_fac_i3, ENT_QUOTES, 'UTF-8'); ?>')" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-scrim" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-inner">
                    <span class="sms-hs-fac__item-num" aria-hidden="true">03</span>
                    <span class="sms-hs-fac__item-copy">
                        <span class="sms-hs-fac__item-title">Classrooms &amp; Hostel</span>
                        <span class="sms-hs-fac__item-desc">Ten audio-visual equipped classrooms for interactive learning, plus warden-supervised hostel accommodation for outstation students with all essential amenities.</span>
                    </span>
                    <a class="sms-hs-fac__item-arrow" href="<?php echo htmlspecialchars($_hs_gallery); ?>" data-sms-fac-arrow aria-label="Classrooms and hostel — view gallery">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M7 17L17 7M17 7H9M17 7V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </span>
            </button>
            <button type="button" class="sms-hs-fac__item sms-hs-fac__item--i4 fade-up" data-sms-fac-item>
                <span class="sms-hs-fac__item-bg" style="background-image:url('<?php echo htmlspecialchars($_hs_fac_i4, ENT_QUOTES, 'UTF-8'); ?>')" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-scrim" aria-hidden="true"></span>
                <span class="sms-hs-fac__item-inner">
                    <span class="sms-hs-fac__item-num" aria-hidden="true">04</span>
                    <span class="sms-hs-fac__item-copy">
                        <span class="sms-hs-fac__item-title">Transport Facility</span>
                        <span class="sms-hs-fac__item-desc">College-managed transport covering all major Jammu city routes — safe and reliable daily commute for both students and staff.</span>
                    </span>
                    <a class="sms-hs-fac__item-arrow" href="<?php echo htmlspecialchars($_hs_contact); ?>" data-sms-fac-arrow aria-label="Transport — contact us">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M7 17L17 7M17 7H9M17 7V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </span>
            </button>
        </div>

        <p class="sms-hs-fac__foot">
            <a class="sms-hs-fac__campus-link fade-up" href="<?php echo htmlspecialchars($_hs_gallery); ?>">Explore our campus →</a>
        </p>
    </div>
</section>

<!-- 6. Gallery — dark band + marquee -->
<section class="section section--crimson sms-hs-gallery" id="gallery" aria-labelledby="sms-hs-gallery-title">
    <div class="sms-hs-container">
        <header class="sms-hs-gallery__head">
            <p class="eyebrow fade-up"><span class="eyebrow-line" aria-hidden="true"></span><span class="eyebrow-text">Campus Life</span></p>
            <h2 class="section-heading sms-hs-gallery__title fade-up" id="sms-hs-gallery-title">Life at SMS College</h2>
            <p class="section-subtext sms-hs-gallery__sub fade-up">Campus photos — labs, classrooms, and student life in Jammu.</p>
        </header>
    </div>
    <?php
    $_hs_gal_base = 'assets/images/gallery/';
    $_hs_gal_photo = static function (string $file): string {
        return function_exists('sms_photo_path') ? sms_photo_path($file) : ('photo/' . rawurlencode($file));
    };
    $_hs_gal_slides_base = [
        ['url' => $_hs_gal_photo('IMG_0432.jpg'), 'alt' => '', 'tall' => false],
        ['url' => $_hs_gal_photo('IMG_0415.jpg'), 'alt' => '', 'tall' => true],
        ['url' => $_hs_gal_photo('IMG_0404.jpg'), 'alt' => '', 'tall' => false],
        ['url' => $_hs_gal_photo('IMG_0399.jpg'), 'alt' => '', 'tall' => true],
        ['url' => $_hs_gal_photo('IMG_0403.jpg'), 'alt' => '', 'tall' => false],
        ['url' => $_hs_gal_photo('IMG_0418.jpg'), 'alt' => '', 'tall' => true],
        ['url' => $_hs_gal_photo('IMG_0427.jpg'), 'alt' => '', 'tall' => false],
        ['url' => $_hs_gal_photo('IMG_0429.jpg'), 'alt' => '', 'tall' => true],
        ['url' => $_hs_gal_photo('IMG_0345.jpg'), 'alt' => '', 'tall' => false],
        ['url' => $_hs_gal_photo('IMG_0372.jpg'), 'alt' => '', 'tall' => true],
        ['url' => $_hs_gal_photo('IMG_0382.jpg'), 'alt' => '', 'tall' => false],
        ['url' => $_hs_gal_photo('IMG_0412.jpg'), 'alt' => '', 'tall' => true],
        ['url' => $_hs_gal_photo('IMG_0420.jpg'), 'alt' => '', 'tall' => false],
        ['url' => $_hs_gal_photo('IMG_0422.jpg'), 'alt' => '', 'tall' => true],
    ];
    $_hs_gal_slides = array_merge($_hs_gal_slides_base, $_hs_gal_slides_base);
    ?>
    <div class="sms-hs-gallery__marquee" data-sms-gallery-marquee>
        <div class="sms-hs-gallery__marquee-viewport">
            <div class="sms-hs-gallery__marquee-track">
                <?php for ($_hs_gal_dup = 0; $_hs_gal_dup < 2; $_hs_gal_dup++) : ?>
                <div class="sms-hs-gallery__marquee-group"<?php echo $_hs_gal_dup === 1 ? ' aria-hidden="true"' : ''; ?>>
                    <?php
                    foreach ($_hs_gal_slides as $_gi => $_gs) :
                        $_g_src = !empty($_gs['url']) ? $_gs['url'] : ($_hs_gal_base . ($_gs['file'] ?? ''));
                        $_g_hi = $_gi % 2 === 1 ? 'high' : 'low';
                        $_g_shape = $_gs['tall'] ? 'tall' : 'square';
                        $_g_lazy = ($_hs_gal_dup === 0 && $_gi === 0) ? 'eager' : 'lazy';
                        ?>
                    <div class="sms-hs-gallery__cell sms-hs-gallery__cell--<?php echo $_g_hi; ?> fade-up">
                        <a href="<?php echo htmlspecialchars($_hs_gallery); ?>" class="sms-hs-gallery__item sms-hs-gallery__item--<?php echo $_g_shape; ?>" aria-label="Open gallery">
                            <img class="sms-hs-gallery__img" src="<?php echo htmlspecialchars($_g_src, ENT_QUOTES, 'UTF-8'); ?>" alt="" width="900" height="1200" loading="<?php echo $_g_lazy; ?>" decoding="async">
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="sms-hs-container">
        <div class="sms-hs-gallery__footer">
            <a class="sms-hs-gallery__btn fade-up sms-btn sms-btn--white btn-white" href="<?php echo htmlspecialchars($_hs_gallery); ?>">View full gallery →</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/sms-clinical-section.php'; ?>

<?php include __DIR__ . '/sms-home-faq.php'; ?>

<!-- Admission CTA — full-width band (above contact) -->
<section class="section sms-hs-cta sms-hs-cta--rebuild" id="admissions" aria-labelledby="sms-hs-cta-title">
    <div class="sms-hs-cta-rebuild__inner">
        <div class="sms-hs-cta-rebuild__left fade-up">
            <p class="sms-hs-cta-rebuild__tag">2026 Admissions Open</p>
            <h2 class="sms-hs-cta-rebuild__title" id="sms-hs-cta-title">Start Your Journey in Healthcare</h2>
            <p class="sms-hs-cta-rebuild__body">BSc Nursing &amp; GNM — JKBOPEE and Direct Quota. We&apos;ll help you with every step.</p>
        </div>
        <div class="sms-hs-cta-rebuild__right fade-up">
            <a class="sms-hs-cta-rebuild__btn btn-primary" href="<?php echo htmlspecialchars($_hs_apply); ?>">Apply Now →</a>
            <p class="sms-hs-cta-rebuild__call">Call <?php echo htmlspecialchars($_hs_cta_phone_note); ?></p>
        </div>
    </div>
</section>

<!-- Contact — rebuild (two-column: info | map + enquiry) -->
<section class="section section--white sms-hs-contact sms-hs-contact--rebuild" id="contact" aria-labelledby="sms-hs-contact-title">
    <div class="sms-hs-contact-rebuild__inner">
        <header class="sms-hs-contact-rebuild__head fade-up">
            <p class="eyebrow">
                <span class="eyebrow-line" aria-hidden="true"></span>
                <span class="eyebrow-text">Get in touch</span>
            </p>
            <h2 class="sms-hs-contact-rebuild__title" id="sms-hs-contact-title">Visit Us or Reach Out</h2>
        </header>
        <div class="sms-hs-contact-rebuild__grid">
            <div class="sms-hs-contact-rebuild__info fade-up">
                <p class="sms-hs-contact-rebuild__college"><?php echo htmlspecialchars($_hs_site); ?></p>
                <ul class="sms-hs-contact-rebuild__items" role="list">
                    <li class="sms-hs-contact-rebuild__item">
                        <span class="sms-hs-contact-rebuild__ico" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 21s7-4.55 7-11a7 7 0 1 0-14 0c0 6.45 7 11 7 11z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="1.75"/></svg>
                        </span>
                        <div class="sms-hs-contact-rebuild__item-text">
                            <span class="sms-hs-contact-rebuild__label">Address</span>
                            <p class="sms-hs-contact-rebuild__value"><?php echo htmlspecialchars($_hs_addr_display); ?></p>
                        </div>
                    </li>
                    <li class="sms-hs-contact-rebuild__item">
                        <span class="sms-hs-contact-rebuild__ico" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 4h2.5l1.8 4.5-1.2.9a11 11 0 0 0 5.5 5.5l.9-1.2L19 16.5V19a2 2 0 0 1-2 2h-.5A16 16 0 0 1 3 5.5V5a2 2 0 0 1 2-2z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/></svg>
                        </span>
                        <div class="sms-hs-contact-rebuild__item-text">
                            <span class="sms-hs-contact-rebuild__label">Phone</span>
                            <p class="sms-hs-contact-rebuild__value"><a href="tel:<?php echo htmlspecialchars($_hs_tel_for_href); ?>"><?php echo htmlspecialchars($_hs_phone_display); ?></a></p>
                        </div>
                    </li>
                    <li class="sms-hs-contact-rebuild__item">
                        <span class="sms-hs-contact-rebuild__ico" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6h16v12H4V6z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/><path d="M4 7l8 5.5L20 7" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <div class="sms-hs-contact-rebuild__item-text">
                            <span class="sms-hs-contact-rebuild__label">Email</span>
                            <p class="sms-hs-contact-rebuild__value"><a href="mailto:<?php echo htmlspecialchars($_hs_email_display); ?>"><?php echo htmlspecialchars($_hs_email_display); ?></a></p>
                        </div>
                    </li>
                </ul>
                <div class="sms-hs-contact-rebuild__hours">
                    <p class="sms-hs-contact-rebuild__hours-label">Office hours</p>
                    <p class="sms-hs-contact-rebuild__hours-line">Monday – Saturday: 9:00 AM – 5:00 PM</p>
                    <p class="sms-hs-contact-rebuild__hours-line sms-hs-contact-rebuild__hours-line--muted">Sunday: Closed</p>
                </div>
                <a class="sms-hs-contact-rebuild__dir" href="<?php echo htmlspecialchars($_hs_maps_link); ?>" target="_blank" rel="noopener noreferrer">Get Directions →</a>
            </div>
            <div class="sms-hs-contact-rebuild__stack fade-up">
                <div class="sms-hs-contact-rebuild__map-wrap">
                    <iframe class="sms-hs-contact-rebuild__map" title="Map — <?php echo htmlspecialchars($_hs_site); ?>" src="<?php echo htmlspecialchars($_hs_maps_src); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="sms-hs-contact-rebuild__enquiry">
                    <div class="sms-hs-contact-rebuild__enquiry-head">
                        <span class="sms-hs-contact-rebuild__enquiry-logo" aria-hidden="true">
                            <img src="<?php echo htmlspecialchars($_hs_crest); ?>" alt="" width="96" height="96" loading="lazy" decoding="async">
                        </span>
                        <div class="sms-hs-contact-rebuild__enquiry-head-text">
                            <p class="sms-hs-contact-rebuild__enquiry-eyebrow">Apply for admission</p>
                            <p class="sms-hs-contact-rebuild__enquiry-lead">2026 Intake · BSc &amp; GNM</p>
                        </div>
                    </div>
                    <p class="sms-hs-contact-rebuild__enquiry-body">BSc Nursing &amp; GNM — JKBOPEE &amp; management quota. Get eligibility guidance and next steps.</p>
                    <a class="sms-hs-contact-rebuild__enquiry-btn btn-primary" href="<?php echo htmlspecialchars($_hs_apply); ?>">Enquire now</a>
                    <p class="sms-hs-contact-rebuild__enquiry-call">Or call <a href="tel:<?php echo htmlspecialchars($_hs_tel_for_href); ?>"><?php echo htmlspecialchars($_hs_cta_phone_note); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../footer/sms-site-footer.php'; ?>
