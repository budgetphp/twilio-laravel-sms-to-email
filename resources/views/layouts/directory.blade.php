
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Web App Developer - BudgetPhp </title>
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
  <link rel="stylesheet" href="{{env('APP_URL_CDN')}}/assets/fixityv1/css/main.css">
  <!-- Custom stylesheet -->
</head>

<body data-theme="light">
  <div class="site-wrapper overflow-hidden ">
    <div id="loadingx" style="display:none;">
      <img src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/preloader.gif" alt="">
    </div>
    <!-- Header Area -->

@component('components.nav.nav1')
@endcomponent

@component('components.hero.hero1')
@endcomponent

@component('components.brands.brands1')
@endcomponent
  
@component('components.services.services1')
@endcomponent
  
@component('components.jobcard.jobcard1')
@endcomponent
 

@component('components.hero.heroquote2')
    @endcomponent
    @component('components.hero.heroquote3')
    @endcomponent

@component('components.subscribe.subscribe1')
@endcomponent
<!--
@component('components.blog.blog1')
@endcomponent
-->

@component('components.footer.footer1')
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

  @component('components.trustedsite.trustedsite')
@endcomponent

@component('components.livechat.livechat')
@endcomponent

</body>

</html>