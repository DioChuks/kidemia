<label class="subject-card" for="selected-{{$id }}">
    <div class="img">
        <img src="{{asset('images/'.$logo) }}" alt="sub-img" class="w-inherit h-inherit"/>
    </div>
    <h2 class="subject-title">{{ $title }}</h2>
    <p class="subject-topics">{{ $topicAmount }} Topics</p>
</label>
<input type="radio" name="subject" id="selected-{{ $id }}" class="hidden subject-id" value="{{$id}}"/>