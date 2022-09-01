

<form id="form-cta-subscribe-2" action="{{env('APP_URL')}}/contact" method="POST" enctype="multipart/form-data" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" data-quoteform="quote-form">

  {{ csrf_field() }}
  {{ method_field('POST') }}


  <input type="hidden" id="name" value="{{ Auth::user()->name }}" name="name" />
  <input type="hidden" id="email" value="{{ Auth::user()->email }}" name="email" />





  <!-- Message -->
  <div class="form-group mb-7 position-relative">
    <textarea  gcaptcha-execute="yes" name="message" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Description" id="message" data-error="Description field is required" required></textarea>
  </div>

  <!-- Upload -->
  <div class="form-group mb-7 position-relative">
    <input type="file" name="upload" class="" id="upload">
  </div>


  <div class="form-result alert">
    <div class="content"></div>
  </div>

  <input type="hidden" class="form-control" name="subject" value="New Task/Issue">
  <input type="hidden" value="" name="user_id" id="user_id">
  <input type="hidden" value="" name="currency" id="currency">
  <input type="hidden" value="" name="budget" id="budget">
  <input type="hidden" value="php-developer" name="pageslug" id="pageslug">

  <input type="hidden" value="<?php echo Request::ip(); ?>" name="ip_address" id="ip_address">
  <input type="hidden" id="captcha-response2" name="captcha-response">



  <div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>

  <div class="button">
    <button type="submit" class="btn btn-blue-3 h-55 w-100 rounded-4 quote-form" id="submit2">Send</button>
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

  <div class="form-response"></div>
  <div class="cs-notifications">
    <div class="cs-notifications-content"></div>
  </div><!-- .cs-notifications end -->

</form>