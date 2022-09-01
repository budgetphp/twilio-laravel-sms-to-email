 <!-- heroFour Area -->
 <div class="bg-blue-1 position-relative pt-20 pt-sm-24 pt-md-27 pt-lg-35 pb-15 pb-md-14 pb-lg-33">
     <div class="container position-static">
         <div class="row position-static">
             <div class="col-xl-4 col-lg-4 col-md-10 position-static">
                 <div class="l4-hero-image-group pt-lg-3">
                     <div class="hero-images" data-aos="fade-right" data-aos-duration="600" data-aos-once="true">
                         <div class="img-1">
                             <img class="w-100 w-lg-auto shadow-14 opacity-8" src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/home-4/png/l4-hero-desktops-img.png" alt="">
                         </div>
                         <div class="img-2">
                             <img class="w-100 w-lg-auto shadow-14 rounded-top-15" src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/home-4/png/l4-hero-phone-img.png" alt="">
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12">
                 <div class="dark-mode-texts mt-8 mt-lg-0 pt-lg-16 ml-xl-25 ml-lg-10" data-aos="fade-left" data-aos-duration="600" data-aos-duration="500" data-aos-once="true">
                     <h1 class="font-size-13 mb-9 line-height-84 pr-xs-15 pr-lg-0"><?php
                                                                                    if (request()->route('term')) {

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

                                                                                            $termString = 'WooCommerce';
                                                                                        } elseif (str_contains($termString, 'laravel')) {

                                                                                            $termString = 'Laravel';
                                                                                        } else {
                                                                                            $termString = '';
                                                                                        }


                                                                                        $term = $termString;
                                                                                    } else {
                                                                                        $term = '';
                                                                                    }
                                                                                    ?>{{$term}} Website Maintenance Services
                     </h1>
                     <p class="font-size-8 mb-0 pr-md-10 pr-xl-18">Website Maintenance Services with Free Remote Backups, Matamo™ Analytics & Zabbix™ Performance/Uptime Monitoring for
                         <?php
                            ?>
                         {{$termString}} web sites by real devs.</p>

                         
                           
                           
                         </div>
                    
                      
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End heroFour Area -->