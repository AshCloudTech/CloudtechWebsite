(() => {
  // --- Reveal animations (safe)
  const els = document.querySelectorAll('.fx-reveal');
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (reduce) {
    els.forEach(el => el.classList.add('is-visible'));
  } else if (els.length) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('is-visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.12 });

    els.forEach(el => io.observe(el));
  }

  // --- Pricing toggle (monthly vs one-time)
  const btns = document.querySelectorAll('.toggleBtn');

  // Support BOTH old and new markup safely:
  const priceEls = document.querySelectorAll('.price-card .price, .prPrice');
  const subEls   = document.querySelectorAll('.price-card .sub, .prSub');

  if (!btns.length || !priceEls.length) return;

  const setBilling = (mode) => {
    btns.forEach(b => {
      const active = b.dataset.billing === mode;
      b.classList.toggle('active', active);
      b.setAttribute('aria-selected', active ? 'true' : 'false');
    });

    priceEls.forEach(p => {
      const v = p.getAttribute(mode === 'monthly' ? 'data-monthly' : 'data-onetime');
      if (v !== null) p.textContent = v;
    });

    subEls.forEach(s => {
      const v = s.getAttribute(mode === 'monthly' ? 'data-monthly' : 'data-onetime');
      if (v !== null) s.textContent = v;
    });

    // Remember choice per user (optional but nice)
    try { localStorage.setItem('pricingBillingMode', mode); } catch (e) {}
  };

  btns.forEach(b => b.addEventListener('click', () => setBilling(b.dataset.billing), { passive: true }));

  // default from storage or monthly
  let initial = 'monthly';
  try {
    const saved = localStorage.getItem('pricingBillingMode');
    if (saved === 'monthly' || saved === 'one-time') initial = saved;
  } catch (e) {}

  setBilling(initial);
})();
