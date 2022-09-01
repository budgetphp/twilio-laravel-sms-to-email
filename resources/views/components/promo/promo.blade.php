   <!-- promoContent Area -->
   <style>
     .overlay-colored {
       position: absolute;
       width: 100%;
       height: 100%;
       top: 0;
       left: 0;
       z-index: -1 !important;
     }

     #videoDiv {
       width: 100%;
       position: relative;
       z-index: 1 !important;
       background-position: top center;
       background-size: cover;
       background-repeat: no-repeat;
     }


     #videoMessage {
       position: relative;
       overflow: hidden;
       z-index: 3 !important;
     }

     @media (max-width: 767px) {
       .overlay-colored {
         display: none;
       }

     }
   </style>


   <!-- .overlay-colored end -->
   <div class="bg-images" style="background-image:url( {{env('APP_CDN_URL')}}/assets/maintencev1/media/office.jpg)" id="videoDiv">

     <div class="overlay-colored" data-bg-color="#000" data-bg-color-opacity="0.9" style="overflow:hidden;">
       <video loop muted autoplay class="animated fadevid" id="bgvid" playsinline autoplay muted loop data-start="position: fixed;" data-_wh-120p="position: absolute; " poster="{{env('APP_CDN_URL')}}/assets/landingv1/videos/office-video.jpg" style="width:100%;height: auto;">
         <source src="{{env('APP_CDN_URL')}}/assets/landingv1/videos/office-video.mp4" type="video/mp4">
         <source src="{{env('APP_CDN_URL')}}/assets/landingv1/videos/office-video.webm" type="video/webm">

       </video>
     </div>
     <div class="container" id="videoMessage">
       <div class="row align-items-center justify-content-center">
         <div class="col-xl-8 col-lg-9 col-md-11">
           <div class="text-center pt-14 pt-md-18 pb-15 pb-md-19  dark-mode-texts" data-aos="zoom-in" data-aos-duration="500" data-aos-once="true">
             <h2 class="font-size-11 mb-7" style="text-shadow: #000  0px 0px 33px">Request your <br class="d-none d-sm-block"> free quote.</h2>
             <p class="font-size-5 line-height-28 px-md-15 px-lg-23 px-xl-25 mb-0" style="text-shadow: #000  0px 0px 3px"><img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" style="max-width:233px;"></p>
             <a href="{{env('APP_URL')}}/quote" class="btn btn-dodger-blue-2 rounded-5 mt-12">Request Quote</a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- End promoContent Area -->