@include('partials.header')

<body class="bg-brand-white">
 <x-preloader />
 <div id="app" class="hidden">
  <div class="w-full h-auto flex flex-col main-wrapper picker-wrap bg-brand-white">
   <div class="w-full h-5 bg-secondary"></div>
   <form action="{{ route('get.ready') }}" class="flex flex-col pick-container" method="" id="topic-form">
    @csrf
    <div class="flex justify-between gap-10 p-20 pick-top-section">
     <a href="{{ route('pick.subject') }}" class="btn btn-primary sm-btn"><- Back</a>
       <div class="flex flex-col items-center gap-5 pick-top-heading">
        <div class="w-6 h-6">
         <img src="{{ asset('images/logo2.png') }}" alt="img" class="w-inherit h-inherit" />
        </div>
        <div class="text-center pick-top-body">
         <h3>Select up to 5 topics you want to write on</h3>
        </div>
       </div>
       <button type="submit" id="open-load" class="btn btn-primary sm-btn">Continue -></button>
    </div>
    <div class="inline-flex flex-col w-full h-auto">
     <div class="flex justify-evenly flex-wrap gap-10 m-10 sm-topics-gap">
      <div id="validationMsg" class="w-full text-center mt-4"></div>
      @for ($i = 1; $i <= 30; $i++)
       <div class="w-10 h-4 flex items-center p-10 gap-2 bg-primary-10 rounded-sm transition-all topic-box" id="topicBox">
        <input type="checkbox" class="cursor-pointer topic-checkbox" name="topic-{{ $i }}"
         id="form-label-{{ $i }}" aria-describedby="topic" value="{{ $i }}" />
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
   </form>
   <x-loading />
  </div>
 </div>
</body>

</html>
