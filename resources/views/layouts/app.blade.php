
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }} </title>
  <link rel="shortcut icon" href="{{env('APP_CDN_URL')}}/assets/favicon/favicon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/css/bootstrap.css">
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/fonts/typography-font/typo.css">
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/fixityv1/css/main.css">
  <!-- Custom stylesheet -->
</head>

<body data-theme="light">
  <div class="site-wrapper overflow-hidden ">
 
    <!-- Header Area -->
    <header class="site-header site-header--absolute pt-13 pt-lg-11">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <!-- Brand Logo-->
          <div class="brand-logo mx-auto text-center">
            <a class="" href="{{env('APP_URL')}}/">
                <!-- light version logo (logo must be black)-->
                <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-dark-color.svg" alt="" class="light-version-logo" style="max-width:188px;height:auto;">
              <!-- Dark version logo (logo must be White)-->
              <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" alt="" class="dark-version-logo">
            </a>
          </div>
          
        </div>
      </div>
    </header>
    <!-- End Header Area -->
    <div class="min-height-100vh d-flex align-items-center pt-15 pb-13 pt-lg-32 pb-lg-27 bg-default-3">
    @yield('content')
   
    </div>
  </div>
  <!-- Vendor Scripts -->
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/js/vendor.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/aos/aos.min.js"></script>
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/slick/slick.min.js"></script>
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/counter-up/jquery.waypoints.min.js"></script>
  <!-- Activation Script -->
  <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/js/custom.js"></script>
</body>

</html>






 