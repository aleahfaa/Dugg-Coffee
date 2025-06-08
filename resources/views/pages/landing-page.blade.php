@extends('index')
@section('content')
    <!-- Hero Section -->
    <section class="relative h-[680px]">
        <img src="{{ asset('img/hero-section.png') }}" alt="hero-image" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-30">
            <div class="container mx-auto h-full flex items-center px-4 md:px-16">
                <div class="w-full md:w-1/2 h-full backdrop-blur-sm p-8 md:p-10 rounded-lg flex flex-col gap-6">
                    <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight pt-36">
                        Welcome to Dugg Coffee – Your Green Escape
                    </h1>
                    <p class="text-white font-light text-sm md:text-base leading-relaxed">
                        At Dugg Coffee, we believe a great cup of coffee deserves a beautiful place to be enjoyed.
                        Nestled
                        in the heart of Bandung, our garden-inspired space offers a peaceful escape where you can
                        unwind,
                        create, and connect with nature.
                    </p>
                    <a href="{{ asset('/cart') }}"
                        class="bg-[#4E3D33] font-light text-white px-6 py-2 rounded-md text-sm hover:bg-white hover:text-amber-900 transition duration-300 w-fit">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="max-w-7xl mx-auto px-4 md:px-10 py-12 flex flex-col md:flex-row items-center gap-12">
        <img alt="Dugg Coffee image" src="{{ asset('img/vibes-dagg-coffee.png') }}"
            class="w-full md:w-1/3 rounded-lg object-cover" />
        <div class="md:w-2/3 flex flex-col items-center md:items-start text-center md:text-left gap-5">
            <h2 class="text-3xl font-bold">Drink Under Good Garden</h2>
            <p class="text-[15px] italic leading-relaxed">
                "Santai, Seru, Serius Bisa Bareng di Sini" adalah semangat yang kami bawa sejak Dugg Coffee berdiri pada
                tahun 2021 di kawasan Gegerkalong, Bandung. Kami hadir bukan hanya sebagai tempat ngopi, tapi juga
                sebagai ruang nyaman untuk bertemu, berdiskusi, bermain, atau sekadar melepas lelah.
            </p>
            <p class="text-[15px] italic leading-relaxed">
                Butuh tempat buat kerja bareng? Nongkrong sore? Atau meeting santai? Tenang, kami punya semuanya. Mulai
                dari meeting room yang nyaman, gaming room seru buat hiburan, hingga sudut-sudut estetik yang bikin
                betah berlama-lama.
            </p>
            <p class="text-[15px] italic leading-relaxed">
                Dan yang paling penting, semua itu kami hadirkan dengan harga yang ramah, cocok buat kamu yang cari cafe
                murah di Bandung tapi tetap berkesan.
            </p>
            <p class="text-[15px] italic leading-relaxed">
                Dikelola oleh tim yang peduli pada detail dan pengalaman pengunjung, Dugg Coffee akan selalu jadi tempat
                yang siap menemani setiap suasana kamu.
            </p>
        </div>
    </section>

    <!-- Menu -->
    <section id="menu" class="bg-[#4E3D33] py-12">
        <div class="max-w-7xl mx-auto px-4 md:px-10">
            <div class="flex flex-wrap justify-center gap-4 mb-10 text-sm font-semibold bg-[#D8CFC4] py-3 rounded-3xl md:rounded-full w-fit mx-auto"
                id="menu-filters">
                @foreach (['beverages' => 'Beverages', 'seasonal' => 'Seasonal', 'signature' => 'Signature', 'shareable' => 'Shareables', 'maincourse' => 'Main Course'] as $key => $label)
                    <button
                        class="filter-btn px-6 py-4 mx-3 rounded-full transition whitespace-nowrap text-[#653318] hover:text-white hover:underline"
                        data-filter="{{ $key }}">
                        {{ $label }}
                    </button>
                @endforeach
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 text-white" id="menu-items">
                @php
                    $menuItems = [
                        'beverages' => [
                            [
                                'name' => 'Espresso',
                                'price' => 'Rp 15.000',
                                'desc' =>
                                    'Espresso yang ditambahkan air panas, memberikan rasa kopi yang lebih ringan namun tetap bold.',
                                'img' => 'img/item-menus/espresso.png',
                            ],
                            [
                                'name' => 'Americano',
                                'price' => 'Rp 18.000',
                                'desc' =>
                                    'Kopi hitam dengan rasa lebih tajam dari Americano, cocok bagi pencinta kopi tanpa ampas.',
                                'img' => 'img/item-menus/americano.png',
                            ],
                            [
                                'name' => 'Long Black',
                                'price' => 'Rp 20.000',
                                'desc' =>
                                    'Kopi hitam dengan rasa lebih tajam dari Americano, cocok bagi pencinta kopi tanpa ampas.',
                                'img' => 'img/item-menus/long-black.png',
                            ],
                            [
                                'name' => 'Manual Brew',
                                'price' => 'Rp 22.000',
                                'desc' =>
                                    'Kopi diseduh manual seperti V60 atau French Press, menonjolkan cita rasa asli biji kopi.',
                                'img' => 'img/item-menus/manual-brew.png',
                            ],
                            [
                                'name' => 'Latte',
                                'price' => 'Rp 20.000',
                                'desc' =>
                                    'Kopi espresso dengan campuran susu steamed, lembut dan creamy di setiap tegukan.',
                                'img' => 'img/item-menus/latte.png',
                            ],
                            [
                                'name' => 'Vanilla Latte',
                                'price' => 'Rp 22.000',
                                'desc' =>
                                    'Latte klasik yang diberi sentuhan vanilla, menambah rasa manis dan harum yang menenangkan.',
                                'img' => 'img/item-menus/vanilla-latte.png',
                            ],
                        ],
                        'seasonal' => [
                            [
                                'name' => 'Mont Blanc',
                                'price' => 'Rp 30.000',
                                'desc' => 'Menu spesial musiman dengan krim kastanye dan topping whipped.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/531b2584-03ef-4367-0945-d77afed9a6f2.jpg',
                            ],
                            [
                                'name' => 'Matcha Strawberry',
                                'price' => 'Rp 28.000',
                                'desc' => 'Minuman matcha musiman dengan rasa stroberi segar.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/4f398134-8c5e-4f85-d591-250e51d5d9eb.jpg',
                            ],
                        ],
                        'signature' => [
                            [
                                'name' => 'Chocolate',
                                'price' => 'Rp 25.000',
                                'desc' => 'Minuman cokelat kaya dengan tekstur krim.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/21f435e9-ba5a-4a66-2bcc-1e45d73cdc19.jpg',
                            ],
                            [
                                'name' => 'Choco Strawberry',
                                'price' => 'Rp 27.000',
                                'desc' => 'Minuman cokelat dengan rasa stroberi segar.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/51877faa-aad4-440e-0b48-349f151372dd.jpg',
                            ],
                            [
                                'name' => 'Matcha',
                                'price' => 'Rp 28.000',
                                'desc' => 'Minuman matcha signature dengan susu krim.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/199488ed-37ba-43a4-2a0b-1ec739705051.jpg',
                            ],
                            [
                                'name' => 'Charcoal',
                                'price' => 'Rp 26.000',
                                'desc' => 'Minuman charcoal yang unik dengan rasa asap.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/80c843f2-cb43-4ad9-aecd-8e77188c66b5.jpg',
                            ],
                            [
                                'name' => 'Aren Milk',
                                'price' => 'Rp 24.000',
                                'desc' => 'Minuman susu aren palm yang manis.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/788538d3-989f-4d1a-a161-ce5b1503c53e.jpg',
                            ],
                        ],
                        'shareable' => [
                            [
                                'name' => 'French Fries',
                                'price' => 'Rp 15.000',
                                'desc' => 'French fries yang crispy dan keemasan.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/ad487637-a402-4e03-6006-fafcdee755ab.jpg',
                            ],
                            [
                                'name' => 'Fries n Sausage',
                                'price' => 'Rp 20.000',
                                'desc' => 'French fries disajikan dengan sosis.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/de1c2ad2-c10a-43da-8195-e9e03f27a8de.jpg',
                            ],
                            [
                                'name' => 'Cireng',
                                'price' => 'Rp 18.000',
                                'desc' => 'Snack cireng yang crispy dan lezat.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/fa46e6d4-ec88-4500-5866-88b92444f720.jpg',
                            ],
                            [
                                'name' => 'Tahu Lada Goreng',
                                'price' => 'Rp 17.000',
                                'desc' => 'Tahu goreng yang crispy dengan saus lada pedas.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/42596c75-ce8a-405e-1ccb-b734e01a13a1.jpg',
                            ],
                        ],
                        'maincourse' => [
                            [
                                'name' => 'Beef Slice Rice Bowl',
                                'price' => 'Rp 40.000',
                                'desc' => 'Makanan rice bowl dengan irisan daging sapi dan sayuran.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/d0014ce0-c4a3-4e68-3684-264fbd61a3da.jpg',
                            ],
                            [
                                'name' => 'Chicken Pop Rice Bowl',
                                'price' => 'Rp 38.000',
                                'desc' => 'Makanan rice bowl dengan chicken pop crispy dan sayuran.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/c56c29b8-5328-45ef-972e-103686580ecf.jpg',
                            ],
                            [
                                'name' => 'Indomie Goreng/Kuah + Telur',
                                'price' => 'Rp 25.000',
                                'desc' => 'Indomie goreng atau kuah disajikan dengan telur.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/ab386119-3cb6-4345-a66f-e57a25cfd3b5.jpg',
                            ],
                            [
                                'name' => 'Indomie Goreng Saus Keju',
                                'price' => 'Rp 27.000',
                                'desc' => 'Indomie goreng dengan saus keju.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/356d8a2f-4515-4c2e-fb69-f54579387253.jpg',
                            ],
                            [
                                'name' => 'Indomie Goreng Creamy',
                                'price' => 'Rp 28.000',
                                'desc' => 'Indomie goreng dengan saus creamy.',
                                'img' =>
                                    'https://storage.googleapis.com/a1aa/image/b0cc7203-baab-4eaa-802f-1c887c3e4b4b.jpg',
                            ],
                        ],
                    ];
                @endphp
                @foreach ($menuItems as $category => $items)
                    @foreach ($items as $item)
                        <div class="menu-item {{ $category !== 'beverages' ? 'hidden' : '' }} bg-[#FFFFFF40] rounded-xl p-4 flex flex-col lg:flex-row gap-4 items-center lg:items-start cursor-pointer w-full"
                            data-category="{{ $category }}" data-desc="{{ $item['desc'] }}" data-img="{{ asset($item['img']) }}"
                            data-name="{{ $item['name'] }}" data-price="{{ $item['price'] }}">
                            <img src="{{ asset($item['img']) }}" alt="{{ $item['name'] }} image"
                                class="w-32 h-32 sm:w-32 sm:h-32 rounded-lg object-cover" />
                            <div class="text-center lg:text-left">
                                <h3 class="font-semibold text-lg sm:text-xl text-white mb-2">{{ $item['name'] }}</h3>
                                <p class="text-sm sm:text-base text-[#FCECB9]">{{ $item['price'] }}</p>
                                <i class="text-xs sm:text-sm font-light text-white">{{ $item['desc'] }}</i>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="max-w-7xl mx-auto px-4 md:px-10 py-12 space-y-6">
        <h1 class="text-4xl font-bold">Kabar Baru dari DuggCoffee</h1>
        <p class="font-light mb-2">Ikuti info terkini seputar Dugg Coffee — mulai dari menu
            musiman <br> terbaru, acara komunitas, hingga pembaruan suasana. Selalu ada cerita baru yang siap diseduh.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($news as $item)
                <a href="{{ route('news.show', $item->id) }}"
                    class="block bg-white rounded-2xl shadow-lg transition-all duration-300 transform hover:-translate-y-1 cursor-pointer">
                    <img src="{{ asset($item->image_url ?? 'img/default-news.jpg') }}" alt="{{ $item->title }}"
                        class="w-full h-48 object-cover rounded-t-2xl">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 line-clamp-2">
                            {{ $item->title }}
                        </h3>
                        <hr class="my-2 border-[#4B3C2F] border-2" />
                        <i class="text-gray-600 text-sm font-light leading-relaxed mb-4 line-clamp-3">
                            {{ Str::limit(strip_tags($item->content), 100, '...') }}
                        </i>
                        <p class="text-gray-500 text-xs font-light text-right">{{ $item->created_at->format('d M Y') }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="text-center pt-6">
            <a href="{{ route('news.index') }}"
                class="font-semibold border-2 border-[#5B4B3A] text-[#5B4B3A] bg-transparent px-4 py-2 rounded-full hover:bg-[#5B4B3A] hover:text-white transition duration-200 ease-in-out">
                Selengkapnya
            </a>
        </div>
    </section>

    <!-- Space & Facility Section -->
    <section id="space" class="bg-[#FCECB9] py-12">
        <div class="max-w-7xl mx-auto px-4 md:px-10 space-y-12">
            <h2 class="text-2xl text-center md:text-4xl font-bold mb-4">
                Experience Cozy Comfort in Our <br>Inviting Coffee Shop Space
            </h2>
            @php
                $facilities = [
                    [
                        'img' => 'img/item-facilities/fun-room.jpg',
                        'title' => 'Level Up Your Fun in Our Cozy Gaming Room',
                        'desc' =>
                            'Enjoy casual or competitive gaming with friends in a relaxed and stylish setup, equipped with high-speed internet and comfy seating.',
                        'route' => 'space.funroom'
                    ],
                    [
                        'img' => 'img/item-facilities/canopy-lush-garden.jpg',
                        'title' => 'Under the Canopy of Our Lush, Green Garden',
                        'desc' =>
                            'Take a peaceful break beneath our cozy rooftop garden, where greenery surrounds you and the gentle sounds of our fish pond soothe your mind.',
                        'route' => 'space.garden'
                    ],
                    [
                        'img' => 'img/item-facilities/meeting-room.png',
                        'title' => 'Host Productivity in Our Private Meeting Room',
                        'desc' =>
                            'Conduct meetings, creatively collaborate, or work in quiet – our meeting space is thoughtfully designed to spark ideas and meaningful discussion.',
                        'route' => 'space.meeting'
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($facilities as $facility)
                    <div>
                        <a href="{{ route($facility['route']) }}"
                            class="block relative bg-white rounded-2xl overflow-hidden shadow-xl group cursor-pointer transition-all duration-300 hover:shadow-2xl">
                            <div class="relative h-[28rem]">
                                <img src="{{ asset($facility['img']) }}" alt="{{ $facility['title'] }}"
                                    class="w-full h-full object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-40 group-hover:bg-opacity-50 transition-all duration-300">
                                </div>
                                <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-6">
                                    <h2 class="text-white text-2xl font-bold mb-4 leading-tight">
                                        {{ $facility['title'] }}
                                    </h2>
                                    <p class="text-white text-sm leading-relaxed mb-6 max-w-xs opacity-90">
                                        {{ $facility['desc'] }}
                                    </p>
                                    <span
                                        class="flex items-center text-white text-sm font-medium hover:text-blue-300 transition-colors duration-300 group/btn">
                                        <span class="mr-2">Explore</span>
                                        <i
                                            class="fas fa-chevron-right text-xs transform group-hover/btn:translate-x-1 transition-transform duration-300"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Promo Section -->
    <section style="background-color: #D8CFC4;" class="py-12">
        <div class="max-w-7xl mx-auto px-4 md:px-10 space-y-12">
            <h2 class="text-2xl text-center md:text-4xl font-bold mb-4">
                Promo Spesial untuk Kamu!
            </h2>
            @php
                $promos = [
                    [
                        'img' => 'img/promos/promo-coffetime.png',
                        'route' => 'promo.coffeetime'
                    ],
                    [
                        'img' => 'img/promos/promo-student.png',
                        'route' => 'promo.student'
                    ],
                    [
                        'img' => 'img/promos/promo-specialmenu.png',
                        'route' => 'promo.specialmenu'
                    ],
                ];
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($promos as $promo)
                    <div>
                        <a href="{{ route($promo['route']) }}"
                            class="block relative bg-white rounded-2xl overflow-hidden shadow-xl group cursor-pointer transition-all duration-300 hover:shadow-2xl">
                            <div class="relative aspect-square">
                                <img src="{{ asset($promo['img']) }}" alt="Promo" class="w-full h-full object-cover">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Instagram gallery -->
    <section id="instagram" class="text-center py-12 px-4 sm:px-6">
        <h2 class="text-xl text-[#B5906A] font-bold mb-3">Ikuti Keseruan Kami!</h2>
        <a href="https://www.instagram.com/duggcoffee.66/" target="_blank" rel="noopener noreferrer"
            class="text-lg md:text-4xl font-bold text-[#653318] hover:underline mb-6 inline-block">
            @duggcoffee.66
        </a>
        @php
            $instagramPosts = [
                'https://www.instagram.com/reel/DKRiQfqJqVF/?utm_source=ig_embed&utm_campaign=loading',
                'https://www.instagram.com/reel/DKJQJfhJRvD/?utm_source=ig_embed&utm_campaign=loading',
                'https://www.instagram.com/reel/DJ_yFNVpP0I/?utm_source=ig_embed&utm_campaign=loading',
            ];
        @endphp
        <div class="container mx-auto px-0 sm:px-4 pt-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 justify-items-center">
                @foreach ($instagramPosts as $post)
                    <div class="w-full px-2 sm:px-0 flex justify-center">
                        <blockquote
                            class="instagram-media rounded-lg shadow-md border border-gray-200 !w-full !min-w-[140px] !max-w-xs sm:!max-w-sm bg-white"
                            data-instgrm-permalink="{{ $post }}" data-instgrm-version="14" style="margin:0 auto;padding:0;">
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="https://www.instagram.com/duggcoffee.66/" target="_blank"
            class="mt-10 inline-block px-6 py-2 border-2 border-[#653318] text-[#653318] font-semibold rounded-full hover:bg-[#653318] hover:text-white transition-colors duration-300">
            <img src="{{ asset('img/instagram.png') }}" alt="Instagram logo" class="inline w-4 h-4 mr-2" />
            Follow
        </a>
        <script async src="//www.instagram.com/embed.js"></script>
    </section>

    <!-- FAQ -->
    <section id="faq" class="max-w-5xl mx-auto space-y-3 py-12 px-4">
        <h3 class="font-bold text-3xl mb-8 text-center">Frequently Asked Questions</h3>
        <div class="space-y-2">
            @php
                $faqs = [
                    [
                        'id' => 'faq1',
                        'question' => 'Apa konsep utama Dugg Coffee?',
                        'answer' =>
                            'Dugg Coffee adalah tempat yang mengutamakan kualitas kopi dan suasana yang nyaman untuk para pecinta kopi.',
                    ],
                    [
                        'id' => 'faq2',
                        'question' => 'Apakah tersedia area indoor dan outdoor?',
                        'answer' => 'Ya, Dugg Coffee menyediakan area indoor dan outdoor untuk kenyamanan pengunjung.',
                    ],
                    [
                        'id' => 'faq3',
                        'question' => 'Bisakah memesan untuk meeting atau acara?',
                        'answer' => 'Bisa, Dugg Coffee menerima pemesanan untuk meeting dan acara khusus.',
                    ],
                    [
                        'id' => 'faq4',
                        'question' => 'Apakah jam buka Dugg Coffee?',
                        'answer' => 'Dugg Coffee buka setiap hari dari pukul 7 pagi hingga 9 malam.',
                    ],
                    [
                        'id' => 'faq5',
                        'question' => 'Bagaimana kebijakan Wi-Fi dan outlet listrik di Dugg Coffee?',
                        'answer' =>
                            'Dugg Coffee menyediakan Wi-Fi gratis dan outlet listrik di setiap meja untuk kenyamanan pelanggan.',
                    ],
                ];
            @endphp
            @foreach ($faqs as $faq)
                <div>
                    <button aria-controls="{{ $faq['id'] }}" aria-expanded="false"
                        class="w-full flex justify-between items-center bg-[#F7E7B5] px-6 py-4 rounded text-sm md:text-base font-semibold focus:outline-none"
                        id="{{ $faq['id'] }}-button" type="button">
                        <span>{{ $faq['question'] }}</span>
                        <i class="fas fa-chevron-right transition-transform duration-300" id="{{ $faq['id'] }}-icon"></i>
                    </button>
                    <div class="hidden bg-yellow-50 px-6 py-4 text-sm md:text-base text-gray-800 rounded-b"
                        id="{{ $faq['id'] }}" role="region" aria-labelledby="{{ $faq['id'] }}-button">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <div class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden" id="menu-modal">
        <div class="bg-[#7B6E66] rounded-lg w-full max-w-2xl mx-4 p-4 relative shadow-2xl">
            <button aria-label="Close menu modal"
                class="absolute top-3 right-3 text-[#FCECB9] hover:text-gray-200 text-4xl z-50 w-8 h-8 flex items-center justify-center"
                id="modal-close">×</button>

            <div class="flex flex-col md:flex-row items-start md:items-center justify-center gap-6 pt-2 mb-4">
                <div class="flex-shrink-0 self-center md:self-start">
                    <img alt="Menu product image" class="w-40 h-40 sm:w-48 sm:h-48 md:w-60 md:h-60 rounded-xl object-cover"
                        id="modal-img" src="" />
                </div>
                <div class="flex flex-col justify-center gap-4 text-center md:text-left">
                    <h3 class="text-2xl font-semibold text-white" id="modal-name"></h3>
                    <p class="text-xl text-[#FCECB9]" id="modal-price"></p>
                    <i class="text-base text-white/90 leading-relaxed" id="modal-desc"></i>
                </div>
            </div>
        </div>
    </div>
@endsection