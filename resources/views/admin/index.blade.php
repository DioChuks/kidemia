@include('partials.header')

<body class="bg-brand-white">
  <x-preloader />
  <div id="app" class="hidden">
    <div class="h-max-screen">
      <header class="h-10p flex justify-between items-center bg-secondary mb-4 header">
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
    </div>
  </div>

</body>

</html>
