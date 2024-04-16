@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <div class="w-max-screen h-max-screen flex flex-col bg-secondary">
      <div class="w-full h-10p flex justify-between items-center">
        <div class="w-auto h-full">
          <img src="{{ asset('images/logo.png') }}" alt="alt-img" class="w-inherit h-inherit" />
        </div>
        <div class="flex justify-between items-center mx-2 timer-box">
          <h4>Total Time Used: <span id="timeUsed">10mins: 54 Secs</span></h4>
          <input type="number" name="minutes_left" id="minLeft" required hidden />
          <input type="number" name="seconds_left" id="secsLeft" required hidden />
          <a class="p-10 bg-primary text-white rounded-sm" href="/">Dashboard</a>
        </div>
      </div>
      <div class="w-full h-90p flex gap-5">
        <div class="w-half h-full flex flex-col justify-evenly bg-brand-white">
          <div class="w-full mx-auto flex flex-col justify-center items-center">
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
            <div id="questionBtnBox" class="w-full flex justify-around items-center">
              <button type="button" class="btn bg-red text-dark border border-white sm-btn" id="previousBtn"
                disabled><- Previous </button>
              <button type="button" class="btn bg-lightSuccess text-dark border border-white sm-btn"
                id="nextBtn">Next ->
              </button>
            </div>
            <div id="questionNumbers" class="w-full h-auto flex items-center">
              <div class="w-full h-20 flex flex-wrap items-start gap-5">
                @for ($i = 1; $i <= 20; $i++)
                  <div class="mx-3 qno">
                    <input type="radio" id="questionRadio-{{ $i }}"
                      name="selectedQuestion{{ $i }}" value="{{ $i }}"
                      class="hidden question-number-radio" />
                    <label for="questionRadio-{{ $i }}"
                      class="w-3 h-3 inline-block text-center bg-red text-white rounded-xs cursor-pointer transition-all input-label">{{ $i }}</label>
                  </div>
                @endfor
              </div>
            </div>
          </div>
        </div>
        <div class="w-half h-full flex flex-col justify-evenly gap-5 p-10">
          <h3 class="text-white">You Failed this question</h3>
          <div class="w-90p h-30 flex flex-col gap-5 bg-brand-white rounded-sm">
            <div class="w-full h-20 flex justify-center items-center">
              <img src="{{ asset('images/image 11.png') }}" class="w-20 h-80p" alt="img-alt" />
            </div>
            <p class="ml-3">The Medulla Oblongata is located in the brain</p>
          </div>
          {{-- box for displaying the video or youtube links of failed questions --}}
          {{-- iframe youtube video here --}}
          <div class="w-93p h-20 flex gap-5">
            <iframe width="60%" height="200" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
              style="border-radius: 10px;" allowfullscreen></iframe>
            <div class="flex flex-col items-start justify-end gap-5">
              <p class="text-white font-xs">Watch the video to know more</p>
              <img src="{{ asset('images/image 12.png') }}" alt="direction-logo" class="w-5 h-5" />
            </div>
          </div>
        </div>
      </div>
    </div>

</body>

</html>
