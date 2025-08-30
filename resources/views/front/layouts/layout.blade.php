<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  @php
$currentslug = Route::current()->getName();
$seodata = App\Helpers\Helper::getSEOData($currentslug);
@endphp      
    <meta charset="UTF-8">

  <meta name="keywords" content="{!! $seodata->meta_keyword ??  'Overseas' !!}">
    <meta name="description" content="{!! $seodata->meta_description ??  'Overseas' !!}">



    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
       {!! $seodata->meta_title ??  '' !!} | {{ config('app.name', 'Overseas Consultant') }}
    </title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('before-styles')
    @include('front.layouts.includes.style')
    @stack('after-styles')
    <style>
       .btn-refresh{
        background-color:  #222222;
       }
       .btn-refresh i
       {
        color: #fff;
       }
    </style>
    <!--=====================================
                CSS LINK PART END
    =======================================-->
     {!! $seodata->scripts_text ??  '' !!}
     @stack('require-script')
</head>
<body>
    
    @stack('require-body-script')
    <!-- page start -->
    <div class="page">
   
        @include('front.layouts.includes.header2')
        <!-- START decfoxSlider 1 REVOLUTION SLIDER 6.5.9 -->
         @include('front.layouts.includes.modal')
        @yield('content')
        @include('front.layouts.includes.footer')
        <!-- back-to-top start -->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- back-to-top end -->

    </div><!-- page end -->
    @include('front.layouts.includes.script')
    @stack('after-scripts')  
    
</body>


</html?>






