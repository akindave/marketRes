    @php
        $setting = App\Models\SiteSetting::find(1);
    @endphp

<footer class="p-4 bg-blue-800 text-neutral-100">
    <div
      class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-2 mb-16 sm:mb-0"
    >
      <!-- Column 3 -->
      <div class="p-8">
        <div class="text-md font-bold">Need Help ?</div>
        <ul class="text-sm">
          <li class="hover:underline"><a href="#">Contact us</a></li>
          <li class="hover:underline"><a href="#">Support</a></li>
          <li class="hover:underline"><a href="#">FAQ</a></li>
          <li class="hover:underline">
            <a href="#">Report a Problem</a>
          </li>
        </ul>
        <div class="text-md font-bold mt-8">Useful Links ?</div>
        <ul class="text-sm">
          <li class="hover:underline">
            <a href="#">How to shop on oshoffa marketplace</a>
          </li>
          <li class="hover:underline">
            <a href="#">Delivery options and timeline</a>
          </li>
          <li class="hover:underline">
            <a href="#">Guideline on returning items</a>
          </li>
          <li class="hover:underline">
            <a href="#">Corporate or Bulk Purchase</a>
          </li>
          <li class="hover:underline">Report a Product<a href="#"></a></li>
          <li class="hover:underline">Return Policy<a href="#"></a></li>
        </ul>
      </div>
      <!--Column 2-->
      <div>
        <div class="p-8">
          <div class="text-md font-bold">About Oshoffa Marketplace</div>
          <ul class="text-sm">
            <li class="hover:underline"><a href="#">About us</a></li>
            <li class="hover:underline"><a href="#">Support Centre</a></li>
            <li class="hover:underline"><a href="#">Contact Us</a></li>
            <li class="hover:underline"><a href="#">Careers</a></li>
            <li class="hover:underline"><a href="#">Offices</a></li>
            <li class="hover:underline">
              <a href="#">Delivery Information</a>
            </li>
            <li class="hover:underline">
              <a href="#">Terms and conditions</a>
            </li>
            <li class="hover:underline"><a href="#">Privacy Policy</a></li>
          </ul>
          <div class="text-md font-bold mt-8">Socials</div>
          <ul class="flex gap-5 text-3xl items-center">
            <li>
              <a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="{{ $setting->youtube }}"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li>
              <a href="{{ $setting->twitter }}"><i class="fa-brands fa-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!--Column 3-->
      <div>
        <div class="p-8">
          <div class="text-md font-bold">Make money with Oshoffa Market</div>
          <ul class="text-sm">
            <li class="hover:underline">
              <a href="#">Sell on oshoffa market</a>
            </li>
            <li class="hover:underline"><a href="#">Vendor'place</a></li>
            <li class="hover:underline">
              <a href="#">Become a Logistic partner</a>
            </li>
            <li class="hover:underline">
              <a href="#">Partner with Oshoffa market</a>
            </li>
          </ul>
          <div class="text-md font-bold mt-8">Our Offices</div>
          <div class="mb-2">
            <div class="text-sm">{{ $setting->company_address }}</div>
            <div class="text-sm">
              <span class="font-semibold italic">Tel: </span> {{ $setting->phone_one }}
            </div>
            <div class="text-sm">
              <span class="font-semibold italic">Email: </span>
              <a href="mailto:{{ $setting->email }}" class="hover:underline"
                >{{ $setting->email }}</a
              >
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </footer>