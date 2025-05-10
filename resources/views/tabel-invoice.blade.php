<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta charset="UTF-8">
    <title>Tabel Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 font-serif">

<!-- NAVBAR -->
<nav class="flex items-center justify-between bg-blue-800 p-4">

    <!-- Logo sebelah kiri -->
    <div class="flex-1">
       <a href="/" class="text-lg font-semibold text-white">Logo</a>
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
                <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pameran Seni</a>
                <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Pameran Projek</a>
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










    <!-- Tabel -->
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="table-fixed border-collapse w-full bg-blue shadow-md border border-gray-400">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="border border-black px-2 py-2 w-10">No</th>
                        <th class="border border-black px-2 py-2">Nama</th>
                        <th class="border border-black px-2 py-2">Kategori</th>
                        <th class="border border-black px-2 py-2">Tempat</th>
                        <th class="border border-black px-2 py-2">Barang</th>
                        <th class="border border-black px-2 py-2">Status</th>
                        <th class="border border-black px-2 py-2">Total</th>
                        <th class="border border-black px-2 py-2">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black px-2 py-2 text-xl font-bold text-center">1.</td>
                        <td class="border border-black px-2 py-2">Petra</td>
                        <td class="border border-black px-2 py-2">Bazar - Preloved</td>
                        <td class="border border-black px-2 py-2">Auditorium</td>
                        <td class="border border-black px-2 py-2">Kamera</td>
                        <td class="border border-black px-2 py-2">Lunas</td>
                        <td class="border border-black px-2 py-2">Rp.2.00.000</td>
                        <td class="border border-black px-2 py-2">21/12/2015</td>
                    </tr>
                    <!-- Baris tambahan kosong -->
                    @for ($i = 0; $i < 5; $i++)
                    <tr>
                        @for ($j = 0; $j < 8; $j++)
                        <td class="border border-black px-2 py-6">&nbsp;</td>
                        @endfor
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
