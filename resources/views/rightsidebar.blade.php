<!-- Right Sidebar -->
    <div class="w-64 h-screen flex-shrink-0"></div>
    <div id="right" class="absolute right-0 z-20 flex border-l border-gray-750 flex-col w-64 flex-shrink-0 h-screen bg-gray-800 select-none text-white">
        <div class="h-10 flex-shrink-0 bg-gray-800 flex items-center border-b border-gray-800">
            <div class="h-full text-sm w-full border-b flex items-center cursor-pointer text-xs justify-center bg-gray-800 text-gray-100 border-transparent">
                Design
            </div>
            <div class="h-full text-sm w-full flex items-center border-b text-xs cursor-pointer justify-center bg-gray-900 border-gray-750 hover:text-gray-100 text-gray-400">
                History
            </div>
        </div>
        <div class="h-full w-auto relative">
            <div id="imageSelector" class="absolute media-selector z-20 top-0 right-0 pr-3 mt-32 -translate-y-1" style="display: none;">
            <div class="w-full h-full">
                <div class="w-full rounded-lg bg-gray-700 text-white w-full media-selector h-full border-gray-700 shadow-xl media-selector" style="width:427px; height:200px;">
                    <div class="h-auto flex border-b border-gray-600 items-center justify-between p-1.5 tab-top">
                        <div class="flex text-gray-300 font-medium space-x-2 tabs">
                            <div class="relative hover:bg-gray-750 px-2.5 py-2 rounded-md cursor-pointer flex items-center justify-center leading-none text-xs">
                                <span>Upload Image</span>
                                <div class="absolute bottom-0 translate-y-1.5 w-full h-0.5 bg-blue-500"></div>
                            </div>
                            <div class="relative hover:bg-gray-750 px-2.5 py-2 rounded-md cursor-pointer flex items-center justify-center leading-none text-xs">
                                <span>Link</span>
                                <div class="absolute bottom-0 translate-y-1.5 w-full h-0.5 bg-blue-500" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 flex items-center justify-center h-auto w-full relative">
                        <div class="px-2 py-3 space-y-2 w-full flex items-center justify-center flex-col">
                            <div class="w-full text-center h-full relative">
                                <label class="bg-blue-500 block text-white rounded font-medium text-sm cursor-pointer mb-2 w-full max-w-full hover:bg-blue-400 px-3 py-2 text-center">
                                <span class="text-white">Choose an image</span>
                                <input type="file" wire:model="imageUpload" class="hidden h-full w-full">
                                </label>
                                <p class="text-gray-400 text-xs">Select an image to upload. Max upload 1MB</p>
                                <p class="text-blue-400 mt-2 font-medium underline cursor-pointer text-xs">Upgrade to Pro to upload more than 1MB</p>
                            </div>
                            <!-- Progress Bar -->
                            <div class="w-full text-center" style="display: none;">
                                <div class="h-2 w-full bg-gray-600 relative rounded-full overflow-hidden">
                                    <div class="absolute h-full bg-blue-600" :style="`width: ${progress}%`" style="width: 0%"></div>
                                </div>
                                <p class="text-gray-400 text-xs mt-2">Uploading Image (<span>0</span>%)</p>
                            </div>
                            <div  class="p-4 text-center" style="display: none;">
                                <svg class="h-6 w-6 text-gray-400 animate-pulse mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" stroke="none">
                                        <path d="M4.25 15.25C2.96461 14.2882 2.75 13.1762 2.75 12C2.75 9.94957 4.20204 8.23828 6.13392 7.83831C7.01365 5.45184 9.30808 3.75 12 3.75C15.3711 3.75 18.1189 6.41898 18.2454 9.75913C19.9257 9.8846 21.25 11.2876 21.25 13C21.25 14.0407 20.5 15 19.75 15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M13.5005 11.1779C13.7529 10.0496 12.4886 9.27991 11.7569 10.1164L8.0388 14.3672C7.40728 15.0892 7.87136 16.2934 8.78113 16.2934L11.0889 16.2934L10.5182 18.8494C10.266 19.9792 11.5334 20.7479 12.2639 19.9082L15.9602 15.6591C16.589 14.9363 16.1243 13.7352 15.2159 13.7352L12.9285 13.7352L13.5005 11.1779Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <p class="text-gray-400 text-xs mt-1 font-medium">Finishing Upload</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-1 flex items-center justify-center h-auto w-full relative" style="display: none;">
                        <div class="px-2 py-3 space-y-2 w-full flex items-center justify-center flex-col">
                            <input type="text" class="w-full h-auto bg-gray-700" placeholder="Paste an image link...">
                            <div class="bg-blue-500 text-white rounded font-medium text-sm cursor-pointer mb-3 mt-2 w-full max-w-md hover:bg-blue-400 px-3 h-8 flex items-center justify-center text-center">
                                <span style="display: none;">
                                    <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </span>
                                <span>Submit</span>
                            </div>
                            <p class="text-gray-400 text-xs">Works with any image from the web.</p>
                        </div>
                    </div>
                </div>
                <script>
                    window.addEventListener('imageFinishedUploading', event => {
                        console.log(event.detail.url);
                    });
                    
                </script>
            </div>
            <!-- Livewire Component wire-end:kQTVVnabcStbFSOPkMbP -->        
        </div>
        <template>
            <div class="space-y-0 divide-y divide-gray-800 overflow-scroll h-full pb-24">
                <div class="flex flex-col items-center justify-center text-xs pt-3">
                    <p><span class="bg-blue-600 text-white px-1.5 py-0.5 rounded font-medium mr-1" x-text="app.getSelectedElementTag()"></span> element selected</p>
                    <div class="mt-3 h-8 h-full w-full flex divide-x text-xs divide-gray-750 items-center justify-center border-t border-gray-750">
                        <span class="pr-3 h-full flex w-1/2 items-center justify-center"><span x-text="app.pageWidth"></span>px</span>
                        <span class="font-bold  h-full w-1/2 flex items-center justify-center" x-text="app.pageSize"></span>
                    </div>
                </div>
                <template x-for="panel in app.getSelectedElementPanels()" :key="panel.id">
                    <div class="w-full panel relative">
                        <template x-if="!panel.collapsible">
                            <div x-data="{ visible: true }" x-show="visible" :id="panel.id + '-panel'" @hide="visible=false" @showme="visible=true" :class="{ 'border-t border-gray-750': !panel.collapsible }" class="p-3 text-xs bg-gray-800" x-cloak="">
                                <div class="relative w-full">
                                    <div x-html="panel.html"></div>
                                </div>
                            </div>
                        </template>
                        <template x-if="panel.collapsible">
                            <div x-data="{ panelOpen: $persist(panel.openByDefault).as('tails-panel-' + panel.id), visible: true }" x-init="$watch('panelOpen', value => panel.toggled(value));" x-show="visible" :id="panel.id + '-panel'" @hide="visible=false" @showme="visible=true" class="w-full relative rounded-sm" x-cloak="">
                                <div x-on:click="panelOpen=!panelOpen" class="h-auto text-xs font-semibold  px-2 border-b border-gray-800 py-2 flex cursor-pointer justify-start group items-center bg-gray-900">
                                    <svg :class="{ 'rotate-90': panelOpen }" class="fill-current w-4 h-4 -ml-0.5 mr-0.5 text-gray-600 group-hover:text-gray-500 transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <h5 class="text-gray-400 group-hover:text-gray-300" x-text="panel.title"></h5>
                                </div>
                                <div x-show="panelOpen" class="p-3 text-xs bg-gray-800" x-collapse.duration.100ms="" x-cloak="">
                                    <div x-html="panel.html"></div>
                                </div>
                            </div>
                        </template>
                    </div>
                </template>
                <template x-for="section in tailwind.utilities">
                    <div x-init="
                        setTimeout(function(){
                        tippy('.tippy-left', { theme: 'dark', placement: 'left' });
                        }, 10)" x-data="{ 
                        panelOpen: $persist(false).as('tails-panel-utility-' + section.title), 
                        showMore:false, 
                        visible: true 
                        }" x-show="visible" @hide="visible=false" @showme="visible=true" class="w-full relative rounded-sm" x-cloak="">
                        <div x-on:click="panelOpen=!panelOpen" class="h-auto text-xs font-semibold  px-2 border-b border-gray-800 py-2 flex cursor-pointer justify-start group items-center bg-gray-900">
                            <svg :class="{ 'rotate-90': panelOpen }" class="fill-current w-4 h-4 -ml-0.5 mr-0.5 text-gray-600 group-hover:text-gray-500 transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <h5 class="text-gray-400 group-hover:text-gray-300" x-text="section.title">
                            </h5>
                        </div>
                        <div x-show="panelOpen" class="p-0 text-xs bg-gray-800" x-collapse.duration.100ms="" x-cloak="">
                            <div x-show="section.visible.length != 0" class="relative w-full py-1">
                                <template x-for="(sectionData, index) in section.properties">
                                    <div x-data="{ property: section.getProperty(index) }" class="flex items-center">
                                        <template x-if="section.visible.includes( property.slug )">
                                            <div class="relative flex items-center w-full px-0.5 space-x-0.5 space-y-0.5">
                                                <p @click="app.tailwind_iframe=true;app.tailwind_iframe_src=property.docs" :data-tippy-content="'View ' + property.title + ' Docs'" class="tippy-left text-[0.55rem] hover:bg-gray-700 text-gray-300 hover:underline cursor-pointer hover:text-gray-300 font-medium w-28 flex-shrink-0 pl-2.5 pr-1.5 h-6 rounded flex items-center flex-shrink-0">
                                                    <span x-text="property.title" class="truncate"></span>
                                                </p>
                                                <div x-data="{ dropdown: false, items: [] }" x-init="
                                                    $watch('dropdown', function(value){
                                                    if(!$data.items.length){
                                                    $data.items = property.data;
                                                    }
                                                    tailwind.utilityClassDropdown(value, property);
                                                    })" "="" class="flex flex-col w-full relative text-[0.6rem]">
                                                    <div x-on:click="dropdown=!dropdown;" "="" :class="{ 'bg-gray-800 hover:bg-gray-750 rounded': (!dropdown &amp;&amp; !tailwind.isPropertySet(property.computed)), 'bg-gray-750 rounded-t': dropdown, 'bg-gray-700 rounded': (tailwind.isPropertySet(property.computed) &amp;&amp; !dropdown) }" class="py-0 h-6 cursor-pointer w-full items-center justify-between px-2 flex text-gray-300">
                                                        <span x-text="tailwind.getComputedPropertyClass(property.computed)"></span>
                                                        <svg class="fill-current w-2 h-2 text-gray-600" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.4 17.8 20.4.877H.4l10 16.923Z"></path>
                                                        </svg>
                                                    </div>
                                                    <div x-show="dropdown" x-on:click.outside="dropdown=false;" class="flex absolute w-full top-0 mt-6 bg-gray-750 z-50 rounded-b max-h-[7.8rem] border border-gray-700 border-t-0 overflow-scroll left-0 flex-col">
                                                        <template x-for="item in items">
                                                            <div :class="{ 'bg-gray-700' : (tailwind.getComputedPropertyClass(property.computed) == item.class), 'hover:bg-gray-700': (tailwind.getComputedPropertyClass(property.computed) != item.class) }" @mouseover="tailwind.previewClass(item.class, property)" @click="tailwind.selectClass(item.class, property); dropdown=false;" class="relative px-2 h-7 flex items-center border-b border-gray-750 hover:text-white text-gray-300 cursor-pointer py-1 justify-start">
                                                                <span x-text="item.class"></span>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                                <div class="relative">
                                                    <div x-show="section.visible.includes(property.slug)" @click="section.visible.splice(section.visible.indexOf(property.slug), 1)" class="h-6 w-6 rounded flex items-center justify-center bg-gray-800 rounded-r hover:bg-gray-750 cursor-pointer text-gray-400 hover:text-red-400 border-gray-700 hover:bg-gray-750 flex-shrink-0">
                                                        <svg class="w-3 h-3 fill-current" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m60.656 80.213 1.28-17.826 26.562-26.565 8.405-.604c3.367-.9 4.104-3.656 1.641-6.121L70.908 1.459C68.44-1.01 65.689-.27 64.787 3.098l-.603 8.41-26.561 26.557L19.79 39.35c-4.285 1.145-5.224 4.65-2.085 7.79l14.793 14.796L5.693 88.822 0 100.004l11.186-5.693 26.885-26.804c1.066 1.062 14.793 14.795 14.793 14.795 3.138 3.139 6.643 2.195 7.792-2.09v.001Z"></path>
                                                        </svg>
                                                    </div>
                                                    <div x-show="!(section.visible.includes(property.slug))" @click="section.visible.push(property.slug)" class="h-6 w-6 rounded flex items-center justify-center bg-gray-800 rounded-r hover:bg-gray-750 cursor-pointer text-gray-400 hover:text-green-400 border-gray-700 hover:bg-gray-750 flex-shrink-0">
                                                        <svg class="w-3 h-3 stroke-current" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.71391 94.2909L7.74174 90.3081L34.2694 63.7009L36.0319 61.9332L34.2668 60.168L26.4713 52.3715L21.6355 47.5349L20.0656 45.9648L19.628 45.5272L19.513 45.4122L19.4836 45.3827L19.4761 45.3752L19.4742 45.3734L19.4739 45.373C18.282 44.1806 18.312 43.395 18.3794 43.1434C18.4435 42.904 18.7793 42.2606 20.225 41.8251L37.8022 40.5586L38.7314 40.4916L39.3902 39.8329L65.9517 13.275L66.611 12.6158L66.6776 11.6858L67.2614 3.54035C67.4023 3.09852 67.5674 2.82994 67.6916 2.68207C67.8218 2.52696 67.9012 2.50684 67.9079 2.50513L67.9082 2.50504L67.9085 2.50495C67.9151 2.50308 67.9935 2.48082 68.1834 2.54982C68.391 2.62529 68.725 2.81125 69.1398 3.22618L69.14 3.22638L96.7756 30.8638C97.1889 31.2775 97.3745 31.6113 97.45 31.8194C97.5192 32.0101 97.497 32.0896 97.4949 32.0972L97.4948 32.0976L97.4947 32.098C97.4928 32.1055 97.4725 32.1848 97.3181 32.3144C97.1709 32.4381 96.9029 32.603 96.4613 32.7433L88.3188 33.3286L87.3892 33.3954L86.7302 34.0545L60.1687 60.6196L59.5098 61.2786L59.443 62.2081L58.1807 79.7782C57.7434 81.2242 57.099 81.5621 56.8579 81.6268C56.6064 81.6943 55.8225 81.725 54.6324 80.5344L52.8642 82.3018C54.6324 80.5344 54.6323 80.5343 54.6322 80.5342L54.6317 80.5337L54.6299 80.5319L54.6224 80.5244L54.5929 80.4949L54.4779 80.3799L54.0404 79.9422L52.4707 78.3719L47.6353 73.535C44.072 69.9708 40.3706 66.2691 39.8352 65.7358L38.0701 63.9776L36.3058 65.7366L9.70065 92.2623L5.71391 94.2909Z" stroke-width="5"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
                            <div x-show="section.visible.length == 0" class="relative w-full py-2">
                                <p class="px-3 text-[0.6rem] text-gray-500 text-left flex items-center">
                                    <svg class="w-2.5 h-2.5 mr-1.5 stroke-current" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.71391 94.2909L7.74174 90.3081L34.2694 63.7009L36.0319 61.9332L34.2668 60.168L26.4713 52.3715L21.6355 47.5349L20.0656 45.9648L19.628 45.5272L19.513 45.4122L19.4836 45.3827L19.4761 45.3752L19.4742 45.3734L19.4739 45.373C18.282 44.1806 18.312 43.395 18.3794 43.1434C18.4435 42.904 18.7793 42.2606 20.225 41.8251L37.8022 40.5586L38.7314 40.4916L39.3902 39.8329L65.9517 13.275L66.611 12.6158L66.6776 11.6858L67.2614 3.54035C67.4023 3.09852 67.5674 2.82994 67.6916 2.68207C67.8218 2.52696 67.9012 2.50684 67.9079 2.50513L67.9082 2.50504L67.9085 2.50495C67.9151 2.50308 67.9935 2.48082 68.1834 2.54982C68.391 2.62529 68.725 2.81125 69.1398 3.22618L69.14 3.22638L96.7756 30.8638C97.1889 31.2775 97.3745 31.6113 97.45 31.8194C97.5192 32.0101 97.497 32.0896 97.4949 32.0972L97.4948 32.0976L97.4947 32.098C97.4928 32.1055 97.4725 32.1848 97.3181 32.3144C97.1709 32.4381 96.9029 32.603 96.4613 32.7433L88.3188 33.3286L87.3892 33.3954L86.7302 34.0545L60.1687 60.6196L59.5098 61.2786L59.443 62.2081L58.1807 79.7782C57.7434 81.2242 57.099 81.5621 56.8579 81.6268C56.6064 81.6943 55.8225 81.725 54.6324 80.5344L52.8642 82.3018C54.6324 80.5344 54.6323 80.5343 54.6322 80.5342L54.6317 80.5337L54.6299 80.5319L54.6224 80.5244L54.5929 80.4949L54.4779 80.3799L54.0404 79.9422L52.4707 78.3719L47.6353 73.535C44.072 69.9708 40.3706 66.2691 39.8352 65.7358L38.0701 63.9776L36.3058 65.7366L9.70065 92.2623L5.71391 94.2909Z" stroke-width="5"></path>
                                    </svg>
                                    <span>No properties are pinned by default</span>
                                </p>
                            </div>
                            <div x-on:click="showMore=!showMore" :class="{ 'bg-gray-750 text-gray-400': showMore, 'hover:bg-gray-750 hover:text-gray-400 text-gray-500': !showMore }" class="w-full h-7 border-t border-b cursor-pointer border-gray-750 flex items-center text-[0.65rem] px-3">
                                <svg :class="{ 'rotate-90': showMore }" class="fill-current w-3 h-3 -ml-0.5 mr-0.5 transform" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span>View All <span x-text="section.title"></span> Properties</span>
                            </div>
                            <div x-show="showMore &amp;&amp; (section.properties.length != section.visible.length)" class="relative w-full py-1" x-cloak="">
                                <template x-for="(sectionData, index) in section.properties">
                                    <div x-data="{ property: section.getProperty(index) }" class="flex items-center">
                                        <template x-if="!section.visible.includes(property.slug)">
                                            <div class="w-full relative">
                                                <div class="relative flex items-center w-full px-0.5 space-x-0.5 space-y-0.5">
                                                    <p @click="app.tailwind_iframe=true;app.tailwind_iframe_src=property.docs" :data-tippy-content="'View ' + property.title + ' Docs'" class="tippy-left text-[0.55rem] hover:bg-gray-700 text-gray-300 hover:underline cursor-pointer hover:text-gray-300 font-medium w-28 flex-shrink-0 pl-2.5 pr-1.5 h-6 rounded flex items-center flex-shrink-0">
                                                        <span x-text="property.title" class="truncate"></span>
                                                    </p>
                                                    <div x-data="{ dropdown: false, items: [] }" x-init="
                                                        $watch('dropdown', function(value){
                                                        if(!$data.items.length){
                                                        $data.items = property.data;
                                                        }
                                                        tailwind.utilityClassDropdown(value, property);
                                                        })" "="" class="flex flex-col w-full relative text-[0.6rem]">
                                                        <div x-on:click="dropdown=!dropdown;" "="" :class="{ 'bg-gray-800 hover:bg-gray-750 rounded': (!dropdown &amp;&amp; !tailwind.isPropertySet(property.computed)), 'bg-gray-750 rounded-t': dropdown, 'bg-gray-700 rounded': (tailwind.isPropertySet(property.computed) &amp;&amp; !dropdown) }" class="py-0 h-6 cursor-pointer w-full items-center justify-between px-2 flex text-gray-300">
                                                            <span x-text="tailwind.getComputedPropertyClass(property.computed)"></span>
                                                            <svg class="fill-current w-2 h-2 text-gray-600" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.4 17.8 20.4.877H.4l10 16.923Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div x-show="dropdown" x-on:click.outside="dropdown=false;" class="flex absolute w-full top-0 mt-6 bg-gray-750 z-50 rounded-b max-h-[7.8rem] border border-gray-700 border-t-0 overflow-scroll left-0 flex-col">
                                                            <template x-for="item in items">
                                                                <div :class="{ 'bg-gray-700' : (tailwind.getComputedPropertyClass(property.computed) == item.class), 'hover:bg-gray-700': (tailwind.getComputedPropertyClass(property.computed) != item.class) }" @mouseover="tailwind.previewClass(item.class, property)" @click="tailwind.selectClass(item.class, property); dropdown=false;" class="relative px-2 h-7 flex items-center border-b border-gray-750 hover:text-white text-gray-300 cursor-pointer py-1 justify-start">
                                                                    <span x-text="item.class"></span>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                    <div class="relative">
                                                        <div x-show="section.visible.includes(property.slug)" @click="section.visible.splice(section.visible.indexOf(property.slug), 1)" class="h-6 w-6 rounded flex items-center justify-center bg-gray-800 rounded-r hover:bg-gray-750 cursor-pointer text-gray-400 hover:text-red-400 border-gray-700 hover:bg-gray-750 flex-shrink-0">
                                                            <svg class="w-3 h-3 fill-current" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="m60.656 80.213 1.28-17.826 26.562-26.565 8.405-.604c3.367-.9 4.104-3.656 1.641-6.121L70.908 1.459C68.44-1.01 65.689-.27 64.787 3.098l-.603 8.41-26.561 26.557L19.79 39.35c-4.285 1.145-5.224 4.65-2.085 7.79l14.793 14.796L5.693 88.822 0 100.004l11.186-5.693 26.885-26.804c1.066 1.062 14.793 14.795 14.793 14.795 3.138 3.139 6.643 2.195 7.792-2.09v.001Z"></path>
                                                            </svg>
                                                        </div>
                                                        <div x-show="!(section.visible.includes(property.slug))" @click="section.visible.push(property.slug)" class="h-6 w-6 rounded flex items-center justify-center bg-gray-800 rounded-r hover:bg-gray-750 cursor-pointer text-gray-400 hover:text-green-400 border-gray-700 hover:bg-gray-750 flex-shrink-0">
                                                            <svg class="w-3 h-3 stroke-current" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.71391 94.2909L7.74174 90.3081L34.2694 63.7009L36.0319 61.9332L34.2668 60.168L26.4713 52.3715L21.6355 47.5349L20.0656 45.9648L19.628 45.5272L19.513 45.4122L19.4836 45.3827L19.4761 45.3752L19.4742 45.3734L19.4739 45.373C18.282 44.1806 18.312 43.395 18.3794 43.1434C18.4435 42.904 18.7793 42.2606 20.225 41.8251L37.8022 40.5586L38.7314 40.4916L39.3902 39.8329L65.9517 13.275L66.611 12.6158L66.6776 11.6858L67.2614 3.54035C67.4023 3.09852 67.5674 2.82994 67.6916 2.68207C67.8218 2.52696 67.9012 2.50684 67.9079 2.50513L67.9082 2.50504L67.9085 2.50495C67.9151 2.50308 67.9935 2.48082 68.1834 2.54982C68.391 2.62529 68.725 2.81125 69.1398 3.22618L69.14 3.22638L96.7756 30.8638C97.1889 31.2775 97.3745 31.6113 97.45 31.8194C97.5192 32.0101 97.497 32.0896 97.4949 32.0972L97.4948 32.0976L97.4947 32.098C97.4928 32.1055 97.4725 32.1848 97.3181 32.3144C97.1709 32.4381 96.9029 32.603 96.4613 32.7433L88.3188 33.3286L87.3892 33.3954L86.7302 34.0545L60.1687 60.6196L59.5098 61.2786L59.443 62.2081L58.1807 79.7782C57.7434 81.2242 57.099 81.5621 56.8579 81.6268C56.6064 81.6943 55.8225 81.725 54.6324 80.5344L52.8642 82.3018C54.6324 80.5344 54.6323 80.5343 54.6322 80.5342L54.6317 80.5337L54.6299 80.5319L54.6224 80.5244L54.5929 80.4949L54.4779 80.3799L54.0404 79.9422L52.4707 78.3719L47.6353 73.535C44.072 69.9708 40.3706 66.2691 39.8352 65.7358L38.0701 63.9776L36.3058 65.7366L9.70065 92.2623L5.71391 94.2909Z" stroke-width="5"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                            </div>
                            <div x-show="showMore &amp;&amp; (section.properties.length == section.visible.length)" class="relative w-full py-2" x-cloak="">
                                <p class="px-3 text-[0.6rem] text-gray-500 text-left flex items-center">
                                    <svg class="w-2.5 mr-1.5 h-2.5 fill-current" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m60.656 80.213 1.28-17.826 26.562-26.565 8.405-.604c3.367-.9 4.104-3.656 1.641-6.121L70.908 1.459C68.44-1.01 65.689-.27 64.787 3.098l-.603 8.41-26.561 26.557L19.79 39.35c-4.285 1.145-5.224 4.65-2.085 7.79l14.793 14.796L5.693 88.822 0 100.004l11.186-5.693 26.885-26.804c1.066 1.062 14.793 14.795 14.793 14.795 3.138 3.139 6.643 2.195 7.792-2.09v.001Z"></path>
                                    </svg>
                                    <span>All properties are currently pinned</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </template>
        <template x-if="!app.data.selectedElement &amp;&amp; app.showRightEmptyState">
            <div class="flex flex-col border-b border-gray-750">
                <div class="p-4 text-center">
                    <div class="bg-gray-900 text-gray-400 border-0 border-gray-700 w-full flex flex-col items-center rounded-md justify-center py-6 px-5">
                        <svg class="w-7 h-7 fill-current" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50 65.626a3.125 3.125 0 1 1-6.25 0 3.125 3.125 0 0 1 6.25 0Zm41.513-10.068s.006 0 .006.002a1.56 1.56 0 0 0-1.04 1.472c0 .415.167.787.431 1.067l3.572 3.572a8.228 8.228 0 0 1 0 11.636 8.213 8.213 0 0 1-2.469 1.685l-5.545 2.334a2.337 2.337 0 0 0-1.112 2.898c.043.114.075.203.096.27l1.773 4.282c2.313 5.58-.337 11.978-5.919 14.29-5.58 2.311-11.978-.34-14.29-5.92l-1.663-4.016c-.003-.003-.01.01-.012.005a2.746 2.746 0 0 0-2.512-1.634c-.367 0-.714.084-1.036.215l-5.27 2.22h-.01a9.253 9.253 0 0 1-12.763-8.563v-3.247a3.125 3.125 0 0 1 6.25 0v3.125c0 1.726 1.399 3.125 3.125 3.125.383 0 .746-.083 1.085-.208l5.204-2.188c.054-.021.096-.024.153-.049 4.492-1.875 9.654.245 11.53 4.737 0 .003.002.006.004.009l1.689 4.077a4.687 4.687 0 1 0 8.66-3.587l-1.829-4.418c-1.787-4.284.165-9.188 4.37-11.105l5.663-2.383c.004 0-.005-.003 0-.003a1.525 1.525 0 0 0 .54-2.5l-7.35-7.35a5.506 5.506 0 0 1-1.595-3.877A5.53 5.53 0 0 1 86.779 50h.721a6.25 6.25 0 0 0 6.25-6.25V12.5a6.25 6.25 0 0 0-6.25-6.25h-75a6.25 6.25 0 0 0-6.25 6.25v31.25A6.25 6.25 0 0 0 12.5 50h28.125c1.726 0 3.125-1.4 3.125-3.125V32.263a8.826 8.826 0 0 1 15.079-6.228c.029.028.027.012.049.03l16.665 16.666a3.31 3.31 0 0 1 1.02 2.386 3.32 3.32 0 0 1-3.32 3.32 3.309 3.309 0 0 1-2.387-1.019L53.789 30.353c-.008-.006 0 .017-.012.003A2.197 2.197 0 0 0 50 31.885v16.552a7.812 7.812 0 0 1-7.813 7.814H12.5C5.597 56.25 0 50.653 0 43.75V12.5C0 5.597 5.597 0 12.5 0h75C94.403 0 100 5.597 100 12.5v31.25c0 5.495-3.558 10.134-8.487 11.808Z" fill-rule="nonzero"></path>
                        </svg>
                        <p class="text-xs mt-4">Select an element to activate this panel.</p>
                    </div>
                </div>
                <div class="mt-3 h-8 h-full w-full flex divide-x text-xs divide-gray-750 items-center justify-center border-t border-gray-750">
                    <span class="pr-3 h-full flex w-1/2 items-center justify-center"><span x-text="app.pageWidth"></span>px</span>
                    <span class="font-bold  h-full w-1/2 flex items-center justify-center" x-text="app.pageSize"></span>
                </div>
            </div>
        </template>
        <div class="flex flex-col border-b border-gray-750">
            <div class="p-4 text-center">
                <div class="bg-gray-900 text-gray-400 border-0 border-gray-700 w-full flex flex-col items-center rounded-md justify-center py-6 px-5">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <path d="M50 65.626a3.125 3.125 0 1 1-6.25 0 3.125 3.125 0 0 1 6.25 0Zm41.513-10.068s.006 0 .006.002a1.56 1.56 0 0 0-1.04 1.472c0 .415.167.787.431 1.067l3.572 3.572a8.228 8.228 0 0 1 0 11.636 8.213 8.213 0 0 1-2.469 1.685l-5.545 2.334a2.337 2.337 0 0 0-1.112 2.898c.043.114.075.203.096.27l1.773 4.282c2.313 5.58-.337 11.978-5.919 14.29-5.58 2.311-11.978-.34-14.29-5.92l-1.663-4.016c-.003-.003-.01.01-.012.005a2.746 2.746 0 0 0-2.512-1.634c-.367 0-.714.084-1.036.215l-5.27 2.22h-.01a9.253 9.253 0 0 1-12.763-8.563v-3.247a3.125 3.125 0 0 1 6.25 0v3.125c0 1.726 1.399 3.125 3.125 3.125.383 0 .746-.083 1.085-.208l5.204-2.188c.054-.021.096-.024.153-.049 4.492-1.875 9.654.245 11.53 4.737 0 .003.002.006.004.009l1.689 4.077a4.687 4.687 0 1 0 8.66-3.587l-1.829-4.418c-1.787-4.284.165-9.188 4.37-11.105l5.663-2.383c.004 0-.005-.003 0-.003a1.525 1.525 0 0 0 .54-2.5l-7.35-7.35a5.506 5.506 0 0 1-1.595-3.877A5.53 5.53 0 0 1 86.779 50h.721a6.25 6.25 0 0 0 6.25-6.25V12.5a6.25 6.25 0 0 0-6.25-6.25h-75a6.25 6.25 0 0 0-6.25 6.25v31.25A6.25 6.25 0 0 0 12.5 50h28.125c1.726 0 3.125-1.4 3.125-3.125V32.263a8.826 8.826 0 0 1 15.079-6.228c.029.028.027.012.049.03l16.665 16.666a3.31 3.31 0 0 1 1.02 2.386 3.32 3.32 0 0 1-3.32 3.32 3.309 3.309 0 0 1-2.387-1.019L53.789 30.353c-.008-.006 0 .017-.012.003A2.197 2.197 0 0 0 50 31.885v16.552a7.812 7.812 0 0 1-7.813 7.814H12.5C5.597 56.25 0 50.653 0 43.75V12.5C0 5.597 5.597 0 12.5 0h75C94.403 0 100 5.597 100 12.5v31.25c0 5.495-3.558 10.134-8.487 11.808Z" fill-rule="nonzero"></path>
                    </svg>
                    <p class="text-xs mt-4">Select an element to activate this panel.</p>
                </div>
            </div>
            <div class="mt-3 h-8 h-full w-full flex divide-x text-xs divide-gray-750 items-center justify-center border-t border-gray-750">
                <span class="pr-3 h-full flex w-1/2 items-center justify-center"><span x-text="app.pageWidth">1384</span>px</span>
                <span class="font-bold  h-full w-1/2 flex items-center justify-center" x-text="app.pageSize">xl</span>
            </div>
        </div>
    </div>
</div>
<!-- End Right Sidebar -->
