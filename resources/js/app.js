import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    // Mobile dropdown toggle
    const dropdownToggles = document.querySelectorAll('[data-toggle="dropdown-mobile"]');

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const wrapper = this.closest('.menu-item-wrapper.dropdown-mobile');
            wrapper.classList.toggle('active');
        });
    });

    // Close dropdown when clicking a link inside
    const dropdownLinks = document.querySelectorAll('.dropdown-menu-mobile a');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function() {
            const wrapper = this.closest('.menu-item-wrapper.dropdown-mobile');
            wrapper.classList.remove('active');
        });
    });

    // Close mobile menu when clicking a dropdown link
    const mobileMenu = document.getElementById('mobile-menu');
    if(mobileMenu) {
        dropdownLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                document.getElementById('overlay').classList.remove('active');
            });
        });
    }
});
