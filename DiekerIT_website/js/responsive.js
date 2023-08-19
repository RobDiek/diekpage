// Responsive.js
// This file contains the JavaScript code for making the website responsive.

function checkScreenSize() {
    var width = window.innerWidth;
    if (width <= 768) {
        document.body.classList.add('mobile');
    } else {
        document.body.classList.remove('mobile');
    }
}

window.addEventListener('resize', checkScreenSize);
checkScreenSize();

// Initialize the navigation bar and sidebar for mobile view
function initMobileView() {
    var navbar = document.getElementById('navbar');
    var sidebar = document.getElementById('sidebar');

    // Add event listener for the hamburger icon in the navigation bar
    navbar.querySelector('.hamburger-icon').addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });

    // Add event listener for the close icon in the sidebar
    sidebar.querySelector('.close-icon').addEventListener('click', function() {
        sidebar.classList.remove('active');
    });
}

// Initialize the mobile view when the page loads
window.addEventListener('DOMContentLoaded', initMobileView);