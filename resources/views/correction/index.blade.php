@include('partials.header')

<body>
 <x-preloader />
 <div id="app" class="hidden">
  <div class="w-max-screen h-max-screen flex flex-col bg-secondary">
   <div class="w-full flex justify-between items-center p-10">
    <div class="w-auto h-5">
     <img src="{{ asset('images/logo.png') }}" alt="alt-img" class="w-inherit h-inherit" />
    </div>
    <div class="flex justify-between items-center mx-2 timer-box">
     <h3>Total Time Used: <span id="timeUsed">10mins: 54 Secs</span></h3>
     <input type="number" name="minutes_left" id="minLeft" required hidden />
     <input type="number" name="seconds_left" id="secsLeft" required hidden />
     <a class="btn btn-primary sm-btn" href="/">Dashboard</a>
    </div>
   </div>
   <div class="w-full h-70 flex border">
    <div class="w-half h-full flex flex-col gap-5 bg-brand-white border">
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
     <div id="questionNumberBox" class="h-half flex flex-col justify-between">
      <div id="questionBtnBox" class="flex justify-evenly items-center">
       <button type="button" class="btn bg-light-wine text-wine border border-white sm-btn" id="previousBtn"
        disabled><- Previous </button>
         <button type="button" class="btn bg-light-green text-green border border-white sm-btn" id="nextBtn">Next ->
         </button>
      </div>
      <div id="questionNumbers" class="w-full flex justify-center">
       <div class="w-3-quarts h-15 p-4 flex flex-wrap justify-evenly items-start gap-20">
        @for ($i = 1; $i <= 20; $i++)
         <div class="mx-3 qno">
          <input type="radio" id="questionRadio-{{ $i }}" name="selectedQuestion{{ $i }}"
           value="{{ $i }}" class="hidden question-number-radio" />
          <label for="questionRadio-{{ $i }}"
           class="p-10 border border-primary rounded-xs cursor-pointer transition-all input-label">{{ $i }}</label>
         </div>
        @endfor
       </div>
      </div>
     </div>
    </div>
    <div class="w-half h-full flex flex-col gap-5 border">right ox</div>
   </div>
  </div>

</body>

</html>
