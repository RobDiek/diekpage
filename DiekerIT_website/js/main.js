const siteTitle = "DiekerIT";
const siteDescription = "DiekerIT, spearheaded by Robin Dieker, a seasoned Microsoft expert, is a leading IT services company based in Germany. Currently affiliated with Crafting IT, Robin leverages his extensive experience and proficiency to elevate our offerings. Being a former Microsoft employee, Robin possesses unparalleled knowledge in Microsoft products, solutions, and processes. Our company specializes in infrastructure and client monitoring, backup solutions, and network monitoring. We primarily focus on Microsoft products, client management, and infrastructure monitoring.";

function loadPage(pageName) {
    fetch(`/api/${pageName}.js`)
        .then(response => response.text())
        .then(data => {
            document.querySelector('#mainContent').innerHTML = data;
        });
}

function submitContactForm() {
    const form = document.querySelector('#contactForm');
    fetch('/api/contact.js', {
        method: 'POST',
        body: new FormData(form)
    }).then(response => response.json())
      .then(data => {
          if (data.success) {
              alert('Thank you for your message!');
          } else {
              alert('There was an error sending your message. Please try again.');
          }
      });
}

function loadServices() {
    fetch('/api/services.js')
        .then(response => response.json())
        .then(data => {
            const serviceCards = document.querySelector('#serviceCards');
            data.forEach(service => {
                const card = document.createElement('div');
                card.className = 'card';
                card.innerHTML = `
                    <h3>${service.title}</h3>
                    <p>${service.description}</p>
                `;
                serviceCards.appendChild(card);
            });
        });
}

function initNavbar() {
    const navbar = document.querySelector('#navbar');
    navbar.innerHTML = `
        <a href="#" onclick="loadPage('home')">Home</a>
        <a href="#" onclick="loadPage('about')">About</a>
        <a href="#" onclick="loadPage('services')">Services</a>
        <a href="#" onclick="loadPage('contact')">Contact</a>
    `;
}

function initSidebar() {
    const sidebar = document.querySelector('#sidebar');
    sidebar.innerHTML = `
        <h2>${siteTitle}</h2>
        <p>${siteDescription}</p>
    `;
}

function initFooter() {
    const footer = document.querySelector('#footer');
    footer.innerHTML = `
        <p>&copy; ${new Date().getFullYear()} ${siteTitle}. All rights reserved.</p>
    `;
}

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initSidebar();
    initFooter();
    loadPage('home');
});