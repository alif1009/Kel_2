<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventAmaze</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white font-sans min-h-screen flex flex-col relative overflow-x-hidden overflow-y-auto">

    <!-- Background full screen -->
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="{{ asset('images/Frame 1 (5)[1].png') }}" alt="Background" class="w-full h-full object-cover" />
    </div>

    <main class="flex-grow">
        <!-- Navbar -->
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
                <a href="{{ route('profile.profilPTNbaru') }}"
                    class="block px-4 py-2 text-sm text-black hover:bg-gray-100">Profile Saya</a>
                <form method="POST" action="#">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Log
                        out</button>
                </form>
            </div>
        </div>
    </header>

        <!-- Data Panitia -->
        <section class="mt-32 px-6 max-w-6xl mx-auto">
            <h3 class="text-3xl font-bold mb-6 text-center text-white">Data Penonton</h3>
            <div class="overflow-x-auto">
                <table class="w-full border border-white text-white text-left text-lg shadow-lg">
                    <thead class="bg-gradient-to-r from-blue-900 via-black to-green-900 text-white">
                        <tr>
                            <th class="border px-6 py-4 font-medium">No</th>
                            <th class="border px-6 py-4 font-medium">Nama</th>
                            <th class="border px-6 py-4 font-medium">No. HP</th>
                            <th class="border px-6 py-4 font-medium">Email</th>
                            <th class="border px-6 py-4 font-medium">Jurusan</th>
                            <th class="border px-6 py-4 font-medium">Seminar Yang Di ikuti</th>
                            <th class="border px-6 py-4 font-medium">KTM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gradient-to-r from-blue-900 via-black to-green-900">
                            <td class="border px-6 py-4 text-2xl font-bold">1.</td>
                            <td class="border px-6 py-4">Gilly Viantino</td>
                            <td class="border px-6 py-4">08123456789</td>
                            <td class="border px-6 py-4">gillyganteng@gmail.com</td>
                            <td class="border px-6 py-4">Teknik Informatika</td>
                            <td class="border px-6 py-4">Penitngnya menjaga kesehatan</td>
                            <td class="border px-6 py-4">Foto KTM</td>
                        </tr>
                        <tr class="bg-gradient-to-r from-blue-900 via-black to-green-900">
                            <td class="border px-6 py-4 text-2xl font-bold">2.</td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                        </tr>
                        <tr class="bg-gradient-to-r from-blue-900 via-black to-green-900">
                            <td class="border px-6 py-4 text-2xl font-bold">2.</td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                        </tr>
                        <tr class="bg-gradient-to-r from-blue-900 via-black to-green-900">
                            <td class="border px-6 py-4 text-2xl font-bold">3.</td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                        </tr>
                        <tr class="bg-gradient-to-r from-blue-900 via-black to-green-900">
                            <td class="border px-6 py-4 text-2xl font-bold">4.</td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                        </tr>
                        <tr class="bg-gradient-to-r from-blue-900 via-black to-green-900">
                            <td class="border px-6 py-4 text-2xl font-bold">5.</td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                            <td class="border px-6 py-4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-white py-6 px-4 text-center">
        <h3 class="text-lg font-bold mb-2">EventAmaze</h3>
        <div class="flex justify-center space-x-4 mb-2">
            <a href="https://www.instagram.com/ramdhani_.02/"><img src="https://img.icons8.com/ios-filled/25/ffffff/instagram-new.png" /></a>
           <a href="https://wa.me/6287730217133"target="_blank"rel="noopener noreferrer">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png"alt="WhatsApp" class="w-6 h-6"></a>
        </div>
        <p class="text-sm">&copy; 2025 Your Website. All rights reserved. |
            <a href="#" class="underline">Privacy Policy</a> |
            <a href="#" class="underline">Terms of Service</a>
        </p>
    </footer>

</body>

</html>
