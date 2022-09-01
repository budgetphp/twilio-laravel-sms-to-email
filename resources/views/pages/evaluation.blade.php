<div class="min-height-100vh d-flex align-items-center pt-23 pt-md-26 pt-lg-30 pb-8 pb-md-12 pb-lg-23">
  <div class="container">
    <!-- Section Title -->
    <div class="row justify-content-center">
      <div class="col-xl-12">
        <div class="mb-10 mb-lg-18 text-center" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
          <h2 class="font-size-11 mb-7">Website Evalution</h2>
          <p class="font-size-7 mb-0">Fill out the form below to request your free website evalution.</p>
        </div>
      </div>
    </div>
    <!-- End Section Title -->
    <!-- Contact Form -->
    <div class="row justify-content-center">
      <div class="col-12">

        <!-- contact details -->
        <div class="pt-12 pb-10 max-w-536 mx-auto">
       

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
  function setResponse(response) {
    document.getElementById('captcha-response').value = response;
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


            <!-- Domain -->
            <div class="form-group mb-7 position-relative">
              <input gcaptcha-execute="yes" type="text" name="domain" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 font-size-5 border-default-color" placeholder="Website" id="domain" value="" required>
            </div>







            <input type="hidden" id="captcha-response" name="captcha-response" />
            <div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>


            <div class="button">
              <button type="submit" class="btn btn-blue-3 h-55 w-100 rounded-4 quote-form">Send</button>
            </div>
 
            <p class="d-block mt-6 font-size-3 mb-0 text-bali-gray letter-spacing-normal">* We do not provide free website evaluations for provider builder websites like Wix, Shopify and other website builder providers, you must own your hosted website and have full access to its underlying code.</p>

            <div class="form-result alert">
              <div class="content"></div>
            </div>

            <input type="hidden" class="form-control" name="subject" value="New Website Evaluation Request">
            <input type="hidden" value="" name="user_id" id="user_id">
            <input type="hidden" value="" name="currency" id="currency">
            <input type="hidden" value="" name="budget" id="budget">
            <input type="hidden" value="php-developer" name="pageslug" id="pageslug">
            <input type="hidden" name="message" id="message" value="Website evaluation request">


            <input type="hidden" value="<?php echo Request::ip(); ?>" name="ip_address" id="ip_address">

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

            <div class="form-response"></div>
            <div class="cs-notifications">
              <div class="cs-notifications-content"></div>
            </div><!-- .cs-notifications end -->

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@component('components.category.category1')
@endcomponent
@component('components.footer.footer2')
@endcomponent