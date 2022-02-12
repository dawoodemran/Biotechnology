<div class="relative sm:overflow-hidden bg-gradient-to-r from-purple-800 via-pink-800 to-purple-800">
    <div class="relative pt-6 pb-6">
        <div class="max-w-7xl mx-auto px-6 md:px-0">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                        <a href="{{ $page->baseUrl }}/">
                            <div class="mx-auto text-gray-400">
                                <img class="w-auto h-10 rounded-lg" src="{{$page->baseUrl }}/assets/images/biologo.png"
                                    alt="">
                            </div>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden" onclick="myFunction()">
                            <button type="button"
                                class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                id="nav-btn">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                    <div class="hidden md:flex md:space-x-10 uppercase">
                        <a href="{{ $page->baseUrl }}/about"
                            class="font-medium text-transparent bg-clip-text bg-gradient-to-br from-amber-400 to-purple-500 hover:text-gray-200">Team</a>

                        <a href="{{ $page->baseUrl }}/home"
                            class="font-medium text-transparent bg-clip-text bg-gradient-to-br from-amber-400 to-purple-500 hover:text-gray-200">About</a>

                        <a href="{{ $page->baseUrl }}/contact"
                            class="font-medium text-transparent bg-clip-text bg-gradient-to-br from-amber-400 to-purple-500 hover:text-gray-200">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden" id="nav-sm">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <p class="text-green-800 "><b>NAWLIST</b></p>
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            id="navSmBtn">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3">
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>

                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Faq</a>

                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contact</a>

                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">En</a>
                </div>

            </div>
        </div>
    </div>
</div>