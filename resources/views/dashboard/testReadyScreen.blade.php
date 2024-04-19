@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <div class="relative h-max-screen sm-h-val bg-secondary" style="--smallHeightValue:auto">
      <div class="flex justify-end gap-10 h-max-screen">
        <div class="h-90p h-md-sm flex sm-d-none flex-col justify-end items-center p-20" style="--rH:50px">
          <div class="w-full h-half flex items-right">
            <x-inputs.anchor-button href="{{ route('pick.topic', [$id, $type]) }}" class="w-10 h-3 bg-primary p-5 text-white text-14 font-lg"><x-left-arrow-icon/> Back</x-inputs.anchor-button>
          </div>
          <div class="flex flex-col items-center justify-center gap-10 text-center text-white">
            <img src="{{ asset('images/KIDEMIA LOGO CC 4 -2.png') }}" alt="logo alt" class="w-30 h-30" />
            <div class="">
              <span>“What we learn with pleasure, we never forget.”
              </span>
              <h3 class="mt-5">Alfred Mercier</h3>
            </div>
          </div>
        </div>
        <div class="w-70p sm-w-value h-full flex flex-col justify-end" style="--rWidthValue:100%">
          <div class="w-full h-95p sm-h-val flex flex-col justify-around gap-10 bg-brand-white top-left-radius-lg p-20" style="--smallHeightValue:100%">
            <x-inputs.anchor-button href="{{ route('pick.topic', [$id, $type]) }}" class="w-10 h-5 bg-primary p-5 text-white text-14 font-lg md-d-none"><x-left-arrow-icon/> Back</x-inputs.anchor-button>
            <div class="w-80p flex flex-col gap-10">
              <h3 class="text-dark ready-subject-title">You are writing <span id="subjects">Social Studies</span></h3>
              <div class="flex flex-col gap-10" id="subjectInstruction">
                <p>The test has 20 questions to be answered in 20 minutes, it will cover the following
                  topics:</p>
                <ul class="flex flex-col items-start pl-5">
                  <li class="list-numeric font-sm">Family</li>
                  <li class="list-numeric font-sm">Racism</li>
                </ul>
              </div>
            </div>
            <div class="ready-instructions">
              <h1 class="mb-5 text-dark sm-text-value" style="--textSmVal:18px">Read All Instructions Before You Start</h1>
              <div class="flex flex-col gap-10" id="subjectInstruction">
                <ul class="flex flex-col items-start pl-5">
                  @for ($i = 1; $i <= 5; $i++)
                    <li class="list-numeric font-sm">Do not leave this screen else the test would end</li>
                  @endfor
                </ul>
              </div>
            </div>
            <div class="flex justify-end items-end">
              <div class="flex flex-col justify-center items-center gap-5" id="readyInfoBtn">
                <p>If you are ready click on the button to begin</p>
                <x-inputs.anchor-button href="{{ route('test.ongoing', '712e52-23e8hd-38hqdih-38ihdqw') }}" class="w-30 h-5 justify-center bg-primary p-5 text-white text-14 font-lg">Start</x-inputs.anchor-button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @isset($id)
    <form action="" method="POST">
      @csrf
      <input type="hidden" name="_id" value="{{ $id }}" id="testId" />'
    </form>
  @endisset
  {{-- @vite(['resources/js/window.js']) --}}
</body>

</html>
