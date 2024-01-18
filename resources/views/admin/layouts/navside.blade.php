<div class="pt-10 col-span-4 lg:col-span-1 rounded-lg shadow-xl border-2 h-fit">
    <div class="flex flex-col justify-center items-center gap-3">
        <h1 class="text-lg font-bold font-serif">Admin Forist</h1>
    </div>

    <div class="flex flex-col justify-center items-center mt-10">
        <a href="/admin/dashboard"
           class="bg-stone-{{ Request::is('admin/dashboard') ? 300 : 100 }} w-full px-5 py-4 font-serif hover:bg-stone-300"><i
                class="fa-solid fa-user mr-3"></i> Dashboard</a>
        <a href="/admin/products"
           class="bg-stone-{{ Request::is('admin/products') || Request::is('admin/edit-tags') || Request::is('admin/tambah-product') ? 300 : 100 }} w-full px-5 py-4 font-serif hover:bg-stone-300"><i
                class="fa-solid fa-barcode mr-3"></i></i> Products</a>
        <a href="/admin/pesanan/belum-lunas"
           class="bg-stone-{{ (substr(Request::getRequestUri(), 6, 8) == '/pesanan') ? 300 : 100 }} w-full px-5 py-4 font-serif hover:bg-stone-300"><i
                class="fa-solid fa-cash-register mr-3"></i> Pesanan</a>
        <a href="/logout"
           class="bg-stone-100 w-full px-5 py-4 font-serif hover:bg-stone-300 rounded-b-lg"><i
                class="fa-solid fa-right-from-bracket mr-3"> </i>Logout</a>
    </div>
</div>
