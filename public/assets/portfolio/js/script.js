// Mobile Nav Toggle
const toggle=document.querySelector('.nav-toggle');
const nav=document.querySelector('.main-nav');
if(toggle){ toggle.addEventListener('click',()=>nav.classList.toggle('open')); }

document.querySelectorAll('.filter').forEach(tab => {
  tab.addEventListener('click', () => {

    document.querySelectorAll('.filter').forEach(b => b.classList.remove('active'));
    tab.classList.add('active');

    const filter = tab.dataset.filter;
    const cards = document.querySelectorAll('.project-card');

    cards.forEach(card => {
      const category = card.dataset.category;
      const show = filter === 'all' || category === filter;

      card.style.pointerEvents = show ? 'auto' : 'none';
      card.style.opacity = show ? '1' : '0';
      card.style.transform = show
        ? 'translate3d(0,0,0)'
        : 'translate3d(0,12px,0)';
      card.style.position = show ? 'relative' : 'absolute';
    });
  });
});

(() => {
  const els = document.querySelectorAll('.project-card, .why-card, .cta, .stat');
  if (!els.length) return;

  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce) {
    els.forEach(el => el.classList.add('is-visible'));
    return;
  }

  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('is-visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.15 });

  els.forEach(el => {
    el.classList.add('fx-reveal');
    io.observe(el);
  });
})();

