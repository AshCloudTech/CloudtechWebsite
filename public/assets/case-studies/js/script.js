// Mobile Nav Toggle
const toggle=document.querySelector('.nav-toggle');
const nav=document.querySelector('.main-nav');
if(toggle){ toggle.addEventListener('click',()=>nav.classList.toggle('open')); }