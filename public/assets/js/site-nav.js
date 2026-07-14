(() => {
  if (window.__ctNavBound) return;
  window.__ctNavBound = true;

  const navToggle = document.querySelector('.nav-toggle');
  const mainNav = document.querySelector('.main-nav');
  const mobileMq = window.matchMedia('(max-width: 768px)');
  const desktopMq = window.matchMedia('(min-width: 769px) and (hover: hover)');

  const setExpanded = (item, expanded) => {
    item.querySelector(':scope > a')?.setAttribute('aria-expanded', expanded ? 'true' : 'false');
  };

  const closeMobileNav = () => {
    mainNav?.classList.remove('open');
    navToggle?.setAttribute('aria-expanded', 'false');
    document.querySelectorAll('.has-dropdown.open').forEach((item) => {
      item.classList.remove('open');
      setExpanded(item, false);
    });
  };

  const closeDesktopFlyouts = () => {
    document.querySelectorAll('.main-nav .has-dropdown.is-flyout-open').forEach((item) => {
      item.classList.remove('is-flyout-open');
      setExpanded(item, false);
    });
  };

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', () => {
      const isOpen = mainNav.classList.toggle('open');
      navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  }

  document.querySelectorAll('.has-dropdown > a').forEach((link) => {
    link.setAttribute('aria-haspopup', 'true');
    link.setAttribute('aria-expanded', 'false');

    link.addEventListener('click', (event) => {
      if (!mobileMq.matches) return;

      event.preventDefault();
      const item = link.parentElement;
      if (!item) return;

      const isOpen = item.classList.toggle('open');
      setExpanded(item, isOpen);
    });
  });

  if (mainNav) {
    const topLevelItems = mainNav.querySelectorAll(':scope > ul > li.has-dropdown');

    topLevelItems.forEach((item) => {
      item.addEventListener('mouseenter', () => {
        if (!desktopMq.matches) return;

        topLevelItems.forEach((other) => {
          if (other === item) return;
          other.classList.remove('is-flyout-open');
          setExpanded(other, false);
          other.querySelectorAll('.has-dropdown.is-flyout-open').forEach((nested) => {
            nested.classList.remove('is-flyout-open');
            setExpanded(nested, false);
          });
        });

        item.classList.add('is-flyout-open');
        setExpanded(item, true);
      });
    });

    mainNav.querySelectorAll('ul li ul.dropdown li.has-dropdown').forEach((item) => {
      item.addEventListener('mouseenter', () => {
        if (!desktopMq.matches) return;

        const siblings = item.parentElement?.querySelectorAll(':scope > li.has-dropdown') || [];
        siblings.forEach((sibling) => {
          if (sibling === item) return;
          sibling.classList.remove('is-flyout-open');
          setExpanded(sibling, false);
        });

        item.classList.add('is-flyout-open');
        setExpanded(item, true);
      });

      item.addEventListener('mouseleave', () => {
        if (!desktopMq.matches) return;
        item.classList.remove('is-flyout-open');
        setExpanded(item, false);
      });
    });

    mainNav.addEventListener('mouseleave', () => {
      if (!desktopMq.matches) return;
      closeDesktopFlyouts();
    });
  }

  mobileMq.addEventListener('change', (event) => {
    if (!event.matches) {
      closeMobileNav();
    } else {
      closeDesktopFlyouts();
    }
  });

  desktopMq.addEventListener('change', () => {
    closeMobileNav();
    closeDesktopFlyouts();
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeMobileNav();
      closeDesktopFlyouts();
    }
  });
})();
