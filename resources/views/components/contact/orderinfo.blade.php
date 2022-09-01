<script type="text/javascript">
  window.onload = function() {
    OpenBootstrapPopup();
  };

  function OpenBootstrapPopup() {
    $("#exampleModal").modal('show');
  }
</script>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Finish setup of order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


        <script src="https://www.google.com/recaptcha/api.js" async defer></script>


        <script>
          var onloadCallback = function() {
            grecaptcha.execute();
          };

          function setResponse(response) {
            document.getElementById('captcha-response2').value = response;

          }

          function validate(event) {

            grecaptcha.execute();

          }

          function onload() {

            validate;

            event.preventDefault();
            if (!document.getElementById('projectdomain').value) {
              alert("You must add text to the required field");
            } else {
              grecaptcha.execute();
            }

          }
        </script>


        <form id="form-cta-subscribe-2" action="{{env('APP_URL')}}/contact" method="POST" enctype="multipart/form-data" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true" data-quoteform="quote-form">
          <input type="hidden" id="captcha-response2" name="captcha-response">

          {{ csrf_field() }}
          {{ method_field('POST') }}


          <input type="hidden" id="name" value="{{ Session::get('name') }}" name="name" />
          <input type="hidden" id="email" value="{{ Session::get('email') }}" name="email" />



        <?php $email = session()->get('email'); if  (App\Http\Controllers\ContactController::emailExsists($email) == 'false') {   ?>
          <div class="form-group mb-7 position-relative">

            <input type="password" id="password" value="" name="password" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Please Enter a Password" data-error="Password field is required" required />
          </div>

          <div class="form-group mb-7 position-relative">

            <input type="password" id="password-confirm" value="" name="password_confirmation" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Please Confirm Password" data-error="Password field is required" required />
          </div>

        <?php } ?>
          <div class="form-group mb-7 position-relative">

            <input type="input" id="projectdomain" value="" name="projectdomain" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Please Enter Domain Name" data-error="Domain field is required" required />
          </div>

          <div class="form-group mb-7 position-relative">

            <input type="input" id="phone" value="" name="phone" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Please Enter Contact Phone Number" data-error="Phone field is required" required />

          </div>

          <!-- Message -->

          <input type="hidden" gcaptcha-execute="yes" name="message" class="form-control form-control-lg bg-white rounded-5 text-dark-cloud text-placeholder-bali-gray pl-7 pt-7 font-size-5 border-default-color" placeholder="Description" id="message" data-error="Description field is required" required value="{{ Session::get('stripeid') }}">





          <div class="form-result alert">
            <div class="content"></div>
          </div>

          <input type="hidden" class="form-control" name="subject" value="New Order">
          <input type="hidden" value="" name="user_id" id="user_id">
          <input type="hidden" value="" name="currency" id="currency">
          <input type="hidden" value="" name="budget" id="budget">
          <input type="hidden" value="php-developer" name="pageslug" id="pageslug">

          <input type="hidden" value="<?php echo Request::ip(); ?>" name="ip_address" id="ip_address">



          <div class="button mb-7">
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



      </div>

    </div>
  </div>
</div>