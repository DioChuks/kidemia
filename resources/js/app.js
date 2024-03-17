import "./bootstrap";

const preloader = document.querySelector(".preloader");

const app = document.getElementById("app");

// remove preloader after dom has loaded
document.addEventListener("DOMContentLoaded", () => {
    preloader.classList.add("hidden");
    app.classList.remove("hidden");
    app.classList.add("visible");
});

const subjectIds = document.querySelectorAll(".subject-id");
subjectIds.forEach((subject) => {
    subject.addEventListener("change", () => {
        const selectedAttribute = "selected-" + subject.value;
        const card = document.querySelector(
            `.subject-card[for="${selectedAttribute}"]`
        ); // Select card with matching attribute
        let labels = document.querySelectorAll(".subject-card");
        labels.forEach(label => {
          if (label.getAttribute("for", selectedAttribute) == selectedAttribute) {
            let subjectTitle = label.querySelector(".subject-title").innerText;
            document.getElementById('subject-choice').innerText = subjectTitle;
          }
          label.classList.remove('active');
        });
        card.classList.toggle('active');
    });
});

let topicBoxes = document.querySelectorAll(".topic-box");

topicBoxes.forEach((topicBox) => {
    const checkbox = topicBox.querySelector(".topic-checkbox");

    checkbox.addEventListener("change", () => {
        topicBox.classList.toggle("checked"); // Add/remove 'checked' class
    });
});

// for modal
const openModalBtn = document.getElementById("open-load");
const modal = document.getElementById("modal");
const form = document.getElementById("topic-form");

// Open the modal when the button is clicked
openModalBtn.addEventListener("click", (e) => {
    e.preventDefault();
    let anyChecked = false;
    let checkBoxes = document.querySelectorAll(".topic-checkbox");
    checkBoxes.forEach((checkbox) => {
        if (checkbox.checked) {
            anyChecked = true;
            return;
        }
        console.log(checkbox.value);
    });
    if (anyChecked) {
        modal.classList.remove("hidden");
        modal.classList.add("visible");

        // Gather form data
        const formData = new FormData(form);

        // Get CSRF token from hidden field
        const csrfToken = document.querySelector('input[name="_token"]').value;
        formData.append("_token", csrfToken);

        // Send data using Fetch API
        fetch("/test/topics", {
            method: "POST",
            body: formData,
        })
            .then((response) => {
                if (response.ok) {
                    // Handle successful response (e.g., show loading modal)
                    console.log("Form data sent successfully!");
                    console.log(response.text);

                    // redirect to next screen
                    setTimeout(() => {
                        window.location.href = "/getting-ready";
                    }, 1500);
                    // Show loading modal (implementation depends on your modal logic)
                } else {
                    console.error(
                        "Error sending form data:",
                        response.statusText
                    );
                    // Handle errors (e.g., display error message)
                }
            })
            .catch((error) => {
                console.error("Error sending form data:", error);
                // Handle network or other errors
            });
    } else {
        const vMsg = document.getElementById("validationMsg");
        if (!vMsg) {
            prompt("Are you sure it's okay to submit?🧐");
            return;
        } else {
            vMsg.style.color = "red";
            vMsg.innerText = "Please select at least one topic!👀";
            // clear msg
            setTimeout(() => {
                vMsg.innerText = "";
            }, 2000);
        }
    }
});
