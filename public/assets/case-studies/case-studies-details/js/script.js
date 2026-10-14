        document.addEventListener('DOMContentLoaded', function() {
            if (window.lucide && typeof window.lucide.createIcons === 'function') {
                window.lucide.createIcons();
            }

            const revealElements = document.querySelectorAll('.gmb-reveal');
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

            revealElements.forEach(el => revealObserver.observe(el));

            const counterElements = document.querySelectorAll('.gmb-counter');
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseInt(el.getAttribute('data-target'), 10);
                        const formatted = el.getAttribute('data-formatted') || target;
                        const duration = 1600;
                        const startTime = performance.now();

                        function updateCounter(currentTime) {
                            const elapsed = currentTime - startTime;
                            const progress = Math.min(elapsed / duration, 1);
                            const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                            const currentVal = Math.floor(easeProgress * target);

                            if (progress < 1) {
                                el.innerText = currentVal.toLocaleString();
                                requestAnimationFrame(updateCounter);
                            } else {
                                el.innerText = formatted;
                            }
                        }

                        requestAnimationFrame(updateCounter);
                        observer.unobserve(el);
                    }
                });
            }, { threshold: 0.3 });

            counterElements.forEach(el => counterObserver.observe(el));

            const chartBars = document.querySelectorAll('.gmb-trend-bar-fill');
            const breakdownTracks = document.querySelectorAll('.gmb-breakdown-fill');

            const chartObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        chartBars.forEach(bar => {
                            bar.style.height = bar.getAttribute('data-height');
                        });
                        breakdownTracks.forEach(fill => {
                            fill.style.width = fill.getAttribute('data-width');
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            const chartsSection = document.querySelector('.gmb-charts-grid');
            if (chartsSection) {
                chartObserver.observe(chartsSection);
            }
        });