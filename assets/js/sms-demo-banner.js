(function () {
  'use strict';
  var KEY = 'sms_demo_banner_v1_dismissed';
  var root = document.getElementById('sms-demo-banner');
  if (!root) return;

  if (document.documentElement.classList.contains('sms-demo-banner-pref')) {
    document.body.classList.add('sms-demo-banner-dismissed');
    return;
  }

  var btn = root.querySelector('[data-sms-demo-banner-close]');
  if (!btn) return;

  btn.addEventListener('click', function () {
    document.documentElement.classList.add('sms-demo-banner-pref');
    document.body.classList.add('sms-demo-banner-dismissed');
    try {
      window.localStorage.setItem(KEY, '1');
    } catch (e) {
      /* ignore */
    }
  });
})();
