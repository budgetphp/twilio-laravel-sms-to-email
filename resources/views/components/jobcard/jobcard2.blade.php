
    <!-- jobCardOne Area -->
    <div class="pt-14 pt-md-18 pt-lg-30 bg-default-2 pb-9 pb-md-13 pb-lg-29">
      <div class="container">
        <!-- Section Title -->
        <div class="mb-13 mb-lg-17">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
              <div class="mb-10 mb-md-0 text-center text-md-left" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <h2 class="font-size-11 font-weight-medium pr-md-10 pr-xl-0 mb-0">The web dev services that you
                  need.</h2>
              </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-6">
              <div class="text-center text-md-right" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
             <a class="btn btn-primary" href="{{env('APP_URL')}}/quote">Request Quote</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Section Title -->

      
        <!-- Job Card -->
        <div class="row justify-content-center">
        @foreach($services as $service)
          <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10 px-lg-3 px-xl-6" data-aos="zoom-in" data-aos-duration="500" data-aos-once="true">
            <a href="javascript:void(0)" data-dev="{{env('APP_URL')}}/services/{{ $service['page_slug']}}" class="bg-white shadow-2 px-9 px-lg-6 px-xl-9 pt-9 pb-10 mb-9 gr-hover-1 w-100">
              <div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                <p class="font-size-5 text-bali-gray mb-0 mr-5 mb-5 d-flex align-items-center">
                  <i class="fas fa-user-check mr-1 text-bali-gray"></i>
               
                  <span>{{ $service['tag']}}</span>
                </p>
                <div class="bg-dark-green-op1 text-dark-green px-3 py-2 font-size-3 rounded-5 mb-5 min-w-76 text-center" style="display:none;">
                  More</div>
              </div>
            
              <div class="media">
                <div class="mr-5">
                  <img class="square-34" src="{{ $service['icon_url']}}" alt="" style="width:100%;max-width:34px;max-height:34px;">
                </div>
                <div class="user-info">
                  <h5 class="font-size-6 font-weight-medium text-dark-cloud line-height-reset mb-1">{{ $service['name']}}
                  </h5>
                  <p class="font-size-3 text-bali-gray mb-0">{{ $service['intro']}}</p>
                </div>
              </div>
            </a>
          </div>

         
          @endforeach

      
        
    
        </div>
        <!-- End Job Card -->
      </div>
    </div>
    <!--/ .jobCardOne Area -->