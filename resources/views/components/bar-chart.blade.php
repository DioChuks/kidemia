<div class="chart-info-box">
    <select name="recent" id="">
        <option value="5">Last 5</option>
        <option value="next">upper 5</option>
    </select>
    <div class="simple-bar-chart">
        @foreach ($bars as $index => $barValue)
            <div class="item" style="--clr: {{ $getColorBasedOnValue($barValue) }}; --val: {{ $barValue }}">
                <div class="label">{{ $index + 1 }}</div>
                <div class="value">{{ $barValue }}%</div>
            </div>
        @endforeach
    </div>
</div>