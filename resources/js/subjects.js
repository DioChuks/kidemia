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
            document.getElementById('subject-choice').innerText = `You have picked ${subjectTitle}`;
            let subjectBtn = document.getElementById('send-subject');
            let type = subjectBtn.getAttribute('dta-type');
            subjectBtn.setAttribute('href', `/pick/${subject.value}/topic/${type}`);
          }
          label.classList.remove('active');
        });
        card.classList.toggle('active');
    });
});