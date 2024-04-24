<body>
<header>
    <div data-test="header-bar" id="header" class="relative z-30 w-full border-b shadow bg-container-lighter border-container-lighter">
        <div class="container flex flex-wrap items-center justify-between w-full py-3 mx-auto mt-0">
            <!--Logo-->
            <div class="order-1 sm:order-2 lg:order-1 w-full pb-2 sm:w-auto sm:pb-0">
                <a class="flex items-center justify-center text-xl font-medium tracking-wide text-gray-800
        no-underline hover:no-underline font-title" href="#" title="" aria-label="store logo">
                    <img
                        src="{{ asset("images/logo.svg") }}"
                        title="" alt="" width="189" height="53">
                </a>
            </div>

            <!--Main Navigation-->
            <div class="z-20 order-2 sm:order-1 lg:order-2 navigation lg:hidden">
                <!-- mobile -->
                <div class="bg-container-lighter">
                    <div class="flex items-baseline justify-between menu-icon">
                        <div class="flex justify-end w-full">
                            <a class="flex items-center justify-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" class="p-3 block" width="48" height="48"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="z-20 order-2 sm:order-1 lg:order-2 navigation hidden lg:flex">
                <!-- desktop -->
                <div class="hidden lg:block lg:relative lg:min-h-0 lg:px-8 lg:w-auto lg:pt-0">
                    <nav class="w-full duration-150 ease-in-out transform flex justify-start w-auto relative min-h-0 transition-display">
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 hover:underline level-0"
                                   href="#" title="What's New">What's New</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 hover:underline level-0"
                                   href="#" title="Women">Women</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 hover:underline level-0"
                                   href="#" title="Men">Men</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 hover:underline level-0"
                                   href="#" title="Gear">Gear</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 hover:underline level-0"
                                   href="#" title="Training">Training</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 hover:underline level-0"
                                   href="#" title="Sale">Sale</a>
                            </span>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="flex items-center order-3">
                <!--My Account Icon-->
                <div class="relative inline-block ml-1 sm:ml-3">
                    <a data-test="header-icon" href="#" id="customer-menu"
                       class="block hover:text-black" aria-label="My Account" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="md:h-6 md:w-6" width="32" height="32" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </a>
                </div>

                <!--Cart Icon-->
                <a
                    data-test="header-icon"
                    id="menu-cart-icon"
                    class="relative inline-block ml-1 no-underline sm:ml-3 hover:text-black"
                    href="#"
                >
                    <span class="sr-only label">Cart</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="w-8 h-8 md:h-6 md:w-6 hover:text-black" width="25" height="25">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
