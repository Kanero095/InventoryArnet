<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-[#410825] dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                {{-- logo --}}
                <a href="/home" class="flex ms-2 md:me-24">
                    <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap dark:text-white">Inventory
                        Arnet</span>
                </a>
            </div>
            {{-- profile --}}
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button"
                            class="flex w-10 h-10 text-sm bg-[#410825] dark:bg-white rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <p class="m-auto text-white dark:text-[#410825] capitalize font-bold text-lg">
                                {{ Auth::user()->name[0] }}
                            </p>
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{ Auth::user()->email }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('profile.show') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Profile</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <button type="submit" href="{{ route('logout') }}"
                                        class="block text-left w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem"> {{ __('Log Out') }} </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-[#410825] dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-[#410825]">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/home"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#410825] hover:text-white dark:hover:text-[#410825] dark:hover:bg-white group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>

                    <span class="ms-3">
                        Home
                    </span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group bg-[#BC0060] hover:bg-[#410825] hover:text-white hover:fill-white dark:text-white dark:fill-white dark:hover:text-[#410825] dark:hover:bg-white dark:hover:fill-[#410825]"
                    aria-controls="dropdown-example" data-collapse-toggle="Spare">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-6" viewBox="0 0 50 50">
                        <path
                            d="M 19 5 C 17.355469 5 16 6.355469 16 8 L 16 11 L 3 11 C 1.355469 11 0 12.355469 0 14 L 0 22.6875 C -0.0585938 22.882813 -0.0585938 23.085938 0 23.28125 L 0 42 C 0 43.644531 1.355469 45 3 45 L 47 45 C 48.644531 45 50 43.644531 50 42 L 50 23.1875 C 50.027344 23.054688 50.027344 22.914063 50 22.78125 L 50 14 C 50 12.355469 48.644531 11 47 11 L 34 11 L 34 8 C 34 6.355469 32.644531 5 31 5 Z M 19 7 L 31 7 C 31.5625 7 32 7.4375 32 8 L 32 11 L 18 11 L 18 8 C 18 7.4375 18.4375 7 19 7 Z M 3 13 L 47 13 C 47.5625 13 48 13.4375 48 14 L 48 22 L 41 22 C 41 20.90625 40.09375 20 39 20 L 34 20 C 32.90625 20 32 20.90625 32 22 L 18 22 C 18 20.90625 17.09375 20 16 20 L 11 20 C 9.90625 20 9 20.90625 9 22 L 2 22 L 2 14 C 2 13.4375 2.4375 13 3 13 Z M 11 22 L 16 22 L 16 22.6875 C 15.941406 22.882813 15.941406 23.085938 16 23.28125 L 16 24 L 11 24 L 11 23.1875 C 11.027344 23.054688 11.027344 22.914063 11 22.78125 Z M 34 22 L 39 22 L 39 22.6875 C 38.941406 22.882813 38.941406 23.085938 39 23.28125 L 39 24 L 34 24 L 34 23.1875 C 34.027344 23.054688 34.027344 22.914063 34 22.78125 Z M 2 24 L 9 24 C 9 25.09375 9.90625 26 11 26 L 16 26 C 17.09375 26 18 25.09375 18 24 L 32 24 C 32 25.09375 32.90625 26 34 26 L 39 26 C 40.09375 26 41 25.09375 41 24 L 48 24 L 48 42 C 48 42.5625 47.5625 43 47 43 L 3 43 C 2.4375 43 2 42.5625 2 42 Z">
                        </path>
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Spare</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="Spare" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/input-spare"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Input
                            Spare</a>
                    </li>
                    <li>
                        <a href="/read-spare"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            Spare Read
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 bg-[#EA82B7] transition duration-75 rounded-lg group hover:bg-[#410825] hover:fill-white dark:fill-white hover:text-white dark:text-white dark:hover:bg-white dark:hover:text-[#410825] dark:hover:fill-[#410825]"
                    aria-controls="dropdown-example" data-collapse-toggle="pengaturan">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Modul</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="pengaturan" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/nama-perangkat"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Nama
                            Perangkat</a>
                    </li>
                    <li>
                        <a href="/jenis-modul"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Jenis
                            Modul</a>
                    </li>
                    <li>
                        <a href="/nama-modul"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Nama
                            Modul</a>
                    </li>
                    <li>
                        <a href="/type"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Type</a>
                    </li>
                    <li>
                        <a href="/lokasi-penyimpanan"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tempat
                            Penyimpanan</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
