const num = document.querySelectorAll("#number");
const bar = document.querySelectorAll("#bar");
const email = document.getElementById("email");
const p = document.getElementById("password");
const cp = document.getElementById("confirmPassword");
const cpb = document.getElementById("checkPasswordBox");
const nextBtn = document.getElementById("nextStep");
let currentStep = 0;
const step = document.querySelectorAll("#step");

nextBtn.addEventListener("click", () => {
    if (!email.value || !p.value || !cp.value) {
        return false;
    }
    currentStep += 1;
    updateNextStepIndicator();
    showCurrentStep();
});

function updateNextStepIndicator() {
    num[currentStep - 1].classList.remove("bg-primary", "bg-light-grey");
    num[currentStep - 1].classList.add("bg-green");
    num[currentStep - 1].innerHTML = "&#x2714;";
    bar[currentStep - 1].classList.remove("text-light-grey");
    bar[currentStep - 1].classList.add("text-green");
}
function updatePrevStepIndicator() {
    num[currentStep - 1].classList.remove("bg-green");
    currentStep === 0 ? num[currentStep - 1].classList.add("bg-primary") : num[currentStep - 1].classList.add("bg-light-grey");
    num[currentStep - 1].innerHTML = currentStep;
    bar[currentStep - 1].classList.remove("text-green");
    bar[currentStep - 1].classList.add("text-light-grey");
}

function showCurrentStep() {
    const currentStepElement = step[currentStep - 1];
    const nextStepElement = step[currentStep];
    if (currentStepElement) {
        currentStepElement.classList.add("hidden");
        currentStepElement.classList.remove("flex");
        nextStepElement.classList.remove("hidden");
        nextStepElement.classList.add("flex");
    } else {
        console.error(`Step element for step ${currentStep} is undefined.`);
    }
}

function showPreviousStep() {
    if (currentStep > 1) {
        const currentStepElement = step[currentStep];
        const previousStepElement = step[currentStep - 1];
        if (currentStepElement && previousStepElement) {
            currentStepElement.classList.add("hidden");
            currentStepElement.classList.remove("flex");
            previousStepElement.classList.remove("hidden");
            previousStepElement.classList.add("flex");
            updatePrevStepIndicator();
             // Decrement currentStep to navigate to the previous step
        } else {
            console.error(`Step element for step ${currentStep} is undefined.`);
        }
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const radioInputs = document.querySelectorAll(".user-id");
    const biStep = document.getElementById("biStep");
    const prevStep = document.getElementById("prevStep");

    radioInputs.forEach(function (radioInput) {
        radioInput.addEventListener("change", function () {
            const labels = document.querySelectorAll(".label-user");
            labels.forEach(function (label) {
                label.classList.remove("checked");
            });
            const checkedLabel = document.querySelector(
                'label[for="' + this.id + '"]'
            );
            checkedLabel.classList.add("checked");
            biStep.classList.remove("border-2", "border-wine", "cursor-disallowed");
            biStep.classList.add("border-none", "cursor-pointer");
        });
    });

    biStep.addEventListener("click", function () {
        const radioInputs = document.querySelectorAll(".user-id");
        let isChecked = false; // Flag to track if any radio input is checked

        radioInputs.forEach(function (radioInput) {
            if (radioInput.checked) {
                isChecked = true;
                currentStep += 1;
                updateNextStepIndicator();
                showCurrentStep();
            }
        });

        if (!isChecked) {
            console.log("select a type u shit!"); // Log the error message if no radio input is checked
            biStep.classList.remove("border-none");
            biStep.classList.add("border-2", "border-wine");
        }
    });

    prevStep.addEventListener("click", function () {
        updatePrevStepIndicator();
        showPreviousStep();
        currentStep -= 1;
    });
});
