<?php
//$localCurrency = request()->session()->get('currency');
//if (currency()->hasCurrency($localCurrency)) {
//  currency()->setUserCurrency($localCurrency);
//} else {
 // currency()->setUserCurrency('USD');
//}
?>
<!-- End pricingOne Area -->
<div class="pt-13 pt-md-17 pt-lg-25 pb-8 pb-md-11 pb-lg-22 position-relative bg-default-1" id="order">
  <div class="container">
    <!-- Section Title -->
    <div class="mb-13 mb-lg-13">
      <div class="row align-items-center justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="mb-10 mb-lg-0 text-center text-lg-left" data-aos-duration="800" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <h2 class="font-size-10 pr-md-10 pr-xl-0 mb-0 letter-spacing-n83">
              <?php $termString = request()->route('term');
              if (str_contains($termString, 'joomla')) {
                echo 'Joomla Website Maintenance Plans';
              } elseif (str_contains($termString, 'wordpress')) {
                echo 'WordPress Website Maintenance Plans';
              } elseif (str_contains($termString, 'codeigniter')) {
                echo 'CodeIgniter Website Maintenance Plans';
              } elseif (str_contains($termString, 'drupal')) {
                echo 'Drupal Website Maintenance Plans';
              } elseif (str_contains($termString, 'magento')) {
                echo 'Magento Website Maintenance Plans';
              } elseif (str_contains($termString, 'php')) {
                echo 'PHP Website Maintenance Plans';
              } elseif (str_contains($termString, 'woocommerce')) {
                echo 'WooCommerce Website Maintenance Plans';
              } elseif (str_contains($termString, 'laravel')) {
                echo 'Laravel Website Maintenance Plans';
              } else {
                echo 'Website Maintenance Plans';
              }


              ?>

            </h2>
          </div>
        </div>
        <div class="col-xl-7 col-lg-6 col-md-6 text-center text-md-right">
         <div class="btn-section" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <a href="javascript:" class="btn-toggle-square active mx-3 price-deck-trigger rounded-10 bg-golden-yellow">
              <span data-pricing-trigger data-target="#table-price-value" data-value="yearly" class="active text-break">Yearly</span>
              <span data-pricing-trigger data-target="#table-price-value" data-value="monthly" class="text-break">Monthly</span>
            </a>
          </div> 
        </div>
      </div>
    </div>
    <!-- End Section Title -->
    <!-- Table Main Body -->
    <div class="table-body" id="table-price-value" data-pricing-dynamic data-value-active="yearly">
      <div class="row justify-content-center">
        <!-- Single Table -->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="border-top pt-10 pb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
            <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="mb-5 mb-lg-0">
                  <h3 class="font-size-7">Basic {{currency()->getUserCurrency()}}</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="mb-5 mb-lg-0">
                  <ul class="list-unstyled font-size-6">
                    <li class="heading-default-color mb-4">Free Remote Backups</li>
                    <li class="heading-default-color mb-4">Free Matamo™ Analytics</li>
                    <li class="heading-default-color mb-4">Free Zabbix™ Monitoring</li>



                    <li class="subscribe-yearly-button heading-default-color mb-4">15 Maintenance Hours a Year</li>
                    <li class="subscribe-monthly-button heading-default-color mb-4" style="display:none;">1.25 Rollover Hours a Month</li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="pr-lg-15 pr-xl-10 mb-5 mb-lg-0">
                  <h2 class="mb-0 font-size-11 font-weight-medium {{strtolower(currency()->getUserCurrency())}}-price"><span class="dynamic-value" data-active="19" data-monthly="<?php $salepricenum = .0 * $goldprice;
                                                                                                                              $saleprice = $goldprice + $salepricenum;
                                                                                                                              $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 16 / 12;
                                                                                                                              $result = (int)$finalprice;
                                                                                                                              echo currency($result, 'USD', currency()->getUserCurrency());
                                                                                                                              ?>" data-yearly="{{  App\Http\Controllers\PriceController::show_price('15') }}"></span></h2>
                  <p class="mb-0 font-size-5 pr-xl-22 dynamic-value" data-active="19" data-monthly="<?php $salepricenum = .0 * $goldprice;
                                                                                                    $saleprice = $goldprice + $salepricenum;
                                                                                                    $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 16 / 12;
                                                                                                    $result = (int)$finalprice;
                                                                                                    echo currency($result, 'USD', currency()->getUserCurrency());
                                                                                                    ?> a month, billed monthly" data-yearly="<?php $salepricenum = .0 * $goldprice;
                                                                                                                                                  $saleprice = $goldprice - $salepricenum;
                                                                                                                                                  $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 16 / 12;
                                                                                                                                                  $result = (int)$finalprice;
                                                                                                                                                  echo currency($result, 'USD', currency()->getUserCurrency()); ?> a month, billed yearly"></p>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="mb-5 mb-lg-0 mt-4 text-left text-lg-right">
                  <a id="" class="subscribe-yearly-button yearly btn btn-outline-gray-1 btn-2 border-width-2 rounded-5 gr-hover-bg-blue-3 heading-default-color" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/year/1/<?php  
                                                                                                                                                                                                                                                            $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 15;
                                                                                                                                                                                                                                                            echo (int)$finalprice; ?>/basic-web-maintenance-plan">Subscribe Yearly</a>
                  <a id="" style="display:none;" class="subscribe-monthly-button monthly btn btn-outline-gray-1 btn-2 border-width-2 rounded-5 gr-hover-bg-blue-3 heading-default-color" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/month/1/<?php $salepricenum = .0 * $goldprice;
                                                                                                                                                                                                                                                                                      $saleprice = $goldprice + $salepricenum;
                                                                                                                                                                                                                                                                                      $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 16 / 12;
                                                                                                                                                                                                                                                                                      echo (int)$finalprice; ?>/basic-web-maintenance-plan">Subscribe Monthly</a>

                  <?php if (currency()->getUserCurrency() != 'USD') { ?>
                    <a id="" style="margin-left:auto;margin-right:auto;justify-content: center;min-width: 217px;" class="subscribe-yearly-button yearly mt-5 text-center" href="{{env('APP_URL')}}/en/subscribe/usd/year/1/<?php 
                                                                                                                                                                                                                          $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 15;
                                                                                                                                                                                                                          echo (int)$finalprice; ?>/basic-web-maintenance-plan">Or pay in USD (${{(int)$finalprice}})</a>
                    <a id="" style="display:none;margin-left:auto;margin-right:auto;justify-content: center;min-width: 217px;" class="subscribe-monthly-button monthly mt-5 text-center" href="{{env('APP_URL')}}/en/subscribe/usd/month/1/<?php $salepricenum = .0 * $goldprice;
                                                                                                                                                                                                                                          $saleprice = $goldprice + $salepricenum;
                                                                                                                                                                                                                                          $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 6 / 12;
                                                                                                                                                                                                                                          echo (int)$finalprice; ?>/basic-web-maintenance-plan">Or pay in USD (${{(int)$finalprice}})</a>


                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Table End -->
        <!-- Single Table -->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="border-top pt-10 pb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
            <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="mb-5 mb-lg-0">
                  <h3 class="font-size-7">Standard {{currency()->getUserCurrency()}}</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="">
                  <ul class="list-unstyled font-size-6">
                    <li class="heading-default-color mb-4">Free Remote Backups</li>
                    <li class="heading-default-color mb-4">Free Matamo™ Analytics</li>
                    <li class="heading-default-color mb-4">Free Zabbix™ Monitoring</li>



                    <li class="subscribe-yearly-button heading-default-color mb-4">30 Maintenance Hours a Year</li>
                    <li class="subscribe-monthly-button heading-default-color mb-4" style="display:none;">2.5 Rollover Hours a Month</li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="pr-lg-15 pr-xl-10 mb-5 mb-lg-0">
                  <h2 class="mb-0 font-size-11 font-weight-medium {{strtolower(currency()->getUserCurrency())}}-price"><span class="dynamic-value" data-active="19" data-monthly="<?php $salepricenum = .0 * $goldprice;
                                                                                                                              $saleprice = $goldprice + $salepricenum;
                                                                                                                              $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 31 / 12;
                                                                                                                              $result =  (int)$finalprice;
                                                                                                                              echo currency($result, 'USD', currency()->getUserCurrency());
                                                                                                                              ?>" data-yearly="{{  App\Http\Controllers\PriceController::show_price('30') }}"></span></h2>
                  <p class="mb-0 font-size-5 pr-xl-22 dynamic-value" data-active="19" data-monthly="<?php $salepricenum = .0 * $goldprice;
                                                                                                    $saleprice = $goldprice + $salepricenum;
                                                                                                    $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 31 / 12;
                                                                                                    $result = (int)$finalprice;
                                                                                                    echo currency($result, 'USD', currency()->getUserCurrency());
                                                                                                    ?> a month, billed monthly" data-yearly="<?php  
                                                                                                                                                  $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 30 / 12;
                                                                                                                                                  $result = (int)$finalprice;
                                                                                                                                                  echo currency($result, 'USD', currency()->getUserCurrency()); ?> a month, billed yearly"></p>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="mb-5 mb-lg-0 mt-4 text-left text-lg-right">
                  <a id="" class=" subscribe-yearly-button yearly btn btn-outline-gray-1 btn-2 border-width-2 rounded-5 gr-hover-bg-blue-3 heading-default-color" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/year/1/<?php 
                                                                                                                                                                                                                                                              $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 30;
                                                                                                                                                                                                                                                              echo (int)$finalprice; ?>/standard-web-maintenance-plan">Subscribe Yearly</a>
                  <a id="" style="display:none;" class="subscribe-monthly-button monthly btn btn-outline-gray-1 btn-2 border-width-2 rounded-5 gr-hover-bg-blue-3 heading-default-color" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/month/1/<?php $salepricenum = .0 * $goldprice;
                                                                                                                                                                                                                                                                                      $saleprice = $goldprice + $salepricenum;
                                                                                                                                                                                                                                                                                      $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 31 / 12;
                                                                                                                                                                                                                                                                                      echo (int)$finalprice; ?>/standard-web-maintenance-plan">Subscribe Monthly</a>


                  <?php if (currency()->getUserCurrency() != 'USD') { ?>
                    <a id="" style="margin-left:auto;margin-right:auto;justify-content: center;min-width: 217px;" class="subscribe-yearly-button yearly mt-5 text-center" href="{{env('APP_URL')}}/en/subscribe/usd/year/1/<?php  
                                                                                                                                                                                                                          $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 30;
                                                                                                                                                                                                                          echo (int)$finalprice; ?>/standard-web-maintenance-plan">Or pay in USD (${{(int)$finalprice}})</a>
                    <a id="" style="display:none;margin-left:auto;margin-right:auto;justify-content: center;min-width: 217px;" class="subscribe-monthly-button monthly mt-5 text-center" href="{{env('APP_URL')}}/en/subscribe/usd/month/1/<?php $salepricenum = .0 * $goldprice;
                                                                                                                                                                                                                                          $saleprice = $goldprice + $salepricenum;
                                                                                                                                                                                                                                          $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 31 / 12;
                                                                                                                                                                                                                                          echo (int)$finalprice; ?>/standard-web-maintenance-plan">Or pay in USD (${{(int)$finalprice}})</a>
                  <?php } ?>
                </div>

              </div>
            </div>


          </div>
        </div>
        <!-- Single Table End -->

        <!-- Single Table -->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="border-top pt-10 pb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
            <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12 col-md-12 col-sm-12">
                <div class="mb-5 mb-lg-0">
                  <h3 class="font-size-7">Pro {{currency()->getUserCurrency()}}</h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12 col-md-12 col-sm-12">
                <div class="">
                  <ul class="list-unstyled font-size-6">
                    <li class="heading-default-color mb-4">Free Remote Backups</li>
                    <li class="heading-default-color mb-4">Free Matamo™ Analytics</li>
                    <li class="heading-default-color mb-4">Free Zabbix™ Monitoring</li>



                    <li class="subscribe-yearly-button heading-default-color mb-4">60 Maintenance Hours a Year</li>
                    <li class="subscribe-monthly-button heading-default-color mb-4" style="display:none;">5 Rollover Hours a Month</li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="pr-lg-15 pr-xl-10 mb-5 mb-lg-0">
                  <h2 class="mb-0 font-size-11 font-weight-medium {{strtolower(currency()->getUserCurrency())}}-price"><span class="dynamic-value" data-active="19" data-monthly="<?php $salepricenum = .0 * $goldprice;
                                                                                                                              $saleprice = $goldprice + $salepricenum;
                                                                                                                              $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 61 / 12;
                                                                                                                              $result = (int)$finalprice;
                                                                                                                              echo currency($result, 'USD', currency()->getUserCurrency());
                                                                                                                              ?>" data-yearly="{{  App\Http\Controllers\PriceController::show_price('60') }}"></span></h2>
                  <p class="mb-0 font-size-5 pr-xl-22 dynamic-value" data-active="19" data-monthly="<?php $salepricenum = .0 * $goldprice;
                                                                                                    $saleprice = $goldprice + $salepricenum;
                                                                                                    $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 61 / 12;
                                                                                                    $result = (int)$finalprice;
                                                                                                    echo currency($result, 'USD', currency()->getUserCurrency());
                                                                                                    ?> a month, billed monthly" data-yearly="<?php  
                                                                                                                                                  $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 60 / 12;
                                                                                                                                                  $result = (int)$finalprice;
                                                                                                                                                  echo currency($result, 'USD', currency()->getUserCurrency()); ?> a month, billed yearly"></p>
                </div>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="mb-5 mb-lg-0 mt-4 text-left text-lg-right">
                  <a id="" class="subscribe-yearly-button yearly btn btn-outline-gray-1 btn-2 border-width-2 rounded-5 gr-hover-bg-blue-3 heading-default-color" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/year/1/<?php  
                                                                                                                                                                                                                                                            $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 60;
                                                                                                                                                                                                                                                            echo (int)$finalprice; ?>/pro-web-maintenance-plan">Subscribe Yearly</a>
                  <a id="" style="display:none;" class="subscribe-monthly-button monthly btn btn-outline-gray-1 btn-2 border-width-2 rounded-5 gr-hover-bg-blue-3 heading-default-color" href="{{env('APP_URL')}}/en/subscribe/{{ strtolower(currency()->getUserCurrency()) }}/month/1/<?php $salepricenum = .0 * $goldprice;
                                                                                                                                                                                                                                                                                      $saleprice = $goldprice + $salepricenum;
                                                                                                                                                                                                                                                                                      $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 61 / 12;
                                                                                                                                                                                                                                                                                      echo (int)$finalprice; ?>/pro-web-maintenance-plan">Subscribe Monthly</a>




                  <?php if (currency()->getUserCurrency() != 'USD') { ?> <a id="" style="margin-left:auto;margin-right:auto;justify-content: center;min-width: 217px;" class="subscribe-yearly-button yearly mt-5 text-center" href="{{env('APP_URL')}}/en/subscribe/usd/year/1/<?php  
                                                                                                                                                                                                                                                                              $finalprice = round($goldprice, 2, PHP_ROUND_HALF_UP) * 60;
                                                                                                                                                                                                                                                                              echo (int)$finalprice; ?>/pro-web-maintenance-plan">Or pay in USD (${{(int)$finalprice}})</a>
                    <a id="" style="display:none;margin-left:auto;margin-right:auto;justify-content: center;min-width: 217px;" class="subscribe-monthly-button monthly mt-5 text-center" href="{{env('APP_URL')}}/en/subscribe/usd/month/1/<?php $salepricenum = .0 * $goldprice;
                                                                                                                                                                                                                                          $saleprice = $goldprice + $salepricenum;
                                                                                                                                                                                                                                          $finalprice = round($saleprice, 2, PHP_ROUND_HALF_UP) * 61 / 12;
                                                                                                                                                                                                                                          echo (int)$finalprice; ?>/pro-web-maintenance-plan">Or pay in USD (${{(int)$finalprice}})</a>
                  <?php } ?>

                </div>
              </div>

            
            </div>
          </div>
        </div>
        <!-- Single Table End -->


      </div>
    </div>
    <!-- Table Main Body -->

    <p class="mt-10">* All plans feature 30 minute minimum for all task issues. Billed in 30 minute increments. Monitor hour usage in the dashboard. Extra hours over allotment billed at a special discount rate of {{  App\Http\Controllers\PriceController::show_price('1') }}/hour upon clients approval. Non-Refundable unused hours. Both rollover and regular hours expire 1 year from purchase date or subscription cancellation or non-payment.</p>

  </div>

</div>
<!-- End pricingOne Area -->