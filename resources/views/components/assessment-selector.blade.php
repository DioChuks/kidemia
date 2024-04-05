<div class="w-full h-max-screen flex justify-center items-center bg-brand-white main-wrapper">
    <div class="flex flex-col justify-between items-center test-box">
        <div class="w-20 h-10 flex justify-center">
            <img src="{{ asset('images/'.$img) }}" alt="second-img" {{ $attributes->merge(['class' => 'object-cover']) }} />
        </div>
        <div class="w-full text-center test-body">
            <h1 class="test-title">{{ $title }}</h1>
            <p class="test-subtitle">{{ $subtitle }}</p>
        </div>
        <div class="flex test-btn">
            <a href="/" class="btn btn-secondary sm-btn">cancel</a>
            <a href="{{ route('pick.subject', $type) }}" class="btn btn-primary sm-btn">continue</a>
        </div>
    </div>
</div>
