<div class="pt-10 col-span-4 lg:col-span-1 rounded-lg shadow-xl border-2 h-fit">
    <div class="flex flex-col justify-center items-center gap-3">
        <img class="inline-block h-[3.875rem] w-[3.875rem] rounded-full"
             src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
             alt="Image Description">
        <h1 class="text-sm">{{ auth()->user()->email }}</h1>
    </div>

    <div class="flex flex-col justify-center items-center mt-10">
        <a href="/profile"
           class="bg-stone-{{ Request::is('profile') ? 300:100 }} w-full px-5 py-4 font-serif hover:bg-stone-300"><i
                class="fa-solid fa-user mr-3"></i> Profile Akun</a>
        <a href="/riwayat-pembelian"
           class="bg-stone-{{ (substr(Request::getRequestUri(), 1, 17) == 'riwayat-pembelian') ? 300 : 100 }} w-full px-5 py-4 font-serif hover:bg-stone-300"><i
                class="fa-solid fa-bag-shopping mr-3"></i> Riwayat Pembelian
        </a>
        <a href="/logout"
           class="bg-stone-100 w-full px-5 py-4 font-serif hover:bg-stone-300 rounded-b-lg"><i
                class="fa-solid fa-right-from-bracket mr-3"></i> Logout</a>
    </div>
</div>
