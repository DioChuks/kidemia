@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <div class="h-max-screen sm-md-height">
      <header class="h-10p flex justify-between items-center bg-secondary header">
        <div class="logo">
          <a href="/" class="w-inherit h-inherit">
            <img src="{{ asset('images/KIDEMIA LOGO pro 2.png') }}" alt="Kidemia" class="w-inherit h-inherit" />
          </a>
        </div>
        {{-- medium to large screen --}}
        <nav class="flex items-center nav sm-d-none">
          <ul class="flex items-center">
            <li class="nav-item"><a href="#">Scheme</a></li>
            <li class="nav-item"><a href="#"><x-bell-icon /></a></li>
            <ul>
              <li class="nav-item"><a href="{{ route('show.user-profile') }}"><img
                    src="{{ asset('images/Ellipse 1.svg') }}" alt="User-icon" /></a></li>
            </ul>
        </nav>
        {{-- small screen --}}
        <nav class="relative hidden md-d-none z-10" id="mobile-menu">
          <ul
            class="absolute top-2 right-2 left-2 w-20 h-30 border flex flex-col justify-around items-center bg-brand-white rounded-sm">
            <li class="nav-item"><a href="#">Scheme</a></li>
            <a href="#" class="flex items-center gap-1 text-dark"><x-bell-icon /> Notifications</a>
            <li class="nav-item"><a href="{{ route('show.user-profile') }}" class="w-5 h-4 flex items-center gap-1"><img
                  src="{{ asset('images/Ellipse 1.svg') }}" alt="User-icon" class="w-2 h-2" /> Account</a></li>
          </ul>
        </nav>
        <x-menu-icon />
      </header>
      <div class="h-10p flex items-center pl-5">
        <a href="{{ route('show.user-dashboard') }}" class="flex items-center gap-5 cursor-pointer">
          <x-arrow-left-icon />
          <h1 class="text-dark">Your test history</h1>
        </a>
      </div>
      <br>
      <div class="w-full flex flex-col gap-10 items-center justify-center">
        <div class="w-90p h-30 flex items-center justify-between gap-5 p-5 bg-gray rounded-md sm-flex-col sm-justify-content h-md-sm" style="--pos:space-evenly;--rH:100%;">
          <div class="w-40p h-70p flex flex-col justify-center gap-10">
            <div class="flex items-center gap-5 bg-white rounded-sm pl-1 pr-1"><img src="{{ asset('images/calendar.png') }}"
                alt="calendar"> Date: 24-10-2024</div>
            <div class="flex items-center gap-5 bg-white rounded-sm pl-1 pr-1"><img src="{{ asset('images/image 3.png') }}"
                alt="clock"> Time Used: 20 mins</div>
            <div class="flex items-center gap-5 bg-white rounded-sm pl-1 pr-1"><img src="{{ asset('images/meter.png') }}"
                alt="meter"> Average Time per second: 1min per question</div>
          </div>
          <div class="h-full">
            <div class="w-30 h-80p flex flex-col items-center gap-5">
              <x-pie-percent class="w-10 h-10 p-5 bg-conic-pie font-xl" progress="45" textSize="text-18"
                whitespace-bg='bg-gray' bg-type='bg-primary' />
              <div class="flex items-center gap-5">
                <span id="oldPercentS1">50%</span>
                <img src="{{ asset('images/arrow-low.png') }}" alt="indicator-logo" />
                <span id="newPercentS1">45%</span>
              </div>
              <h2 class="text-dark">English Language</h2>
              <div class="w-full flex flex-col items-center gap-5">
                <div class="text-center">
                    <h3>Remark</h3>
                    <p>Poor</p>
                </div>
                <div class="text-center">
                    <h3>Comment</h3>
                    <p>You can always do better</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-30 h-95p bg-white top-right-radius bottom-right-radius p-5">
            <h4>16 Topics touched on</h4>
            <br>
            <div class="w-full flex flex-col gap-5 h-70p">
                <div class="w-full flex items-center justify-between border-bottom">
                    <h6 class="text-gray">Family</h6>
                    <span><span class="text-green font-lg">6</span>/10</span>
                </div>
                <div class="w-full flex items-center justify-between border-bottom">
                    <h6 class="text-gray">Family</h6>
                    <span><span class="text-green font-lg">6</span>/10</span>
                </div>
                <div class="w-full flex items-center justify-between border-bottom">
                    <h6 class="text-gray">Family</h6>
                    <span><span class="text-green font-lg">6</span>/10</span>
                </div>
                <div class="w-full flex items-center justify-between border-bottom">
                    <h6 class="text-gray">Family</h6>
                    <span><span class="text-green font-lg">6</span>/10</span>
                </div>
                <div class="w-full flex items-center justify-between border-bottom">
                    <h6 class="text-gray">Family</h6>
                    <span><span class="text-green font-lg">6</span>/10</span>
                </div>
                <div class="w-full flex items-center justify-between border-bottom">
                    <h6 class="text-gray">Family</h6>
                    <span><span class="text-green font-lg">6</span>/10</span>
                </div>
            </div>
            <div class="w-full flex justify-between">
                <a href="" class="p-5 bg-primary text-14 text-white text-center rounded-xs">Take a test</a>
                <a href="" class="p-5 bg-primary text-14 text-white text-center rounded-xs">View Corrections</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
