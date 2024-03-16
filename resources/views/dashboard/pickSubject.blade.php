@include('partials.header')

<body>
    <x-preloader />
    <div id="app" class="hidden">
        <div class="w-full h-auto flex flex-col main-wrapper picker-wrap">
            <div class="w-full pick-empty-box"></div>
            <div class="h-auto pick-container">
                <div class="flex justify-between pick-top-section">
                    <a href="{{ route('take.test') }}" class="btn btn-primary"><- Back</a>
                            <div class="flex flex-col items-center pick-top-heading">
                                <div class="pick-top-img">
                                    <img src="{{ asset('images/logo2.png') }}" alt="img" class="w-inherit h-inherit"/>
                                </div>
                                <div class="text-center pick-top-body">
                                    <h3>Pick a subject you would love to write a test on</h3>
                                    <div class="flex justify-center items-center sub-body">
                                        <img src="{{ asset('images/image 3.png') }}" alt="clock">
                                        <p>Time limit: 20mins</p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('pick.topic') }}" class="btn btn-primary" id="send-subject">Continue -></a>
                </div>
                <div class="inline-flex w-full justify-center items-center pick-subjects">
                    <div class="flex subjects-wrapper">
                        <div class="subject-box">
                            <x-subject-card logo='image 4.png' title='Social Studies' topicAmount=14 id=1/>
                            <x-subject-card logo='image 4.png' title='Social Studies' topicAmount=14 id=2/>
                            <x-subject-card logo='image 4.png' title='Social Studies' topicAmount=14 id=3/>
                        </div>
                        <div class="subject-box">
                            <x-subject-card logo='image 9.png' title='English Language' topicAmount=14 id=4/>
                            <x-subject-card logo='image 9.png' title='English Language' topicAmount=14 id=5/>
                            <x-subject-card logo='image 9.png' title='English Language' topicAmount=14 id=6/>
                        </div>
                        <div class="subject-box">
                            <x-subject-card logo='image 5.png' title='Mathematics' topicAmount=14 id=7/>
                            <x-subject-card logo='image 5.png' title='Mathematics' topicAmount=14 id=8/>
                            <x-subject-card logo='image 5.png' title='Mathematics' topicAmount=14 id=9/>
                        </div>
                        <div class="subject-box">
                            <x-subject-card logo='image 7.png' title='Mathematics' topicAmount=14 id=10/>
                            <x-subject-card logo='image 7.png' title='Mathematics' topicAmount=14 id=11/>
                            <x-subject-card logo='image 7.png' title='Mathematics' topicAmount=14 id=12/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
