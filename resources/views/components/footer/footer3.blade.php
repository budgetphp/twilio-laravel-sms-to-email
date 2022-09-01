<!-- Footer Area -->
<div class="pt-13 pt-lg-25 pb-5 pb-lg-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="row">
          <!-- Single Widgets -->
          <div class="col-xs-6">
            <div class="mb-10 mb-lg-0">
              <h4 class="font-size-6 font-weight-medium mb-10">Full-Stack Development</h4>
              <ul class="list-unstyled">

                <li class="mb-6">
                  <a class="font-size-5 text-default-color" href="{{env('APP_URL')}}/en/subscription">Pricing</a>
                </li>
                <li class="mb-6">
                  <a class="font-size-5 text-default-color" href="{{env('APP_URL')}}/en/quote">Request Estimate</a>
                </li>
                <li class="mb-6">
                  <a class="font-size-5 text-default-color" href="{{env('APP_URL')}}/en/evaluation">Free Evaluation</a>
                </li>
                <li class="mb-6">
                  <a class="font-size-5 text-default-color" href="{{env('APP_URL')}}/en/contact">Contact</a>
                </li>

              </ul>
            </div>
          </div>
          <!-- End Single Widgets -->
          <!-- Single Widgets -->
          <div class="col-xs-6">
            <div class="mb-10 mb-lg-0">
              <h4 class="font-size-6 font-weight-medium mb-10">&nbsp;</h4>
              <ul class="list-unstyled">

                <li class="mb-6">
                  <a class="font-size-5 text-default-color" href="{{env('APP_URL')}}/login">Dashboard</a>
                </li>
                <li class="mb-6">
                  <a class="font-size-5 text-default-color" href="{{env('APP_URL')}}/en/terms">Terms</a>
                </li>
                <li class="mb-6">
                  <a class="font-size-5 text-default-color" href="{{env('APP_URL')}}/en/privacy">Privacy</a>
                </li>

              </ul>
            </div>
          </div>
          <!-- End Single Widgets -->
          <!-- Single Widgets -->
          <div class="col-xs-4">
            <div class="mb-10 mb-lg-0">
              <!--   <h4 class="font-size-6 font-weight-medium mb-10">Legal</h4>
                  <ul class="list-unstyled">
                   
                    <li class="mb-6">
                      <a class="font-size-5 text-default-color" href="#">Privacy policy</a>
                    </li>
                    <li class="mb-6">
                      <a class="font-size-5 text-default-color" href="#">Career Blog</a>
                    </li>
                  </ul> -->
            </div>
          </div>
          <!-- End Single Widgets -->
        </div>
      </div>
      <div class="col-lg-5 col-md-8">
        <div class="mb-9">
          <h4 class="font-size-6 font-weight-medium mb-8">Subscribe to Our Newsletter</h4>
          <p class="font-size-5 line-height-28 pr-xs-20 pr-md-13 pr-lg-0">Sign up to receive news, discounts and savings.</p>
        </div>
        <div class="mb-0 mr-xl-9">
          <div class="shadow-3 bg-white rounded-4">
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>


            <script>
       

              function setResponse(response) {
                document.getElementById('captcha-response').value = response;
              }
            </script>

            <form id="subscribe" action="{{env('APP_URL')}}/subscribersaction" class="subscribe-form" method="POST" data-pixsaas="newsletter-subscribe">
              {{ csrf_field() }}
              <div class="subscribe-inline-form-2">
                <div class="form-group">
                  <label for="mail"><i class="icon icon-email-84 mb-0 ml-10"></i></label>
                  <input id="gcaptcha-execute" gcaptcha-execute="yes" name="email" value="@if (Auth::check()) {{ Auth::user()->email }} @endif" type="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <input type="hidden" name="is_subscribed" class="" id="newsletter-form-is-subuscribed" value="1">
                <input type="hidden" name="name" class="form-control" id="newsletter-form-email" value="@if (Auth::check()) {{ Auth::user()->name }} @else Subscriber @endif">
                <input type="hidden" id="captcha-response" name="captcha-response" />

                <div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>


                <button class="btn btn-dodger-blue-2 rounded-5" type="submit" >Subscribe</button>


              </div>
              <div class="form-result alert">
                <div class="content"></div>
              </div>
            </form>

          </div>
        </div>


      </div>
    </div>


    <div class="row align-items-center pt-3 pt-sm-10 pt-xs-10 pt-lg-22">
          <div class="col-md-7 col-sm-10 col-xs-10 text-center text-md-left">
            <div class="copyright mb-0">
              <p class="mb-0 font-size-3 text-stone">© BudgetPHP LLC 2022 Pittsburg PA USA, All Rights Reserved. +1(888)801-7110 info@budgetphp.copm</p>
            </div>
          </div>
          <div class="col-md-5 col-sm-10 col-xs-10 text-center text-md-right">
            <div class="footer-right mb-0">
              <p class="mb-0 font-size-3 text-stone"> Powered by <a href="https://laravel.com/" target="_BLANK"><img src="https://cdn.budgetphp.com/assets/brands-color/Logo.min.svg" style="display:inline-block;width:66px"></a></p>
            </div>
          </div>
        </div>



  </div>
</div>
<!-- End Footer Area -->


