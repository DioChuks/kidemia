@include('partials.header')

<body>
    <x-preloader />
    <div id="app" class="hidden">
        <div class="w-full h-auto flex flex-col main-wrapper picker-wrap">
            <div class="w-full pick-empty-box"></div>
            <form action="{{ route('get.ready') }}" class="h-max-screen flex flex-col pick-container" method="GET" id="topic-form">
                @csrf
                <div class="flex justify-between pick-top-section">
                    <a href="{{ route('pick.subject') }}" class="btn btn-primary"><- Back</a>
                            <div class="flex flex-col items-center pick-top-heading">
                                <div class="pick-top-img">
                                    <img src="{{ asset('images/logo2.png') }}" alt="img"
                                        class="w-inherit h-inherit" />
                                </div>
                                <div class="text-center pick-top-body">
                                    <h3>Select up to 5 topics you want to write on</h3>
                                </div>
                            </div>
                            <button type="submit" id="open-load" class="btn btn-primary">Continue -></button>
                </div>
                <div class="inline-flex flex-col w-full h-auto">
                    <div class="flex justify-between flex-wrap topics-wrapper">
                        @for ($i = 1; $i <= 30; $i++)
                            <div class="flex items-center topic-box">
                                <input type="checkbox" class="cursor-pointer topic-checkbox"
                                    name="topic-{{ $i }}" id="form-label-{{ $i }}"
                                    aria-describedby="topic" value="{{ $i }}" />
                                @if ($i <= 4)
                                    <label for="form-label-{{ $i }}" class="cursor-pointer">Equations</label>
                                @elseif ($i <= 8)
                                    <label for="form-label-{{ $i }}" class="cursor-pointer">Growth
                                        Metric</label>
                                @else
                                    <label for="form-label-{{ $i }}" class="cursor-pointer">Water
                                        Cycle</label>
                                @endif
                            </div>
                        @endfor
                    </div>
                </div>
                <div id="validationMsg" class="w-full text-center mt-4"></div>
            </form>
            <x-loading />
        </div>
    </div>
</body>

</html>
