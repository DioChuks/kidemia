@include('partials.header')

<body class="bg-brand-white">
  <x-preloader />
  <div id="app" class="hidden">
    <div class="h-max-screen">
      <header class="h-10p flex justify-between items-center bg-secondary mb-4 header">
        <div class="logo">
          <img src="{{ asset('images/KIDEMIA LOGO pro 2.png') }}" alt="Kidemia" class="w-inherit h-inherit" />
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
        <div class="Frame2608385" style="width: 860px; height: 915px; padding-top: 81px; padding-bottom: 80px; padding-left: 45px; padding-right: 44px; background: white; border-radius: 20px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
            <div class="Frame2608394" style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: center; gap: 37px; display: inline-flex">
              <div class="Frame2608387" style="flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: flex">
                <img class="Ellipse1" style="width: 150px; height: 150px; border-radius: 9999px; border: 3px #F28729 solid" src="{{asset('images/Ellipse 1.svg') }}" />
                <div class="Frame2608386" style="justify-content: flex-start; align-items: flex-start; gap: 20px; display: inline-flex">
                  <x-cloud-upload-icon />
                  <div class="TapToUploadYourPicture"><span style="color: black; font-size: 14px; font-family: Century Gothic; font-weight: 400; line-height: 19.60px; word-wrap: break-word">Tap to </span><span style="color: #F28729; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">upload</span><span style="color: black; font-size: 14px; font-family: Century Gothic; font-weight: 400; line-height: 19.60px; word-wrap: break-word"> your picture</span></div>
                </div>
              </div>
              <div class="Frame2608390" style="flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
                <div class="Frame165" style="padding-left: 8px; padding-right: 8px; padding-top: 10px; padding-bottom: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 5px; display: flex">
                  <div class="Frame166" style="padding-left: 12px; padding-right: 12px; opacity: 0.70; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                    <div class="YourName" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Your Name</div>
                  </div>
                  <div class="Frame2608389" style="justify-content: flex-start; align-items: flex-start; gap: 5px; display: inline-flex">
                    <div class="Frame164" style="width: 600px; height: 43px; padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; overflow: hidden; border-bottom: 1px #F28729 solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                      <div class="Student" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">Student</div>
                    </div>
                    <div class="Frame3" style="padding-top: 9px; padding-bottom: 11px; padding-left: 45px; padding-right: 45px; background: #F28729; border-radius: 5px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                      <div class="Update" style="color: white; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 19.80px; word-wrap: break-word">Update</div>
                    </div>
                  </div>
                </div>
                <div class="Frame2608388" style="padding-left: 8px; padding-right: 8px; padding-top: 10px; padding-bottom: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 5px; display: flex">
                  <div class="Frame166" style="padding-left: 12px; padding-right: 12px; opacity: 0.70; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                    <div class="YourEmail" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Your email</div>
                  </div>
                  <div class="Frame2608389" style="justify-content: flex-start; align-items: flex-start; gap: 5px; display: inline-flex">
                    <div class="Frame164" style="width: 600px; height: 43px; padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; overflow: hidden; border-bottom: 1px #F28729 solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                      <div class="EchempraiseGmailCom" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">echempraise@gmail.com</div>
                    </div>
                    <div class="Frame3" style="padding-top: 9px; padding-bottom: 11px; padding-left: 45px; padding-right: 45px; background: #F28729; border-radius: 5px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                      <div class="Update" style="color: white; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 19.80px; word-wrap: break-word">Update</div>
                    </div>
                  </div>
                </div>
                <div class="Frame2608389" style="padding-left: 8px; padding-right: 8px; padding-top: 10px; padding-bottom: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 5px; display: flex">
                  <div class="Frame166" style="padding-left: 12px; padding-right: 12px; opacity: 0.70; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                    <div class="YourCategory" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Your category</div>
                  </div>
                  <div class="Frame2608389" style="justify-content: flex-start; align-items: flex-start; gap: 5px; display: inline-flex">
                    <div class="Frame164" style="width: 600px; height: 43px; padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; overflow: hidden; border-bottom: 1px #F28729 solid; justify-content: space-between; align-items: center; display: flex">
                      <div class="CommonEntrance" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">Common Entrance</div>
                      <div class="Change" style="width: 62px; height: 23px; justify-content: center; align-items: center; display: flex">
                        <div class="Change" style="color: #FF0000; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">change</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="Frame2608390" style="padding-left: 8px; padding-right: 8px; padding-top: 10px; padding-bottom: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 5px; display: flex">
                  <div class="Frame166" style="padding-left: 12px; padding-right: 12px; opacity: 0.70; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                    <div class="GuardianEmail" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Guardian Email</div>
                  </div>
                  <div class="Frame2608390" style="justify-content: flex-start; align-items: flex-start; gap: 5px; display: inline-flex">
                    <div class="Frame164" style="width: 600px; height: 43px; padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; overflow: hidden; border-bottom: 1px #F28729 solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                      <div class="EchempraiseGmailCom" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">echempraise@gmail.com</div>
                    </div>
                    <div class="Frame3" style="padding-top: 9px; padding-bottom: 11px; padding-left: 45px; padding-right: 45px; background: #F28729; border-radius: 5px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                      <div class="Update" style="color: white; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 19.80px; word-wrap: break-word">Update</div>
                    </div>
                  </div>
                </div>
                <div class="Frame2608392" style="padding-left: 8px; padding-right: 8px; padding-top: 10px; padding-bottom: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 5px; display: flex">
                  <div class="Frame166" style="padding-left: 12px; padding-right: 12px; opacity: 0.70; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                    <div class="School" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 700; line-height: 25.20px; word-wrap: break-word">School</div>
                  </div>
                  <div class="Frame2608389" style="justify-content: flex-start; align-items: center; gap: 5px; display: inline-flex">
                    <div class="Frame164" style="width: 600px; height: 43px; padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; overflow: hidden; border-bottom: 1px #F28729 solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                      <div class="Null" style="color: #3A3A3A; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">Null</div>
                    </div>
                  </div>
                </div>
                <div class="Frame2608391" style="padding-left: 8px; padding-right: 8px; padding-top: 20px; padding-bottom: 20px; justify-content: center; align-items: flex-start; gap: 10px; display: inline-flex">
                  <div class="ChangePassword" style="color: black; font-size: 16px; font-family: Century Gothic; font-weight: 400; line-height: 22.40px; word-wrap: break-word">Change Password</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</body>

</html>
