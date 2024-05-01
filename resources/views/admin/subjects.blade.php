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
          <a href="{{ route('admin.report') }}" class="w-full flex items-center gap-5 text-dark">
            <x-report-line-icon /> <span class="font-lg">Report</span>
          </a>
          <a href="{{ route('admin.subjects') }}"
            class="w-full flex justify-between items-center gap-5 text-secondary border-bottom-3 border-secondary">
            <h3>Subjects </h3><span>({{ count($subjects) }})</span>
          </a>
          @foreach ($subjects as $subject)
            <a href="{{ route('admin.subjects') }}"
              class="w-full text-center text-dark">
              {{ $subject['subject'] }}
            </a>
          @endforeach
        </div>
        <div class="w-85p h-full flex flex-col gap-5 items-center p-10 ml-5 mr-5 overflow-auto">
          <div class="w-full h-full flex-flex-col justify-evenly items-center gap-10">
            <div class="h-15p flex justify-between items-center gap-5">
              <h3 class="text-dark">Subjects</h3>
              <div class="flex items-center gap-5">
                <div class="flex items-center">
                  <h5 class="text-dark">Category:</h5>
                  <select name="category" id="usersCategory" class="border-none outline-none bg-transparent">
                    <option value="1">Common Entrance</option>
                    <option value="2">Junior WAEC</option>
                    <option value="3">Senior WAEC</option>
                  </select>
                </div>

                <button id="openBtn"
                  class="flex items-center gap-5 p-10 border-none outline-none bg-primary bg-hover text-white rounded-sm cursor-pointer transition-all"
                  style="--bgHoverColor:var(--infoColor)"><x-plus-icon />
                  Add Subject</button>
              </div>
            </div>
            {{-- viewing subjects and its data --}}
            <div class="w-full h-auto flex flex-col justify-center items-center text-dark bg-white rounded-sm shadow-md">
              <div class="w-full flex justify-end items-center gap-10 p-10">
                <div class="w-20 h-4 flex items-center justify-center gap-5 rounded-xs bg-inputGrey">
                  <label for="searchSubject" class="h-inherit flex items-center"><x-helper.search-icon /></label>
                  <input type="text" class="w-80p h-inherit border-none outline-none bg-transparent"
                    name="search_subject" id="searchSubject" aria-describedby="helpId" placeholder="Search" />
                </div>
                <div class="w-20 h-4 flex items-center justify-center gap-5">
                  <span id="filterTitle" class="">Filter</span>
                  <div class="flex items-center gap-5 p-10 rounded-xs shadow-sm cursor-pointer">
                    <select name="filter_subject" id="filterSubject" class="border-none outline-none appearance-none">
                      <option value="all" selected>all</option>
                      <option value="subject">Subject</option>
                      <option value="topic">Topic</option>
                    </select>
                    <label for="filterSubject" class="no-pointer-events z-1"><x-helper.filter-icon /></label>
                  </div>
                </div>
                <div class="w-auto h-4 flex items-center justify-center gap-5">
                  <label for="sortBy" class="">Sort by</label>
                  <select class="p-10 rounded-xs" name="sort_by" id="sortBy">
                    <option value="recent" selected>Most recent</option>
                    <option value="alphabetically">Alphabetically</option>
                    <option value="noOfQuestions">No. of Questions</option>
                  </select>
                </div>

              </div>
              <div class="w-full">
                <table id="fl-table" class="w-full whitespace-no border-none border-collapse">
                  <thead class="">
                    <tr class="h-4 text-dark">
                      <th>S/N</th>
                      <th>Subject</th>
                      <th>No. of Question</th>
                      <th>No. of Topics</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($subjects as $ii => $subject)
                      <tr class="even-el-bg" style="--elBg:rgba(191, 76, 32, 0.10);">
                        <td>{{ $ii }}</td>
                        <td>{{ $subject['subject'] }}</td>
                        <td>{{ count($subject['questions']) }}</td>
                        <td>{{ count($subject['topics']) }}</td>
                        <td class="p-20 text-right">
                          <a href="{{ route('test.result', 'f7f7f7309jd382fhc') }}"
                            class="p-10 bg-primary text-white rounded-sm">View</a>
                          <a href="{{ route('test.result', 'f7f7f7309jd382fhc') }}"
                            class="p-10 bg-light-wine text-wine rounded-sm">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{-- js for filter dropdown --}}
            </div>
          </div>
        </div>
      </div>
      {{-- add subject modal --}}
      <div
        class="fixed hidden z-1 left-0 top-0 w-full h-full justify-center items-center overflow-auto bg-semi-black transition-all PendingApprovalModal"
        id="customModal">
        <form
          class="relative w-half h-3-quarts flex flex-col items-center justify-evenly gap-5 bg-brand-white p-10 rounded-md modal-content animate-slideDown"
          method="post" action="">
          @csrf
          <span
            class="absolute w-3 h-3 flex justify-center items-center top-2 right-2 text-dark text-20 rounded-md border border-dark cursor-pointer text-hover-color"
            id="closeModal" style="--textColor:crimson;">&times;</span>
          <h1 class="text-dark sm-text-value" style="--textSmVal:13px;">
            Add a <span class="text-secondary">Subject</span></h1>
          <div class="w-full flex flex-col justify-center items-center gap-10">
            <input type="text" class="w-3-quarts h-4 pl-1 bg-primary-grad2 border-none outline-none rounded-sm"
              name="subject_name" id="subjectName" placeholder="Name of subject" />
            <select class="w-3-quarts h-4 pl-1 bg-primary-grad2 border-none outline-none rounded-sm"
              name="subject_category" id="subjectCategory">
              <option value="0">Category of subject</option>
              <option value="common entrance">common entrance</option>
              <option value="junior waec">junior waec</option>
              <option value="senior waec">senior waec</option>
            </select>
            <select class="w-3-quarts h-4 pl-1 bg-primary-grad2 border-none outline-none rounded-sm"
              name="subject_category" id="subjectCategory">
              <option value="0">Color of subject</option>
              <option value="yellow">yellow</option>
              <option value="purple">purple</option>
              <option value="crimson">crimson</option>
            </select>
          </div>
          <div class="w-3-quarts flex items-center justify-between gap-5">
            <button
              class="w-half p-10 border-none outline-none rounded-sm bg-primary-grad22 text-primary cursor-pointer"
              type="submit">Save and Close</button>
            <button class="w-half p-10 border-none outline-none rounded-sm bg-primary text-white cursor-pointer"
              type="submit">Add Question</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @vite(['resources/js/modal.js'])
</body>

</html>
