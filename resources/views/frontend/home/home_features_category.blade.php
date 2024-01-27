<div class="px-4 sm:px-12 py-8">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-xl font-bold text-neutral-800">Featured Categories</h2>
      <div class="flex gap-2 items-center">
        <a class="text-blue-800" href="#"
          >Browse all
          <span class="hidden sm:inline-block">categories</span></a
        >
        <i class="fa-solid fa-arrow-right-long"></i>
      </div>
    </div>
    @php
        $categories = App\Models\Category::orderBy('category_name','ASC')->get();
    @endphp
    <div
      class="grid grid-cols-2 gap-4 md:grid-cols-8 sm:grid-cols-4 bg-neutral-100 p-4 rounded-lg"
    >
    @foreach($categories as $category)

        @php
            $productCount = App\Models\Product::where('category_id',$category->id)->count();
        @endphp
      <div class="flex flex-col items-center">
        <a href="{{ url('product/category/'.$category->id.'/'.$category->category_slug) }}">
          <div
            class="hover:border-2 transition-all duration-400 ease-in-out shadow-md bg-white h-36 rounded-lg p-2 flex items-center justify-center"
          >
            <img
              src="{{ asset($category->category_image ) }}"
              class="object-contain max-w-full max-h-full rounded-lg"
              alt=""
            />
          </div>
          <div
            class="mt-2 text-center line-clamp-2 text-sm font-medium text-gray-700 hover:text-gray-800"
          >
           {{ $category->category_name."(".$productCount.")" }}
          </div>
        </a>
      </div>
    @endforeach
      
    </div>
  </div>