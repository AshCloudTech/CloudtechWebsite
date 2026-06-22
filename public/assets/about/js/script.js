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
        '.section-header, .card, .leader-card, .partner-card, .global-card, .cta-card'
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
