<div class="border-gray-750 fixed left-0 top-0 z-30 h-full w-10 border-r bg-gray-900">
   <div class="mt-12"></div>
   <div class="text-white" onclick="toggleOffCanvas()">hey</div>
   <div class="text-white">am</div>
   <div class="text-white">there</div>
   <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
   <div class="relative z-50 " role="dialog" aria-modal="true">
      <!--
         Off-canvas menu backdrop, show/hide based on off-canvas menu state.
         
         Entering: "transition-opacity ease-linear duration-300"
           From: "opacity-0"
           To: "opacity-100"
         Leaving: "transition-opacity ease-linear duration-300"
           From: "opacity-100"
           To: "opacity-0"
         -->
      <div class="newbackdrop fixed inset-0 bg-gray-900/80 opacity-0 transition-opacity duration-300 ease-linear"></div>
      <div class="fixed inset-0 flex">
         <!--
            Off-canvas menu, show/hide based on off-canvas menu state.
            
            Entering: "transition ease-in-out duration-300 transform"
              From: "-translate-x-full"
              To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
              From: "translate-x-0"
              To: "-translate-x-full"
            -->
         <div class="ofcmenu relative mr-16 flex w-full max-w-xs flex-1 -translate-x-full transform transition duration-300 ease-in-out">
            <!--
               Close button, show/hide based on off-canvas menu state.
               
               Entering: "ease-in-out duration-300"
                 From: "opacity-0"
                 To: "opacity-100"
               Leaving: "ease-in-out duration-300"
                 From: "opacity-100"
                 To: "opacity-0"
               -->
            <div class="closebtn absolute left-full top-0 flex w-16 justify-center pt-5 opacity-0 duration-300 ease-in-out">
               <button type="button" class="-m-2.5 p-2.5">
                  <span class="sr-only">Close sidebar</span>
                  <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
               </button>
            </div>
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-2">
               
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function toggleOffCanvas(){
      console.log('AM HERE');
      // document.querySelector('.backdrop').classList.remove("hidden");
   
      // // document.querySelector('.newbackdrop').classList.remove("opacity-0");
      // document.querySelector('.newbackdrop').classList.add("opacity-100");
   
      // // document.querySelector('.ofcmenu').classList.remove("-translate-x-full");
      // document.querySelector('.ofcmenu').classList.add("translate-x-0");
   
      // // document.querySelector('.closebtn').classList.remove("opacity-0");
      // document.querySelector('.closebtn').classList.add("opacity-100");
   }
</script>