/**
 * Help dock: smooth open/close above bottom tab.
 */
(function () {
  'use strict';

  function init() {
    var root = document.querySelector('[data-sms-help-dock]');
    if (!root) return;
    var toggle = document.getElementById('sms-help-dock-toggle');
    var panel = document.getElementById('sms-help-dock-panel');
    var closeBtn = document.getElementById('sms-help-dock-close');
    if (!toggle || !panel) return;

    function setOpen(open) {
      root.classList.toggle('is-open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      toggle.setAttribute('aria-label', open ? 'Close' : 'How can we help you? Open help menu.');
      panel.setAttribute('aria-hidden', open ? 'false' : 'true');
      panel.setAttribute('aria-modal', open ? 'true' : 'false');
      document.body.classList.toggle('sms-help-dock-open', open);
    }

    toggle.addEventListener('click', function (e) {
      e.stopPropagation();
      setOpen(!root.classList.contains('is-open'));
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        setOpen(false);
        toggle.focus();
      });
    }

    document.addEventListener('click', function (e) {
      if (!root.classList.contains('is-open')) return;
      if (!root.contains(e.target)) setOpen(false);
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && root.classList.contains('is-open')) {
        setOpen(false);
        toggle.focus();
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
