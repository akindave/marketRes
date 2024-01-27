<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('main.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend2/assets/fontawesome/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend2/assets/fontawesome/css/brands.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend2/assets/fontawesome/css/solid.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend2/assets/fontawesome/css/regular.css') }}" />
    <title>Dashboard</title>
  </head>
  <body class="bg-[whitesmoke] h-screen relative">
    <!--Start Sidebar Menu-->
    <div
      id="sidebarBackdrop"
      class="hidden fixed backdrop-blur-md backdrop-brightness-50 top-0 left-0 w-full bottom-0"
      style="z-index: 100"
    ></div>

    <div
      id="sidebar"
      style="z-index: 100"
      class="bg-white shadow-md w-64 fixed top-0 bottom-0 left-0 overflow-y-auto transform -translate-x-full transition duration-300 ease-in-out"
    >
      <div class="h-full w-full p-4 relative">
        <div class="absolute top-4 right-[15px]">
          <i id="closeSidebar" class="fas fa-times"></i>
        </div>
        <div class="py-4 mt-8">
          <h3 class="text-3xl font-bold mb-4">Logo</h3>
          <ul class="space-y-2">
            <li><a href="./services.html">Services</a></li>
            <li>
              <a href="./vendorregistration.html">Become a Vendor</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--End Sidebar Menu-->
    <header
      class="bg-[whitesmoke] w-screen border-b fixed top-0 z-50 flex justify-between items-center px-8 py-4 md:py-2 text-sm font-semibold"
    >
      <a href="./index.html">Logo</a>
      <nav class="hidden items-center gap-10 md:flex">
        <a href="#howitworks">About</a>
        <a href="./services.html">Services</a>
        <a href="./vendorregistration.html">Become a Vendor</a>
      </nav>
      <div class="flex gap-2 md:gap-10 items-center">
        <a
          href="./shop.html"
          class="rounded-lg px-4 py-1 bg-blue-800 text-white shadow-sm"
        >
          Shop
        </a>
        <button
          type="button"
          id="sidebarToggle"
          class="relative cursor-pointer rounded-md bg-white p-2 text-gray-400"
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
      </div>
    </header>
    <div class="flex mt-12 mb-16">
      <div class="w-full md:w-4/6 p-8">
        <div class="mb-4">
          <h1 class="text-3xl font-bold">New Vendor Registration</h1>
          <p class="">
            Please, kindly fill the form with the appropriate information to get
            enlisted as a vendor on the platform.
          </p>
        </div>
        <form class="w-full" action="{{route('vendor.register')}}" method="POST">
            @csrf
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-4 md:mb-0">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="name"
              >
                Full Name (Owners name)
              </label>
              <input
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 md:mb-3 leading-tight focus:outline-none focus:bg-white"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
                type="name"
                placeholder="John Doe"
                />
                @error('name')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="email"
              >
                Email
              </label>
              <input
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                type="email"
                placeholder="Jexample@gmail.com"
              />
              @error('email')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="password"
              >
                Password
              </label>
              <input
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="password"
                required
                name="password"
                type="password"
                placeholder="enter password"
              />
              @error('password')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/3 px-3">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="confirm_pass"
              >
                Confirm Password
              </label>
              <input
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="confirm_pass"
                name="password_confirmation"
                required
                type="password"
                placeholder="confirm password"
              />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="number"
              >
                Phone Number
              </label>
              <input
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="number"
                name="number"
                value="{{ old('number') }}"
                type="phone"
                required
                placeholder="+23481 xxxxx xxxx"
              />
              @error('number')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="shop_name"
              >
                Shop Name
              </label>
              <input
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="shop_name"
                name="shop_name"
                value="{{ old('shop_name') }}"
                required
                type="text"
                placeholder="David Store"
              />
              @error('shop_name')
                    <span style="color:red"> {{ $message }}</span>
                @enderror
            </div>
          </div>
          <div class="flex flex-col sm:flex-row justify-between items-center">
            <p class="text-sm text-neutral-600">
              <i class="fas fa-info-circle"></i> More information would be
              provided after successful registration
            </p>
            <div class="flex justify-end gap-4">
              <button
                class="bg-neutral-300 hover:bg-neutral-400 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline"
                type="reset"
              >
                Reset
              </button>
              <button
                class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline"
                type="submit"
              >
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
      <div
        class="hidden md:block fixed p-8 bottom-12 top-12 right-24 w-[22%] rounded-lg"
      >
        <img
          src="{{ asset('frontend2/assets/images/havingfungrocerystore.gif') }}"
          class="h-full w-full object-cover rounded-lg"
          style="filter: grayscale(100%)"
          alt=""
        />
      </div>
    </div>
    <footer
      class="bg-[whitesmoke] fixed z-50 bottom-0 w-full py-3 px-8 flex justify-between items-center border-t"
    >
      <div class="flex items-center gap-4 text-sm md:text-2xl">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
      </div>
      <div class="flex items-center gap-4 text-xs md:text-md">
        <a href="#howitworks" class="hidden md:block">How it works</a>
        <a href="/privacypolicy">Privacy Policy</a>
        <a href="mailto:contactcelemarket.com" class="underline">Email Us</a>
      </div>
    </footer>
    <script src="./js/panel.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
