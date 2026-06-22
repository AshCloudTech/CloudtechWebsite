(() => {
  if (window.__ctNavBound) return;
  window.__ctNavBound = true;

  const navToggle = document.querySelector('.nav-toggle');
  const mainNav = document.querySelector('.main-nav');

  if (!navToggle || !mainNav) return;

  navToggle.addEventListener('click', () => {
    mainNav.classList.toggle('open');
  });
})();
