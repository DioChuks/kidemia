const p = document.getElementById("password");
const cp = document.getElementById("confirmPassword");
const cpb = document.getElementById("checkPasswordBox");
const nextBtn = document.getElementById("nextStep");

const checkPassword = () => {
    if (cp.value !== p.value) {
        cpb.classList.add("transition-all");
        cpb.classList.remove("border-primary");
        cpb.classList.add("border-wine");
        cpb.classList.toggle("animate-shake");
        console.log("conflict");
        nextBtn.classList.add("cursor-disallowed");
    } else {
        cpb.classList.remove("border-wine");
        cpb.classList.add("border-light-success");
        cpb.classList.remove("animate-shake");
        console.log("no conflict");
        nextBtn.classList.remove("cursor-disallowed");
    }
};

cp.addEventListener("input", checkPassword);
