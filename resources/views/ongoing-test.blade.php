@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <div class="w-full h-max-screen bg-brand-white">
      <form class="h-full flex flex-col justify-between gap-20 bg-brand-white" method="POST"
        action="{{ route('assessment.submit') }}" id="assessmentForm">
        @csrf
        <input type="text" name="id" value="{{ $test }}" id="assessmentId" hidden />
        <div class="w-full flex justify-between items-center ongoing-test-head">
          <div class="w-auto h-5">
            <img src="{{ asset('images/logo3.png') }}" alt="alt-img" class="w-inherit h-inherit" />
          </div>
          <div class="flex justify-between items-center mx-2 timer-box">
            <h4>Time Left: <span id="timer">19min:59secs</span></h4>
            <input type="number" name="minutes_left" id="minLeft" required hidden />
            <input type="number" name="seconds_left" id="secsLeft" required hidden />
            <x-inputs.button class="bg-primary text-white font-xl outline-none submit-btn" id="open-load">
              Submit
            </x-inputs.button>
          </div>
        </div>
        <div class="w-3-quarts mx-auto flex flex-col justify-center items-center">
          <div class="w-3-quarts flex flex-col justify-center gap-10">
            <h2 class="text-left">Question <span id="questionNumber"></span>:</h2>
            <div class="h-20 inline-flex flex-col items-start question-row" id="questionBox">
              <h3 class="question font-sm" id="question"></h3>
              <div class="h-15 p-4 flex flex-col justify-evenly items-start">
                <ul id="answerList" class="flex flex-col gap-5"></ul>
              </div>
            </div>
          </div>
        </div>
        <div id="questionNumberBox" class="h-half flex flex-col justify-between gap-10">
          <div id="questionBtnBox" class="w-full flex justify-evenly items-center">
            <button type="button"
              class="flex items-center p-10 rounded-sm bg-light-wine text-wine border border-white cursor-pointer sm-md-pad"
              id="previousBtn" disabled style="--rPad:5px"><x-left-arrow-icon /> Previous
            </button>
            <button type="button"
              class="flex items-center p-10 rounded-sm bg-light-green text-green border border-white cursor-pointer sm-md-pad"
              id="nextBtn" style="--rPad:5px">Next <x-right-arrow-icon />
            </button>
          </div>
          <div id="questionNumbers" class="w-full flex justify-center">
            <div
              class="w-3-quarts h-15 p-4 flex flex-wrap justify-evenly items-start gap-20 sm-md-width sm-md-justify sm-md-gap"
              style="--rWidthValue:100%;--ct:flex-start;--rGap:3px">
              @for ($i = 1; $i <= count($questions); $i++)
                <div class="mx-3 qno">
                  <input type="radio" id="questionRadio-{{ $i }}"
                    name="selectedQuestion{{ $i }}" value="{{ $i }}"
                    class="hidden question-number-radio" />
                  <label for="questionRadio-{{ $i }}"
                    class="p-10 border border-primary rounded-xs cursor-pointer transition-all input-label sm-md-pad"
                    style="--rPad:5px">{{ $i }}</label>
                </div>
              @endfor
            </div>
          </div>
        </div>
      </form>
      <x-loading />
    </div>
  </div>
  <script>
    window.addEventListener('blur', () => {
      console.log('u left me, now i take ur everything from you!');
    });

    let prevUrl = undefined;
    setInterval(() => {
      const currUrl = window.location.href;
      if (currUrl != prevUrl) {
        // URL changed
        prevUrl = currUrl;
        console.log(`URL changed to : ${currUrl}`);
      }
    }, 60);



    const timerSpan = document.getElementById('timer'); // Get reference to the timer span
    let minutes = 19; // Initial minutes
    let seconds = 59; // Initial seconds
    let savedTime = 0; // Stores time retrieved from local storage

    // Function to retrieve saved time from local storage
    function getSavedTime() {
      const storedTime = localStorage.getItem('ongoingAssessmentTime');
      if (storedTime) {
        const timeParts = storedTime.split(':');
        savedTime = parseInt(timeParts[0]) * 60 + parseInt(timeParts[1]); // Convert to seconds
      }
    }

    function updateTimer() {
      seconds--; // Decrement seconds

      if (seconds < 0) {
        minutes--;
        seconds = 59;
      }


      // Format time as "minutes: seconds"
      const formattedTime = `${minutes.toString().padStart(2, '0')}mins: ${seconds.toString().padStart(2, '0')}secs`;
      timerSpan.textContent = formattedTime; // Update timer display
      document.getElementById('minLeft').value = minutes;
      document.getElementById('secsLeft').value = seconds;

      if (minutes === 0 && seconds === 0) {
        // Time is up! (Add any actions you want to perform when the timer ends)
        console.log("Time is up!");
        // Example: alert("Time's up! Take a break!");
      } else {
        // Save remaining time to local storage
        localStorage.setItem('ongoingAssessmentTime', `${minutes}:${seconds}`);
        setTimeout(updateTimer, 1000); // Call updateTimer again after 1 second
      }
    }

    //  clears timer from cache storage when the submit btn is clicked
    function removeTimerCache() {
      localStorage.removeItem("ongoingAssessmentTime");
    }

    // Check for saved time and update initial values
    getSavedTime();
    if (savedTime > 0) {
      minutes = Math.floor(savedTime / 60); // Calculate minutes from saved seconds
      seconds = savedTime % 60; // Calculate remaining seconds
    }

    updateTimer(); // Start the timer

    // for the questions
    const questions = <?= json_encode($questions) ?>;

    const selectedAnswers = new Array(questions.length).fill(null); //for persistence

    let currentQuestionIndex = 0;

    const questionNumberSpan = document.getElementById("questionNumber");
    const questionElement = document.getElementById("question");
    const answerList = document.getElementById("answerList");
    const previousBtn = document.getElementById("previousBtn");
    const nextBtn = document.getElementById("nextBtn");
    const submitBtn = document.querySelector(".submit-btn");

    function updateQuestion() {
      const question = questions[currentQuestionIndex];
      questionNumberSpan.textContent = currentQuestionIndex + 1; // Update question number
      questionElement.textContent = question.question;

      answerList.innerHTML = ""; // Clear previous answers
      question.answers.forEach((answer, index) => {
        const listItem = document.createElement("li");
        const radioInput = document.createElement("input");
        listItem.className = "flex justify-start items-center w-full gap-5";
        radioInput.type = "radio";
        radioInput.className = "form-radio";
        radioInput.id = `answer-${index}`;
        radioInput.name = `answer_${currentQuestionIndex}`;
        radioInput.value = index; // Store answer index as value
        if (selectedAnswers[currentQuestionIndex] === index) {
          radioInput.checked = true; // Set the radio button as checked if it matches the stored answer
        }
        listItem.appendChild(radioInput);
        const label = document.createElement("label");
        // add the for attribute to the label element
        label.htmlFor = `answer-${index}`;
        label.classList.add("cursor-pointer");
        if (index === 0) {
          label.textContent = `A. ${answer}`;
        } else if (index === 1) {
          label.textContent = `B. ${answer}`;
        } else if (index === 2) {
          label.textContent = `C. ${answer}`;
        } else if (index === 3) {
          label.textContent = `D. ${answer}`;
        }
        listItem.appendChild(label);
        answerList.appendChild(listItem);
      });

      // Disable buttons at the beginning/end
      previousBtn.disabled = currentQuestionIndex === 0;
      nextBtn.disabled = currentQuestionIndex === questions.length - 1;
      console.log(currentQuestionIndex);
    }

    updateQuestion(); // Initial rendering

    nextBtn.addEventListener("click", () => {
      if (currentQuestionIndex < questions.length - 1) {
        currentQuestionIndex++;
        updateQuestion();
      }
    });

    previousBtn.addEventListener("click", () => {
      if (currentQuestionIndex > 0) {
        currentQuestionIndex--;
        updateQuestion();
      }
    });

    answerList.addEventListener("change", (event) => {
      const selectedRadio = event.target;
      if (selectedRadio.type === "radio") {
        const answerIndex = parseInt(selectedRadio.value);
        selectedAnswers[currentQuestionIndex] = answerIndex;
      }
    });

    // for the question numbers box
    const qnos = document.querySelectorAll(".qno");

    qnos.forEach((qbox) => {
      const checkbox = qbox.querySelector(".question-number-radio");

      checkbox.addEventListener("change", () => {
        const selectedQno = checkbox.value;
        console.log(selectedQno);
        currentQuestionIndex = selectedQno - 1;
        updateQuestion();
        const lb = qbox.querySelector(".input-label");
        lb.classList.add("bg-primary");
        lb.classList.add("text-white");
      });
    });

    const loader = document.getElementById('modal');
    console.log(loader);

    function collectSelectedAnswers() {
      const formData = new FormData();
      formData.append('minutes_left', document.getElementById('minLeft').value);
      formData.append('seconds_left', document.getElementById('secsLeft').value);

      selectedAnswers.forEach((answerIndex, questionIndex) => {
        if (answerIndex !== null) {
          formData.append(`question_${questionIndex}`, answerIndex);
        }
      });

      return formData;
    }

    // Implement submit button functionality to collect answers (logic omitted for brevity)
    submitBtn.addEventListener("click", (e) => {
      e.preventDefault();

      removeTimerCache();
      loader.classList.add("flex");
      loader.classList.remove("hidden");

      console.log(loader);

      const formData = collectSelectedAnswers();

      // Send the form data to the server
      fetch('{{ route('assessment.submit') }}', {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
          },
          body: formData,
        })
        .then((response) => {
          if (response.ok) {
            console.log("Assessment submitted successfully");
            return response.json();
          } else {
            console.error("Error sending request: ", response.statusText);
          }
        })
        .then((data) => {
          console.log(data.a_id);
          console.log(data.marked);
          window.location.href = `/test/result/${data.a_id}`;
        })
        .catch(error => {
          console.error('Error submitting assessment: ', error);
          // Handle the error
        });
    });
  </script>
</body>
<html>
