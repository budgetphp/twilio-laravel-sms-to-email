<div>
<?php
$PlanName = request()->route('term');
if (str_contains($PlanName, 'joomla')) {
    $PlanName = 'Joomla';
    $EnvatoCount = '1.8k';
} elseif (str_contains($PlanName, 'wordpress')) {
    $PlanName = 'WordPress';
    $EnvatoCount = '11k';
} elseif (str_contains($PlanName, 'codeigniter')) {
    $PlanName = 'CodeIgniter';
    $EnvatoCount = '18k';
} elseif (str_contains($PlanName, 'drupal')) {
    $PlanName = 'Drupal';
    $EnvatoCount = '900';
} elseif (str_contains($PlanName, 'magento')) {
    $PlanName = 'WordPress';
    $EnvatoCount = '11k';
} elseif (str_contains($PlanName, 'php')) {
    $PlanName = 'Laravel';
    $EnvatoCount = '18k';
} elseif (str_contains($PlanName, 'woocommerce')) {
    $PlanName = 'WordPress';
    $EnvatoCount = '11k';
} elseif (str_contains($PlanName, 'laravel')) {
    $EnvatoCount = '18k';
    $PlanName = 'Laravel';
} else {
    $PlanName = 'Laravel';
    $EnvatoCount = '18k';
}
?>


<div class="pt-17 pt-sm-27 pt-md-25 pt-lg-35 pb-md-8  position-relative" id="pro">
    <div class="container position-static">
        <div class="row position-static justify-content-center justify-content-lg-start">
            <div class="col-xl-5 col-lg-7 col-md-12 col-sm-12 col-xs-12 order-1 order-lg-1">
                <div class="pr-md-20 pr-xl-5">
                    <!-- Section Title -->
                    <div class="mb-5 mb-lg-13 pr-md-15 pr-lg-10 pr-xl-0 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <h2 class="font-size-10 mb-8 pr-xs-22 pr-sm-20 pr-md-13 pr-lg-0">  Our {{$PlanName}} PRO<sup>7</sup> Website&nbsp;Package</h2>
                         <p class="font-size-6 mb-0" style=""> <img class="" src="{{env('APP_CDN_URL')}}/assets/icon-1-year-warranty-color.svg"  style="width:144px;float:left;margin-right:5px;margin-top:5px;">              
 Get a custom logo with a custom {{$PlanName}} web design. Comes with up to 7 website pages, 1,500 english website content words for your brand delivered as a production-ready website. </p>
                    </div>
                    <!-- End Section Title -->
                    <div class="list aos-init aos-animate" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <div class="d-flex align-items-center mb-6">
                            <div class="circle-59 bg-gray-3 mr-6 ">
                                <img src="https://cdn.budgetphp.com/assets/brands-light/{{strtolower($PlanName)}}-brands.svg" alt="" style="max-width:33px;">
                            </div>
                            <p class="font-size-8 heading-default-color font-weight-medium mb-0">{{$PlanName}}&trade; @if ($PlanName =='Laravel') + Livewire @endif</p>
                        </div>
                        <div class="d-flex align-items-center mb-6">
                            <div class="circle-59 bg-gray-3 mr-6">
                                <img src="https://cdn.budgetphp.com/assets/brands-light/php-brands.svg" alt="" style="max-width:33px;">
                            </div>
                            <p class="font-size-8 heading-default-color font-weight-medium mb-0">Custom {{$PlanName}} Web Design</p>
                        </div>
                        <div class="d-flex align-items-center mb-6">
                            <div class="circle-59 bg-gray-3 mr-6">
                                <img src="https://cdn.budgetphp.com/assets/brands-light/google-brands.svg" alt="" style="max-width:33px;">
                            </div>
                            <p class="font-size-8 heading-default-color font-weight-medium mb-0">SEO Performance Pro Optimized & SEO Copywriting
                            </p>
                        </div>


                        <p>See Also: <a href="{{env('APP_URL')}}/en/lp3/drupal-web-design-packages">Drupal</a>, <a href="{{env('APP_URL')}}/en/lp3/joomla-web-design-packages">Joomla</a>, <a href="{{env('APP_URL')}}/en/lp3/laravel-web-design-packages">Laravel</a>, <a href="{{env('APP_URL')}}/en/lp3/wordpress-web-design-packages">WordPress</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-12 col-xl-7 col-lg-6   position-static  order-2 order-lg-2">



                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12" style="margin-left:auto;margin-right:auto;">
                    <div class="border rounded-10 text-center px-7 px-lg-16 pt-10 pb-13 gr-hover-2 mb-9 aos-init aos-animate" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
                        <p class="font-size-5 mb-9">{{$PlanName}} <span class=" badge bg-golden-yellow text-uppercase font-size-3 px-3 rounded-5" style="color:#fff;">PRO-7</span> Website</p>
                        <h2 class="font-size-11 mb-1 {{strtolower(currency()->getUserCurrency())}}-price"><?php $result = $goldprice * 49; + $result;echo currency($result, 'USD', currency()->getUserCurrency()); ?></h2>
                        <span class="font-size-5 mb-2"><i class="fas fa-award"></i> Enterprise Grade Quality</span>
                        <ul class="list-unstyled font-size-5 line-height-50 heading-default-color pt-8">
                            <li class="mb-7">Up to 7 {{$PlanName}} Routes/Dynamic-Pages</li>
                            <li class="mb-7">SVG Logo or SVG Logo Retrace</li>
                            <li class="mb-7">Custom Branding</li>
                            <li class="mb-7">1 Year Free Remote Backup & Warranty</li>
                            <li class="mb-7 text-stone"><del>eCommerce</del></li>
                        </ul>
                        <div class="pt-7 pt-lg-5">
                            <a class="btn btn-blue-3 btn-2 rounded-5" href="{{env('APP_URL')}}/en/pay/{{strtolower(currency()->getUserCurrency())}}/{{$result}}/{{strtolower($PlanName)}}-pro-website">Order Now</a>
                           <p> {{currency()->getUserCurrency()}} Currency Selected </p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
<hr>


<div class=" position-relative mb-20 mt-20" id="pro">
    <div class="container position-static">
        <div class="row position-static justify-content-center justify-content-lg-start">
            <div class="col-sm-12 col-xs-12 col-md-12  col-xl-7 col-lg-6  position-static  order-2 order-lg-2">
            

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12" style="margin-left:auto;margin-right:auto;">
                    <div class="border rounded-10 text-center px-7 px-lg-16 pt-10 pb-13 gr-hover-2 mb-9 aos-init aos-animate" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
                        <p class="font-size-5 mb-9">{{$PlanName}} <span class=" badge bg-golden-yellow text-uppercase font-size-3 px-3 rounded-5" style="color:#fff;">PRO-12</span> Website</p>
                        <h2 class="font-size-11 mb-1 {{strtolower(currency()->getUserCurrency())}}-price"><?php $result = $goldprice * 104;echo currency($result, 'USD', currency()->getUserCurrency()); ?></h2>
                        <span class="font-size-5 mb-2"><i class="fas fa-award"></i> Enterprise Grade Quality</span>
                        <ul class="list-unstyled font-size-5 line-height-50 heading-default-color pt-8">
                            <li class="mb-7">Up to 12 {{$PlanName}} Routes/Dynamic-Pages</li>
                            <li class="mb-7">SVG Logo or SVG Logo Retrace</li>
                            <li class="mb-7">Custom Branding</li>
                            <li class="mb-7">1 Year Free Remote Backup & Warranty</li>

                            <li class="mb-7 text-stone"><del>eCommerce</del></li>
                        </ul>
                        <div class="pt-7 pt-lg-5">
                            <a class="btn btn-blue-3 btn-2 rounded-5" href="{{env('APP_URL')}}/en/pay/{{strtolower(currency()->getUserCurrency())}}/{{$result}}/{{strtolower($PlanName)}}-pro-website">Order Now</a>
                           <p> {{currency()->getUserCurrency()}} Currency Selected </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-7 col-md-12 col-sm-12 col-xs-12 order-1  ">



            <div class="pr-md-20 pr-xl-5">
                    <!-- Section Title -->
                    <div class="mb-5 mb-lg-13 pr-md-15 pr-lg-10 pr-xl-0 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                        <h2 class="font-size-10 mb-8 pr-xs-22 pr-sm-20 pr-md-13 pr-lg-0">Our {{$PlanName}} PRO<sup>12</sup> Website Package</h2>
                        <p class="font-size-6 mb-0"><img class="" src="{{env('APP_CDN_URL')}}/assets/icon-1-year-warranty-color.svg"  style="width:144px;float:left;margin-right:5px;margin-top:5px;"> Get a custom logo with a custom {{$PlanName}} website design. Comes with up to 12 website pages, 2,500 english website content words for your brand delivered as a production-ready website. </p>
                    </div>
                    <!-- End Section Title -->
                    <div class="list aos-init aos-animate" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                        <div class="d-flex align-items-center mb-6">
                            <div class="circle-59 bg-gray-3 mr-6 ">
                                <img src="https://cdn.budgetphp.com/assets/brands-light/{{strtolower($PlanName)}}-brands.svg" alt="" style="max-width:33px;">
                            </div>
                            <p class="font-size-8 heading-default-color font-weight-medium mb-0">{{$PlanName}}&trade; @if ($PlanName =='Laravel') + Livewire @endif</p>
                        </div>
                        <div class="d-flex align-items-center mb-6">
                            <div class="circle-59 bg-gray-3 mr-6">
                                <img src="https://cdn.budgetphp.com/assets/brands-light/php-brands.svg" alt="" style="max-width:33px;">
                            </div>
                            <p class="font-size-8 heading-default-color font-weight-medium mb-0">Custom {{$PlanName}} Website Design</p>
                        </div>
                        <div class="d-flex align-items-center mb-6">
                            <div class="circle-59 bg-gray-3 mr-6">
                                <img src="https://cdn.budgetphp.com/assets/brands-light/google-brands.svg" alt="" style="max-width:33px;">
                            </div>
                            <p class="font-size-8 heading-default-color font-weight-medium mb-0">SEO Performance Pro Optimized & SEO Copywriting
                            </p>
                        </div>


                        <p>See Also: <a wire:click="$emit('urlChange', '{{env('APP_URL')}}/en/lp3/drupal-web-design-packages')"  >Drupal</a>, <a href="{{env('APP_URL')}}/en/lp3/joomla-web-design-packages">Joomla</a>, <a href="{{env('APP_URL')}}/en/lp3/laravel-web-design-packages">Laravel</a>, <a href="{{env('APP_URL')}}/en/lp3/wordpress-web-design-packages">WordPress</a></p>
                    </div>
                </div>


                <script type="text/javascript">
        document.addEventListener('livewire:available', function () {
            window.livewire.on('urlChange', param => {
                history.pushState(null, null, param);
            })
        })
    </script>




            </div>
        </div>
    </div>
</div>
</div>
