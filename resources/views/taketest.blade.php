@include('partials.header')

<body>
    <x-preloader />
    <div id="app" class="hidden">
        <x-assessment-selector title='Test Yourself' subtitle='The test comprises of 20 questions to be answered in 20 mins' img='logo2.png' :$type class="w-8 h-8"/>
    </div>
</body>

</html>
