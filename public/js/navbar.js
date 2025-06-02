function toggleMenu() {
    const hamburger = document.querySelector('.nav__hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('active');
}

function closeMenu() {
    const hamburger = document.querySelector('.nav__hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.classList.remove('active');
    mobileMenu.classList.remove('active');
}

// Cerrar menú al hacer click fuera
document.addEventListener('click', function (e) {
    const navbar = document.querySelector('.navbar');
    const mobileMenu = document.getElementById('mobileMenu');

    if (!navbar.contains(e.target) && !mobileMenu.contains(e.target)) {
        closeMenu();
    }
});
