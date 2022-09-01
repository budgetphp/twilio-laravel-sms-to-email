<!DOCTYPE html>
<html lang="en">
<?php
$currency = request()->route('currency');
currency()->setUserCurrency($currency);
$currency = strtolower($currency);



$amount = request()->route('amount');

$skillString = request()->route('skill');
$skill = str_replace("-", " ", $skillString);
$skill = ucwords($skill);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order: <?php echo $skill; ?> </title>
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
        <!-- Header Area -->
        <header class="site-header site-header--absolute pt-13 pt-lg-11 px-14 px-xl-24 dark-mode-texts">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <!-- Brand Logo-->
                    <div class="brand-logo mx-auto mx-sm-0">
                        <a href="{{env('APP_URL')}}/subscription">

                            <!-- light version logo (logo must be black)-->
                            <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" alt="" class="light-version-logo" style="width:177px;height:auto;">
                            <!-- Dark version logo (logo must be White)-->
                            <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" alt="" class="dark-version-logo" style="width:177px;height:auto;">
                        </a>
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
                                <h2 class="font-size-11 mb-8 pr-sm-10 pr-md-14 pr-lg-0 pr-xl-10" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">Order: <?php echo $skill; ?></h2>

                                <p class="font-size-7 mb-0 pr-xl-15" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Use this form to pay <b><?php echo currency($amount, 'USD', currency()->getUserCurrency()); ?></b> for web development services in the {{currency()->getUserCurrency()}} currency. </p>
                                @endif
                            </div>
                            <div class="pr-lg-17 pr-xl-25" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">









                                @if (Session::has('success'))


                                <h2 class="font-size-11 mb-8 pr-sm-10 pr-md-14 pr-lg-0 pr-xl-10" data-aos="fade-up" data-aos-duration="300" data-aos-once="true"> Welcome Aboard!</h2>
                                <p class="font-size-7 mb-0 pr-xl-15" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">A receipt was just emailed to you. </p>

                                <div class="alert alert-success ">
                                    <p>{{ Session::get('success') }}</p>
                                </div>




                                <p class="mt-5">Here are a few ways to post tasks/issues with us.</p>

                                <ul>
                                    <li>Message us on Telegram <a href="tg://resolve?domain=budgetphp" target="BLANK">@budgetphp</a></li>
                                    <li>You can send an email to <a class="" href="mailto:info@budgetphp.com">info@budgetphp.com</a></li>
                                    <li>You can post a task/issue in the dashboard</li>
                                </ul>

                                <p class="mt-5">You can manage your subscription and payment details from the dashboard as well as see how many hours have been spent on your projects.</p>




                                <a class="btn btn-blue-3 w-100 h-55 rounded-4 " href="{{env('APP_URL')}}/home"> Visit Dashboard</a>




                                @endif



                                @if (!Session::has('success'))

                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
    var onloadCallback = function() {
        grecaptcha.execute();
    };

    function setResponse(response) {
        document.getElementById('captcha-response').value = response;

    }

    function validate(event) {

        grecaptcha.execute();

    }

    function onload() {

        validate;


    }
</script>
                                <form role="form" action="{{env('APP_URL')}}/stripe-payment" method="post" class="validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                    @csrf
                                    <div class='hide error form-group mb-7'>
                                        <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                    </div>

                                    <div class='form-group mb-7'>

                                        <input value="@if (Auth::check()) {{ Auth::user()->name }} @endif" class='form-control form-control-lg bg-white rounded-4 text-bali-gray pl-8 font-size-5' type='text' placeholder="Name on Card" name="name">
                                    </div>

                                    <div class="form-group mb-7 card required">

                                        <input value="" autocomplete='off' class='card-num form-control form-control-lg bg-white rounded-4 text-bali-gray pl-8 font-size-5' type='text' placeholder="Card Number">
                                    </div>

                                    <div class='form-row row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVC</label>
                                            <input value="" autocomplete='off' class='form-control card-cvc' placeholder='e.g 415' size='4' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Month</label>
                                            <input value="" class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Expiration Year</label>
                                            <input value="" class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                        </div>
                                    </div>











                                    <div class="form-group mb-7">
                                        <input type="email" name="email" value="@if (Auth::check()) {{ Auth::user()->email }} @endif" class="required form-control form-control-lg bg-white rounded-4 text-bali-gray pl-8 font-size-5" placeholder="Email Address" id="email">
                                    </div>
                                    <div class="max-w-435">
                                        <input type="hidden" name="currency" value="<?php echo $currency; ?>">
                                        <input type="hidden" name="amount" value="<?php $result = currency($amount, 'USD', currency()->getUserCurrency());
                                                                                    echo preg_replace('/[^0-9.]+/', '', $result); ?>">
                                        <input type="hidden" name="skill" value="<?php echo $skill; ?>">
                                        <input type="hidden" name="subject" value="New Order: <?php echo $skill; ?>">
                                        <input type="hidden" name="usdamount" value="<?php echo $amount; ?>">

                                        <input type="hidden" id="captcha-response" name="captcha-response" />
                                        <div class="form-group mb-0 d-flex align-content-center"><label class="check-input-control d-flex form-check-label " for="agreement"> <input type="checkbox" class="checkbox mr-5" name="agreement" value="Yes" id="agreement" required></label> <a href="javascript:void();" data-toggle="modal" data-target="#contract"> I agree to the service terms & condtions.</a></div>


                                        <button class="btn btn-blue-3 w-100 h-55 rounded-4" type="submit">Pay Now (<?php echo currency($amount, 'USD', currency()->getUserCurrency()); ?>) {{currency()->getUserCurrency()}}</button>
                                       
                                        <p class="font-size-5 mt-5 text-gray-chateau" data-aos="fade-up" data-aos-duration="900" data-aos-once="true">We’ll only send our service related emails</p>
                                    </div>

                                </form>

                                @endif

                                @if(Session::has('payload'))
                                <div class="mt-3 alert alert-danger" role="alert">
                                    <b> {{ Session::get('payload')}}</b>
                                </div>
                                {{ Session::forget('payload') }}
                                @endif



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 col-xs-11 order-1 order-lg-2 d-none d-lg-block d-xl-block">
                        <div class="text-right pt-8 pt-lg-0" data-aos="fade-left" data-aos-duration="300" data-aos-once="true">

                            <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-icon-dark-dropshadow.svg" alt="php" style="width:100%;height:auto;">





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.contracts.development')
    @endcomponent
    <div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js" integrity="sha512-3fMsI1vtU2e/tVxZORSEeuMhXnT9By80xlmXlsOku7hNwZSHJjwcOBpmy+uu+fyWwGCLkMvdVbHkeoXdAzBv+w==" crossorigin="anonymous"></script>
    @if (Session::has('success'))
    @component('components.contact.orderinfo')
    @endcomponent
    @endif
   
   
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
    <script type="text/javascript">
        $(function() {
            var $form = $(".validation");
            $('form.validation').bind('submit', function(e) {
                var $form = $(".validation"),
                    inputVal = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputVal),
                    $errorStatus = $form.find('div.error'),
                    valid = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorStatus.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-num').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeHandleResponse);
                }

            });

            function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>



      <!-- Vendor Scripts -->
      <script src="https://cdn.budgetphp.com/assets/fixityv1/js/vendor.min.js"></script>

    <!-- Plugin's Scripts -->
    <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/aos/aos.min.js"></script>
    <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/slick/slick.min.js"></script>
    <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/plugins/counter-up/jquery.waypoints.min.js"></script>




    <!-- Activation Script -->
    <script src="{{env('APP_CDN_URL')}}/assets/fixityv1/js/custom.js"></script>

    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//matomo.dockerexperts.com/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '7']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->


    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
</body>

</html>