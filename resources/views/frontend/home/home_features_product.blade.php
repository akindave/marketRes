@php
$featured = App\Models\Product::where('featured',1)->orderBy('id','DESC')->limit(6)->get();
@endphp
<div class="px-8 sm:px-12 py-8">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-xl font-bold text-neutral-800">Featured Products</h2>
      <div class="flex gap-2 items-center">
        <a class="text-blue-800" href="#"
          >View <span class="hidden sm:inline-block">More</span>
        </a>
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
    </div>
    <div
      class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4"
    >
    {{--  first banner start  --}}
      <div class="relative hidden md:block">
        <div
          class="bg-neutral-200 p-4 h-full rounded-lg flex justify-between items-center"
        >
          <img
            src="{{asset('frontend2/assets/images/canvasgif.gif') }}"
            class="object-contain max-w-full max-h-full rounded-lg"
            alt=""
          />
        </div>
      </div>
      {{--  first banner end  --}}

      {{--  start of featured product  --}}
      @foreach($featured as $product)
      <div
        class="relative group transform transition-transform scale-100 hover:scale-95 duration-500"
      >
      @php
        $amount = $product->discount_price ? $product->selling_price - $product->discount_price : 100 ;
        $discount = ($amount/$product->selling_price) * 100;
  
      @endphp
      @if($product->discount_price == NULL)
      <div
        class="absolute z-10 left-0 top-2 w-16 h-6 text-sm text-white bg-blue-800 flex items-center justify-center"
      >

        0%
      </div>
    @else
        <div
            class="absolute z-10 left-0 top-2 w-16 h-6 text-sm text-white bg-blue-800 flex items-center justify-center"
        >
        {{ round($discount) }} %
        </div>
    @endif
        <div
          class="absolute inset-0 hidden group-hover:sm:flex z-10 h-10 w-full gap-4 items-center justify-center top-24 bg-neutral-50"
        >
          <i class="cursor-pointer fa-solid fa-rotate"></i>
          <i class="cursor-pointer fa-regular fa-heart"></i>
          <i
            class="modal-trigger cursor-pointer fa-regular fa-eye"
            data-modal-target="modal-1"
          ></i>
        </div>
        <a href="#">
          <div
            class="bg-white p-4 h-32 sm:h-60 rounded-lg shadow-md flex justify-between items-center"
          >
            <img
              src="{{asset('frontend2/assets/images/shoe.jpg') }}"
              class="object-cover h-full w-full rounded-lg"
              alt=""
            />
          </div>
        </a>
        <button
          class="inset-0 hidden group-hover:sm:block absolute text-neutral-100 z-10 left-0 right-0 top-48 h-12 bg-blue-800 rounded-b-lg text-center"
        >
          <i class="mr-2 fa-solid fa-cart-plus"></i>
          Add to Cart
        </button>
        <div
          class="flex justify-between sm:gap-2 items-center py-2 flex-wrap"
        >
          <div>
                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug) }}">
                <div
                  class="font-bold text-sm sm:text-md line-clamp-1 text-neutral-800"
                >
                {{ $product->product_name }}
                </div>
                </a>
                <div class="text-sm hidden sm:block text-neutral-600">
                    {{ $product['category']['category_name'] }}
                </div>
                @if($product->vendor_id == NULL)
                <div class="text-sm hidden sm:block text-neutral-600">
                    {{ $product['category']['category_name'] }}
                </div>
                @else
                <div class="text-sm hidden sm:block text-neutral-600">
                   By:  {{ $product->vendor_id }}
                </div>
                @endif
          </div>
          
          @if($product->discount_price == NULL)
          <div>
            <div class="font-bold">NGN{{ $product->selling_price }}</div>
          </div>
          @else
          <div>
            <div class="font-bold">NGN{{ $product->selling_price }}</div>
            <div class="text-xs text-neutral-400 line-through">NGN{{$product->discount_price}}</div>
          </div>
          @endif
        </div>
      </div>
      @endforeach
    </div>
  </div>