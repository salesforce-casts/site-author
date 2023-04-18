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
                        <div @click="if(app.addMenu == 'section'){ app.addMenu = '' }else{ app.addMenu = 'section'; }"
                            :class="{
                                'text-gray-100 bg-gray-900 border-transparent': app.addMenu ==
                                    'section',
                                'bg-gray-750 text-gray-400 hover:text-gray-300 border-gray-700': app
                                    .addMenu != 'section'
                            }"
                            class="flex space-x-1 items-center font-semibold border-b py-1.5 px-2 text-[10px] cursor-pointer bg-gray-750 text-gray-400 hover:text-gray-300 border-gray-700">
                            <svg :class="{ 'rotate-90': app.addMenu == 'section' }" class="w-3 h-3" viewBox="0 0 12 12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5 9.5v-7l5 3.5z" fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                            <span>Sections</span>
                        </div>

                        <div x-show="app.addMenu == 'section'" class="relative w-full h-auto overflow-y-scroll"
                            x-collapse.duration.100ms="" style="height: auto;">
                            <div class="w-full">
                                <div dusk="tabs-add-headers"
                                    @click="app.component_drawer=true; app.section='Headers'; app.folder='headers'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 bg-gray-700 text-gray-300"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Headers',
                                        'opacity-75 text-gray-400': app.section != 'Headers'
                                    }">
                                    Headers
                                </div>
                                <div dusk="tabs-add-navigations"
                                    @click="app.component_drawer=true; app.section='Navigations'; app.folder='navigations'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Navigations',
                                        'opacity-75 text-gray-400': app.section != 'Navigations'
                                    }">
                                    Navigations
                                </div>
                                <div dusk="tabs-add-heros"
                                    @click="app.component_drawer=true; app.section='Heros'; app.folder='heros'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Heros',
                                        'opacity-75 text-gray-400': app.section != 'Heros'
                                    }">
                                    Heros
                                </div>
                                <div dusk="tabs-add-coming-soon"
                                    @click="app.component_drawer=true; app.section='Coming Soon'; app.folder='coming-soon'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Coming Soon',
                                        'opacity-75 text-gray-400': app.section != 'Coming Soon'
                                    }">
                                    Coming Soon
                                </div>
                                <div dusk="tabs-add-titles"
                                    @click="app.component_drawer=true; app.section='Titles'; app.folder='titles'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Titles',
                                        'opacity-75 text-gray-400': app.section != 'Titles'
                                    }">
                                    Titles
                                </div>
                                <div dusk="tabs-add-logos"
                                    @click="app.component_drawer=true; app.section='Logos'; app.folder='logos'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Logos',
                                        'opacity-75 text-gray-400': app.section != 'Logos'
                                    }">
                                    Logos
                                </div>
                                <div dusk="tabs-add-content"
                                    @click="app.component_drawer=true; app.section='Content'; app.folder='content'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Content',
                                        'opacity-75 text-gray-400': app.section != 'Content'
                                    }">
                                    Content
                                </div>
                                <div dusk="tabs-add-features"
                                    @click="app.component_drawer=true; app.section='Features'; app.folder='features'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Features',
                                        'opacity-75 text-gray-400': app.section != 'Features'
                                    }">
                                    Features
                                </div>
                                <div dusk="tabs-add-integrations"
                                    @click="app.component_drawer=true; app.section='Integrations'; app.folder='integrations'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Integrations',
                                        'opacity-75 text-gray-400': app.section != 'Integrations'
                                    }">
                                    Integrations
                                </div>
                                <div dusk="tabs-add-teams"
                                    @click="app.component_drawer=true; app.section='Teams'; app.folder='teams'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Teams',
                                        'opacity-75 text-gray-400': app.section != 'Teams'
                                    }">
                                    Teams
                                </div>
                                <div dusk="tabs-add-blog"
                                    @click="app.component_drawer=true; app.section='Blog'; app.folder='blog'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Blog',
                                        'opacity-75 text-gray-400': app.section != 'Blog'
                                    }">
                                    Blog
                                </div>
                                <div dusk="tabs-add-forms"
                                    @click="app.component_drawer=true; app.section='Forms'; app.folder='forms'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Forms',
                                        'opacity-75 text-gray-400': app.section != 'Forms'
                                    }">
                                    Forms
                                </div>
                                <div dusk="tabs-add-call-to-actions"
                                    @click="app.component_drawer=true; app.section='Call To Actions'; app.folder='call-to-actions'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Call To Actions',
                                        'opacity-75 text-gray-400': app.section !=
                                            'Call To Actions'
                                    }">
                                    Call To Actions
                                </div>
                                <div dusk="tabs-add-testimonials"
                                    @click="app.component_drawer=true; app.section='Testimonials'; app.folder='testimonials'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Testimonials',
                                        'opacity-75 text-gray-400': app.section != 'Testimonials'
                                    }">
                                    Testimonials
                                </div>
                                <div dusk="tabs-add-faqs"
                                    @click="app.component_drawer=true; app.section='FAQs'; app.folder='faqs'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'FAQs',
                                        'opacity-75 text-gray-400': app.section != 'FAQs'
                                    }">
                                    FAQs
                                </div>
                                <div dusk="tabs-add-pricing"
                                    @click="app.component_drawer=true; app.section='Pricing'; app.folder='pricing'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Pricing',
                                        'opacity-75 text-gray-400': app.section != 'Pricing'
                                    }">
                                    Pricing
                                </div>
                                <div dusk="tabs-add-footers"
                                    @click="app.component_drawer=true; app.section='Footers'; app.folder='footers'; document.getElementById('component_drawer').scrollTop = 0;"
                                    class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                    :class="{
                                        'bg-gray-700 text-gray-300': app.section ==
                                            'Footers',
                                        'opacity-75 text-gray-400': app.section != 'Footers'
                                    }">
                                    Footers
                                </div>
                            </div>
                        </div>

                        <div @click="if(app.addMenu == 'layout'){ app.addMenu = '' }else{ app.addMenu = 'layout'; }"
                            :class="{
                                'text-gray-100 bg-gray-900 border-transparent': app.addMenu ==
                                    'layout',
                                'bg-gray-750 text-gray-400 hover:text-gray-300 border-gray-700': app
                                    .addMenu != 'layout'
                            }"
                            class="flex space-x-1 items-center font-semibold border-b py-2 px-1.5 text-[10px] cursor-pointer text-gray-100 bg-gray-900 border-transparent">
                            <svg :class="{ 'rotate-90': app.addMenu == 'layout' }" class="w-3 h-3 rotate-90"
                                viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5 9.5v-7l5 3.5z" fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                            <span>Layouts</span>
                        </div>

                        <div x-show="app.addMenu == 'layout'" class="relative w-full h-auto overflow-y-scroll">
                            <div @click="app.layout_drawer=true; app.section='1 Column'; app.folder='01-column'; document.getElementById('layout_drawer').scrollTop = 0;"
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                :class="{
                                    'bg-gray-700 text-gray-300': app.section ==
                                        '1 Column',
                                    'opacity-75 text-gray-400': app.section != '1 Column'
                                }">
                                1 Column
                            </div>
                            <div @click="app.layout_drawer=true; app.section='2 Column'; app.folder='02-column'; document.getElementById('layout_drawer').scrollTop = 0;"
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                :class="{
                                    'bg-gray-700 text-gray-300': app.section ==
                                        '2 Column',
                                    'opacity-75 text-gray-400': app.section != '2 Column'
                                }">
                                2 Column
                            </div>
                            <div @click="app.layout_drawer=true; app.section='3 Column'; app.folder='03-column'; document.getElementById('layout_drawer').scrollTop = 0;"
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                :class="{
                                    'bg-gray-700 text-gray-300': app.section ==
                                        '3 Column',
                                    'opacity-75 text-gray-400': app.section != '3 Column'
                                }">
                                3 Column
                            </div>
                            <div @click="app.layout_drawer=true; app.section='4 Column'; app.folder='04-column'; document.getElementById('layout_drawer').scrollTop = 0;"
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                :class="{
                                    'bg-gray-700 text-gray-300': app.section ==
                                        '4 Column',
                                    'opacity-75 text-gray-400': app.section != '4 Column'
                                }">
                                4 Column
                            </div>
                            <div @click="app.layout_drawer=true; app.section='5 Column'; app.folder='05-column'; document.getElementById('layout_drawer').scrollTop = 0;"
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                :class="{
                                    'bg-gray-700 text-gray-300': app.section ==
                                        '5 Column',
                                    'opacity-75 text-gray-400': app.section != '5 Column'
                                }">
                                5 Column
                            </div>
                            <div @click="app.layout_drawer=true; app.section='Multi-Column'; app.folder='multi-column'; document.getElementById('layout_drawer').scrollTop = 0;"
                                class="self-start block w-full px-6 py-2 text-xs text-gray-400 border-transparent cursor-pointer hover:opacity-100 hover:text-gray-300 hover:bg-gray-700 opacity-75"
                                :class="{
                                    'bg-gray-700 text-gray-300': app.section ==
                                        'Multi-Column',
                                    'opacity-75 text-gray-400': app.section != 'Multi-Column'
                                }">
                                Multi-Column
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
