// Mobile Nav Toggle
const toggle=document.querySelector('.nav-toggle');
const nav=document.querySelector('.main-nav');
if(toggle){ toggle.addEventListener('click',()=>nav.classList.toggle('open')); }

// tab script
document.querySelectorAll('.filter').forEach(button => {
    button.addEventListener('click', () => {

        // Active button
        document.querySelectorAll('.filter').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filterValue = button.getAttribute('data-filter');
        const cards = document.querySelectorAll('.cs-card');

        cards.forEach(card => {
            const category = card.getAttribute('data-category');

            if (filterValue === 'all' || category === filterValue) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
