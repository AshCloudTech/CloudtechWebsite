(function () {
  // Lucide icons
  function initLucide() {
    if (window.lucide && typeof window.lucide.createIcons === "function") {
      window.lucide.createIcons();
    }
  }

  const els = document.querySelectorAll(".fx-reveal");
  const reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // If no IO or reduced motion, just show everything
  if (!("IntersectionObserver" in window) || reduced || !els.length) {
    els.forEach(el => el.classList.add("is-visible"));
    initLucide();
    return;
  }

  const io = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("is-visible");
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach((el, idx) => {
    if (el.hasAttribute("data-fx-stagger")) {
      el.style.transitionDelay = `${Math.min(idx * 60, 360)}ms`;
    }
    io.observe(el);
  });

  initLucide();
})();
