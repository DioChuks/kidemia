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
          <a href="{{ route('admin.report') }}" class="w-full flex items-center gap-5 text-secondary border-bottom-3 border-secondary">
            <x-report-line-icon /> <span class="font-lg">Report</span>
          </a>
          <a href="{{ route('admin.subjects') }}" class="w-full flex justify-between items-center gap-5 text-dark">
            <h3>Subjects </h3><span>(12)</span>
          </a>
        </div>
        <div class="w-85p h-full flex flex-col gap-5 items-center p-10 ml-5 mr-5 overflow-auto">
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

                <button
                  id="openBtn"
                  class="flex items-center gap-5 p-10 border-none outline-none bg-primary bg-hover text-white rounded-sm cursor-pointer transition-all" style="--bgHoverColor:var(--infoColor)"><x-plus-icon />
                  Add Subject</button>
              </div>
            </div>
            <div class="w-full flex justify-between items-center gap-5 flex-wrap">
              @foreach ($data as $index => $value)
                @php
                  $cardConfig = [
                      'studentsAmount' => [
                          'icon' => 'users-icon',
                          'title' => 'No. of Students',
                          'class' => 'bg-grey-gradient shadow-md-hover',
                          'type' => 'p-10 bg-grey-200',
                      ],
                      'subjectsAmount' => [
                          'icon' => 'books-icon',
                          'title' => 'No. of Subjects',
                          'class' => 'bg-primary-gradient text-primary shadow-md-hover',
                          'type' => '',
                      ],
                      'topicsAmount' => [
                          'icon' => 'folder-icon',
                          'title' => 'No. of Topics',
                          'class' => 'bg-grey-gradient text-green shadow-md-hover',
                          'type' => '',
                      ],
                      'testsAmount' => [
                          'icon' => 'question-icon',
                          'title' => 'No. of Tests',
                          'class' => 'bg-primary-gradient text-secondary shadow-md-hover',
                          'type' => '',
                      ],
                  ];
                @endphp

                <x-card-info-box icon-name="{{ $cardConfig[$index]['icon'] }}"
                  title="{{ $cardConfig[$index]['title'] }}" :amount="$value" :class="$cardConfig[$index]['class']" :type="$cardConfig[$index]['type']" />
              @endforeach
            </div>
            <br>
            <div class="w-full h-half flex items-center gap-10">
              <x-bar-chart :bars="['30', '15', '5', '60', '90']" title-id="recent-test" class="bg-white rounded-sm"/>
              <x-bar-chart :bars="['30', '45', '35', '55', '50']" title-id="recent-exam" class="bg-white rounded-sm"/>
            </div>
          </div>
        </div>
      </div>
      {{-- add subject modal --}}
      <div class="fixed hidden z-1 left-0 top-0 w-full h-full justify-center items-center overflow-auto bg-semi-black transition-all PendingApprovalModal" id="customModal">
        <form class="relative w-half h-3-quarts flex flex-col items-center justify-evenly gap-5 bg-brand-white p-10 rounded-md modal-content animate-slideDown" method="post" action="">
          @csrf
          <span class="absolute w-3 h-3 flex justify-center items-center top-2 right-2 text-dark text-20 rounded-md border border-dark cursor-pointer text-hover-color" id="closeModal" style="--textColor:crimson;">&times;</span>
          <h1 class="text-dark sm-text-value" style="--textSmVal:13px;">
            Add a <span class="text-secondary">Subject</span></h1>
          <div class="w-full flex flex-col justify-center items-center gap-10">
            <input type="text" class="w-3-quarts h-4 pl-1 bg-primary-grad2 border-none outline-none rounded-sm" name="subject_name" id="subjectName" placeholder="Name of subject"/>
            <select class="w-3-quarts h-4 pl-1 bg-primary-grad2 border-none outline-none rounded-sm" name="subject_category" id="subjectCategory">
              <option value="0">Category of subject</option>
              <option value="common entrance">common entrance</option>
              <option value="junior waec">junior waec</option>
              <option value="senior waec">senior waec</option>
            </select>
            <select class="w-3-quarts h-4 pl-1 bg-primary-grad2 border-none outline-none rounded-sm" name="subject_category" id="subjectCategory">
              <option value="0">Color of subject</option>
              <option value="yellow">yellow</option>
              <option value="purple">purple</option>
              <option value="crimson">crimson</option>
            </select>
          </div>
          <div class="w-3-quarts flex items-center justify-between gap-5">
            <button class="w-half p-10 border-none outline-none rounded-sm bg-primary-grad22 text-primary cursor-pointer" type="submit">Save and Close</button>
            <a href="{{ route('admin.add-question') }}" class="w-half p-10 border-none outline-none rounded-sm bg-primary text-center text-white cursor-pointer" type="submit">Add Question</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  @vite(['resources/js/modal.js'])
</body>

</html>
