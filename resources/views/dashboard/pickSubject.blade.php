@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <div class="w-full h-auto flex flex-col bg-brand-white">
      <div class="w-full bg-secondary h-5"></div>
      <div class="h-auto bg-brand-white">
        <div class="flex justify-between gap-5 pl-2 pr-2">
          @if ($type === 'test')
            <a href="{{ route('home') }}" class="btn btn-primary sm-btn"><x-left-arrow-icon /> Back</a>
          @else
            <a href="{{ route('take.exam') }}" class="btn btn-primary sm-btn"><x-left-arrow-icon /> Back</a>
          @endif
          <a href="#" class="btn btn-primary sm-btn" id="send-subject" dta-type="{{ $type }}">Continue <x-right-arrow-icon /></a>
        </div>
          @if ($type === 'test')
            <div class="flex flex-col items-center gap-5">
              <div class="w-6 h-6">
                <img src="{{ asset('images/logo2.png') }}" alt="img" class="w-inherit h-inherit" />
              </div>
              <div class="text-center sm-md-width" style="--rWidthValue:300px;">
                <h3 class="text-dark">Pick a subject you would love to write a test on</h3>
                <div class="flex justify-center items-center gap-5 h-4">
                  <img src="{{ asset('images/image 3.png') }}" alt="clock" class="w-3 h-3">
                  <p>Time limit: 20mins</p>
                  <small class="text-green" id="subject-choice"></small>
                </div>
              </div>
            </div>
          @else
            <div class="flex flex-col items-center gap-5">
              <div class="w-6 h-6">
                <img src="{{ asset('images/logo-pro.png') }}" alt="img" class="w-inherit h-inherit" />
              </div>
              <div class="text-center">
                <h3 class="text-dark">Write an exam on one subject or more</h3>
                <div class="flex justify-center items-center gap-5 h-4">
                  <span>20 questions per Subject</span>
                  <img src="{{ asset('images/image 3.png') }}" alt="clock" class="w-3 h-3">
                  <p>Time limit: 1hr 20mins</p>
                  <small class="text-green" id="subject-choice"></small>
                </div>
              </div>
              <a class="w-3-quarts flex items-center justify-center p-20 bg-green text-white rounded-sm transform-scale-d5-hover transition-all"
                href="{{ route('pick.topic', ['subject' => 'all', 'type' => $type]) }}" style="--w:100%">
                <h6 class="font-sm">Write on all subjects</h6>
              </a>
            </div>
          @endif
        <div class="w-full inline-flex justify-center items-center pick-subjects">
          <section class="h-auto">
            <div class="w-full h-full flex justify-center items-center p-10 gap-10">
              <div class="w-90p flex flex-wrap justify-evenly items-start gap-10" id="subject-box">
                @for ($i = 1; $i <= 16; $i++)
                  @if ($i <= 4)
                    <x-subject-card logo='image 4.png' class="text-white subject-card-color-1" title='Social Studies'
                      topicAmount=14 :id=$i />
                  @elseif ($i <= 8)
                    <x-subject-card logo='image 9.png' class="text-white subject-card-color-2" title='English Language'
                      topicAmount=14 :id=$i />
                  @elseif ($i <= 12)
                    <x-subject-card logo='image 5.png' class="text-white subject-card-color-3" title='Mathematics'
                      topicAmount=14 :id=$i />
                  @else
                    <x-subject-card logo='image 7.png' class="text-white subject-card-color-4" title='Verbal Reasoning'
                      topicAmount=14 :id=$i />
                  @endif
                @endfor
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  @vite(['resources/js/subjects.js'])
</body>

</html>
