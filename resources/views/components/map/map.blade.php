<div class="container  pt-14 pt-md-18 pt-lg-24 pb-5 pb-md-9 pb-lg-27 d-none d-lg-block d-xl-block" style="">

<style>
.network-map {
    position: relative;
}
.network-map ul li {
    position: absolute;
    z-index: 1;
    width: 12px;
    height: 12px;
    margin: -6px;
    background-color: #0098ef;
    border-radius: 6px;
}

.network-map img {
    display: block;
    width: 100%;
    opacity: .1;
}

.network-map ul {
    margin: 0!important;
    list-style-type: none;
    line-height: 28px;
}

.network-map ul li span.label-top-right {
    top: -32px;
    left: 24px;
}

.network-map ul li span.label-top-left, .network-map ul li span.label-top-right, .network-map ul li span.label-bottom-left, .network-map ul li span.label-bottom-right {
    position: absolute;
    color: #fff;
    padding: 4px 8px;
    margin-top: -8px;
    line-height: 20px;
    font-size: 14px;
    white-space: nowrap;
    font-family: Montserrat,sans-serif;
    background-color: #0098ef;
    border-radius: 4px;
    -webkit-transition: color .2s;
    transition: color .2s;
}


.network-map ul li span.label-top-right::before {
    top: 34px;
    left: -18px;
}
.network-map ul li span.label-top-left::before {
    top: 34px;
    right: -18px;
}


.network-map ul li span.label-top-left::before, .network-map ul li span.label-bottom-right::before {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
.network-map ul li span.label-bottom-right {
    bottom: -40px;
    left: 24px;
}
.network-map ul li span.label-bottom-right::before {
    top: -6px;
    left: -18px;
}
.network-map ul li span.label-top-left::before, .network-map ul li span.label-bottom-right::before {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.network-map ul li span.label-bottom-left {
    bottom: -40px;
    right: 24px;
}

.network-map ul li span.label-bottom-left::before {
    top: -6px;
    right: -18px;
}

.network-map ul li span.label-top-right::before, .network-map ul li span.label-bottom-left::before {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
.network-map ul li span.label-top-left {
    top: -32px;
    right: 24px;
}

.network-map ul li span.label-top-right::before, .network-map ul li span.label-bottom-left::before {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.network-map ul li span.label-top-left::before, .network-map ul li span.label-top-right::before, .network-map ul li span.label-bottom-left::before, .network-map ul li span.label-bottom-right::before {
    content: "";
    position: absolute;
    width: 24px;
    height: 1px;
    background-color: #0071bd !important;
}

</style>



    <div class="mb-13 mb-lg-13 ">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="mb-10 mb-lg-0 text-center text-lg-left aos-init aos-animate" data-aos-duration="800" data-aos="fade-right" data-aos-once="true">
                <img src="{{env('APP_CDN_URL')}}/assets/server-hosting.svg" alt="" class="mr-5" style="float:left;max-width:66px;height:auto;">

                    <h2 class="font-size-10 pr-md-10 pr-xl-0 mb-0 letter-spacing-n83 ">
  Sponsor
                    </h2>
                    
                </div>

             
            </div>
            <div class="col-xl-7 col-lg-6 col-md-6 text-center text-md-right">
                <div class="btn-section aos-init aos-animate" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <a href="javascript:" class="btn-toggle-square active mx-3 price-deck-trigger rounded-10 bg-golden-yellow">
                    <span  data-pricing-trigger="" data-target="#table-price-network" data-value="cdn"  class="active text-break" onclick="$('#cdn').toggle();$('#docker').toggle();">CDN</span>
                        <span  data-pricing-trigger="" data-target="#table-price-network" data-value="docker"  class=" text-break" onclick="$('#docker').toggle();$('#cdn').toggle();">Instance</span>

                    </a>
                </div>
            </div>
            
            <div class=" center">
      

           <p class="mt-10 "> <i class="fab fa-digital-ocean text-center center text-blue"></i> Get $100 in credit with DigitalOcean <a href="https://m.do.co/c/29206f4ac556" target="_BLANK">Learn More..</a></p> 
          
  
</div>
           
        </div>
    </div>



    <div class="table-body" id="docker" data-pricing-dynamic="" data-value-active="docker">

        <div class="network-map docker active text-break">
            
            <ul>

            <li style="top: 38%; left: 24%;">
                    <a href="#"><span class="label-top-left">Toronto</span></a>
                </li>
            <li style="top: 40%; left: 26%;">
                    <a href="#"><span class="label-top-right">New York</span></a>
                </li>
                <li style="top: 42%; left: 12.5%;">
                    <a href="#"><span class="label-top-left">San Francisco</span></a>
                </li>
             
             
                
                <li style="top: 30%; left: 46.5%;">
                    <a href="#"><span class="label-top-left">London</span></a>
                </li>

                <li style="top: 35%; left: 48%;">
                    <a href="#"><span class="label-bottom-right">Amsterdam</span></a>
                </li>

                <li style="top: 36%; left: 51%;">
                    <a href="#"><span class="label-top-right">Germany</span></a>
                </li>


                <li style="top: 64%; left: 75%;">
                    <a href="#"><span class="label-bottom-left">Singapore</span></a>
                </li>

                <li style="top: 58%; left: 69%;">
                    <a href="#"><span class="label-top-right">Bangalore</span></a>
                </li>
                
            </ul>
            <img src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/map-dark.svg" alt="">
        </div>


    </div>


    <div class="table-body" id="cdn" data-pricing-dynamic="" data-value-active="cdn" style="display:none;">









        <div class="network-map cdn text-break">
            <ul>
            <li style="top: 38%; left: 24%;">
                    <a href="#"><span class="label-top-left">TOR1</span></a>
                </li>
            <li style="top: 40%; left: 26%;">
                    <a href="#"><span class="label-top-right">NYC1, NYC2, NYC3</span></a>
                </li>
                <li style="top: 42%; left: 12.5%;">
                    <a href="#"><span class="label-top-left">SFO1, SFO2, SFO3</span></a>
                </li>
             
             
                
                <li style="top: 30%; left: 46.5%;">
                    <a href="#"><span class="label-top-left">LON1</span></a>
                </li>

                <li style="top: 35%; left: 48%;">
                    <a href="#"><span class="label-bottom-right">AMS2, AMS3</span></a>
                </li>

                <li style="top: 36%; left: 51%;">
                    <a href="#"><span class="label-top-right">FRA1</span></a>
                </li>


                <li style="top: 64%; left: 75%;">
                    <a href="#"><span class="label-bottom-left">SGP1</span></a>
                </li>

                <li style="top: 58%; left: 69%;">
                    <a href="#"><span class="label-top-right">BLR1</span></a>
                </li>
                </ul>
            
            <img src="{{env('APP_CDN_URL')}}/assets/fixityv1/image/map-dark.svg" alt="">

        </div>



    </div>


</div>