<!DOCTYPE html>
<html lang="id">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    
<div class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
        <div class="text-2xl font-bold">Logo</div>
        <nav class="flex space-x-6">
            <!-- Dropdown Event Category -->
            <div class="relative group">
                <button class="font-semibold hover:text-blue-500 flex items-center">
                    Event Category <span class="ml-1">▼</span>
                </button>
                <div class="absolute z-10 hidden group-hover:block bg-white shadow rounded mt-2">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Seminar</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Bazar</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Festival</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Pameran</a>
                </div>
            </div>

            <!-- Dropdown Tempat -->
            <div class="relative group">
                <button class="font-semibold hover:text-blue-500 flex items-center">
                    Tempat <span class="ml-1">▼</span>
                </button>
                <div class="absolute z-10 hidden group-hover:block bg-white shadow rounded mt-2">
                    <a href="{{ route('venue.auditorium') }}" class="block px-4 py-2 hover:bg-gray-100">Auditorium</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Gedung Tekno</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Lapangan</a>
                </div>
            </div>

            <div class="font-semibold hover:text-blue-500">Peralatan</div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="relative">
        <img src="{{ asset('images/bazar-header.jpg') }}" alt="Bazar Header" class="w-full object-cover h-[450px]">
        <div class="absolute top-0 left-0 w-full h-full bg-black/40 flex flex-col justify-center px-8 sm:px-20 text-white">
            <h1 class="text-5xl font-bold mb-1">Bazar</h1>
            <h2 class="text-4xl font-light mb-4">Preloved</h2>
            <p class="text-lg mb-2">Available from</p>
            <p class="text-3xl text-yellow-400 font-semibold mb-6">Rp xxx.xxx</p>
            <div class="flex space-x-4">
                <a href="#" class="border border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition">Pesan</a>
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
            <p class="text-gray-700 mb-4">
                Berikut peralatan dan pelayanan yang akan didapatkan dari awal hingga akhir acara bazar:
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-1">
                <li>Meja & Rak Display</li>
                <li>Gantungan Baju & Hanger</li>
                <li>Kursi</li>
                <li>Tenda atau Kanopi</li>
                <li>Label Tag</li>
                <li>Kantong Sampah</li>
                <li>Cermin berdiri</li>
                <li>Lampu Tambahan</li>
                <li>Kasir Portable</li>
                <li>QR Code</li>
                <li>Speaker</li>
                <li>ID Card</li>
            </ul>
        </div>
    </section>
</div>
@endsection
