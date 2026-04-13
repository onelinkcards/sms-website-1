<?php
/**
 * Stakeholder preview notice — not final copy/images. Dismiss persists in localStorage.
 * Disable: define('SMS_SHOW_DEMO_BANNER', false) in config.php before go-live.
 */
if (!defined('SMS_SHOW_DEMO_BANNER') || !SMS_SHOW_DEMO_BANNER) {
    return;
}
?>
<script>
try {
  if (localStorage.getItem('sms_demo_banner_v1_dismissed') === '1') {
    document.documentElement.classList.add('sms-demo-banner-pref');
  }
} catch (e) {}
</script>
<div id="sms-demo-banner" class="sms-demo-banner" role="dialog" aria-labelledby="sms-demo-banner-title" aria-live="polite">
    <div class="sms-demo-banner__inner">
        <span class="sms-demo-banner__badge" id="sms-demo-banner-title">Preview · v1</span>
        <p class="sms-demo-banner__text">
            <strong>Not the final website.</strong> Text and photos are placeholders for review only — replace with approved content before launch. This is not an official college publication yet.
        </p>
        <button type="button" class="sms-demo-banner__close" data-sms-demo-banner-close>
            Understood — hide
        </button>
    </div>
</div>
