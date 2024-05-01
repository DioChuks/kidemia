@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <main class="relative w-full h-max-screen flex flex-col justify-evenly items-center bg-brand-white small-box" style="--bHeight:20px;">
      <div class="w-3-quarts h-auto flex flex-col justify-between items-center gap-5 sm-md-width" style="--rWidthValue:100%;">
        <div class="w-6 h-6 r-img">
          <img src="{{ asset('images/KIDEMIA LOGO CC 4.png') }}" alt="logo-4" class="w-inherit h-inherit" />
        </div>
        <section class="w-full h-auto flex flex-col justify-evenly gap-5">
          <div class="h-20 flex flex-col items-center gap-5 score-box">
            <div class="h-20 flex flex-col justify-around items-center w-half text-center">
              <x-pie-box progress=45 answered='5/20 overall' class="w-15 h-15"/>
            </div>
          </div>
          <div class="h-20 flex justify-center flex-wrap items-center gap-5 score-box">
            <div class="h-10 flex flex-col justify-around items-center w-quarter text-center">
              <x-pie-box progress=45 answered='5/20 in English Language' class="w-10 h-10"/>
            </div>
            <div class="h-10 flex flex-col justify-around items-center w-quarter text-center">
              <x-pie-box progress=45 answered='5/20 in Science' class="w-10 h-10"/>
            </div>
            <div class="h-10 flex flex-col justify-around items-center w-quarter text-center">
              <x-pie-box progress=45 answered='5/20 in Home Economics' class="w-10 h-10"/>
            </div>
          </div>
          <div class="w-full h-auto flex items-center flex-col gap-5">
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
      <div class="w-half flex justify-between items-center gap-5 sm-md-width" style="--rWidthValue:100%;">
        <a href="{{ route('exam.corrections', $id) }}" class="btn btn-primary sm-btn">View Corrections</a>
        <div class="flex items-center gap-10 text-dark">
          <a href="{{ route('home') }}" class="inline-flex items-center text-14"><x-home-icon /> Home</a>
          <a href="{{ route('show.user-dashboard') }}" class="inline-flex items-center text-14"><x-activity-icon />
            Dashboard</a>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
