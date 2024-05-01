<div class="flex flex-col items-center gap-5 report-box">
 <div {{ $attributes->merge(['class' => "p-10 rounded-full bg-conic-pie animate-pie transition-all"]) }} style="--progress:{{$progress }}">
  <div class="w-full h-full flex items-center justify-center mx-auto rounded-inherit bg-brand-white">
   <div
    class="w-93p h-93p flex justify-center items-center m-auto bg-secondary text-white text-28 rounded-inherit animate-fade-in">
    {{$progress }}%
   </div>
  </div>
 </div>
 <div class="report-body">
  <h4 class="text-dark">You got <span id="markedAsTrue">{{$answered }}</span></h4>
 </div>
</div>
