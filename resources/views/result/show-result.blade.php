@include('partials.header')

<body>
 <x-preloader />
 <div id="app" class="hidden">
  <main class="relative w-full h-max-screen flex flex-col justify-evenly items-center bg-brand-white small-box">
   <div class="w-30 h-40 flex flex-col justify-between items-center gap-5">
    <div class="w-6 h-6 r-img">
     <img src="{{ asset('images/KIDEMIA LOGO CC 4.png') }}" alt="logo-4" class="w-inherit h-inherit" />
    </div>
    <section class="w-full h-40 flex flex-col">
     <div class="h-30 flex flex-col items-center gap-5 score-box">
      <div class="h-40 flex flex-col justify-around items-center w-half text-center">
       <x-pie-box progress=45 answered='5/20' />
      </div>
     </div>
     <div class="w-full h-auto flex flex-col gap-5">
      <div class="flex items-start gap-10">
       <h4>Remark:</h4>
       <span>Poor</span>
      </div>
      <div class="flex items-start gap-10">
       <h4>Comment:</h4>
       <span>You can always do better</span>
      </div>
     </div>
    </section>
   </div>
   <div class="w-half flex justify-between items-center gap-5">
    <a href="{{ route('test.corrections') }}" class="btn btn-primary sm-btn">View Corrections</a>
    <div class="flex items-center gap-10 text-dark">
     <a href="{{ route('home') }}" class="inline-flex items-center text-14"><x-home-icon /> Home</a>
     <a href="{{ route('show.user-dashboard') }}" class="inline-flex items-center text-14"><x-activity-icon /> Dashboard</a>
    </div>
   </div>
  </main>
 </div>
</body>

</html>
