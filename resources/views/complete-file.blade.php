<div id="secondVerticalContainer" class="flex h-full bg-gray-900 relative">
   <div :class="{ '-ml-10': (app.fullscreen || app.pages_expanded) }" x-show="app.isPage" id="left" class="relative z-20 flex flex-col justify-between transform w-10 h-full bg-gray-900 select-none">
      <div class="flex flex-col h-full justify-between">
         <div class="flex flex-col">
            <div class="flex bg-gray-900 h-10" :class="{ 'h-10': !app.tab.add, 'h-10': app.tab.add }" @click.away="app.tab.add=false">
               <div @click="app.tab.add=!app.tab.add; app.addMenu='section'; app.closeMenu();" class="relative z-40 group flex-shrink-0 w-10 h-full" dusk="tabs-add">
                  <div x-show="!app.tab.add" x-tooltip.right="Add Designs" class="absolute inset-0 w-full h-full cursor-pointer" style="display: none;"></div>
                  <div class="flex items-center justify-center w-full h-10 cursor-pointer border-b border-transparent bg-gray-800 border-b-gray-750 border-gray-750" :class="{ 'bg-gray-800 border-b-gray-750 border-gray-750' : app.tab.add, 'hover:bg-gray-800' : !app.tab.add }">
                     <svg :class="{ 'text-gray-500 group-hover:text-gray-400' : !app.tab.add, 'text-gray-300' : app.tab.add }" class="w-5 h-5 stroke-current text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                     </svg>
                  </div>
               </div>
               <!-- Component Sections and Drawers -->
               <div :class="{ 'translate-x-0 ml-10': app.tab.add, '-translate-x-full -ml-10':!app.tab.add }" class="absolute top-0 left-0 z-20 items-stretch justify-center w-auto h-full pb-12 transition duration-200 ease-out transform bg-gray-800 translate-x-0 ml-10">
                  <div class="w-full flex items-center relative z-40 bg-gray-800 justify-between px-4 h-10 border-b border-gray-750">
                     <h2 class="text-gray-400 font-medium text-xs leading-none">Designs</h2>
                     <div @click="app.tab.add=false" class="absolute text-gray-500 hover:text-gray-400 p-1 cursor-pointer mr-3.5 right-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                  </div>
                  <div class="absolute top-0 left-0 z-20 flex flex-col h-full p-4 pl-8 overflow-x-visible overflow-y-scroll text-base font-bold transform bg-gray-700 w-[39rem] pt-6" id="component_drawer" x-show="app.component_drawer" x-transition:enter="transition-all duration-300 ease-out" x-transition:enter-start="-translate-x-12" x-transition:enter-end="translate-x-0" style="display: none;"></div>
                  <div x-show="app.section == 'Headers'" class="absolute top-0 left-0 z-30 flex flex-col h-full p-3 pb-10 overflow-x-visible overflow-y-scroll text-base font-bold text-gray-700 transform pl-14 w-[39rem] pt-6" style="display: none;">
                     <div id="headers-slide" :class="{ 'opacity-100 translate-x-0' : app.section == 'Headers', 'opacity-50 -translate-x-12' : app.section != 'Headers' }" class="absolute z-20 flex flex-col h-auto pb-16 pr-6 ml-40 text-base font-bold text-gray-700 transform rounded-lg w-104 opacity-50 -translate-x-12" x-show="app.section == 'Headers'" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="-translate-x-12 opacity-50" x-transition:enter-end="translate-x-0 opacity-100" style="display: none;">
                        <div dusk="section-header-01" draggable="true" id="section-header-01" x-on:mousedown="if(navigator.userAgent === 'laravel/dusk'){ console.log('hit') }" x-on:dragstart.self="event.dataTransfer.setData('component', 'components.headers.header-01');" class="section-header-01 relative z-50 block mb-2 overflow-hidden transition duration-100 transform scale-100 bg-green-200 rounded shadow-xl cursor-move ease group hover:scale-102">
                           <!-- absolute item below to force draggable true -->
                           <div class="absolute top-0 left-0 z-40 px-2 py-1 mt-2 ml-2 text-xs font-medium text-gray-600 transition-opacity duration-150 ease-out bg-gray-200 rounded-md opacity-0 group-hover:opacity-100">Header 1</div>
                           <div class="absolute top-0 left-0 z-50 w-full h-full opacity-0">Header 1</div>
                           <img src="https://cdn.devdojo.com/images/tails/headers/header-01.png?auto=compress&amp;w=800" class="relative w-full h-auto">
                        </div>
                     </div>
                  </div>
                  <!-- End Component Sections and Drawers -->
                  <div class="absolute top-0 left-0 z-20 flex flex-col h-full p-4 pl-8 overflow-x-visible overflow-y-scroll text-base font-bold transform bg-gray-700 w-[39rem] pt-6" id="layout_drawer" x-show="app.layout_drawer" x-transition:enter="transition-all duration-300 ease-out" x-transition:enter-start="-translate-x-12" x-transition:enter-end="translate-x-0" style="display: none;"></div>
                  <!-- End Component Sections and Drawers -->
               </div>
            </div>
            <div @click.away="app.tab.pages=false" :class="{ 'h-10': !app.tab.pages, 'h-10': app.tab.pages }" class="flex bg-gray-900">
               <div id="pages-tab" @click="app.tab.pages=!app.tab.pages; app.closeMenu();" class="relative group z-40 flex-shrink-0 w-10 h-full">
                  <div x-show="!app.tab.pages" x-tooltip.right="Pages" class="absolute inset-0 w-full h-full cursor-pointer"></div>
                  <div class="flex items-center justify-center w-full h-10 cursor-pointer border-b border-t border-transparent hover:bg-gray-800" :class="{ 'bg-gray-800 border-b-gray-750 border-t-gray-750 border-gray-750' : app.tab.pages, 'hover:bg-gray-800' : !app.tab.pages }">
                     <svg :class="{ 'text-gray-500 group-hover:text-gray-400' : !app.tab.pages, 'text-gray-300' : app.tab.pages }" class="w-5 h-5 stroke-current text-gray-500 group-hover:text-gray-400" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 7a3 3 0 0 1 3-3h5.172a2 2 0 0 1 1.415.586l6.327 6.328a2 2 0 0 1 .586 1.414V19.5a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3V7Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M14 4.18V9.5a2 2 0 0 0 2 2h5.32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                  </div>
               </div>
               <div x-show="!app.history_iframe" class="w-full h-full">
                  <div wire:id="BxLwVEhJ8hBlaWgMSFXB">
                     <div x-data="{ openPageSettings: false, pageId: null }" @close-page-editor.window="pageId=null" @open-page-editor.window="pageId = event.detail.id" @go-to-page.window="app.goToPage(event.detail.title, event.detail.slug); app.tab.pages=false; setTimeout(function(){ app.reloadProject(); }, 500);" :class="{ 'translate-x-0 ml-10': app.tab.pages, '-translate-x-full -ml-10':!app.tab.pages }" class="absolute top-0 left-0 z-20 items-stretch justify-center w-auto h-full transition duration-200 ease-out transform bg-gray-800 -translate-x-full -ml-10">
                     <div :class="{ 'hidden' : app.pages_expanded }" class="relative z-40 space-y-2 min-w-[12rem] flex flex-col w-auto h-full overflow-y-scroll pb-10 text-sm font-medium tracking-tight text-gray-300 bg-gray-800 border-l border-gray-800" @click.outside="component_drawer=false; section=''; folder='';">
                        <div class="w-full flex items-center relative justify-between px-4 pt-3 pb-1">
                           <h2 class="text-gray-400 font-medium text-xs">Pages</h2>
                           <div @click="app.tab.pages=false" class="absolute text-gray-500 hover:text-gray-400 p-1 cursor-pointer mr-3.5 right-0">
                              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                              </svg>
                           </div>
                        </div>
                        <template x-for="(page, index) in app.pages">
                           <div class="px-2 relative">
                              <div @click="app.goToPage(page.title, page.slug); app.tab.pages=false;" :class="{ 'text-gray-300 hover:text-gray-100 hover:bg-gray-700' : app.page.slug != page.slug, 'text-gray-100 bg-gray-700': app.page.slug == page.slug }" class="self-start flex items-center rounded w-full group pl-2.5 pr-8 py-2 text-xs  border-transparent cursor-pointer">
                                 <div class="flex flex-shrink-0">
                                    <span class="flex-shrink-0" x-text="page.title"></span>
                                    <span class="rounded ml-2 flex-shrink-0 text-[0.55rem] text-gray-400" x-text="page.slug"></span>
                                 </div>
                                 <div @click.stop="if(page.id == pageId){ pageId = null; }else{ pageId = page.id; }" class="absolute right-0 pr-4">
                                    <div class="p-1 rounded text-gray-500 group-hover:text-gray-400 cursor-pointer hover:bg-gray-800">
                                       <svg :class="{ 'hidden' : pageId != page.id }" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                       </svg>
                                       <svg :class="{ 'hidden' : pageId == page.id }" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                       </svg>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </template>
                        <div class="px-2 relative">
                           <div @click="app.goToPage(page.title, page.slug); app.tab.pages=false;" :class="{ 'text-gray-300 hover:text-gray-100 hover:bg-gray-700' : app.page.slug != page.slug, 'text-gray-100 bg-gray-700': app.page.slug == page.slug }" class="self-start flex items-center rounded w-full group pl-2.5 pr-8 py-2 text-xs border-transparent cursor-pointer text-gray-100 bg-gray-700">
                              <div class="flex flex-shrink-0">
                                 <span class="flex-shrink-0" x-text="page.title">Home</span>
                                 <span class="rounded ml-2 flex-shrink-0 text-[0.55rem] text-gray-400" x-text="page.slug">/</span>
                              </div>
                              <div @click.stop="if(page.id == pageId){ pageId = null; }else{ pageId = page.id; }" class="absolute right-0 pr-4">
                                 <div class="p-1 rounded text-gray-500 group-hover:text-gray-400 cursor-pointer hover:bg-gray-800">
                                    <svg :class="{ 'hidden' : pageId != page.id }" class="w-3 h-3 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <svg :class="{ 'hidden' : pageId == page.id }" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="px-2 relative">
                           <div @click="app.goToPage(page.title, page.slug); app.tab.pages=false;" :class="{ 'text-gray-300 hover:text-gray-100 hover:bg-gray-700' : app.page.slug != page.slug, 'text-gray-100 bg-gray-700': app.page.slug == page.slug }" class="self-start flex items-center rounded w-full group pl-2.5 pr-8 py-2 text-xs border-transparent cursor-pointer text-gray-300 hover:text-gray-100 hover:bg-gray-700">
                              <div class="flex flex-shrink-0">
                                 <span class="flex-shrink-0" x-text="page.title">Page</span>
                                 <span class="rounded ml-2 flex-shrink-0 text-[0.55rem] text-gray-400" x-text="page.slug">page</span>
                              </div>
                              <div @click.stop="if(page.id == pageId){ pageId = null; }else{ pageId = page.id; }" class="absolute right-0 pr-4">
                                 <div class="p-1 rounded text-gray-500 group-hover:text-gray-400 cursor-pointer hover:bg-gray-800">
                                    <svg :class="{ 'hidden' : pageId != page.id }" class="w-3 h-3 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <svg :class="{ 'hidden' : pageId == page.id }" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="p-2 border-t border-gray-700">
                           <div wire:click="addNewPage" class="flex items-center space-x-1 text-gray-500 hover:text-white hover:bg-blue-600 rounded cursor-pointer text-xs px-2 py-1">
                              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                              </svg>
                              <span>Add Page</span>
                           </div>
                        </div>
                     </div>
                     <div class="absolute top-0 right-0 h-full">
                        <div x-show="pageId == '14644'" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="translate-x-0 opacity-50" x-transition:enter-end="translate-x-full opacity-100" wire:key="14644" :class="{ 'min-w-[400px] w-auto' : !app.pages_expanded, 'min-w-full w-screen' : app.pages_expanded }" class="p-6 page-settings bg-gray-750 h-full overflow-y-scroll pb-14 absolute top-0 right-0 border-r border-gray-750 translate-x-full min-w-[400px] w-auto" style="display: none;">
                           <div class="relative w-full flex items-center mb-3">
                              <h2 class="text-gray-300 font-semibold text-sm">Home Page</h2>
                              <div @click="pageId=null" class="absolute text-gray-500 hover:text-gray-400 p-1 cursor-pointer right-0">
                                 <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                 </svg>
                              </div>
                           </div>
                           <div wire:id="fFcoLiHiGwVUI2OvSDX8" class="w-full space-y-2">
                              <div class="space-y-1.5">
                                 <label for="title">Title</label>
                                 <input type="text" name="title" wire:model.defer="title">
                              </div>
                              <div class="space-y-1.5 pb-2">
                                 <label for="slug">Route</label>
                                 <input type="text" name="slug" wire:model.defer="slug">
                              </div>
                              <div class="relative pb-2">
                                 <div x-data="{ expanded: false,
                                    init: function(){
                                    let iframeWindow = document.getElementById('custom_head_code-14644').contentWindow;
                                    let textArea = document.getElementById('custom_head_textarea-14644');
                                    let that = this;
                                    iframeWindow.addEventListener('keyup', (event) => {
                                    if (event.key === 'Escape') { 
                                    this.expanded = false;
                                    }
                                    });
                                    iframeWindow.addEventListener('ready', function(event){
                                    let originalValue = textArea.value;
                                    iframeWindow.set(originalValue);
                                    iframeWindow.addEventListener('updated', function(event){
                                    textArea.value = event.detail.value;
                                    });
                                    });
                                    iframeWindow.addEventListener('blurred', function(event){
                                    textArea.dispatchEvent(new Event('change'));
                                    });
                                    $watch('expanded', value => {
                                    if (value) {
                                    app.pages_expanded = true;
                                    } else {
                                    app.pages_expanded = false;
                                    }
                                    })
                                    }
                                    }" x-on:keydown.escape.window.prevent.stop="if(expanded){ expanded=false; }" :class="{ 'fixed w-full h-full bg-black z-50 top-0 left-0' : expanded }">
                                    <div class="relative h-full">
                                       <div :class="{ 'rounded-t-md' : !expanded }" class="h-8 bg-gray-800 flex overflow-hidden border-b text-[0.65rem] border-gray-900 items-center justify-between rounded-t-md">
                                          <p class="text-gray-400 font-medium text-left pl-3">Custom Head Content (including CSS/JS)</p>
                                          <div class="flex h-full items-center justify-center">
                                             <div x-show="expanded" class="h-5 text-gray-400 font-mono px-1.5 mr-1 flex items-center text-[0.6rem] rounded bg-gray-800 border border-gray-750" style="display: none;">esc</div>
                                             <div x-on:click="expanded=!expanded;" class="relative h-full px-2.5 text-gray-400 hover:text-gray-300 cursor-pointer flex items-center hover:bg-gray-700">
                                                <div x-show="!expanded" class="relative flex items-center justify-center h-full w-full">
                                                   <span>Expand</span>
                                                   <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"></path>
                                                   </svg>
                                                </div>
                                                <div x-show="expanded" class="relative flex items-center justify-center h-full w-full" style="display: none;">
                                                   <span>Minimize</span>
                                                   <svg class="w-2.5 h-2.5 ml-1 fill-current" viewBox="0 0 636 636" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M582.573 9.99 436.64 155.922V69.636c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v160.427l.068.343c.047 3.839.755 7.667 2.224 11.276l6.453 9.714.245.38.276.188 9.802 6.51a30.8 30.8 0 0 0 11.64 2.292h160.4c16.959 0 30.703-13.745 30.703-30.703 0-16.964-13.745-30.703-30.703-30.703v-.005h-86.27L625.995 53.422c11.99-12 11.99-31.443 0-43.432-11.99-11.995-31.432-11.995-43.421-.01l-.001.01ZM155.253 199.347l-86.276.005c-16.964 0-30.708 13.745-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708l160.4-.005c3.964 0 7.917-.771 11.641-2.292l9.812-6.521.271-.177.245-.38 6.453-9.714c1.469-3.604 2.188-7.437 2.224-11.276l.068-.344V69.646c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v86.287L52.755 9.999C40.765-1.985 21.323-1.985 9.328 10c-11.99 12-11.99 31.443 0 43.432l145.925 145.916ZM480.067 437.307l86.292.005c16.958 0 30.702-13.745 30.702-30.703 0-16.964-13.745-30.703-30.702-30.703h-160.4a30.76 30.76 0 0 0-11.714 2.339c-3.719 1.531-7.146 3.776-10.01 6.646-2.875 2.87-5.115 6.297-6.651 10.026-1.537 3.74-2.344 7.703-2.344 11.693v160.426c0 16.959 13.745 30.708 30.708 30.708 16.959 0 30.708-13.754 30.708-30.708l-.005-86.292 145.933 145.934c11.99 11.984 31.432 11.984 43.427 0 11.989-12 11.989-31.443 0-43.432L480.067 437.307ZM260.093 406.613a30.56 30.56 0 0 0-2.343-11.692c-1.537-3.724-3.776-7.162-6.651-10.026a30.702 30.702 0 0 0-10.021-6.646c-3.75-1.537-7.719-2.339-11.709-2.339h-160.4c-16.964 0-30.708 13.746-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708v-.005h86.287L9.323 583.254c-11.99 12-11.99 31.443 0 43.432 11.99 11.985 31.432 11.985 43.426 0l145.934-145.933v86.292c0 16.959 13.745 30.708 30.708 30.708 16.958 0 30.708-13.755 30.708-30.708l-.006-160.432Z"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div :class="{ 'h-40 rounded-b-md': !expanded, 'h-full': expanded }" class="bg-[#1c1c21] relative overflow-hidden h-40 rounded-b-md">
                                          <iframe id="custom_head_code-14644" loading="lazy" src="/frame/monaco-editor?language=javascript&amp;background=1c1c21" class="w-full h-full rounded-md relative z-20"></iframe>
                                          <div class="absolute inset-0 w-full h-full z-10 flex items-center justify-center">
                                             <svg class="animate-spin h-4 w-4 text-gray-400 relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <textarea wire:ignore.self="" class="h-20 hidden" id="custom_head_textarea-14644" name="custom_head" wire:model.lazy="custom_head"></textarea>
                              </div>
                              <div class="relative pb-2">
                                 <div x-data="{ expanded: false,
                                    init: function(){
                                    let iframeWindow = document.getElementById('custom_footer_code-14644').contentWindow;
                                    let textArea = document.getElementById('custom_footer_textarea-14644');
                                    let that = this;
                                    iframeWindow.addEventListener('keyup', (event) => {
                                    if (event.key === 'Escape') { 
                                    this.expanded = false;
                                    }
                                    });
                                    iframeWindow.addEventListener('ready', function(event){
                                    let originalValue = textArea.value;
                                    iframeWindow.set(originalValue);
                                    iframeWindow.addEventListener('updated', function(event){
                                    textArea.value = event.detail.value;
                                    });
                                    });
                                    iframeWindow.addEventListener('blurred', function(event){
                                    textArea.dispatchEvent(new Event('change'));
                                    });
                                    $watch('expanded', value => {
                                    if (value) {
                                    app.pages_expanded = true;
                                    } else {
                                    app.pages_expanded = false;
                                    }
                                    })
                                    }
                                    }" x-on:keydown.escape.window.prevent.stop="if(expanded){ expanded=false; }" :class="{ 'fixed w-full h-full bg-black z-50 top-0 left-0' : expanded }">
                                    <div class="relative h-full">
                                       <div :class="{ 'rounded-t-md' : !expanded }" class="h-8 bg-gray-800 flex overflow-hidden border-b text-[0.65rem] border-gray-900 items-center justify-between rounded-t-md">
                                          <p class="text-gray-400 font-medium text-left pl-3">Custom Footer Content</p>
                                          <div class="flex h-full items-center justify-center">
                                             <div x-show="expanded" class="h-5 text-gray-400 font-mono px-1.5 mr-1 flex items-center text-[0.6rem] rounded bg-gray-800 border border-gray-750" style="display: none;">esc</div>
                                             <div x-on:click="expanded=!expanded;" class="relative h-full px-2.5 text-gray-400 hover:text-gray-300 cursor-pointer flex items-center hover:bg-gray-700">
                                                <div x-show="!expanded" class="relative flex items-center justify-center h-full w-full">
                                                   <span>Expand</span>
                                                   <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"></path>
                                                   </svg>
                                                </div>
                                                <div x-show="expanded" class="relative flex items-center justify-center h-full w-full" style="display: none;">
                                                   <span>Minimize</span>
                                                   <svg class="w-2.5 h-2.5 ml-1 fill-current" viewBox="0 0 636 636" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M582.573 9.99 436.64 155.922V69.636c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v160.427l.068.343c.047 3.839.755 7.667 2.224 11.276l6.453 9.714.245.38.276.188 9.802 6.51a30.8 30.8 0 0 0 11.64 2.292h160.4c16.959 0 30.703-13.745 30.703-30.703 0-16.964-13.745-30.703-30.703-30.703v-.005h-86.27L625.995 53.422c11.99-12 11.99-31.443 0-43.432-11.99-11.995-31.432-11.995-43.421-.01l-.001.01ZM155.253 199.347l-86.276.005c-16.964 0-30.708 13.745-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708l160.4-.005c3.964 0 7.917-.771 11.641-2.292l9.812-6.521.271-.177.245-.38 6.453-9.714c1.469-3.604 2.188-7.437 2.224-11.276l.068-.344V69.646c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v86.287L52.755 9.999C40.765-1.985 21.323-1.985 9.328 10c-11.99 12-11.99 31.443 0 43.432l145.925 145.916ZM480.067 437.307l86.292.005c16.958 0 30.702-13.745 30.702-30.703 0-16.964-13.745-30.703-30.702-30.703h-160.4a30.76 30.76 0 0 0-11.714 2.339c-3.719 1.531-7.146 3.776-10.01 6.646-2.875 2.87-5.115 6.297-6.651 10.026-1.537 3.74-2.344 7.703-2.344 11.693v160.426c0 16.959 13.745 30.708 30.708 30.708 16.959 0 30.708-13.754 30.708-30.708l-.005-86.292 145.933 145.934c11.99 11.984 31.432 11.984 43.427 0 11.989-12 11.989-31.443 0-43.432L480.067 437.307ZM260.093 406.613a30.56 30.56 0 0 0-2.343-11.692c-1.537-3.724-3.776-7.162-6.651-10.026a30.702 30.702 0 0 0-10.021-6.646c-3.75-1.537-7.719-2.339-11.709-2.339h-160.4c-16.964 0-30.708 13.746-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708v-.005h86.287L9.323 583.254c-11.99 12-11.99 31.443 0 43.432 11.99 11.985 31.432 11.985 43.426 0l145.934-145.933v86.292c0 16.959 13.745 30.708 30.708 30.708 16.958 0 30.708-13.755 30.708-30.708l-.006-160.432Z"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div :class="{ 'h-40 rounded-b-md': !expanded, 'h-full': expanded }" class="bg-[#1c1c21] relative overflow-hidden h-40 rounded-b-md">
                                          <iframe id="custom_footer_code-14644" loading="lazy" src="/frame/monaco-editor?language=javascript&amp;background=1c1c21" class="w-full h-full rounded-md relative z-20"></iframe>
                                          <div class="absolute inset-0 w-full h-full z-10 flex items-center justify-center">
                                             <svg class="animate-spin h-4 w-4 text-gray-400 relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <textarea class="h-20 hidden" id="custom_footer_textarea-14644" name="custom_footer" wire:model.lazy="custom_footer"></textarea>
                              </div>
                              <div class="w-full flex items-center justify-between space-x-2">
                                 <div wire:click="delete" class="bg-red-500 text-xs text-white font-medium px-3 py-2 rounded cursor-pointer">Delete</div>
                                 <div class="flex items-center justify-end space-x-2">
                                    <div class="bg-gray-600 text-xs text-white font-medium px-3 py-2 rounded cursor-pointer" @click="pageId=null">Cancel</div>
                                    <button wire:click="savePage" class="w-auto flex-shrink-0 disabled:cursor-not-allowed disabled:bg-gray-500 h-full px-3 py-2 flex items-center justify-center text-white bg-blue-600 font-medium text-xs cursor-pointer rounded">
                                       <span wire:loading.flex="" wire:target="savePage" class="flex items-center">
                                          <svg class="animate-spin mr-2 h-3 w-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                             <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                             <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                          </svg>
                                          <span>Saving</span>
                                       </span>
                                       <span wire:loading.remove="" wire:target="savePage">Save &amp; Close</span>
                                    </button>
                                 </div>
                              </div>
                              <script></script>
                           </div>
                           <!-- Livewire Component wire-end:fFcoLiHiGwVUI2OvSDX8 -->
                        </div>
                        <div x-show="pageId == '14645'" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="translate-x-0 opacity-50" x-transition:enter-end="translate-x-full opacity-100" wire:key="14645" :class="{ 'min-w-[400px] w-auto' : !app.pages_expanded, 'min-w-full w-screen' : app.pages_expanded }" class="p-6 page-settings bg-gray-750 h-full overflow-y-scroll pb-14 absolute top-0 right-0 border-r border-gray-750 translate-x-full min-w-[400px] w-auto" style="display: none;">
                           <div class="relative w-full flex items-center mb-3">
                              <h2 class="text-gray-300 font-semibold text-sm">Page Page</h2>
                              <div @click="pageId=null" class="absolute text-gray-500 hover:text-gray-400 p-1 cursor-pointer right-0">
                                 <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                 </svg>
                              </div>
                           </div>
                           <div wire:id="W8hmi1NttylxE41mzPTB" class="w-full space-y-2">
                              <div class="space-y-1.5">
                                 <label for="title">Title</label>
                                 <input type="text" name="title" wire:model.defer="title">
                              </div>
                              <div class="space-y-1.5 pb-2">
                                 <label for="slug">Route</label>
                                 <input type="text" name="slug" wire:model.defer="slug">
                              </div>
                              <div class="relative pb-2">
                                 <div x-data="{ expanded: false,
                                    init: function(){
                                    let iframeWindow = document.getElementById('custom_head_code-14645').contentWindow;
                                    let textArea = document.getElementById('custom_head_textarea-14645');
                                    let that = this;
                                    iframeWindow.addEventListener('keyup', (event) => {
                                    if (event.key === 'Escape') { 
                                    this.expanded = false;
                                    }
                                    });
                                    iframeWindow.addEventListener('ready', function(event){
                                    let originalValue = textArea.value;
                                    iframeWindow.set(originalValue);
                                    iframeWindow.addEventListener('updated', function(event){
                                    textArea.value = event.detail.value;
                                    });
                                    });
                                    iframeWindow.addEventListener('blurred', function(event){
                                    textArea.dispatchEvent(new Event('change'));
                                    });
                                    $watch('expanded', value => {
                                    if (value) {
                                    app.pages_expanded = true;
                                    } else {
                                    app.pages_expanded = false;
                                    }
                                    })
                                    }
                                    }" x-on:keydown.escape.window.prevent.stop="if(expanded){ expanded=false; }" :class="{ 'fixed w-full h-full bg-black z-50 top-0 left-0' : expanded }">
                                    <div class="relative h-full">
                                       <div :class="{ 'rounded-t-md' : !expanded }" class="h-8 bg-gray-800 flex overflow-hidden border-b text-[0.65rem] border-gray-900 items-center justify-between rounded-t-md">
                                          <p class="text-gray-400 font-medium text-left pl-3">Custom Head Content (including CSS/JS)</p>
                                          <div class="flex h-full items-center justify-center">
                                             <div x-show="expanded" class="h-5 text-gray-400 font-mono px-1.5 mr-1 flex items-center text-[0.6rem] rounded bg-gray-800 border border-gray-750" style="display: none;">esc</div>
                                             <div x-on:click="expanded=!expanded;" class="relative h-full px-2.5 text-gray-400 hover:text-gray-300 cursor-pointer flex items-center hover:bg-gray-700">
                                                <div x-show="!expanded" class="relative flex items-center justify-center h-full w-full">
                                                   <span>Expand</span>
                                                   <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"></path>
                                                   </svg>
                                                </div>
                                                <div x-show="expanded" class="relative flex items-center justify-center h-full w-full" style="display: none;">
                                                   <span>Minimize</span>
                                                   <svg class="w-2.5 h-2.5 ml-1 fill-current" viewBox="0 0 636 636" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M582.573 9.99 436.64 155.922V69.636c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v160.427l.068.343c.047 3.839.755 7.667 2.224 11.276l6.453 9.714.245.38.276.188 9.802 6.51a30.8 30.8 0 0 0 11.64 2.292h160.4c16.959 0 30.703-13.745 30.703-30.703 0-16.964-13.745-30.703-30.703-30.703v-.005h-86.27L625.995 53.422c11.99-12 11.99-31.443 0-43.432-11.99-11.995-31.432-11.995-43.421-.01l-.001.01ZM155.253 199.347l-86.276.005c-16.964 0-30.708 13.745-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708l160.4-.005c3.964 0 7.917-.771 11.641-2.292l9.812-6.521.271-.177.245-.38 6.453-9.714c1.469-3.604 2.188-7.437 2.224-11.276l.068-.344V69.646c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v86.287L52.755 9.999C40.765-1.985 21.323-1.985 9.328 10c-11.99 12-11.99 31.443 0 43.432l145.925 145.916ZM480.067 437.307l86.292.005c16.958 0 30.702-13.745 30.702-30.703 0-16.964-13.745-30.703-30.702-30.703h-160.4a30.76 30.76 0 0 0-11.714 2.339c-3.719 1.531-7.146 3.776-10.01 6.646-2.875 2.87-5.115 6.297-6.651 10.026-1.537 3.74-2.344 7.703-2.344 11.693v160.426c0 16.959 13.745 30.708 30.708 30.708 16.959 0 30.708-13.754 30.708-30.708l-.005-86.292 145.933 145.934c11.99 11.984 31.432 11.984 43.427 0 11.989-12 11.989-31.443 0-43.432L480.067 437.307ZM260.093 406.613a30.56 30.56 0 0 0-2.343-11.692c-1.537-3.724-3.776-7.162-6.651-10.026a30.702 30.702 0 0 0-10.021-6.646c-3.75-1.537-7.719-2.339-11.709-2.339h-160.4c-16.964 0-30.708 13.746-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708v-.005h86.287L9.323 583.254c-11.99 12-11.99 31.443 0 43.432 11.99 11.985 31.432 11.985 43.426 0l145.934-145.933v86.292c0 16.959 13.745 30.708 30.708 30.708 16.958 0 30.708-13.755 30.708-30.708l-.006-160.432Z"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div :class="{ 'h-40 rounded-b-md': !expanded, 'h-full': expanded }" class="bg-[#1c1c21] relative overflow-hidden h-40 rounded-b-md">
                                          <iframe id="custom_head_code-14645" loading="lazy" src="/frame/monaco-editor?language=javascript&amp;background=1c1c21" class="w-full h-full rounded-md relative z-20"></iframe>
                                          <div class="absolute inset-0 w-full h-full z-10 flex items-center justify-center">
                                             <svg class="animate-spin h-4 w-4 text-gray-400 relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <textarea wire:ignore.self="" class="h-20 hidden" id="custom_head_textarea-14645" name="custom_head" wire:model.lazy="custom_head"></textarea>
                              </div>
                              <div class="relative pb-2">
                                 <div x-data="{ expanded: false,
                                    init: function(){
                                    let iframeWindow = document.getElementById('custom_footer_code-14645').contentWindow;
                                    let textArea = document.getElementById('custom_footer_textarea-14645');
                                    let that = this;
                                    iframeWindow.addEventListener('keyup', (event) => {
                                    if (event.key === 'Escape') { 
                                    this.expanded = false;
                                    }
                                    });
                                    iframeWindow.addEventListener('ready', function(event){
                                    let originalValue = textArea.value;
                                    iframeWindow.set(originalValue);
                                    iframeWindow.addEventListener('updated', function(event){
                                    textArea.value = event.detail.value;
                                    });
                                    });
                                    iframeWindow.addEventListener('blurred', function(event){
                                    textArea.dispatchEvent(new Event('change'));
                                    });
                                    $watch('expanded', value => {
                                    if (value) {
                                    app.pages_expanded = true;
                                    } else {
                                    app.pages_expanded = false;
                                    }
                                    })
                                    }
                                    }" x-on:keydown.escape.window.prevent.stop="if(expanded){ expanded=false; }" :class="{ 'fixed w-full h-full bg-black z-50 top-0 left-0' : expanded }">
                                    <div class="relative h-full">
                                       <div :class="{ 'rounded-t-md' : !expanded }" class="h-8 bg-gray-800 flex overflow-hidden border-b text-[0.65rem] border-gray-900 items-center justify-between rounded-t-md">
                                          <p class="text-gray-400 font-medium text-left pl-3">Custom Footer Content</p>
                                          <div class="flex h-full items-center justify-center">
                                             <div x-show="expanded" class="h-5 text-gray-400 font-mono px-1.5 mr-1 flex items-center text-[0.6rem] rounded bg-gray-800 border border-gray-750" style="display: none;">esc</div>
                                             <div x-on:click="expanded=!expanded;" class="relative h-full px-2.5 text-gray-400 hover:text-gray-300 cursor-pointer flex items-center hover:bg-gray-700">
                                                <div x-show="!expanded" class="relative flex items-center justify-center h-full w-full">
                                                   <span>Expand</span>
                                                   <svg class="w-3 h-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"></path>
                                                   </svg>
                                                </div>
                                                <div x-show="expanded" class="relative flex items-center justify-center h-full w-full" style="display: none;">
                                                   <span>Minimize</span>
                                                   <svg class="w-2.5 h-2.5 ml-1 fill-current" viewBox="0 0 636 636" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M582.573 9.99 436.64 155.922V69.636c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v160.427l.068.343c.047 3.839.755 7.667 2.224 11.276l6.453 9.714.245.38.276.188 9.802 6.51a30.8 30.8 0 0 0 11.64 2.292h160.4c16.959 0 30.703-13.745 30.703-30.703 0-16.964-13.745-30.703-30.703-30.703v-.005h-86.27L625.995 53.422c11.99-12 11.99-31.443 0-43.432-11.99-11.995-31.432-11.995-43.421-.01l-.001.01ZM155.253 199.347l-86.276.005c-16.964 0-30.708 13.745-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708l160.4-.005c3.964 0 7.917-.771 11.641-2.292l9.812-6.521.271-.177.245-.38 6.453-9.714c1.469-3.604 2.188-7.437 2.224-11.276l.068-.344V69.646c0-16.964-13.755-30.708-30.708-30.708-16.959 0-30.708 13.745-30.708 30.708v86.287L52.755 9.999C40.765-1.985 21.323-1.985 9.328 10c-11.99 12-11.99 31.443 0 43.432l145.925 145.916ZM480.067 437.307l86.292.005c16.958 0 30.702-13.745 30.702-30.703 0-16.964-13.745-30.703-30.702-30.703h-160.4a30.76 30.76 0 0 0-11.714 2.339c-3.719 1.531-7.146 3.776-10.01 6.646-2.875 2.87-5.115 6.297-6.651 10.026-1.537 3.74-2.344 7.703-2.344 11.693v160.426c0 16.959 13.745 30.708 30.708 30.708 16.959 0 30.708-13.754 30.708-30.708l-.005-86.292 145.933 145.934c11.99 11.984 31.432 11.984 43.427 0 11.989-12 11.989-31.443 0-43.432L480.067 437.307ZM260.093 406.613a30.56 30.56 0 0 0-2.343-11.692c-1.537-3.724-3.776-7.162-6.651-10.026a30.702 30.702 0 0 0-10.021-6.646c-3.75-1.537-7.719-2.339-11.709-2.339h-160.4c-16.964 0-30.708 13.746-30.708 30.708 0 16.959 13.746 30.708 30.708 30.708v-.005h86.287L9.323 583.254c-11.99 12-11.99 31.443 0 43.432 11.99 11.985 31.432 11.985 43.426 0l145.934-145.933v86.292c0 16.959 13.745 30.708 30.708 30.708 16.958 0 30.708-13.755 30.708-30.708l-.006-160.432Z"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div :class="{ 'h-40 rounded-b-md': !expanded, 'h-full': expanded }" class="bg-[#1c1c21] relative overflow-hidden h-40 rounded-b-md">
                                          <iframe id="custom_footer_code-14645" loading="lazy" src="/frame/monaco-editor?language=javascript&amp;background=1c1c21" class="w-full h-full rounded-md relative z-20"></iframe>
                                          <div class="absolute inset-0 w-full h-full z-10 flex items-center justify-center">
                                             <svg class="animate-spin h-4 w-4 text-gray-400 relative z-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <textarea class="h-20 hidden" id="custom_footer_textarea-14645" name="custom_footer" wire:model.lazy="custom_footer"></textarea>
                              </div>
                              <div class="w-full flex items-center justify-between space-x-2">
                                 <div wire:click="delete" class="bg-red-500 text-xs text-white font-medium px-3 py-2 rounded cursor-pointer">Delete</div>
                                 <div class="flex items-center justify-end space-x-2">
                                    <div class="bg-gray-600 text-xs text-white font-medium px-3 py-2 rounded cursor-pointer" @click="pageId=null">Cancel</div>
                                    <button wire:click="savePage" class="w-auto flex-shrink-0 disabled:cursor-not-allowed disabled:bg-gray-500 h-full px-3 py-2 flex items-center justify-center text-white bg-blue-600 font-medium text-xs cursor-pointer rounded">
                                       <span wire:loading.flex="" wire:target="savePage" class="flex items-center">
                                          <svg class="animate-spin mr-2 h-3 w-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                             <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                             <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                          </svg>
                                          <span>Saving</span>
                                       </span>
                                       <span wire:loading.remove="" wire:target="savePage">Save &amp; Close</span>
                                    </button>
                                 </div>
                              </div>
                              <script></script>
                           </div>
                           <!-- Livewire Component wire-end:W8hmi1NttylxE41mzPTB -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Livewire Component wire-end:BxLwVEhJ8hBlaWgMSFXB -->    
            </div>
            <div x-show="app.history_iframe" class="w-full" style="display: none;">
               <div :class="{ 'translate-x-0 ml-10': app.tab.pages, '-translate-x-full -ml-10':!app.tab.pages }" class="absolute top-0 left-0 z-20 items-stretch justify-center w-auto h-full transition duration-200 ease-out transform bg-gray-800 -translate-x-full -ml-10">
                  <div class="min-w-[12rem] h-full space-y-2">
                     <div class="w-full flex items-center relative justify-between px-4 pt-3 pb-1">
                        <h2 class="text-gray-400 font-medium text-xs">Pages (<span class="text-[0.6rem]">Previous Version</span>)</h2>
                        <div @click="app.tab.pages=false" class="absolute text-gray-500 hover:text-gray-400 p-1 cursor-pointer mr-3.5 right-0">
                           <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                           </svg>
                        </div>
                     </div>
                     <template x-for="(page, index) in app.history_rendered">
                        <div class="px-2 relative">
                           <div @click="app.historyPagePreview(index)" :class="{ 'text-gray-300 hover:text-gray-100 hover:bg-gray-700' : app.history_rendered_preview.slug != page.slug, 'text-gray-100 bg-gray-700': app.history_rendered_preview.slug == page.slug }" class="self-start flex items-center rounded w-full group pl-2.5 pr-8 py-2 text-xs  border-transparent cursor-pointer">
                              <div class="flex flex-shrink-0">
                                 <span class="flex-shrink-0" x-text="page.title"></span>
                                 <span class="rounded ml-2 flex-shrink-0 text-[0.55rem] text-gray-400" x-text="page.slug"></span>
                              </div>
                           </div>
                        </div>
                     </template>
                  </div>
               </div>
            </div>
         </div>
         <div @click.away="app.tab.more=false" :class="{ 'h-10': !app.tab.more, 'h-10': app.tab.more }" class="flex bg-gray-900">
            <div @click="app.tab.more=!app.tab.more; app.closeMenu();" class="relative group z-40 flex-shrink-0 w-10 h-full">
               <div x-show="!app.tab.more" x-tooltip.right="Resources" class="absolute inset-0 w-full h-full cursor-pointer"></div>
               <div class="flex items-center justify-center w-full h-10 cursor-pointer border-b border-t border-transparent hover:bg-gray-800" :class="{ 'bg-gray-800 border-b-gray-750 border-t-gray-750 border-gray-750' : app.tab.more, 'hover:bg-gray-800' : !app.tab.more }">
                  <svg :class="{ 'text-gray-500 group-hover:text-gray-400' : !app.tab.more, 'text-gray-300' : app.tab.more }" class="w-5 h-5 stroke-current text-gray-500 group-hover:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
               </div>
            </div>
            <div :class="{ 'translate-x-0 ml-10': app.tab.more, '-translate-x-full -ml-10':!app.tab.more }" class="absolute top-0 left-0 z-20 items-stretch justify-center w-auto h-full transition duration-200 ease-out transform bg-gray-800 -translate-x-full -ml-10">
               <div class="relative z-40 flex flex-col w-48 h-full text-sm font-medium tracking-tight text-gray-300 bg-gray-800 border-l border-gray-800">
                  <div class="w-full flex items-center relative z-40 bg-gray-800 justify-between px-4 h-10 border-b border-gray-750">
                     <h2 class="text-gray-400 font-medium text-xs leading-none">Resources</h2>
                     <div @click="app.tab.more=false" class="absolute text-gray-500 hover:text-gray-400 p-1 cursor-pointer mr-3.5 right-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                     </div>
                  </div>
                  <p class="flex items-center w-full h-10 px-4 text-xs leading-tight tracking-wide text-gray-200 ">Learn</p>
                  <div @click="app.modals.tour.open=true; app.tab.more=false;" class="flex items-center w-full py-3 pl-5 mx-auto space-x-1 text-xs text-left text-gray-400 cursor-pointer hover:bg-gray-700">
                     <svg class="h-4 w-4 fill-current" viewBox="0 0 101 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M99.346 19.267 82.816 8.156a2.223 2.223 0 0 0-1.24-.378H52.55V2.222a2.222 2.222 0 1 0-4.444 0v5.556H33.66A2.222 2.222 0 0 0 31.44 10v22.222c0 1.228.995 2.223 2.222 2.223h14.445v7.777H19.08c-.442 0-.874.132-1.24.379L1.31 53.71a2.221 2.221 0 0 0 0 3.689l16.53 11.11c.366.247.798.38 1.24.38h29.026v26.666H32.55a2.222 2.222 0 1 0 0 4.444h35.555a2.222 2.222 0 0 0 0-4.444H52.55V68.889h14.445a2.222 2.222 0 0 0 2.222-2.222V44.445a2.222 2.222 0 0 0-2.222-2.222H52.55v-7.778h29.026c.442 0 .874-.132 1.24-.378l16.53-11.111a2.224 2.224 0 0 0 0-3.689h.001ZM64.772 64.446H19.756l-13.223-8.89 13.224-8.888h45.016v17.778ZM80.9 30H35.883V12.224h45.016l13.223 8.888-13.223 8.89Z"></path>
                     </svg>
                     <span>Tour</span>
                  </div>
                  <div @click="app.resources.open=true;app.resources.section='videos'" class="flex items-center w-full py-3 pl-5 mx-auto space-x-1 text-xs text-left text-gray-400 cursor-pointer hover:bg-gray-700">
                     <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="none">
                           <path d="M8.75 8.754v6.495a1 1 0 0 0 1.508.861l5.506-3.248a1 1 0 0 0 0-1.723l-5.506-3.246a1 1 0 0 0-1.508.861z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M21.25 12a9.25 9.25 0 1 1-18.5 0 9.25 9.25 0 0 1 18.5 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                     </svg>
                     Videos
                  </div>
                  <div @click="app.resources.open=true;app.resources.section='documentation'" class="flex items-center w-full py-3 pl-5 mx-auto space-x-1 text-xs text-left text-gray-400 cursor-pointer hover:bg-gray-700">
                     <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="none">
                           <path d="M3.75 12.25h3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M3.75 17.5h3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M3.75 7h3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M5.749 6a3 3 0 0 1 3-3h8.502a3 3 0 0 1 3 3v12.5a3 3 0 0 1-3 3H8.749a3 3 0 0 1-3-3V6z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M10.75 8h5.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M11.75 11.25h3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                     </svg>
                     Documentation
                  </div>
                  <div @click="app.resources.open=true;app.resources.section='changelog'" target="_blank" class="flex items-center w-full py-3 pl-5 mx-auto space-x-1 text-xs text-left text-gray-400 cursor-pointer hover:bg-gray-700">
                     <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="none">
                           <path d="M9.75 7.75H16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M9.75 11.25H14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M7.74902 21.25H18.2506C19.3551 21.25 20.2506 20.3546 20.2506 19.25V4.75C20.2506 3.64543 19.3551 2.75 18.2506 2.75H7.74902C6.64445 2.75 5.74902 3.64543 5.74902 4.75V16.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M7.74898 21.25C5.55579 21.25 4.13308 19.6692 3.76888 17.7445C3.6662 17.2018 4.12403 16.75 4.67632 16.75H13.2498C13.8021 16.75 14.2398 17.2015 14.3384 17.7449C14.6874 19.6695 16.0568 21.25 18.2498 21.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                     </svg>
                     Changelog
                  </div>
                  <p class="flex items-center w-full h-10 px-4 text-xs leading-tight tracking-wide text-gray-200 mt-2 border-t border-gray-700">Links</p>
                  <a href="/settings" target="_blank" class="flex items-center w-full py-3 pl-5 mx-auto space-x-1 text-xs text-left text-gray-400 cursor-pointer hover:bg-gray-700">
                     <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="none">
                           <path d="M9.75 4.238c0-.822.666-1.488 1.488-1.488h1.524c.822 0 1.488.666 1.488 1.488v.299c0 1.585 1.716 2.575 3.088 1.783a1.373 1.373 0 0 1 1.875.502l.878 1.52a1.373 1.373 0 0 1-.503 1.875c-1.372.792-1.372 2.774 0 3.566.657.379.882 1.218.503 1.875l-.878 1.52a1.373 1.373 0 0 1-1.875.502c-1.372-.792-3.088.198-3.088 1.783v.3c0 .82-.666 1.487-1.488 1.487h-1.524a1.488 1.488 0 0 1-1.488-1.488v-.299c0-1.585-1.716-2.575-3.088-1.783a1.373 1.373 0 0 1-1.875-.502l-.878-1.52a1.373 1.373 0 0 1 .503-1.875c1.372-.792 1.372-2.774 0-3.566a1.373 1.373 0 0 1-.503-1.875l.878-1.52a1.373 1.373 0 0 1 1.875-.502c1.372.792 3.088-.198 3.088-1.783v-.3z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M15.25 12a3.25 3.25 0 1 1-6.5 0 3.25 3.25 0 0 1 6.5 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                     </svg>
                     Account Settings
                  </a>
                  <a href="/teja" target="_blank" class="flex items-center w-full py-3 pl-5 mx-auto space-x-1 text-xs text-left text-gray-400 cursor-pointer hover:bg-gray-700">
                     <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="none">
                           <path d="M21.25 12a9.25 9.25 0 1 1-18.5 0 9.25 9.25 0 0 1 18.5 0z" stroke="currentColor" stroke-width="1.5"></path>
                           <path d="M15.25 10a3.25 3.25 0 1 1-6.5 0 3.25 3.25 0 0 1 6.5 0z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                           <path d="M5.354 18.428C7.1 16.498 9.466 15.75 12 15.75c2.536 0 4.903.748 6.652 2.68" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                     </svg>
                     My Profile
                  </a>
                  <a href="/help" target="_blank" class="flex items-center w-full py-3 pl-5 mx-auto space-x-1 text-xs text-left text-gray-400 cursor-pointer hover:bg-gray-700">
                     <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="none">
                           <path d="M21.25 12a9.25 9.25 0 1 1-18.5 0 9.25 9.25 0 0 1 18.5 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path d="M9.75 8.395V3.027m0 17.948v-5.373m4.5-7.206V3.028m0 17.947v-5.366M2.965 10H8.25m7.5 0h5.285m-5.284 4h5.285M2.96 14h5.292m7.998-2a4.25 4.25 0 1 1-8.5 0 4.25 4.25 0 0 1 8.5 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                     </svg>
                     Support
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div x-show="app.isPage &amp;&amp; !app.fullscreen" class="fixed top-0 left-0 z-30 w-10 h-full bg-gray-900 border-r border-gray-750"></div>
</div>