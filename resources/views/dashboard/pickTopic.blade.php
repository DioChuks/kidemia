@include('partials.header')

<body>
    <x-preloader />
    <div id="app">
        <div class="main-wrapper picker-wrap">
            <div class="pick-empty-box"></div>
            <form class="pick-container" method="POST">
                @csrf
                <div class="pick-top-section">
                    <a href="{{ route('pick.subject') }}" class="btn btn-primary"><- Back</a>
                            <div class="pick-top-heading">
                                <div class="pick-top-img">
                                    <img src="{{ asset('images/logo2.png') }}" alt="img">
                                </div>
                                <div class="pick-top-body">
                                    <h3>Select up to 5 topics you want to write on</h3>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Continue -></button>
                </div>
                <div class="pick-subjects">
                    <div class="topics-wrapper">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
