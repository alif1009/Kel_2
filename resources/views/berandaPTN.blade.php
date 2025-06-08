<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
     <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventAmaze</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white font-sans min-h-screen relative">

    <!-- Background full screen -->
    <div class="fixed inset-0 -z-10">
        <img src="{{ asset('images/Frame 1 (5)[1].png') }}" alt="Background" class="w-full h-full object-cover" />
    </div>

    <!-- Navbar -->
    <header class="flex justify-between items-center px-6 py-4">
        <h1 class="text-xl font-bold">EventAmaze</h1>
       <nav class="space-x-6 font-semibold flex items-center">
    <a href="berandaPTN" class="hover:underline">Layanan Kami</a>

    <!-- Dropdown untuk Tempat -->
    <div x-data="{ open: false }" class="relative inline-block text-left">
        <button @click="open = !open" class="hover:underline flex items-center space-x-1">
            <span>Tempat</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="open" @click.away="open = false" x-transition
            class="absolute mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
            <div class="py-1 text-black">
                <a href="{{ route('venue.gedungtekno') }}"
                    class="block px-4 py-2 text-sm hover:bg-gray-100">Gedung Tekno</a>
                <a href="{{ route('venue.auditorium') }}"
                    class="block px-4 py-2 text-sm hover:bg-gray-100">Auditorium</a>
            </div>
        </div>
    </div>

    <a href="seminarPTN" class="hover:underline">Seminar</a>
</nav>

        <div x-data="{ open: false }" class="relative">
                <button @click="open = !open"
                    class="flex items-center space-x-2 bg-gray-200 text-black rounded-lg px-4 py-1 font-semibold hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.121 17.804A11.966 11.966 0 0012 20c2.21 0 4.28-.595 6.032-1.62a6.5 6.5 0 10-11.758 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Profile(Panitia)</span>
                </button>
                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg z-50">
                    <a href="{{ route('profile.profilPTN') }}"
                        class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Profile Saya</a>
                    <a href="#" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pengaturan</a>
                    <form method="POST" action="#">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Log out</button>
                    </form>
                </div>
            </div>
    </header>

    <!-- Hero -->
    <section class="text-center mt-20 px-4">
        <h2 class="text-4xl md:text-6xl font-bold leading-tight">Selamat Datang<br>Panitia</h2>
        <a href="{{ route('bikinseminar') }}"
            class="inline-block mt-6 px-6 py-2 bg-gradient-to-r from-blue-700 to-green-600 rounded-full shadow-md hover:scale-105 transition text-white font-semibold text-lg">
            Buat Acara
        </a>
    </section>

    <!-- Layanan Kami -->
    <section id="layanan" class="mt-32 px-6 max-w-6xl mx-auto">
        <h3 class="text-3xl font-bold mb-2"><span class="text-green-400">Layanan</span> Kami</h3>
        <p class="mb-8">Kami memberikan layanan berupa pelayanan pembuatan Event Seminar serta kami menyediakan
            konsultasi dalam pembuatan Event Seminar.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="relative">
                <img src="{{ asset('images/berandamhs.jpg') }}" alt="Event Planning" class="rounded-lg">
                <span class="absolute bottom-4 left-4 text-white text-xl font-bold">Event Planning</span>
            </div>
            <div class="relative">
                <img src="{{ asset('images/berandamhs2.jpg') }}" alt="Event Konsultasi" class="rounded-lg">
                <span class="absolute bottom-4 left-4 text-white text-xl font-bold">Event Konsultasi</span>
            </div>
        </div>

        <!--<div class="flex justify-center mt-10 gap-16">
            <div class="text-center">
                <div class="text-2xl font-bold">150+</div>
                <div>Event Berhasil</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold">100+</div>
                <div>Event Konsultasi</div>
            </div>
        </div>
    </section>-->

    <!-- Tempat -->
    <section id="tempat" class="mt-32 px-6 max-w-6xl mx-auto text-center">
        <h3 class="text-3xl font-bold mb-2">Tempat</h3>
        <p class="mb-8">Kami juga menyediakan beberapa tempat!</p>

        <div class="max-w-6xl mx-auto px-4"> 
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 place-items-center">
            <!-- Tempat 1 -->
            <div
                class="w-[280px] bg-gradient-to-br from-green-800 via-green-900 to-black p-4 rounded-2xl shadow-[0_10px_25px_rgba(0,0,0,0.4)]">
                <img src="{{ asset('images/auditorium-bg.jpg') }}" class="w-full h-[180px] object-cover rounded-md mb-4"
                    alt="Gedung Auditorium">

                <div class="text-white text-xl font-medium leading-snug font-[Comic_Sans_MS] mb-4">
                    Gedung <br> Auditorium
                </div>

                <a href="{{ route('venue.auditorium') }}"
                    class="block w-fit ml-auto px-6 py-2 bg-lime-500 text-white text-lg font-semibold rounded-full shadow hover:bg-lime-600 transition duration-200">
                    Detail
                </a>
            </div>


            <!-- Tempat 2 -->
            <div
                class="w-[280px] bg-gradient-to-br from-green-800 via-green-900 to-black p-4 rounded-2xl shadow-[0_10px_25px_rgba(0,0,0,0.4)]">
                <img src="{{ asset('images/tekno-bg.jpg') }}" class="w-full h-[180px] object-cover rounded-md mb-4"
                    alt="Gedung Auditorium">

                <div class="text-white text-xl font-medium leading-snug font-[Comic_Sans_MS] mb-4">
                    Gedung <br> Tekno
                </div>

                <a href="{{ route('venue.gedungtekno') }}"
                    class="block w-fit ml-auto px-6 py-2 bg-lime-500 text-white text-lg font-semibold rounded-full shadow hover:bg-lime-600 transition duration-200">
                    Detail
                </a>
            </div>
             </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white py-8 mt-32">
        <div class="flex justify-center space-x-6 mb-4">
            <!-- Ikon sosial media -->
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"
                    class="w-6 h-6"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter"
                    class="w-6 h-6"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"
                    class="w-6 h-6"></a>
        </div>

        <div class="text-center text-gray-400 text-sm">
            2025 Your Website. All rights reserved.
            <span class="px-2">|</span>
            <a href="#" class="hover:text-white">Privacy Policy</a>
            <span class="px-2">|</span>
            <a href="#" class="hover:text-white">Terms of Service</a>
        </div>
    </footer>

    <!-- Font Awesome (opsional) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>