<?php
$sms_logo_main = defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png';
$applyUrl = defined('SMS_APPLY_URL') ? SMS_APPLY_URL : 'admission.php';
$siteShort = defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'SMS College';
$phone = defined('SMS_PHONE_1') ? SMS_PHONE_1 : '';
$email = defined('SMS_EMAIL') ? SMS_EMAIL : '';
$telHref = $phone ? 'tel:' . htmlspecialchars(preg_replace('/\s+/', '', $phone)) : '';
$mailHref = $email ? 'mailto:' . rawurlencode($email) : '';
$sms_topline_messages = [
    'Admissions open 2026 — BSc Nursing & GNM · Affiliated with University of Jammu',
    'Clinical training at Government Medical College Jammu · Recognised by J&K Health & Medical Education',
    'JKBOPEE & Direct Management Quota admissions · Call 9149585221',
    'BSc Nursing (4 Years) · GNM (3 Years) · 100 seats available · Apply now',
];
$sms_topline_first = $sms_topline_messages[0] ?? '';
?>
<!-- Top announcement bar (minimal gradient + rotating line + icons) -->
<div class="sms-topline sms-topline--minimal">
    <div class="sms-topline__wrap">
        <div class="sms-topline__inner">
            <div class="sms-topline__left">
                <span class="sms-topline__pill">Admissions open 2026</span>
                <span class="sms-topline__text" id="sms-topline-dynamic" aria-live="polite"><?php echo htmlspecialchars($sms_topline_first); ?></span>
            </div>
            <div class="sms-topline__right">
                <?php if ($phone) : ?>
                <a class="sms-topline__icon-link" href="<?php echo $telHref; ?>" aria-label="Call <?php echo htmlspecialchars($siteShort); ?>"><?php sms_svg_icon('phone', 'sms-svg sms-svg--topline'); ?></a>
                <?php endif; ?>
                <?php if ($email) : ?>
                <a class="sms-topline__icon-link" href="<?php echo htmlspecialchars($mailHref); ?>" aria-label="Email <?php echo htmlspecialchars($siteShort); ?>"><?php sms_svg_icon('envelope', 'sms-svg sms-svg--topline'); ?></a>
                <?php endif; ?>
                <a class="sms-topline__icon-link" href="#" aria-label="Instagram"><?php sms_svg_icon('instagram', 'sms-svg sms-svg--topline'); ?></a>
            </div>
        </div>
    </div>
</div>
<script type="application/json" id="sms-topline-messages"><?php
echo json_encode($sms_topline_messages, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS);
?></script>

<header class="header header__sticky v__2 sms-header-pro">
    <div class="sms-header-pro__wrap">
        <div class="header__wrapper sms-header-pro__inner">
            <div class="header__logo sms-header-pro__logo">
                <a href="index.php" class="header__logo--link">
                    <img src="<?php echo htmlspecialchars($sms_logo_main); ?>" alt="<?php echo htmlspecialchars(defined('SMS_SITE_NAME') ? SMS_SITE_NAME : $siteShort); ?>" class="sms-logo-header sms-logo-header--brand" width="300" height="72" loading="eager" decoding="async">
                </a>
            </div>
            <div class="header__menu sms-header-pro__nav">
                <?php include_once __DIR__ . '/../elements/nav-sms-unipix.php'; ?>
            </div>
            <div class="header__right sms-header-pro__actions">
                <div class="header__right--item sms-header-pro__cta-row">
                    <a href="<?php echo htmlspecialchars($applyUrl); ?>" class="sms-header-cta sms-header-cta--ghost">
                        <span>Apply Now</span>
                        <?php sms_svg_icon('arrow-right', 'sms-svg sms-svg--btn'); ?>
                    </a>
                    <button type="button" id="search-btn" class="search__trigger sms-header-icon-btn" aria-label="Open search">
                        <?php sms_svg_icon('search', 'sms-svg sms-svg--btn'); ?>
                    </button>
                    <button type="button" id="menu-btn" class="menu__trigger sms-menu-toggle" aria-label="Open menu">
                        <?php sms_svg_icon('menu', 'sms-svg sms-svg--btn'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include __DIR__ . '/../components/sms-mobile-drawer.php'; ?>
