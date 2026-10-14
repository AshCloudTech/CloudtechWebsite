
(function () {
    
  "use strict";
  

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ---------------------------------------------------------
     1) Scroll fade-in
     --------------------------------------------------------- */
  function initReveal() {
    var targets = document.querySelectorAll(".fx-reveal");
    if (!targets.length) return;

    if (reduceMotion || !("IntersectionObserver" in window)) {
      targets.forEach(function (el) { el.classList.add("is-visible"); });
      return;
    }

    var io = new IntersectionObserver(
      function (entries, obs) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-visible");
          obs.unobserve(entry.target);
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -10% 0px" }
    );

    targets.forEach(function (el) { io.observe(el); });
  }

  /* ---------------------------------------------------------
     2) Review carousel
     --------------------------------------------------------- */
  function initCarousels() {
    var carousels = document.querySelectorAll("[data-carousel]");
    carousels.forEach(setupCarousel);
  }

  function setupCarousel(root) {
    var viewport = root.querySelector(".cs-review-viewport");
    var track = root.querySelector(".cs-review-track");
    var slides = Array.prototype.slice.call(root.querySelectorAll(".cs-review-slide"));
    var prevBtn = root.querySelector(".cs-carousel-prev");
    var nextBtn = root.querySelector(".cs-carousel-next");
    var dotsWrap = root.querySelector(".cs-carousel-dots");

    if (!viewport || !track || !slides.length) return;

    var perView = getPerView();
    var index = 0;
    var autoplayDelay = parseInt(root.getAttribute("data-autoplay"), 10) || 0;
    var autoplayTimer = null;
    var isHovering = false;
    var isFocused = false;
    var inView = false;

    function getPerView() {
      var w = window.innerWidth;
      if (w <= 640) return 1;
      if (w <= 991) return 2;
      return 3;
    }

    function pageCount() {
      return Math.max(1, slides.length - perView + 1);
    }

    function clampIndex(i) {
      var max = pageCount() - 1;
      if (i < 0) return max;
      if (i > max) return 0;
      return i;
    }

    function buildDots() {
      if (!dotsWrap) return;
      dotsWrap.innerHTML = "";
      var count = pageCount();
      if (count <= 1) {
        dotsWrap.style.display = "none";
        return;
      }
      dotsWrap.style.display = "";
      for (var i = 0; i < count; i++) {
        var b = document.createElement("button");
        b.type = "button";
        b.setAttribute("role", "tab");
        b.setAttribute("aria-label", "Go to review " + (i + 1));
        (function (idx) {
          b.addEventListener("click", function () {
            goTo(idx);
            restartAutoplay();
          });
        })(i);
        dotsWrap.appendChild(b);
      }
    }

    function updateDots() {
      if (!dotsWrap) return;
      var dots = dotsWrap.children;
      for (var i = 0; i < dots.length; i++) {
        dots[i].classList.toggle("is-active", i === index);
        dots[i].setAttribute("aria-selected", i === index ? "true" : "false");
      }
    }

    function updateArrows() {
      // Looping carousel: arrows stay enabled, but disable if nothing to slide.
      var disable = pageCount() <= 1;
      if (prevBtn) prevBtn.disabled = disable;
      if (nextBtn) nextBtn.disabled = disable;
    }

    function render() {
      var slideWidth = slides[0].getBoundingClientRect().width;
      var gap = parseFloat(getComputedStyle(track).gap || getComputedStyle(track).columnGap || 24);
      var offset = index * (slideWidth + gap);
      track.style.transform = "translateX(-" + offset + "px)";
      updateDots();
    }

    function goTo(i) {
      index = clampIndex(i);
      render();
    }

    function next() { goTo(index + 1); }
    function prev() { goTo(index - 1); }

    function startAutoplay() {
      if (!autoplayDelay || reduceMotion || pageCount() <= 1) return;
      stopAutoplay();
      autoplayTimer = window.setInterval(function () {
        if (isHovering || isFocused) return;
        next();
      }, autoplayDelay);
    }

    function stopAutoplay() {
      if (autoplayTimer) {
        window.clearInterval(autoplayTimer);
        autoplayTimer = null;
      }
    }

    function restartAutoplay() {
      stopAutoplay();
      startAutoplay();
    }

    /* Controls */
    if (nextBtn) nextBtn.addEventListener("click", function () { next(); restartAutoplay(); });
    if (prevBtn) prevBtn.addEventListener("click", function () { prev(); restartAutoplay(); });

    root.addEventListener("mouseenter", function () { isHovering = true; });
    root.addEventListener("mouseleave", function () { isHovering = false; });

    viewport.addEventListener("focusin", function () { isFocused = true; });
    viewport.addEventListener("focusout", function () { isFocused = false; });

    /* Keyboard: Left/Right arrows while the carousel is focused */
    viewport.addEventListener("keydown", function (e) {
      if (e.key === "ArrowRight") {
        e.preventDefault();
        next();
        restartAutoplay();
      } else if (e.key === "ArrowLeft") {
        e.preventDefault();
        prev();
        restartAutoplay();
      }
    });

    /* Touch / swipe support */
    var touchStartX = 0;
    var touchDeltaX = 0;
    var touching = false;

    track.addEventListener("touchstart", function (e) {
      touching = true;
      touchStartX = e.touches[0].clientX;
      touchDeltaX = 0;
      stopAutoplay();
    }, { passive: true });

    track.addEventListener("touchmove", function (e) {
      if (!touching) return;
      touchDeltaX = e.touches[0].clientX - touchStartX;
    }, { passive: true });

    track.addEventListener("touchend", function () {
      if (!touching) return;
      touching = false;
      if (Math.abs(touchDeltaX) > 40) {
        if (touchDeltaX < 0) next(); else prev();
      }
      startAutoplay();
    });

    /* Pause autoplay while off-screen; resume when back in view */
    if ("IntersectionObserver" in window) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          inView = entry.isIntersecting;
          if (inView) startAutoplay(); else stopAutoplay();
        });
      }, { threshold: 0.2 });
      io.observe(root);
    } else {
      startAutoplay();
    }

    /* Responsive: rebuild per-view count and re-render on resize */
    var resizeTimer = null;
    window.addEventListener("resize", function () {
      window.clearTimeout(resizeTimer);
      resizeTimer = window.setTimeout(function () {
        var newPerView = getPerView();
        if (newPerView !== perView) {
          perView = newPerView;
          index = 0;
          buildDots();
          updateArrows();
        }
        render();
      }, 150);
    });

    buildDots();
    updateArrows();
    render();
  }
  function initCounters() {
    var counters = document.querySelectorAll(".js-counter");

    if (!counters.length) return;

    counters.forEach(function (counter) {

        var target = parseInt(
            counter.getAttribute("data-target"),
            10
        ) || 0;

        var prefix = counter.getAttribute("data-prefix") || "";
        var suffix = counter.getAttribute("data-suffix") || "";

        var started = false;

        function startCounter() {

            if (started) return;
            started = true;

            var duration = 1800;
            var start = 0;
            var startTime = null;

            function animate(timestamp) {

                if (!startTime) {
                    startTime = timestamp;
                }

                var progress = Math.min(
                    (timestamp - startTime) / duration,
                    1
                );

                // Smooth ease-out
                var eased =
                    1 - Math.pow(1 - progress, 3);

                var value = Math.floor(
                    start + (target - start) * eased
                );

                counter.textContent =
                    prefix +
                    value.toLocaleString() +
                    suffix;

                if (progress < 1) {
                    requestAnimationFrame(animate);
                } else {
                    counter.textContent =
                        prefix +
                        target.toLocaleString() +
                        suffix;
                }
            }

            requestAnimationFrame(animate);
        }

        // Respect reduced-motion preference
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {

            counter.textContent =
                prefix +
                target.toLocaleString() +
                suffix;

            return;
        }

        // Start when counter enters viewport
        if ("IntersectionObserver" in window) {

            var observer = new IntersectionObserver(
                function (entries, obs) {

                    entries.forEach(function (entry) {

                        if (!entry.isIntersecting) return;

                        startCounter();

                        obs.unobserve(entry.target);
                    });

                },
                {
                    threshold: 0.2
                }
            );

            observer.observe(counter);

        } else {

            // Fallback for old browsers
            startCounter();
        }
    });
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", function () {
        initReveal();
        initCounters();
        initCarousels();
    });
} else {
    initReveal();
    initCounters();
    initCarousels();
}
})();
