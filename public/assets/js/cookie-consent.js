document.addEventListener('DOMContentLoaded', () => {
  const storageKey = 'cloudtech_cookie_consent';
  const banner = document.getElementById('cookie-consent');

  if (!banner) return;

  const read = () => {
    try {
      return JSON.parse(localStorage.getItem(storageKey));
    } catch {
      return null;
    }
  };

  const save = preferences => {
    const consent = {
      essential: true,
      ...preferences,
      updatedAt: new Date().toISOString(),
      version: 1,
    };

    try {
      localStorage.setItem(storageKey, JSON.stringify(consent));
    } catch {
      // Continue for the current visit when browser storage is unavailable.
    }

    window.dispatchEvent(new CustomEvent('cookieconsentchange', { detail: consent }));
    banner.hidden = true;
  };

  document.querySelectorAll('[data-cookie-action]').forEach(button => {
    button.addEventListener('click', () => {
      if (button.dataset.cookieAction === 'accept') {
        save({ functional: true, analytics: true, marketing: true });
      }

      if (button.dataset.cookieAction === 'reject') {
        save({ functional: false, analytics: false, marketing: false });
      }
    });
  });

  // The footer control lets visitors review the notice and update their choice.
  document.querySelectorAll('[data-cookie-settings]').forEach(button => {
    button.addEventListener('click', event => {
      event.preventDefault();
      banner.hidden = false;
      banner.querySelector('[data-cookie-action="reject"]')?.focus();
    });
  });

  if (!read()) banner.hidden = false;
});
