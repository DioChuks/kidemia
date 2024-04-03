import "./bootstrap";

const preloader = document.querySelector(".preloader");

const app = document.getElementById("app");

// remove preloader after dom has loaded
document.addEventListener("DOMContentLoaded", () => {
    preloader.classList.add("hidden");
    app.classList.remove("hidden");
    app.classList.add("visible");
});

const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobile-menu');

if (menuBtn) {
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

