(() => {
  // Reveal
  const els = document.querySelectorAll('.fx-reveal');
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (reduce) {
    els.forEach(el => el.classList.add('is-visible'));
  } else {
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

  // Pricing toggle (monthly vs one-time)
  const btns = document.querySelectorAll('.toggleBtn');
  const prices = document.querySelectorAll('.price-card .price');
  const subs = document.querySelectorAll('.price-card .sub');

  const setBilling = (mode) => {
    btns.forEach(b => b.classList.toggle('active', b.dataset.billing === mode));

    prices.forEach(p => {
      const v = p.getAttribute(mode === 'monthly' ? 'data-monthly' : 'data-onetime');
      if (v) p.textContent = v;
    });

    subs.forEach(s => {
      const v = s.getAttribute(mode === 'monthly' ? 'data-monthly' : 'data-onetime');
      if (v) s.textContent = v;
    });
  };

  btns.forEach(b => b.addEventListener('click', () => setBilling(b.dataset.billing), { passive:true }));

  // default
  setBilling('monthly');
})();
