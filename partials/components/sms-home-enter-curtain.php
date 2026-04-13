<?php
/** Fullscreen entrance overlay — homepage only (see index.php + sms-home-enter.css / .js). */
$_sms_enter_logo = defined('SMS_LOGO_MAIN') ? (string) SMS_LOGO_MAIN : 'assets/images/logo/group-21.png';
$_sms_enter_logo_esc = htmlspecialchars($_sms_enter_logo, ENT_QUOTES, 'UTF-8');
?>
<div id="sms-enter-curtain" class="sms-enter-curtain" aria-hidden="true">
    <div class="sms-enter-curtain__bg"></div>
    <div class="sms-enter-curtain__logo-wrap">
        <img
            class="sms-enter-curtain__logo"
            src="<?php echo $_sms_enter_logo_esc; ?>"
            alt=""
            width="300"
            height="72"
            decoding="async"
            fetchpriority="high"
        >
    </div>
</div>
