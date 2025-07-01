<!DOCTYPE html>
<html lang="id">

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta charset="UTF-8">
    <title>Detail Auditorium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.7s ease-out forwards;
        }
    </style>

</head>

<body class="bg-black text-white">

    <!-- Header -->
    <header class="flex justify-between items-center px-6 py-4">
        <h1 class="text-xl font-bold">EventAmaze</h1>
        <nav class="space-x-6 font-semibold flex items-center">
           <a href="{{ route('berandaPTN') }}" class="hover:underline">Layanan Kami</a>

            <!-- Dropdown untuk Tempat -->
            <div x-data="{ open: false }" class="relative inline-block text-left">
                <button @click="open = !open" class="hover:underline flex items-center space-x-1">
                    <span>Tempat</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
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

           <a href="{{ route('seminarPTN') }}" class="hover:underline">Seminar</a>

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
                <a href="{{ route('profile.profil') }}"
                    class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Profile Saya</a>
                <form method="POST" action="#">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Log
                        out</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center min-h-[90vh] flex items-center"
        style="background-image: url('{{ asset('images/auditorium-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10 flex flex-col md:flex-row justify-between w-full px-10 py-10">

            <!-- Keterangan Auditorium -->
            <div class="text-white max-w-2xl py-10">
                <h1 class="text-5xl font-bold mb-4">Auditorium</h1>
                <p class="mb-1">Polteknik Negeri Batam</p>
                <p class="mb-4">Batam, Kepulaun 29439</p>

                <!-- Tombol -->
                <div class="flex gap-4">
                    <a href="{{ url('bikinseminar') }}"
                        class="border border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition">Bikin Acaramu Disini</a>
                    <a href="https://wa.me/6295183128564" target="_blank"
                        class="bg-green-600 px-6 py-2 rounded-full text-white hover:bg-green-700 transition">Chat by
                        Whatsapp</a>
                </div>
            </div>

            <!-- Galeri Gambar -->
            <div class="grid grid-cols-2 gap-2 mt-10 md:mt-0 md:ml-10 max-w-md">
                <img src="https://www.polibatam.ac.id/wp-content/uploads/2021/12/IMG_5048-scaled.jpg"
                    class="rounded-2xl w-90 h-auto object-cover col-span-2 transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-100">

                <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/10/Kuliah-Umum-BI-1.jpg"
                    class="rounded-2xl w-full h-36 object-cover transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-200">

                <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/08/Inagurasi-MABA-2022-scaled.jpg"
                    class="rounded-2xl w-full h-36 object-cover transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-300">
            </div>
        </div>
    </section>
    <!-- Section Detail -->
<section class="bg-white text-gray-700 px-6 py-10">
    <div class="max-w-4xl mx-auto bg-gray-50 p-6 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold mb-4 border-b-2 border-gray-300 pb-2">Detail</h2>
        <p class="mb-4">Berikut Peralatan dan pelayanan yang akan didapatkan dari awal hingga akhir acara seminar:</p>

        <div class="space-y-6">
            <div>
                <h3 class="font-semibold mb-1">Alat Presentasi:</h3>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Laptop/Komputer</li>
                    <li>Proyektor + Layar Proyektor</li>
                    <li>Pointer</li>
                    <li>Kabel Koneksi</li>
                    <li>Remote Presentasi</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-1">Alat Dokumentasi:</h3>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Kamera</li>
                    <li>Tripod</li>
                    <li>Microphone Eksternal</li>
                    <li>Buku Tamu</li>
                    <li>Alat Pencatat</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-1">Perlengkapan Meja Panitia & Registrasi:</h3>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Meja & Kursi Panitia</li>
                    <li>ID Card</li>
                    <li>Map / Folder Materi Seminar</li>
                    <li>Formulis Registrasi</li>
                    <li>Snack Box</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-1">Peserta:</h3>
                <ul class="list-disc list-inside text-gray-600">
                    <li>SnackBox</li>
                </ul>
            </div>
        </div>
    </div>
</section>


</body>

</html>