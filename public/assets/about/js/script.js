// Mobile navigation toggle
// Highlight nav item on scroll
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


/* Scroll reveal – performance safe */
(() => {
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduceMotion) return;

    const revealTargets = document.querySelectorAll(
        '.section-header, .card, .stat-card, .client-logo-card, .testimonial-slider, .story-text, .story-image, .founder-visual'
    );

    revealTargets.forEach(el => el.classList.add('fx-reveal'));

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            obs.unobserve(entry.target); // one-time = cheaper
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -10% 0px'
    });

    revealTargets.forEach(el => observer.observe(el));
})();

/* Number Counter Animation */
(() => {
    const counterElements = document.querySelectorAll('[data-counter]');
    if (!counterElements.length) return;

    const animateCounter = (el) => {
        const target = Number.parseInt(el.getAttribute('data-target'), 10);
        if (!Number.isFinite(target)) return;

        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 2000;
        const frameRate = 1000 / 60;
        const totalFrames = Math.round(duration / frameRate);
        let frame = 0;

        const counter = window.setInterval(() => {
            frame += 1;
            const progress = Math.min(frame / totalFrames, 1);
            const currentCount = Math.round(target * (1 - Math.pow(1 - progress, 2)));
            el.textContent = currentCount + suffix;

            if (frame >= totalFrames) {
                window.clearInterval(counter);
                el.textContent = target + suffix;
            }
        }, frameRate);
    };

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            animateCounter(entry.target);
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.4 });

    counterElements.forEach((el) => counterObserver.observe(el));
})();

/* Client testimonial slider: show multiple reviews based on viewport */
(() => {
    const slider = document.querySelector('[data-testimonial-slider]');
    if (!slider) return;

    const track = slider.querySelector('.testimonial-track');
    const slides = Array.from(slider.querySelectorAll('.testimonial-slide'));
    const prev = slider.querySelector('[data-testimonial-prev]');
    const next = slider.querySelector('[data-testimonial-next]');
    const dotsContainer = slider.querySelector('[data-testimonial-dots]');

    if (!track || slides.length === 0 || !dotsContainer) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let current = 0;
    let timer = null;
    let visibleCount = 0;
    let dots = [];

    function getVisibleCount() {
        if (window.matchMedia('(max-width: 700px)').matches) return 1;
        if (window.matchMedia('(max-width: 991px)').matches) return 2;
        return 3;
    }

    function getMaxStart() {
        return Math.max(0, slides.length - visibleCount);
    }

    function renderDots() {
        dotsContainer.innerHTML = '';
        const dotCount = getMaxStart() + 1;

        for (let index = 0; index < dotCount; index += 1) {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'testimonial-dot';
            dot.setAttribute('aria-label', `Show client reviews starting from review ${index + 1}`);
            dot.addEventListener('click', () => {
                goTo(index);
                restart();
            });
            dotsContainer.appendChild(dot);
        }

        dots = Array.from(dotsContainer.querySelectorAll('.testimonial-dot'));
    }

    function goTo(index) {
        if (!slides.length) return;

        const maxStart = getMaxStart();
        current = index > maxStart ? 0 : index < 0 ? maxStart : index;

        const activeSlide = slides[current];
        const firstSlide = slides[0];
        const offset = activeSlide.offsetLeft - firstSlide.offsetLeft;
        track.style.transform = `translate3d(-${offset}px, 0, 0)`;

        slides.forEach((slide, slideIndex) => {
            const isVisible = slideIndex >= current && slideIndex < current + visibleCount;
            slide.classList.toggle('is-active', isVisible);
            slide.setAttribute('aria-hidden', isVisible ? 'false' : 'true');
        });

        dots.forEach((dot, dotIndex) => {
            dot.classList.toggle('is-active', dotIndex === current);
            if (dotIndex === current) {
                dot.setAttribute('aria-current', 'true');
            } else {
                dot.removeAttribute('aria-current');
            }
        });
    }

    function restart() {
        window.clearInterval(timer);
        if (reduceMotion || slides.length <= visibleCount) return;

        timer = window.setInterval(() => {
            goTo(current >= getMaxStart() ? 0 : current + 1);
        }, 5500);
    }

    function refreshLayout() {
        const nextVisibleCount = getVisibleCount();

        if (nextVisibleCount !== visibleCount) {
            visibleCount = nextVisibleCount;
            current = Math.min(current, getMaxStart());
            renderDots();
        }

        goTo(current);
        restart();
    }

    prev?.addEventListener('click', () => {
        goTo(current - 1);
        restart();
    });

    next?.addEventListener('click', () => {
        goTo(current + 1);
        restart();
    });

    slider.addEventListener('mouseenter', () => window.clearInterval(timer));
    slider.addEventListener('mouseleave', restart);
    slider.addEventListener('focusin', () => window.clearInterval(timer));
    slider.addEventListener('focusout', restart);

    let resizeFrame = null;
    window.addEventListener('resize', () => {
        if (resizeFrame !== null) window.cancelAnimationFrame(resizeFrame);
        resizeFrame = window.requestAnimationFrame(() => {
            resizeFrame = null;
            refreshLayout();
        });
    }, { passive: true });

    visibleCount = getVisibleCount();
    renderDots();
    goTo(0);
    restart();
})();
