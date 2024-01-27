@php

$slider = App\Models\Slider::orderBy('slider_title','ASC')->get();
@endphp
    <div class="overflow-hidden">
      <div
        class="slideshow-container w-screen h-[70vh] relative overflow-hidden"
      >
      @foreach($slider as $item)
        <div class="slides fade w-full h-full bg-slate-400">
          <img
            src="{{ asset($item->slider_image ) }}"
            class="w-full h-full object-cover"
            alt=""
          />
        </div>
        @endforeach
        {{--  <div class="slides fade w-full h-full bg-slate-400">
          <img
            src="assets/images/banner2.jpg"
            class="w-full h-full object-cover"
            alt=""
          />
        </div>  --}}
        {{--  <div class="slides fade w-full h-full bg-slate-400">
          <img
            src="assets/images/Banner3.jpg"
            class="w-full h-full object-cover"
            alt=""
          />
        </div>  --}}
        <div
          class="flex w-full justify-center gap-2 items-center py-2 absolute bottom-0"
        >
          <div
            class="indicator bg-neutral-400 h-3 w-3 rounded-full hover:bg-neutral-500"
          ></div>
          <div
            class="indicator bg-neutral-400 h-3 w-3 rounded-full hover:bg-neutral-500"
          ></div>
          <div
            class="indicator bg-neutral-400 h-3 w-3 rounded-full hover:bg-neutral-500"
          ></div>
        </div>
      </div>
    </div>