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
      <div class="flex items-center justify-center">
        <div
          class="w-80 h-full inline-flex flex-col items-center justify-center pr-5 pl-5 pt-5 pb-5 rounded-lg bg-white overflow-hidden Frame2608385">
          <div class="w-full inline-flex flex-col justify-start items-center gap-10 self-stretch Frame2608394">
            <div class="flex flex-col justify-center items-center gap-5 Frame2608387">
              <img class="w-10 h-10 rounded-full border-3 border-primary Ellipse1"
                src="{{ asset('images/Ellipse 1.svg') }}" />
              <div class="inline-flex justify-start items-start gap-10 Frame2608386">
                <x-cloud-upload-icon />
                <div class="text-dark text-14 font-md font-gothic TapToUploadYourPicture"><span
                    style="line-height: 19.60px; word-wrap: break-word">Tap to </span><span
                    class="text-primary font-md text-16 font-gothic"
                    style="line-height: 22.40px; word-wrap: break-word">upload</span><span
                    class="text-dark text-14 font-md font-gothic" style="line-height: 19.60px; word-wrap: break-word">
                    your picture</span></div>
              </div>
            </div>
            <div class="w-full flex flex-col justify-center items-start Frame2608390">
              <div class="w-full flex flex-col justify-start items-start gap-2 pl-2 pr-2 pt-2 pb-2 Frame165">
                <div class="inline-flex justify-start items-start gap-5 Frame166"
                  style="padding-left: 12px; padding-right: 12px; opacity: 0.70;">
                  <div class="text-16 text-gray font-gothic font-xl YourName"
                    style="line-height: 25.20px; word-wrap: break-word">Your Name</div>
                </div>
                <div class="w-full inline-flex justify-start items-start gap-2 Frame2608389">
                  <div
                    class="w-3-quarts flex justify-start items-center gap-5 rounded-sm pt-2 pb-2 pl-3 pr-3 overflow-hidden border-bottom border-primary Frame164"
                    style="width: 600px; height: 43px;">
                    <input class="w-full text-gray text-16 font-gothic font-xs Student border-none outline-none"
                      style="line-height: 22.40px; word-wrap: break-word" value="" placeholder="Student" />
                  </div>
                  <button
                    class="w-quarter flex justify-center items-center p-10 bg-primary rounded-xs border-none cursor-pointer Frame3">
                    <span class="text-white text-16 font-gothic font-md Update"
                      style="line-height: 19.80px; word-wrap: break-word">Update</span>
                  </button>
                </div>
              </div>
              <div class="w-full flex flex-col justify-start items-start gap-2 pl-2 pr-2 pt-2 pb-2 Frame2608388">
                <div class="inline-flex justify-start items-start gap-5 Frame166"
                  style="padding-left: 12px; padding-right: 12px; opacity: 0.70;">
                  <div class="text-16 text-gray font-gothic font-xl YourEmail"
                    style="line-height: 25.20px; word-wrap: break-word">Your email</div>
                </div>
                <div class="w-full inline-flex justify-start items-start gap-2 Frame2608389">
                  <div
                    class="w-3-quarts flex justify-start items-center gap-5 rounded-sm pt-2 pb-2 pl-3 pr-3 overflow-hidden border-bottom border-primary Frame164"
                    style="width: 600px; height: 43px;">
                    <input class="w-full text-gray text-16 font-gothic font-xs Student border-none outline-none"
                      style="line-height: 22.40px; word-wrap: break-word" value="" placeholder="echempraise@gmail.com" />
                  </div>
                  <button
                    class="w-quarter flex justify-center items-center p-10 bg-primary rounded-xs border-none cursor-pointer Frame3">
                    <span class="text-white text-16 font-gothic font-md Update"
                      style="line-height: 19.80px; word-wrap: break-word">Update</span>
                  </button>
                </div>
              </div>
              <div class="w-full flex flex-col justify-start items-start gap-2 pl-2 pr-2 pt-2 pb-2 Frame2608388">
                <div class="inline-flex justify-start items-start gap-5 Frame166"
                  style="padding-left: 12px; padding-right: 12px; opacity: 0.70;">
                  <div class="text-16 text-gray font-gothic font-xl YourCategory"
                    style="line-height: 25.20px; word-wrap: break-word">Your category</div>
                </div>
                <div class="w-full inline-flex justify-start items-start gap-2 Frame2608389">
                  <div
                    class="w-3-quarts flex justify-start items-center gap-5 rounded-sm pt-2 pb-2 pl-3 pr-3 overflow-hidden border-bottom border-primary Frame164"
                    style="width: 600px; height: 43px;">
                    <input class="w-full text-gray text-16 font-gothic font-xs Student border-none outline-none"
                      style="line-height: 22.40px; word-wrap: break-word" value="" placeholder="Common Entrance" />
                    <button
                      class="w-auto h-full flex justify-center items-center bg-transparent border-none cursor-pointer Frame3" 
                      id="openBtn">
                      <span class="text-red text-16 font-gothic font-md Change"
                        style="line-height: 19.80px; word-wrap: break-word">change</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="w-full flex flex-col justify-start items-start gap-2 pl-2 pr-2 pt-2 pb-2 Frame2608388">
                <div class="inline-flex justify-start items-start gap-5 Frame166"
                  style="padding-left: 12px; padding-right: 12px; opacity: 0.70;">
                  <div class="text-16 text-gray font-gothic font-xl GuardianEmail"
                    style="line-height: 25.20px; word-wrap: break-word">Guardian Email</div>
                </div>
                <div class="w-full inline-flex justify-start items-start gap-2 Frame2608389">
                  <div
                    class="w-3-quarts flex justify-start items-center gap-5 rounded-sm pt-2 pb-2 pl-3 pr-3 overflow-hidden border-bottom border-primary Frame164"
                    style="width: 600px; height: 43px;">
                    <input class="w-full text-gray text-16 font-gothic font-xs Student border-none outline-none"
                      style="line-height: 22.40px; word-wrap: break-word" value="" placeholder="diochuks65@gmail.com" />
                  </div>
                  <button
                    class="w-quarter flex justify-center items-center p-10 bg-primary rounded-xs border-none cursor-pointer Frame3">
                    <span class="text-white text-16 font-gothic font-md Update"
                      style="line-height: 19.80px; word-wrap: break-word">Update</span>
                  </button>
                </div>
              </div>
              <div class="w-full flex flex-col justify-start items-start gap-2 pl-2 pr-2 pt-2 pb-2 Frame2608388">
                <div class="inline-flex justify-start items-start gap-5 Frame166"
                  style="padding-left: 12px; padding-right: 12px; opacity: 0.70;">
                  <div class="text-16 text-gray font-gothic font-xl School"
                    style="line-height: 25.20px; word-wrap: break-word">School</div>
                </div>
                <div class="w-full inline-flex justify-start items-start gap-2 Frame2608389">
                  <div
                    class="w-3-quarts flex justify-start items-center gap-5 rounded-sm pt-2 pb-2 pl-3 pr-3 overflow-hidden border-bottom border-primary Frame164"
                    style="width: 600px; height: 43px;">
                    <input class="w-full text-gray text-16 font-gothic font-xs Student border-none outline-none"
                      style="line-height: 22.40px; word-wrap: break-word" value="" placeholder="null" />
                  </div>
                </div>
              </div>
              <div class="w-full inline-flex justify-start items-start pl-2 pr-2 pt-2 pb-2">
                <button class="text-16 font-lg border-none bg-transparent cursor-pointer text-hover-color"
                  style="--textColor:orangered;">Change Password</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- change category modal --}}
      <div class="fixed hidden z-1 left-0 top-0 w-full h-full justify-center items-center overflow-auto bg-semi-black transition-all PendingApprovalModal" id="customModal">
        <span class="close" id="closeModal">&times;</span>
        <form class="w-80p h-half flex flex-col items-center justify-evenly gap-5 bg-white p-10 rounded-md modal-content" method="post" action="">
          @csrf
          <h3 class="text-16 font-md WhatCategoryDoYouWantToChangeTo"
            style="line-height: 22.40px; word-wrap: break-word">
            What category do you want to change to</h3>
          <div class="flex justify-start items-start gap-10 Frame2608373">
            <div class="flex items-center gap-5">
              <input type="radio" name="category" id="category1" value="Common Entrance" />
              <label for="category1" class="cursor-pointer">Common Entrance</label>
            </div>
            <div class="flex items-center gap-5">
              <input type="radio" name="category" id="category2" value="Junior WAEC" />
              <label for="category2" class="cursor-pointer">Junior WAEC</label>
            </div>
            <div class="flex items-center gap-5">
              <input type="radio" name="category" id="category3" value="Senior WAEC" />
              <label for="category3" class="cursor-pointer">Senior WAEC</label>
            </div>
          </div>
          <div class="flex flex-col items-center justify-between gap-5">
            <p class="text-16 font-md">Your guardian would need to approve your change, then you will be notified of their choice</p>
            <button class="w-half p-10 border-none outline-none rounded-sm bg-primary text-white cursor-pointer" type="submit">Change</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @vite(['resources/js/modal.js'])
</body>

</html>
