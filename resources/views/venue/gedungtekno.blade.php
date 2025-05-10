<!DOCTYPE html>
<html lang="id">

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta charset="UTF-8">
    <title>Detail Gedung Tekno</title>
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
    <header
        class="fixed top-0 left-0 w-full z-50 bg-white/0 backdrop-blur-none text-white px-6 py-4 flex justify-between items-center border-b border-white/20">
        <!-- Logo di kiri -->
        <div class="flex-1">
            <a href="/" class="font-bold hover:text-blue-500 text-2xl">Logo</a>
        </div>

        <div class="flex-1 flex justify-center space-x-8">
            <div class="flex items-center space-x-2">
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
                <a href="{{ route('peralatan') }}" class="flex items-center font-semibold hover:text-blue-500">
                    Peralatan <span class="ml-1">
                </a>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="flex items-center font-semibold hover:text-blue-500">
                    Peralatan <!--<span class="ml-1">▼</span>-->
                </a>
            </div>
            <div class="flex items-center space-x-2">
                <a href="#" class="flex items-center font-semibold hover:text-blue-500">
                    Riwayat pemesanan <!--<span class="ml-1">▼</span>-->
                </a>
            </div>
        </div>


        <div class="flex-1 flex justify-end space-x-4">
<!-- Profil kanan -->
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

        

        <!-- Placeholder kanan -->
        <div class="w-1/3"></div>
    </header>



    <!-- Hero Section -->
    <section class="relative bg-cover bg-center min-h-[90vh] flex items-center"
        style="background-image: url('{{ asset('images/tekno-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10 flex flex-col md:flex-row justify-between w-full px-10 py-10">

            <!-- Keterangan Auditorium -->
            <div class="text-white max-w-2xl py-10">
                <h1 class="text-5xl font-bold mb-4">Gedung Tekno</h1>
                <div class="text-yellow-500 text-2xl font-semibold mb-2 flex items-center gap-2">
                    Rp xxx.xxx
                    <span class="text-white flex items-center ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>9999 Pax
                    </span>
                </div>
                <p class="mb-1">Polteknik Negeri Batam</p>
                <p class="mb-4">Batam, Kepulaun 29439</p>
                <p class="text-yellow-300 mb-6">Tersedia penawaran khusus untuk 50, 100, 200 Pax.<br>Kontak tim kami
                    untuk info lebih lanjut.</p>

                <!-- Tombol -->
                <div class="flex gap-4">
                    <a href="{{ url('pemesanan') }}"
                        class="border border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition">Pesan</a>
                    <a href="https://wa.me/+62 822-8782-5959" target="_blank"
                        class="bg-green-600 px-6 py-2 rounded-full text-white hover:bg-green-700 transition">Chat by
                        Whatsapp</a>
                </div>
            </div>

            <!-- Galeri Gambar -->
            <div class="grid grid-cols-2 gap-2 mt-10 md:mt-0 md:ml-10 max-w-md">
                <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nqjfprIdrqEBz6omMpfpeYahA_BKcnOCQNNK2IfGpYfq455iCUV3Y6LgcFFPm9YtKDe2gQzBCSGQL1KT6nJ3-4yUqwSepPfQdtSc_qITe7i73i-HvwHdEhJWzQA4Cuuv7rQPzLU=s1360-w1360-h1020-rw"
                    class="rounded-2xl w-90 h-auto object-cover col-span-2 transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-100">

                <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrYtaSdrXX3Zz7lzAlzAyKKtXkeK7LY_k7yaweF53ztCXbdyMY00meF5yEgcmUXUR8I_zaLvJPYxsH9qpWoe1OVaAm7OGwJkiJ91KAeU-4r0xFbNEWFwe02v4vwwp0cFTGnvkU=s1360-w1360-h1020-rw"
                    class="rounded-2xl w-full h-36 object-cover transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-200">

                <img src="https://www.polibatam.ac.id/wp-content/uploads/2022/06/Technopreneur-Centre-Polibatam-1-1536x1024.jpg"
                    class="rounded-2xl w-full h-36 object-cover transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-xl opacity-0 animate-fade-in-up delay-300">
            </div>


        </div>
    </section>

</body>

</html>