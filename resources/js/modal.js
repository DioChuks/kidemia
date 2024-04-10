// Get the modal
var modal = document.getElementById("customModal");

// Get the button that opens the modal
var btn = document.getElementById("openBtn");

// get the button that closes the modal
var close = document.querySelector(".close");

// add eventListeners
btn.addEventListener("click", () => {
    openModal();
});

close.addEventListener("click", () => {
    closeModal();
});

// When the user clicks on the button, open the modal
function openModal() {
    modal.classList.add("flex");
    modal.classList.remove("hidden");
}

// When the user clicks on <span> (x), close the modal
function closeModal() {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }
};
