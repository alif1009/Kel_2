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
                <button @click="open = !open"
                    class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                    Kategori Event<span class="ml-1">▼</span>
                </button>

                <!-- Dropdown Content -->
                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute top-full mt-2 bg-white border rounded-md shadow-lg w-48 z-50">
                    <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Bazar Preloved</a>
                    <a href="{{ route('event.bazarmakanan') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Bazar Makanan</a>
                    <a href="{{ route('event.seminarmentality') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Seminar Mentality</a>
                    <a href="{{ route('event.seminarinformatika') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Seminar Informatika</a>
                    <a href="{{ route('event.festivalbudaya') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Festival Budaya</a>
                    <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Festival Konser</a>
                    <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pameran Seni</a>
                    <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pameran Projek</a>
                </div>
            </div>

            <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                <!-- Trigger Dropdown -->
                <button @click="open = !open"
                    class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                    Tempat  <span class="ml-1">▼</span>
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
                <a href="{{ route('peralatan') }}" class="flex items-center font-semibold hover:text-blue-500">
                    Peralatan
                </a>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="flex items-center font-semibold hover:text-blue-500">
                    Riwayat pemesanan
                </a>
            </div>
        </div>

        <!-- Tombol Register dan Login di kanan -->
        <div class="flex-1 flex justify-end space-x-4">
             <!-- Search Bar -->
    <form action="#" method="GET" class="relative">
        <input type="text" name="query" placeholder="Search...." 
               class="border border-gray-300 rounded-lg py-1 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        <button type="submit" class="absolute right-2 top-1.5 text-gray-500 hover:text-blue-500">
            🔍
        </button>
    </form>
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open"
            class="flex items-center space-x-2 bg-gray-200 text-black rounded-lg px-4 py-1 font-semibold hover:bg-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A11.966 11.966 0 0012 20c2.21 0 4.28-.595 6.032-1.62a6.5 6.5 0 10-11.758 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span>Profile(Mahasiswa)</span>
        </button>
        <!-- Dropdown Menu -->
    <div x-show="open" @click.away="open = false" x-transition
    class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg z-50">
    <a href="{{ route('profile.profil') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Profile Saya</a>
    <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pengaturan</a>
    <form method="POST" action="#">
        @csrf
        <button type="submit"
            class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Log out</button>
    </form>
</div>
</div>
    </a>
        </div>
    </nav>

<!-- HERO SECTION -->
<section class="relative overflow-hidden">
    <!-- Slider wrapper -->
    <div id="heroSlider" class="flex transition-transform duration-700 ease-in-out w-[400%]">
        <!-- Slide 1 -->
        <div class="w-full flex-shrink-0 relative">
            <img src="https://idebiz.id/wp-content/uploads/2024/01/Event-Organizer-Handal-Pelatihan-Utama-untuk-Kesuksesan.jpg"
                alt="Slide 1" class="w-full h-[600px] object-cover">
            <div class="absolute top-20 left-10 text-white">
                <h1 class="text-5xl font-bold mb-2">Hidup Adalah Sebuah Peristiwa</h1>
                <p class="text-2xl">Jadikan Peristiwa Anda Istimewa Bersama Kami</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="w-full flex-shrink-0 relative">
            <img src="https://source.unsplash.com/1600x600/?conference,event" alt="Slide 2"
                class="w-full h-[600px] object-cover">
            <div class="absolute top-20 left-10 text-white">
                <h1 class="text-5xl font-bold mb-2">Ruang Inspirasi</h1>
                <p class="text-2xl">Seminar & Workshop Profesional</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="w-full flex-shrink-0 relative">
            <img src="https://source.unsplash.com/1600x600/?festival,crowd" alt="Slide 3"
                class="w-full h-[600px] object-cover">
            <div class="absolute top-20 left-10 text-white">
                <h1 class="text-5xl font-bold mb-2">Festival Meriah</h1>
                <p class="text-2xl">Rasakan Euforia Bersama Kami</p>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="w-full flex-shrink-0 relative">
            <img src="{{ asset('images/pameran 12.jpg') }}" alt="Slide 4"
                class="w-full h-[600px] object-cover">
            <div class="absolute top-20 left-10 text-white">
                <h1 class="text-5xl font-bold mb-2">Pameran Berkualitas</h1>
                <p class="text-2xl">Wujudkan Acara Impian Anda</p>
            </div>
        </div>
    </div>

    <!-- Dot Navigasi -->
    <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
        <button onclick="goToSlide(0)" class="w-3 h-3 bg-white rounded-full"></button>
        <button onclick="goToSlide(1)" class="w-3 h-3 bg-white/50 rounded-full"></button>
        <button onclick="goToSlide(2)" class="w-3 h-3 bg-white/50 rounded-full"></button>
        <button onclick="goToSlide(3)" class="w-3 h-3 bg-white/50 rounded-full"></button>
    </div>
</section>

<!-- Script -->
<script>
    let currentSlide = 0;
    const totalSlides = 4;
    const slider = document.getElementById("heroSlider");

    function goToSlide(index) {
        currentSlide = index;
        slider.style.transform = `translateX(-${index * 100}%)`;
        updateDots();
    }

    function updateDots() {
        const dots = document.querySelectorAll("button[onclick^='goToSlide']");
        dots.forEach((dot, idx) => {
            dot.classList.toggle("bg-white", idx === currentSlide);
            dot.classList.toggle("bg-white/50", idx !== currentSlide);
        });
    }

    // Auto slide every 6 seconds
    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        goToSlide(currentSlide);
    }, 6000);
</script>



    <!-- SEMINAR SECTION -->
    <section class="w-full bg-white p-20 relative overflow-hidden">
        <!-- Background kiri -->
        <div class="absolute left-0 top-0 bottom-0 w-1/2 bg-gradient-to-r from-white to-transparent z-0">
            <img src="{{ asset('images/seminar.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-60">
        </div>

        <div class="relative z-10 flex flex-col md:flex-row items-center">
            <!-- Teks dan Deskripsi -->
            <div class="md:w-1/2 mb-10 md:mb-0 px-6">
                <h2 class="text-5xl font-bold mb-3">Seminar</h2>
                <p class="text-lg text-gray-800 mb-6">Kami menyediakan beberapa kategori seminar seperti:</p>
            </div>

            <!-- Kartu Seminar -->
            <div class="md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-6 px-6">
                <!-- Kartu 1 -->
                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ asset('images/seminar2.jpg') }}" alt="Seminar Informatika"
                        class="h-48 w-full object-cover">
                    <div class="bg-[#062952] text-white p-4">
                        <h4 class="text-lg font-semibold">Seminar Informatika</h4>
                        <p class="text-yellow-400">Rp xx.xx.xx</p>
                    </div>
                </div>

                <!-- Kartu 2 -->
                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ asset('images/seminar3.jpg') }}" alt="Seminar Mentality"
                        class="h-48 w-full object-cover">
                    <div class="bg-[#062952] text-white p-4">
                        <h4 class="text-lg font-semibold">Seminar Mentality</h4>
                        <p class="text-yellow-400">Rp xx.xx.xx</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bazar -->
    <section class="bg-blue-900 text-white py-12 relative overflow-hidden">
        <!-- Background di belakang tulisan BAZAR -->
        <img src="images/bazar.jpg" class="absolute inset-0 w-full h-full object-cover opacity-30"
            alt="Background Bazar">
        <!-- Judul -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">BAZAR</h2>
            <p class="text-yellow-300">Kami meyediakan beberapa kategori Bazar seperti berikut:</p>
        </div>

        <!--  festival -->
        <div class="flex justify-center space-x-8">
            <!-- Card festival 1 -->
            <div
                class="bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg opacity-0 translate-y-5 fade-in transition-all duration-700 ease-in-out">
                <img src="{{ asset('images/prelove.png') }}" class="h-40 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Bazar Preloved</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">Menjual barang-barang bekas dan antik seperti baju, celana, jam,
                        DLL</p>
                    <p class="text-sm text-gray-500">👤 00 Stand</p>
                </div>
            </div>

            <!-- Card festial 2 -->
            <div
                class="bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg opacity-0 translate-y-5 fade-in transition-all duration-700 ease-in-out">
                <img src="{{ asset('images/makanan.jpg') }}" class="h-40 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Bazar Makanan</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">Menjual berbagai makan dan minuman</p>
                    <p class="text-sm text-gray-500">👤 00 Stand</p>
                </div>
            </div>

        </div>
    </section>

    <!-- SEMINAR SECTION -->
    <section class="w-full bg-white p-20 relative overflow-hidden">
        <!-- Background kanan -->
        <div class="absolute right-0 top-0 bottom-0 w-1/2 bg-gradient-to-l from-transparent to-white z-0">
            <img src="{{ asset('images/festivalBG.jpg') }}" alt="Background"
                class="w-full h-full object-cover opacity-60">
        </div>

        <div class="relative z-10 flex flex-col md:flex-row items-center">
            <!-- Kartu Seminar (Kiri) -->
            <div class="md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-6 px-6 order-1 md:order-none">
                <!-- Kartu 1 -->
                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ asset('images/konser.jpg') }}" alt="Festival Konser" class="h-48 w-full object-cover">
                    <div class="bg-[#062952] text-white p-4">
                        <h4 class="text-lg font-semibold">Festival Konser</h4>
                        <p class="text-yellow-400">Rp xx.xx.xx</p>
                    </div>
                </div>

                <!-- Kartu 2 -->
                <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                    <img src="{{ asset('images/budaya.jpg') }}" alt="Festival Budaya" class="h-48 w-full object-cover">
                    <div class="bg-[#062952] text-white p-4">
                        <h4 class="text-lg font-semibold">Festival Budaya</h4>
                        <p class="text-yellow-400">Rp xx.xx.xx</p>
                    </div>
                </div>
            </div>

            <!-- Teks dan Deskripsi (Kanan) -->
            <div class="md:w-1/2 mb-10 md:mb-0 px-6 order-2">
                <h2 class="text-5xl font-bold mb-3">Festival</h2>
                <p class="text-lg text-gray-800 mb-6">Kami menyediakan beberapa kategori Festival seperti</p>
            </div>
        </div>
    </section>


    <<section class="relative bg-blue-900 text-white py-12 overflow-hidden">
        <!-- Background Gambar -->
        <img src="{{ asset('images/BGpameran.jpg') }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-30 z-0" 
             alt="Background Pameran">
        <!-- Judul -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">Pameran</h2>
            <p class="text-yellow-300">Ada beberapa kategori pameran yang dapat anda pilih</p>
        </div>

        <!-- Daftar pameran -->
        <div class="flex justify-center space-x-8">
            <!-- Card tempat 1 -->
            <div
                class="bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg opacity-0 translate-y-5 fade-in transition-all duration-700 ease-in-out">
                <img src="{{ asset('images/pameran2.jpg') }}" class="h-40 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Pmaeran Seni</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">Politeknik Negeri Batam</p>
                    <p class="text-sm text-gray-500">👤 00 Pax</p>
                </div>
            </div>

            <!-- Card pameran 2 -->
            <div
                class="bg-white text-black rounded-xl overflow-hidden w-60 shadow-lg opacity-0 translate-y-5 fade-in transition-all duration-700 ease-in-out">
                <img src="{{ asset('images/pameran3.jpg') }}"
                    class="h-40 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-bold">Pamaeran Projek</h3>
                    <p>Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500">Politeknik Negeri Batam</p>
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