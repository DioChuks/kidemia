@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <main class="relative w-full h-max-screen flex flex-col justify-evenly items-center bg-brand-white element-before">
      <div
        class="w-3-quarts h-55 flex flex-col p-5 items-center gap-5 bg-brand-white rounded-sm shadow-auth z-1 animate-slideDown sm-md-width h-md-sm sm-md-justify"
        style="--rWidthValue:95%;--rH:80%;--ct:space-evenly;">
        <div class="h-8 h-md-sm" style="--rH:50px">
          <img src="{{ asset('images/KIDEMIA LOGO pro.png') }}" alt="logo-pro-1" class="w-inherit h-inherit" />
        </div>
        <header class="flex flex-col justify-between items-center gap-5" id="formHeader">
          <div id="title">
            <h2 class="font-sm text-center">Welcome to <span class="font-lg text-secondary">KIDEMIA</span></h2>
            <p class="font-xs text-dark">Complete your registration in just 4 steps</p>
          </div>
        </header>
        <div id="body" class="w-3-quarts flex flex-col justify-between items-center gap-5 sm-md-width h-md-sm"
          style="--rWidthValue:90%;--rH:70%;">
          @csrf
          <div id="pagination" class="flex items-center gap-5 sm-md-width" style="--rWidthValue:90vw">
            @for ($i = 1; $i <= 4; $i++)
              <div
                class="w-2 h-2 flex items-center p-5 rounded-full @if ($i === 1) bg-primary @else bg-light-grey @endif text-white text-center"
                id="number">
                {{ $i }}</div>
              @if ($i !== 4)
                <span class="font-lg text-light-grey text-center sm-w-value" id="bar"
                  style="--rWidthValue:100%;">- - - -</span>
              @endif
            @endfor
          </div>

          <div id="steps" class="w-3-quarts sm-md-width" style="--rWidthValue:100%">

            <div id="step" class="w-full flex flex-col items-center gap-5">
              <h2>Are you a</h2>
              <div class="w-full flex justify-between">
                @for ($i = 0; $i < 2; $i++)
                  <a href="{{ $i === 0 ? route('show.register.step', 'student') : route('show.register.step', 'school') }}"
                    class ='relative flex flex-col gap-5 items-center p-10 border border-primary rounded-lg cursor-pointer transition-all label-user'
                    for="user-{{ $i }}">
                    <div class="w-9 h-8">
                      <img src="{{ asset($i === 0 ? 'images/Student.png' : 'images/school.png') }}" alt="sub-img"
                        class="w-inherit h-inherit" />
                    </div>
                    <h2>{{ $i === 0 ? 'Student' : 'School' }}</h2>
                  </a>
                @endfor
              </div>
              <button id="biStep"
                class="w-full p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none cursor-disallowed transition-all"
                style="--textColor:#ccc;" type="button">continue</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
