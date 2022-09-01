
<!-- Header Area -->
 <header class="site-header site-header--menu-logo-middle px-7 px-lg-10 bg-default dynamic-sticky-bg site-header--absolute site-header--sticky">
      <div class="container-fluid">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0">
          <!-- Brand Logo-->
          <div class="brand-logo mt-3 mt-md-0"><a href="{{env('APP_URL')}}/">
              <!-- light version logo (logo must be black)-->
              <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-dark-color.svg" alt="" class="light-version-logo" style="max-width:188px;height:auto;">
              <!-- Dark version logo (logo must be White)-->
              <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" alt="" class="dark-version-logo">
            </a></div>
          <div class="collapse navbar-collapse" id="mobile-menu">
            <div class="navbar-nav-wrapper">

            @component('components.nav.mainmenu')
@endcomponent

            </div>
            <button class="d-block d-lg-none offcanvas-btn-close" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
              <i class="gr-cross-icon"></i>
            </button>
          </div>
          <div class="header-btn ml-auto ml-lg-0 d-none d-xs-block">
            <a class="btn heading-default-color gr-hover-text-primary" href="{{env('APP_URL')}}/quote">
              + Custom Quote
            </a>
          </div>
          <!-- Mobile Menu Hamburger-->
          <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <i class="icon icon-simple-remove icon-close"></i> -->
            <span class="hamburger hamburger--squeeze js-hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
          </button>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!--/ .Header Area -->
   