<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en-US">
<?php
$techString = request()->route('technology');
$technology = str_replace("-", " ", $techString);

$skillString = request()->route('skill');
$skill = str_replace("-", " ", $skillString);
?>

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- Stylesheets
	============================================= -->
	<link href="{{env('APP_CDN_URL')}}/assets/landingv1/css/css-assets.css" rel="stylesheet">
	<link href="{{env('APP_CDN_URL')}}/assets/landingv1/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/et-line@1.0.1/style.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,500i,600,600i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="{{env('APP_CDN_URL')}}/assets/landingv1/images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="{{env('APP_CDN_URL')}}/assets/landingv1/images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{{env('APP_CDN_URL')}}/assets/landingv1/images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{{env('APP_CDN_URL')}}/assets/landingv1/images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Title
	============================================= -->
	<title>
		<?php
		$techString = request()->route('technology');
		$technology = str_replace("-", " ", $techString);
		echo ucwords($technology);
		?>

		<?php
		$skillString = request()->route('skill');
		$skill = str_replace("-", " ", $skillString);
		echo ucwords($skill);
		?> | budgetphp.com
	</title>

</head>

<body>


	<div class="preloader">
		<img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-icon-dark.svg" class="loader">
	</div>
	<style>
		.banner-parallax .bg-element {
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 100%;
		}

		.preloader {
			align-items: center;
			background: rgb(23, 22, 22);
			display: flex;
			height: 100vh;
			justify-content: center;
			left: 0;
			position: fixed;
			top: 0;
			transition: opacity 0.3s linear;
			width: 100%;
			z-index: 9999;
		}

		.loader {}

		.loader {

			width: 120px;
			height: 120px;
			animation: spin 2s linear infinite;
		}

		@keyframes spin {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}
	</style>


	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Banner
		============================================= -->
		<section id="banner">

			<div class="banner-parallax" data-banner-height="700">
				<img src="{{env('APP_CDN_URL')}}/assets/maintencev1/media/office.jpg" alt="">
				<div class="overlay-colored color-bg-theme opacity-80"></div><!-- .overlay-colored end -->
				<div class="slide-content">

					<div class="container">
						<div class="row">
							<div class="col-md-7 pr-40">

								<div class="banner-center-box text-white">
									<a href="{{env('APP_URL')}}/en/lp4/<?php echo request()->route('technology'); ?>-<?php echo request()->route('skill'); ?>"> <img class="logo-banner" src="{{env('APP_CDN_URL')}}/assets/landingv1/images/Budgetphp-light.svg" style="max-width:233px;" alt=""></a>


									<h1>
										<?php
										$techString = request()->route('technology');
										$technology = str_replace("-", " ", $techString);
										echo ucwords($technology);
										?>

										<?php
										$skillString = request()->route('skill');
										$skill = str_replace("-", " ", $skillString);
										echo ucwords($skill);
										?>


									</h1>
									<div class="description">
									Leading-edge web app development services since 2003.
										<p><a href="{{env('APP_URL')}}/en/lp4/<?php echo request()->route('technology'); ?>-<?php echo request()->route('skill'); ?>" class="" style="color: #fff;border-bottom: 2px solid #f4502c; 
    line-height: 1.5;">Learn More</a></p>

									</div>

								</div><!-- .banner-center-box end -->

							</div><!-- .col-md-7 end -->
							<div class="col-md-5">

								<div class="banner-center-box">
									<div class="cta-subscribe cta-subscribe-2 box-form">
										<i class="cs-arrow " style="padding:1px;"><img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-icon-light.svg" alt=""></i>
										<div class="box-content">
											<script src="https://www.google.com/recaptcha/api.js" async defer></script>


											<script>
												function setResponse(response) {
													document.getElementById('captcha-response').value = response;
												}
											</script>
											<form id="form-cta-subscribe-2" action="{{env('APP_URL')}}/contact" method="POST" enctype="multipart/form-data">
												{{ csrf_field() }}
												{{ method_field('POST') }}

												<div class="cs-notifications">
													<div class="cs-notifications-content"></div>
												</div><!-- .cs-notifications end -->
												<div class="form-group">
													<input type="text" name="name" id="cs2Name" class="form-control" placeholder="* Your Name" data-error="Name field is required" required>
												</div><!-- .form-group end -->
												<div class="form-group">
													<input type="text" name="email" id="cs2Email" class="form-control" placeholder="* Your Email" data-error="eMail field is required" required>
												</div><!-- .form-group end -->
												<div class="form-group">
													<input type="text" name="phone" id="cs2PhoneNum" class="form-control" placeholder="Phone Number">
												</div><!-- .form-group end -->

												<div class="form-group">
													<input type="file" name="upload" id="upload" class="form-control" placeholder="File Upload">
												</div><!-- .form-group end -->

												<div class="form-group form-inline">
													<div class="form-check form-check-inline radio-inline radio" style="margin-top:0px !important;">
														<label style="padding-left: 0px !important;" class="form-check-label" for="inlineRadio1">Hourly</label>

														<input style="height:auto  !important;position: relative !important;" class="form-check-input" type="radio" name="is_hourly" id="inlineRadio1 inlineRadio" value="1" checked>
													</div>
													<div class="form-check form-check-inline radio-inline radio" style="margin-top:0px !important;">
														<label style="padding-left: 0px !important;" class="form-check-label" for="inlineRadio2">Flat Rate</label>

														<input style="height:auto !important;position: relative !important;" class="form-check-input" type="radio" name="is_hourly" id="inlineRadio2 inlineRadio" value="2">
													</div>
													<div class="form-check form-check-inline radio-inline radio" style="margin-top:0px !important;">
														<label style="padding-left: 0px !important;" class="form-check-label" for="inlineRadio2">Unsure</label>

														<input style="height:auto !important;position: relative !important;" class="form-check-input" type="radio" name="is_hourly" id="inlineRadio2 inlineRadio" value="3">
													</div>
												</div><!-- .form-group end -->

												<div class="form-group">
													<textarea gcaptcha-execute="yes" style="height:133px !important;" name="message" id="message" class="form-control textarea" placeholder="* Your Message" cols="30" rows="1" data-error="Message field is required" required></textarea>
												</div><!-- .form-group end -->


												<div class="form-group">
													<input type="hidden" class="form-control" placeholder="Subject" name="subject" value="Quote Request for: <?php echo $technology; ?> <?php echo $skill; ?> ">
													<input type="hidden" value="" name="user_id" id="user_id">
													<input type="hidden" value="" name="currency" id="currency">
													<input type="hidden" value="" name="budget" id="budget">
													<input type="hidden" value="<?php echo request()->route('technology') . '-' . request()->route('skill'); ?>" name="pageslug" id="pageslug">

													<input type="hidden" value="<?php echo Request::ip(); ?>" name="ip_address" id="ip_address">
													<input type="hidden" id="captcha-response" name="captcha-response" />
													<div id='recaptcha' class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_V2_INVISIBLE_SITE')}}" data-callback="setResponse" data-badge="bottomleft" data-size="invisible" style="display:none;"></div>

													<input type="submit" class="form-control" value="Submit Quote">


												</div><!-- .form-group end -->

												<style>
													.quote-preloader {
														align-items: center;
														display: flex;
														height: 100vh;
														justify-content: center;
														left: 0;
														position: fixed;
														top: 0;
														transition: opacity 0.3s linear;
														width: 100%;
														z-index: 9999;
													}


													.quote-loader {

														width: 120px;
														height: 120px;
														animation: spin 2s linear infinite;
													}

													@keyframes spin {
														0% {
															transform: rotate(0deg);
														}

														100% {
															transform: rotate(360deg);
														}
													}
												</style>
												<div class="form-response"></div>

											</form><!-- #form-cta-subscribe-2 end -->
										</div><!-- .box-content end -->
									</div><!-- .box-form end -->
								</div><!-- .banner-center-box end -->

							</div><!-- .col-md-5 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .slide-content end -->
			</div><!-- .banner-parallax end -->

		</section><!-- #banner end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div id="content-wrap">

				<!-- === Intro Features =========== -->
				<div id="intro-features" class="flat-section">

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-6">

									<div class="box-info mb-md-50">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fa fa-bullseye"></i></div>
										<div class="box-content">
											<h4>Flexible Pricing Options</h4>
											<p>
												Whether you have a small task or a large project we offer hourly flat, hourly subscription and flat-rate per project pricing.
											</p>
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->

								</div><!-- .col-md-6 end -->
								<div class="col-md-6">

									<div class="box-info">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="far fa-clock"></i></div>
										<div class="box-content">
											<h4>Round the Clock Support</h4>
											<p>
												No matter if you live on the west or east coast of the USA or in the UK if we can we may adjust our schedule to better serve you.
											</p>
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->

								</div><!-- .col-md-6 end -->
								<div class="divider-70"></div>
								<div class="col-md-6">

									<div class="box-info mb-md-50">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fas fa-magic"></i></div>
										<div class="box-content">
											<h4>Innovative, Creative & Viable</h4>
											<p>
												Our long term experience comes with a level of professionalism that can not be performed by most.
											</p>
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->

								</div><!-- .col-md-6 end -->
								<div class="col-md-6">

									<div class="box-info">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="far fa-check-circle"></i></div>
										<div class="box-content">
											<h4>Startups, Small Business & Enterprise</h4>
											<p>
												We are always qualifying and expanding our team looking for the most talented and skilled professionals to better serve you. </p>
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->

								</div><!-- .col-md-6 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === Watch Video =========== -->
				<div id="watch-video" class="flat-section center-vertical" data-scroll-index="2">

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-6">

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
									</div><!-- .box-center end -->

								</div><!-- .col-md-6 end -->
								<div class="col-md-6 pl-50">

									<div class="box-center">
										<h3 style="margin-top:33px;">We create customized full-stack web solutions.</h3>
										<p>
											Our highly talented teams have hands-on experience in dealing with complex level projects.
										</p>
										<ul class="list check">
											<li>Web Application Development</li>

											<li>Web Design & Development</li>
											<li>Maintenance & Support</li>
											<li>Migration & Upgrades</li>
											<li>SaaS (Software as a Service)</li>
											<li>eCommerce Development</li>
											<li>DevOps (Cloud Sysadmin)</li>
											<li>PPC & SEO</li>
										</ul><!-- .list.angle-right end -->
									</div><!-- .box-center end -->

								</div><!-- .col-md-6 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === Clients Testimonials =========== -->
				<div id="clients-testimonials" class="flat-section">

					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">

									<div class="slider-testimonials">
										<ul class="owl-carousel">
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															When it comes to php programming, I highly recommend budgetphp.com. </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/php-brand.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>CEO </h4>
															<span>SaaS Service</span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															They always find the best solutions for my company. </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/laravel-brand.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>Owner  </h4>
															<span>Auto Parts Distributor</span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															They made me feel as my project is their project. </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/wordpress-brand.svg" alt="" style="height:133px;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>CTO </h4>
															<span>Brookstone International </span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															They’re a team of developers who enjoy programming. </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/joomla-brand.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>President </h4>
															<span>leanpianolive</span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															They invested themselves in our success produced very high-quality infrastrucure in Docker containers. </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/docker.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>CEO </h4>
															<span>ClientsFlo</span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															They built exactly what we wanted!!! </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/stripe-brand.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>CEO </h4>
															<span>Real Estate Marketplace </span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															They do a excellent job at deploying and managing our infrastructre at Digital Ocean. </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/digitalocean-brand.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>Manager  </h4>
															<span>Animal Rescue Shelter</span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															They built exactly what we wanted!!! </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/twilio-brand.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>Technology Director </h4>
															<span> XMedia</span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>
											<li>
												<div class="slide">
													<div class="testimonial-single-1">
														<div class="ts-content">
															All the work they put out was of the utmost highest quality. </div><!-- .ts-content end -->
														<div class="ts-person">
															<div class="ts-imgx">
																<img src="{{env('APP_CDN_URL')}}/assets/brands-color/laravel-brand.svg" alt="" style="height:133px;width:auto;margin:0px;padding:0px;">
															</div><!-- .ts-img end -->
															<h4>Founder </h4>
															<span>Joshua </span>
														</div><!-- .ts-person end -->
													</div><!-- .testimonial-single-1 -->
												</div><!-- .slide end -->
											</li>


										</ul>
									</div><!-- .slider-testimonials end -->

								</div><!-- .col-md-10 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === CTA Title 1 =========== -->
				<div id="cta-title-1" class="parallax-section text-white" data-bg-img="{{env('APP_CDN_URL')}}/assets/maintencev1/media/office.jpg" data-stellar-background-ratio="1">
					<!-- Background video-->
					<style>
						@media (max-width: 767px) {
							#bgvid {
								display: none;
							}

						}
					</style>
					<div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.5" style="overflow:hidden;">
						<video loop muted autoplay class="animated fadevid" id="bgvid" playsinline autoplay muted loop data-start="position: fixed;" data-_wh-120p="position: absolute; " poster="{{env('APP_CDN_URL')}}/assets/landingv1/videos/office-video.jpg" style="width:100%;height: auto;">
							<source src="{{env('APP_CDN_URL')}}/assets/landingv1/videos/office-video.mp4" type="video/mp4">
							<source src="{{env('APP_CDN_URL')}}/assets/landingv1/videos/office-video.webm" type="video/webm">

						</video></div><!-- .overlay-colored end -->

					<div class="section-content" style="background-color: rgba(0, 0, 0, 0.1);">

						<!-- /Background video-->
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center">

									<h1 style="text-shadow: #000  0px 0px 33px">Request your Free Quote</h1>
									<p style="text-shadow: #000  0px 0px 33px;font-weight:bold;">
										More than 20 years of experience in web application development.
									</p>
									<a class="scroll-top btn xx-large colorful hover-dark mt-10" href="#our-services">Request Quote</a>
									<p style="text-shadow: #000 0px 0px 33px">
										Or Call (888) 801-7110</p>


								</div><!-- .col-md-8 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .parallax-section end -->

			</div><!-- #content-wrap -->

		</section><!-- #content end -->

		<!-- Footer Mini
		============================================= -->
		<footer id="footer-mini">

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="copyrights-message">{{ now()->year }} © <span class="colored">budgetphp.com - <?php
																													$techString = request()->route('technology');
																													$technology = str_replace("-", " ", $techString);
																													echo $technology;
																													?>

								<?php
								$skillString = request()->route('skill');
								$skill = str_replace("-", " ", $skillString);
								echo $skill;
								?> </span>. All rights reserved.</div>

					</div><!-- .col-md-12 end -->
				</div><!-- .row end -->
			</div><!-- .container end -->

		</footer><!-- #footer-mini end -->

	</div><!-- #full-container end -->

	<a class="scroll-top-icon scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
	<div id="scroll-progress">
		<div class="scroll-progress"><span class="scroll-percent"></span></div>
	</div>

	<!-- External JavaScripts
	============================================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js" integrity="sha512-3fMsI1vtU2e/tVxZORSEeuMhXnT9By80xlmXlsOku7hNwZSHJjwcOBpmy+uu+fyWwGCLkMvdVbHkeoXdAzBv+w==" crossorigin="anonymous"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jRespond.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jquery.easing.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jquery.fitvids.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jquery.stellar.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/owl.carousel.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jquery.magnific-popup.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jquery.validate.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/simple-scrollbar.min.js"></script>
	<script src="{{env('APP_CDN_URL')}}/assets/landingv1/js/functions.js"></script>


	@component('components.tracking.tracking')
	@endcomponent
	@component('components.trustedsite.trustedsite')
@endcomponent

@component('components.livechat.livechat')
@endcomponent

	<!-- Global site tag (gtag.js) - Google Ads: 778019367 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-778019367"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-778019367');
	</script>
</body>

</html>