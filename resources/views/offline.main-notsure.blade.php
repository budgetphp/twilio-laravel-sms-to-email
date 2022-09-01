<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PHP Development Company | BudgetPHP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon
	============================================= -->
    <link rel="shortcut icon" href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/favicon/favicon.png">
    <link rel="apple-touch-icon" href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/favicon/apple-touch-icon-114x114.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/maintencev1/font/flaticon.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/maintencev1/css/fxt-animation.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/maintencev1/style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="wrapper">
        <div class="ofcanvas-triger btn-toggle btn-top11">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <!-- Main Body Area Start Here -->
        <div class="fxt-template-layout9">
            <div class="fxt-main-content has-animation" data-bg-image="{{env('APP_CDN_URL')}}/assets/maintencev1/media/office.jpg">
                <!-- Animation Start Here -->
                <div id="particles-js"></div>
                <!-- Animation End Here -->
                <div class="translate-bottom-100 transition-100 transition-delay-500">
                    <div class="fxt-logo">
                        <img src="{{env('APP_CDN_URL')}}/assets/budgetphp-dark-light-clean.png" alt="Logo" style="max-width:333px;">
                    </div>
                </div>
                <div class="fxt-contents">
                    <div class="translate-bottom-100 transition-100 transition-delay-800">
                        <div class="fxt-sub-title">FULL STACK <i class="fab fa-php"></i> WEB DEVELOPMENT</div>
                    </div>
                    <div class="translate-bottom-100 transition-100 transition-delay-1000">
                        <h1 class="fxt-main-title"> SOFTWARE DEVELOPER</h1>
                    </div>
                    <div class="translate-bottom-100 transition-100 transition-delay-1200">
                        <p class="fxt-paragraph">We build the worlds best web applications using the latest leading edge technology since 2003.</p>
                    </div>
                </div>
                <div class="fxt-buttons">
                    <div class="translate-left-50 transition-100 transition-delay-1500">
                        <a href="#fxt-page-content" class="btn-toggle fxt-btn fxt-btn-ghost" id="triger-page-content">MORE INFO</a>
                    </div>
                    <div class="translate-right-50 transition-100 transition-delay-1500">
                        <button type="button" class="fxt-btn fxt-btn-fill" data-toggle="modal" data-target="#exampleModalCenter">SUBSCRIBE</button>
                    </div>
                </div>
                <div class="fxt-socials">
                    <ul>

                        <li class="fxt-linkedin translate-right-100 transition-100 transition-delay-2000">
                            <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>

                    </ul>
                </div>
                <div class="translate-bottom-100 transition-100 transition-delay-2500">
                    <div class="fxt-footer">
                        <p>&copy; {{ now()->year }} budgetphp.com — All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            <div id="fxt-page-content" class="fxt-page-content">
                <section class="fxt-about-wrap has-animation">
                    <div class="container-fluid full-width">
                        <div class="content-heading">
                            <div class="translate-bottom delay-500">
                                <h2 class="content-title">ABOUT US</h2>
                            </div>
                            <div class="translate-bottom delay-700">
                                <p class="content-paragraph">We are not your basic web design company, we have more than 20 years of experience. We are that web developer your competition is scared you will find. We prefer to program custom websites and web applications over using cookie-cutter solutions for many reasons such as an enhanced user experience and longevity of the website's code which translates into requiring less maintenance, errors and downtime. Custom programming your websites equals less software bloat and gives you a major advantage over the competition, such as the speed of your website/web application leading to higher rankings on search engines, more traffic and an experience your users will enjoy. Custom programming your website allows the website to be coded specifically to your needs rather than trying to fit your needs into existing plugins or solutions and adds much more value to the website application you create. We prefer hosting websites in Docker rather the traditional hosting for many reasons such as 40% speed increase, hardened security , multi-container redundancy as well as once again that custom-tailored solution over cookie-cutter one size fits all solutions. We believe in headless and API approaches in development for enhanced security, performance, less maintenance and downtime. We recommend containerizing web stack services on internal Docker networks out of the reach of malware, hackers and the overall internet.


                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="fxt-project-wrap has-animation">
                    <div class="container-fluid full-width">
                        <div class="content-heading">

                            <div class="translate-bottom delay-1200">

                                <div class="box-center">
                                    <b style="margin-top:33px;">Some technologies we support.</b>

                                    <div class="row" style="display:flex;flex-wrap: wrap;align-items:center;text-align:center;">
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/php-brands.svg" alt="php">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/mysql-brand.svg" alt="mysql">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/sqllite-brand.svg" alt="sqlite">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/laravel-brands.svg" alt="laravel">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/wordpress-brands.svg" alt="wordpress">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/joomla-brands.svg" alt="joomla">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/drupal-brands.svg" alt="drupal">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/magento-brands.svg" alt="magento">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/symfony-brands.svg" alt="symfony">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/codeigniter-brannd.svg" alt="codeigniter">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/lumen-brand.svg" style="max-height:55px;margin-right:auto;margin-left:auto;" alt="laravel lumen">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/yii-framework-brand.svg" alt="yii framework">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/redis-brand.svg" alt="redis">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/html5-brands.svg" alt="html5">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/css3-alt-brands.svg" alt="css3">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/js-brands.svg" alt="javascript">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/jquery-brand.svg" alt="jquery">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/sass-brands.svg" alt="sass">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/less-brands.svg" alt="less css">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/slim-brand.svg" alt="slim framework">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/bootstrap-brands.svg" alt="bootstrap">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/docker-brands.svg" alt="docker">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/apache-brand.svg" style="max-height:45px;" alt="apache">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/nginx-brand.svg" alt="nginx">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/vuejs-brands.svg" alt="vuejs">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/angular-brands.svg" alt="angular">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/rancher-labs-brand.svg" alt="rancher">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/aws-brands.svg" alt="aws">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/linode-brands.svg" alt="linode">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/digital-ocean-brands.svg" alt="digital ocean">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/git-brands.svg" alt="git">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/gitlab-brand.svg" alt="gitlab">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/adwords-brand.svg" alt="adwords">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/bing-ads-brand.svg" style="width:100%;height:auto;" alt="bing">
                                        </div>
                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/stripe-brands.svg" alt="stripe">
                                        </div>

                                        <div class="col-xs-2 col-sm-1 col-md-2 col-lg-2 col-xl-2 center">
                                            <img src="{{env('APP_CDN_URL')}}/assets/brands-dark/twilio-brand.svg" alt="twilio">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="translate-bottom delay-1500">
                            <div id="project-wrapper" class="row no-gutters">
                                <div class="col-xl-4 col-lg-6 col-md-4 col-6">
                                    <div class="fxt-project-box">
                                        <a href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/project/project1.jpg" class="zoom popup-triger"><img src="assets/maintencev1/media/project/project1.jpg" alt="Project"></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-6">
                                    <div class="fxt-project-box">
                                        <a href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/project/project2.jpg" class="zoom popup-triger"><img src="assets/maintencev1/media/project/project2.jpg" alt="Project"></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-6">
                                    <div class="fxt-project-box">
                                        <a href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/project/project3.jpg" class="zoom popup-triger"><img src="assets/maintencev1/media/project/project3.jpg" alt="Project"></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-6">
                                    <div class="fxt-project-box">
                                        <a href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/project/project4.jpg" class="zoom popup-triger"><img src="assets/maintencev1/media/project/project4.jpg" alt="Project"></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-6">
                                    <div class="fxt-project-box">
                                        <a href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/project/project5.jpg" class="zoom popup-triger"><img src="assets/maintencev1/media/project/project5.jpg" alt="Project"></a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-6">
                                    <div class="fxt-project-box">
                                        <a href="{{env('APP_CDN_URL')}}/assets/maintencev1/media/project/project6.jpg" class="zoom popup-triger"><img src="assets/maintencev1/media/project/project6.jpg" alt="Project"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="fxt-contact-wrap has-animation">
                    <div class="container-fluid full-width">
                        <div class="content-heading">
                            <div class="translate-bottom delay-300">
                                <h2 class="content-title">REQUEST QUOTE</h2>
                            </div>

                        </div>
                        <div class="fxt-address-wrap">
                            <div class="translate-bottom delay-800">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                                        <div class="fxt-address-box">
                                            <div class="item-icon">
                                                <i class="flaticon-placeholder"></i>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title">Address</h3>
                                                <div class="item-text">Pittsburg, PA USA</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-6 col-12">
                                        <div class="fxt-address-box">
                                            <div class="item-icon">
                                                <i class="flaticon-phone"></i>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title">Phone</h3>
                                                <div class="item-text">(888) 801-7110</div>
                                          

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fxt-form-wrap">
                            <form action="contact" method="POST" id="contact-form" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <div class="translate-bottom delay-1100">
                                            <input type="text" class="form-control" placeholder="Full Name" name="name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <div class="translate-bottom delay-1300">
                                            <input type="email" class="form-control" placeholder="E-mail" name="email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <div class="translate-bottom delay-1300">
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" data-error="Invalid Phone Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <div class="translate-bottom delay-1300">
                                            <input type="file" class="" placeholder="Upload" name="upload" data-error="Invalid File">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-group" style="clear:both;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="is_hourly" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Hourly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="is_hourly" id="inlineRadio2" value="2">
                                            <label class="form-check-label" for="inlineRadio2">Flat Rate</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="is_hourly" id="inlineRadio3" value="3">
                                            <label class="form-check-label" for="inlineRadio3">Unsure</label>
                                        </div>

                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <div class="translate-bottom delay-1500">
                                            <textarea name="message" id="form-message" class="form-control textarea" placeholder="Your Message" cols="30" rows="7" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <div class="translate-bottom delay-1700">
                                            <input type="hidden" class="form-control" placeholder="Subject" name="subject" value="Quote Request">
                                            <input type="hidden" value="@auth{{\Auth::user()->id}}@endauth" name="user_id">
                                            <input type="hidden" value="" name="currency">
                                            <input type="hidden" value="" name="budget">
                                            <input type="hidden" value="" name="domain">
                                            <input type="hidden" value="<?php echo Request::ip(); ?>" name="ip_address">

                                            <button type="submit" class="fxt-btn fxt-btn-fill">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>

                            <hr>
                            @if (Route::has('login'))
                            <div class="right-0 px-6 py-4 sm:block">
                                @auth
                                You are logged in, visit your <a href="{{ route('home') }}" class="text-sm text-gray-700 underline">dashboard</a>

                                @else
                                <!--  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a> -->

                                @if (Route::has('register'))
                                <!--  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>  -->
                                @endif
                                @endauth
                            </div>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Main Body Area End Here -->
        <!-- Modal Area Start Here -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="notify-icon">
                            <img src="{{env('APP_CDN_URL')}}/assets/maintencev1/media/icon.svg" alt="strongcode" style="max-width:133px;">
                        </div>
                        <h2 class="item-title">Subscribe Now</h2>

                        <form action="{{env('APP_URL')}}/subscribersaction" class="subscribe-form" method="POST" data-pixsaas="newsletter-subscribe">
                            {{ csrf_field() }}
                            <div class="input-group stylish-input-group">
                                <div class="item-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <input type="name" name="name" class="form-control" id="newsletter-form-email" placeholder="Enter your Name">

                            </div>

                            <div class="input-group stylish-input-group">
                                <div class="item-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <input type="email" name="email" class="form-control" id="newsletter-form-email" placeholder="Enter your Email" required>
                                <input type="hidden" name="is_subscribed" class="" id="newsletter-form-is-subuscribed" value="1">

                                <span class="input-group-addon">
                                    <button type="submit">Subscribe</button>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-result alert">
                                <div class="content"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Area End Here -->
    </div>
    <!-- jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <!-- Pace Preloader js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.3/pace.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
    <!-- Magic Popup js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Particles js -->
    <script src="{{env('APP_CDN_URL')}}/assets/maintencev1/js/particles.js"></script>
    <script src="{{env('APP_CDN_URL')}}/assets/maintencev1/js/particles-4.js"></script>
    <!-- Validator js -->
    <script src="{{env('APP_CDN_URL')}}/assets/maintencev1/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="{{env('APP_CDN_URL')}}/assets/maintencev1/js/main.js"></script>
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
</body>

</html>