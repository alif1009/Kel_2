<!DOCTYPE html>
<html lang="id">

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@500&display=swap" rel="stylesheet">

    <!-- Metadata standar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title halaman -->
    <title>Landing Page Event</title>

    <!-- Load Tailwind CSS dari CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans">
    <!-- NAVBAR -->
    <nav class="flex items-center justify-between bg-gray-100 p-4">

        <!-- Logo sebelah kiri -->
        <div class="flex-1">
            <a href="/" class="font-bold hover:text-blue-500 text-2xl">Logo</a>
        </div>

        <!-- Menu navigasi utama di tengah -->
        <div class="flex-1 flex justify-center space-x-8">
            <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                <!-- Trigger Dropdown -->
                <button @click="open = !open" class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                    Kategori Event<span class="ml-1">▼</span>
                </button>
            
                <!-- Dropdown Content -->
                <div
                    x-show="open"
                    @click.away="open = false"
                    x-transition
                    class="absolute top-full mt-2 bg-white border rounded-md shadow-lg w-48 z-50"
                >
                    <a href="" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Seminar</a>
                    <a href="" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Bazar</a>
                    <a href="" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Festival</a>
                    <a href="" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pameran</a>
                </div>
            </div>

            <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                <!-- Trigger Dropdown -->
                <button @click="open = !open"
                    class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                    Tempat <span class="ml-1">▼</span>
                </button>

                <!-- Dropdown Content -->
                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute top-full mt-2 bg-white border rounded-md shadow-lg w-48 z-50">
                    <a href="{{ route('venue.auditorium') }}"
                        class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Auditorium</a>
                    <a href="{{ route('venue.gedungtekno') }}"
                        class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Gedung Tekno</a>
                    <a href="{{ route('venue.lapangan') }}"
                        class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Lapangan</a>
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="flex items-center font-semibold hover:text-blue-500">
                    Peralatan 
                </a>
            </div>
        </div>

        <!-- Tombol Register dan Login di kanan -->
        <div class="flex-1 flex justify-end space-x-4">
            <a href="{{ route('register') }}">
                <button class="border rounded-lg px-4 py-1 font-semibold hover:bg-gray-200">Register</button>
            </a>
            <a href="{{ route('login') }}">
                <button class="bg-black text-white rounded-lg px-4 py-1 font-semibold hover:bg-gray-700">Login</button>
            </a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative">
        <!-- Gambar latar belakang -->
        <img src="https://idebiz.id/wp-content/uploads/2024/01/Event-Organizer-Handal-Pelatihan-Utama-untuk-Kesuksesan.jpg"
            alt="Hero Image" class="w-full h-[600px] object-cover">

        <!-- Teks di atas gambar -->
        <div class="absolute top-20 left-10 text-white">
            <h1 class="text-5xl font-bold mb-2">Hidup Adalah Sebuah Peristiwa</h1>
            <p class="text-2xl">Jadikan Peristiwa Anda Istimewa Bersama Kami</p>
        </div>
    </section>

    <!-- KATEGORI EVENT -->
    <section class="flex p-10 space-x-10">
        <!-- Gambar kategori -->
        <div class="w-1/2">
            <img src="https://idebiz.id/wp-content/uploads/2023/08/Tingkatkan-Kemampuan-EO-Anda.jpg" alt="Kategori"
                class="rounded-xl shadow-lg">
        </div>

        <!-- Deskripsi kategori -->
        <div class="w-1/2">
            <h2 class="text-2xl font-medium mb-4" style="font-family: 'Abhaya Libre', serif;"></h2>
            <h2 class="text-6xl font-bold mb-4" style="font-family: 'Abhaya Libre', serif;">Kategori Event</h2>
            <p class="mb-6 text-4xl" style="font-family: 'Abhaya Libre', serif;">
                Kami menyediakan beberapa kategori event seperti:
            </p>

            <!-- List kategori -->
            <ul class="list-decimal list-inside space-y-3 text-3xl" style="font-family: 'Abhaya Libre', serif;">
                <li>Seminar</li>
                <li>Bazar</li>
                <li>Festival</li>
                <li>Pameran</li>
            </ul>
        </div>
    </section>

    <!-- TEMPAT EVENT -->
    <section class="bg-blue-900 text-white py-12">
        <!-- Judul -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">TEMPAT</h2>
            <p class="text-yellow-300">Cari Tempat Terbaik Untuk Event Kamu!</p>
        </div>

        <!-- Daftar tempat -->
        <div class="flex justify-center space-x-8">
            <!-- Card tempat 1 -->
            <div
                class="bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg opacity-0 translate-y-5 fade-in transition-all duration-700 ease-in-out">
                <img src="{{ asset('images/auditorium-bg.jpg') }}"
                    class="h-40 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Auditorium</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">Politeknik Negeri Batam</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>

            <!-- Card tempat 2 -->
            <div
                class="bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg opacity-0 translate-y-5 fade-in transition-all duration-700 ease-in-out">
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AB5caB8WszpmULhcyz58iT-Pe1ZX0BCZxX8N4Z2VJ-0vzjYO0HNG7yUUe4_ZindpE4KchAOAB_5QkNsc4kks7riIKNZFLf-ZIiWQ2SymyFfrz5tZpgeSacS-Y0ncuKdR3O2d1gOszUPc=s1360-w1360-h1020-rw"
                    class="h-40 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Gedung Tekno</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">Politeknik Negeri Batam</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>

            <!-- Card tempat 3 -->
            <div
                class="bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg opacity-0 translate-y-5 fade-in transition-all duration-700 ease-in-out">
                <img src="https://www.polibatam.ac.id/wp-content/uploads/2023/05/Hardiknas-2023.jpg"
                    class="h-40 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Lapangan</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">Politeknik Negeri Batam</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PERALATAN EVENT -->
    <section class="bg-gradient-to-r from-gray-300 to-gray-100 py-12">
        <!-- Judul -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">PERALATAN</h2>
        </div>

        <!-- Container scroll horizontal -->
        <div class="flex space-x-6 overflow-x-auto scroll-smooth px-10">
            <!-- Card peralatan 1 -->
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="https://vinotiliving.com/cdn/shop/products/Costa_dining_chair_new.jpg?v=1645766195"
                    class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Sound System</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>

            <!-- Card peralatan 2 -->
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('images/meja.jpg') }}" class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Tenda</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>

            <!-- Card peralatan 3 -->
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('images/lampu.jpg') }}" class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Lampu</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>

            <!-- Card peralatan 4 -->
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('images/panggung.jpg') }}" class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Panggung</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>

            <!-- Card peralatan 5 -->
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('images/standbazar.jpg') }}" class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Stand Bazar</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('images/standbazar.jpg') }}" class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Tripod</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('images/standbazar.jpg') }}" class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Speaker</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>
            <div
                class="flex-shrink-0 bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <img src="{{ asset('images/standbazar.jpg') }}" class="h-32 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Kamera</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- FOOTER -->
    <footer class="bg-black text-white py-8">
        <div class="flex justify-center space-x-6 mb-4">
            <!-- Ikon sosial media -->
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"
                    class="w-6 h-6"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter"
                    class="w-6 h-6"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"
                    class="w-6 h-6"></a>
        </div>

        <!-- Hak cipta dan link tambahan -->
        <div class="text-center text-gray-400 text-sm">
            2024 Your Website. All rights reserved.
            <span class="px-2">|</span>
            <a href="#" class="hover:text-white">Privacy Policy</a>
            <span class="px-2">|</span>
            <a href="#" class="hover:text-white">Terms of Service</a>
        </div>
    </footer>

    <!-- SCRIPT: Animasi fade-in saat scroll -->
    <script>
        const faders = document.querySelectorAll('.fade-in');

        const appearOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const appearOnScroll = new IntersectionObserver(function (entries, observer) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.remove('opacity-0', 'translate-y-5');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                observer.unobserve(entry.target);
            });
        }, appearOptions);

        faders.forEach(fader => {
            appearOnScroll.observe(fader);
        });
    </script>
</body>

</html>