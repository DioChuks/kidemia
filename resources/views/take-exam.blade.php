@include('partials.header')

<body>
    <x-preloader />
    <div id="app" class="hidden">
        <x-assessment-selector title='Ready for an exam? 😃' subtitle='The exam comprises of 40 questions to be answered in 30 mins' img='logo-pro.png' :$type class='h-10'/>
    </div>
</body>

</html>
