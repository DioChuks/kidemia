<div {{ $attributes->merge(['class' => 'w-25 h-15 flex justify-evenly rounded-sm transition-all info-card']) }}>
    <div class="flex items-center gap-5">
        <span class="{{$type }}"><x-dynamic-component :component="$iconName" /></span>
        <div class="flex flex-col items-center gap-5">
            <h6 class="text-dark font-sm">{{ $title }}</h6>
            <h1>{{ $amount }}</h1>
        </div>
    </div>
</div>