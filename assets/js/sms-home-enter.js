(function () {
  'use strict';

  var body = document.body;
  if (!body.classList.contains('sms-home--enter-reveal')) {
    return;
  }

  var fromSplashHandoff = false;
  try {
    fromSplashHandoff = sessionStorage.getItem('sms_from_splash_handoff') === '1';
    if (fromSplashHandoff) {
      sessionStorage.removeItem('sms_from_splash_handoff');
      body.classList.add('sms-home--from-splash');
    }
  } catch (err) {}

  var curtain = document.getElementById('sms-enter-curtain');
  if (!curtain) {
    body.classList.remove('sms-home--enter-reveal');
    return;
  }

  var fly = curtain.querySelector('.sms-enter-curtain__logo');
  var target = document.querySelector('.sms-header-pro__logo .sms-logo-header');

  var flightSec = fromSplashHandoff ? 1.2 : 0.95;
  var opacityDelaySec = Math.max(0.55, flightSec - 0.38).toFixed(2);
  var startDelayMs = fromSplashHandoff ? 120 : 260;
  var phase2Ms = fromSplashHandoff ? 920 : 920;
  var cleanupMs = fromSplashHandoff ? 1680 : 1620;

  function cleanup() {
    body.style.overflow = '';
    body.classList.remove('sms-home--enter-reveal', 'sms-home--enter-phase2', 'sms-home--from-splash');
    curtain.remove();
    try {
      sessionStorage.setItem('sms_home_welcome_on_reload_ok', '1');
    } catch (e) {}
  }

  function runReduced() {
    body.style.overflow = 'hidden';
    if (fly) {
      fly.style.opacity = '0';
      fly.style.visibility = 'hidden';
    }
    var bg = curtain.querySelector('.sms-enter-curtain__bg');
    if (bg) {
      bg.style.transition = 'opacity 0.38s ease';
      bg.style.opacity = '0';
    }
    body.classList.add('sms-home--enter-phase2');
    window.setTimeout(cleanup, 420);
  }

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !fly || !target) {
    runReduced();
    return;
  }

  body.style.overflow = 'hidden';

  function startFlight() {
    var fr = fly.getBoundingClientRect();
    var tr = target.getBoundingClientRect();
    if (!fr.width || !fr.height || !tr.width || !tr.height) {
      runReduced();
      return;
    }
    var dx = tr.left + tr.width / 2 - (fr.left + fr.width / 2);
    var dy = tr.top + tr.height / 2 - (fr.top + fr.height / 2);
    var scale = Math.min(tr.width / fr.width, tr.height / fr.height);
    fly.style.transformOrigin = 'center center';
    requestAnimationFrame(function () {
      fly.style.transition =
        'transform ' +
        flightSec +
        's cubic-bezier(0.18, 0.82, 0.22, 1), opacity 0.5s ease ' +
        opacityDelaySec +
        's';
      fly.style.transform =
        'translate(' + dx + 'px,' + dy + 'px) scale(' + scale + ')';
      fly.style.opacity = '0';
    });
  }

  function startPhase2AndFadeBg() {
    var bg = curtain.querySelector('.sms-enter-curtain__bg');
    body.classList.add('sms-home--enter-phase2');
    if (bg) {
      requestAnimationFrame(function () {
        bg.style.transition = 'opacity 0.55s ease 0.06s';
        bg.style.opacity = '0';
      });
    }
  }

  function schedule() {
    window.setTimeout(startFlight, startDelayMs);
    window.setTimeout(startPhase2AndFadeBg, phase2Ms);
    window.setTimeout(cleanup, cleanupMs);
  }

  if (document.fonts && document.fonts.ready) {
    document.fonts.ready.then(function () {
      requestAnimationFrame(function () {
        requestAnimationFrame(schedule);
      });
    });
  } else {
    requestAnimationFrame(function () {
      requestAnimationFrame(schedule);
    });
  }
})();
