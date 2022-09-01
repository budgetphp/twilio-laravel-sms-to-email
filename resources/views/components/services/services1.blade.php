<?php
$termstring = request()->route('term');
if (str_contains($termstring, 'joomla')) {
    $termstring = 'joomla-';
    $termname = 'Joomla';
} elseif (str_contains($termstring, 'wordpress')) {
    $termstring = 'wordpress-';
    $termname = 'WordPress';
} elseif (str_contains($termstring, 'codeigniter')) {
    $termstring = 'codeigniter-';
    $termname = 'CodeIgniter';
} elseif (str_contains($termstring, 'drupal')) {
    $termstring = 'drupal-';
    $termname = 'Drupal';
} elseif (str_contains($termstring, 'magento')) {
    $termstring = 'magento-';
    $termname = 'Magento';
} elseif (str_contains($termstring, 'php')) {
    $termstring = '';
    $termname = '';
} elseif (str_contains($termstring, 'woocommerce')) {
    $termstring = 'wordpress-';
    $termname = 'WordPress';
} elseif (str_contains($termstring, 'laravel')) {
    $termstring = 'laravel-';
    $termname = 'Laravel';
} elseif (str_contains($termstring, 'react')) {
    $termstring = 'react-';
    $termname = 'React';
} elseif (str_contains($termstring, 'vue')) {
    $termstring = 'vuejs-';
    $termname = 'Vue.js';
} else {
    
    $termstring = 'web-';
    $termname = 'Web';
}
?>
<div class="bg-default-1 pt-14 pt-md-18 pt-lg-27 pb-13 pb-md-17 pb-lg-26">
    <div class="container">
        <!-- Section Title -->
        <div class="row align-items-center justify-content-center justify-content-lg-start mb-10 mb-lg-17">
            <div class="col-xl-5 col-lg-6 col-xs-10">
                <div class="text-center text-lg-left aos-init aos-animate" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                    <h2 class="font-size-11 font-weight-medium pr-md-6 pr-lg-9 pr-xl-0 mb-0">Our Popular Services
                    </h2>
                </div>
            </div>
        </div>
        <!-- End Section Title -->
        <div class="row justify-content-center aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900" data-aos-once="true">
            <div class="col-lg-6 col-md-10">
                <!-- Single Blog -->
                <a href="{{env('APP_URL')}}/en/development/{{$termstring}}development" class="bg-white d-xs-flex align-items-center px-9 py-10 mb-9 shadow-2 gr-hover-1 col-sm-12">
                    <div class="mr-10">
                        <img class="square-116" src="{{env('APP_CDN_URL')}}/assets/icons/website-svgrepo-com.svg" alt="">
                    </div>
                    <div class="mt-8 mt-xs-0">
                        <h4 class="font-size-8 font-weight-medium text-dark-cloud mb-5 line-height-34">Full Stack {{$termname}} Development</h4>
                        <div class="d-flex align-items-center flex-wrap">


                        </div>
                    </div>
                </a>
                <!-- End Single Blog -->
                <!-- Single Blog -->
                <a href="{{env('APP_URL')}}/en/maintenance/{{$termstring}}web-site-maintenance-services" class="bg-white d-xs-flex align-items-center px-9 py-10 mb-9 shadow-2 gr-hover-1 col-sm-12">
                    <div class="mr-10">
                        <img class="square-116" src="{{env('APP_CDN_URL')}}/assets/icons/browser-ui-svgrepo-com.svg" alt="">
                    </div>
                    <div class="mt-8 mt-xs-0">
                        <h4 class="font-size-8 font-weight-medium text-dark-cloud mb-5 line-height-34">{{$termname}} Web Site/App Maintenence Plans</h4>
                        <div class="d-flex align-items-center flex-wrap">

                        </div>
                    </div>
                </a>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-6 col-md-10 mt-lg-n23">
                <!-- Single Blog -->
                <a href="{{env('APP_URL')}}/en/design/{{$termstring}}web-design-packages" class="bg-white d-xs-flex align-items-center px-9 py-10 mb-9 shadow-2 gr-hover-1 col-sm-12">
                    <div class="mr-10">
                        <img class="square-116" src="{{env('APP_CDN_URL')}}/assets/icons/web-ui-svgrepo-com.svg" alt="">
                    </div>
                    <div class="mt-8 mt-xs-0">
                        <h4 class="font-size-8 font-weight-medium text-dark-cloud mb-5 line-height-34">
                        {{$termname}} Web Site Design/ReDesign Packages</h4>
                        <div class="d-flex align-items-center flex-wrap">

                        </div>
                    </div>
                </a>
                <!-- End Single Blog -->
                <!-- Single Blog -->
                <a href="{{env('APP_URL')}}/en/devops" class="bg-white d-xs-flex align-items-center px-9 py-10 mb-9 shadow-2 gr-hover-1 col-sm-12">
                    <div class="mr-10">
                        <img class="square-116" src="{{env('APP_CDN_URL')}}/assets/icons/linux-svgrepo-com.svg" alt="">
                    </div>
                    <div class="mt-8 mt-xs-0">
                        <h4 class="font-size-8 font-weight-medium text-dark-cloud mb-5 line-height-34">Cloud Provider Support Services</h4>
                        <div class="d-flex align-items-center flex-wrap">

                        </div>
                    </div>
                </a>
                <!-- End Single Blog -->
                <!-- Btn Section -->
                <div class="btn-section text-center mt-10 mt-lg-13">
                 </div>
                <!-- End Btn Section -->
            </div>
        </div>
    </div>
</div>