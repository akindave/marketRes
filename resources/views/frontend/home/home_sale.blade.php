<div
class="mx-8 sm:mx-12 sm:px-12 p-0 sm:py-8 bg-none sm:bg-neutral-100 rounded-lg"
>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
  <!-- Column 1 -->
  <div class="sm:px-4">
    <div
      class="font-bold h-10 sm:px-4 flex items-center justify-between"
    >
      <span class="text-lg">Hot Deals</span>
      <a href="#">
        <span class="text-md text-neutral-600"
          >More <i class="fa-solid fa-arrow-right-long"></i
        ></span>
      </a>
    </div>
    @foreach($hot_deals as $item)
    <a href="{{ url('product/details/'.$item->id.'/'.$item->product_slug) }}">
      <div
        class="sm:p-4 h-28 flex gap-5 items-center hover:bg-neutral-200 rounded-lg"
      >
        <div
          class="w-24 h-24 flex justify-center items-center bg-neutral-200 shadow-md rounded-lg"
        >
          <img
            src="{{ asset( $item->product_thambnail ) }}"
            alt=""
            class="object-cover w-full h-full rounded-lg"
          />
        </div>
        <div class="flex flex-col">
          <div class="font-medium line-clamp-1">{{ $item->product_name }}</div>
          <div class="text-neutral-400 text-sm line-clamp-1">
            2/10 items remaining
          </div>
          @if($item->discount_price == NULL)
          <div>
            
            <div class="text-xs text-neutral-400 line-through">
                NGN{{ $item->selling_price }}
            </div>
          </div>
          @else
          <div>
            <div class="font-bold">NGN {{ $item->selling_price }}</div>
            <div class="text-xs text-neutral-400 line-through">
                NGN{{ $item->discount_price }}
            </div>
          </div>

          @endif
        </div>
      </div>
    </a>
    @endforeach
   
  </div>
  <!-- Column 2 -->
  <div class="sm:px-4">
    <div
      class="font-bold h-10 sm:px-4 flex items-center justify-between"
    >
      <span class="text-lg">Special Offers</span>
      <a href="#">
        <span class="text-md text-neutral-600"
          >More <i class="fa-solid fa-arrow-right-long"></i
        ></span>
      </a>
    </div>

    @foreach($special_offer as $item)
    <a href="{{ url('product/details/'.$item->id.'/'.$item->product_slug) }}">
      <div
        class="sm:p-4 h-28 flex gap-5 items-center hover:bg-neutral-200 rounded-lg"
      >
        <div
          class="w-24 h-24 flex justify-center items-center bg-neutral-200 shadow-md rounded-lg"
        >
          <img
            src="{{ asset( $item->product_thambnail ) }}"
            alt=""
            class="object-cover w-full h-full rounded-lg"
          />
        </div>
        <div class="flex flex-col">
          <div class="font-medium line-clamp-1">{{ $item->product_name }}</div>
          <div class="text-neutral-400 text-sm line-clamp-1">
            2/10 items remaining
          </div>
          @if($item->discount_price == NULL)
          <div>
            <div class="font-bold">$400.00</div>
            <div class="text-xs text-neutral-400 line-through">
                NGN{{ $item->selling_price }}
            </div>
          </div>

          @else

          <div>
            <div class="font-bold">NGN{{ $item->selling_price }}</div>
            <div class="text-xs text-neutral-400 line-through">
            NGN{{ $item->discount_price }}
            </div>
          </div>
          @endif
        </div>
      </div>
    </a>
    @endforeach
    
  </div>
  <!-- Column 3 -->
  <div class="sm:px-4">
    <div
      class="font-bold h-10 sm:px-4 flex items-center justify-between"
    >
      <span class="text-lg">Special Deal</span>
      <a href="#">
        <span class="text-md text-neutral-600"
          >More <i class="fa-solid fa-arrow-right-long"></i
        ></span>
      </a>
    </div>
    @foreach($special_deals as $item)
    <a href="{{ url('product/details/'.$item->id.'/'.$item->product_slug) }}">
      <div
        class="sm:p-4 h-28 flex gap-5 items-center hover:bg-neutral-200 rounded-lg"
      >
        <div
          class="w-24 h-24 flex justify-center items-center bg-neutral-200 shadow-md rounded-lg"
        >
          <img
            src="{{ asset( $item->product_thambnail ) }}"
            alt=""
            class="object-cover w-full h-full rounded-lg"
          />
        </div>
        <div class="flex flex-col">
          <div class="font-medium line-clamp-1">{{ $item->product_name }}</div>
          <div class="text-neutral-400 text-sm line-clamp-1">
            2/10 items remaining
          </div>
          @if($item->discount_price == NULL)
          <div>
            <div class="font-bold">$400.00</div>
            <div class="text-xs text-neutral-400 line-through">
                NGN{{ $item->selling_price }}
            </div>
          </div>

          @else

          <div>
            <div class="font-bold">NGN{{ $item->selling_price }}</div>
            <div class="text-xs text-neutral-400 line-through">
            NGN{{ $item->discount_price }}
            </div>
          </div>
          @endif
        </div>
      </div>
    </a>
    @endforeach
  </div>
</div>
</div>