<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register - Easy Shop Online Store </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <link rel="stylesheet" href="{{asset('frontend2/main.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend2/assets/fontawesome/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend2/assets/fontawesome/css/brands.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend2/assets/fontawesome/css/solid.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend2/assets/fontawesome/css/regular.css') }}" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
</head>

<body>
    
   @include('frontend.body.header')
    <!--End header-->
    <div class="grid grid-cols-1 sm:grid-cols-2 h-screen overflow-hidden">
        <div class="hidden sm:block p-4 gap-2 bg-blue-800 relative">
          <div class="absolute z-10 bottom-0 w-full h-[100%]">
            <img
              class="object-cover w-full h-full"
              src="{{ asset('frontend2/assets/images/3dshop.png') }}"
              alt=""
            />
          </div>
        </div>
        <div class="p-12 overflow-auto">
          <div class="text-2xl sm:text-3xl font-black">Create Account</div>
          <div class="text-sm">
            Kindly fill the form below to create an account
          </div>
          <div class="pt-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="mb-4">
                <label htmlFor="" class="text-md text-neutral-600"
                  >Username</label
                >
                <input
                    id="name" required="" name="name" placeholder="Username"
                  type="text"
                  class="mt-2 border-neutral-200 rounded-3xl shadow-lg border-[1.3px] outline-none focus:border-primary py-3 px-4 text-sm w-full"
                />
              </div>
              <div class="mb-4">
                <label htmlFor="" class="text-md text-neutral-600">Email</label>
                <input
                    id="email" required="" name="email" placeholder="Email" 
                  type="email"
                  class="mt-2 border-neutral-200 rounded-3xl shadow-lg border-[1.3px] outline-none focus:border-primary py-3 px-4 text-sm w-full"
                />
              </div>
              <div class="mb-4 relative">
                <label htmlFor="" class="text-md text-neutral-600"
                  >Password</label
                >
                <input
                    required=""  id="password"  type="password" name="password" placeholder="Password"
                  
                  class="mt-2 border-neutral-200 rounded-3xl shadow-lg border-[1.3px] outline-none focus:border-primary py-3 px-4 text-sm w-full"
                />
                <i class="absolute right-4 top-12 fa-regular fa-eye"></i>
              </div>
              <div class="mb-4 relative">
                <label htmlFor="" class="text-md text-neutral-600"
                  >Confirm Password</label
                >
                <input
                required="" id="password_confirmation" type="password" name="password_confirmation"
                  placeholder="e.g ABCdef!x@"
                  class="mt-2 border-neutral-200 rounded-3xl shadow-lg border-[1.3px] outline-none focus:border-primary py-3 px-4 text-sm w-full"
                />
                <i class="absolute right-4 top-12 fa-regular fa-eye"></i>
              </div>
              <div class="">
                <label class="flex items-center">
                  <input
                  name="checkbox" id="exampleCheckbox12"
                    type="checkbox"
                    class="form-checkbox h-4 w-4 text-blue-800"
                  />
                  <a href="page-privacy-policy.html"><span class="ml-2 text-gray-700 text-sm md:text-md"
                    >I agree with the Terms and Conditions</span
                  ></a>
                </label>
              </div>
              <div class="py-1 mt-2">
                <button
                name="login"
                type="submit"
                  class="w-full py-3 rounded-3xl bg-blue-800 text-neutral-50"
                >
                  Create Account
                </button>
              </div>
            </form>
            <div class="mb-10 py-1 sm:mb-0 text-center">
              <span class="text-sm"
                >Have an account ?
                <a href="{{route('login')}}" class="text-blue-800 font-medium underline"
                  >Sign in</a
                >
              </span>
            </div>
          </div>
        </div>
      </div>

   {{--  <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>  --}}
    <script src="{{asset('frontend2/js/headline.js') }}"></script>
</body>
</html>