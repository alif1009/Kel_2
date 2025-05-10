<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Katalog Peralatan</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"  defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        :root {
        --color-clifford: #da373d;
      }
    </style>
</head>

<body class="bg-blue-900 text-white">

    <!-- NAVBAR -->
    <nav class="flex items-center justify-between bg-blue-800 p-4">

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
                    <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Festival Budaya</a>
                    <a href="{{ route('event.bazarpreloved') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Festival Konser</a>
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


    <!-- Grid Card Section -->
    <main class="p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Card Template -->
            <a href="/kamera"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/kamera.jpg') }}" alt="Kamera" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Kamera</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

            <a href="/panggung"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/panggung.jpg') }}" alt="Panggung" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Panggung</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

            <a href="/sound-system"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/soundsistem.jpg') }}" alt="Sound System" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Sound System</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

            <a href="/stand-bazar"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/standbazar.jpg') }}" alt="Stand Bazar" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Stand Bazar</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

            <a href="/tripod"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/tripod.jpg') }}" alt="Tripod" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Tripod</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

            <a href="/lighting"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/lampu.jpg') }}" alt="Lighting" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Lighting</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

            <a href="/tenda"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/tenda.jpeg') }}" alt="Tenda" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Tenda</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

            <a href="/speaker"
                class="bg-white text-black rounded-xl overflow-hidden shadow hover:scale-[1.02] transition">
                <img src="{{ asset('images/speaker.png') }}" alt="Speaker" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Speaker</h2>
                    <p class="text-yellow-600 font-medium mt-1">Rp xx.xx.xx</p>
                    <p class="text-sm text-gray-500"> xx Pax</p>
                </div>
            </a>

        </div>
    </main>

</body>

</html>