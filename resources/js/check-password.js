const p = document.getElementById("password");
const cp = document.getElementById("confirmPassword");
const cpb = document.getElementById("checkPasswordBox");
const nextBtn = document.getElementById("nextStep");

const checkPassword = () => {
    // check if password match
    if (cp.value !== p.value) {
        cpb.classList.add("transition-all", "border-wine", "animate-shake");
        cpb.classList.remove("border-primary", "border-light-success");
        nextBtn.classList.add("cursor-disallowed");
        console.log("conflict");
    } else {
        // Check if password length is less than 6 characters
        if (p.value.length < 6 || cp.value.length < 6) {
            p.parentElement.classList.add("border-wine", "animate-shake");
            p.parentElement.classList.remove("border-primary");
            nextBtn.classList.add("cursor-disallowed");
            return false;
        }
        // passwords match and is length min of 6
        cpb.classList.remove("border-wine", "animate-shake");
        cpb.classList.add("border-light-success");
        nextBtn.classList.remove("cursor-disallowed");
        console.log("no conflict");

        p.parentElement.classList.add("border-light-success");
        p.parentElement.classList.remove("border-wine", "animate-shake");
    }
};

const checkPasswordLength = () => {
    // Check if password length is less than 6 characters
    if (p.value.length < 6) {
        p.parentElement.classList.add("border-wine", "animate-shake");
        p.parentElement.classList.remove("border-primary");
    } else {
        p.parentElement.classList.add("border-primary");
        p.parentElement.classList.remove("border-wine", "animate-shake");
    }
};

p.addEventListener("input", checkPasswordLength);
cp.addEventListener("input", checkPassword);
