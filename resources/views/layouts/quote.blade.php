
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Quote Request | BudgetPhp </title>
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
    <div id="loadingx" style="display:none;">
      <img src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/preloader.gif" alt="">
    </div>
    <!-- Header Area -->

  
        <!-- Header Area -->
        <header class="site-header site-header--absolute pt-13 pt-lg-11 px-14 px-xl-24">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <!-- Brand Logo-->
                    <div class="brand-logo mx-auto mx-sm-0">
                        
                            <!-- light version logo (logo must be black)-->
                            <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-dark-color.svg" alt="" class="dark-version-logo" style="width:188px;height:auto;">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-dark-color.svg" alt="" class=" light-version-logo" style="width:188px;height:auto;">
                       
                    </div>

                </div>
            </div>
        </header>
        <!-- End Header Area -->
        <div class="min-height-100vh d-flex align-items-center bg-default-1">
            <div class="container">
                <div class="row no-gutters align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9 col-xs-11 order-2 order-lg-1">
                        <div class=" pr-md-11 pr-lg-0">
                         
                        @component('pages.quote')
@endcomponent



                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 col-xs-11 order-1 order-lg-2 d-none d-lg-block d-xl-block">
                        <div class="text-right pt-8 pt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-duration="300" data-aos-once="true">
      
                            <img src="{{env('APP_CDN_URL')}}/assets/Robo-trans.svg" alt="php" style="width:100%;height:auto;">
                      


                        </div>
                    </div>
                </div>
            </div>
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
  @component('components.trustedsite.trustedsite')
@endcomponent

@component('components.livechat.livechat')
@endcomponent


  @component('components.tracking.tracking')
@endcomponent

 
</body>

</html>