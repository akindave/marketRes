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
              <a href="{{route('become.vendor')}}">Become a Vendor</a>
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
        <a href="{{route('become.vendor')}}">Become a Vendor</a>
      </nav>
      <div class="flex gap-2 md:gap-10 items-center">
        <a
          href="{{route('pre.shop')}}"
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