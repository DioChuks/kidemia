@include('partials.header')

<body class="bg-brand-white">
  <x-preloader />
  <div id="app" class="hidden">
    <div class="h-max-screen">
      <header class="h-10p flex justify-between items-center bg-secondary header">
        <div class="logo">
          <a href="/" class="w-inherit h-inherit">
            <img src="{{ asset('images/KIDEMIA LOGO pro 2.png') }}" alt="Kidemia" class="w-inherit h-inherit" />
          </a>
        </div>
        {{-- medium to large screen --}}
        <nav class="flex items-center nav sm-d-none">
          <ul class="flex items-center">
            <li class="nav-item"><a href="#"><x-bell-icon /></a></li>
            <li class="text-white nav-item">Admin</li>
        </nav>
        {{-- small screen --}}
        <nav class="relative hidden md-d-none z-10" id="mobile-menu">
          <ul
            class="absolute top-2 right-2 left-2 w-20 h-30 border flex flex-col justify-around items-center bg-brand-white rounded-sm">
            <a href="#" class="flex items-center gap-1 text-dark"><x-bell-icon /> Notifications</a>
            <li class="text-white nav-item">Admin</li>
          </ul>
        </nav>
        <x-menu-icon />
      </header>
      <div class="w-full h-90p flex justify-between gap-5">
        <div class="w-15p h-full flex flex-col gap-10 items-start bg-white text-16 text-secondary p-5">
          <div class="flex items-center gap-5 text-secondary mt-5">
            <x-grid-icon /> <span>Dashboard</span>
          </div>
          <a href="{{ route('admin.report') }}"
            class="w-full flex items-center gap-5 text-secondary border-bottom-3 border-secondary">
            <x-report-line-icon /> <span class="font-lg">Report</span>
          </a>
          <a href="{{ route('admin.subjects') }}" class="w-full flex justify-between items-center gap-5 text-dark">
            <h3>Subjects </h3><span>(12)</span>
          </a>
        </div>
        <div class="w-85p h-full flex flex-col gap-5 items-center p-10 ml-5 mr-5 overflow-auto">
          <div class="w-full h-full flex-flex-col justify-evenly items-center gap-10">
            <a href="{{ route('admin.subjects') }}"
              class="w-2 h-2 flex items-center justify-center rounded-full text-dark border cursor-pointer">
              <x-left-arrow-icon />
            </a>
            <br>
            <div class="w-full flex justify-between items-center gap-5 flex-wrap">
              <div class="w-80p flex flex-col items-center gap-10 bg-white rounded-sm">
                <h1 class="text-center text-primary">Select a Subject</h1>
                <div class="w-full flex flex-wrap bg-semi-transparent items-center gap-10 p-10">
                  @foreach ($subjects as $subject)
                    <a href="{{ route('admin.new-question', $subject['uuid']) }}"
                      class="w-20 p-10 border border-light-grey rounded-xs bg-grey-200 shadow-md-hover transition-all">
                      <span class="text-center text-dark">{{ $subject['name'] }}</span>
                    </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @vite(['resources/js/modal.js'])
</body>

</html>
