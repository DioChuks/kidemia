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
    if (num[currentStep] === num[3]) {
        num[currentStep].classList.add("bg-light-blue");
    } else {
        num[currentStep].classList.add("bg-primary");
    }
}
function updatePrevStepIndicator() {
    // change the current step style
    if (num[currentStep] === num[3]) {
        num[currentStep].classList.remove("bg-light-blue");
    } else {
        num[currentStep].classList.remove("bg-primary");
    }
    num[currentStep].classList.add("bg-light-grey");
    // change the prev step style
    num[currentStep - 1].classList.remove("bg-green");
    num[currentStep - 1].classList.add("bg-primary");
    num[currentStep - 1].innerHTML = currentStep;
    bar[currentStep - 1].classList.remove("text-green");
    bar[currentStep - 1].classList.add("text-light-grey");
}

function showCurrentStep(current = true, stepBranch = "student") {
    if (current) {
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
    } else {
        if (stepBranch === "school") {
            const currentStepElement = step[currentStep - 4];
            console.log(currentStepElement);
            console.log('school selected as user_type');
            const nextStepElement = step[currentStep - 1];
            if (currentStepElement) {
                currentStepElement.classList.add("hidden");
                currentStepElement.classList.remove("flex");
                nextStepElement.classList.remove("hidden");
                nextStepElement.classList.add("flex");
            } else {
                console.error(
                    `Step element for step ${currentStep} is undefined.`
                );
            }
        }
    }
}

function showPreviousStep(student = true) {
    if (currentStep > 1) {
        let currentStepElement = step[currentStep - 1];
        console.log(currentStepElement);
        let previousStepElement = step[currentStep - 1];
        if(!student){
            previousStepElement = step[currentStep - 4];
            currentStepElement.classList.add("hidden");
            currentStepElement.classList.remove("flex");
            previousStepElement.classList.remove("hidden");
            previousStepElement.classList.add("flex");
            return 'shool back to user type';
        }
        console.log(previousStepElement);
        currentStepElement = step[currentStep];
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
    // student
    const stBkToTypeBtn = document.getElementById("studentBackToTypeStep");
    const thirdStudentStep = document.getElementById("thirdStudentStep");
    const prevStudentStep = document.getElementById("prevStudentStep");

    // school
    const scBkToTypeBtn = document.getElementById("schoolBackToTypeStep");

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
            biStep.classList.remove(
                "border-2",
                "border-wine",
                "cursor-disallowed"
            );
            biStep.classList.add("border-none", "cursor-pointer");
        });
    });

    biStep.addEventListener("click", function () {
        const radioInputs = document.querySelectorAll(".user-id");
        let isChecked = false; // Flag to track if any radio input is checked

        radioInputs.forEach(function (radioInput) {
            if (radioInput.checked) {
                isChecked = true;

                // Get the value of the checked radio input
                const userType = radioInput.value;

                // Move currentStep based on the userType
                if (userType === "student") {
                    currentStep += 1;
                    updateNextStepIndicator();
                    showCurrentStep(true);
                } else if (userType === "school") {
                    currentStep += 1;
                    updateNextStepIndicator();
                    currentStep += 3;
                    showCurrentStep(false, "school");
                }

                return; // Exit the loop early since a radio input is checked
            }
        });

        if (!isChecked) {
            console.log("select a type u shit!"); // Log the error message if no radio input is checked
            biStep.classList.remove("border-none");
            biStep.classList.add("border-2", "border-wine");
        }
    });

    stBkToTypeBtn.addEventListener("click", function () {
        updatePrevStepIndicator();
        showPreviousStep();
        currentStep -= 1;
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
                thirdStudentStep.classList.remove("cursor-disallowed");
            });
        });
    }

    thirdStudentStep.addEventListener("click", () => {
        // Check if Btn is allowed
        if (thirdStudentStep.classList.contains("cursor-disallowed")) {
            console.log("thirdStudentStepBtn is not allowed");
            return;
        }

        // If all conditions are met, proceed to the next step
        currentStep += 1;
        updateNextStepIndicator();
        showCurrentStep();
    });

    prevStudentStep.addEventListener("click", () => {
        updatePrevStepIndicator();
        showPreviousStep();
        currentStep -= 1;
    });

    // school step eventListeners
    scBkToTypeBtn.addEventListener("click", () => {
        currentStep -= 3;
        updatePrevStepIndicator();
        currentStep += 3;
        showPreviousStep(false);
    });
});
