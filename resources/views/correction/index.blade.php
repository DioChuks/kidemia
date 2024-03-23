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
    <div class="w-half h-full flex flex-col gap-5 bg-brand-white">left ox</div>
    <div class="w-half h-full flex flex-col gap-5 border">right ox</div>
   </div>
  </div>
 </div>

</body>

</html>
