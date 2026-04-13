/**
 * After user has seen the homepage welcome once, a hard refresh replays the curtain
 * (one navigation via index.php?home_welcome=1 → PHP sets session, then clean URL).
 */
(function () {
  'use strict';

  var body = document.body;
  if (!body.classList.contains('sms-home')) {
    return;
  }
  if (body.classList.contains('sms-home--enter-reveal')) {
    return;
  }

  var nav = performance.getEntriesByType && performance.getEntriesByType('navigation')[0];
  if (!nav || nav.type !== 'reload') {
    return;
  }

  try {
    if (sessionStorage.getItem('sms_home_welcome_on_reload_ok') !== '1') {
      return;
    }
  } catch (e) {
    return;
  }

  window.location.replace('index.php?home_welcome=1');
})();
