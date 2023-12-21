<div class="fixed top-0 left-0 w-full min-h-100 flex contact-form-container opacity-0  pointer-events-none fw3 z-[999999]">
  <div class="contact-bg min-h-100 sm:w-[50%] desktop"></div>
  <div class="sm:w-[50%] bg-[var(--mainColorLight)] contact-content container p-20 flex relative">
      <div id="close-contact" class="absolute top-0 right-0 white container-xs p-10 anchor text-black font-semibold">
        <p class="black">Close</p>
      </div>
      <div class="m-auto contact-pop-container">
        <div class="contact-inner">
          <div class="pa3">
            <h1 class="text-black text-4xl font-medium ttu">Contact Us</h1>
            <p class="text-black text-xl mt2 lh-0 measure-wide f4 lh-1">Please fill in the form below and a sales representative will reply as soon as possible. </p>
          </div>  
          <div class="pa3">
            <?php wpforms_display( "207", false, false );?>
          </div>
         
        </div>
      </div>
  </div>
</div>
