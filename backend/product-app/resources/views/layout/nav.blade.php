
<div class="bg-white p-4 border border-b-gray-200">
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <a href="#" class="flex items-center">
                <img src="{{ asset('img/logo.jpeg') }}" class="h-5 ml-9" alt="Flowbite Logo">
            </a>
            <div class="flex space-x-4">
                <!-- Add your top bar links here -->
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex flex-col">
                        <span class="text-sm text-blue-500">Hello, Admin</span>
                        <span class="">{{auth()->user()->name}}</span>
                    </div>
                    <div>
                        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only text-black">Open user menu</span>
                            <span class="w-12 h-12 rounded-full overflow-hidden bg-blue-500 text-gray-100 text-2xl flex justify-center items-center">
                                {{strtoupper(substr(Auth::user()->name, 0,1)) }}
                            </span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="w-1/6 z-50 hidden my-4 text-base list-none bg-white rounded-lg shadow flex justify-center items-center flex-col text-center" id="user-dropdown">
                            <div class="px-4 py-3 flex justify-center items-center flex-col">
                                <span class="w-12 h-12 rounded-full overflow-hidden bg-blue-500 text-gray-100 text-2xl flex justify-center items-center">
                                    {{strtoupper(substr(Auth::user()->name, 0,1)) }}
                                </span>
                                <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->name}}</span>
                                <span class="block text-sm  text-gray-500 truncate ">{{auth()->user()->email}}</span>
                            </div>
                            <hr class="w-full">
                            <div class="w-full hover:bg-gray-200 cursor-pointer w-full">
                                <a href="logout">
                                    <ul class="flex justify-center items-center py-4" aria-labelledby="user-menu-button">
                                        <li class="flex">
                                            <svg class="w-5 h-5" style="color: red;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                                            </svg>
                                            <p class="block px-4 text-sm text-red-500 font-semibold">KELUAR</p>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>