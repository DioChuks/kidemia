<div id="{{$modalId }}" class="fixed hidden z-10 w-max-screen h-max-screen justify-center items-center bg-semi-black p-10">
    <div class="w-half h-half flex flex-col justify-between items-center gap-10 p-20 text-dark bg-brand-white rounded-md z-99 animate__animated animate__zoomInUp">
        <div class="w-20 h-10 flex justify-center">
            <img src="{{ asset('images/'.$img) }}" alt="second-img" {{ $attributes->merge(['class' => 'object-cover']) }} />
        </div>
        <div class="w-full text-center test-body">
            <h1 class="mb-1">{{ $title }}</h1>
            <p class="font-md">{{ $subtitle }}</p>
        </div>
        <div class="flex gap-10">
            <button class="btn btn-secondary sm-btn" id="close-{{$type }}">cancel</button>
            <a href="{{ route('pick.subject', $type) }}" class="btn btn-primary sm-btn">continue</a>
        </div>
    </div>
</div>
