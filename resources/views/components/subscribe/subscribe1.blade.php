<!-- ==== Content One Area ==== -->
<div class="pt-21 pt-md-24 pt-lg-32 pb-15 pb-md-19 pb-lg-30">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <!-- Image Section -->
      <div class="col-xl-6 col-lg-5 col-md-7 col-xs-10 d-none d-lg-block d-xl-block">
        <div class="l1-content-image-group-1 mb-10 mb-lg-0" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          <img class="w-100" src="{{env('APP_URL')}}/assets/Budgetphp-icon-dark.svg" alt="">
          <div class="abs-img-1">
            <img class="w-100" src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/home-1/png/dot-bg.png" alt="">
          </div>
          <!-- l1-content-card-1 Image Section -->
          <div class="l1-content-card-1 bg-white shadow-3" data-aos="zoom-in-left" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
            <div class="abs-card-icon">
              <span class="bg-gradient-1 circle-73"><img src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/svg/email.svg" alt=""></span>
            </div>
            <div class="abs-content pl-10 pr-10 pt-9">
              <div class="border-bottom-dotted mb-8">
                <h5 class="font-size-8 font-weight-medium mb-0 text-dark-cloud">New Sale Alert!</h5>
                <p class="font-size-4 mb-7 text-bali-gray">33 mins ago</p>
              </div>
              <div class="media align-items-center mb-7">
                <div class="mr-5 mt-n4">
                  <img class="" src="{{env('APP_URL')}}/assets/Robo.svg" alt="" style="width:66px;">
                </div>
                <div class="company-info">
                  <h6 class="font-size-6 font-weight-normal mb-0 text-dark-cloud lineo">Inbox</h6>
                  <p class="font-size-6 font-weight-bold text-dark-cloud mb-0">New Sale Alert!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Content Section -->
      <div class="col-xl-6 col-lg-7 col-md-8 col-sm-11">
        <div class="ml-lg-10 ml-xl-12 mt-lg-n20 pr-lg-10 pr-xl-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
          <h6 class="font-size-5 text-light-orange mb-5 mb-lg-9 font-weight-normal">Join over 3,000+ subscribers
          </h6>
          <h3 class="font-size-11 mb-5 mb-lg-8 font-weight-medium pr-sm-20 pr-md-16 pr-lg-0">Newsletter</h3>
          <p class="font-size-6 mb-0">Sign up for our newsletter and get notified via email when we have discount specials running. </p>
          <!-- newsletter -->
          <div class="mt-8 mt-lg-16" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="shadow-3 bg-white rounded-0">

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
  function setResponse(response) {
    document.getElementById('captcha-response').value = response;
  }
</script>
              <form action="{{env('APP_URL')}}/subscribersaction" class="subscribe-form" method="POST" data-pixsaas="newsletter-subscribe">
                {{ csrf_field() }}
                <div class="subscribe-inline-form">
                  <div class="form-group">
                    <label for="mail"><i class="icon icon-email-84 mb-0 text-bali-gray font-weight-bold"></i></label>
                    <input gcaptcha-execute="yes" id="mail" type="email" name="email" class="form-control" value="@if (Auth::check()) {{ Auth::user()->email }}  @endif" placeholder="Enter your email" required>


                  </div>
                  <input type="hidden" name="is_subscribed" class="" id="newsletter-form-is-subuscribed" value="1">
                  <input type="hidden" name="name" class="form-control" id="newsletter-form-email" value="@if (Auth::check()) {{ Auth::user()->name }} @else Subscriber @endif">
                  <input type="hidden" id="captcha-response" name="captcha-response" />
                  <div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>

                  <button class="btn btn-primary" type="submit">Subscribe</button>
 

                  <div class="form-result alert">
                    <div class="content"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End newsletter -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ==== End Content One Area ==== -->