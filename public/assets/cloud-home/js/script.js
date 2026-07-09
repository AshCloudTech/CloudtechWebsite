(() => {
  const heroVideo = document.querySelector('.hero-video-fullscreen');
  const header = document.querySelector('.site-header');
  const video = heroVideo?.querySelector('.hero-video');
  const desktopMq = window.matchMedia('(min-width: 769px)');

  const setHeroVideoSource = () => {
    if (!video) return;

    const nextSrc = desktopMq.matches
      ? video.dataset.desktopSrc
      : video.dataset.mobileSrc;

    if (!nextSrc || video.dataset.currentSrc === nextSrc) return;

    video.dataset.currentSrc = nextSrc;
    video.src = nextSrc;
    video.load();
    video.play().catch(() => {});
  };

  if (heroVideo && header) {
    const syncHeaderHeight = () => {
      document.documentElement.style.setProperty('--header-height', `${header.offsetHeight}px`);
    };

    const updateHeaderState = () => {
      syncHeaderHeight();
      const threshold = Math.max(heroVideo.offsetHeight - header.offsetHeight, 0);
      header.classList.toggle('is-scrolled', window.scrollY > threshold);
    };

    setHeroVideoSource();
    desktopMq.addEventListener('change', setHeroVideoSource);

    window.addEventListener('scroll', updateHeaderState, { passive: true });
    window.addEventListener('resize', updateHeaderState);
    window.addEventListener('load', updateHeaderState);
    updateHeaderState();
  }
})();

(() => {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.main-nav a');

  const updateActiveNav = () => {
    let currentId = null;

    sections.forEach((section) => {
      const rect = section.getBoundingClientRect();
      if (rect.top <= 120 && rect.bottom >= 120) {
        currentId = section.id;
      }
    });

    navLinks.forEach((link) => {
      const href = link.getAttribute('href') || '';
      const id = href.startsWith('#') ? href.substring(1) : null;
      link.classList.toggle('active', Boolean(id && id === currentId));
    });
  };

  window.addEventListener('scroll', updateActiveNav, { passive: true });
  window.addEventListener('load', updateActiveNav);
})();

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
