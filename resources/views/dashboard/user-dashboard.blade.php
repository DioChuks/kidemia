@include('partials.header')

<body class="bg-brand-white">
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
              <li class="nav-item"><a href="#"><img src="{{ asset('images/Ellipse 1.svg') }}"
                    alt="User-icon" /></a></li>
            </ul>
        </nav>
        {{-- small screen --}}
        <nav class="relative hidden md-d-none z-10" id="mobile-menu">
          <ul
            class="absolute top-2 right-2 left-2 w-20 h-30 border flex flex-col justify-around items-center bg-brand-white rounded-sm">
            <li class="nav-item"><a href="#">Scheme</a></li>
            <a href="#" class="flex items-center gap-1 text-dark"><x-bell-icon /> Notifications</a>
            <li class="nav-item"><a href="#" class="w-5 h-4 flex items-center gap-1"><img
                  src="{{ asset('images/Ellipse 1.svg') }}" alt="User-icon" class="w-2 h-2" /> Account</a></li>
          </ul>
        </nav>
        <x-menu-icon />
      </header>
      <div class="h-5p flex items-center pl-5">
        <div class="cursor-pointer transition-all transform-scale-d3-hover">
            <x-arrow-left-icon/>
        </div>
      </div>
      <div class="w-full h-85p flex items-center justify-between sm-flex-col">
        <div class="w-quarter h-full sm-w-value h-md-sm" style="--rWidthValue:100%;--rH:90vh">
            <div class="w-full h-full flex flex-col items-center gap-5">
                <div class="relative w-full h-70p flex items-center justify-center bg-secondary text-white p-5 profile-card">
                    <div class="w-80p h-90p flex flex-col items-center justify-evenly">
                        <div class="flex flex-col items-center gap-5">
                            <div class="w-8 h-8 border-2 bg-primary rounded-full profile-img"><x-user-icon/></div>
                            <h4>Praise Echem</h4>
                            <p>echempraise@gmail.com</p>
                        </div>
                        <div class="text-center">
                            <h4>Senior WAEC</h4>
                            <div class="flex items-center"><div class="w-1 h-1 bg-inputGrey rounded-full"></div>13 Subjects</div>
                        </div>
                        <div class="w-full h-8 flex items-center gap-5">
                            <h5 class="text-grey">Overall Performance</h5>
                            <x-pie-percent class="w-8 h-8 p-5 bg-conic-pie" progress=45 text-size='16' whitespace-bg='bg-secondary' bg-type='bg-primary-10'/>
                        </div>
                    </div>

                    <span class="absolute right-1 w-05 h-quarter bg-gray rounded-md cursor-pointer"></span>
                </div>

                <div class="w-3-quarts flex flex-col gap-5">
                    <a href="" class="p-5 text-center rounded-sm text-13 font-lg bg-primary text-white">Exam History</a>
                    <a href="" class="p-5 text-center rounded-sm text-13 font-lg bg-primary text-white">Test History</a>
                </div>

                <div class="w-full flex gap-5 p-5">
                    <a href="{{ route('take.test') }}" class="w-half p-10 text-center rounded-md text-13 font-lg bg-primary text-white">Take a Test</a>
                    <a href="{{ route('take.exam') }}" class="w-half p-10 text-center rounded-md text-13 font-lg bg-primary text-white">Take an Exam</a>
                </div>
            </div>
        </div>
        <div class="w-70p h-full bg-gray p-10 top-left-radius sm-w-value h-md-sm" style="--rWidthValue:100%;--rH:auto">
            <h2 class="text-dark mb-2">Subject Performance</h2>
            <div class="w-full h-35 flex items-center gap-10 p-10 bg-semi-transparent border-2 border-white rounded-md">
                <div class="w-quarter h-90p flex items-center">
                    <div class="w-full h-80p flex flex-col items-center gap-5">
                      <x-pie-percent class="w-10 h-10 p-5 bg-conic-purple" progress="45" textSize="text-18" whitespace-bg='bg-semi-transparent' bg-type='bg-purple'/>
                      <div class="flex items-center gap-5">
                        <span id="oldPercentS1">50%</span>
                        <img src="{{ asset('images/arrow-low.png') }}" alt="indicator-logo" />
                        <span id="newPercentS1">45%</span>
                      </div>
                      <h2 class="text-dark">English Language</h2>
                      <div class="w-full flex flex-col items-center gap-5">
                        <a href="">View history</a>
                        <a href="{{ route('take.test') }}" class="w-half p-10 text-center rounded-md text-13 font-lg bg-primary text-white">Take a Test</a>
                      </div>
                    </div>
                </div>
                <div class="w-3-quarts h-90p flex flex-col justify-evenly gap-10 flex-wrap">
                    @for ($i=1; $i < 16; $i++)
                      <div class="flex items-center gap-5" id="topicPerformanceBox{{ $i }}">
                        <x-number-box value='{{$i }}' class="w-3 h-3 bg-light-blue text-white"/>
                        <div class="flex flex-col items-start gap-5 text-dark">
                            <h5 class="font-md">Family</h5>
                            <div class="flex items-center gap-5">
                                <span id="oldPercent{{$i }}">50%</span>
                                <img src="{{ asset('images/arrow-low.png') }}" alt="indicator-logo" />
                                <span id="newPercent{{$i }}">45%</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  @vite(['resources/js/modal.js'])
</body>

</html>
