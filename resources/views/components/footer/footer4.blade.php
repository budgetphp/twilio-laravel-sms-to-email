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
} else {
    $termstring = '';
    $termname = 'Web';
}
?>
  
  <!-- Footer Area -->
  <div class="bg-charade pt-12 pb-10">
    <div class="container">
      <div class="pb-13">
        <div class="row align-items-center justify-content-lg-between">
          <!-- Brand Logo -->
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="brand-logo mb-5 mb-sm-0 mt-md-4 dark-mode-texts">
              <a href="{{env('APP_URL')}}">
                <img class="mx-auto mx-0 light-version-logo default-logo" src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/logo-main-black.png" alt="">
                <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" style="max-width:133px;" alt="" class="dark-version-logo mx-auto mx-0">
             
              </a>
            </div>
            <p class="font-size-5 mb-0 text-bali-gray pr-sm-10 pr-md-0"><i class="fas fa-sun"></i> This website was built using clean solar energy.</p>
     
          </div>
          <!-- End Brand Logo -->
          <!-- Newsletter -->
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
            <div class="">
              <div class="shadow-3 rounded-4">
 
                             <a class="btn btn-blue-3 btn-3 rounded-5 mt-10" href="{{env('APP_URL')}}/en/quote">Request Quote</a>

 


 
              </div>
            </div>
          </div>
          <!-- End Newsletter -->
        </div>
      </div>
      <div class="border-top border-default-color dark-mode-texts d-flex align-items-center justify-content-center justify-content-sm-between flex-column flex-sm-row flex-wrap pt-9">
     
      
      <div class=" d-none d-lg-block d-xl-block">
          <ul class="d-flex align-items-center list-unstyled mb-5 mb-sm-0 ">
          <li class=""><a class="pr-5 text-white gr-hover-text-dodger-blue-1 font-size-5 pr-12" href="{{env('APP_URL')}}/en/design/{{$termstring}}web-design-packages">{{$termname}} Design Packages</a></li>

            <li class=""><a class="pr-5 text-white gr-hover-text-dodger-blue-1 font-size-5 pr-12" href="{{env('APP_URL')}}/en/development/{{$termstring}}development">{{$termname}} Development</a></li>

            <li class=""><a class="pr-5 text-white gr-hover-text-dodger-blue-1 font-size-5 pr-12" href="{{env('APP_URL')}}/en/maintenance/{{$termstring}}web-site-maintenance-services">{{$termname}} Maintenance</a></li>
            <li class=""><a class="pr-5 text-white gr-hover-text-dodger-blue-1 font-size-5 pr-12" href="{{env('APP_URL')}}/en/evaluation">Free Website Evaluation</a></li>

            
          </ul>
        </div>
        <div class="">
          <ul class="d-flex align-items-center list-unstyled mb-0">

            <li>  <a class="pl-5 text-white gr-hover-text-dodger-blue-1 font-size-5 pr-6" href="https://www.linkedin.com/in/jason-phillips-7457a49a/" target="BLANK"><i class="fab fa-linkedin"></i></a>  <a class="text-white gr-hover-text-dodger-blue-1 font-size-5 " href="{{env('APP_URL')}}/en/privacy"><small>Privacy</small></a> | 
           <a class="pr-5 text-white gr-hover-text-dodger-blue-1 font-size-5 pr-12" href="{{env('APP_URL')}}/en/terms"><small>Terms</small></a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Area -->