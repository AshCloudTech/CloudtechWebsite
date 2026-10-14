(() => {
  // Lightweight reveal using IntersectionObserver
  const els = document.querySelectorAll('.fx-reveal');
  if (!els.length) return;

  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce) {
    els.forEach(el => el.classList.add('is-visible'));
    return;
  }

  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('is-visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(el => io.observe(el));

  // Basic client-side hint on submit (non-blocking)
  const form = document.querySelector('.contact-form');
  const meta = document.getElementById('formMeta');
  if (form && meta) {
    form.addEventListener('submit', () => {
      meta.textContent = 'Sending…';
    }, { passive: true });
  }
})();



(() => {
  const chips = Array.from(document.querySelectorAll('.branchChip'));
  const focus = document.querySelector('.branchFocus');

  if (!chips.length || !focus) return;

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  let idx = Math.max(0, chips.findIndex(c => c.classList.contains('is-active')));
  let timer = null;
  let paused = false;

  const setActive = (i) => {
    const next = chips[i % chips.length];

    // If you already have chip click logic elsewhere, trigger it
    // so branch data updates the same way.
    if (!reduceMotion) {
      focus.classList.add('is-switching');
      window.setTimeout(() => {
        next.click();
        focus.classList.remove('is-switching');
        focus.classList.add('is-active');
      }, 140);
    } else {
      next.click();
    }

    idx = i % chips.length;
  };

  const start = () => {
    stop();
    timer = window.setInterval(() => {
      if (paused) return;
      setActive(idx + 1);
    }, 2500); // change slide timing here
  };

  const stop = () => {
    if (timer) window.clearInterval(timer);
    timer = null;
  };

  // Pause on hover / interaction (UX-friendly)
  focus.addEventListener('mouseenter', () => paused = true, { passive: true });
  focus.addEventListener('mouseleave', () => paused = false, { passive: true });

  chips.forEach((c, i) => {
    c.addEventListener('click', () => {
      idx = i;          // keep sync with manual click
      start();          // restart interval after manual selection
    }, { passive: true });
  });

  // Pause when tab is hidden (performance)
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) stop();
    else start();
  });

  // init
  focus.classList.add('is-active');
  start();
})();


/* Contact page entrance animation with staggered form fields */
(() => {
  const page = document.querySelector('.ct-contact-page');
  if (!page) return;

  const targets = Array.from(page.querySelectorAll(
    '.ct-contact-hero__inner, .ct-contact-details, .ct-message-panel, .ct-london-office'
  ));
  if (!targets.length) return;

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduceMotion || !('IntersectionObserver' in window)) {
    targets.forEach((el) => el.classList.add('ct-fade-in'));
    return;
  }

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;

      const target = entry.target;
      target.classList.add('ct-fade-in');

      if (target.classList.contains('ct-message-panel')) {
        target.querySelectorAll('.ct-input-wrap').forEach((field, index) => {
          field.style.setProperty('--ct-field-delay', `${Math.min(index * 65, 390)}ms`);
          field.classList.add('ct-field-fade-in');
        });
      }

      obs.unobserve(target);
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -4% 0px' });

  targets.forEach((el, index) => {
    el.style.setProperty('--ct-fade-delay', `${index * 80}ms`);
    observer.observe(el);
  });
})();

