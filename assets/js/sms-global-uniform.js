/**
 * Global uniformity: IntersectionObserver for .fade-up → .visible
 */
(function () {
  'use strict';

  function initFadeUp() {
    var nodes = document.querySelectorAll('.fade-up');
    if (!nodes.length) return;
    if (!('IntersectionObserver' in window)) {
      nodes.forEach(function (el) {
        el.classList.add('visible');
      });
      return;
    }
    var obs = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.06, rootMargin: '0px 0px -5% 0px' }
    );
    nodes.forEach(function (el) {
      obs.observe(el);
    });
  }

  /** Top navy bar: rotate announcement lines on all viewports (was desktop-only in sms-home.js). */
  function initToplineTicker() {
    var textEl = document.getElementById('sms-announce-ticker-text') || document.getElementById('sms-topline-dynamic');
    var dataEl = document.getElementById('sms-announce-ticker-data') || document.getElementById('sms-topline-messages');
    if (!textEl || !dataEl) return;
    var messages = [];
    try {
      messages = JSON.parse(dataEl.textContent || '[]');
    } catch (e) {
      return;
    }
    if (messages.length <= 1) return;
    textEl.style.transition = 'opacity 0.28s ease';
    var idx = 0;
    window.setInterval(function () {
      idx = (idx + 1) % messages.length;
      textEl.style.opacity = '0';
      window.setTimeout(function () {
        textEl.textContent = messages[idx];
        textEl.style.opacity = '1';
      }, 280);
    }, 8000);
  }

  /** Enquiry: small top-left toast + “Submitted” on success */
  function initEnquiryToast() {
    var toast = document.getElementById('sms-enquiry-toast');
    if (toast) {
      window.requestAnimationFrame(function () {
        toast.classList.add('is-visible');
      });
      var tid;
      function hideToast() {
        toast.classList.remove('is-visible');
        window.setTimeout(function () {
          if (toast.parentNode) {
            toast.parentNode.removeChild(toast);
          }
        }, 400);
      }
      tid = window.setTimeout(hideToast, 9000);
      var closeBtn = toast.querySelector('[data-sms-enquiry-toast-close]');
      if (closeBtn) {
        closeBtn.addEventListener('click', function () {
          window.clearTimeout(tid);
          hideToast();
        });
      }
    }
    if (document.documentElement.getAttribute('data-sms-enquiry-ok') === '1') {
      document.querySelectorAll('button.sms-hero-cu__submit[type="submit"]').forEach(function (btn) {
        btn.disabled = true;
        btn.textContent = 'Submitted';
      });
    }
  }

  function initMobileDrawer() {
    var drawer = document.getElementById('sms-mobile-drawer');
    var menuBtn = document.getElementById('menu-btn');
    if (!drawer || !menuBtn) return;

    function isDrawerMode() {
      return window.matchMedia('(max-width: 1199px)').matches;
    }

    function openDrawer(e) {
      if (!isDrawerMode()) return;
      if (e) {
        e.preventDefault();
        e.stopPropagation();
        if (typeof e.stopImmediatePropagation === 'function') e.stopImmediatePropagation();
      }
      drawer.classList.add('is-open');
      drawer.setAttribute('aria-hidden', 'false');
      document.body.classList.add('sms-mobile-drawer-open');
      document.body.style.overflow = 'hidden';
      /* Close help FAB panel so it does not reopen expanded after menu closes */
      var helpDock = document.getElementById('sms-help-dock');
      var helpToggle = document.getElementById('sms-help-dock-toggle');
      var helpPanel = document.getElementById('sms-help-dock-panel');
      if (helpDock && helpDock.classList.contains('is-open')) {
        helpDock.classList.remove('is-open');
        if (helpToggle) {
          helpToggle.setAttribute('aria-expanded', 'false');
          helpToggle.setAttribute('aria-label', 'Open help menu');
        }
        if (helpPanel) helpPanel.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('sms-help-dock-open');
      }
      var first = drawer.querySelector('.sms-mobile-drawer__link');
      if (first) window.setTimeout(function () { first.focus(); }, 50);
    }

    function closeDrawer() {
      drawer.classList.remove('is-open');
      drawer.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('sms-mobile-drawer-open');
      document.body.style.overflow = '';
      menuBtn.focus();
    }

    if (window.jQuery) {
      window.jQuery(menuBtn).off('click').on('click', openDrawer);
    } else {
      menuBtn.addEventListener('click', openDrawer);
    }

    drawer.querySelectorAll('[data-sms-close-mobile-nav]').forEach(function (el) {
      el.addEventListener('click', function (e) {
        if (el.classList.contains('sms-mobile-drawer__backdrop')) {
          e.preventDefault();
        }
        closeDrawer();
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && drawer.classList.contains('is-open')) closeDrawer();
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initFadeUp();
      initToplineTicker();
      initEnquiryToast();
      initMobileDrawer();
    });
  } else {
    initFadeUp();
    initToplineTicker();
    initEnquiryToast();
    initMobileDrawer();
  }
})();
