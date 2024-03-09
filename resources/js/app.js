import './bootstrap';

const preloader = document.querySelector('.preloader');

const app = document.getElementById('app');

// remove preloader after dom has loaded
document.addEventListener('DOMContentLoaded', () => {
    preloader.style.display = 'none';
    app.style.display = 'block';
});

