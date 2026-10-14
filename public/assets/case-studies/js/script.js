// tab script
document.querySelectorAll('.filter').forEach(button => {
    button.addEventListener('click', () => {

        // Active button
        document.querySelectorAll('.filter').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filterValue = button.getAttribute('data-filter');
        const cards = document.querySelectorAll('.cs-card');

        cards.forEach(card => {
            const category = card.getAttribute('data-category');

            if (filterValue === 'all' || category === filterValue) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
  requestAnimationFrame(() => document.getElementById('hero').classList.add('is-ready'));

  function animateCount(el){
    const target = parseFloat(el.getAttribute('data-count'));
    const prefix = el.getAttribute('data-prefix') || '';
    const suffix = el.getAttribute('data-suffix') || '';
    const isDecimal = String(target).includes('.') || suffix.includes('.');
    const duration = 1200;
    const start = performance.now();
    function tick(now){
      const p = Math.min(1, (now - start) / duration);
      const eased = 1 - Math.pow(1 - p, 3);
      const val = target * eased;
      const shown = isDecimal ? val.toFixed(1) : Math.round(val).toLocaleString();
      el.textContent = prefix + shown + suffix;
      if(p < 1) requestAnimationFrame(tick);
      else el.textContent = prefix + (isDecimal ? target.toFixed(1) : target.toLocaleString()) + suffix;
    }
    requestAnimationFrame(tick);
  }

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const countEls = document.querySelectorAll('[data-count]');
  const cardEls = document.querySelectorAll('.case-card');
  const bannerEl = document.querySelector('.cta-banner');

  if(reduced){
    countEls.forEach(el => {
      const t = parseFloat(el.getAttribute('data-count'));
      const isDecimal = String(t).includes('.');
      el.textContent = (el.getAttribute('data-prefix')||'') + (isDecimal ? t.toFixed(1) : t.toLocaleString()) + (el.getAttribute('data-suffix')||'');
    });
    cardEls.forEach(el => el.classList.add('in'));
    if(bannerEl) bannerEl.classList.add('in');
  } else {
    const countObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){ animateCount(entry.target); obs.unobserve(entry.target); }
      });
    }, {threshold:0.5});
    countEls.forEach(el => countObserver.observe(el));

    const riseObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry, i) => {
        if(entry.isIntersecting){
          setTimeout(() => entry.target.classList.add('in'), i * 70);
          obs.unobserve(entry.target);
        }
      });
    }, {threshold:0.15});
    cardEls.forEach(el => riseObserver.observe(el));
    if(bannerEl) riseObserver.observe(bannerEl);
  }