@extends('index')
@section('content')
    <div class="pt-30"/>
    <div class="container mx-auto bg-gray-100 rounded-xl shadow-lg p-8">
        <h1 class="text-5xl font-extrabold mb-12 text-center text-amber-700">Order Makanan & Minuman</h1>

        <div id="menu-sections" class="mb-10">
        </div>

        <hr class="my-12 border-amber-300">

        <div class="mt-10">
            <h2 class="text-3xl font-bold mb-6 text-amber-600">Keranjang Belanja Kamu</h2>
            <div id="cart-items"
                class="bg-yellow-50 rounded-lg shadow-inner p-6 min-h-[100px] flex flex-col justify-center items-center">
                <p id="empty-cart-message" class="text-gray-500 text-center text-lg italic">Keranjangmu masih kosong. Ayo
                    pilih menu!</p>
            </div>
            <div class="mt-6 flex flex-col md:flex-row justify-between items-center bg-amber-100 p-4 rounded-lg shadow-md">
                <p class="text-3xl font-bold text-amber-700 mb-4 md:mb-0">Total: <span id="cart-total">Rp 0</span></p>
                <button id="clear-cart-btn"
                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out w-full md:w-auto">
                    Bersihkan Keranjang
                </button>
            </div>
        </div>
    </div>

    <div id="notification"
        class="fixed top-5 right-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transition-all duration-300 ease-out transform translate-y-[-20px] opacity-0">
        <span id="notification-message"></span>
    </div>
@endsection
