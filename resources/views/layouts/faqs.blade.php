
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>FAQs | BudgetPhp </title>
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

    @component('components.nav.nav2')
@endcomponent

 

 
 
<?php
// dd($faqs);
?>
<div class="bg-default-1  pb-13 pb-md-18 pb-lg-25" style="" id="faqs">
  <div class="container">
    <!-- Section Title -->
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-9">
        <div class="text-center mt-33 mb-33 mb-lg-19">
          <h2 class="font-size-9 mb-0">Frequently Asked Questions</h2>
          </p>
          <!-- Button  -->
          <div class="text-center pt-lg-3 pb-lg-3 aos-init" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
            <p class="font-size-6 mb-0">Have a question about our service?<a class="text-blue-3 btn-link-with-underline ml-5" href="{{env('APP_URL')}}/contact">Contact us</a></p>
          </div>
          <!-- Button End -->

        </div>
      </div>
    </div>
    <p>

      <!-- End Section Title -->
      <!-- Faqs -->
      <!-- Faqs -->
      <div class="row justify-content-center" id="">

        @foreach($faqs as $faq)

        <!-- Single Faq -->
        <div class="col-lg-6 col-md-10">
          <div class="d-flex mb-10 mb-lg-17 aos-init aos-animate" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
            <div class="mr-6">
              <div class="bg-light-orange circle-28 text-white mt-1">
                <i class="fa fa-question"></i>
              </div>
            </div>
            <div class="">
              <h4 class="font-size-7 mb-7">{{ $faq['Title']}}</h4>
              <p class="font-size-5 pr-md-10 pr-lg-0 mb-0">{{ $faq['Description']}}</p>
            </div>
          </div>
        </div>
        <!-- End Single Faq -->
        @endforeach






      </div>

  </div>
</div>



  

    @component('components.footer.footer2')
 @endcomponent


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

  @component('components.tracking.tracking')
@endcomponent

@component('components.trustedsite.trustedsite')
@endcomponent

@component('components.livechat.livechat')
@endcomponent

</body>

</html>