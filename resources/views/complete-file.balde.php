<!-- Fixed header -->
<header x-data="" x-on:keydown.escape.window.prevent.stop="if(app.history_iframe){ app.history_iframe = false; } if(app.tailwind_iframe){ app.tailwind_iframe = false; }" id="top" :class="{ 'hidden' : app.pages_expanded }" class="border-gray-750 relative top-0 left-0 z-40 flex h-10 w-full select-none items-center justify-between border-b bg-gray-900 transition-all duration-500 ease-in-out">
   <div x-show="app.history_iframe || app.tailwind_iframe" style="display: none;">
      <template x-if="app.history_iframe">
         <div class="absolute inset-0 z-30 flex flex h-full w-full items-center justify-center bg-black text-xs text-gray-300">
            <div x-show="app.history_rendered_preview" @click.stop="app.tab.pages=!app.tab.pages" :class="{ 'bg-gray-800': app.tab.pages, 'hover:bg-gray-800' : !app.tab.pages }" class="border-gray-750 border-gray-750 ml-10 flex h-10 w-auto flex-shrink-0 cursor-pointer items-center items-center space-x-1 border-l border-r px-3 text-xs font-medium text-gray-200">
               <span class="font-normal text-gray-400">Page:</span>
               <span class="flex-shrink-0" x-text="app.history_rendered_preview.title"></span>
            </div>
            <div class="flex w-full items-center justify-center">
               <div>Previewing a previous version of this project.</div>
               <span @click="app.history_iframe=false" class="ml-1 cursor-pointer font-medium text-white underline">Close Preview</span>
            </div>
            <div class="flex w-64 flex-shrink-0 items-center justify-end">
               <div class="border-gray-750 mr-10 flex h-5 items-center rounded border bg-gray-800 px-1.5 font-mono text-[0.6rem] text-gray-400">esc</div>
               <div @click="app.history_iframe=false" x-show="app.history_iframe" class="absolute top-0 right-0 flex h-full w-10 cursor-pointer items-center justify-center bg-black bg-opacity-50 text-3xl text-white">
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
               </div>
            </div>
         </div>
      </template>
      <template x-if="app.tailwind_iframe">
         <div class="absolute inset-0 z-30 flex flex h-full w-full items-center justify-center bg-black text-xs text-gray-300">
            <div class="flex w-full items-center justify-center">
               <div>Previewing Tailwind Documentation.</div>
               <span @click="app.tailwind_iframe=false" class="ml-1 cursor-pointer font-medium text-white underline">Close Docs</span>
            </div>
            <div class="flex w-64 flex-shrink-0 items-center justify-end">
               <div class="border-gray-750 mr-10 flex h-5 items-center rounded border bg-gray-800 px-1.5 font-mono text-[0.6rem] text-gray-400">esc</div>
               <div @click="app.tailwind_iframe=false" x-show="app.tailwind_iframe" class="absolute top-0 right-0 flex h-full w-10 cursor-pointer items-center justify-center bg-black bg-opacity-50 text-3xl text-white">
                  <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
               </div>
            </div>
         </div>
      </template>
   </div>
   <div class="relative z-20 flex">
      <div @mouseenter="app.showMenu=true; app.showMenuHovered=true" @mouseleave="if(!app.menu.file){app.showMenu=false} app.showMenuHovered=false" dusk="main-menu" :class="{ 'bg-gradient-to-b from-gray-900 to-gray-800' : app.menu.file, 'bg-gradient-to-br from-gray-800 to-gray-900' : !app.menu.file &amp;&amp; app.showMenuHovered, 'border-gray-750': app.isPage, 'border-transparent': !app.isPage }" class="border-gray-750 flex h-10 w-10 flex-shrink-0 items-center justify-center border-r">
         <div class="absolute inset-0 flex h-10 w-10 cursor-pointer items-center justify-center">
            <svg x-show="!app.showMenu" class="h-4 w-4 fill-current text-white" viewBox="0 0 39 15" xmlns="http://www.w3.org/2000/svg" style="">
               <path d="M11.252 1.152C4.184 2.526.454 6.918.061 14.329c1.963-4.049 4.798-5.975 8.503-5.778 2.115.112 3.84 1.295 5.75 2.603 3.11 2.133 6.712 4.601 13.281 3.324 7.068-1.374 10.798-5.766 11.191-13.177-1.963 4.049-4.798 5.975-8.503 5.779-2.115-.113-3.84-1.296-5.75-2.604-3.11-2.133-6.712-4.601-13.281-3.324z" fill-rule="evenodd"></path>
            </svg>
         </div>
         <div x-show="app.showMenu" @click="app.menu.file=!app.menu.file;" @click.outside="app.menu.file=false; app.showMenu=false" dusk="button-menu-open" class="group relative flex h-10 w-10 items-center justify-center text-gray-100" style="display: none;">
            <div class="absolute inset-0 flex h-10 w-10 cursor-pointer items-center justify-center">
               <svg x-show="app.showMenu" class="mt-0.5 h-4 w-4 fill-current text-white transition-all duration-200 ease-out" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                  <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
               </svg>
            </div>
            <div x-show="app.menu.file" class="absolute top-0 left-0 mt-10 w-48 rounded-br-md bg-gray-800" x-transition:enter="transition-all duration-100 ease-out" x-transition:enter-start="-translate-y-0.5" x-transition:enter-end="translate-y-0" style="display: none;">
               <ul class="rounded-br-lg border-b border-r border-gray-700 text-xs font-medium">
                  <li x-on:click="app.goToDashboard()" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" dusk="button-menu-dashboard" class="cursor-pointer px-4 py-1.5 text-white hover:bg-gray-700">Dashboard</li>
                  <li class="h-0 w-full border-b border-gray-700"></li>
                  <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false" class="group relative flex cursor-pointer items-center justify-between py-1.5 pl-4 pr-5 text-white hover:bg-gray-700">
                     <span>File</span>
                     <svg :class="{ 'text-gray-500' : !open, 'text-gray-100' : open }" class="h-2 w-auto rotate-90 fill-current text-gray-500" viewBox="0 0 100 100">
                        <polygon points="5.9,88.2 50,11.8 94.1,88.2 "></polygon>
                     </svg>
                     <ul x-show="open" class="absolute right-0 top-0 -mt-px w-48 translate-x-full rounded rounded-tl-none border-l border-gray-900 bg-gray-800 shadow-xl" style="display: none;">
                        <li onclick="setTimeout(function(){ app.menu.file=false; }, 5); document.getElementById('page').contentWindow.clickNewProject();" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': !app.isPage, 'text-gray-600 cursor-default' : app.isPage }" class="cursor-default rounded-tr py-1.5 pl-6 text-gray-600">New</li>
                        <li @click="app.save()" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': (app.isPage &amp;&amp; app.dirty), 'text-gray-600 cursor-default' : (!app.isPage || (app.isPage &amp;&amp; !app.dirty)) }" class="cursor-default py-1.5 pl-6 text-gray-600">Save</li>
                        <li x-on:click="app.goToDashboard()" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer rounded-b py-1.5 pl-6 text-white hover:bg-gray-700">Close</li>
                     </ul>
                  </li>
                  <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false" class="group relative flex cursor-pointer items-center justify-between py-1.5 pl-4 pr-5 text-white hover:bg-gray-700">
                     <span>Edit</span>
                     <svg :class="{ 'text-gray-500' : !open, 'text-gray-100' : open }" class="h-2 w-auto rotate-90 fill-current text-gray-500" viewBox="0 0 100 100">
                        <polygon points="5.9,88.2 50,11.8 94.1,88.2 "></polygon>
                     </svg>
                     <ul x-show="open" class="absolute right-0 top-0 w-48 translate-x-full rounded rounded-tl-none border-l border-gray-900 bg-gray-800" style="display: none;">
                        <li @click="document.getElementById('page').contentWindow.document.execCommand('undo');" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage &amp;&amp; app.undoIsAvailable, 'text-gray-600 cursor-default' : !app.isPage || !app.undoIsAvailable }" class="cursor-default rounded-tr py-1.5 pl-6 text-gray-600">Undo</li>
                        <li @click="document.getElementById('page').contentWindow.document.execCommand('redo');" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage &amp;&amp; app.redoIsAvailable, 'text-gray-600 cursor-default' : !app.isPage || !app.redoIsAvailable }" class="cursor-default py-1.5 pl-6 text-gray-600">Redo</li>
                        <li class="h-0 w-full border-b border-gray-700"></li>
                        <li @click="if(app.data.selectedElement){ app.cloneSelectedElement(); }" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage &amp;&amp; app.data.selectedElement, 'text-gray-600 cursor-default' : !app.isPage || !app.data.selectedElement }" class="cursor-default py-1.5 pl-6 text-gray-600">Duplicate Element</li>
                        <li @click="if(app.data.selectedElement){ app.deleteSelectedElement(); }" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage &amp;&amp; app.data.selectedElement, 'text-gray-600 cursor-default' : !app.isPage || !app.data.selectedElement }" class="cursor-default py-1.5 pl-6 text-gray-600">Delete Element</li>
                     </ul>
                  </li>
                  <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false" class="group relative flex cursor-pointer items-center justify-between py-1.5 pl-4 pr-5 text-white hover:bg-gray-700">
                     <span>View</span>
                     <svg :class="{ 'text-gray-500' : !open, 'text-gray-100' : open }" class="h-2 w-auto rotate-90 fill-current text-gray-500" viewBox="0 0 100 100">
                        <polygon points="5.9,88.2 50,11.8 94.1,88.2 "></polygon>
                     </svg>
                     <ul x-show="open" class="absolute right-0 top-0 w-48 translate-x-full rounded rounded-tl-none border-l border-gray-900 bg-gray-800" style="display: none;">
                        <li @click="app.previewMode=!app.previewMode" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer rounded-tr py-1.5 pl-6 text-white hover:bg-gray-700">
                           <svg x-show="app.previewMode" class="absolute left-0 ml-2 mt-0.5 h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                           </svg>
                           Preview Mode
                        </li>
                        <li @click="app.fullscreen=!app.fullscreen" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">
                           <svg x-show="app.fullscreen" class="absolute left-0 ml-2 mt-0.5 h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                           </svg>
                           Fullscreen Mode
                        </li>
                        <li class="h-0 w-full border-b border-gray-700"></li>
                        <li @click="app.code=!app.code" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">
                           <svg x-show="app.code" class="absolute left-0 ml-2 mt-0.5 h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                           </svg>
                           Code Editor
                        </li>
                        <li @click="app.responsive=!app.responsive" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">
                           <svg x-show="app.responsive" class="absolute left-0 ml-2 mt-0.5 h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                           </svg>
                           Responsive Markers
                        </li>
                        <li @click="notificationBar.show('Rulers are not yet implemented, but will be very soon.')" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">Rulers</li>
                        <li class="h-0 w-full border-b border-gray-700"></li>
                        <li id="browse-components-menu-item" @click="$dispatch('toggle-components-modal')" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">Browse Components</li>
                        <li class="h-0 w-full border-b border-gray-700"></li>
                        <li @click="app.zoom(app.pageZoom+1)" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">Zoom in</li>
                        <li @click="app.zoom(app.pageZoom-1)" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">Zoom out</li>
                        <li @click="app.zoom(100)" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">Zoom to 100%</li>
                     </ul>
                  </li>
                  <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false" dusk="button-menu-export" class="group relative flex cursor-pointer items-center justify-between py-1.5 pl-4 pr-5 text-white hover:bg-gray-700">
                     <span>Export</span>
                     <svg :class="{ 'text-gray-500' : !open, 'text-gray-100' : open }" class="h-2 w-auto rotate-90 fill-current text-gray-500" viewBox="0 0 100 100">
                        <polygon points="5.9,88.2 50,11.8 94.1,88.2 "></polygon>
                     </svg>
                     <ul x-show="open" class="absolute right-0 top-0 w-48 translate-x-full rounded rounded-tl-none border-l border-gray-900 bg-gray-800" style="display: none;">
                        <li @click="app.export.downloadProject()" wire:key="export-download-project" dusk="button-menu-export-download-project" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer rounded-tr py-1.5 pl-6 text-white hover:bg-gray-700">Download Project</li>
                        <li @click="app.export.downloadHTMLFile()" wire:key="export-download-html-file" dusk="button-menu-export-download-html-file" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">Download HTML File</li>
                        <li @click="app.export.copyHTMLToClipboard()" wire:key="export-copy-html-to-clipboard" dusk="button-menu-export-copy-html-to-clipboard" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer rounded-b py-1.5 pl-6 text-white hover:bg-gray-700">Copy HTML to Clipboard</li>
                        <li @click="app.export.copyComponentsToClipboard()" wire:key="export-copy-components-to-clipboard" dusk="button-menu-export-copy-components-to-clipboard" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer rounded-b py-1.5 pl-6 text-white hover:bg-gray-700">Copy Components HTML</li>
                        <li @click="app.export.copySelectedElementToClipBoard()" wire:key="export-copy-selected-element-to-clipboard" dusk="button-menu-export-copy-selected-element-to-clipboard" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage &amp;&amp; app.data.selectedElement, 'text-gray-600 cursor-default' : !app.isPage || !app.data.selectedElement }" class="cursor-default rounded-b py-1.5 pl-6 text-gray-600">Copy Selected Element</li>
                     </ul>
                  </li>
                  <li x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false" class="group relative flex cursor-pointer items-center justify-between py-1.5 pl-4 pr-5 text-white hover:bg-gray-700">
                     <span>Resources</span>
                     <svg :class="{ 'text-gray-500' : !open, 'text-gray-100' : open }" class="h-2 w-auto rotate-90 fill-current text-gray-500" viewBox="0 0 100 100">
                        <polygon points="5.9,88.2 50,11.8 94.1,88.2 "></polygon>
                     </svg>
                     <ul x-show="open" class="absolute right-0 top-0 w-48 translate-x-full rounded rounded-tl-none border-l border-gray-900 bg-gray-800" style="display: none;">
                        <li @click="app.resources.open=true;app.resources.section='videos'" class="cursor-pointer rounded-tr py-1.5 pl-6 text-white hover:bg-gray-700">Videos</li>
                        <li @click="app.resources.open=true;app.resources.section='documentation'" class="cursor-pointer py-1.5 pl-6 text-white hover:bg-gray-700">Documentation</li>
                        <li @click="app.resources.open=true;app.resources.section='changelog'" class="cursor-pointer rounded-b py-1.5 pl-6 text-white hover:bg-gray-700">Changelog</li>
                     </ul>
                  </li>
                  <li @click="$dispatch('toggle-components-modal')" class="group relative flex cursor-pointer items-center justify-between py-1.5 pl-4 pr-5 text-white hover:bg-gray-700">
                     <span>Components </span>
                  </li>
                  <li @click="app.modals.api.open=true" class="group relative flex cursor-pointer items-center justify-between py-1.5 pl-4 pr-5 text-white hover:bg-gray-700">
                     <span>Developer API Key</span>
                  </li>
                  <li @click="app.modals.settings.open=true" :class="{ 'hover:bg-gray-700 text-white cursor-pointer': app.isPage, 'text-gray-600 cursor-default' : !app.isPage }" class="cursor-pointer px-4 py-2 text-white hover:bg-gray-700">Settings</li>
                  <li class="h-0 w-full border-b border-gray-700"></li>
                  <li onclick="window.location.href='/tails/v1/app'">
                     <a href="/tails/v1/app" class="bg-gray-750 block cursor-pointer border-b border-gray-700 px-4 py-2 text-white hover:bg-gray-700">Back to Tails V1</a>
                  </li>
                  <li onclick="window.location='/dashboard/sites';" class="cursor-pointer rounded-br-lg px-4 py-2 hover:bg-gray-700">Exit</li>
               </ul>
            </div>
         </div>
      </div>
      <div x-show="app.isPage" @click.stop="app.tab.pages=!app.tab.pages" :class="{ 'bg-gray-800': app.tab.pages, 'hover:bg-gray-800' : !app.tab.pages }" class="border-gray-750 flex h-10 w-auto flex-shrink-0 cursor-pointer items-center space-x-1 border-r px-3 text-xs font-medium text-gray-200 hover:bg-gray-800">
         <span class="font-normal text-gray-400">Page:</span>
         <span class="flex-shrink-0" x-text="app.page.title">Home</span>
      </div>
      <div x-show="app.isPage" @click="app.previewMode=!app.previewMode" class="group relative flex items-center text-gray-100">
         <div x-tooltip="Preview Mode" :class="{ 'bg-gray-800 hover:text-blue-500 text-blue-500': app.previewMode, 'hover:text-gray-200 text-gray-400': !app.previewMode }" class="flex h-full cursor-pointer items-center px-3 text-xs font-medium text-gray-400 transition-colors duration-100 ease-out hover:bg-gray-800 hover:text-white hover:text-gray-200">
            <svg class="h-5 w-5 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11.9999 5.75C7.21083 5.75 4.18182 8.73162 2.83642 11.6193C2.7238 11.861 2.7238 12.139 2.83642 12.3807C4.18182 15.2684 7.21083 18.25 11.9999 18.25C16.7891 18.25 19.8246 15.2684 21.1705 12.3807C21.2832 12.139 21.2832 11.861 21.1705 11.6193C19.8246 8.73163 16.7891 5.75 11.9999 5.75Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
               <path d="M15.2499 12.077C15.2499 13.872 13.7949 15.327 11.9999 15.327C10.205 15.327 8.74994 13.872 8.74994 12.077C8.74994 10.2821 10.205 8.82703 11.9999 8.82703C13.7949 8.82703 15.2499 10.2821 15.2499 12.077Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
         </div>
      </div>
   </div>
   <div x-show="app.isPage" :class="{ 'translate-x-32' : app.fullscreen }" class="flex w-full items-center justify-center py-1 text-center text-xs text-gray-300">
      <div @click="app.modals.settings.open=true" dusk="button-project-settings" class="group relative flex w-full max-w-md cursor-pointer items-center justify-center space-x-1.5 rounded border border-gray-700 px-2 py-1 text-[0.6rem] text-white hover:bg-gray-800">
         <span x-html="app.projectIcon">🍹</span>
         <span x-text="app.project.title">Capricious Enormous Pistachio</span>
         <svg class="absolute right-[4px] h-4 w-4 fill-current text-gray-500 group-hover:text-gray-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" stroke="none">
               <path d="M11.25 4.75h-3.5a4 4 0 0 0-4 4v7.5a4 4 0 0 0 4 4h7.5a4 4 0 0 0 4-4v-3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
               <path d="M16 5l3 3m-2.372-3.633L8.75 12.25v3h3l7.882-7.88a2.123 2.123 0 1 0-3.004-3.003z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
         </svg>
      </div>
   </div>
   <div x-show="app.isPage" class="relative z-20 flex h-full w-auto items-center justify-end">
      <div x-tooltip="Fullscreen" @click="app.fullscreen=!app.fullscreen" :class="{ 'bg-gray-800 hover:text-blue-500 text-blue-500': app.fullscreen, 'hover:text-gray-200 text-gray-400': !app.fullscreen }" class="relative flex h-full cursor-pointer items-center px-2 text-xs font-medium text-gray-400 transition-colors duration-100 ease-out hover:bg-gray-800 hover:text-white hover:text-gray-200">
         <svg class="h-4 w-4 fill-current" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
            <path d="m7.707 27.259 5.02 5.02-2.792 2.791L.15 25.285 9.935 15.5l2.792 2.792-5.02 5.02h14.48v3.947H7.708Zm20.404-3.947h14.481l-5.02-5.02 2.792-2.792 9.786 9.786-9.786 9.785-2.791-2.791 5.02-5.02H28.11v-3.948Z" fill-rule="nonzero"></path>
         </svg>
      </div>
      <div x-tooltip="Responsive" @click="app.responsive=!app.responsive;" :class="{ 'bg-gray-800 hover:text-blue-500 text-blue-500': app.responsive, 'hover:text-gray-200 text-gray-400': !app.responsive }" class="relative flex h-full cursor-pointer items-center px-2 text-xs font-medium text-gray-400 transition-colors duration-100 ease-out hover:bg-gray-800 hover:text-white hover:text-gray-200">
         <svg class="h-5 w-5 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.74902 8.75736V6.75C7.74902 5.09315 9.09217 3.75 10.749 3.75H17.2506C18.9074 3.75 20.2506 5.09315 20.2506 6.75V16.25C20.2506 17.9069 18.9074 19.25 17.2506 19.25H11.9806M8.24988 17.75H7.74994M5.74903 20.25H10.2506C11.3551 20.25 12.2506 19.3546 12.2506 18.25V10.75C12.2506 9.64543 11.3551 8.75 10.2506 8.75H5.74902C4.64445 8.75 3.74902 9.64543 3.74902 10.75V18.25C3.74902 19.3546 4.64446 20.25 5.74903 20.25Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
         </svg>
      </div>
      <div x-tooltip="Code Editor" dusk="button-code-editor" @click="app.code=!app.code" :class="{ 'bg-gray-800 hover:text-blue-500 text-blue-500': app.code, 'hover:text-gray-200 text-gray-400': !app.code }" class="relative flex h-full cursor-pointer items-center overflow-hidden px-2 text-xs font-medium text-gray-400 transition-colors duration-100 ease-out hover:bg-gray-800 hover:text-white hover:text-gray-200">
         <svg class="h-5 w-5 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path d="M0 0h24v24H0z" stroke="none"></path>
            <path d="m7 8-4 4 4 4M17 8l4 4-4 4M14 4l-4 16"></path>
         </svg>
      </div>
   </div>
   <div x-show="app.isPage" class="border-gray-750 relative z-20 flex h-full w-64 flex-shrink-0 justify-end border-l">
      <div x-show="app.dirty" class="absolute bottom-0 left-0 z-40 h-0.5 bg-green-500 transition-all duration-[3000ms] ease-linear" :style="'width:' + app.saveInterval + '%'" style="width:0%%"></div>
      <div class="group relative flex items-center text-gray-400 hover:text-gray-100">
         <div class="flex h-full cursor-pointer items-center px-3 text-xs font-medium transition-colors duration-100 ease-out hover:bg-gray-800 hover:text-white">
            <div x-show="app.saved" class="relative flex h-full w-full items-center justify-center space-x-1">
               <div class="relative flex h-4 w-4 items-center justify-center">
                  <div class="absolute h-3 w-3 rounded-full bg-white"></div>
                  <svg class="relative h-4 w-4 text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
               </div>
               <div>Saved</div>
            </div>
            <div x-show="app.saving" class="relative flex h-full w-full items-center justify-center space-x-1" style="display: none;">
               <svg class="h-4 w-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
               </svg>
               <div class="text-gray-200">Saving</div>
            </div>
            <div @click="app.save()" dusk="button-save" x-show="!app.saving &amp;&amp; !app.saved" class="relative flex h-full w-full items-center justify-center space-x-1" style="display: none;">
               <svg class="h-4 w-4 stroke-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <g stroke="none">
                     <path d="M18.2502 20.25C19.3548 20.25 20.2502 19.3546 20.2502 18.25L20.2501 9.45157C20.2501 8.99742 20.0955 8.5568 19.8118 8.20217L16.8505 4.50059C16.4709 4.02617 15.8963 3.75 15.2888 3.75L5.75 3.75C4.64543 3.75 3.75 4.64543 3.75 5.75V18.25C3.75 19.3546 4.64543 20.25 5.75 20.25H18.2502Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M15.25 8C12.6715 8 11.0903 8 8.75041 8C8.19813 8 7.75 7.55228 7.75 7L7.75 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     <path d="M7.75 20.25V14.5C7.75 13.6716 8.42157 13 9.25 13H14.75C15.5784 13 16.25 13.6716 16.25 14.5V20.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
               </svg>
               <div>Save</div>
            </div>
         </div>
      </div>
      <div x-on:click="app.openPreview()" class="flex h-full cursor-pointer items-center px-3 text-xs font-medium text-gray-400 transition-colors duration-100 ease-out hover:bg-gray-800 hover:text-gray-100 hover:text-white">
         <svg class="mr-1.5 h-4 w-4 stroke-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" class="signal-icon-wrapper" stroke="none">
               <path d="M10.25 4.75h-2.5a4 4 0 0 0-4 4v7.5a4 4 0 0 0 4 4h7.5a4 4 0 0 0 4-4V14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
               <path d="M20.25 3.75v5.5m0-5.5h-5.5m5.5 0l-10.5 10.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
         </svg>
         <span>Preview</span>
      </div>
      <div wire:id="XGBtRgDyETF3jDEsReyw" @click.outside="app.menu.publish=false;" @hide-publish-menu-loader.window="app.publishMenuLoaded = true;" class="group relative flex items-center text-gray-400">
         <div @click="app.menu.publish=!app.menu.publish;" :class="{ 'bg-gray-800 text-white': app.menu.publish }" class="flex h-full cursor-pointer items-center px-3 text-xs font-medium transition-colors duration-100 ease-out hover:bg-gray-800 hover:text-white">
            <svg class="mr-1.5 h-4 w-4 stroke-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <g fill="none" class="signal-icon-wrapper" stroke="none">
                  <path d="M18.805 11.043a7.737 7.737 0 0 0 2.445-5.645V3.75a1 1 0 0 0-1-1h-1.651a7.734 7.734 0 0 0-5.64 2.442 38.669 38.669 0 0 0-4.586 5.955l-1.451 2.32a1 1 0 0 0 .14 1.237l2.228 2.232a1 1 0 0 0 1.237.142l2.323-1.452a38.685 38.685 0 0 0 5.955-4.583z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M10.691 7.839c-2.244-.337-4.367.167-6.376 1.149-.88.43-.681 1.737.286 1.887l3.594.556m4.374 4.37l.556 3.602c.15.968 1.458 1.166 1.887.286.984-2.017 1.5-4.139 1.163-6.393" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M5.682 16.323c-1.066.62-1.237 1.147-1.608 2.63L3.75 20.25l1.297-.324c1.485-.372 2.013-.543 2.634-1.615" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M17.25 8a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
               </g>
            </svg>
            <span>Publish</span>
         </div>
         <div x-show="app.menu.publish" class="absolute top-0 right-0 mt-10 -mr-1 w-80 overflow-hidden rounded-bl-md bg-gray-800" x-transition:enter="transition-all duration-100 ease-out" x-transition:enter-start="-translate-y-0.5" x-transition:enter-end="translate-y-0" style="display: none;">
            <div class="h-auto w-full p-2 pb-0">
               <div class="h-auto w-full">
                  <div class="flex h-full w-full items-center justify-center rounded-md bg-gray-900 p-2">
                     <svg class="h-3 w-3 animate-spin text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                     </svg>
                     <p class="ml-1.5 text-xs text-gray-200">Loading</p>
                  </div>
               </div>
            </div>
            <div class="flex h-12 justify-end space-x-2 p-2">
               <div @click="app.menu.publish=false;" class="flex h-full w-full cursor-pointer items-center justify-center rounded bg-gray-600 text-xs font-medium text-white">Close</div>
               <button wire:click="publish" disabled="" class="flex h-full w-auto flex-shrink-0 cursor-pointer items-center justify-center rounded bg-blue-600 px-3 py-2 text-xs font-medium text-white disabled:cursor-not-allowed disabled:bg-gray-500">
                  <span wire:loading.flex="" wire:target="publish" class="flex items-center">
                     <svg class="mr-2 h-3 w-3 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                     </svg>
                     <span>Publishing...</span>
                  </span>
                  <span wire:loading.remove="" wire:target="publish">Publish to Selected Services</span>
               </button>
            </div>
         </div>
      </div>
      <!-- Livewire Component wire-end:XGBtRgDyETF3jDEsReyw -->
   </div>
</header>
<!-- End Fixed Header -->
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
   <div class="h-auto w-full flex flex-col z-40 -translate-y-10">
      <a href="https://form.jotform.com/222074488503153?username=teja" target="_blank" class="relative block z-50 group w-10 h-8">
         <div x-tooltip.right="Report a Bug" class="absolute inset-0 w-full h-full cursor-pointer"></div>
         <div class="flex items-center justify-center w-full h-8 cursor-pointer border-b border-transparent hover:bg-gray-800">
            <svg class="w-4 h-4 text-gray-500 group-hover:text-gray-400 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g fill="none" stroke="none">
                  <path d="M19.25 5.74998L19.25 6.2507C19.25 8.45945 17.4595 10.25 15.2507 10.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M19.25 21.25L19.25 17.25C19.25 15.8693 18.1307 14.75 16.75 14.75L16.25 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M4.75 21.25L4.75 17.25C4.75 15.8693 5.86929 14.75 7.25 14.75L7.75109 14.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M4.75 5.75L4.75 6.25141C4.75 8.45977 6.54023 10.25 8.74859 10.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M16.25 2.75L14.2988 4.70112" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M7.74999 2.75L9.70312 4.7031" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M7.74902 13.5008C7.74902 11.1531 9.65216 9.25 11.9998 9.25C14.3474 9.25 16.2506 11.1531 16.2506 13.5008V16.25C16.2506 18.4591 14.4597 20.25 12.2506 20.25H11.749C9.53989 20.25 7.74902 18.4591 7.74902 16.25V13.5008Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M15.2506 10.7656V7.00077C15.2506 5.20542 13.7951 3.75 11.9998 3.75C10.2044 3.75 8.74902 5.20542 8.74902 7.00077L8.74902 10.7656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
               </g>
            </svg>
         </div>
      </a>
      <div @click="app.bottom_panel=!app.bottom_panel;" class="relative z-50 group w-10 h-8">
         <div x-show="!app.bottom_panel" x-tooltip.right="Toggle Console" class="absolute inset-0 w-full h-full cursor-pointer"></div>
         <div class="flex items-center justify-center w-full h-8 cursor-pointer border-b border-transparent hover:bg-gray-800" :class="{ 'bg-gray-800 border-b-gray-750 border-gray-750' : app.bottom_panel, 'hover:bg-gray-800' : !app.bottom_panel }">
            <svg :class="{ 'text-gray-500 group-hover:text-gray-400' : !app.bottom_panel, 'text-gray-300' : app.bottom_panel }" class="w-5 h-5 stroke-current text-gray-500 group-hover:text-gray-400" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <g fill="none" stroke="none">
                  <path d="M2.75 6.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v10.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3V6.75z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M9 6.75v.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M12 6.75v.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M6 6.75v.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
               </g>
            </svg>
         </div>
      </div>
   </div>
   <div x-show="app.isPage &amp;&amp; !app.fullscreen" class="fixed top-0 left-0 z-30 w-10 h-full bg-gray-900 border-r border-gray-750"></div>
</div>
</div>
</div>
</div>
</div>
<!-- End Right Sidebar -->