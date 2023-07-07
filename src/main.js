// Dropdown menu for mobile.
const button = document.getElementById('dropdown');
const navbar = document.getElementById('navbar-default');
    button.addEventListener('click', () => {
        navbar.classList.toggle('hidden');
    }
);