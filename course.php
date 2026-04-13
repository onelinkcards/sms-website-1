<?php
require_once __DIR__ . '/config.php';

$raw = isset($_GET['code']) ? strtolower((string) $_GET['code']) : 'bsc';
$code = preg_replace('/[^a-z]/', '', $raw);

$courses = [
    'bsc' => [
        'title' => 'BSc Nursing',
        'eyebrow' => '4-year undergraduate degree',
        'lead' => 'A full degree in nursing science with strong theory and supervised clinical practice. For students who have completed 10+2 with a medical stream and want a university-affiliated qualification recognised across J&amp;K.',
        'sections' => [
            [
                'heading' => 'Overview',
                'html' => '<p>The BSc Nursing programme develops clinical judgement, communication, and leadership across four years of academic study and hospital training. Graduates are prepared for registration pathways and further specialisation.</p>',
            ],
            [
                'heading' => 'What you will learn',
                'html' => '<ul><li>Foundations of nursing, anatomy, physiology, and community health</li><li>Medical–surgical, paediatric, maternity, and mental health nursing</li><li>Research, ethics, and quality care in hospital settings</li><li>Hands-on skills in our eight nursing laboratories and at GMC Jammu</li></ul>',
            ],
            [
                'heading' => 'Clinical training',
                'html' => '<p>Structured rotations at <strong>Government Medical College, Jammu</strong> ensure you graduate with real ward experience, not only classroom knowledge.</p>',
            ],
        ],
        'meta' => [
            'Duration' => '4 years',
            'Eligibility' => '10+2 Medical',
            'Affiliation' => 'University of Jammu',
            'Recognition' => 'J&amp;K State Health Nursing Council',
            'Admissions' => 'JKBOPEE &amp; management quota',
        ],
    ],
    'gnm' => [
        'title' => 'GNM — General Nursing &amp; Midwifery',
        'eyebrow' => '3-year diploma programme',
        'lead' => 'A practice-focused diploma open to students with 10+2 from <strong>any stream</strong>. Ideal if you want to enter nursing quickly with strong bedside training and GMC Jammu exposure.',
        'sections' => [
            [
                'heading' => 'Overview',
                'html' => '<p>GNM emphasises bedside care, midwifery, and community health. The curriculum balances classroom teaching with skills labs and hospital postings so you are job-ready on completion.</p>',
            ],
            [
                'heading' => 'What you will learn',
                'html' => '<ul><li>Fundamental and medical–surgical nursing care</li><li>Child health, mental health, and community nursing</li><li>Midwifery and reproductive health</li><li>Communication, documentation, and infection control</li></ul>',
            ],
            [
                'heading' => 'Clinical training',
                'html' => '<p>Clinical hours are completed at <strong>GMC Jammu</strong> under qualified supervisors, aligned with council and university requirements.</p>',
            ],
        ],
        'meta' => [
            'Duration' => '3 years',
            'Eligibility' => '10+2 (any stream)',
            'Affiliation' => 'University of Jammu',
            'Recognition' => 'J&amp;K State Health Nursing Council',
            'Admissions' => 'JKBOPEE &amp; management quota',
        ],
    ],
];

if (!isset($courses[$code])) {
    $code = 'bsc';
}
$course = $courses[$code];
$apply = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$contact = defined('SMS_CONTACT_URL') ? SMS_CONTACT_URL : 'contact.php';

$page_title = html_entity_decode(strip_tags($course['title']), ENT_QUOTES | ENT_HTML5, 'UTF-8') . ' — Programme';
$body_class = 'page sms-home sms-course';
$sms_active_nav = 'courses';
ob_start();
include_once __DIR__ . '/partials/header/header-sms.php';

$sms_page_hero_title = html_entity_decode(strip_tags($course['title']), ENT_QUOTES | ENT_HTML5, 'UTF-8');
$sms_page_hero_crumb = 'Courses';
$sms_page_hero_image = $code === 'gnm'
    ? (defined('SMS_STOCK_COURSE_GNM') ? SMS_STOCK_COURSE_GNM : 'assets/images/course/02.jpg')
    : (defined('SMS_STOCK_COURSE_BSC') ? SMS_STOCK_COURSE_BSC : 'assets/images/course/01.jpg');
include_once __DIR__ . '/partials/components/sms-page-hero.php';
?>

<section class="section section--surface" style="padding-top: 32px; padding-bottom: 24px;">
    <div class="sms-course-body__inner">
        <div class="sms-course-hero-inline fade-up">
            <p class="eyebrow"><span class="eyebrow-line" aria-hidden="true"></span><span class="eyebrow-text"><?php echo htmlspecialchars($course['eyebrow']); ?></span></p>
            <p class="section-subtext sms-course-hero-inline__lead"><?php echo $course['lead']; ?></p>
            <div class="sms-course-hero__actions" style="margin-top: 16px;">
                <a class="sms-btn sms-btn--primary" href="<?php echo htmlspecialchars($apply); ?>">Apply now</a>
                <a class="sms-btn sms-btn--outline" href="<?php echo htmlspecialchars($contact); ?>">Talk to admissions</a>
                <a class="sms-btn sms-btn--outline" href="<?php echo htmlspecialchars($coursesList, ENT_QUOTES, 'UTF-8'); ?>">← All programmes</a>
            </div>
        </div>
    </div>
</section>

<section class="sms-course-body">
    <div class="sms-course-body__inner">
        <div class="sms-course-grid">
            <article class="sms-course-prose sms-course-prose--panel">
                <?php foreach ($course['sections'] as $block) : ?>
                <h2><?php echo htmlspecialchars($block['heading']); ?></h2>
                <?php echo $block['html']; ?>
                <?php endforeach; ?>
            </article>
            <aside class="sms-course-aside">
                <h3>At a glance</h3>
                <dl>
                    <?php foreach ($course['meta'] as $k => $v) : ?>
                    <dt><?php echo htmlspecialchars($k); ?></dt>
                    <dd><?php echo $v; ?></dd>
                    <?php endforeach; ?>
                </dl>
                <a class="sms-btn sms-btn--primary" href="<?php echo htmlspecialchars($apply); ?>">Start your application</a>
                <p style="margin: 14px 0 0; font-size: 13px; line-height: 1.5; color: #777;">Questions about eligibility or JKBOPEE? Our team will guide you.</p>
            </aside>
        </div>
    </div>
</section>

<section class="sms-course-foot" aria-label="More links">
    <div class="sms-course-body__inner">
        <nav class="sms-course-foot__nav">
            <a href="index.php">← Home</a>
            <span class="sms-course-foot__sep" aria-hidden="true">·</span>
            <a href="<?php echo htmlspecialchars($coursesList, ENT_QUOTES, 'UTF-8'); ?>">All programmes</a>
            <span class="sms-course-foot__sep" aria-hidden="true">·</span>
            <a href="<?php echo htmlspecialchars($contact); ?>">Contact admissions</a>
        </nav>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer/footer-sms.php'; ?>

<?php
$content = ob_get_clean();
include __DIR__ . '/base.php';
