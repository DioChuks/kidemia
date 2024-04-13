// calculate window width and height from the current window
const spb = document.getElementById('subjectPerformanceBox');
// when window width is greater than 600px, add class to the element else remove class

window.addEventListener('load', () => {
    let windowWidth = window.innerWidth;
    let windowHeight = window.innerHeight;

    if (windowWidth > 600) {
        console.log("window is greater than 600px or equal to " + windowWidth);
        spb.classList.add("h-max-full", "overflow-auto");
    } else {
        spb.classList.remove("h-max-full", "overflow-auto");
        console.log("window is less than 600px or equal to " + windowWidth);
    }
});
window.addEventListener('resize', () => {
    let windowWidth = window.innerWidth;
    let windowHeight = window.innerHeight;

    if (windowWidth > 600) {
        console.log("window is greater than 600px or equal to " + windowWidth);
        spb.classList.add("h-max-full", "overflow-auto");
    } else {
        spb.classList.remove("h-max-full", "overflow-auto");
        console.log("window is less than 600px or equal to " + windowWidth);
    }
});
