// Get the modal
const modal = document.getElementById("customModal");

// Get the button that opens the modal
const btn = document.getElementById("openBtn");

// get the button that closes the modal
const closeModalButtons = document.querySelectorAll("#closeModal");

// add eventListeners
btn.addEventListener("click", () => {
    openModal();
});

closeModalButtons.forEach((button) => {
    button.addEventListener("click", closeModal);
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
