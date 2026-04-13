
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://images.unsplash.com">
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <title><?php echo defined('SMS_SITE_NAME') ? SMS_SITE_NAME . ' - ' : ''; ?><?php echo htmlspecialchars($page_title ?? 'SMS Final Design'); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo htmlspecialchars(defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link rel="preload" as="image" href="<?php echo htmlspecialchars(defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png'); ?>" fetchpriority="high">
    <?php if (strpos($body_class ?? '', 'sms-home') !== false && defined('SMS_PAGE_HERO_COURSES')) : ?>
    <link rel="preload" as="image" href="<?php echo htmlspecialchars((string) SMS_PAGE_HERO_COURSES, ENT_QUOTES, 'UTF-8'); ?>" fetchpriority="high">
    <?php endif; ?>
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <!-- nice select js -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- SMS theme overrides -->
    <link rel="stylesheet" href="assets/css/sms-theme.css">
    <!-- Global uniformity: tokens, section rhythm, fade-up, sms-btn/sms-card -->
    <link rel="stylesheet" href="assets/css/sms-global-uniform.css">
    <?php if (strpos($body_class ?? '', 'sms-home') !== false) : ?>
    <link rel="stylesheet" href="assets/css/sms-about-rebuild.css">
    <link rel="stylesheet" href="assets/css/sms-fac-rebuild.css">
    <?php endif; ?>
    <?php
    $_sms_bc = (string) ($body_class ?? '');
    if (preg_match('/\b(sms-home|sms-inner|sms-admission|sms-course|sms-gallery|sms-courses-page)\b/', $_sms_bc)) :
    ?>
    <link rel="stylesheet" href="assets/css/sms-home-sections.css">
    <?php endif; ?>
    <?php if (strpos($body_class ?? '', 'sms-home') !== false) : ?>
    <link rel="stylesheet" href="assets/css/sms-clinical-rebuild.css">
    <link rel="stylesheet" href="assets/css/sms-contact-cta-rebuild.css">
    <link rel="stylesheet" href="assets/css/sms-home-faq.css">
    <link rel="stylesheet" href="assets/css/sms-help-dock.css">
    <?php endif; ?>
    <?php if (!empty($sms_home_enter_reveal)) : ?>
    <link rel="stylesheet" href="assets/css/sms-home-enter.css">
    <?php endif; ?>
    <?php if (!empty($sms_home_soft_enter)) : ?>
    <link rel="stylesheet" href="assets/css/sms-home-soft-enter.css">
    <?php endif; ?>
    <!-- SMS premium homepage (clean academic design) -->
    <link rel="stylesheet" href="assets/css/sms-premium.css">
    <link rel="stylesheet" href="assets/css/sms-site-polish.css">
    <link rel="stylesheet" href="assets/css/sms-page-hero.css">
    <link rel="stylesheet" href="assets/css/sms-inner-pages.css">
    <?php if (strpos($body_class ?? '', 'sms-contact-page') !== false) : ?>
    <link rel="stylesheet" href="assets/css/sms-contact-page-body.css">
    <?php endif; ?>
    <?php if (strpos($body_class ?? '', 'sms-about-page') !== false) : ?>
    <link rel="stylesheet" href="assets/css/sms-about-page-body.css">
    <?php endif; ?>
    <?php if (strpos($body_class ?? '', 'sms-admission-page') !== false) : ?>
    <link rel="stylesheet" href="assets/css/sms-admission-page-body.css">
    <?php endif; ?>
    <?php if (defined('SMS_SHOW_DEMO_BANNER') && SMS_SHOW_DEMO_BANNER) : ?>
    <link rel="stylesheet" href="assets/css/sms-demo-banner.css">
    <?php endif; ?>
