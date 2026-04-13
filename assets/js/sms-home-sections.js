/**
 * Homepage sections: scroll reveal (+ legacy accordion hook if present)
 */
(function () {
  'use strict';

  function initReveal() {
    var nodes = document.querySelectorAll('[data-sms-hs-reveal]');
    if (!nodes.length) return;
    if (!('IntersectionObserver' in window)) {
      nodes.forEach(function (el) {
        el.classList.add('is-inview');
      });
      return;
    }
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-inview');
          io.unobserve(entry.target);
        });
      },
      { root: null, rootMargin: '0px 0px -8% 0px', threshold: 0.08 }
    );
    nodes.forEach(function (el) {
      io.observe(el);
    });
  }

  /* Gallery: CSS marquee (sms-home-sections.css) — no JS */

  /** Campus aerial: muted loop preview + lightbox player (sound + controls); multiple “open” buttons supported */
  function initCampusFilm() {
    var lightbox = document.querySelector('[data-sms-campus-film-lightbox]');
    if (!lightbox) return;

    var preview = document.querySelector('[data-sms-campus-preview-video]');
    var openBtns = document.querySelectorAll('[data-sms-campus-film-open]');
    var lbVideo = lightbox.querySelector('.sms-campus-film-lightbox__video');
    var closers = lightbox.querySelectorAll('[data-sms-campus-film-close]');
    if (!openBtns.length || !lbVideo) return;

    var reduceMotion =
      window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (reduceMotion && preview) {
      preview.removeAttribute('autoplay');
      preview.pause();
    } else if (preview) {
      var tryPreview = function () {
        var p = preview.play();
        if (p && typeof p.catch === 'function') {
          p.catch(function () {});
        }
      };
      preview.addEventListener('loadeddata', tryPreview, { once: true });
      preview.addEventListener('canplay', tryPreview, { once: true });
      if (document.readyState === 'complete') {
        tryPreview();
      } else {
        window.addEventListener('load', tryPreview);
      }
    }

    function openLightbox() {
      lightbox.hidden = false;
      document.body.classList.add('sms-campus-film-lightbox-open');
      var t = preview && !isNaN(preview.currentTime) ? preview.currentTime : 0;
      if (preview) {
        preview.pause();
      }
      lbVideo.muted = false;
      lbVideo.currentTime = t;
      var p = lbVideo.play();
      if (p && typeof p.catch === 'function') {
        p.catch(function () {});
      }
      var closeBtn = lightbox.querySelector('.sms-campus-film-lightbox__close');
      if (closeBtn) closeBtn.focus();
    }

    function closeLightbox() {
      lbVideo.pause();
      lightbox.hidden = true;
      document.body.classList.remove('sms-campus-film-lightbox-open');
      if (!reduceMotion && preview) {
        var ct = lbVideo.currentTime || 0;
        preview.currentTime = ct;
        var pp = preview.play();
        if (pp && typeof pp.catch === 'function') {
          pp.catch(function () {});
        }
      }
    }

    openBtns.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        openLightbox();
      });
    });

    closers.forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        closeLightbox();
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !lightbox.hidden) closeLightbox();
    });
  }

  /** Facilities list: click row to set active (crimson + image); arrow links still navigate */
  function initFacItems() {
    var root = document.querySelector('[data-sms-fac-items]');
    if (!root) return;

    var items = root.querySelectorAll('[data-sms-fac-item]');
    items.forEach(function (item) {
      item.addEventListener('click', function () {
        items.forEach(function (el) {
          el.classList.remove('sms-hs-fac__item--active');
          el.removeAttribute('aria-current');
        });
        item.classList.add('sms-hs-fac__item--active');
        item.setAttribute('aria-current', 'true');
      });
    });

    root.querySelectorAll('[data-sms-fac-arrow]').forEach(function (a) {
      a.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    });
  }

  function initHomeFaq() {
    var root = document.querySelector('[data-sms-home-faq]');
    if (!root) return;

    var items = root.querySelectorAll('.sms-faq-item');
    items.forEach(function (item) {
      var btn = item.querySelector('.sms-faq-item__btn');
      if (!btn) return;

      btn.addEventListener('click', function () {
        var open = item.classList.contains('is-open');
        if (!open) {
          items.forEach(function (other) {
            other.classList.remove('is-open');
            var ob = other.querySelector('.sms-faq-item__btn');
            if (ob) ob.setAttribute('aria-expanded', 'false');
          });
          item.classList.add('is-open');
          btn.setAttribute('aria-expanded', 'true');
        } else {
          item.classList.remove('is-open');
          btn.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  function initAccordion() {
    var root = document.querySelector('[data-sms-hs-accordion]');
    if (!root) return;

    var items = root.querySelectorAll('.sms-hs-acc__item');
    items.forEach(function (item) {
      var btn = item.querySelector('.sms-hs-acc__btn');
      if (!btn) return;

      btn.addEventListener('click', function () {
        var open = item.classList.contains('is-open');
        if (!open) {
          items.forEach(function (other) {
            other.classList.remove('is-open');
            var ob = other.querySelector('.sms-hs-acc__btn');
            if (ob) ob.setAttribute('aria-expanded', 'false');
          });
          item.classList.add('is-open');
          btn.setAttribute('aria-expanded', 'true');
        } else {
          item.classList.remove('is-open');
          btn.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initReveal();
      initCampusFilm();
      initFacItems();
      initHomeFaq();
      initAccordion();
    });
  } else {
    initReveal();
    initCampusFilm();
    initFacItems();
    initHomeFaq();
    initAccordion();
  }
})();
