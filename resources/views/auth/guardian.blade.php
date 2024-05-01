@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <main class="relative w-full h-max-screen flex flex-col justify-evenly items-center bg-brand-white element-before">
      <div
        class="w-3-quarts h-50 flex flex-col p-5 justify-evenly items-center gap-5 bg-brand-white rounded-sm shadow-auth z-1 animate-slideDown sm-md-width h-md-sm"
        style="--rWidthValue:95%;--rH:80%;">
        <a class="h-8 r-img" href="{{ route('home') }}">
          <img src="{{ asset('images/logo2.png') }}" alt="logo-pro-1" class="w-inherit h-inherit" />
        </a>
        <header class="flex flex-col justify-between items-center gap-5" id="formHeader">
          <div id="title">
            <h2 class="font-sm text-center">Welcome to <span class="font-lg text-secondary">KIDEMIA</span></h2>
            <p class="font-xs text-dark text-center">Create your passward to complete your registration as a Guardian
            </p>
          </div>

        </header>
        <form id="body" class="w-3-quarts flex flex-col justify-between items-center gap-5"
          action="{{ route('register.guardian') }}" method="POST">
          @csrf
          <div id="steps" class="w-3-quarts sm-w-value" style="--rWidthValue:100%">
            <div id="step" class="flex flex-col gap-5">
              <div id="inputBox" class="flex items-center bg-inputGrey gap-5 p-5 rounded-sm border border-primary">
                <label for="email"><x-mail-icon /></label>
                <input type="email" name="email" id="email" placeholder="Your email"
                  class="w-full border-none outline-none bg-transparent font-xs text-16 text-dark" required />
              </div>
              <div id="inputPasswordBox"
                class="flex items-center bg-inputGrey gap-5 p-5 rounded-sm border border-primary">
                <label for="password"><x-scan-icon /></label>
                <input type="password" name="password" id="password" placeholder="Password"
                  class="w-full border-none outline-none bg-transparent" minlength="6" required />
              </div>
              <div id="checkPasswordBox"
                class="flex items-center bg-inputGrey gap-5 p-5 rounded-sm border border-primary">
                <label for="confirmPassword"><x-scan-icon /></label>
                <input type="password" name="confirm_password" id="confirmPassword" placeholder="Check Password"
                  class="w-full border-none outline-none bg-transparent" minlength="6" required />
              </div>
              <button id="nextStep"
                class="w-full p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none cursor-pointer transition-all"
                style="--textColor:#f7f7f7;" type="button">Sign Up</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>

  @vite(['resources/js/check-password.js'])
</body>

</html>
