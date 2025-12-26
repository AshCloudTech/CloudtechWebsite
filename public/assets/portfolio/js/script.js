// Mobile Nav Toggle
const toggle=document.querySelector('.nav-toggle');
const nav=document.querySelector('.main-nav');
if(toggle){ toggle.addEventListener('click',()=>nav.classList.toggle('open')); }
// tab filter
document.querySelectorAll('.filter').forEach(tab => {
    tab.addEventListener('click', () => {

        // Active state
        document.querySelectorAll('.filter').forEach(btn => btn.classList.remove('active'));
        tab.classList.add('active');

        const filter = tab.dataset.filter;
        const cards = document.querySelectorAll('.project-card');

        cards.forEach(card => {
            const category = card.dataset.category;

            if (filter === 'all' || category === filter) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});