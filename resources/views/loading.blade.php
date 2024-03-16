@include('partials.header')

<body>
    <x-preloader />
    <div id="app">
        <div class="w-full h-max-screen flex justify-center items-center z-99 main-wrapper">
            <div class="loader-box">
                <img src="{{asset('images/logo2.png') }}" alt="loading...">
            </div>
        </div>
    </div>
</body>

</html>
