<div class="min-height-100vh d-flex align-items-center pt-23 pt-md-26 pt-lg-30 pb-8 pb-md-12 pb-lg-23">
  <div class="container">




    <?php // echo request()->ip();

    // echo $_SERVER["HTTP_X_FORWARDED_FOR"];



    ?>
    <!-- Section Title -->
    <div class="row justify-content-center">
      <div class="col-xl-12">
        <div class="mb-10 mb-lg-18 text-center" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
          <h2 class="font-size-11 mb-7">Contact Us</h2>
         </div>
      </div>
    </div>
    <!-- End Section Title -->

    <!-- Contact Form -->
    <div class="row justify-content-center">
      <div class="col-12">
        <!-- contact details -->
        <div class="top-contact-info bg-default-1 max-w-540 mx-auto py-10 px-13 rounded-10" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">

          <h4 class="font-size-7 text-default-color font-weight-bold mb-0">Telegram</h4>
          <p>
            <i class="fab fa-telegram  heading-default-color float-right fa-4x"></i>
            <span class="font-size-7 font-weight-bold heading-default-color"><a href="tg://resolve?domain=budgetphp">@budgetphp</a></span>
          </p>
          <hr style="margin-top:66px;clear:both;">


          <div class="row">



            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="border-md-right border-cornflower-blue">
                <h4 class="font-size-5 text-default-color font-weight-normal mb-0">Call us</h4>
                <span class="font-size-7 font-weight-bold heading-default-color">+1(888) 801-7110</span>
              </div>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="pl-1 pr-3">
                <h4 class="font-size-5 text-default-color font-weight-normal mb-0">Email us</h4>
                <a class="font-size-7 font-weight-bold heading-default-color" href="mailto:info@budgetphp.com">info@budgetphp.com</a>
              </div>
            </div>
          </div>
        </div>
        <!-- contact details -->

            <!-- Section Title -->
    <div class="row justify-content-center">
      <div class="col-xl-12">
        <div class="mt-10 mt-lg-18 text-center" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
           <p class="font-size-7 mb-0">Fill out the contact form below to send us a message.</p>
        </div>
      </div>
    </div>
    <!-- End Section Title -->



        <div class="pt-12 pb-10 max-w-536 mx-auto">

          <script src="https://www.google.com/recaptcha/api.js" async defer></script>


          <script>

 
var onloadCallback = function() {
   grecaptcha.execute();
};

function setResponse(response) { 
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
     var element = document.getElementById('submit');
     element.onclick = validate;
   }
 
 

 

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







            <!-- Message -->
            <div class="form-group mb-7 position-relative">
              <textarea gcaptcha-execute="yes" name="message" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Message" id="message" data-error="Message field is required" required></textarea>
            </div>




            <div class="form-result alert">
              <div class="content"></div>
            </div>

            <input type="hidden" class="form-control" name="subject" value="New Contact Request">
            <input type="hidden" value="" name="user_id" id="user_id">
            <input type="hidden" value="" name="currency" id="currency">
            <input type="hidden" value="" name="budget" id="budget">
            <input type="hidden" value="php-developer" name="pageslug" id="pageslug">

            <input type="hidden" value="<?php echo Request::ip(); ?>" name="ip_address" id="ip_address">
            <input type="hidden" id="captcha-response" name="captcha-response" />
            <div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>



            <div class="button">
              <button type="submit" class="btn btn-blue-3 h-55 w-100 rounded-4 quote-form" id="submit">Send</button>
            </div>

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

            <div class="form-response mt-10"></div>
            <div class="cs-notifications">
              <div class="cs-notifications-content"></div>
            </div><!-- .cs-notifications end -->

          </form>
        </div>
      </div>
    </div>
  </div>
</div>