let dropdown = document.querySelector('.menu');
let submenu = document.querySelector('.sub-menu'); // ul li ul
let buttonClick = document.querySelector('.check-button'); // button
let hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    if (submenu) {
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
});