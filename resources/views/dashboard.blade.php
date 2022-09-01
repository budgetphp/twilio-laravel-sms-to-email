 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Dashboard </title>
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

     <script src="https://www.google.com/recaptcha/api.js" async defer></script>

     @livewireStyles

     <script>
         var onloadCallback = function() {
             grecaptcha.execute();
         };

         function setResponse(response) {
             document.getElementById('captcha-response2').value = response;
             document.getElementById('captcha-response').value = response;

         }

         function validate(event) {
             event.preventDefault();
             if (!document.getElementById('message').value) {
                 alert("You must add text to the required field");
             } else {
                 grecaptcha.execute();
             }
         }

         function onload() {
             var element = document.getElementById('submit2');
             var element = document.getElementById('submit-stripe');
             element.onclick = validate;
         }
     </script>

 </head>

 <body data-theme="light">

     <div class="site-wrapper overflow-hidden ">
         <!-- Header Area -->
         <header class="site-header site-header--absolute pt-13 pt-lg-11 px-14 px-xl-24 dark-mode-texts">
             <div class="container">
                 <div class="d-flex justify-content-between align-items-center flex-wrap">
                     <!-- Brand Logo-->
                     <div class="brand-logo mx-auto mx-sm-0">
                         <a href="{{env('APP_URL')}}/en/lp2/web-development-subscriptions">
                             <!-- light version logo (logo must be black)-->
                             <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" alt="" class="light-version-logo" style="width:177px;height:auto;">
                             <!-- Dark version logo (logo must be White)-->
                             <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" alt="" class="dark-version-logo" style="width:177px;height:auto;">
                         </a>
                     </div>
                     <div class="header-social-share  d-none d-sm-block">
                         <ul class="list-unstyled d-flex align-items-center text-right mb-0">
                             <li>

                                 <a class="heading-default-color ml-10 gr-text-blue-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                     <i class="fas fa-sign-out-alt"></i>
                                     Logout
                                 </a>
                                 <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>

                                 </a>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>
         </header>
         <!-- End Header Area -->
         <div class="min-height-100vh d-flex align-items-center bg-dark-cloud pt-24 pt-md-27 pt-lg-25">
             <div class="container">
                 <div class="row no-gutters align-items-center justify-content-center">
                     <div class="col-lg-6 col-md-9 col-xs-11 order-2 order-lg-1">
                         <div class="pt-9 pt-sm-13 pb-10 pb-md-15 dark-mode-texts pr-md-11 pr-lg-0">
                             <div class="mb-11">
                                 @if (!Session::has('success'))

                                 <h2 class="font-size-11 mb-8 pr-sm-10 pr-md-14 pr-lg-0 pr-xl-10" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">Dashboard </h2>
                                 <p class="font-size-7 mb-0 pr-xl-15" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Welcome {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                                     to your dashboard.</p>
                                 <div>
                                     <?php $sumtotal=  App\Http\Controllers\HoursController::show_orders(Auth::user()->email) - App\Http\Controllers\HoursController::show_invoices(Auth::user()->email); ?>
                                     <span class="badge badge-light">
                                         <h2 class="text-gray-chateau mb-0 pb-0">{{ App\Http\Controllers\HoursController::show_orders(Auth::user()->email) }}</h2><sup style="top: -1em; !important"><br>Purchased Hours</sup>
                                     </span> <span class="badge badge-light">
                                         <h2 class="text-gray-chateau mb-0 pb-0">{{ $sumtotal }}</h3><sup style="top: -1em; !important"><br>Hours Available</sup>
                                     </span> <span class="badge badge-light">
                                         <h2 class="text-gray-chateau mb-0 pb-0">{{App\Http\Controllers\HoursController::show_invoices(Auth::user()->email) }}</h3><sup style="top: -1em; !important"><br>Hours Used</sup>
                                     </span>

                                 </div>

                                 <p class="font-size-5 mt-5 text-gray-chateau aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true"> Add more one-off non reoccuring hours to your hours balance.</p>
                                 <h4 class=""><span class="badge badge-light"><a href="{{env('APP_URL')}}/en/pay/{{ strtolower(currency()->getUserCurrency()) }}/<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 5;

                                                                                                                                                                    ?>/web-development-5-hour-bundle">5 hours</a></span> <span class="badge badge-light"><a href="{{env('APP_URL')}}/en/pay/{{ strtolower(currency()->getUserCurrency()) }}/<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 10;

                                                                                                                                                                                                                                                                                                                                                ?>/web-development-10-hour-bundle">10 hours</a></span> <span class="badge badge-light"><a href="{{env('APP_URL')}}/en/pay/{{ strtolower(currency()->getUserCurrency()) }}/<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 20;

                                                                                                                                                                                                                                                                                                                                                        ?>/web-development-20-hour-bundle">20 hours</a></span> <span class="badge badge-light"><a href="{{env('APP_URL')}}/en/pay/{{ strtolower(currency()->getUserCurrency()) }}/<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 40;

                                                                                                                                                                                                                                                                                                                                                        ?>/web-development-40-hour-bundle">40 hours</a></span> <span class="badge badge-light"><a href="{{env('APP_URL')}}/en/pay/{{ strtolower(currency()->getUserCurrency()) }}/<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 80;

                                                                                                                                                                                                                                                                                                                                                        ?>/web-development-80-hour-bundle">80 hours</a></span></h4>


                                 @endif

                             </div>
                             <div class="pr-lg-17 pr-xl-25" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">



                                 <div class="max-w-435">



                                     <button class="btn btn-blue-3 w-100 h-55 rounded-4 mb-10 bsmodal" type="submit"> Post Issue</button>


                                 </div>

                                 @if(App\Http\Controllers\StripeController::is_subscribed()=='true')

      @endif
                                 <form role="form" action="{{env('APP_URL')}}/stripe-dashboard" method="post" class="validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="stripe-dashboard">
                                     @csrf

                                     <div class="max-w-435">

                                         <input type="hidden" id="name" value="{{ Auth::user()->name }}" name="name" />
                                         <input type="hidden" id="email" value="{{ Auth::user()->email }}" name="email" />

                                         <input type="hidden" id="captcha-response" name="captcha-response" />





                                         <button class="btn btn-blue-3 w-100 h-55 rounded-4 " type="submit" id="submit-stripe"> Subscription Billing Settings</button>

                                         <p class="font-size-5 mt-5 text-gray-chateau" data-aos="fade-up" data-aos-duration="900" data-aos-once="true">Use billing settings to update your card information, review subscrption invoices and update/change subscriptions. To cancel your subscription please contact us. </p>
                                     </div>

                                 </form>



                                 @if(Session::has('payload'))
                                 <div class="mt-3 alert alert-danger" role="alert">
                                     <b> {{ Session::get('payload')}}</b>
                                 </div>
                                 {{ Session::forget('payload') }}
                                 @endif
                           


                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-9 col-xs-11 order-1 order-lg-2">
                         <div class=" pt-8 pt-lg-0" data-aos="fade-left" data-aos-duration="300" data-aos-once="true">



                             <p class="font-size-7 mb-0 pr-xl-15 aos-init aos-animate">Issues</p>


                             <livewire:issues>





                         </div>
                     </div>
                 </div>


                 <div class="class=" row no-gutters align-items-center justify-content-center">

                     <div class="col-lg-12 col-md-12 col-xs-12 pl-0 pr-0 pb-10">
                         <div class=" pt-8 pt-lg-0" data-aos="fade-left" data-aos-duration="300" data-aos-once="true">





                             <livewire:show-charges>





                         </div>
                     </div>

                 </div>

             </div>
         </div>
     </div>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">New Task</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>

                 <div class="modal-body">
                     @component('components.contact.contact')
                     @endcomponent
                 </div>

             </div>
         </div>
     </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js" integrity="sha512-3fMsI1vtU2e/tVxZORSEeuMhXnT9By80xlmXlsOku7hNwZSHJjwcOBpmy+uu+fyWwGCLkMvdVbHkeoXdAzBv+w==" crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
     <style>
         .hide {
             display: none;
         }

         .alert-success p {
             color: #004300 !important;

         }

         .box-center img {
             max-width: 33px;
             height: auto;


         }
     </style>


     <!-- Vendor Scripts -->
     <!-- Vendor Scripts -->
     <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/js/vendor.min.js"></script>
     <!-- Plugin's Scripts -->
     <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/aos/aos.min.js"></script>
     <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/slick/slick.min.js"></script>
     <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/counter-up/jquery.counterup.min.js"></script>
     <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/counter-up/jquery.waypoints.min.js"></script>

     @livewireScripts



     <!-- Activation Script -->
     <script src="{{env('APP_URL')}}/assets/fixityv1/js/custom.js"></script>

     @component('components.tracking.tracking')
     @endcomponent

     @component('components.trustedsite.trustedsite')
     @endcomponent

     @component('components.livechat.livechat')
     @endcomponent

 </body>

 </html>