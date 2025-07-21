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
        <a href="/" class="flex items-center space-x-2 h-[185px]">
    <img src="{{ asset('images/logonegro[1].png') }}" alt="Logo" class="h-full object-contain max-h-[185px]">
</a>
        <nav class="space-x-6 font-semibold flex items-center">
            <a href="#layanan" class="hover:underline">Layanan Kami</a>

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

            <a href="seminarPTN" class="hover:underline">Seminar</a>
        </nav>

        <!-- Wrapper notifikasi & profile -->
        <div class="flex items-center space-x-4">

            <!-- Notifikasi Lonceng -->
            <div x-data="{ openNotif: false, notifCleared: false }" class="relative">

                <button @click="openNotif = !openNotif; markAsRead(); notifCleared = true"
                    class="relative focus:outline-none">


                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hover:text-yellow-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 01-6 0v-1m6 0H9" />
                    </svg>
                    @if ($unreadCount > 0)
                        <span x-show="!notifCleared"
                            class="absolute -top-1 -right-1 bg-red-600 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full ring-2 ring-white">
                            {{ $unreadCount }}
                        </span>
                    @endif



                </button>

                <!-- Dropdown Isi Notifikasi -->
                <div x-show="openNotif" @click.away="openNotif = false" x-transition
                    class="absolute right-0 mt-2 w-80 bg-white text-black rounded-md shadow-lg z-50 max-h-64 overflow-y-auto">
                    <div class="p-3 border-b font-semibold text-gray-800">Notifikasi</div>
                    <ul class="divide-y divide-gray-200">
                        @forelse ($notifikasi as $notif)
                            <li
                                class="px-4 py-3 flex items-start gap-3 {{ $notif->status === 'diterima' ? 'bg-green-50 hover:bg-green-100' : 'bg-red-50 hover:bg-red-100' }}">
                                <div class="mt-1">
                                    @if ($notif->status === 'diterima')
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    @endif
                                </div>
                                <div class="text-sm text-gray-800">
                                    <div class="font-semibold">Acara "{{ $notif->acara->judul ?? 'Acara' }}"</div>
                                    <div class="text-xs mt-1">
                                        Status:
                                        <span
                                            class="font-medium {{ $notif->status === 'diterima' ? 'text-green-700' : 'text-red-700' }}">
                                            {{ $notif->status === 'diterima' ? 'Disetujui' : 'Ditolak' }}
                                        </span>
                                    </div>
                                    @if ($notif->status === 'ditolak' && $notif->alasan)
                                        <div class="text-xs text-gray-600 italic mt-1">Alasan: {{ $notif->alasan }}</div>
                                    @endif
                                </div>
                            </li>
                        @empty
                            <li class="px-4 py-3 text-sm text-gray-500 text-center">Belum ada notifikasi.</li>
                        @endforelse
                    </ul>
                </div>

            </div>

            <!-- Dropdown Profile -->
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
                    <form method="POST" action="{{ route('logout') }}">
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
        <h3 class="text-3xl font-bold mb-2 text-center">
            <span class="text-white-400">Layanan</span> Kami
        </h3>
        <p class="mb-8 text-center">Kami memberikan layanan berupa pelayanan pembuatan Event Seminar serta kami
            menyediakan
            konsultasi dalam pembuatan Event Seminar.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 px-4">
            <!-- Kartu 1 -->
            <a href="{{ url('/layanan/planning') }}" class="block group">
                <div
                    class="relative overflow-hidden rounded-xl shadow-lg transition-transform transform group-hover:scale-105">
                    <img src="{{ asset('images/berandamhs.jpg') }}" alt="Perencanaan Seminar"
                        class="w-full h-60 object-cover" />
                    <span class="absolute bottom-0 left-0 w-full px-4 py-2 text-white text-lg font-semibold">
                        Event Planning
                    </span>
                </div>
            </a>

            <!-- Kartu 2 -->
            <a href="{{ url('/layanan/konsultasi') }}" class="block group">
                <div
                    class="relative overflow-hidden rounded-xl shadow-lg transition-transform transform group-hover:scale-105">
                    <img src="{{ asset('images/berandamhs2.jpg') }}" alt="Konsultasi Seminar"
                        class="w-full h-60 object-cover" />
                    <span class="absolute bottom-0 left-0 w-full px-4 py-2 text-white text-lg font-semibold">
                        Event Konsultasi
                    </span>
                </div>
            </a>
        </div>
    </section>

    <!-- Tempat -->
    <section id="tempat" class="mt-32 px-6 max-w-6xl mx-auto text-center">
        <h3 class="text-3xl font-bold mb-2">Tempat</h3>
        <p class="mb-8">Kami juga menyediakan beberapa tempat!</p>

        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 place-items-center">
                <!-- Tempat 1 -->
                <div
                    class="w-[280px] bg-gradient-to-br from-green-800 via-green-900 to-black p-4 rounded-2xl shadow-[0_10px_25px_rgba(0,0,0,0.4)]">
                    <img src="{{ asset('images/auditorium-bg.jpg') }}"
                        class="w-full h-[180px] object-cover rounded-md mb-4" alt="Gedung Auditorium">

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
            <a href="https://www.instagram.com/g.viantino/"><img
                    src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram" class="w-6 h-6"></a>
            <a href="https://wa.me/6287730217133" target="_blank" rel="noopener noreferrer">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" class="w-6 h-6"></a>

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

    <!-- Fungsi markAsRead -->
    <script>
        function markAsRead() {
            fetch('{{ route('notifikasi.baca') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });
        }
    </script>
</body>

</html>