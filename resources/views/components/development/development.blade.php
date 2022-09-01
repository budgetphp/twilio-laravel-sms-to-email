<?php
$termstring = request()->route('term');
if (str_contains($termstring, 'joomla')) {
    $termstring = 'Joomla';
    $introtext = 'Top Joomla Programmers & Developers Since 2003.';
} elseif (str_contains($termstring, 'wordpress')) {
    $termstring = 'WordPress';
    $introtext = 'Top WordPress Programmers & Developers Since 2003.';
} elseif (str_contains($termstring, 'codeigniter')) {
    $termstring = 'CodeIgniter';
    $introtext = '18k';
} elseif (str_contains($termstring, 'drupal')) {
    $termstring = 'Drupal';
    $introtext = 'Top Drupal Programmers & Developers Since 2003.';
} elseif (str_contains($termstring, 'magento')) {
    $termstring = 'Magento';
    $introtext = 'Top Magento Programmers & Developers Since 2003.';
} elseif (str_contains($termstring, 'php')) {
    $termstring = 'PHP';
    $introtext = 'We are Agile Full-Stack PHP Web App Developers & DevOps Engineers (Cloud Sysadmins).';
} elseif (str_contains($termstring, 'woocommerce')) {
    $termstring = 'WooCommerce';
    $introtext = 'Top WooCommerce Programmers & Developers Since 2003.';
} elseif (str_contains($termstring, 'laravel')) {
    $introtext = 'We utilize Next-Gen Technologies like Laravel 8 with a Livewire reactive frontend in a PHP 8 Docker Stack.';
    $termstring = 'Laravel';
} else {
    $termstring = 'PHP';
    $introtext = 'Full-Stack PHP Web App Development & DevOps Engineering Services.';
}
?>



<div class="position-relative pt-22 pt-lg-31 pb-13 pb-lg-25 ">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Hero Content -->
            <div class="col-lg-7 col-md-10 col-sm-12 order-2 order-lg-1">
                <div class="mt-8 mt-lg-0 mr-xl-13 aos-init aos-animate" data-aos="fade-right" data-aos-duration="600" data-aos-once="true">
                    <h1 class="font-size-12 mb-9">{{$termstring}} Development Services</h1>
                    <p class="font-size-8 mb-lg-13 pr-xs-10 pr-sm-10 pr-md-18 pr-lg-8 pr-xl-15">{{$introtext}}
                    </p>
                    <div class="d-flex align-items-center py-6 mr-xl-15">

                        <div class="mt-0">
                            <a class="btn btn-blue-3 btn-3 rounded-5" href="{{env('APP_URL')}}/quote">Request Quote</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->
            <!-- Hero Image -->
            <div class="col-lg-5 col-md-7 col-xs-8 order-1 order-lg-2">
                <div class="pt-lg-3 aos-init aos-animate" data-aos="flip-right" data-aos-duration="600" data-aos-once="true">
                    <img  src="{{env('APP_CDN_URL')}}/assets/brands-blue/{{strtolower($termstring)}}-brands.svg" alt="" style="width:100%;">
                </div>
            </div>
            <!-- End Hero Image -->
        </div>
    </div>
</div>

@component('components.dohours.dohours')
    @endcomponent

<div class="bg-default-5 pt-13 pt-md-19 pt-lg-20 pb-14 pb-md-18 pb-lg-26 overflow-hidden">
    <div class="container">
        <!-- Section title -->
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-xl-6 col-lg-5 col-md-5 col-xs-8 aos-init aos-animate " data-aos="fade-bottom" data-aos-duration="600" data-aos-once="true">
                <div class="l4-image-group mt-18 ml-md-0 mb-8 mb-lg-0 mt-md-0 ml-xl-n15  mr-xl-19 text-center">
                    <img class="" src="{{env('APP_CDN_URL')}}/assets/hackerrank-cert.svg" alt="" style="width:88%;">
                 </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-7 pt-lg-23 pb-18 aos-init aos-animate" data-aos="fade-right" data-aos-duration="600" data-aos-once="true">
                <h3 class="font-size-11 mb-0 mb-10 pr-xs-18 pr-md-0">Hire  Full-Stack {{$termstring}} Developer</h3>
                <p class="font-size-7 mb-0 pr-xs-15 pr-md-0 pl-xl-2 mt-7 mt-lg-0 pr-lg-18">Our {{$termstring}} developers have been tested and certified by HackerRank&reg; and LinkedIn&reg; PHP testing.</p>
            </div>
        </div>
        <!-- End Section title -->
        <!-- Services -->
        <div class="pt-lg-9">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                        <div class="circle-60 bg-sunset text-white font-size-7">
                            <i class="fas fa-user-clock"></i>
                        </div>
                        <div class="mt-9">
                            <h4 class="font-size-8 mb-6">Real Time Reporting</h4>
                            <p class="font-size-5 mb-0 pr-xl-8">Monitor hours used on your projects with us in our dashboard panel</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" data-aos-once="true">
                        <div class="circle-60 bg-bluewood text-white font-size-7">
                            <i class="far fa-money-bill-alt"></i> </div>
                        <div class="mt-9">
                            <h4 class="font-size-8 mb-6"> Flat Rate & Hourly</h4>
                            <p class="font-size-5 mb-0 pr-xl-8">We quote both flat rate projects and by-the-hour projects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="aos-init aos-animate" data-aos="fade-up" data-aos-duration="600" data-aos-delay="600" data-aos-once="true">
                        <div class="circle-60 bg-buttercup text-white font-size-7" style="background-color:#f4502c !important;">
                            <i class="fas fa-laptop-code"></i> </div>
                        <div class="mt-9">
                            <h4 class="font-size-8 mb-6">Full-stack {{$termstring}} Experts</h4>
                            <p class="font-size-5 mb-0 pr-xl-8">We can custom program the back-end, front and even the server.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Services -->
    </div>
</div>