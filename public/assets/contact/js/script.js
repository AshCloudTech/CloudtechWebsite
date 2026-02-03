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
