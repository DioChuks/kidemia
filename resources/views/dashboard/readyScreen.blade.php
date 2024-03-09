@include('partials.header')

<body>
    <x-preloader />
    <div id="app">
        <div class="ready-wrapper">
            <div class="abs-btn-box">
                <a href="#" class="btn btn-primary"><- Back</a>
            </div>
            <div class="ready-info">
                <div class="ready-info-box">
                    <div class="ready-info-left">
                        <img src="{{ asset('images/KIDEMIA LOGO CC 4 -2.png') }}" alt="logo alt">
                        <div class="ready-info-left-title">
                            <span>“What we learn with pleasure, we never forget.”
                            </span>
                            <h3>Alfred Mercier</h3>
                        </div>
                    </div>
                </div>
                <div class="ready-info-right-box">
                    <div class="ready-info-right">
                        <div class="ready-subject-info">
                            <h3 class="ready-subject-title">You are writing Social Studies</h3>
                            <div class="subject-instruction">
                                <p>The test has 20 questions to be answered in 20 minutes, it will cover the following
                                    topics:</p>
                                <ul>
                                    <li>Family</li>
                                    <li>Racism</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ready-instructions">
                            <h1 class="ready-instructions-title">Read All Instructions Before You Start</h1>
                            <div class="subject-instruction">
                                <ul>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li>Do not leave this screen else the test would end</li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <div class="ready-instruction-btn">
                            <div class="ready-info-btn">
                                <p>If you are ready click on the button to begin</p>
                                <a href="#" class="btn btn-primary">Start</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
