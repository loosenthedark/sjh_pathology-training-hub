/* jshint esversion: 8 */

// Variable declarations...
const body = document.querySelector('.element-body');
const hamburger = document.querySelector('.navbar-toggler');
const icon = document.querySelectorAll('.navbar-toggler-icon');
const pressButton = document.querySelector('.btn-press');
const pressList = document.querySelector('#press-list');
const pressLink = document.querySelector('.press-list-link');
const collapse = document.querySelector('.collapse');
const menu = document.querySelector('.navbar-nav');
const animateNavToggler = document.getElementById('nav-toggler');
const hamburgerIcon = document.querySelector('.hamburger-icon');
const coffeeIcon = document.querySelector('.coffee-icon');

function showMenu() {
    collapse.classList.toggle('toggled');
    menu.classList.toggle('show');
    if (pressList.className.indexOf('press-reveal') !== -1) {
        pressList.className = pressList.className.replace('press-reveal', '');
    }
    let ariaState = hamburger.getAttribute('aria-expanded');
    if (ariaState == 'false') {
        hamburger.setAttribute('aria-expanded', true);
    } else {
        hamburger.setAttribute('aria-expanded', true);
    }
}

function hideMenus() {
    collapse.classList.remove('toggled');
    menu.classList.remove('show');
    pressList.classList.remove('press-reveal');
    hamburgerIcon.classList.remove('active');
    coffeeIcon.classList.remove('active');
}

// Hide nav menu when touch or click happens elsewhere...
function clickTarget(e) {
    if (e.target !== icon && e.target !== pressButton && e.target !== pressLink) {
        hideMenus();
    }
}

// Listen for hamburger icon clicks...
hamburgerIcon.addEventListener('click', showMenu, false);

// Listen for clicks anywhere on screen...
body.addEventListener('click', function(e) {
    clickTarget(e);
}, true);

// Slide Press submenu into view on click...
function showPress() {
    var x = document.getElementById('press-list');
    if (x.className.indexOf('press-reveal') == -1) {
        x.className += 'press-reveal';
    } else {
        x.className = x.className.replace('press-reveal', '');
    }
}

// Custom nav toggler icon animation on click - code block adapted from https://www.youtube.com/watch?v=g7v4BB9IMRw
animateNavToggler.addEventListener('click', function() {
    hamburgerIcon.classList.toggle('active');
    coffeeIcon.classList.toggle('active');
});
coffeeIcon.addEventListener('click', function() {
    coffeeIcon.classList.toggle('active');
    hamburgerIcon.classList.toggle('active');
});