@include('partials.header')

<body>
 <x-preloader />
 <div id="app" class="hidden">
  <div class="w-full h-auto flex flex-col bg-brand-white">
   <div class="w-full bg-secondary h-5"></div>
   <div class="h-auto bg-brand-white">
    <div class="flex justify-between gap-5 p-20">
     <a href="{{ route('take.test') }}" class="btn btn-primary"><- Back</a>
       <div class="flex flex-col items-center gap-5">
        <div class="w-6 h-6">
         <img src="{{ asset('images/logo2.png') }}" alt="img" class="w-inherit h-inherit" />
        </div>
        <div class="text-center">
         <h3>Pick a subject you would love to write a test on</h3>
         <div class="flex justify-center items-center gap-5 h-4">
          <img src="{{ asset('images/image 3.png') }}" alt="clock" class="w-3 h-3">
          <p>Time limit: 20mins</p>
          <small class="text-green" id="subject-choice"></small>
         </div>
        </div>
       </div>
       <a href="#" class="btn btn-primary" id="send-subject">Continue -></a>
    </div>
    <div class="w-full inline-flex justify-center items-center pick-subjects">
     <section class="h-auto">
      <div class="w-full h-full flex justify-center items-center p-10 gap-10">
       <div class="flex flex-wrap justify-evenly items-start gap-10" id="subject-box">
        @for ($i = 1; $i <= 16; $i++)
         @if ($i <= 4)
          <x-subject-card logo='image 4.png' class="subject-card-color-1" title='Social Studies' topicAmount=14
           :id=$i />
         @elseif ($i <= 8)
          <x-subject-card logo='image 9.png' class="subject-card-color-2" title='English Language' topicAmount=14
           :id=$i />
         @elseif ($i <= 12)
          <x-subject-card logo='image 5.png' class="subject-card-color-3" title='Mathematics' topicAmount=14 :id=$i />
         @else
          <x-subject-card logo='image 7.png' class="subject-card-color-4" title='Verbal Reasoning' topicAmount=14
           :id=$i />
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
