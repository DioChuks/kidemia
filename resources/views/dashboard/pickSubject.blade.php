@include('partials.header')

<body>
    <x-preloader />
    <div id="app">
        <div class="main-wrapper picker-wrap">
            <div class="pick-empty-box"></div>
            <div class="pick-container">
                <div class="pick-top-section">
                    <a href="#" class="btn btn-primary"><- Back</a>
                            <div class="pick-top-heading">
                                <div class="pick-top-img">
                                    <img src="{{ asset('images/logo2.png') }}" alt="img">
                                </div>
                                <div class="pick-top-body">
                                    <h3>Pick a subject you would love to write a test on</h3>
                                    <div class="sub-body">
                                        <img src="{{ asset('images/image 3.png') }}" alt="clock">
                                        <p>Time limit: 20mins</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary">Continue -></a>
                </div>
                <div class="pick-subjects">
                    <div class="subjects-wrapper">
                        <div class="subject-box">
                            <x-subject-card logo='image 4.png' title='Social Studies' topicAmount=14 />
                            <x-subject-card logo='image 4.png' title='Social Studies' topicAmount=14 />
                            <x-subject-card logo='image 4.png' title='Social Studies' topicAmount=14 />
                        </div>
                        <div class="subject-box">
                            <x-subject-card logo='image 9.png' title='English Language' topicAmount=14 />
                            <x-subject-card logo='image 9.png' title='English Language' topicAmount=14 />
                            <x-subject-card logo='image 9.png' title='English Language' topicAmount=14 />
                        </div>
                        <div class="subject-box">
                            <x-subject-card logo='image 5.png' title='Mathematics' topicAmount=14 />
                            <x-subject-card logo='image 5.png' title='Mathematics' topicAmount=14 />
                            <x-subject-card logo='image 5.png' title='Mathematics' topicAmount=14 />
                        </div>
                        <div class="subject-box">
                            <x-subject-card logo='image 7.png' title='Mathematics' topicAmount=14 />
                            <x-subject-card logo='image 7.png' title='Mathematics' topicAmount=14 />
                            <x-subject-card logo='image 7.png' title='Mathematics' topicAmount=14 />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
