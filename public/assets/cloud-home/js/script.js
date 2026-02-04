// Mobile navigation toggle
const navToggle = document.querySelector('.nav-toggle');
const mainNav = document.querySelector('.main-nav');

if (navToggle && mainNav) {
    navToggle.addEventListener('click', () => {
        mainNav.classList.toggle('open');
    });
}

// Optional: highlight nav item on scroll (simple version)
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.main-nav a');

function updateActiveNav() {
    let currentId = null;

    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        if (rect.top <= 120 && rect.bottom >= 120) {
            currentId = section.id;
        }
    });

    navLinks.forEach(link => {
        const href = link.getAttribute('href') || '';
        const id = href.startsWith('#') ? href.substring(1) : null;
        if (id && id === currentId) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

window.addEventListener('scroll', updateActiveNav);
window.addEventListener('load', updateActiveNav);



(() => {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduceMotion) return;

  // Auto-attach reveals to your existing sections/cards
  const targets = document.querySelectorAll(
    [
      '.stat-card',
      '.service-card',
      '.process-card',
      '.industry-card',
      '.ai-card',
      '.pricing-card',
      '.case-card',
      '.global-card',
      '.cta-step',
      '.section-header'
    ].join(',')
  );

  targets.forEach((el) => el.classList.add('fx-reveal'));

  const io = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('is-visible');
      obs.unobserve(entry.target); // one-time reveal = cheapest
    });
  }, {
    threshold: 0.12,
    rootMargin: '0px 0px -10% 0px'
  });

  targets.forEach((el) => io.observe(el));
})();
