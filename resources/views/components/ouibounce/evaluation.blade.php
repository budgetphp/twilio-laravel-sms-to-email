 

    <!-- Add the OuiBounce CSS & Font -->
    <link rel="stylesheet" href="{{env('APP_CDN_URL')}}/assets/ouibounce/ouibounce.css">
   

    <!-- Add OuiBounce JS -->
    <script src="{{env('APP_CDN_URL')}}/assets/ouibounce/ouibounce.min.js"></script>
 

 

    <!-- OuiBounce Modal -->
    <div id="ouibounce-modal">
      <div class="underlay"></div>
      <div class="modalob">
      

        <div class="modal-bodyob">
        <a href="{{env('APP_URL')}}">  <img src="{{env('APP_CDN_URL')}}/assets/Budgetphp-light-color.svg" style="max-width:233px;" alt="" class=" mx-auto mx-0"></a>

 
 
<a href="{{env('APP_URL')}}/evaluation" class="scroll-top ob xx-large colorful hover-dark mt-10" style="margin-top: 2.1875rem !important;">Get a Free Website Evaluation</a>
       
        </div>
 
        <div class="modal-footerob" style="clear:both ; margin-bottom:11px;">
          <p style="color:#f4502c !important;font-size: 14px !important;">no thanks</p>
        </div>
      </div>
    </div>

    <!-- Example page JS        -->
    <!-- Used to fire the modal -->
    <script>

      // if you want to use the 'fire' or 'disable' fn,
      // you need to save OuiBounce to an object
      var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
        aggressive: true,
        timer: 0,
        callback: function() { console.log('ouibounce fired!'); }
      });

      jQuery('body').on('click', function() {
        jQuery('#ouibounce-modal').hide();
      });

      jQuery('#ouibounce-modal .modal-footer').on('click', function() {
        jQuery('#ouibounce-modal').hide();
      });

      jQuery('#ouibounce-modal .modal').on('click', function(e) {
        e.stopPropagation();
      });
    </script>
 