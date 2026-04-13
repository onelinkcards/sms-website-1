<?php
/**
 * SMS Final Design - Sant Manjit Singh College of Nursing & Allied Healthcare
 */
if (!defined('SMS_SITE_NAME')) {
    define('SMS_SITE_NAME', 'Sant Manjit Singh College of Nursing & Allied Healthcare');
    define('SMS_SITE_SHORT', 'SMS College');
    define('SMS_SITE_TAGLINE', 'Affiliated with University of Jammu · Est. 2026');

    // Contact (full line for display & maps)
    define('SMS_ADDRESS', 'Babliana Jeevan Nagar Road, Near Airport, Jammu — 180001, Jammu & Kashmir');
    define('SMS_PHONE_1', '9149585221');
    define('SMS_PHONE_2', '9906585221');
    define('SMS_EMAIL', 'sms.conaps@gmail.com');

    // Links
    define('SMS_APPLY_URL', 'admission.php');
    define('SMS_COURSES_URL', 'courses.php');
    define('SMS_ABOUT_URL', 'about.php');
    define('SMS_GALLERY_URL', 'gallery.php');
    define('SMS_CONTACT_URL', 'contact.php');

    /** Primary horizontal logo (PNG, transparent) — header, favicon */
    define('SMS_LOGO_MAIN', 'assets/images/logo/sms-logo-horizontal-transparent.png');

    /** White / light wordmark for dark maroon footer only */
    define('SMS_LOGO_FOOTER', 'assets/images/logo/sms-logo-footer-white.png');

    /** College crest / emblem (PNG) — use for icon chips, tiles, CTAs */
    define('SMS_LOGO_CREST', 'assets/images/logo/sms-college-crest.png');

    // Optional — About section principal card (homepage)
    // define('SMS_PRINCIPAL_NAME', 'Dr. …');
    // define('SMS_PRINCIPAL_QUAL', 'M.Sc Nursing, University of Jammu');
    // define('SMS_PRINCIPAL_PHOTO', 'assets/images/team/principal.jpg');
}
if (!defined('SMS_LOGO_MAIN')) {
    define('SMS_LOGO_MAIN', 'assets/images/logo/sms-logo-horizontal-transparent.png');
}
if (!defined('SMS_LOGO_FOOTER')) {
    define('SMS_LOGO_FOOTER', 'assets/images/logo/sms-logo-footer-white.png');
}
if (!defined('SMS_LOGO_CREST')) {
    define('SMS_LOGO_CREST', 'assets/images/logo/sms-college-crest.png');
}
if (!defined('SMS_SITE_TAGLINE')) {
    define('SMS_SITE_TAGLINE', 'Affiliated with University of Jammu · Est. 2026');
}

/**
 * Client / stakeholder preview: fixed notice + dismiss (localStorage).
 * Set to false when the site is final and ready for public launch.
 */
if (!defined('SMS_SHOW_DEMO_BANNER')) {
    define('SMS_SHOW_DEMO_BANNER', false);
}

/**
 * Tribute landing — shown once per PHP session before the homepage (index.php).
 * Set false to skip (e.g. local dev). Portrait: copy to this path or override define.
 */
if (!defined('SMS_TRIBUTE_SPLASH')) {
    define('SMS_TRIBUTE_SPLASH', false);
}
if (!defined('SMS_TRIBUTE_PORTRAIT')) {
    define('SMS_TRIBUTE_PORTRAIT', 'assets/images/tribute/sant-manjit-singh-ji.png');
}
/** Optional full-bleed texture (e.g. image_10.png damask) — soft-light over burgundy. Empty = CSS damask only. */
if (!defined('SMS_TRIBUTE_BG_IMAGE')) {
    define('SMS_TRIBUTE_BG_IMAGE', '');
}

/**
 * Video delivery URLs (GitHub/Vercel-safe):
 * Use direct media URLs so deployment does not depend on Git LFS checkout.
 */
if (!defined('SMS_HERO_VIDEO_PRIMARY')) {
    define('SMS_HERO_VIDEO_PRIMARY', '');
}
if (!defined('SMS_HERO_VIDEO_SEQUENCE')) {
    define('SMS_HERO_VIDEO_SEQUENCE', '');
}
if (!defined('SMS_CAMPUS_VIDEO_MP4')) {
    define('SMS_CAMPUS_VIDEO_MP4', 'https://cdn.jsdelivr.net/gh/onelinkcards/sms-websites@main/photo/SMS_VIDEO_WITHAUDIO_F1.mp4');
}
if (!defined('SMS_PHOTO_BASE_URL')) {
    define('SMS_PHOTO_BASE_URL', 'https://cdn.jsdelivr.net/gh/onelinkcards/sms-websites@main/photo/');
}

/** Enquiry form: notification inbox — defaults to college email when defined */
if (!defined('SMS_ENQUIRY_NOTIFY_EMAIL')) {
    define(
        'SMS_ENQUIRY_NOTIFY_EMAIL',
        defined('SMS_EMAIL') && SMS_EMAIL !== '' ? SMS_EMAIL : 'hello@repixelx.tech'
    );
}
/**
 * From address for PHP mail() envelope (-f). Must be allowed by your host (often @your domain).
 * If mail never arrives, use hosting SMTP / cPanel "Email Deliverability" or set SMS_ENQUIRY_RESEND_API_KEY.
 */
if (!defined('SMS_ENQUIRY_MAIL_FROM')) {
    define(
        'SMS_ENQUIRY_MAIL_FROM',
        defined('SMS_EMAIL') && SMS_EMAIL !== '' ? SMS_EMAIL : 'noreply@repixelx.tech'
    );
}
/** Optional: Resend.com API — if set, email is sent via API (reliable when host mail() is broken). */
// define('SMS_ENQUIRY_RESEND_API_KEY', 're_xxxxxxxx');
// define('SMS_ENQUIRY_RESEND_FROM', 'SMS College <onboarding@resend.dev>');

/**
 * Start PHP session for one-time enquiry success messages (no ?enquiry= in URL).
 */
function sms_enquiry_session_start(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        @session_start();
    }
}

/** Hosted file under the configured photo base (URL-safe). */
function sms_photo_path(string $file): string
{
    $base = defined('SMS_PHOTO_BASE_URL') ? (string) SMS_PHOTO_BASE_URL : 'photo/';
    return rtrim($base, '/') . '/' . rawurlencode($file);
}

/**
 * Campus mosaic grids (homepage + gallery page) — filenames in /photo/ only.
 *
 * @return list<string>
 */
function sms_gallery_mosaic_files(): array
{
    return [
        'IMG_0345.jpg',
        'IMG_0372.jpg',
        'IMG_0382.jpg',
        'IMG_0395.jpg',
        'IMG_0399.jpg',
        'IMG_0403.jpg',
        'IMG_0404.jpg',
        'IMG_0408.jpg',
        'IMG_0412.jpg',
        'IMG_0415.jpg',
        'IMG_0418.jpg',
        'IMG_0420.jpg',
        'IMG_0422.jpg',
        'IMG_0425.jpg',
        'IMG_0427.jpg',
        'IMG_0428.jpg',
        'IMG_0429.jpg',
        'IMG_0432.jpg',
        'IMG_0340.jpg',
        'IMG_0341.jpg',
        'IMG_0363.jpg',
        'IMG_0350.jpg',
        'IMG_0360.jpg',
        'IMG_0365.jpg',
        'IMG_0378.jpg',
        'IMG_0380.jpg',
    ];
}

/**
 * HD editorial photography (Unsplash — nursing, campus, clinical).
 * Replace with your own campus shots anytime; keep width=2400 or 1600 for sharp displays.
 */
if (!defined('SMS_STOCK_HERO_1')) {
    define('SMS_STOCK_HERO_1', 'assets/images/hero/q1.png');
}
if (!defined('SMS_STOCK_HERO_2')) {
    define('SMS_STOCK_HERO_2', 'https://images.unsplash.com/photo-1498243691581-b145c3f54a78?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=90');
}
if (!defined('SMS_STOCK_HERO_3')) {
    define('SMS_STOCK_HERO_3', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=90');
}
if (!defined('SMS_STOCK_HERO_4')) {
    define('SMS_STOCK_HERO_4', 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=90');
}
if (!defined('SMS_STOCK_ABOUT_COLUMN')) {
    define('SMS_STOCK_ABOUT_COLUMN', sms_photo_path('image copy 4.png'));
}
if (!defined('SMS_STOCK_BREADCRUMB')) {
    define('SMS_STOCK_BREADCRUMB', 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=90');
}
/** Inner page heroes — distinct demo images (centre-cropped in CSS); override with your photos anytime */
if (!defined('SMS_PAGE_HERO_CONTACT')) {
    define('SMS_PAGE_HERO_CONTACT', sms_photo_path('image copy 4.png'));
}
if (!defined('SMS_PAGE_HERO_COURSES')) {
    define('SMS_PAGE_HERO_COURSES', sms_photo_path('image copy 2.png'));
}
if (!defined('SMS_PAGE_HERO_ADMISSION')) {
    define('SMS_PAGE_HERO_ADMISSION', SMS_PAGE_HERO_COURSES);
}
if (!defined('SMS_PAGE_HERO_ABOUT')) {
    define('SMS_PAGE_HERO_ABOUT', sms_photo_path('image copy 4.png'));
}
if (!defined('SMS_PAGE_HERO_GALLERY')) {
    define('SMS_PAGE_HERO_GALLERY', sms_photo_path('image copy 3.png'));
}
if (!defined('SMS_STOCK_COURSE_BSC')) {
    define(
        'SMS_STOCK_COURSE_BSC',
        sms_photo_path('ChatGPT Image Apr 13, 2026, 02_58_29 AM.png')
    );
}
if (!defined('SMS_STOCK_COURSE_GNM')) {
    define(
        'SMS_STOCK_COURSE_GNM',
        sms_photo_path('ChatGPT Image Apr 13, 2026, 02_49_26 AM.png')
    );
}
if (!defined('SMS_STOCK_CLINICAL_A')) {
    define(
        'SMS_STOCK_CLINICAL_A',
        sms_photo_path('ChatGPT Image Apr 13, 2026, 03_15_31 AM.png')
    );
}
if (!defined('SMS_STOCK_CLINICAL_B')) {
    define(
        'SMS_STOCK_CLINICAL_B',
        sms_photo_path('ChatGPT Image Apr 13, 2026, 03_27_08 AM.png')
    );
}
if (!defined('SMS_STOCK_CLINICAL_C')) {
    define(
        'SMS_STOCK_CLINICAL_C',
        sms_photo_path('ChatGPT Image Apr 13, 2026, 03_28_55 AM.png')
    );
}
if (!defined('SMS_STOCK_GALLERY_1')) {
    define('SMS_STOCK_GALLERY_1', 'https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_2')) {
    define('SMS_STOCK_GALLERY_2', 'https://images.unsplash.com/photo-1498243691581-b145c3f54a78?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_3')) {
    define('SMS_STOCK_GALLERY_3', 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_4')) {
    define('SMS_STOCK_GALLERY_4', 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_GALLERY_5')) {
    define('SMS_STOCK_GALLERY_5', 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=88');
}
if (!defined('SMS_STOCK_FAQ_SIDE')) {
    define('SMS_STOCK_FAQ_SIDE', sms_photo_path('ChatGPT Image Apr 13, 2026, 05_55_42 PM.png'));
}

/**
 * Homepage hero uses a single background image in assets/css/sms-theme.css
 * (selector .sms-hero-cu__bg--hero-photo). Swap the url() there for your campus photo.
 */

require_once __DIR__ . '/partials/components/sms-svg-icon.php';
