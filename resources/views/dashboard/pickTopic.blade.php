@include('partials.header')

<body class="bg-brand-white">
  <x-preloader />
  <div id="app" class="hidden">
    <div class="w-full h-auto flex flex-col main-wrapper picker-wrap bg-brand-white">
      <div class="w-full h-5 bg-secondary"></div>
      <form action="#" class="flex flex-col pick-container" method="POST" id="topic-form">
        @csrf
        <div class="flex justify-between gap-10 p-20 pick-top-section">
          <a href="{{ route('pick.subject', $type) }}" class="btn btn-primary sm-btn"><x-left-arrow-icon /> Back</a>
          <button type="submit" id="open-load" class="btn btn-primary sm-btn">Continue <x-right-arrow-icon /></button>
        </div>
        <div class="flex flex-col items-center gap-5 pick-top-heading">
          <div class="w-6 h-6">
            <img src="{{ asset('images/logo2.png') }}" alt="img" class="w-inherit h-inherit" />
          </div>
          <div class="text-center pick-top-body">
            <h3>Select up to 5 topics you want to write on</h3>
          </div>
        </div>
        <div class="inline-flex flex-col w-full h-auto">
          <input type="text" name="subject" value="{{ $subject }}" hidden />
          <input type="text" name="view" value="{{ $type }}" hidden />
          <div class="flex justify-evenly flex-wrap gap-10 m-10 sm-topics-gap">
            <div id="validationMsg" class="w-full text-center mt-4"></div>
            @foreach ($topics as $ii => $topic)
              <div class="w-auto h-4 flex items-center p-10 gap-2 bg-primary-10 rounded-sm transition-all topic-box"
                id="topicBox">
                <input type="checkbox" class="cursor-pointer topic-checkbox" name="topic-{{ $ii }}"
                  id="form-label-{{ $ii }}" aria-describedby="topic" value="{{ $ii }}" />
                <label for="form-label-{{ $ii }}" class="cursor-pointer">{{ $topic }}</label>
              </div>
            @endforeach
          </div>
        </div>
      </form>
      <x-loading />
    </div>
  </div>
  @vite(['resources/js/topic-boxes.js'])
</body>

</html>
