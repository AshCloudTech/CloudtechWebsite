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
