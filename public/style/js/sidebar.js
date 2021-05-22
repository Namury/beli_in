const sidebarToggle = document.querySelector('.sidebar-toggle input');
const nav = document.querySelector('.wrapper nav');

sidebarToggle.addEventListener('click', function() {
    nav.classList.toggle('slide');
});