@include('partials.header')

<body class="bg-brand-white">
  <x-preloader />
  <div id="app" class="hidden overflow-x-hidden">
    {{-- assessment modal --}}
    <x-assessment-selector modal-id='testModalBox' title='Test Yourself'
      subtitle='The test comprises of 20 questions to be answered in 20 mins' img='logo2.png' type='test'
      class="w-8 h-8" />
    <x-assessment-selector modal-id='examModalBox' title='Ready for an exam? 😃' subtitle='The exam comprises of 40 questions to be answered in 30 mins' img='logo-pro.png' type='exam' class='h-10'/>
    {{-- end assessment box --}}
    <div class="w-max-screen h-max-screen top-section">
      <header class="h-10p flex justify-between items-center bg-dark header">
        <div class="logo">
          <img src="{{ asset('images/KIDEMIA LOGO pro 2.png') }}" alt="Kidemia" class="w-inherit h-inherit" />
        </div>
        {{-- medium to large screen --}}
        <nav class="flex items-center nav sm-d-none">
          <ul class="flex items-center">
            <li class="nav-item"><a href="#">Pricing</a></li>
            <li class="nav-item"><a href="#">Scheme</a></li>
            <li class="nav-item"><a href="{{ route('show.user-dashboard') }}">Dashboard</a></li>
            <li class="nav-item"><a href="#"><x-bell-icon /></a></li>
            <ul>
              <li class="nav-item"><a href="{{ route('show.user-profile') }}"><img
                    src="{{ asset('images/Ellipse 1.svg') }}" alt="User-icon" /></a></li>
            </ul>
        </nav>
        {{-- small screen --}}
        <nav class="relative hidden md-d-none z-10" id="mobile-menu">
          <ul
            class="absolute top-2 right-2 left-2 w-20 h-30 border flex flex-col justify-around items-center bg-brand-white rounded-sm">
            <li class="nav-item"><a href="#">Pricing</a></li>
            <li class="nav-item"><a href="#">Scheme</a></li>
            <li class="nav-item"><a href="#">Dashboard</a></li>
            <a href="#" class="flex items-center gap-1 text-dark"><x-bell-icon /> Notifications</a>
            <li class="nav-item"><a href="{{ route('show.user-profile') }}" class="w-5 h-4 flex items-center gap-1"><img
                  src="{{ asset('images/Ellipse 1.svg') }}" alt="User-icon" class="w-2 h-2" /> Account</a></li>
          </ul>
        </nav>
        <x-menu-icon />
      </header>
      <div class="h-90p flex justify-center items-center flex-col gap-10">
        <div class="flex flex-col text-center gap-10">
          <div class="top-heading">
            <h1 class="whitespace-no overflow-hidden text-40 sm-text-value text-white animate-typing"
              style="--textSmVal:2rem">Welcome {{ $name ?? 'to Kidemia' }}
            </h1>
            <p class="whitespace-no overflow-hidden text-20 text-white animate-typing">What would you like to do?</p>
          </div>
          <div class="w-full flex justify-center gap-10">
            <button class="btn btn-primary animate-scale-out sm-btn" id="testModalBtn">Take a test</button>
            <button class="btn btn-primary animate-scale-out sm-btn" id="examModalBtn">Take an exam</button>
          </div>
        </div>
      </div>
      <main class="h-auto flex flex-col justify-center items-center bg-brand-white">
        <div class="w-full h-auto flex flex-col justify-around items-center p-20 gap-10 performance-report">
          <div class="report-heading">
            <h1 class="text-dark">Performance Report Summary</h1>
            <hr>
          </div>
          <div class="h-90p flex sm-flex-col justify-around items-center w-half text-center report-chart">
            <div class="flex flex-col items-center report-box">
              <div class="flex rounded-full piechart-progress" style="--progress:35">
                <div class="whitespace">
                  <div class="progress-number">35%
                  </div>
                </div>
              </div>
              <div class="report-body">
                <h4>Test Performance</h4>
                <a href="#">view history</a>
              </div>
            </div>
            <div class="report-box">
              <div class="flex rounded-full piechart-progress" style="--progress:60">
                <div class="whitespace">
                  <div class="progress-number">60%</div>
                </div>
              </div>
              <div class="report-body">
                <h4>Exam Performance</h4>
                <a href="#">view history</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="w-max-screen h-auto flex flex-wrap justify-around items-center text-dark bg-primary gap-10 p-20 content-center mb-5">
          <div class="flex flex-col justify-evenly items-center analysis-box">
            <div class="flex flex-col justify-center items-center text-center analysis-info">
              <div class="analysis-img">
                <img src="{{ asset('images/image 2.png') }}" alt="img" />
              </div>
              <h4 class="analysis-title">No. of tests attempted</h4>
            </div>
            <span class="analysis-score">70</span>
          </div>
          <div class="flex flex-col justify-evenly items-center analysis-box">
            <div class="flex flex-col justify-center items-center text-center analysis-info">
              <div class="analysis-img">
                <img src="{{ asset('images/image 1.png') }}" alt="img">
              </div>
              <h4 class="analysis-title">Correct Test Questions Answered</h4>
            </div>
            <span class="analysis-score"><span class="answer-success">30</span>/70</span>
          </div>
          <div class="flex flex-col justify-evenly items-center analysis-box">
            <div class="flex flex-col justify-center items-center text-center analysis-info">
              <div class="analysis-img">
                <img src="{{ asset('images/image 2.png') }}" alt="img">
              </div>
              <h4 class="analysis-title">No. of Exams Attempted</h4>
            </div>
            <span class="analysis-score">70</span>
          </div>
          <div class="flex flex-col justify-evenly items-center analysis-box">
            <div class="flex flex-col justify-center items-center text-center analysis-info">
              <div class="analysis-img">
                <img src="{{ asset('images/image 1.png') }}" alt="img">
              </div>
              <h4 class="analysis-title">Correct Exam Questions Answered</h4>
            </div>
            <span class="analysis-score"><span class="answer-success">30</span>/70</span>
          </div>
          <div class="flex flex-col justify-evenly items-center analysis-box">
            <div class="flex flex-col justify-center items-center text-center analysis-info">
              <div class="analysis-img">
                <img src="{{ asset('images/image 3.png') }}" alt="img">
              </div>
              <h4 class="analysis-title">Average time spent per question</h4>
            </div>
            <span class="analysis-score"><span class="answer-success">1.00</span> min per question</span>
          </div>
        </div>
      </main>
      <footer class="w-max-screen p-10">
        <div class="flex sm-flex-col gap-5 chart-container">
          <div class="flex flex-col items-center w-half sm-w-value chart-box" style="--rWidthValue:100%">
            <div class="chart heading">
              <h1 class="text-center text-dark chart-title">Recent Test Performance</h1>
            </div>
            <x-bar-chart :bars="['30', '15', '5', '60', '90']" title-id="recent-test" />
          </div>
          <div class="flex flex-col items-center w-half sm-w-value chart-box" style="--rWidthValue:100%">
            <div class="chart heading">
              <h1 class="text-center text-dark chart-title">Recent Exam Performance</h1>
            </div>
            <x-bar-chart :bars="['30', '45', '35', '55', '50']" title-id="recent-exam" />
          </div>
        </div>
        <div id="assessment-history" class="w-max-screen mb-5">
          <h2 class="text-dark mb-2">Assessment History</h2>
          <div class="w-full flex flex-col items-center gap-5">
            <div id="Frame1000001375" class="flex gap-5">
              <button id="historySubject" class="btn btn-primary opacity-d5 sm-btn">Subjects</button>
              <button id="historyTopic" class="btn btn-primary sm-btn">Topics</button>
            </div>
            <div id="subjects-wrapper" class="hidden w-3-quarts overflow-x-auto">
              <table id="fl-table" class="w-full whitespace-no border-none border-collapse">
                <thead class="bg-primary">
                  <tr class="h-4 text-white">
                    <th class="font-xs">S/N</th>
                    <th class="font-xs text-left">Title</th>
                    <th class="font-xs">Average Score (%)</th>
                    <th class="font-xs">Status</th>
                    <th class="font-xs">Comment</th>
                    <th class="font-xs">Date Created</th>
                    <th class="font-xs">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @for ($i = 1; $i <= 10; $i++)
                    <tr class="border-bottom border-primary-light">
                      <td class="text-center p-10">{{ $i }}</td>
                      <td class="text-left p-10">Social Studies</td>
                      <td class="text-center p-10">100</td>
                      @if ($i <= 2)
                        <td class="text-center">
                          <li class="border border-primary text-primary rounded-sm text-12 bg-primary-10 p-val"
                            style="--p:10px">
                            Pending</li>
                        </td>
                      @else
                        <td class="text-center">---</td>
                      @endif
                      @if ($i <= 2)
                        <td class="text-center">---</td>
                      @else
                        <td class="w-15 text-center">
                          <li class="text-dark rounded-sm text-12 bg-lightSuccess p-val" style="--p:10px">Very Good
                          </li>
                        </td>
                      @endif
                      <td class="text-center">10/12/2024</td>
                      @if ($i <= 2)
                        <td class="text-center"><a href="#" class="text-primary">Write Test</a></td>
                      @else
                        <td class="text-center"><a href="{{ route('test.result', 'ee66e6e6e6deudh') }}" class="text-primary">View
                            Result</a></td>
                      @endif
                    </tr>
                  @endfor
                </tbody>
              </table>
              <div class="h-4 text-dark text-center">
                "pagination links here"
                {{-- {{ $assessment->links() }} --}}
              </div>
            </div>
            <div id="topics-wrapper" class="w-3-quarts overflow-x-auto">
              <table id="fl-table" class="w-full whitespace-no border-none border-collapse">
                <thead class="bg-primary">
                  <tr class="h-4 text-white">
                    <th class="font-xs">S/N</th>
                    <th class="font-xs text-left">Title</th>
                    <th class="font-xs">Average Score (%)</th>
                    <th class="font-xs">Status</th>
                    <th class="font-xs">Comment</th>
                    <th class="font-xs">Date Created</th>
                    <th class="font-xs">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @for ($i = 1; $i <= 10; $i++)
                    <tr class="border-bottom border-primary-light">
                      <td class="text-center p-10">{{ $i }}</td>
                      <td class="text-left p-10">English Language</td>
                      <td class="text-center p-10">80</td>
                      @if ($i <= 2)
                        <td class="text-center">
                          <li class="border border-primary text-primary rounded-sm text-12 bg-primary-10 p-val"
                            style="--p:10px">
                            Pending</li>
                        </td>
                      @else
                        <td class="text-center">---</td>
                      @endif
                      @if ($i <= 2)
                        <td class="text-center">---</td>
                      @else
                        <td class="w-15 text-center">
                          <li class="text-dark rounded-sm text-12 bg-lightSuccess p-val" style="--p:10px">Very Good
                          </li>
                        </td>
                      @endif
                      <td class="text-center">10/12/2024</td>
                      @if ($i <= 2)
                        <td class="text-center"><a href="#" class="text-primary">Write Test</a></td>
                      @else
                        <td class="text-center"><a href="{{ route('test.result', 'f7f7f7309jd382fhc') }}" class="text-primary">View
                            Result</a></td>
                      @endif
                    </tr>
                  @endfor
                </tbody>
              </table>
              <div class="h-4 text-dark text-center">
                "pagination links here"
                {{-- {{ $assessment->links() }} --}}
              </div>
            </div>
          </div>
        </div>
        <div class="dashboard-btn-box">
          <a href="{{ route('show.user-dashboard') }}" class="btn btn-primary sm-btn">Dashboard</a>
        </div>
      </footer>
    </div>
    
    <script>
      const testModalBox = document.getElementById('testModalBox');
      const examModalBox = document.getElementById('examModalBox');
      const testModalBtn = document.getElementById('testModalBtn');
      const examModalBtn = document.getElementById('examModalBtn');
      const closeTestModalBtn = document.getElementById('close-test');
      const closeExamModalBtn = document.getElementById('close-exam');
      function toggleTestModalDialog() {
        testModalBox.classList.toggle('hidden');
        testModalBox.classList.toggle('flex');
      }
      function toggleExamModalDialog() {
        examModalBox.classList.toggle('hidden');
        examModalBox.classList.toggle('flex');
      }
      testModalBtn.addEventListener('click', () => {
        console.log(testModalBox);
        toggleTestModalDialog();
      });
      closeTestModalBtn.addEventListener('click', () => {
        console.log('close clicked');
        toggleTestModalDialog();
      });
      examModalBtn.addEventListener('click', () => {
        console.log(testModalBox);
        toggleExamModalDialog();
      });
      closeExamModalBtn.addEventListener('click', () => {
        console.log('close clicked');
        toggleExamModalDialog();
      });
    </script>
    @vite(['resources/js/assessment-history.js'])
</body>

</html>
