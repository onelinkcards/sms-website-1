/**
 * Enter Website: top wordmark → center on white, then navigate.
 * Homepage continues with curtain: same logo center → header (sms-home-enter.js).
 */
(function () {
  'use strict';

  var cfg = window.SMS_SPLASH_HANDOFF || {};
  var mainLogoSrc = cfg.mainLogo || '';

  function preloadMainLogo() {
    if (!mainLogoSrc) return;
    var img = new Image();
    img.decoding = 'async';
    img.src = mainLogoSrc;
  }

  function go(href) {
    try {
      sessionStorage.setItem('sms_from_splash_handoff', '1');
    } catch (e) {}
    window.setTimeout(function () {
      window.location.href = href;
    }, 260);
  }

  function pickSourceRect() {
    var body = document.body;
    var introFly = document.querySelector('.sms-splash-tribute__intro-logo');
    if (body.classList.contains('sms-splash-tribute--intro') && introFly) {
      var ir = introFly.getBoundingClientRect();
      if (ir.width > 2 && ir.height > 2) {
        return { rect: ir };
      }
    }
    var brand = document.querySelector('.sms-splash-tribute__brand-logo');
    if (brand) {
      var br = brand.getBoundingClientRect();
      if (br.width > 2 && br.height > 2) {
        return { rect: br };
      }
    }
    return null;
  }

  function start(href) {
    if (!href) {
      return;
    }
    document.body.classList.add('sms-splash-tribute--exiting');
    preloadMainLogo();
    go(href);
  }

  window.smsSplashHandoffToHome = start;
})();
