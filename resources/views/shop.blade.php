<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     @include('pre_launch_layout.style')
    <title>Shop</title>
  </head>
  <body class="bg-[whitesmoke]">
    @include('pre_launch_layout.header')
<div class="flex gap-5 py-5 px-0 md:px-10 mt-12 mb-24">
      <div
        class="hidden lg:flex w-[25%] max-h-[80vh] overflow-y-auto border bg-white shadow-md rounded-lg flex-col p-5 space-y-3 divide-y-[0.1px]"
        id="original"
      >
        <div class="">
          <div
            class="lg:hidden pb-2 border-b mb-2 cursor-pointer"
            id="close-filter"
          >
            <i class="fa-solid fa-angle-left mr-2"></i>
            Filter
          </div>
          <h3 class="font-medium">CATEGORY</h3>
          <div class="flex flex-col">
            <div
              class="flex items-center justify-between py-2"
              id="dropdownToggle"
            >
              <span class="font-medium cursor-pointer">Home & Beauty</span>
              <i class="fa-solid fa-chevron-up"></i>
              <!-- <i class="fa-solid fa-chevron-down"></i> -->
            </div>
            <ul
              class="px-4 space-y-1 text-sm text-neutral-700 filter-dropdown-content divide-y-[0.1px]"
            >
            @foreach($categories as $category)
              <li>{{ $category->category_name }}</li>

            @endforeach
             
            </ul>
          </div>
          <div class="flex flex-col">
            <div
              class="flex items-center justify-between py-2"
              id="dropdownToggle"
            >
              <span class="font-medium cursor-pointer">BRAND</span>
              <i class="fa-solid fa-chevron-up"></i>
              <!-- <i class="fa-solid fa-chevron-down"></i> -->
            </div>
            
          </div>
          <ul
            class="space-y-1 px-4 text-sm text-neutral-700 filter-dropdown-content divide-y-[0.1px]"
          >
           @foreach($brands as $brand)  
              <li>{{ $brand->brand_name }}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div
        class="w-full lg:w-[75%] bg-white rounded-lg pb-5 md:pb-0 px-5 divide-y-[0.1px] relative"
        id="target"
      >
        <div class="p-3 flex justify-between items-center">
          <h1 class="text-3xl font-bold">SHOP</h1>
          <span class="text-[gray]">{{ count($vendors) }}+ Active</span>
        </div>
        <div class="flex items-center justify-between mb-2 py-1">
          <span class="font-medium text-sm md:text-lg">Top Rated</span>
          <div class="flex gap-1 items-center">
            <label for="sort" class="hidden md:block">Sort By:</label>
            <select
              name=""
              id=""
              class="p-2 border rounded-lg text-xs md:text-lg"
            >
              <option value="">Popularity</option>
              <option value="">Price: Low to High</option>
              <option value="">Price: High to Low</option>
              <option value="">Product Rating</option>
            </select>
            <i
              for="sorting"
              class="md:hidden fa-solid fa-filter text-sm text-neutral-300 ml-1"
            ></i>
          </div>
        </div>
        <div class="flex items-center justify-between py-2">
          <span class="text-neutral-500 text-sm">4,000 Products found</span>
          <div class="flex gap-1 items-center text-neutral-500">
            <i class="fa-solid fa-list"></i>
          </div>
        </div>
        <div
          class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-3 py-4 md:p-4"
        >
        @foreach($vendors as $vendor)
          <div
            class="bg-white shadow-lg p-3 rounded-lg group border hover:border-blue-800"
          >
            <a href="#">
              <img
                src="{{ (!empty($vendor->photo)) ? url('upload/vendor_images/'.$vendor->photo):url('upload/no_image.jpg') }}"
                alt="Product 1"
                class="w-full h-20 md:h-32 object-cover mb-3 group-hover:scale-95 transform transition-transform duration-500"
              />
            </a>
            <h2
              class="text-sm md:text-lg font-semibold line-clamp-1 text-ellipsis flex flex-wrap items-center gap-2"
            >
              {{empty($vendor->shop_name) ? $vendor->name : $vendor->shop_name}}
              <span
                class="flex items-center justify-center h-5 w-5 rounded-full text-white bg-green-800"
              >
                <i class="far fa-check-circle text-sm"></i>
              </span>
            </h2>
             @php
                $products = App\Models\Product::where('vendor_id',$vendor->id)->get();
            @endphp   
            <div class="text-xs text-neutral-500">
              <span>Products: </span>{{count($products)}}
            </div>
            <div
              class="py-2 flex items-center gap-3 flex-wrap text-xs text-[gray]"
            >
              <span class="p-1 bg-[lightgray] rounded-lg">Church</span>
              <span class="p-1 py-1 bg-[lightgray] rounded-lg">Christian</span>
              {{--  <span class="p-1 py-1 bg-[lightgray] rounded-lg">Repairs</span>
              <span class="p-1 py-1 bg-[lightgray] rounded-lg"
                >Space Decor</span
              >  --}}
            </div>
            <a
              class="block w-full text-center modal-trigger text-sm md:text-lg bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-500 focus:outline-none focus:ring focus:border-indigo-300"
              data-modal-target="modal-1"
              href="shop-view.html"
            >
              Browse
            </a>
          </div>
        @endforeach
        </div>
        <div class="flex items-center justify-center my-3 py-2">
          <nav class="flex gap-2" aria-label="Pagination">
            <a
              href="#"
              class="border border-gray-300 p-2 rounded-sm text-sm md:text-lg md:px-3 md:py-2 hover:bg-gray-100"
              >Previous</a
            >
            <a
              href="#"
              class="border border-blue-800 p-2 rounded-sm text-sm md:px-4 md:py-2 hover:bg-gray-100"
              >1</a
            >
            <a
              href="#"
              class="border border-gray-300 p-2 rounded-sm text-sm md:px-4 md:py-2 hover:bg-gray-100"
              >2</a
            >
            <a
              href="#"
              class="border border-gray-300 p-2 rounded-sm text-sm md:px-4 md:py-2 hover:bg-gray-100"
              >3</a
            >
            <a
              href="#"
              class="border border-gray-300 p-2 rounded-sm text-sm md:px-3 md:py-2 hover:bg-gray-100"
              >Next</a
            >
          </nav>
        </div>
        <!-- Mobile Filter Navigation -->
        <button
          class="lg:hidden shadow-md text-white text-center sticky w-full bottom-0 p-2 bg-neutral-400"
          id="filter-toggle"
        >
          Filter <i class="fa-solid fa-filter ml-2"></i>
        </button>
      </div>
    </div>
     @include('pre_launch_layout.footer')
     </body>
     </html>