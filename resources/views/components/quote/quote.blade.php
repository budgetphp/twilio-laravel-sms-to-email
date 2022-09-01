<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
  function setResponse(response) {
    document.getElementById('captcha-response').value = response;
  }
</script>

<!-- Global site tag (gtag.js) - Google Ads: 778019367 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-778019367"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-778019367');
</script>

 
 <form id="form-cta-subscribe-2" action="{{env('APP_URL')}}/contact" method="POST" enctype="multipart/form-data" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" data-quoteform="quote-form">

     {{ csrf_field() }}
     {{ method_field('POST') }}



     <!-- Company Name -->
     <div class="form-group mb-7 position-relative">
         <input type="text" value="@if (Auth::check()) {{ Auth::user()->name }} @endif" name="name" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 font-size-5 border-default-color" placeholder="Name" id="cs2Name" data-error="Name field is required" required>
     </div>
     <!-- Email -->
     <div class="form-group mb-7 position-relative">
         <input type="email" value="@if (Auth::check()) {{ Auth::user()->email }} @endif" name="email" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 font-size-5 border-default-color" placeholder="Email Address" id="cs2Email" data-error="eMail field is required" required>
     </div>

     <!-- Phone -->
     <div class="form-group mb-7 position-relative">
         <input type="text" name="phone" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 font-size-5 border-default-color" placeholder="Phone" id="cs2PhoneNum">
     </div>

     <!-- Domain -->
     <div class="form-group mb-7 position-relative">
         <input type="text" name="domain" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 font-size-5 border-default-color" placeholder="Website" id="domain" value="">
     </div>


     <!-- Upload -->
     <div class="form-group mb-7 position-relative">
         <input type="file" name="upload" class="" id="upload">
     </div>

     <!-- Rate Type -->
     <div class="form-group form-inline">
         <div class="form-check form-check-inline radio-inline radio" style="margin-top:0px !important;">
             <label style="padding-left: 0px !important;" class="form-check-label" for="inlineRadio1">Hourly</label>

             <input style="height:auto  !important;margin-left:5px;position: relative !important;" class="form-check-input" type="radio" name="is_hourly" id="inlineRadio1 inlineRadio" value="1" checked>
         </div>
         <div class="form-check form-check-inline radio-inline radio" style="margin-top:0px !important;">
             <label style="padding-left: 0px !important;" class="form-check-label" for="inlineRadio2">Flat Rate</label>

             <input style="height:auto !important;position: relative !important;margin-left:5px;" class="form-check-input" type="radio" name="is_hourly" id="inlineRadio2 inlineRadio" value="2">
         </div>
         <div class="form-check form-check-inline radio-inline radio" style="margin-top:0px !important;">
             <label style="padding-left: 0px !important;" class="form-check-label" for="inlineRadio2">Unsure</label>

             <input style="height:auto !important;position: relative !important;margin-left:5px;" class="form-check-input" type="radio" name="is_hourly" id="inlineRadio2 inlineRadio" value="3">
         </div>
     </div><!-- .form-group end -->

     <!-- Message -->
     <div class="form-group mb-7 position-relative">
         <textarea gcaptcha-execute="yes" name="message" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Message" id="message" data-error="Message field is required" required></textarea>
     </div>






     <input type="hidden" class="form-control" name="subject" value="New Quote Request">
     <input type="hidden" value="" name="user_id" id="user_id">
     <input type="hidden" value="" name="currency" id="currency">
     <input type="hidden" value="" name="budget" id="budget">
     <input type="hidden" value="php-developer" name="pageslug" id="pageslug">

     <input type="hidden" value="<?php echo Request::ip(); ?>" name="ip_address" id="ip_address">


 

     <input type="hidden" id="captcha-response" name="captcha-response" />


     <style>
         .quote-preloader {
             align-items: center;
             display: flex;
             height: 100vh;
             justify-content: center;
             left: 0;
             position: fixed;
             top: 0;
             transition: opacity 0.3s linear;
             width: 100%;
             z-index: 9999;
         }


         .quote-loader {

             width: 120px;
             height: 120px;
             animation: spin 2s linear infinite;
         }

         @keyframes spin {
             0% {
                 transform: rotate(0deg);
             }

             100% {
                 transform: rotate(360deg);
             }
         }
     </style>

<div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>


     <div class="button">
         <button type="submit" class="btn btn-blue-3 h-55 w-100 rounded-4 quote-form">Send</button>
     </div>
 
     <div class="form-result alert">
         <div class="content"></div>
     </div>

     <div class="form-response"></div>
     <div class="cs-notifications">
         <div class="cs-notifications-content"></div>
     </div><!-- .cs-notifications end -->

   



 </form>

 