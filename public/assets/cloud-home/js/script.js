(() => {
  const heroVideoSection = document.querySelector('.hero-video-fullscreen');
  const header = document.querySelector('.site-header');
  const video = heroVideoSection?.querySelector('.hero-video');
  const desktopMq = window.matchMedia('(min-width: 769px)');

  const playHeroVideo = () => {
    if (!video) return;
    video.play().catch(() => {});
  };

  const markVideoReady = () => {
    if (!video) return;
    video.classList.remove('is-loading');
    playHeroVideo();
  };

  const setHeroVideoSource = () => {
    if (!video) return;

    const nextSrc = desktopMq.matches
      ? video.dataset.desktopSrc
      : video.dataset.mobileSrc;

    if (!nextSrc) return;

    if (video.dataset.currentSrc === nextSrc) {
      markVideoReady();
      return;
    }

    video.dataset.currentSrc = nextSrc;
    video.classList.add('is-loading');
    video.src = nextSrc;
    video.load();
    playHeroVideo();
  };

  if (video) {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      video.classList.remove('is-loading');
    }

    video.addEventListener('loadeddata', markVideoReady, { once: false });
    video.addEventListener('canplay', markVideoReady, { once: false });
    setHeroVideoSource();
    desktopMq.addEventListener('change', setHeroVideoSource);

    document.addEventListener('visibilitychange', () => {
      if (!document.hidden) {
        playHeroVideo();
      }
    });
  }

  if (heroVideoSection && header) {
    const syncHeaderHeight = () => {
      document.documentElement.style.setProperty('--header-height', `${header.offsetHeight}px`);
    };

    const updateHeaderState = () => {
      syncHeaderHeight();
      const threshold = Math.max(heroVideoSection.offsetHeight - header.offsetHeight, 0);
      header.classList.toggle('is-scrolled', window.scrollY > threshold);
    };

    window.addEventListener('scroll', updateHeaderState, { passive: true });
    window.addEventListener('resize', updateHeaderState);
    window.addEventListener('load', updateHeaderState);
    updateHeaderState();
  }
})();

(() => {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.main-nav > ul > li > a');

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
      obs.unobserve(entry.target);
    });
  }, {
    threshold: 0.12,
    rootMargin: '0px 0px -10% 0px'
  });

  targets.forEach((el) => io.observe(el));
})();
