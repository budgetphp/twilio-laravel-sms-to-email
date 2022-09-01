
         
                
 <!-- Header Area -->
 <header class="site-header site-header--menu-right px-7 px-lg-10 z-index-99 dynamic-sticky-bg dark-mode-texts--desktops dark-cloud-sticky-bg site-header--absolute site-header--sticky">
      <div class="container-fluid">
        <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0">
          <!-- Brand Logo-->
          <div class="brand-logo mt-3 mt-md-0 dark-mode-texts"><a href="{{env('APP_URL')}}/">
                <!-- light version logo (logo must be black)-->
                <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light.svg" alt="" class="light-version-logo" style="max-width:188px;height:auto;">
              <!-- Dark version logo (logo must be White)-->
              <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light.svg" alt="" class="dark-version-logo" style="max-width:188px;height:auto;">
            </a></div>
          <div class="collapse navbar-collapse" id="mobile-menu">
           
             
          </div>
          <div class="header-btn ml-auto ml-lg-6 d-none d-sm-block font-size-3">
            <a class="btn btn btn-white btn-medium rounded-5 font-size-3" href="{{Request::url() }}#order">
              Order Now

            </a>
          </div>
   
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- End Header Area -->