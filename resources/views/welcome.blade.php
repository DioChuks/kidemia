@include('partials.header')
<body>
    <x-preloader />
    <div id="app">
        <div class="top-section">
            <header class="header">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Kidemia">
                </div>
                <nav class="nav">
                    <ul>
                        <li class="nav-item"><a href="#">Pricing</a></li>
                        <li class="nav-item"><a href="#">Scheme</a></li>
                        <li class="nav-item"><a href="#">Dashboard</a></li>
                    </ul>
                    <ul>
                        <li class="nav-item"><a href="#"><img src="{{ asset('images/Ellipse 1.svg') }}" alt="User"></a></li>
                    </ul>
                </nav>
            </header>
            <div class="top-container">
                <div class="top-box">
                    <div class="top-heading">
                        <h1 class="top-title">Welcome {{ $name ?? 'to Kidemia' }}</h1>
                        <p class="top-subtitle">What would you like to do?</p>
                    </div>
                    <div class="top-buttons">
                        <button class="btn btn-primary">Take a test</button>
                        <button class="btn btn-primary">Take an exam</button>
                    </div>
                </div>
            </div>
            <main>
                <div class="performance-report">
                    <div class="report-heading">
                        <h1 class="report-title">Performance Report Summary</h1>
                    </div>
                    <div class="report-chart">
                        <div class="report-box">
                            <div class="piechart-progress" style="--progress:35">
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
                            <div class="piechart-progress" style="--progress:60">
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
                <div class="analysis-section">
                    <div class="analysis-box">
                        <div class="analysis-info">
                            <div class="analysis-img">
                                <img src="{{ asset('images/image 2.png') }}" alt="img">
                            </div>
                            <h4 class="analysis-title">No. of tests attempted</h4>
                        </div>
                        <span class="analysis-score">70</span>
                    </div>
                    <div class="analysis-box">
                        <div class="analysis-info">
                            <div class="analysis-img">
                                <img src="{{ asset('images/image 1.png') }}" alt="img">
                            </div>
                            <h4 class="analysis-title">Correct Test Questions Answered</h4>
                        </div>
                        <span class="analysis-score"><span class="answer-success">30</span>/70</span>
                    </div>
                    <div class="analysis-box">
                        <div class="analysis-info">
                            <div class="analysis-img">
                                <img src="{{ asset('images/image 2.png') }}" alt="img">
                            </div>
                            <h4 class="analysis-title">No. of Exams Attempted</h4>
                        </div>
                        <span class="analysis-score">70</span>
                    </div>
                    <div class="analysis-box">
                        <div class="analysis-info">
                            <div class="analysis-img">
                                <img src="{{ asset('images/image 1.png') }}" alt="img">
                            </div>
                            <h4 class="analysis-title">Correct Exam Questions Answered</h4>
                        </div>
                        <span class="analysis-score"><span class="answer-success">30</span>/70</span>
                    </div>
                    <div class="analysis-box">
                        <div class="analysis-info">
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
                <div class="chart-container">
                    <div class="chart-box">
                        <div class="chart heading">
                            <h1 class="chart-title">Recent Test Performance</h1>
                        </div>
                        <x-bar-chart :bars="['30', '15', '5', '60', '90']" />
                    </div>
                    <div class="chart-box">
                        <div class="chart heading">
                            <h1 class="chart-title">Recent Exam Performance</h1>
                        </div>
                        <x-bar-chart :bars="['30', '45', '35', '55', '50']" />
                    </div>
                </div>
                <div class="chart-container-info">
                    <div class="subjects-topics">
                        <div class="block-head">
                            <ul>
                                <li>Topics</li>
                                <li>Subjects</li>
                            </ul>
                        </div>
                        <div class="block-info">
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