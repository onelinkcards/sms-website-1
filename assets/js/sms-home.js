/**
 * SMS homepage: rotating top announcement, mobile enquiry bottom sheet.
 */
(function () {
  'use strict';

  /* ---- Homepage hero: auto-rotate background slides ---- */
  var heroRoot = document.querySelector('[data-sms-hero-root]');
  if (heroRoot) {
    var slideshow = heroRoot.querySelector('[data-sms-hero-slideshow]');
    var slides = slideshow ? slideshow.querySelectorAll('.sms-hero-cu__slide') : [];
    var dots = heroRoot.querySelectorAll('[data-sms-hero-dot]');
    var heroIdx = 0;
    var heroTimer = null;
    var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function heroGo(n) {
      if (!slides.length) return;
      var next = ((n % slides.length) + slides.length) % slides.length;
      slides.forEach(function (s, j) {
        s.classList.toggle('is-active', j === next);
      });
      dots.forEach(function (d, j) {
        d.classList.toggle('is-active', j === next);
        d.setAttribute('aria-selected', j === next ? 'true' : 'false');
      });
      heroIdx = next;
    }

    dots.forEach(function (d) {
      d.addEventListener('click', function () {
        var idx = parseInt(d.getAttribute('data-sms-hero-dot'), 10);
        if (!isNaN(idx)) heroGo(idx);
        if (heroTimer) {
          clearInterval(heroTimer);
          heroTimer = null;
        }
        if (!reducedMotion && slides.length > 1) {
          heroTimer = window.setInterval(function () {
            heroGo(heroIdx + 1);
          }, 6000);
        }
      });
    });

    if (!reducedMotion && slides.length > 1) {
      heroTimer = window.setInterval(function () {
        heroGo(heroIdx + 1);
      }, 6000);
    }

    var heroVideo = heroRoot.querySelector('.sms-hero-cu__video[data-sms-video-sequence]');
    if (heroVideo) {
      var sequenceAttr = heroVideo.getAttribute('data-sms-video-sequence') || '';
      var nextVideos = sequenceAttr
        .split(',')
        .map(function (v) {
          return v.trim();
        })
        .filter(Boolean);
      var nextIndex = 0;
      heroVideo.addEventListener('ended', function () {
        if (nextIndex >= nextVideos.length) {
          heroVideo.loop = true;
          return;
        }
        heroVideo.src = nextVideos[nextIndex];
        nextIndex += 1;
        heroVideo.load();
        heroVideo.play().catch(function () {});
        if (nextIndex >= nextVideos.length) heroVideo.loop = true;
      });
    }
  }

  /* ---- Topline ticker: handled globally in sms-global-uniform.js (mobile + desktop) ---- */

  /* ---- Mobile enquiry sheet (homepage only) ---- */
  var sheet = document.getElementById('sms-enquiry-sheet');
  if (sheet) {
    var panel = sheet.querySelector('.sms-enquiry-sheet__panel');
    var openers = document.querySelectorAll('[data-sms-open-enquiry]');
    var closers = sheet.querySelectorAll('[data-sms-close-enquiry]');

    function openSheet() {
      sheet.hidden = false;
      sheet.setAttribute('aria-hidden', 'false');
      sheet.classList.add('is-open');
      document.body.classList.add('sms-enquiry-sheet-open');
      document.body.style.overflow = 'hidden';
      var focusTarget = panel && panel.querySelector('input, select, button');
      if (focusTarget) focusTarget.focus();
    }

    function closeSheet() {
      sheet.classList.remove('is-open');
      sheet.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('sms-enquiry-sheet-open');
      document.body.style.overflow = '';
      window.setTimeout(function () {
        if (!sheet.classList.contains('is-open')) sheet.hidden = true;
      }, 320);
    }

    openers.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        openSheet();
      });
    });

    closers.forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        closeSheet();
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && sheet.classList.contains('is-open')) closeSheet();
    });
  }
})();
