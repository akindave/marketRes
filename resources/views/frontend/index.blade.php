@extends('frontend.master_dashboard')
@section('main')

@section('title')
    Home Easy Multi Vendor Shop
@endsection
    <main>
     @include('frontend.home.home_slider')

        <!--End hero slider-->
     @include('frontend.home.company_feature')

     @include('frontend.home.home_features_category')
     
     @include('frontend.home.home_new_product')
     
     @include('frontend.home.home_features_product')

     @include('frontend.home.home_shop_list')

     @include('frontend.home.home_sale')

     @include('frontend.home.home_big_banner')

     @include('frontend.home.home_analytic')
        <!--End category slider-->
     {{--  @include('frontend.home.home_banner')  --}}
        <!--End banners-->


{{--  @include('frontend.home.home_vendor_list')  --}}

 <!--End Vendor List -->

@endsection