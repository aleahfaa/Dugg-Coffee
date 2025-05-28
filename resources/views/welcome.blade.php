<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Dugg Coffee
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-900">
    <!-- Header with nav and hero -->
    <header class="relative">
        <img alt="Close up image of coffee beans background" class="w-full h-[400px] object-cover" height="400"
            src="https://storage.googleapis.com/a1aa/image/d04faec4-8d10-4d2d-dc51-42cfe3e42cbf.jpg" width="1920" />
        <nav
            class="fixed top-0 left-0 w-full flex items-center justify-between px-6 py-4 bg-black bg-opacity-40 text-white z-30">
            <div class="flex items-center space-x-2">
                <img alt="Dugg Coffee logo, blue and white icon" class="w-10 h-10" height="40"
                    src="https://storage.googleapis.com/a1aa/image/d45bf3cb-adf6-4b60-1f6a-2605c1946377.jpg"
                    width="40" />
                {{-- <span class="font-bold text-lg">
                    Dugg Coffee
                </span> --}}
            </div>
            <ul class="hidden md:flex space-x-8 font-semibold text-sm">
                <li>
                    <a class="hover:underline" href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a class="hover:underline" href="#">
                        Menu
                    </a>
                </li>
                <li>
                    <a class="hover:underline" href="#">
                        About
                    </a>
                </li>
                <li>
                    <a class="hover:underline" href="#">
                        Contact
                    </a>
                </li>
            </ul>
            <div class="hidden md:flex space-x-4">
                <button
                    class="bg-transparent border border-white px-4 py-1 rounded text-white text-sm hover:bg-white hover:text-black transition">
                    Sign In
                </button>
                <button
                    class="bg-white text-black px-4 py-1 rounded text-sm font-semibold hover:bg-gray-200 transition">
                    Join
                </button>
            </div>
            <button aria-label="Open menu" class="md:hidden text-white text-2xl focus:outline-none">
                <i class="fas fa-bars">
                </i>
            </button>
        </nav>
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex flex-col justify-center px-6 md:px-20 max-w-screen-xl mx-auto z-20"
            style="height: 400px;">
            <h1 class="text-white text-3xl md:text-5xl font-bold max-w-lg leading-tight">
                Welcome to Dugg Coffee – Your Green Escape
            </h1>
            <p class="text-white mt-4 max-w-md text-sm md:text-base leading-relaxed">
                A place to unwind and savor some of the best handcrafted drinks.
                Discover the rich flavors of coffee in a warm, welcoming environment.
            </p>
            <button
                class="mt-6 bg-transparent border border-white text-white px-6 py-2 rounded text-sm font-semibold hover:bg-white hover:text-black transition max-w-max">
                Learn More
            </button>
        </div>
    </header>
    <main class="max-w-screen-xl mx-auto px-6 md:px-20 py-12 space-y-16 mt-[400px]">
        <!-- Section with image left and text right -->
        <section class="flex flex-col md:flex-row md:space-x-12 items-start">
            <img alt="Interior of coffee shop with wooden table, chairs, and green plants"
                class="w-full md:w-1/2 rounded-lg object-cover" height="300"
                src="https://storage.googleapis.com/a1aa/image/783fcf05-3727-4ca3-fd15-65e0f85182d4.jpg" width="400" />
            <div class="mt-8 md:mt-0 md:w-1/2">
                <h2 class="font-bold text-xl md:text-2xl mb-4">
                    Your Green Escape: A serene Retreat for Coffee Lovers
                </h2>
                <p class="text-sm md:text-base leading-relaxed text-gray-800">
                    Nestled in the heart of the city, Dugg Coffee offers a tranquil
                    environment surrounded by lush greenery. Our space is designed to
                    provide a peaceful escape where you can enjoy expertly brewed coffee
                    and connect with nature.
                </p>
            </div>
        </section>
        <!-- Discover Dugg Coffee section -->
        <section>
            <h3 class="font-bold text-2xl mb-6">
                Discover Dugg Coffee
            </h3>
            <p class="text-sm md:text-base max-w-3xl mb-8">
                Find out what makes Dugg Coffee the perfect place for your daily coffee
                ritual.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm md:text-base">
                <div>
                    <h4 class="font-semibold mb-1">
                        Crafted Perfection
                    </h4>
                    <p class="text-gray-700">
                        Every cup is brewed with precision and passion, using the finest
                        beans sourced sustainably.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-1">
                        Community Hub
                    </h4>
                    <p class="text-gray-700">
                        A welcoming space for locals and visitors alike to gather, relax,
                        and share stories.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-1">
                        Sustainable Practices
                    </h4>
                    <p class="text-gray-700">
                        Committed to eco-friendly methods, from bean to cup, minimizing our
                        environmental footprint.
                    </p>
                </div>
            </div>
        </section>
        <!-- Featured Drinks -->
        <section>
            <h3 class="font-bold text-2xl mb-6">
                Featured Drinks
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm md:text-base">
                <div>
                    <h4 class="font-semibold mb-1">
                        Espresso Macchiato
                    </h4>
                    <p class="text-gray-700">
                        A rich espresso topped with a dollop of frothy milk for a bold
                        flavor.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-1">
                        Caramel Latte
                    </h4>
                    <p class="text-gray-700">
                        Smooth espresso blended with steamed milk and sweet caramel syrup.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-1">
                        Matcha Green Tea Latte
                    </h4>
                    <p class="text-gray-700">
                        A creamy blend of premium matcha powder and steamed milk for a
                        refreshing twist.
                    </p>
                </div>
            </div>
        </section>
        <!-- Cozy Comfort Section with 3 cards -->
        <section class="bg-yellow-100 py-12 px-6 rounded-lg space-y-10 md:space-y-0 md:flex md:space-x-8">
            <div class="md:w-1/3 bg-yellow-100 text-center px-4">
                <p class="text-sm md:text-base italic mb-4">
                    “The perfect spot to relax after a long day.”
                </p>
                <p class="font-semibold text-sm md:text-base">
                    - Emily, Local Artist
                </p>
            </div>
            <div class="md:w-1/3 bg-yellow-100 text-center px-4">
                <p class="text-sm md:text-base italic mb-4">
                    “A warm and cozy atmosphere that feels like home.”
                </p>
                <p class="font-semibold text-sm md:text-base">
                    - Mark, Coffee Enthusiast
                </p>
            </div>
            <div class="md:w-1/3 bg-yellow-100 text-center px-4">
                <p class="text-sm md:text-base italic mb-4">
                    “The best place to catch up with friends over great coffee.”
                </p>
                <p class="font-semibold text-sm md:text-base">
                    - Sarah, Student
                </p>
            </div>
        </section>
        <!-- Instagram gallery -->
        <section class="text-center" style="">
            <a class="text-blue-600 text-sm md:text-base underline mb-6 inline-block"
                href="https://www.instagram.com/duggcoffee.66/" target="_blank" rel="noopener noreferrer">
                Our Instagram
            </a>
            <div class="grid grid-cols-3 gap-4 max-w-5xl mx-auto">
                <img alt="Instagram post 1 from duggcoffee.66 showing coffee cup on wooden table with natural light"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123456_1234567890123456789_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=abc123XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12345"
                    width="150" />
                <img alt="Instagram post 2 from duggcoffee.66 showing latte art in a ceramic cup"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123457_1234567890123456790_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=def456XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12346"
                    width="150" />
                <img alt="Instagram post 3 from duggcoffee.66 showing coffee beans in burlap sack"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123458_1234567890123456791_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=ghi789XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12347"
                    width="150" />
                <img alt="Instagram post 4 from duggcoffee.66 showing barista preparing espresso"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123459_1234567890123456792_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=jkl012XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12348"
                    width="150" />
                <img alt="Instagram post 5 from duggcoffee.66 showing cozy coffee shop seating area"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123460_1234567890123456793_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=mno345XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12349"
                    width="150" />
                <img alt="Instagram post 6 from duggcoffee.66 showing coffee cup with steam on wooden table"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123461_1234567890123456794_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=pqr678XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12350"
                    width="150" />
                <img alt="Instagram post 7 from duggcoffee.66 showing fresh coffee beans on a scoop"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123462_1234567890123456795_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=stu901XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12351"
                    width="150" />
                <img alt="Instagram post 8 from duggcoffee.66 showing coffee shop exterior with plants"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123463_1234567890123456796_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=vwx234XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12352"
                    width="150" />
                <img alt="Instagram post 9 from duggcoffee.66 showing coffee cup and book on table"
                    class="w-full h-auto object-cover rounded" height="150"
                    src="https://instagram.fcgk3-1.fna.fbcdn.net/v/t51.2885-15/349123464_1234567890123456797_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=yza567XYZ&amp;_nc_ht=instagram.fcgk3-1.fna.fbcdn.net&amp;edm=ANo9K5cEAAAA&amp;oh=abcdef1234567890abcdef1234567890&amp;oe=64B12353"
                    width="150" />
            </div>
        </section>
        <!-- FAQ Section -->
        <section class="max-w-3xl mx-auto space-y-3 mt-16" style="">
            <h3 class="font-bold text-2xl mb-4" style="">
                Frequently Asked Question
            </h3>
            <div class="space-y-2">
                <div>
                    <button aria-controls="faq1" aria-expanded="false"
                        class="w-full flex justify-between items-center bg-yellow-200 px-4 py-2 rounded text-sm md:text-base font-semibold focus:outline-none"
                        id="faq1-button" type="button">
                        <span>
                            Apa konsep utama Dugg Coffee?
                        </span>
                        <i class="fas fa-chevron-right transition-transform duration-300" id="faq1-icon">
                        </i>
                    </button>
                    <div class="hidden bg-yellow-50 px-4 py-2 text-sm md:text-base text-gray-800 rounded-b" id="faq1"
                        role="region" aria-labelledby="faq1-button">
                        Dugg Coffee adalah tempat yang mengutamakan kualitas kopi dan suasana yang nyaman untuk para
                        pecinta kopi.
                    </div>
                </div>
                <div>
                    <button aria-controls="faq2" aria-expanded="false"
                        class="w-full flex justify-between items-center bg-yellow-200 px-4 py-2 rounded text-sm md:text-base font-semibold focus:outline-none"
                        id="faq2-button" type="button">
                        <span>
                            Apakah tersedia area indoor dan outdoor?
                        </span>
                        <i class="fas fa-chevron-right transition-transform duration-300" id="faq2-icon">
                        </i>
                    </button>
                    <div class="hidden bg-yellow-50 px-4 py-2 text-sm md:text-base text-gray-800 rounded-b" id="faq2"
                        role="region" aria-labelledby="faq2-button">
                        Ya, Dugg Coffee menyediakan area indoor dan outdoor untuk kenyamanan pengunjung.
                    </div>
                </div>
                <div>
                    <button aria-controls="faq3" aria-expanded="false"
                        class="w-full flex justify-between items-center bg-yellow-200 px-4 py-2 rounded text-sm md:text-base font-semibold focus:outline-none"
                        id="faq3-button" type="button">
                        <span>
                            Bisakah memesan untuk meeting atau acara?
                        </span>
                        <i class="fas fa-chevron-right transition-transform duration-300" id="faq3-icon">
                        </i>
                    </button>
                    <div class="hidden bg-yellow-50 px-4 py-2 text-sm md:text-base text-gray-800 rounded-b" id="faq3"
                        role="region" aria-labelledby="faq3-button">
                        Bisa, Dugg Coffee menerima pemesanan untuk meeting dan acara khusus.
                    </div>
                </div>
                <div>
                    <button aria-controls="faq4" aria-expanded="false"
                        class="w-full flex justify-between items-center bg-yellow-200 px-4 py-2 rounded text-sm md:text-base font-semibold focus:outline-none"
                        id="faq4-button" type="button">
                        <span>
                            Apakah jam buka Dugg Coffee?
                        </span>
                        <i class="fas fa-chevron-right transition-transform duration-300" id="faq4-icon">
                        </i>
                    </button>
                    <div class="hidden bg-yellow-50 px-4 py-2 text-sm md:text-base text-gray-800 rounded-b" id="faq4"
                        role="region" aria-labelledby="faq4-button">
                        Dugg Coffee buka setiap hari dari pukul 7 pagi hingga 9 malam.
                    </div>
                </div>
                <div>
                    <button aria-controls="faq5" aria-expanded="false"
                        class="w-full flex justify-between items-center bg-yellow-200 px-4 py-2 rounded text-sm md:text-base font-semibold focus:outline-none"
                        id="faq5-button" type="button">
                        <span>
                            Bagaimana kebijakan Wi-Fi dan outlet listrik di Dugg Coffee?
                        </span>
                        <i class="fas fa-chevron-right transition-transform duration-300" id="faq5-icon">
                        </i>
                    </button>
                    <div class="hidden bg-yellow-50 px-4 py-2 text-sm md:text-base text-gray-800 rounded-b" id="faq5"
                        role="region" aria-labelledby="faq5-button">
                        Dugg Coffee menyediakan Wi-Fi gratis dan outlet listrik di setiap meja untuk kenyamanan
                        pelanggan.
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-white border-t border-gray-300 mt-20">
        <div
            class="max-w-screen-xl mx-auto px-6 md:px-20 py-12 flex flex-col md:flex-row justify-between space-y-8 md:space-y-0">
            <div class="flex items-center space-x-3">
                <img alt="Dugg Coffee logo in blue and white" class="w-14 h-14" height="60"
                    src="https://storage.googleapis.com/a1aa/image/3bf7a8de-bc06-4cd9-a030-c753d1ac1457.jpg"
                    width="60" />
                <p class="text-sm text-gray-700 max-w-xs">
                    Dugg Coffee, 123 Coffee St, Brewtown, USA
                </p>
            </div>
            <div class="flex flex-col space-y-2 text-sm text-gray-700">
                <p>
                    Phone: (123) 456-7890
                </p>
                <p>
                    Email: info@duggcoffee.com
                </p>
                <p>
                    Hours: Mon-Sun 7am - 9pm
                </p>
            </div>
            <div class="flex items-center space-x-6 text-gray-700 text-sm">
                <span>
                    © 2024 Dugg Coffee
                </span>
                <a class="hover:underline" href="#">
                    Privacy Policy
                </a>
                <a class="hover:underline" href="#">
                    Terms of Service
                </a>
            </div>
        </div>
    </footer>
    <script>
        document.querySelectorAll('section.max-w-3xl button').forEach(button => {
            button.addEventListener('click', () => {
                const expanded = button.getAttribute('aria-expanded') === 'true';
                const controls = button.getAttribute('aria-controls');
                const icon = button.querySelector('i.fas');
                const content = document.getElementById(controls);

                // Close all other answers
                document.querySelectorAll('section.max-w-3xl div[role="region"]').forEach(div => {
                    if (div.id !== controls) {
                        div.classList.add('hidden');
                        const btn = document.getElementById(div.getAttribute('aria-labelledby'));
                        btn.setAttribute('aria-expanded', 'false');
                        const btnIcon = btn.querySelector('i.fas');
                        btnIcon.classList.remove('rotate-90');
                    }
                });

                if (expanded) {
                    button.setAttribute('aria-expanded', 'false');
                    content.classList.add('hidden');
                    icon.classList.remove('rotate-90');
                } else {
                    button.setAttribute('aria-expanded', 'true');
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-90');
                }
            });
        });
    </script>
</body>

</html>