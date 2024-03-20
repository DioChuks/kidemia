@include('partials.header')

<body class="bg-brand-white">
 <x-preloader />
 <div id="app" class="hidden">
  <div class="h-max-screen top-section">
   <header class="h-10p flex justify-between items-center bg-dark header">
    <div class="logo">
     <img src="{{ asset('images/KIDEMIA LOGO pro 2.png') }}" alt="Kidemia" class="w-inherit h-inherit" />
    </div>
    {{-- medium to large screen --}}
    <nav class="flex items-center nav sm-d-none">
     <ul class="flex items-center">
      <li class="nav-item"><a href="#">Pricing</a></li>
      <li class="nav-item"><a href="#">Scheme</a></li>
      <li class="nav-item"><a href="#">Dashboard</a></li>
      <li class="nav-item"><a href="#"><x-bell-icon/></a></li>
     <ul>
      <li class="nav-item"><a href="#"><img src="{{ asset('images/Ellipse 1.svg') }}" alt="User-icon" /></a></li>
     </ul>
    </nav>
    {{-- small screen --}}
    <nav class="relative hidden md-d-none z-10" id="mobile-menu">
      <ul class="absolute top-2 right-2 left-2 w-20 h-30 border flex flex-col justify-around items-center bg-brand-white rounded-sm">
       <li class="nav-item"><a href="#">Pricing</a></li>
       <li class="nav-item"><a href="#">Scheme</a></li>
       <li class="nav-item"><a href="#">Dashboard</a></li>
       <a href="#" class="flex items-center gap-1 text-dark"><x-bell-icon/> Notifications</a>
       <li class="nav-item"><a href="#" class="w-5 h-4 flex items-center gap-1"><img src="{{ asset('images/Ellipse 1.svg') }}" alt="User-icon" class="w-2 h-2" /> Account</a></li>
      </ul>
     </nav>
     <x-menu-icon />
   </header>
   <div class="h-90p flex justify-center items-center flex-col gap-10">
    <div class="flex flex-col text-center gap-10">
     <div class="top-heading">
      <h1 class="whitespace-no overflow-hidden text-40 text-white animate-typing">Welcome {{ $name ?? 'to Kidemia' }}</h1>
      <p class="whitespace-no overflow-hidden text-20 text-white animate-typing">What would you like to do?</p>
     </div>
     <div class="w-full flex justify-center gap-10">
      <a href="{{ route('take.test') }}" class="btn btn-primary sm-btn">Take a test</a>
      <button class="btn btn-primary sm-btn">Take an exam</button>
     </div>
    </div>
   </div>
   <main class="h-auto flex flex-col justify-center items-center bg-brand-white">
    <div class="w-full h-max-screen flex flex-col justify-around items-center p-20 gap-10 performance-report">
     <div class="report-heading">
      <h1 class="text-dark">Performance Report Summary</h1>
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
    <div class="w-full h-auto flex flex-wrap justify-around items-center text-dark bg-primary gap-10 pt-5 pb-5 analysis-section">
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
   <footer class="footer">
    <div class="flex chart-container">
     <div class="flex flex-col items-center w-half chart-box">
      <div class="chart heading">
       <h1 class="text-center chart-title">Recent Test Performance</h1>
      </div>
      <x-bar-chart :bars="['30', '15', '5', '60', '90']" />
     </div>
     <div class="flex flex-col items-center w-half chart-box">
      <div class="chart heading">
       <h1 class="text-center chart-title">Recent Exam Performance</h1>
      </div>
      <x-bar-chart :bars="['30', '45', '35', '55', '50']" />
     </div>
    </div>
    <div class="w-full chart-container-info">
     <div class="flex justify-between subjects-topics">
      <div class="flex flex-col justify-end h-full block-head">
       <ul class="flex flex-col">
        <li>Topics</li>
        <li>Subjects</li>
       </ul>
      </div>
      <div class="flex h-inherit block-info">
       <div class="block-card">
        <h4 style="background-color: var(--primarySuccessColor)">Excelling in</h4>
        <ul>
         <li class="topics">Quadratic equations, Reproductive System, Covalent bonds, Motion,</li>
         <li class="subjects">Physics, Further maths, Technical Drawing</li>
        </ul>
       </div>
       <div class="block-card">
        <h4 style="background-color: var(--primaryBlueColor)">Good</h4>
        <ul>
         <li class="topics">Quadratic equations, Reproductive System, Covalent bonds, Motion,</li>
         <li class="subjects">Physics, Further maths, Technical Drawing</li>
        </ul>
       </div>
       <div class="block-card">
        <h4 style="background-color: var(--primary-color)">Average</h4>
        <ul>
         <li class="topics">Quadratic equations, Reproductive System, Covalent bonds, Motion,</li>
         <li class="subjects">Physics, Further maths, Technical Drawing</li>
        </ul>
       </div>
       <div class="block-card">
        <h4 style="background-color: var(--primaryWineColor)">Poor</h4>
        <ul>
         <li class="topics">Quadratic equations, Reproductive System, Covalent bonds, Motion,</li>
         <li class="subjects">Physics, Further maths, Technical Drawing</li>
        </ul>
       </div>
      </div>
     </div>
    </div>
    <div class="dashboard-btn-box">
     <button class="btn btn-primary">Dashboard</button>
    </div>
   </footer>
  </div>
</body>

</html>
