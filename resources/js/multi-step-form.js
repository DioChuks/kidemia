const num = document.querySelectorAll("#number");
const bar = document.querySelectorAll("#bar");
const email = document.getElementById("email");
const p = document.getElementById("password");
const cp = document.getElementById("confirmPassword");
const cpb = document.getElementById("checkPasswordBox");
const nextBtns = document.querySelectorAll("#nextStep");
const backBtns = document.querySelectorAll("#backStep");
let currentStep = 0;
const step = document.querySelectorAll("#step");

nextBtns.forEach((nextBtn) => {
    nextBtn.addEventListener("click", () => {
        // Check if any input fields are empty
        if (!email.value || !p.value || !cp.value) {
            console.log("Input fields are empty");
            return;
        }

        // Check if nextBtn is allowed
        if (nextBtn.classList.contains("cursor-disallowed")) {
            console.log("nextBtn is not allowed");
            return;
        }

        // If all conditions are met, proceed to the next step
        currentStep += 1;
        updateNextStepIndicator();
        showCurrentStep();
    });
});
backBtns.forEach((backBtn) => {
    backBtn.addEventListener("click", () => {
        // Check if any input fields are empty
        if (!email.value || !p.value || !cp.value) {
            console.log("Input fields are empty");
            return;
        }

        // Check if backBtn is allowed
        if (backBtn.classList.contains("cursor-disallowed")) {
            console.log("backBtn is not allowed");
            return;
        }

        // If all conditions are met, proceed to the back step
        updatePrevStepIndicator();
        showPreviousStep();
    });
});

function updateNextStepIndicator() {
    // change finished step style
    console.log(currentStep);
    num[currentStep - 1].classList.remove("bg-primary", "bg-light-grey");
    num[currentStep - 1].classList.add("bg-green");
    num[currentStep - 1].innerHTML = "&#x2714;";
    bar[currentStep - 1].classList.remove("text-light-grey");
    bar[currentStep - 1].classList.add("text-green");
    // change the next current step style
    num[currentStep].classList.remove("bg-light-grey");
    if (num[currentStep] === num[2]) {
        num[currentStep].classList.add("bg-light-blue");
    } else {
        num[currentStep].classList.add("bg-primary");
    }
}
function updatePrevStepIndicator() {
    // change the current step style
    if (num[currentStep] === num[2]) {
        num[currentStep].classList.remove("bg-light-blue");
    } else {
        num[currentStep].classList.remove("bg-primary");
    }
    num[currentStep - 1].classList.remove("bg-green");
    num[currentStep - 1].classList.add("bg-primary");
    num[currentStep - 1].innerHTML = currentStep;
    bar[currentStep - 1].classList.remove("text-green");
    bar[currentStep - 1].classList.add("text-light-grey");
    num[currentStep].classList.add("bg-light-grey");
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
    if (currentStep >= 1) {
        let currentStepElement = step[currentStep];
        console.log(currentStepElement);
        let previousStepElement = step[currentStep - 1];
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
    const purposeStepBtn = document.querySelector(".continue-purpose");

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
            purposeStepBtn.classList.remove(
                "border-2",
                "border-wine",
                "cursor-disallowed"
            );
            purposeStepBtn.classList.add("border-none", "cursor-pointer");
        });
    });

    purposeStepBtn.addEventListener("click", function () {
        const radioInputs = document.querySelectorAll(".user-id");
        let isChecked = false; // Flag to track if any radio input is checked

        radioInputs.forEach(function (radioInput) {
            if (radioInput.checked) {
                isChecked = true;

                currentStep += 1;
                updateNextStepIndicator();
                showCurrentStep(true);

                return; // Exit the loop early since a radio input is checked
            }
        });

        if (!isChecked) {
            console.log("select a type u shit!"); // Log the error message if no radio input is checked
            purposeStepBtn.classList.remove("border-none");
            purposeStepBtn.classList.add("border-2", "border-wine");
        }
    });

    // choose purpose-box active state style
    let purposeBoxes = document.querySelectorAll("#purposeBox");
    const rds = document.querySelectorAll(".purpose-radio");

    if (purposeBoxes) {
        // loop thru d radio inputs
        rds.forEach((rd) => {
            rd.addEventListener("change", () => {
                console.log("changed occurred at this radio");
                // loop through all radio=inputs parent element
                purposeBoxes.forEach((pb) => {
                    pb.classList.remove("bg-secondary");
                });
                // then assign class to active parent element of checked radio
                rd.parentElement.classList.toggle("bg-secondary");
                purposeStepBtn.classList.remove("cursor-disallowed");
            });
        });
    }
});
