<div id="secondVerticalContainer" class="flex h-full bg-gray-900 relative">
    <div id="left" class="relative z-20 flex flex-col justify-between transform w-10 h-full bg-gray-900 select-none">
        <div class="flex flex-col h-full justify-between">
            <div class="flex flex-col">
                <div class="flex bg-gray-900 h-10">
                    <!-- Component Sections and Drawers -->
                    <div
                        class="absolute top-0 left-0 z-20 items-stretch justify-center w-auto h-full pb-12 transition duration-200 ease-out transform bg-gray-800 -translate-x-full ml-10 backdrop">
                        <div
                            class="w-full flex items-center relative z-40 bg-gray-800 justify-between px-4 h-10 border-b border-gray-750">
                            <h2 class="text-gray-400 font-medium text-xs leading-none">Designs</h2>
                        </div>

                        {{-- section --}}
                        <div
                            class="flex space-x-1 items-center font-semibold border-b py-1.5 px-2 text-[10px] cursor-pointer bg-gray-750 text-gray-400 hover:text-gray-300 border-gray-700">
                            <svg class="w-3 h-3" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5 9.5v-7l5 3.5z" fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                            <span>Sections</span>
                        </div>

                        {{-- header --}}
                        <div>
                            <div class="w-full">
                                <div dusk="tabs-add-headers"
                                    class="self-start block w-full px-6 py-2 text-xs border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 text-gray-300">
                                    Headers
                                </div>
                                <div dusk="tabs-add-navigations"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75">
                                    Navigations
                                </div>
                            </div>
                        </div>

                        {{-- layout --}}
                        <div
                            class="flex space-x-1 items-center font-semibold border-b py-2 px-1.5 text-[10px] cursor-pointer text-gray-100 bg-gray-900 border-transparent">
                            <svg class="w-3 h-3 rotate-90" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5 9.5v-7l5 3.5z" fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                            <span>Layouts</span>
                        </div>

                        {{-- layout options --}}
                        <div>
                            <div
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75">
                                1 Column
                            </div>
                            <div
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75">
                                2 Column
                            </div>
                        </div>

                        <div class="absolute top-0 left-0 z-20 flex flex-col h-full p-4 pl-8 overflow-x-visible overflow-y-scroll text-base font-bold transform bg-gray-700 w-[39rem] pt-6"
                            id="component_drawer" x-show="app.component_drawer"
                            x-transition:enter="transition-all duration-300 ease-out"
                            x-transition:enter-start="-translate-x-12" x-transition:enter-end="translate-x-0"
                            style="display: none;"></div>

                        {{-- 1 --}}
                        <div x-show="app.section == 'Headers'"
                            class="absolute top-0 left-0 z-30 flex flex-col h-full p-3 pb-10 overflow-x-visible overflow-y-scroll text-base font-bold text-gray-700 transform pl-14 w-[39rem] pt-6"
                            style="display: none;">
                            <div id="headers-slide"
                                :class="{
                                    'opacity-100 translate-x-0': app.section ==
                                        'Headers',
                                    'opacity-50 -translate-x-12': app.section != 'Headers'
                                }"
                                class="absolute z-20 flex flex-col h-auto pb-16 pr-6 ml-40 text-base font-bold text-gray-700 transform rounded-lg w-104 transition-all duration-200 ease-out opacity-50 -translate-x-12"
                                style="display: none;">
                                <div dusk="section-header-01" draggable="true" id="section-header-01" <!-- absolute item
                                    below to force draggable true -->
                                    <div
                                        class="absolute top-0 left-0 z-40 px-2 py-1 mt-2 ml-2 text-xs font-medium text-gray-600 transition-opacity duration-150 ease-out bg-gray-200 rounded-md opacity-0 group-hover:opacity-100">
                                        Header 1
                                    </div>
                                    <div class="absolute top-0 left-0 z-50 w-full h-full opacity-0">Header 1</div>
                                    <img src="https://cdn.devdojo.com/images/tails/headers/header-01.png?auto=compress&amp;w=800"
                                        class="relative w-full h-auto">
                                </div>
                                <div dusk="section-header-02" draggable="true" id="section-header-02"
                                    class="section-header-02 relative z-50 block mb-2 overflow-hidden transition duration-100 transform scale-100 bg-green-200 rounded shadow-xl cursor-move ease group hover:scale-102">
                                    <!-- absolute item below to force draggable true -->
                                    <div
                                        class="absolute top-0 left-0 z-40 px-2 py-1 mt-2 ml-2 text-xs font-medium text-gray-600 transition-opacity duration-150 ease-out bg-gray-200 rounded-md opacity-0 group-hover:opacity-100">
                                        Header 2
                                    </div>
                                    <div class="absolute top-0 left-0 z-50 w-full h-full opacity-0">Header 2</div>
                                    <img src="https://cdn.devdojo.com/images/tails/headers/header-02.png?auto=compress&amp;w=800"
                                        class="relative w-full h-auto">
                                </div>
                                <div dusk="section-header-03" draggable="true" id="section-header-03"
                                    class="section-header-03 relative z-50 block mb-2 overflow-hidden transition duration-100 transform scale-100 bg-green-200 rounded shadow-xl cursor-move ease group hover:scale-102">
                                    <!-- absolute item below to force draggable true -->
                                    <div
                                        class="absolute top-0 left-0 z-40 px-2 py-1 mt-2 ml-2 text-xs font-medium text-gray-600 transition-opacity duration-150 ease-out bg-gray-200 rounded-md opacity-0 group-hover:opacity-100">
                                        Header 3
                                    </div>
                                    <div class="absolute top-0 left-0 z-50 w-full h-full opacity-0">Header 3</div>
                                    <img src="https://cdn.devdojo.com/images/tails/headers/header-03.png?auto=compress&amp;w=800"
                                        class="relative w-full h-auto">
                                </div>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div x-show="app.section == 'Navigations'"
                            class="absolute top-0 left-0 z-30 flex flex-col h-full p-3 pb-10 overflow-x-visible overflow-y-scroll text-base font-bold text-gray-700 transform pl-14 w-[39rem] pt-6"
                            style="display: none;">
                            <div id="navigations-slide"
                                :class="{
                                    'opacity-100 translate-x-0': app.section ==
                                        'Navigations',
                                    'opacity-50 -translate-x-12': app.section != 'Navigations'
                                }"
                                class="absolute z-20 flex flex-col h-auto pb-16 pr-6 ml-40 text-base font-bold text-gray-700 transform rounded-lg w-104 opacity-50 -translate-x-12"
                                x-show="app.section == 'Navigations'"
                                x-transition:enter="transition-all duration-200 ease-out"
                                x-transition:enter-start="-translate-x-12 opacity-50"
                                x-transition:enter-end="translate-x-0 opacity-100" style="display: none;">
                                <div dusk="section-navigation-01" draggable="true" id="section-navigation-01"
                                    x-on:mousedown="if(navigator.userAgent === 'laravel/dusk'){ console.log('hit') }"
                                    x-on:dragstart.self="event.dataTransfer.setData('component', 'components.navigations.navigation-01');"
                                    class="section-navigation-01 relative z-50 block mb-2 overflow-hidden transition duration-100 transform scale-100 bg-green-200 rounded shadow-xl cursor-move ease group hover:scale-102">
                                    <!-- absolute item below to force draggable true -->
                                    <div
                                        class="absolute top-0 left-0 z-40 px-2 py-1 mt-2 ml-2 text-xs font-medium text-gray-600 transition-opacity duration-150 ease-out bg-gray-200 rounded-md opacity-0 group-hover:opacity-100">
                                        Navigation 1
                                    </div>
                                    <div class="absolute top-0 left-0 z-50 w-full h-full opacity-0">Navigation 1</div>
                                    <img src="https://cdn.devdojo.com/images/tails/navigations/navigation-01.png?auto=compress&amp;w=800"
                                        class="relative w-full h-auto">
                                </div>
                                <div dusk="section-navigation-02" draggable="true" id="section-navigation-02"
                                    x-on:mousedown="if(navigator.userAgent === 'laravel/dusk'){ console.log('hit') }"
                                    x-on:dragstart.self="event.dataTransfer.setData('component', 'components.navigations.navigation-02');"
                                    class="section-navigation-02 relative z-50 block mb-2 overflow-hidden transition duration-100 transform scale-100 bg-green-200 rounded shadow-xl cursor-move ease group hover:scale-102">
                                    <!-- absolute item below to force draggable true -->
                                    <div
                                        class="absolute top-0 left-0 z-40 px-2 py-1 mt-2 ml-2 text-xs font-medium text-gray-600 transition-opacity duration-150 ease-out bg-gray-200 rounded-md opacity-0 group-hover:opacity-100">
                                        Navigation 2
                                    </div>
                                    <div class="absolute top-0 left-0 z-50 w-full h-full opacity-0">Navigation 2</div>
                                    <img src="https://cdn.devdojo.com/images/tails/navigations/navigation-02.png?auto=compress&amp;w=800"
                                        class="relative w-full h-auto">
                                </div>
                                <div dusk="section-navigation-03" draggable="true" id="section-navigation-03"
                                    x-on:mousedown="if(navigator.userAgent === 'laravel/dusk'){ console.log('hit') }"
                                    x-on:dragstart.self="event.dataTransfer.setData('component', 'components.navigations.navigation-03');"
                                    class="section-navigation-03 relative z-50 block mb-2 overflow-hidden transition duration-100 transform scale-100 bg-green-200 rounded shadow-xl cursor-move ease group hover:scale-102">
                                    <!-- absolute item below to force draggable true -->
                                    <div
                                        class="absolute top-0 left-0 z-40 px-2 py-1 mt-2 ml-2 text-xs font-medium text-gray-600 transition-opacity duration-150 ease-out bg-gray-200 rounded-md opacity-0 group-hover:opacity-100">
                                        Navigation 3
                                    </div>
                                    <div class="absolute top-0 left-0 z-50 w-full h-full opacity-0">Navigation 3</div>
                                    <img src="https://cdn.devdojo.com/images/tails/navigations/navigation-03.png?auto=compress&amp;w=800"
                                        class="relative w-full h-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function callbackCustom() {
        console.log('AM HERE');
        document.querySelector('.backdrop').classList.add("translate-x-0");
        document.querySelectorAll('.headers')[0].classList.remove("hidden");
        document.querySelectorAll('.headers')[1].classList.remove("hidden");
    }
</script>
