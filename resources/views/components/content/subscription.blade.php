<?php

//$localCurrency = request()->session()->get('currency');
//currency()->setUserCurrency($localCurrency);

?>

<div class="bg-sunset pt-25 pt-md-18 pt-lg-24 pb-5 pb-md-9 pb-lg-27" id="hourly" style="background-color:#ff523d !important;">
  <div class="container">
    <!-- section title -->
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="text-center mb-16 mb-lg-21 dark-mode-texts aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <h2 class="font-size-10 letter-spacing-n83">
            <?php







            $termString = request()->route('term');
            if (str_contains($termString, 'joomla')) {
              echo 'Joomla Development Retainers';
            } elseif (str_contains($termString, 'wordpress')) {
              echo 'WordPress Development Retainers';
            } elseif (str_contains($termString, 'codeigniter')) {
              echo 'CodeIgniter Development Retainers';
            } elseif (str_contains($termString, 'drupal')) {
              echo 'Drupal Development Retainers';
            } elseif (str_contains($termString, 'magento')) {
              echo 'Magento Development Retainers';
            } elseif (str_contains($termString, 'php')) {
              echo 'PHP Development Retainers';
            } elseif (str_contains($termString, 'woocommerce')) {
              echo 'WooCommerce Development Retainers';
            } elseif (str_contains($termString, 'laravel')) {
              echo 'Laravel Development Retainers';
            } else {
              echo 'Web Development Retainers';
            }
            ?>

          </h2>

          <p>   Our current hourly rate is {{   App\Http\Controllers\PriceController::show_price('0.80')}} - {{  App\Http\Controllers\PriceController::show_price('1') }}/hour.   
                  
                  
                  
                  </p>

       
    
          


          <p class="mt-15"><img src="{{env('APP_CDN_URL')}}/assets/logos/hackerrank-linkedin-certified-php-light.svg" style="max-height:133px;" class="m-5"> <img src="{{env('APP_CDN_URL')}}/assets/logos/coded-in-usa-light.svg" style="max-height:133px;margin-left:10px;" class="m-5"></p>

        </div>
      </div>
    </div>
    <!-- section title -->
    <!-- Pricing Table -->
    <div class="row justify-content-center">
 
      <div class="col-xl-2 col-md-12 col-xs-12 aos-init aos-animate" data-aos="fade-right" data-aos-duration="600" data-aos-once="true">
        <div class="nav align-content-center justify-content-center justify-sm-content-between justify-content-xl-start mb-8 mb-lg-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link btn btn-outline-white btn-xl h-55 mb-8 mx-1 mx-xl-0" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Bundles</a>
          <a class="nav-link btn btn-outline-white btn-xl h-55 mb-8 mx-1 mx-xl-0 active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Subscriptions</a>
          <a class="nav-link btn btn-outline-white btn-xl h-55 mb-8 mx-1 mx-xl-0 " id="v-pills-estimate-tab" data-toggle="pill" href="#v-pills-estimate" role="tab" aria-controls="v-pills-estimate" aria-selected="true">Estimate</a>



        </div>
      </div>
      <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row justify-content-center">
              <!-- Single table -->
              <div class="col-xl-5 col-md-6 col-sm-8 col-xs-10">
                <div class="bg-white rounded-10 pl-9 pl-xs-12 pr-10 pr-xs-15 pt-7 pt-xs-12 pb-9 pb-xs-13 mb-13 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600" data-aos-once="true">
                  <div class="mb-9">
                    <h4 class="font-size-7 text-dark-cloud">5 Hour Bundle {{currency()->getUserCurrency()}} </h4>
                    <p class="font-size-5 mb-0 text-stone">{{  App\Http\Controllers\PriceController::show_price('5') }} {{currency()->getUserCurrency()}} one time payment.</p>
                  </div>
                  <h3 class="font-size-10 mb-9 text-dark-cloud letter-spacing-n83  {{strtolower(currency()->getUserCurrency())}}-price">{{  App\Http\Controllers\PriceController::show_price('1') }}<span class="font-size-5">/hour</span></h3>

                  <div class="mt-11">
                    <a class="btn btn-outline-dark-cloud gr-hover-bg-dodger-blue-1 rounded-5 text-black btn-xl h-55" href="{{env('APP_URL')}}/en/pay/{{ strtolower(currency()->getUserCurrency()) }}/<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 5;

                                                                                                                                                                                                      ?>/web-development-5-hour-bundle">Order Now</a>
                    <?php if (currency()->getUserCurrency() != 'USD') { ?>
                      <span class="mt-5"><a href="{{env('APP_URL')}}/en/pay/usd/<?php 
                                                                                echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 5;

                                                                                ?>/web-development-3-hour-bundle">Or pay in USD ($<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 5; ?>) </a></span>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <!-- End Single table -->
              <!-- Single table -->
              <div class="col-xl-5 col-md-6 col-sm-8 col-xs-10">
                <div class="bg-white rounded-10 pl-9 pl-xs-12 pr-10 pr-xs-15 pt-7 pt-xs-12 pb-9 pb-xs-13 mb-13 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500" data-aos-once="true">
                  <div class="mb-9">
                    <h4 class="font-size-7 text-dark-cloud">30 Hour Bundle {{currency()->getUserCurrency()}}</h4>
                    <p class="font-size-5 mb-0 text-stone">{{  App\Http\Controllers\PriceController::show_price('30') }} {{currency()->getUserCurrency()}} one time payment.</p>
                  </div>
                  <h3 class="font-size-10 mb-9 text-dark-cloud letter-spacing-n83  {{strtolower(currency()->getUserCurrency())}}-price">{{  App\Http\Controllers\PriceController::show_price('1') }}<span class="font-size-5">/hour</span></h3>

                  <div class="mt-11">
                    <a class="btn btn-outline-dark-cloud gr-hover-bg-dodger-blue-1 rounded-5 text-black btn-xl h-55" href="{{env('APP_URL')}}/en/pay/{{ strtolower(currency()->getUserCurrency()) }}/<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 30; ?>/web-development-10-hour-bundle">Order Now</a> </div>
                  <?php if (currency()->getUserCurrency() != 'USD') { ?>
                    <span class="mt-5"><a href="{{env('APP_URL')}}/en/pay/usd/<?php  
                                                                              echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 30;

                                                                              ?>/web-development-5-hour-bundle">Or pay in USD ($<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 30; ?>) </a></span>
                  <?php } ?>
                </div>
              </div>
              <!-- End Single table -->
            </div>
          </div>
          <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="row justify-content-center">
              <!-- Single table -->
              <div class="col-xl-5 col-md-6 col-sm-8 col-xs-10">
                <div class="bg-white rounded-10 pl-9 pl-xs-12 pr-10 pr-xs-15 pt-7 pt-xs-12 pb-9 pb-xs-13 mb-13 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" data-aos-once="true">
                  <div class="mb-9">
                    <h4 class="font-size-7 text-dark-cloud">30 Hours a Month {{currency()->getUserCurrency()}}</h4>
                    <p class="font-size-5 mb-0 text-stone">{{  App\Http\Controllers\PriceController::show_price('30') }} {{currency()->getUserCurrency()}} billed monthly.</p>
                  </div>
                  <h3 class="font-size-10 mb-9 text-dark-cloud letter-spacing-n83  {{strtolower(currency()->getUserCurrency())}}-price">{{  App\Http\Controllers\PriceController::show_price('1') }}<span class="font-size-5">/hour</span></h3>

                  <div class="mt-11">
                    <a class="btn btn-outline-dark-cloud gr-hover-bg-dodger-blue-1 rounded-5 text-black btn-xl h-55" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/month/1/<?php  
                                                                                                                                                                                                                  echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 30; ?>/web-development-subscription">Subscribe </a>

                    <?php if (currency()->getUserCurrency() != 'USD') { ?>
                      <span class="mt-5"><a href="{{env('APP_URL')}}/en/subscribe/usd/month/1/<?php  
                                                                                            echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 30;

                                                                                            ?>/web-development-subscription">Or pay in USD ($<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 30; ?>) </a></span>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <!-- End Single table -->
              <!-- Single table -->
              <div class="col-xl-5 col-md-6 col-sm-8 col-xs-10">
                <div class="bg-white rounded-10 pl-9 pl-xs-12 pr-10 pr-xs-15 pt-7 pt-xs-12 pb-9 pb-xs-13 mb-13 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600" data-aos-once="true">
                  <div class="mb-9">
                    <h4 class="font-size-7 text-dark-cloud">100 Hours a Month {{currency()->getUserCurrency()}}</h4>
                    <p class="font-size-5 mb-0 text-stone">{{  App\Http\Controllers\PriceController::show_price('80') }} {{currency()->getUserCurrency()}} billed monthly.</p>
                  </div>
                  <h3 class="font-size-10 mb-9 text-dark-cloud letter-spacing-n83  {{strtolower(currency()->getUserCurrency())}}-price">{{  App\Http\Controllers\PriceController::show_price('0.80') }}<span class="font-size-5">/hour</span></h3>

                  <div class="mt-11">
                    <a class="btn btn-outline-dark-cloud gr-hover-bg-dodger-blue-1 rounded-5 text-black btn-xl h-55" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/month/1/<?php  
                                                                                                                                                                                                                  echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 80; ?>/web-development-subscription">Subscribe</a>

                    <?php if (currency()->getUserCurrency() != 'USD') { ?>
                      <span class="mt-5"><a href="{{env('APP_URL')}}/en/subscribe/usd/month/1/<?php  
                                                                                              echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 80;

                                                                                              ?>/web-development-subscription">Or pay in USD ($<?php echo round($goldprice, 0, PHP_ROUND_HALF_UP) * 80; ?>) </a></span>
                    <?php } ?>

                  </div>
                </div>
              </div>
              <!-- End Single table -->

            </div>

          </div>



          <div class="tab-pane fade" id="v-pills-estimate" role="tabpanel" aria-labelledby="v-pills-estimate-tab">
            <div class="row justify-content-center">
              <!-- Single table -->
              <div class="col-xl-10 col-md-12 col-sm-12 col-xs-12">
                <div class="bg-white rounded-10 pl-9 pl-xs-12 pr-10 pr-xs-15 pt-7 pt-xs-12   pb-xs-13 mb-13 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600" data-aos-once="true">
                  <h4 class="font-size-7 text-dark-cloud"> Fill out the form below to request your free estimate.</h4>
                  @component('components.quote.quote')
                  @endcomponent


                </div>
              </div>
              <!-- End Single table -->

            </div>
          </div>









        </div>

      </div>

      
    </div>
  <p class="text-center  mt-lg-21 dark-mode-texts aos-init aos-animate"> * Both bundle and subscription rollover hours expire 1 year from the purchase date. 30 minute minimum for all task issues. Billed in 30 minute increments. Non-Refundable unused hours. Monitor hour usage in the dashboard.
  </p>
    <!-- End Pricing Table -->
  </div>
</div>