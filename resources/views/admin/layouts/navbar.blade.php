<!-- Navbar Start -->
<!-- ========== HEADER ========== -->
<div id="hs-overlay-example"
     class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 "
     tabindex="-1">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
            Menu
        </h3>
        <button type="button"
                class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                data-hs-overlay="#hs-overlay-example">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" /></svg>
        </button>
    </div>
    <div class="p-4">
        <div
            class="flex flex-col gap-y-5 gap-x-0 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">

            <div
                class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                <button type="button"
                        class="w-full flex items-center text-sm text-gray-800 bg-stone-200 rounded-lg py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    <i class="fa-solid fa-user mr-2 text-stone-600"></i>ADMIN
                </button>

                <div class="hs-dropdown-menu w-full transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 top-[2.35rem] lg:start-auto lg:end-0 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                     aria-labelledby="hs-dropdown-left-but-right-on-lg hs-dr">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                       href="home-login.html">
                        Profile
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                       href="riwayat-pemesanan.html">
                        Riwayat Pembelian
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                       href="#">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="navbar"
        class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-stone-300 text-sm py-3 sm:py-0 dark:bg-slate-900">
    <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
         aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold dark:text-white" href="/admin/dashboard" aria-label="Brand"><img
                    class="w-32" src="{{asset('img/logo.png')}}" alt=""></a>
            <div class="sm:hidden flex items-center gap-x-7">
                <a class="relative font-semibold text-gray-500 hover:text-gray-600 text-lg sm:border-s sm:border-gray-500 pt-0.5"
                   href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span
                        class="absolute -right-4 -top-0 text-xs bg-red-500 text-white px-1 rounded-full">0</span>
                </a>
                <button type="button"
                        class="hs-collapse-toggle w-9 h-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-400 text-gray-800 hover:bg-stone-400 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-overlay-example">
                    <span class="sr-only">Toggle Navigation</span>
                    <svg class="flex-shrink-0 w-4 h-4" width="16" height="16" fill="currentColor"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hs-collapse hidden transition-all duration-300 basis-full grow sm:block">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">

                <div
                    class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                    <button type="button"
                            class="w-full flex justify-between items-center text-sm text-gray-800 bg-stone-200 rounded-lg py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <i class="fa-solid fa-user mr-2 text-stone-600"></i>ADMIN
                    </button>

                    <div class="hs-dropdown-menu w-72 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 top-[2.35rem] lg:start-auto lg:end-0 min-w-[16.5rem] bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                         aria-labelledby="hs-dropdown-left-but-right-on-lg">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                           href="/logout">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->
