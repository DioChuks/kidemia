import './bootstrap';

const preloader = document.querySelector('.preloader');

const app = document.getElementById('app');

// remove preloader after dom has loaded
document.addEventListener('DOMContentLoaded', () => {
    preloader.classList.add('hidden');
    app.classList.remove('hidden');
    app.classList.add('visible');
});

const subjectIds = document.querySelectorAll('.subject-id');
subjectIds.forEach((subject) => {
    subject.addEventListener('change', () => {
        console.log(subject.value);
        let card = document.getElementById('selected-'+subject.value);
        console.log(card.classList.toggle('active'));
        console.log(document.getElementById('send-subject').href = subject.value);
    });
});