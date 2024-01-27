<!-- News Section -->

@php
$setting = App\Models\SiteSetting::find(1);
@endphp
<div
  class="hidden relative sm:flex px-4 h-10 bg-blue-800 justify-between items-center text-sm text-neutral-50"
>
  <div><i class="fa-solid fa-store mr-2"></i>Sell on Oshoffa Market</div>
  <ul id="headline" class="headline-list hidden md:block">
    <li>50% Discount on Fashion Items | Nov 9th - Dec 1st</li>
    <li>Flash sales starts next week</li>
    <li>Black Friday 4th Nov - 12th Nov</li>
    <li>Thrift comes up during the harvest</li>
    <li>10% Cashback on goods worth over $500</li>
  </ul>
  <div class="flex items-center justify-center gap-1 flex-wrap">
    Need Help ? Call us
    <i class="mx-1 fa-solid fa-headset"></i>:
    <span class="font-bold text-lg">{{ $setting->support_phone }}</span>
  </div>
</div>
<!-- Start Mobile Menu-->
<div
  class="relative z-40 lg:hidden -translate-x-full transition ease-in-out duration-300"
  id="sidebar"
  role="dialog"
  aria-modal="true"
>
  <div class="fixed inset-0 bg-black bg-opacity-25"></div>
  <div class="fixed inset-0 z-40 flex bottom-0">
    <div
      class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
    >
      <div class="flex px-4 pb-2 pt-5">
        <button
          id="closeSidebar"
          type="button"
          class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
        >
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Close menu</span>
          <svg
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>

      <!-- Links -->
      <div class="space-y-4 border-t border-b border-gray-200 px-4 py-6">
        <div class="flow-root">
          <a href="#" class="-m-2 block p-2 font-medium text-gray-900"
            ><i class="fa-regular fa-user mr-2"></i>My Account</a
          >
        </div>
        <div class="flow-root">
          <a href="#" class="-m-2 block p-2 font-medium text-gray-900"
            ><i class="fa-regular fa-envelope mr-2"></i> Inbox</a
          >
        </div>
      </div>
      @php
        $categories = App\Models\Category::orderBy('category_name','ASC')->limit(2)->get();
      @endphp
      <div class="space-y-4 p-4">
        <div>
          <p
            id="men-clothing-heading-mobile"
            class="font-medium text-gray-900"
          >
            Clothing
          </p>
          <ul
            role="list"
            aria-labelledby="men-clothing-heading-mobile"
            class="mt-4 flex flex-col space-y-4"
          >
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
            </li>
            
          </ul>
        </div>
        <div>
          <p
            id="men-accessories-heading-mobile"
            class="font-medium text-gray-900"
          >
            Accessories
          </p>
          <ul
            role="list"
            aria-labelledby="men-accessories-heading-mobile"
            class="mt-6 flex flex-col space-y-4"
          >
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500"
                >Sunglasses</a
              >
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
            </li>
          </ul>
        </div>
        <div>
          <p
            id="men-brands-heading-mobile"
            class="font-medium text-gray-900"
          >
            Brands
          </p>
          <ul
            role="list"
            aria-labelledby="men-brands-heading-mobile"
            class="mt-6 flex flex-col space-y-4"
          >
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500"
                >Re-Arranged</a
              >
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500"
                >Counterfeit</a
              >
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500"
                >Full Nelson</a
              >
            </li>
            <li class="flow-root">
              <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="space-y-4 border-t border-gray-200 px-4 py-6">
        <div class="flow-root">
          <a href="#" class="-m-2 block p-2 font-medium text-gray-900"
            >Marketplace</a
          >
        </div>
        <div class="flow-root">
          <a href="#" class="-m-2 block p-2 font-medium text-gray-900"
            >Harvest</a
          >
        </div>
      </div>
      @auth

      @else
      <div class="space-y-4 border-t border-gray-200 px-4 py-6">
        <div class="flow-root">
          <a href="{{ route('login') }}" class="-m-2 block p-2 font-medium text-gray-900"
            >Sign in</a
          >
        </div>
        <div class="flow-root">
          <a href="{{ route('register') }}" class="-m-2 block p-2 font-medium text-gray-900"
            >Create account</a
          >
        </div>
      </div>
      @endauth 
    </div>
  </div>
</div>
<!-- End Mobile Menu -->

<!-- Header Section -->
<header class="sticky top-0 bg-white z-10">
  <nav aria-label="Top" class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="border-b border-gray-200">
      <div class="flex h-16 items-center">
        <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
        <button
          type="button"
          id="menuToggle"
          class="relative cursor-pointer rounded-md bg-white p-2 text-gray-400 lg:hidden"
        >
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open menu</span>
          <svg
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
          </svg>
        </button>
       
        <!-- Logo -->
        <div class="ml-2 sm:ml-4 flex lg:ml-0">
          <a href="#">
            <span class="sr-only">Company Logo</span>
            <img
              class="h-12 w-auto"
              src="{{ asset($setting->logo) }}"
              alt=""
            />
          </a>
        </div>

        <!-- Nav menus -->
        <div class="hidden lg:ml-8 lg:block lg:self-stretch">
          <div class="flex h-full space-x-8">
            
            <div class="flex">
              <div class="relative flex">
                <button
                  type="button"
                  class="border-transparent border-b-3t text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out active"
                  aria-expanded="false"
                >
                <a href="/"> Home</a>
                </button>
              </div>
            
            </div>
            <div class="flex dropdown">
              <div class="relative flex">
                <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                <button
                  type="button"
                  class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out"
                  aria-expanded="false"
                >
                  Marketplace
                </button>
              </div>
              <div
                class="dropdown-content absolute inset-x-0 top-full text-sm text-gray-500"
              >
                <div
                  class="absolute inset-0 top-1/2 bg-white shadow"
                  aria-hidden="true"
                ></div>

                <div class="relative bg-white">
                  <div class="mx-auto px-8">
                    <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                      <div class="col-start-2 grid grid-cols-2 gap-x-8">
                        <div class="group relative text-base sm:text-sm">
                          <div
                            class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75"
                          >
                            <img
                              src="{{asset('frontend2/assets/images/model.webp')}}"
                              alt="Models sitting back to back, wearing Basic Tee in black and bone."
                              class="object-cover object-center"
                            />
                          </div>
                          <a
                            href="#"
                            class="mt-6 block font-medium text-gray-900"
                          >
                            <span
                              class="absolute inset-0 z-10"
                              aria-hidden="true"
                            ></span>
                            New Arrivals
                          </a>
                          <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                        <div class="group relative text-base sm:text-sm">
                          <div
                            class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75"
                          >
                            <img
                              src="{{asset('frontend2/assets/images/model3.webp') }}"
                              alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                              class="object-cover object-center"
                            />
                          </div>
                          <a
                            href="#"
                            class="mt-6 block font-medium text-gray-900"
                          >
                            <span
                              class="absolute inset-0 z-10"
                              aria-hidden="true"
                            ></span>
                            Basic Tees
                          </a>
                          <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                      </div>
                      {{--  BEGINNING OF THE CATEGORIES  --}}
                      <div
                        class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm"
                      >
                    @foreach($categories as $category) 
                        <div>
                          <p
                            id="Clothing-heading"
                            class="font-medium text-gray-900"
                          >
                          {{ $category->category_name }}
                          </p>
                          <ul
                            role="list"
                            aria-labelledby="Clothing-heading"
                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4"
                          >
                          @php 
                            $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name','ASC')->get();
                          @endphp
                          @foreach($subcategories as $subcategory)   
                            <li class="flex">
                              <a href="{{ url('product/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}" class="hover:text-gray-800"
                                >{{ $subcategory->subcategory_name }}</a
                              >
                            </li>
                           @endforeach

                            <li class="flex">
                              <a href="#" class="hover:text-gray-800"
                                >Browse All</a
                              >
                            </li>
                          </ul>
                        </div>
                    @endforeach
                        <div>
                          <p
                            id="Brands-heading"
                            class="font-medium text-gray-900"
                          >
                            Brands
                          </p>
                          <ul
                            role="list"
                            aria-labelledby="Brands-heading"
                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4"
                          >
                            <li class="flex">
                              <a href="#" class="hover:text-gray-800"
                                >Full Nelson</a
                              >
                            </li>
                            <li class="flex">
                              <a href="#" class="hover:text-gray-800"
                                >My Way</a
                              >
                            </li>
                            <li class="flex">
                              <a href="#" class="hover:text-gray-800"
                                >Re-Arranged</a
                              >
                            </li>
                            <li class="flex">
                              <a href="#" class="hover:text-gray-800"
                                >Counterfeit</a
                              >
                            </li>
                            <li class="flex">
                              <a href="#" class="hover:text-gray-800"
                                >Significant Other</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a
              href="#"
              class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800"
              >Harvest</a
            >
          </div>
        </div>

        <div class="ml-auto flex items-center">
          <div
            class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6"
          >
            <a
              href="{{ route('login') }}"
              class="text-sm font-medium text-gray-700 hover:text-gray-800"
              >Sign in</a
            >
            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
            <a
              href="{{ route('register') }}"
              class="text-sm font-medium text-gray-700 hover:text-gray-800"
              >Create account</a
            >
          </div>

          <div class="hidden lg:ml-8 lg:flex">
            <a
              href="#"
              class="flex items-center text-gray-700 hover:text-gray-800"
            >
              <img
                src="assets/images/nigeriaflagicon.svg"
                alt=""
                class="block h-auto w-5 flex-shrink-0"
              />
              <span class="ml-3 block text-sm font-medium">NGN</span>
              <span class="sr-only">, change currency</span>
            </a>
          </div>

          <!-- Compare -->
          <div class="hidden sm:flex lg:ml-6">
            <a
              href="#"
              class="p-2 text-gray-400 hover:text-gray-500 text-lg"
            >
              <span class="sr-only">Compare</span>
              <i class="fa-solid fa-rotate"></i>
            </a>
          </div>

          <!-- Love -->
          <div class="ml-4 flow-root lg:ml-6">
            <a
              href="#"
              class="group -m-2 flex items-center p-2 text-gray-400 hover:text-gray-500"
            >
              <i class="fa-regular fa-heart text-lg"></i>
              <span
                class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800"
                >4</span
              >
              <span class="sr-only">items in cart, view bag</span>
            </a>
          </div>

          <!-- Cart -->
          <div class="ml-4 flow-root lg:ml-6 relative group">
            <a
              href="#"
              class="group -m-2 flex items-center p-2 text-gray-400 hover:text-gray-500"
            >
              <i class="fa-solid fa-cart-shopping text-lg"></i>
              <span
                class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800"
                id="cartQty"
                >0</span
              >
              <span class="sr-only">items in cart, view bag</span>
            </a>
            <div
              id="cartModal"
              class="hidden group-hover:sm:block absolute top-8 sm:right-0 md:-right-6 bg-white w-96 p-4 rounded-lg shadow-lg z-40 overflow-y-auto"
            >
              <div class="flex justify-between items-center">
                <h1 class="text-lg font-semibold mb-2">Shopping Cart</h1>
                <a href="#" class="text-blue-600">View</a>
              </div>
              <ul id="cartContent" class="divide-y divide-gray-200">
                <li class="flex gap-2 py-2">
                  <div class="h-20 w-20 bg-blue-100 rounded-lg flex">
                    <a href=""
                      ><img
                        src="{{asset('frontend2/assets/images/garment.jpg')}}"
                        alt=""
                        class="rounded-lg w-full h-full object-cover"
                      />
                    </a>
                  </div>
                  <div class="flex justify-between w-[80%]">
                    <div class="">
                      <a href="#">
                        <p class="font-semibold line-clamp-1">
                          Yeezy Boost
                        </p>
                        <div
                          class="text-sm font-semibold text-neutral-400 line-clamp-1"
                        >
                          Seller:
                          <span class="font-normal"> Vikings Outlet</span>
                        </div>
                        <div
                          class="text-sm font-semibold text-neutral-400 line-clamp-1"
                        >
                          Size:
                          <span class="font-normal">XXL</span>
                        </div>
                      </a>
                      <button class="text-xs p-1 rounded-sm text-red-800">
                        Remove
                        <i class="fa-regular fa-circle-xmark text-xs"></i>
                      </button>
                    </div>
                    <div class="pr-2">
                      <div class="font-bold float-right">$400.00</div>
                      <div
                        class="flex gap-3 items-center justify-center clear-both"
                      >
                        <button
                          class="text-neutral-700 disabled:text-neutral-300"
                        >
                          <i class="fa-solid fa-circle-minus"></i>
                        </button>
                        <div
                          class="flex items-center justify-center rounded-sm"
                        >
                          1
                        </div>
                        <button
                          class="text-neutral-700 disabled:text-neutral-300"
                        >
                          <i class="fa-solid fa-circle-plus"></i>
                        </button>
                      </div>
                      <label
                        for=""
                        class="w-full text-xs text-neutral-600 float-right clear-both flex items-center justify-center"
                        >Qty</label
                      >
                    </div>
                  </div>
                </li>
                <li class="flex gap-2 py-2">
                  <div class="h-20 w-20 bg-blue-100 rounded-lg flex">
                    <a href=""
                      ><img
                        src="assets/images/garment.jpg"
                        alt=""
                        class="rounded-lg w-full h-full object-cover"
                      />
                    </a>
                  </div>
                  <div class="flex justify-between w-[80%]">
                    <div class="">
                      <a href="#">
                        <p class="font-semibold line-clamp-1">
                          Yeezy Boost
                        </p>
                        <div
                          class="text-sm font-semibold text-neutral-400 line-clamp-1"
                        >
                          Seller:
                          <span class="font-normal"> Vikings Outlet</span>
                        </div>
                        <div
                          class="text-sm font-semibold text-neutral-400 line-clamp-1"
                        >
                          Size:
                          <span class="font-normal">XXL</span>
                        </div>
                      </a>
                      <button class="text-xs p-1 rounded-sm text-red-800">
                        Remove
                        <i class="fa-regular fa-circle-xmark text-xs"></i>
                      </button>
                    </div>
                    <div class="pr-2">
                      <div class="font-bold float-right">$400.00</div>
                      <div
                        class="flex gap-3 items-center justify-center clear-both"
                      >
                        <button
                          class="text-neutral-700 disabled:text-neutral-300"
                        >
                          <i class="fa-solid fa-circle-minus"></i>
                        </button>
                        <div
                          class="flex items-center justify-center rounded-sm"
                        >
                          1
                        </div>
                        <button
                          class="text-neutral-700 disabled:text-neutral-300"
                        >
                          <i class="fa-solid fa-circle-plus"></i>
                        </button>
                      </div>
                      <label
                        for=""
                        class="w-full text-xs text-neutral-600 float-right clear-both flex items-center justify-center"
                        >Qty</label
                      >
                    </div>
                  </div>
                </li>
                <li class="flex gap-2 py-2">
                  <div class="h-20 w-20 bg-blue-100 rounded-lg flex">
                    <a href=""
                      ><img
                        src="assets/images/garment.jpg"
                        alt=""
                        class="rounded-lg w-full h-full object-cover"
                      />
                    </a>
                  </div>
                  <div class="flex justify-between w-[80%]">
                    <div class="">
                      <a href="#">
                        <p class="font-semibold line-clamp-1">
                          Yeezy Boost
                        </p>
                        <div
                          class="text-sm font-semibold text-neutral-400 line-clamp-1"
                        >
                          Seller:
                          <span class="font-normal"> Vikings Outlet</span>
                        </div>
                        <div
                          class="text-sm font-semibold text-neutral-400 line-clamp-1"
                        >
                          Size:
                          <span class="font-normal">XXL</span>
                        </div>
                      </a>
                      <button class="text-xs p-1 rounded-sm text-red-800">
                        Remove
                        <i class="fa-regular fa-circle-xmark text-xs"></i>
                      </button>
                    </div>
                    <div class="pr-2">
                      <div class="font-bold float-right">$400.00</div>
                      <div
                        class="flex gap-3 items-center justify-center clear-both"
                      >
                        <button
                          class="text-neutral-700 disabled:text-neutral-300"
                        >
                          <i class="fa-solid fa-circle-minus"></i>
                        </button>
                        <div
                          class="flex items-center justify-center rounded-sm"
                        >
                          1
                        </div>
                        <button
                          class="text-neutral-700 disabled:text-neutral-300"
                        >
                          <i class="fa-solid fa-circle-plus"></i>
                        </button>
                      </div>
                      <label
                        for=""
                        class="w-full text-xs text-neutral-600 float-right clear-both flex items-center justify-center"
                        >Qty</label
                      >
                    </div>
                  </div>
                </li>
              </ul>
              <!-- Total -->
              <div
                id="cartTotal"
                class="mt-4 text-lg font-semibold float-right"
              >
                Total: $0.00
              </div>
              <div class="clear-both"></div>
              <button
                id="closeCartButton"
                class="mt-4 w-full bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded"
              >
                Check Out
              </button>
            </div>
          </div>
          <!-- Account -->
          <div class="flex sm:hidden lg:ml-6">
            <a
              href="#"
              class="p-2 text-gray-400 hover:text-gray-500 text-lg"
            >
              <span class="sr-only">Account</span>
              <i class="fa-regular fa-user"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>