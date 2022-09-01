 <?php
    $currencies = currency()->getCurrencies();


    $currencies = collect($currencies);

    ?>
 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Change Currency</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="container">
                 <div class="row align-items-center justify-content-center m-10">
                 

               

                     @foreach($currencies->sortBy('code') as $currency)



                     <div class="col-2 align-items-center justify-content-center">
                         <a href="{{Request::url()}}?currency={{ $currency['code'] }}" rel="nofollow"> {{ $currency['code'] }}</a>

                     </div>

                   





                     @endforeach
                 </div>
             </div>

         </div>
     </div>
 </div>


 <style>
     .scroll-currencies-icons {
         width: 45px;
         height: auto;
         line-height: 43px;
         text-align: center;
         color: #fff;
         font-size: 16px;
         border-radius: 0px;
         background: #2c313a !important;
         text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
         position: fixed;
         bottom: 33vh;
         left: 0px;
         box-shadow: 0 2px 4px 0px rgba(0, 0, 0, 0.1);
         z-index: 9999;
         box-shadow: 0px 3px 3px 0px #222222;
     }

     .scroll-currencies-icons a {

         color: #fff !important;

     }
 </style>
 <div class="scroll-currencies-icons">
 <a href="javascript(void);" data-toggle="modal" data-target=".bd-example-modal-lg"> <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-icon-light.svg" style="max-width:66%;margin-top:10px;"></a>


 <a href="javascript(void);" data-toggle="modal" data-target=".bd-example-modal-lg">  {{currency()->getUserCurrency()}}</a>
 
 
 <i class="fas fa-credit-card fa-2x "></i>
                     <i class="fab fa-bitcoin fa-2x"></i>
   
 </div>