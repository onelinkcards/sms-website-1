    <!-- offcanvase menu -->
    <?php include_once 'partials/components/offcanvase.php'; ?>
    <?php include_once 'partials/components/search.php'; ?>
    <?php /* Back-to-top .progress-wrap removed — SMS uses help dock; polish CSS hides if re-enabled */ ?>
    <div id="anywhere-home" class=""></div>
    <!-- scripts -->
    <!-- jquery js -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!-- jquery ui js -->
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <!-- wow js -->
    <script src="assets/js/vendor/waw.js"></script>
    <!-- mobile menu -->
    <script src="assets/js/vendor/metismenu.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/vendor/magnifying-popup.js"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="assets/js/plugins/swiper.js"></script>
    <!-- counterup -->
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/vendor/waypoint.js"></script>
    <!-- isotop mesonary -->
    <script src="assets/js/plugins/isotop.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/resize-sensor.js"></script>
    <script src="assets/js/plugins/twinmax.js"></script>
    <!-- dymanic Contact Form -->
    <script src="assets/js/plugins/contact.form.js"></script>
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>
    <?php if (!empty($sms_home_enter_reveal)) : ?>
    <script src="assets/js/sms-home-enter.js"></script>
    <?php endif; ?>
    <?php if (($sms_home_welcome_reload_js ?? false) === true) : ?>
    <script src="assets/js/sms-home-welcome-reload.js" defer></script>
    <?php endif; ?>
    <script src="assets/js/sms-global-uniform.js" defer></script>
    <?php if (defined('SMS_SHOW_DEMO_BANNER') && SMS_SHOW_DEMO_BANNER) : ?>
    <script src="assets/js/sms-demo-banner.js" defer></script>
    <?php endif; ?>
    <?php if (!empty($sms_home_js)) : ?>
    <script src="assets/js/sms-home.js" defer></script>
    <?php endif; ?>
    <?php
    $_sms_scripts_bc = (string) ($body_class ?? '');
    if (!empty($sms_home_js) || preg_match('/\b(sms-inner|sms-admission|sms-course|sms-gallery)\b/', $_sms_scripts_bc)) :
    ?>
    <script src="assets/js/sms-home-sections.js" defer></script>
    <?php endif; ?>
    <?php if (!empty($sms_show_ai_widget)) : ?>
    <script src="assets/js/sms-help-dock.js" defer></script>
    <?php include_once __DIR__ . '/components/sms-ai-assistant.php'; ?>
    <?php endif; ?>
