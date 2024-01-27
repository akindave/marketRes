<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login - Easy Shop Online Store </title>
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
    {{--  <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css?v=5.3') }}" />  --}}

 <!-- Toaster -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
 <!-- Toaster   -->


</head>

<body>
   
     {{--  @include('frontend.body.header')  --}}

   <!-- End Header  --> 
   <div class="grid grid-cols-1 sm:grid-cols-2 h-screen">
    <div class="hidden sm:block bg-blue-800 relative">
      <div class="absolute z-9 bottom-0 w-full h-[100%]">
        <img
          class="object-cover w-full h-full"
          src="{{asset('frontend2/assets/images/giftbox-removebg-preview.png') }}"
          alt=""
        />
      </div>
      <div class="absolute z-10 bottom-0 w-full h-[60%]">
        <img
          class="object-cover w-full h-full"
          src="{{asset('frontend2/assets/images/smilinggirl-removebg-preview.png') }}"
          alt=""
        />
      </div>
    </div>
    <div class="p-12">
      <div class="text-2xl sm:text-3xl font-black">Welcome Back!</div>
      <div class="text-sm">Sign in to continue</div>
      <div class="pt-16">
        <form action="{{ route('login') }}" method="POST">
            @csrf
          <div class="mb-8">
            <label htmlFor="" class="text-md text-neutral-600">Email</label>
            <input
              id="email"  required="" name="email" placeholder="Username or Email *"
              type="email"
              class="mt-2 border-neutral-200 rounded-3xl shadow-lg border-[1.3px] outline-none focus:border-primary py-3 px-4 text-sm w-full"
            />
          </div>
          <div class="relative">
            <label htmlFor="" class="text-md text-neutral-600"
              >Password</label
            >
            <input
            required="" id="password" type="password" name="password" placeholder="Your password *"
              type="password"
              class="mt-2 border-neutral-200 rounded-3xl shadow-lg border-[1.3px] outline-none focus:border-primary py-3 px-4 text-sm w-full"
            />
            <i class="absolute right-4 top-12 fa-regular fa-eye"></i>
          </div>
          <div class="py-2 flex gap-3 items-center">
            <!-- <span class="text-sm">Password is correct</span> -->
          </div>
          <div class="mt-2">
            <label class="flex items-center">
              <input
              name="checkbox" id="exampleCheckbox1" value=""
                type="checkbox"
                class="form-checkbox h-4 w-4 text-blue-800"
              />
              <span class="ml-2 text-gray-700">Remember Me</span>
            </label>
          </div>
          {{--  <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>  --}}
          <div class="py-3 mt-4">
            <button
            type="submit"
            name="login"
              class="w-full py-3 rounded-3xl bg-blue-800 text-neutral-50"
            >
              Sign in
            </button>
          </div>
        </form>
        <div class="py-3 text-center">
          <span class="text-sm"
            >Don't have an account ?
            <a href="{{ route('register') }}" class="text-blue-800 font-medium underline"
              >Sign up</a
            ></span
          >
        </div>
      </div>
    </div>
  </div>
    

    


      {{--  @include('frontend.body.footer');  --}}


    <!-- Preloader Start -->
    {{--  <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>  --}}
    <script src="{{asset('frontend2/js/showcase.js') }}"></script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>


</body>

</html>