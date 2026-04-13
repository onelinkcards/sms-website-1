/**
 * Tribute splash: centered logo holds, then moves to brand slot; content reveals.
 */
(function () {
  'use strict';

  var body = document.body;
  if (!body.classList.contains('sms-splash-tribute--intro')) {
    return;
  }

  var flyWrap = document.getElementById('sms-splash-intro-fly');
  var fly = flyWrap ? flyWrap.querySelector('.sms-splash-tribute__intro-logo') : null;
  var target = document.querySelector('.sms-splash-tribute__brand-logo');

  /** Ms logo stays centered before flight (readable beat). */
  var HOLD_CENTER_MS = 1800;
  /** Transform duration — slower = calmer. */
  var FLIGHT_DURATION_MS = 1250;
  /** Remove overlay shortly after motion ends. */
  var CLEANUP_MS = FLIGHT_DURATION_MS + 120;

  function finishReduced() {
    if (flyWrap) {
      flyWrap.remove();
    }
    body.classList.remove('sms-splash-tribute--intro');
    body.classList.add('sms-splash-tribute--content-ready');
  }

  if (!fly || !target || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    finishReduced();
    return;
  }

  function runFlight() {
    var fr = fly.getBoundingClientRect();
    var tr = target.getBoundingClientRect();
    if (!fr.width || !fr.height || !tr.width || !tr.height) {
      finishReduced();
      return;
    }
    var dx = tr.left + tr.width / 2 - (fr.left + fr.width / 2);
    var dy = tr.top + tr.height / 2 - (fr.top + fr.height / 2);
    var scale = Math.min(tr.width / fr.width, tr.height / fr.height);
    fly.style.transformOrigin = 'center center';
    requestAnimationFrame(function () {
      fly.style.transition =
        'transform ' +
        FLIGHT_DURATION_MS / 1000 +
        's cubic-bezier(0.18, 0.82, 0.22, 1)';
      fly.style.transform =
        'translate(' + dx + 'px,' + dy + 'px) scale(' + scale + ')';
    });

    window.setTimeout(function () {
      body.classList.remove('sms-splash-tribute--intro');
      body.classList.add('sms-splash-tribute--content-ready');
      if (flyWrap) {
        flyWrap.remove();
      }
    }, CLEANUP_MS);
  }

  function schedule() {
    function afterFonts(done) {
      if (document.fonts && document.fonts.ready) {
        document.fonts.ready.then(done);
      } else {
        done();
      }
    }
    afterFonts(function () {
      window.setTimeout(function () {
        requestAnimationFrame(function () {
          requestAnimationFrame(runFlight);
        });
      }, HOLD_CENTER_MS);
    });
  }

  schedule();
})();
