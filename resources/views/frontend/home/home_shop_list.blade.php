@php
    $vendors = App\Models\User::where('status','active')->where('role','vendor')->orderBy('id','DESC')->limit(7)->get();
@endphp
<div class="px-8 sm:px-12 py-8 showcase overflow-hidden">
    <div
      class="showcase-wrapper custom-scroll rounded-lg flex gap-5 bg-neutral-100 p-4 sm:p-8 flex-nowrap overflow-x-auto"
    >
    @foreach($vendors as $vendor)
      <div
        class="showcase-item relative min-w-[90%] sm:min-w-[40%] p-2 h-56 bg-white flex justify-between items-center rounded-lg"
      >
        <img
          src="assets/images/salebanner.gif"
          class="object-cover h-full w-full rounded-lg"
          alt=""
        />
        <a href="{{ route('vendor.details',$vendor->id) }}">
        <button
          class="p-2 rounded-lg bg-neutral-800 text-neutral-100 font-medium absolute left-5 bottom-5"
        >
          Shop Now <i class="ml-2 fa-solid fa-arrow-right-long"></i>
        </button>
        </a>
      </div>
    @endforeach
    </div>
  </div>