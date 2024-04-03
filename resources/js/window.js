window.addEventListener("blur", () => {
    const testId = your_id_variable;

    // Check if ID is defined before sending request
    if (testId) {
        fetch("/terminate-test-exam", {
            method: "POST", // Use POST for termination requests
            headers: {
                "Content-Type": "application/json", // Set content type for JSON data
            },
            body: JSON.stringify({ id: testId }), // Send ID in request body
        })
            .then((response) => {
                if (response.ok) {
                    console.log("Test exam terminated successfully!");
                    // Handle successful termination (e.g., redirect to results page)
                } else {
                    console.error(
                        "Error terminating test exam:",
                        response.statusText
                    );
                    // Handle errors (e.g., display error message)
                }
            })
            .catch((error) => {
                console.error("Error sending termination request:", error);
                // Handle network or other errors
            });
    } else {
        console.warn("Test ID not defined. Cannot send termination request.");
    }
});
