<?php
$termString = request()->route('term');
if (str_contains($termString, 'joomla')) {
  $termString = 'Joomla';
} elseif (str_contains($termString, 'wordpress')) {
  $termString = 'WordPress';
} elseif (str_contains($termString, 'codeigniter')) {
  $termString = 'CodeIgniter';
} elseif (str_contains($termString, 'drupal')) {
  $termString = 'Drupal';
} elseif (str_contains($termString, 'magento')) {
  $termString = 'Magento';
} elseif (str_contains($termString, 'php')) {
  $termString = 'PHP';
} elseif (str_contains($termString, 'woocommerce')) {
  $termString ='WooCommerce';
} elseif (str_contains($termString, 'laravel')) {
  $termString ='Laravel';
} else {
  $termString = 'Web';
}
?>





<div class="bg-default-4 pt-28 pt-md-32 pt-lg-30 pt-xl-33 pb-15 pb-md-19 pb-lg-34 docker d-none d-lg-block d-xl-block" style="">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <!-- Left Image -->
      <div class="col-xl-6 col-lg-5 col-md-8 col-xs-11">
        <!-- content img start -->
        <div class="l4-content-img-group">
          <div class="pt-30 pt-lg-0 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <h6 class="font-size-3 text-dodger-blue-1 text-uppercase mb-9 letter-spacing-normal">Expert Advice</h6>
            <h2 class="font-size-10 mb-8 letter-spacing-n83">Ask Our {{$termString}} Developer on Telegram</h2>
            <p class="font-size-7 mb-0">Ask our Full-Stack Web Developer with over 20 years of web application development experience any question about your next upcoming web dev project for free. </p>



            <p> <a class="btn btn-sunset btn-xl h-55 rounded-5 mt-10" href="https://t.me/budgetphp" target="_BLANK">Send Message</a></p>


          </div>
        </div>
      </div>
      <!-- End Left Image -->
      <!-- Right Image -->
      <div class="col-xl-5 offset-lg-1 col-lg-6 col-md-8 mt-n13 mt-md-n8 mt-lg-n0 text-center">



        <i class="fab fa-telegram fa-5x w-100 text-dodger-blue-1" style="font-size: 28em !important;"></i>




      </div>
      <!-- End Right Image -->
    </div>
  </div>
</div>