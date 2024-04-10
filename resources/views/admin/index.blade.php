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
            <div class="flex items-center gap-5 text-primary mt-5">
                <x-grid-icon /> <span>Dashboard</span>
            </div>
            <div class="w-full flex items-center gap-5 border-bottom border-secondary">
                <x-report-line-icon /> <span class="font-lg">Report</span>
            </div>
            <div class="w-full flex justify-between items-center gap-5 text-dark">
                <h3>Subjects </h3><span>(12)</span>
            </div>
        </div>
        <div class="w-85p h-full flex flex-col gap-5 items-center p-10 overflow-auto">
            <div class="w-full h-full flex-flex-col justify-evenly items-center gap-10">
                <div class="h-15p flex justify-between items-center gap-5">
                    <h3 class="text-dark">Hello, Admin</h3>
                    <div class="flex items-center gap-5">
                        <div class="flex items-center">
                            <h5 class="text-dark">Category:</h5>
                            <select name="category" id="usersCategory" class="border-none outline-none bg-transparent">
                                <option value="1">Common Entrance</option>
                                <option value="2">Junior WAEC</option>
                                <option value="3">Senior WAEC</option>
                            </select>
                        </div>

                        <button class="flex items-center gap-5 p-10 border-none outline-none bg-primary text-white rounded-sm cursor-pointer"><x-plus-icon /> Add Subject</button>
                    </div>
                </div>
                <div class="w-full flex justify-between items-center gap-5 flex-wrap">
                    @foreach ($data as $d)
                        <div class="w-20p h-15 flex justify-evenly border bg-grey-gradient rounded-sm info-card">
                            <div class="flex items-center gap-5">
                                <span>icon</span>
                                <div class="flex flex-col items-center gap-5">
                                    <h6>No. of S</h6>
                                    <h1>{{ $d }}</h1>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
