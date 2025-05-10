<!DOCTYPE html>
<html lang="id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    
<div class="bg-gray-100 min-h-screen">
 <!-- NAVBAR -->
 <nav  class="fixed top-0 left-0 w-full z-50 bg-white/0 backdrop-blur-none text-white px-6 py-4 flex justify-between items-center border-b border-white/20">

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
                <a href="{{ route('event.festivalkonser') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Festival Konser</a>
                <a href="{{ route('event.pameranseni') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pameran Seni</a>
                <a href="{{ route('event.pameranprojek') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pameran Projek</a>
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
            <!--<input type="text" name="query" placeholder="Search...."
                class="border border-gray-300 rounded-lg py-1 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />
            <button type="submit" class="absolute right-2 top-1.5 text-gray-500 hover:text-blue-500">
                🔍
            </button>-->
        </form>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open"
                class="flex items-center space-x-2 bg-gray-200 text-black rounded-lg px-4 py-1 font-semibold hover:bg-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5.121 17.804A11.966 11.966 0 0012 20c2.21 0 4.28-.595 6.032-1.62a6.5 6.5 0 10-11.758 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Profile(Mahasiswa)</span>
            </button>
            <!-- Dropdown Menu -->
            <div x-show="open" @click.away="open = false" x-transition
                class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg z-50">
                <a href="{{ route('profile.profil') }}"
                    class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Profile Saya</a>
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

    <!-- Hero Section -->
    <div class="relative">
        <img src="{{ asset('images/seminar2.jpg') }}" alt="Seminar Header" class="w-full object-cover h-[400px]">
        <div class="absolute top-0 left-0 w-full h-full bg-black/40 flex flex-col justify-center px-8 sm:px-20 text-white">
            <h1 class="text-5xl font-bold mb-1">Seminar</h1>
            <h2 class="text-4xl font-light mb-4">Mentality</h2>
            <p class="text-lg mb-2">Available from</p>
            <p class="text-3xl text-yellow-400 font-semibold mb-6">Rp xxx.xxx</p>
            <div class="flex space-x-4">
                <a href="{{ url('pemesanan') }}" class="border border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition">Pesan</a>
                <a href="https://wa.me/08xxxx" target="_blank"
                   class="bg-green-500 px-6 py-2 rounded-full text-white hover:bg-green-600 transition">
                    Chat by Whatsapp
                </a>
            </div>
        </div>
    </div>

    <!-- Detail Section -->
    <section class="px-6 sm:px-20 py-12">
        <div class="bg-white p-8 rounded-xl shadow-md max-w-3xl mx-auto">
            <h3 class="text-2xl font-bold mb-4">Detail</h3>
            <p class="text-gray-600 text-sm mb-4">
                Berikut Peralatan dan pelayanan yang akan didapatkan dari awal hingga akhir acara seminar :
              </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1">
                <li>Laptop/Komputer</li>
          <li>Proyektor + Layar Proyektor</li>
          <li>Pointer</li>
          <li>Kabel Koneksi</li>
          <li>Remote Presentasi</li>
            </ul>
        </div>
    </section>
</div>

