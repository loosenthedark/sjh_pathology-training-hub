/* jshint esversion: 8 */

// Variable declarations...
const body = document.querySelector('body');
const twitterClient = document.querySelector('main > .width-max > aside');
const dropdownToggle = document.querySelector('.navbar-search');
const navbarSearchTitle = document.querySelector('.navbar-search-title')
const navbarSearchPara = document.querySelector('.navbar-search-para')
const icon = document.querySelectorAll('.dropdown-toggle-icon');
const collapse = document.querySelector('.collapse');
const menu = document.querySelector('.dropdown-nav');
const animateDropdownToggler = document.getElementById('dropdown-toggler');
const searchIconBox = document.querySelector('.search-icon-box');
const timesIconBox = document.querySelector('.times-icon-box');

function showMenu() {
    collapse.classList.toggle('show');
    // menu.classList.toggle('show');
}

function hideMenus() {
    collapse.classList.remove('show');
    searchIconBox.classList.remove('active');
    timesIconBox.classList.remove('active');
}

// Hide nav menu when touch or click happens elsewhere...
function clickTarget(e) {
    if (e.target !== animateDropdownToggler) {
        hideMenus();
    }
}

// Listen for hamburger icon clicks...
dropdownToggle.addEventListener('click', showMenu);

// Listen for clicks anywhere on screen...
body.addEventListener('click', function(e) {
    clickTarget(e);
}, true);

// Custom nav toggler icon animation on click - code block adapted from https://www.youtube.com/watch?v=g7v4BB9IMRw
animateDropdownToggler.addEventListener('click', function() {
    searchIconBox.classList.toggle('active');
    timesIconBox.classList.toggle('active');
});
timesIconBox.addEventListener('click', function() {
    timesIconBox.classList.toggle('active');
    searchIconBox.classList.toggle('active');
    collapse.classList.toggle('show');
});

const mainHeight = document.body.clientHeight - window.innerHeight - 735;

twitterClient.style.maxHeight = `${mainHeight}px`;