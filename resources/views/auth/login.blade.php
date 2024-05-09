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
            <h2 class="text-center">Welcome back</h2>
            <p class="font-xs text-dark text-center">Login to continue</p>
          </div>

        </header>
        <form id="body" class="w-3-quarts flex flex-col justify-between items-center gap-5"
          action="{{ route('login') }}" method="POST">
          @csrf
          <div id="steps" class="w-3-quarts sm-w-value" style="--rWidthValue:100%">
            <div id="step" class="flex flex-col gap-5">
              <div id="inputBox" class="flex items-center bg-inputGrey gap-5 p-5 rounded-sm">
                <label for="email"><x-mail-icon /></label>
                <input type="email" name="email" id="email" placeholder="Your email"
                  class="w-full border-none outline-none bg-transparent font-xs text-16 text-dark" required />
              </div>
              <div id="inputPasswordBox" class="flex items-center bg-inputGrey gap-5 p-5 rounded-sm">
                <label for="password"><x-scan-icon /></label>
                <input type="password" name="password" id="password" placeholder="Password"
                  class="w-full border-none outline-none bg-transparent" minlength="6" required />
              </div>
              <a href="{{ route('show.forgot') }}" class="w-fit text-red text-hover-underline">Forgot Password</a>
              <button id="loginBtn"
                class="w-full p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none cursor-pointer transition-all"
                style="--textColor:#f7f7f7;" type="button">Login</button>
              <h3 class="font-lg text-center">OR</h3>
              <a href="#" id="registerWithGoogle"
                class="w-full flex items-center gap-10 p-10 bg-white bg-hover font-xs rounded-sm border-none cursor-pointer transition-all"
                style="--bgHoverColor:#f7f7f7;"><img src="{{ asset('images/google.png') }}" alt="google-logo"> Continue
                with
                Google</a>
              <div id="registerLink" class="text-center"><span>I don't have an account <a
                    href="{{ route('show.register') }}" class="text-primary text-hover-underline">Sign Up</a></span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
