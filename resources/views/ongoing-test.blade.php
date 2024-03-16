@include('partials.header')

<body>
 <x-preloader />
 <div id="app" class="hidden">
  <div class="w-full h-max-screen bg-brand-white">
   <form class="h-full flex flex-col justify-between gap-20 bg-brandWhite">
    @csrf
    <div class="w-full flex justify-between items-center ongoing-test-head">
     <div class="img-box">
      <img src="{{ asset('images/logo3.png') }}" alt="alt-img" />
     </div>
     <div class="flex justify-between items-center mx-2 timer-box">
      <h6>Time Left: <span id="timer">10mins: 54 Secs</span></h6>
      <button class="btn btn-primary" type="submit" id="open-load">Submit</button>
     </div>
    </div>
    <div class="w-3-quarts flex flex-col justify-start items-center">
     <div class="flex flex-col gap-10">
      <h2 class="text-left">Question <span id="questionNumber">4</span>:</h2>
      <div class="h-20 inline-flex flex-col justify-evenly items-start question-row" id="questionBox">
       <h3 class="question" id="question">Where is the Medulla Oblongata located?</h3>
       <div class="h-15 p-4 flex flex-col justify-evenly items-start">
        @for ($i = 0; $i < 4; $i++)
         <div class="">
          <input type="radio" class="form-control" name="answer" id="answer" aria-describedby="options" />
          <label for="answer" class="form-label">A. Reproductive system</label>
         </div>
        @endfor
       </div>
      </div>
     </div>
    </div>
    <div id="questionNumberBox" class="h-half flex flex-col justify-between">
     <div id="questionBtnBox" class="w-full flex justify-evenly items-center">
      <button class="btn bg-light-wine text-wine border border-white" id="previousBtn"><- Previous </button>
        <button class="btn bg-light-green text-green border border-white" id="NextBtn">Next ->
        </button>
     </div>
     <div id="questionNumbers" class="w-full flex justify-center">
      <div class="w-3-quarts h-15 p-4 flex flex-wrap justify-evenly items-start gap-20">
       @for ($i = 1; $i < 21; $i++)
        <div class="mx-3">
         <input type="checkbox" class="hidden" name="answer" id="answer" aria-describedby="number" />
         <label for="answer"
          class="p-10 border border-primary rounded-xs cursor-pointer transition-all input-label">{{ $i }}</label>
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
  const timerSpan = document.getElementById('timer'); // Get reference to the timer span
  let minutes = 10; // Initial minutes
  let seconds = 59; // Initial seconds

  function updateTimer() {
   seconds--; // Decrement seconds

   if (seconds < 0) {
    minutes--;
    seconds = 59;
   }

   // Format time as "minutes: seconds"
   const formattedTime = `${minutes.toString().padStart(2, '0')}mins: ${seconds.toString().padStart(2, '0')}secs`;
   timerSpan.textContent = formattedTime; // Update timer display

   if (minutes === 0 && seconds === 0) {
    // Time is up! (Add any actions you want to perform when the timer ends)
    console.log("Time is up!");
    // Example: alert("Time's up! Take a break!");
   } else {
    setTimeout(updateTimer, 1000); // Call updateTimer again after 1 second
   }
  }

  updateTimer(); // Start the timer
 </script>
</body>
<html>
