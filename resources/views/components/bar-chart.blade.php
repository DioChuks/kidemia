<div {{$attributes->merge(['class' => "flex flex-col items-end w-full text-dark chart-info-box"])}}>
    @if (empty($titleId))
        <select name="recent" id="{{$titleId }}">
            <option value="5">Last 5</option>
            <option value="next">upper 5</option>
        </select>
    @else
        
    @endif
    <div class="relative w-full simple-bar-chart">
        @foreach ($bars as $index => $barValue)
            <div class="item" style="--clr: {{ $getColorBasedOnValue($barValue) }}; --val: {{ $barValue }}">
                <div class="label">{{ $index + 1 }}</div>
                <div class="value">{{ $barValue }}%</div>
            </div>
        @endforeach
    </div>
</div>