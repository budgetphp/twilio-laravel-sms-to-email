
 
    <!-- CategoryOne Area -->
    <div class="bg-default-1 pt-13  pb-md-7 pb-lg-11 position-relative goto">
      <!-- category section -->
      <div class="container">
        <!-- Section Title -->
        <div class="mb-12 mb-lg-19">
          <div class="row align-items-center justify-content-between">
            <div class="col-xl-4 col-lg-5 col-md-6">
              <div class="mb-8 mb-md-3 text-center text-md-left" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <h2 class="font-size-11 font-weight-medium mb-0">Some Technologies<br class="d-none d-md-block"> we support.</h2>
              </div>
            </div>
            <div class="col-md-4">
              <div class="l1-category-slider text-center text-md-right" data-aos="fade-left" data-aos-duration="800" data-aos-once="true"></div>
            </div>
          </div>
        </div>
        <!-- End Section Title -->
      </div>
      <!-- category slider -->
      <div class="row">
        <div class="col-12">
          <div class="category-one">

          @foreach($services as $service)
            <a href="javascript:void(0)" class="single-category mx-9 mx-lg-7 focus-reset">
              <div class="bg-white shadow-2 pl-11 pr-5 pt-17 pb-6 min-w-255 min-h-222 gr-hover-1 mb-15 mb-lg-25">
                <div class="mb-8 square-38">
                  <img src="{{ $service['icon_url']}}" alt="" style="width:100%;max-width:66px;max-height:66px;">
                </div>
                <h4 class="font-size-7 font-weight-medium text-dark-cloud letter-spacing-normal line-height-normal mb-3">
                {{ $service['name']}}</h4>
                <p class="font-size-3 text-bali-gray mb-0 letter-spacing-normal">{{ $service['tag']}}</p>
              </div>
            </a>

            @endforeach
            
          </div>
        </div>
      </div>
      <!-- End category slider -->
    </div>
    <!-- End category section -->
    <!--/ .CategoryOne Area -->