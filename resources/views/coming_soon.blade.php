<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     @include('pre_launch_layout.style')
    <title>Dashboard</title>
  </head>
  <body class="bg-[whitesmoke]">
    @include('pre_launch_layout.header')
    <div
      class="mt-28 md:mt-0 h-max md:h-screen flex flex-col md:flex-row justify-center items-center gap-8 md:gap-48"
    >
      <div class="space-y-3 px-10 sm:px-0">
        <p class="font-semibold">-- &nbsp;&nbsp;Coming Soon</p>
        <p class="text-4xl max-w-xs font-extrabold">
          Get Notified When we Launch
        </p>
        <form action="#" class="my-4" id="myForm" onsubmit="notifyUSer(event)">
          <div class="relative">
            <input
              class="rounded-full text-xs md:text-sm w-full md:w-96 outline-none border border-[lightgray] py-3 pl-4 md:pl-6 pr-28 md:pr-40"
              type="email"
              required
              name=""
              value=""
              placeholder="example@gmail.com"
              id="email"
            />
            <button
        
              class="absolute text-sm font-bold rounded-full bottom-1 right-1 top-1 z-10 bg-blue-800 px-4 md:px-9 py-1 text-white"
            >
            <span id="noteSpin" style="display:none"><i class="fa fa-spinner fa-spin fa-1x text-[white]"></i>submiting...</span>
              <span id="notifyme">Notify me</span>
            </button>
          </div>
        </form>
        <p class="italic">Don't worry, we won't spam you.</p>
        <p class="text-center md:text-left">
          <strong>***</strong> Vendor enlisting ongoing.
          <a href="{{route('become.vendor')}}" class="underline">Click Here</a> to Register
        </p>
      </div>
      <div class="block">
        <div class="relative">
          <div
            class="blur-3xl w-96 h-96 bg-blue-200 rounded-lg absolute -z-50 hidden sm:block"
          ></div>
          <div
            class="w-72 h-72 bg-blue-500 rounded-full absolute -z-40 top-16 hidden sm:block"
          ></div>
          <img
            class="w-auto h-96 shadow rounded-lg"
            src="{{asset('frontend2/assets/images/celemarketview.jpg')}}"
            alt=""
          />
          <div
            class="hidden sm:block w-56 h-24 rounded-lg shadow-xl bg-white absolute -left-28 top-16"
          >
            <img
              class="w-full h-full object-cover rounded-lg p-1"
              src="{{asset('frontend2/assets/images/vendor.jpg') }}"
              alt=""
            />
          </div>
          <div
            class="hidden sm:block w-56 h-24 rounded-lg shadow-xl bg-white absolute -right-28 top-60"
          >
            <img
              class="w-full h-full object-cover rounded-lg p-1"
              src="{{ asset('frontend2/assets/images/dashboard.jpg') }}"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <div id="howitworks" class="mb-16 mt-16 sm:mt-4">
      <h1 class="text-3xl font-bold text-center mb-8">How it Works</h1>
      <div
        class="container px-10 flex flex-col md:flex-row gap-20 items-center justify-center"
      >
        <div class="flex-1 text-center flex flex-col items-center">
          <div
            class="h-12 w-12 bg-blue-800 mb-2 rounded-full flex items-center justify-center shadow-md"
          >
            <i class="fas fa-shopping-cart text-[white]"></i>
          </div>
          <h2 class="font-bold text-xl">Shop & Connect</h2>
          <p class="">
            Exciting news! Our marketplace is about to transform the way you
            shop and connect. More than buying and selling, now you will be able
            to create your own online shop too!
          </p>
        </div>
        <div class="flex-1 text-center flex flex-col items-center">
          <div
            class="h-12 w-12 bg-blue-800 mb-2 rounded-full flex items-center justify-center shadow-md"
          >
            <i class="fab fa-servicestack text-white"></i>
          </div>
          <h2 class="font-bold text-xl">Create and Request Services</h2>
          <p class="">
            Unleash your creativity! Be the maestro of your desires. Create and
            request professional services from a live music band to gourmet
            chefs and more. Join the revolution of tailored experiences!
          </p>
        </div>
        <div class="flex-1 text-center flex flex-col items-center">
          <div
            class="h-12 w-12 bg-blue-800 mb-2 rounded-full flex items-center justify-center shadow-md"
          >
            <i class="fas fa-store text-[white]"></i>
          </div>
          <h2 class="font-bold text-xl">Become a Vendor</h2>
          <p>
            Ready to level up your business ? Join us as a vendor! Unleash your
            services, reach more customers, and make your mark. Start your
            vendor journey today!
            <a href="{{route('become.vendor')}}" class="underline">Click Here</a> to register as a vendor
          </p>
        </div>
      </div>
    </div>
    @include('pre_launch_layout.footer')
    <script>
        let spin = document.getElementById('noteSpin');
        let notifyme = document.getElementById('notifyme');

        const notifyUSer = async (event) => {
            event.preventDefault();
            spin.style.display = "";
            notifyme.style.display = "none";
            let email = document.getElementById('email').value;
            await fetch(`/notify/user/${email}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                    spin.style.display = "none";
                    notifyme.style.display = "";
                }
                return response.json();
            })
            .then(data => {
                spin.style.display = "none";
                notifyme.style.display = "";
                if(data.success==true){
                    document.getElementById('myForm').reset();
                }
                alert(data.data);
                // Handle success response from the server
            })
            .catch(error => {
                spin.style.display = "none";
                notifyme.style.display = "";
                // Handle error
            });
            
        }
    </script>
  </body>
</html>
