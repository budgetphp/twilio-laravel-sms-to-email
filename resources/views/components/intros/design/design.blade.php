<?php
$termstring = request()->route('term');
if (str_contains($termstring, 'joomla')) {
    $termstring = 'Joomla';
    $introtext = 'Joomla! is a content management system (CMS) for publishing web content. ';
    $label = 'Choose Joomla for User Access Levels, Multi-Language Support and CMS Capability.';
} elseif (str_contains($termstring, 'wordpress')) {
    $termstring = 'WordPress';
    $introtext = 'WordPress is the world\'s most popular content management system powering 34% of all websites on the internet.';
    $label = 'Choose WordPress for Less Complex Sites with Easy Extensibility, Ease of CMS Use and Popular Support.';
} elseif (str_contains($termstring, 'codeigniter')) {
    $termstring = 'CodeIgniter';
    $introtext = '18k';
    $label = '';
} elseif (str_contains($termstring, 'drupal')) {
    $termstring = 'Drupal';
    $introtext = 'Drupal is a enterprise-level CMS platform for complex projects, tending to be on the larger side.';
    $label = 'Choose Drupal for User Access Levels, Multi-Language Support and CMS Capability.';
} elseif (str_contains($termstring, 'magento')) {
    $termstring = 'WordPress';
    $introtext = '11k';
    $label = '';
} elseif (str_contains($termstring, 'php')) {
    $termstring = 'Laravel';
    $introtext = 'Laravel is the worlds most popular php framework and is highly recommended by us.';
    $label = 'Choose Laravel for Max Performance, Uptime and Reliability.';
} elseif (str_contains($termstring, 'woocommerce')) {
    $termstring = 'WordPress';
    $introtext = '11k';
    $label = '';
} elseif (str_contains($termstring, 'laravel')) {
    $introtext = 'Laravel is the worlds most popular php framework and is highly recommended by us.';
    $termstring = 'Laravel';
    $label = 'Choose Laravel for Max Performance, Uptime and Reliability.';
  } elseif (str_contains($termstring, 'vue')) {
    $introtext = 'Vue.js is a Front-end Javascript framework perfect for back-end APIs if required.';
    $termstring = 'Vue.js';
    $label = 'Vue. js is a progressive framework for JavaScript used to build web interfaces and one-page applications.';
  } elseif (str_contains($termstring, 'react')) {
    $introtext = 'React is a Front-end Javascript framework perfect for back-end APIs if required.';
    $termstring = 'React';
    $label = 'React is a free and open-source front-end JavaScript library for building user interfaces based on UI components.';
} else {
    $termstring = 'Laravel';
    $introtext = 'Laravel is the worlds most popular php framework and is highly recommended by us.';
    $label = 'Choose Laravel for Max Performance, Uptime and Reliability.';
}
?>


<div class="position-relative pt-35 pt-md-31 pt-lg-35 pb-15 pb-md-19 pb-lg-33 position-relative overflow-hidden">
      <div class="container position-static">
        <div class="row align-items-center justify-content-center position-static">
          <!-- Hero Image -->
          <div class="col-xl-6 col-lg-6 col-md-9 col-xs-8 position-static">
            <div class="l6-hero-image-group">
              <img class="w-100 aos-init aos-animate" src="{{env('APP_CDN_URL')}}/assets/brands-blue/{{strtolower($termstring)}}-brands.svg" alt="" data-aos="fade-up" data-aos-once="true" style="max-width:990px !important;width:100% !important;">
              <div class="img-1">
               </div>
            </div>
          </div>
          <!-- End Hero Image -->
          <!-- Hero Content -->
          <div class="col-lg-6 col-md-9 col-sm-11">
            <div class="mt-8 mt-lg-0 pr-md-11 pr-lg-0 pr-xl-10 aos-init aos-animate" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
              <h1 class="font-size-13 mb-8 pr-xs-31 pr-sm-21 pr-md-10 pr-lg-0 line-height-84">{{$termstring}}&nbsp;Web Design&nbsp;Packages</h1>
              <p class="font-size-7 mb-0 pr-sm-10 pr-md-10 pr-lg-0 pr-xl-18">{{$introtext}}</p>
              <div class="mt-10">
                <a class="btn btn-blue-3 btn-3 rounded-5" href="#pro">Order Now</a>
              </div>
            </div>
          </div>
          <!-- End Hero Content -->
        </div>
      </div>
      <div class="absolute-bottom-right mb-13 mb-md-17 mb-lg-26 d-none d-sm-block mr-n25 mr-md-n15 mr-lg-n7 aos-init aos-animate" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
       </div>
    </div>


    <div class="bg-purple-heart py-10" style="background-color: #f4502c !important;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
           
                <span class="mr-3" style="color:#fff;">
                <img class="fa" src="{{env('APP_CDN_URL')}}/assets/brands-white/{{strtolower($termstring)}}-brands.svg"  style="width:33px;">

                          {{$label}}  </span>
            </div>
          </div>
        </div>
      </div>
    </div>