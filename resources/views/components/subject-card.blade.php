<label {{ $attributes->merge(['class' => 'relative w-25 h-20 flex flex-col justify-between items-center rounded-lg transition-all subject-card']) }}"
 for="selected-{{ $id }}">
 <div class="img">
  <img src="{{ asset('images/' . $logo) }}" alt="sub-img" class="w-inherit h-inherit" />
 </div>
 <h2 class="subject-title">{{ $title }}</h2>
 <p class="subject-topics">{{ $topicAmount }} Topics</p>
</label>
<input type="radio" name="subject" id="selected-{{ $id }}" class="hidden subject-id"
 value="{{ $id }}" />
