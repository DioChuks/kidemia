@include('partials.header')

<body>
  <x-preloader />
  <div id="app" class="hidden">
    <main class="relative w-full h-max-screen flex flex-col justify-evenly items-center bg-brand-white element-before">
      <div class="w-3-quarts h-50 flex flex-col p-5 items-center gap-5 bg-brand-white rounded-sm shadow-auth z-1">
        <div class="h-8 r-img">
          <img src="{{ asset('images/KIDEMIA LOGO pro.png') }}" alt="logo-pro-1" class="w-inherit h-inherit" />
        </div>
        <header class="flex flex-col justify-between items-center gap-5" id="formHeader">
          <div id="title">
            <h2 class="font-sm text-center">Welcome to <span class="font-lg text-secondary">KIDEMIA</span></h2>
            <p class="font-xs text-dark">Complete your registration in just 4 steps</p>
          </div>

        </header>
        <form id="body" class="w-3-quarts flex flex-col justify-between items-center gap-5"
          action="{{ route('register') }}" method="POST">
          @csrf
          <div id="pagination" class="flex items-center gap-5">
            @for ($i = 1; $i <= 4; $i++)
              <div
                class="w-2 h-2 flex items-center p-5 rounded-full @if ($i === 1) bg-primary @else bg-light-grey @endif text-white text-center"
                id="number">
                {{ $i }}</div>
              @if ($i !== 4)
                <span class="font-lg text-light-grey text-center sm-w-value" id="bar" style="--rWidthValue:100%;">- - - -</span>
              @endif
            @endfor
          </div>

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
              <h3 class="font-lg text-center">OR</h3>
              <a href="#" id="registerWithGoogle"
                class="w-full flex justify-start items-center gap-10 p-10 bg-white bg-hover font-xs rounded-sm border-none cursor-pointer transition-all"
                style="--bgHoverColor:#f7f7f7;"><img src="{{ asset('images/google.png') }}" alt="google-logo"> Sign
                up with
                Google</a>
              <div id="loginLink" class="text-center"><span>I have an account <a href="{{ route('show.login') }}"
                    class="text-primary text-hover-underline">Login</a></span></div>
            </div>
            <div id="step" class="w-full hidden flex-col items-center gap-5">
              <h2>Are you a</h2>
              <div class="w-full flex justify-between">
                @for ($i = 0; $i < 2; $i++)
                  <label
                    class ='relative flex flex-col gap-5 items-center p-10 border border-primary rounded-lg cursor-pointer transition-all label-user'
                    for="user-{{ $i }}">
                    <div class="w-9 h-8">
                      <img src="{{ asset($i === 0 ? 'images/Student.png' : 'images/school.png') }}" alt="sub-img"
                        class="w-inherit h-inherit" />
                    </div>
                    <h2>{{ $i === 0 ? 'Student' : 'School' }}</h2>
                  </label>
                  <input type="radio" name="user_type" id="user-{{ $i }}" class="hidden user-id"
                    value="{{ $i === 0 ? 'student' : 'school' }}" />
                @endfor
              </div>
              <button id="biStep"
                class="w-full p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none cursor-disallowed transition-all"
                style="--textColor:#ccc;" type="button">continue</button>
            </div>
            {{-- start of student purpose step --}}
            <div id="step" class="w-full hidden flex-col justify-evenly items-center gap-5">
              <h2>What are you preparing for?</h2>
              <div class="w-3-quarts flex justify-between items-center gap-5">
                @foreach ($purposes as $i => $purpose)
                <div class="w-auto h-4 flex items-center p-10 gap-2 rounded-sm transition-all purpose-box"
                  id="purposeBox">
                  <input type="radio" class="cursor-pointer purpose-radio" name="purpose"
                    id="purpose-{{ $i }}" aria-describedby="purpose" value="{{ $purpose }}" />
                  <label for="purpose-{{ $i }}" class="cursor-pointer">{{ $purpose }}</label>
                </div>
              @endforeach
              </div>
              <div class="w-full flex justify-between items-center">
                <a id="studentBackToTypeStep"
                  class="text-dark font-xs cursor-pointer">
                  < Back
              </a>
                <button id="thirdStudentStep"
                  class="w-half p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none cursor-disallowed transition-all"
                  style="--textColor:green;" type="button">
                  continue
                </button>
              </div>
            </div>
            {{-- start of guardian step for student --}}
            <div id="step" class="w-full hidden flex-col justify-evenly items-center gap-5">
              <h2>Let’s meet your guardian</h2>
              <p class="text-center">Your guardian would receive reports on tests and exams you take</p>
              <div class="w-3-quarts flex items-center gap-5">
                <div id="inputBox" class="w-full flex items-center bg-inputGrey gap-5 p-5 rounded-sm border border-primary">
                  <label for="email"><x-mail-icon /></label>
                  <input type="email" name="guardian_email" id="guardianEmail" placeholder="Guardian email"
                    class="w-full border-none outline-none bg-transparent font-xs text-16 text-dark" />
                </div>
              </div>
              <div class="w-full flex justify-between items-center">
                <a id="prevStudentStep"
                  class="text-dark font-xs cursor-pointer">
                  < Back
              </a>
                <button id="FinalStudentStep"
                  class="w-half p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none transition-all"
                  style="--textColor:green;" type="submit">
                  continue
                </button>
              </div>
            </div>
            {{-- end of guardian step for student --}}
            {{-- end of step for student signup --}}

            {{-- start of school step selection --}}
            <div id="step" class="w-full hidden flex-col justify-evenly items-center gap-5">
              <h2>Your school name</h2>
              <div class="w-3-quarts flex justify-between items-center gap-5">
                <div class="w-full h-4 flex items-center p-10 gap-2 rounded-sm transition-all schoolname-box"
                  id="schoolNameBox">
                  <input type="text" class="w-full bg-transparent font-lg" name="school_name"
                    id="schoolName" aria-describedby="schoolName" />
                </div>
              </div>
              <div class="w-full flex justify-between items-center">
                <a id="schoolBackToTypeStep"
                  class="text-dark font-xs cursor-pointer">
                  < Back
              </a>
                <button id="thirdSchoolStep"
                  class="w-half p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none cursor-disallowed transition-all"
                  style="--textColor:green;" type="button">
                  continue
                </button>
              </div>
            </div>
            {{-- start of secondary admin --}}
            <div id="step" class="w-full hidden flex-col justify-evenly items-center gap-5">
              <h2>Secondary Admin</h2>
              <p class="text-center">This admin would receive report from the school </p>
              <div class="w-3-quarts flex items-center gap-5">
                <div id="inputBox" class="w-full flex items-center bg-inputGrey gap-5 p-5 rounded-sm border border-primary">
                  <label for="email"><x-mail-icon /></label>
                  <input type="email" name="second_admin_email" id="secondaryAdminEmail" placeholder="Secondary email"
                    class="w-full border-none outline-none bg-transparent font-xs text-16 text-dark" />
                </div>
              </div>
              <div class="w-full flex justify-between items-center">
                <a id="prevStudentStep"
                  class="text-dark font-xs cursor-pointer">
                  < Back
              </a>
                <button id="FinalSchoolStep"
                  class="w-half p-10 bg-primary text-white text-hover-color font-xs rounded-sm border-none transition-all"
                  style="--textColor:green;" type="submit">
                  continue
                </button>
              </div>
            </div>
            {{-- end of school step selection --}}
          </div>
        </form>
      </div>
    </main>
  </div>
  @vite(['resources/js/check-password.js', 'resources/js/multi-step-form.js'])
</body>

</html>
