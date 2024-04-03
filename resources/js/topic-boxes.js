let topicBoxes = document.querySelectorAll("#topicBox");

if (topicBoxes) {
    topicBoxes.forEach((topicBox) => {
        const checkbox = topicBox.querySelector(".topic-checkbox");
    
        checkbox.addEventListener("change", () => {
            topicBox.classList.toggle("checked");
        });
    });
}

// for modal
const openModalBtn = document.getElementById("open-load");
const modal = document.getElementById("modal");
const form = document.getElementById("topic-form");

// Open the modal when the button is clicked
if (openModalBtn) {
    openModalBtn.addEventListener("click", (e) => {
        e.preventDefault();
        let anyChecked = false;
        let checkBoxes = document.querySelectorAll(".topic-checkbox");
        checkBoxes.forEach((checkbox) => {
            switch (checkbox.checked) {
                case true:
                    anyChecked = true;
                    break;
                    
                default:
                    break;
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
            fetch("/test/create/questions", {
                method: "POST",
                body: formData,
              })
              .then((response) => {
                if (response.ok) {
                  // Handle successful response
                  console.log("Form data sent successfully!");
                  // Read the JSON response using response.json()
                  return response.json();  // This returns a promise that resolves to the parsed JSON object
                } else {
                  console.error("Error sending form data:", response.statusText);
                  // Handle errors
                }
              })
              .then((data) => {  // data will be the parsed JSON object from the previous then block
                // Access the returned data using the object properties
                const testId = data.test_id;
                console.log("Received test ID:", testId);
                // Use the testId for further processing (e.g., redirect)
                setTimeout(() => {
                  window.location = `/getting-ready/${testId}`;
                }, 2500);
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
}