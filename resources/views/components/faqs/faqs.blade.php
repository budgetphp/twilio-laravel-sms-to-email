<?php
// dd($faqs);
?>
<div class="bg-default-1  pb-13 pb-md-18 pb-lg-25" style="" id="faqs">
  <div class="container">
    <!-- Section Title -->
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-9">
        <div class="text-center mt-33 mb-33 mb-lg-19">
          <h2 class="font-size-9 mb-0">Frequently Asked Questions</h2>
          </p>
          <!-- Button  -->
          <div class="text-center pt-lg-3 pb-lg-3 aos-init" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
            <p class="font-size-6 mb-0">Have a question about our service?<a class="text-blue-3 btn-link-with-underline ml-5" href="{{env('APP_URL')}}/contact">Contact us</a></p>
          </div>
          <!-- Button End -->
          <a class="btn btn-sunset btn-xl h-55 rounded-5" data-toggle="collapse" href="#faqsCollpase" role="button" aria-expanded="false" aria-controls="faqsCollpase">More</a>

        </div>
      </div>
    </div>
    <p>

      <!-- End Section Title -->
      <!-- Faqs -->
      <!-- Faqs -->
      <div class="row justify-content-center collapse" id="faqsCollpase">

        @foreach($faqs as $faq)

        <!-- Single Faq -->
        <div class="col-lg-6 col-md-10">
          <div class="d-flex mb-10 mb-lg-17 aos-init aos-animate" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
            <div class="mr-6">
              <div class="bg-light-orange circle-28 text-white mt-1">
                <i class="fa fa-question"></i>
              </div>
            </div>
            <div class="">
              <h4 class="font-size-7 mb-7">{{ $faq['Title']}}</h4>
              <p class="font-size-5 pr-md-10 pr-lg-0 mb-0">{{ $faq['Description']}}</p>
            </div>
          </div>
        </div>
        <!-- End Single Faq -->
        @endforeach






      </div>

  </div>
</div>