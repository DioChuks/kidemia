<div class="flex items-center gap-5 report-box">
  <div {{ $attributes->merge(['class' => 'rounded-full animate-pie transition-all']) }} style="--progress:{{ $progress }}">
    <div class="w-full h-full flex items-center justify-center mx-auto rounded-inherit {{$whitespaceBg }}">
      <div
        class="w-93p h-93p flex justify-center items-center m-auto {{$bgType }} text-white text-{{ $textSize }} rounded-inherit animate-fade-in">
        {{ $progress }}%
      </div>
    </div>
  </div>
</div>
