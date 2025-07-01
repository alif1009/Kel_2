<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EventAmaze</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black font-sans min-h-screen relative text-black">

    <!-- Background full screen -->
    <div class="fixed inset-0 -z-10">
        <img src="{{ asset('images/Frame 1 (5)[1].png') }}" alt="Background" class="w-full h-full object-cover" />
    </div>

    <!-- Navbar -->
    <header class="w-full flex justify-between items-center px-6 py-4 text-white">
        <!-- Kiri: Logo -->
        <h1 class="text-xl font-bold">EventAmaze</h1>

        <!-- Tengah: Navigasi -->
        <nav class="space-x-6 font-semibold flex items-center">
            <a href="berandaPTN" class="hover:underline">Layanan Kami</a>

            <!-- Dropdown Tempat -->
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

        <!-- Kanan: Profil -->
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

    <!-- Konten Tengah -->
    <main class="flex justify-center items-center py-10 px-4">
        <div class="w-full max-w-2xl bg-gray-200 p-6 rounded shadow text-black">
            <h2 class="text-lg font-bold mb-4">Formulir Panitia</h2>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label class="block font-semibold">Nama Panitia</label>
                    <input type="text" name="nama_panitia"
                        class="w-full border border-black rounded-full px-4 py-2" required>
                </div>

                <div>
                    <label class="block font-semibold">Kategori Seminar</label>
                    <input type="text" name="kategori_seminar"
                        class="w-full border border-black rounded-full px-4 py-2" required>
                </div>
                <div>
                    <label class="block font-semibold">Judul</label>
                    <input type="text" name="judul"
                        class="w-full border border-black rounded-full px-4 py-2" required>
                </div>

                 <div>
                    <label class="block font-semibold">Deskripsi</label>
                    <input type="text" name="Deskripsikan acaramu"
                        class="w-full border border-black rounded-full px-4 py-2" required>
                </div>

                <div>
                    <label class="block font-semibold">Borang Tempat</label>
                    <input type="file" name="Borang_tempat"
                        class="w-full border border-black rounded-full px-4 py-2 bg-gray-300 text-center">
                </div>

                <div>
                    <label class="block font-semibold">TOR</label>
                    <input type="file" name="tor"
                        class="w-full border border-black rounded-full px-4 py-2 bg-gray-300 text-center">
                </div>

                <div>
                    <label class="block font-semibold">Rundown</label>
                    <input type="file" name="rundown"
                        class="w-full border border-black rounded-full px-4 py-2 bg-gray-300 text-center">
                </div>

                <div>
                    <label class="block font-semibold">Waktu</label>
                    <input type="text" name="waktu"
                        class="w-full border border-black rounded-full px-4 py-2" placeholder="Contoh: 10:00 - 12:00">
                </div>

                <div>
                    <label class="block font-semibold">Tanggal</label>
                    <input type="date" name="tanggal"
                        class="w-full border border-black rounded-full px-4 py-2" value="2025-02-21">
                </div>

                <div class="flex justify-between pt-4">
                    <button type="reset"
                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full">Batal</button>
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full">Submit</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>
