<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="id">

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Link ke Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">

    <!-- Metadata standar -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title halaman -->
    <title>Landing Page Event</title>

    <!-- Load Tailwind CSS dari CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        katibeh: ['Katibeh', 'cursive']
                    }
                }
            }
        }
    </script>
</head>

<body class="font-katibeh text-2xl">
    <!-- NAVBAR -->
    <nav class="flex items-center justify-between bg-gray-100 p-4">

        <!-- Logo sebelah kiri -->
        <div class="flex-1">
            <a href="{{ route('beranda') }}" class="font-bold hover:text-blue-500 text-2xl">EventAmaze</a>
        </div>

        <!-- Menu navigasi utama di tengah -->
        <div class="flex-1 flex justify-center space-x-8">
            <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                <!-- Trigger Dropdown -->
                <button @click="open = !open"
                    class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                    Acara Seminar <!--<span class="ml-1">▼</span>-->
                </button>

                <!-- Dropdown Content -->

            </div>

            <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                <!-- Trigger Dropdown -->
                <button @click="open = !open"
                    class="flex items-center font-semibold hover:text-blue-500 focus:outline-none">
                    Tempat <!--<span class="ml-1">▼</span>-->
                </button>

                <!-- Dropdown Content -->

            </div>
            <div class="flex items-center space-x-2">
                <a href="" class="flex items-center font-semibold hover:text-blue-500">
                    Panitia
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
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-2xl bg-gray-200 p-6 rounded shadow">
        <h2 class="text-lg font-bold mb-4">Formulir Panitia</h2>
        
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
            {{-- CSRF untuk Laravel jika actionnya ke route sebenarnya --}}
            @csrf

            <div>
                <label class="block font-semibold">Nama Panitia</label>
                <input type="text" name="nama_panitia" class="w-full border border-black rounded-full px-4 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Kategori Seminar</label>
                <input type="text" name="kategori_seminar" class="w-full border border-black rounded-full px-4 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Judul</label>
                <input type="text" name="judul" class="w-full border border-black rounded-full px-4 py-2" required>
            </div>

            <div>
                <label class="block font-semibold">Surat izin Tempat</label>
                <input type="file" name="surat_izin_tempat" class="w-full border border-black rounded-full px-4 py-2 bg-gray-300 text-center">
            </div>

            <div>
                <label class="block font-semibold">TOR</label>
                <input type="file" name="tor" class="w-full border border-black rounded-full px-4 py-2 bg-gray-300 text-center">
            </div>

            <div>
                <label class="block font-semibold">Rundown</label>
                <input type="file" name="rundown" class="w-full border border-black rounded-full px-4 py-2 bg-gray-300 text-center">
            </div>

            <div>
                <label class="block font-semibold">Waktu</label>
                <input type="text" name="waktu" class="w-full border border-black rounded-full px-4 py-2" placeholder="Contoh: 10:00 - 12:00">
            </div>

            <div>
                <label class="block font-semibold">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border border-black rounded-full px-4 py-2" value="2025-02-21">
            </div>

            <div class="flex justify-between pt-4">
                <button type="reset" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full">Batal</button>
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
