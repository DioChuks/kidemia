import './bootstrap';

const preloader = document.querySelector('.preloader');
const load = document.querySelector('.load');

const app = document.getElementById('app');

// remove preloader after dom has loaded
document.addEventListener('DOMContentLoaded', () => {
    preloader.style.display = 'none';
    app.style.display = 'block';
});

