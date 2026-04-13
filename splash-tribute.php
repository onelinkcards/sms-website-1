<?php
/**
 * Tribute landing — shown before homepage (see index.php + SMS_TRIBUTE_SPLASH).
 */
declare(strict_types=1);

if (!defined('SMS_SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

$_splash_portrait = defined('SMS_TRIBUTE_PORTRAIT') ? (string) SMS_TRIBUTE_PORTRAIT : 'assets/images/tribute/sant-manjit-singh-ji.png';
$_splash_portrait_esc = htmlspecialchars($_splash_portrait, ENT_QUOTES, 'UTF-8');
$_site = defined('SMS_SITE_NAME') ? htmlspecialchars((string) SMS_SITE_NAME, ENT_QUOTES, 'UTF-8') : 'Sant Manjit Singh College of Nursing &amp; Allied Healthcare';
/** Same horizontal logo as site navbar (header-sms.php → SMS_LOGO_MAIN) */
$_splash_logo_path = defined('SMS_LOGO_MAIN') ? (string) SMS_LOGO_MAIN : 'assets/images/logo/group-21.png';
$_logo = htmlspecialchars($_splash_logo_path, ENT_QUOTES, 'UTF-8');
$_handoff_logo_js = json_encode($_splash_logo_path, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_UNESCAPED_UNICODE);
$_splash_bg = (defined('SMS_TRIBUTE_BG_IMAGE') && is_string(SMS_TRIBUTE_BG_IMAGE) && SMS_TRIBUTE_BG_IMAGE !== '')
    ? SMS_TRIBUTE_BG_IMAGE
    : '';
$_splash_bg_esc = $_splash_bg !== '' ? htmlspecialchars($_splash_bg, ENT_QUOTES, 'UTF-8') : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="robots" content="noindex, nofollow">
    <title>In reverence — <?php echo $_site; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sms-splash-tribute.css">
    <noscript>
        <style>
            body.sms-splash-tribute--intro .sms-splash-tribute__intro-fly{display:none!important}
            body.sms-splash-tribute--intro .sms-splash-tribute__brand-logo,
            body.sms-splash-tribute--intro .sms-splash-tribute__container>.sms-splash-tribute__brand~*{opacity:1!important;transform:none!important}
            body.sms-splash-tribute--intro .sms-splash-tribute__corner{opacity:.34!important}
        </style>
    </noscript>
</head>
<body class="sms-splash-tribute sms-splash-tribute--intro">
    <div id="sms-splash-intro-fly" class="sms-splash-tribute__intro-fly" aria-hidden="true">
        <img
            class="sms-splash-tribute__intro-logo"
            src="<?php echo $_logo; ?>"
            alt=""
            width="300"
            height="72"
            decoding="async"
            fetchpriority="high"
        >
    </div>
    <div class="sms-splash-tribute__bg" aria-hidden="true">
        <div class="sms-splash-tribute__bg-base"></div>
        <div class="sms-splash-tribute__bg-grain"></div>
        <?php if ($_splash_bg_esc !== '') { ?>
        <div
            class="sms-splash-tribute__bg-building"
            style="--sms-building-url: url('<?php echo $_splash_bg_esc; ?>')"
        ></div>
        <?php } ?>
        <div class="sms-splash-tribute__bg-mist"></div>
        <div class="sms-splash-tribute__bg-vignette"></div>
    </div>

    <span class="sms-splash-tribute__corner sms-splash-tribute__corner--tl" aria-hidden="true"></span>
    <span class="sms-splash-tribute__corner sms-splash-tribute__corner--tr" aria-hidden="true"></span>
    <span class="sms-splash-tribute__corner sms-splash-tribute__corner--bl" aria-hidden="true"></span>
    <span class="sms-splash-tribute__corner sms-splash-tribute__corner--br" aria-hidden="true"></span>

    <main class="sms-splash-tribute__container">
        <header class="sms-splash-tribute__brand">
            <img
                class="sms-splash-tribute__brand-logo"
                src="<?php echo $_logo; ?>"
                alt="<?php echo $_site; ?>"
                width="300"
                height="72"
                loading="eager"
                decoding="async"
            >
        </header>

        <p class="sms-splash-tribute__label">TRIBUTE · DERA NANGALI SAHIB</p>

        <h1 class="sms-splash-tribute__headline">In Reverence <span class="sms-splash-tribute__headline-amp">&amp;</span> Gratitude</h1>

        <figure class="sms-splash-tribute__portrait">
            <span class="sms-splash-tribute__portrait-aura" aria-hidden="true"></span>
            <span class="sms-splash-tribute__portrait-glow" aria-hidden="true"></span>
            <span class="sms-splash-tribute__photo-shell">
                <span class="sms-splash-tribute__photo-inner">
                    <img
                        class="sms-splash-tribute__photo"
                        src="<?php echo $_splash_portrait_esc; ?>"
                        alt="Sant Manjit Singh Ji — Mukhi, Dera Nangali Sahib"
                        width="520"
                        height="680"
                        loading="eager"
                        decoding="async"
                    >
                </span>
            </span>
        </figure>

        <div class="sms-splash-tribute__name-block">
            <p class="sms-splash-tribute__name-main">Sant Manjit Singh Ji</p>
            <p class="sms-splash-tribute__name-title">
                <span class="sms-splash-tribute__name-title-part">Mukhi · Dera Nangali Sahib</span><br class="sms-splash-tribute__name-br">
                <span class="sms-splash-tribute__name-title-part sms-splash-tribute__name-title-part--place">Poonch, Jammu &amp; Kashmir</span>
            </p>
        </div>

        <div class="sms-splash-tribute__grad-line sms-splash-tribute__grad-line--pre-prose" aria-hidden="true"></div>

        <div class="sms-splash-tribute__prose">
            <p class="sms-splash-tribute__quote sms-splash-tribute__quote--primary">
                Under the guiding light of <strong>Sant Manjit Singh Ji</strong> of <strong class="sms-splash-tribute__text-gold">Dera Nangali Sahib</strong>, we embrace a path of selfless <em>seva</em>, compassion, and humility. His teachings inspire us to understand that true excellence in any profession, including nursing, is deeply rooted in service to humanity and moral courage.
            </p>
            <div class="sms-splash-tribute__grad-line" aria-hidden="true"></div>
            <p class="sms-splash-tribute__quote sms-splash-tribute__quote--secondary">
                <strong>Sant Manjit Singh College of Nursing &amp; Allied Healthcare</strong> draws profound inspiration from these values — preparing caregivers who combine clinical skill with empathy, integrity, and respect for every life they serve.
            </p>
        </div>

        <a class="sms-splash-tribute__enter" href="index.php?continue=1" aria-label="Enter the main website">
            <span>ENTER WEBSITE</span>
            <span class="sms-splash-tribute__enter-arrow" aria-hidden="true">→</span>
        </a>

        <p class="sms-splash-tribute__tagline">SANT MANJIT SINGH COLLEGE OF NURSING &amp; ALLIED HEALTHCARE · UNIVERSITY OF JAMMU</p>
    </main>
    <script src="assets/js/sms-splash-tribute-intro.js"></script>
    <script>window.SMS_SPLASH_HANDOFF = { mainLogo: <?php echo $_handoff_logo_js; ?> };</script>
    <script src="assets/js/sms-splash-handoff.js"></script>
    <script>
    (function () {
        var link = document.querySelector('a.sms-splash-tribute__enter');
        if (!link) return;
        link.addEventListener('click', function (e) {
            if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey || e.button !== 0) return;
            e.preventDefault();
            var href = link.getAttribute('href');
            if (typeof window.smsSplashHandoffToHome === 'function') {
                window.smsSplashHandoffToHome(href);
            } else {
                window.location.href = href;
            }
        });
    })();
    </script>
</body>
</html>
