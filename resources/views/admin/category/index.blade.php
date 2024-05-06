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
            <h3>Subjects </h3><span>...</span>
          </a>
        </div>
        <div class="w-85p h-full flex flex-col gap-5 items-center p-10 ml-5 mr-5 overflow-auto">
          <div class="w-full h-full flex-flex-col justify-evenly items-center gap-10">
            <div class="h-15p flex justify-between items-center gap-5">
              <div class="flex items-center gap-5"><a href="{{ route('admin.subjects') }}"
                  class="w-2 h-2 flex items-center justify-center rounded-full text-dark border cursor-pointer">
                  <x-left-arrow-icon />
                </a>
                <h3 class="text-dark">{{ $subject }}</h3>
              </div>
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
                  style="--bgHoverColor:#555"><x-plus-icon />
                  Add Category</button>
              </div>
            </div>
            {{-- viewing subject and its data --}}
            <div
              class="w-full h-auto flex flex-col justify-center items-center text-dark bg-white rounded-sm shadow-md">
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
                      <option value="name">name</option>
                    </select>
                    <label for="filterSubject" class="no-pointer-events z-1"><x-helper.filter-icon /></label>
                  </div>
                </div>
                <div class="w-auto h-4 flex items-center justify-center gap-5">
                  <label for="sortBy" class="">Sort by</label>
                  <select class="p-10 rounded-xs" name="sort_by" id="sortBy">
                    <option value="recent" selected>First Letter</option>
                    <option value="alphabetically">Alphabetically</option>
                  </select>
                </div>

              </div>
              <div class="w-full">
                <table id="fl-table" class="w-full whitespace-no border-none border-collapse">
                  <thead class="">
                    <tr class="h-4 text-dark">
                      <th>S/N</th>
                      <th>Category</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($subject_data['topics'] as $ii => $topic)
                      <tr class="even-el-bg" style="--elBg:rgba(191, 76, 32, 0.10);">
                        <td>{{ intVal($ii) + 1 }}</td>
                        <td>{{ $topic['name'] }}</td>
                        <td class="p-20 text-right">
                          <a href="{{ route('admin.delete.topic', [$subject, $topic['id']]) }}"
                            class="p-10 bg-light-wine text-wine rounded-sm">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- add category modal --}}
      <div
        class="fixed hidden z-1 left-0 top-0 w-full h-full justify-center items-center overflow-auto bg-semi-black transition-all addCategoryModal"
        id="customModal">
        <form
          class="relative w-half h-3-quarts flex flex-col items-center justify-evenly gap-5 bg-brand-white p-10 rounded-md modal-content animate-slideDown"
          method="post" action="{{ route('admin.create.category') }}">
          @csrf
          <span
            class="absolute w-3 h-3 flex justify-center items-center top-2 right-2 text-dark text-20 rounded-md border border-dark cursor-pointer text-hover-color"
            id="closeModal" style="--textColor:crimson;">&times;</span>
          <h1 class="text-dark sm-text-value" style="--textSmVal:13px;">
            Add a <span class="text-secondary">Category</span></h1>
          <div class="w-full flex flex-col justify-center items-center gap-10">
            <input type="text" class="w-3-quarts h-4 pl-1 bg-primary-grad2 border-none outline-none rounded-sm"
              name="subject_name" id="subjectName" placeholder="Name of subject" />
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
