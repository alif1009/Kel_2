<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <meta charset="UTF-8" />
  <title>Dashboard Card</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex min-h-screen bg-gray-100 font-sans">
  <!-- Sidebar -->
  <aside class="w-64 bg-[#0b3558] text-white flex flex-col">
    <div class="text-2xl font-semibold p-5 border-b border-white">EventAmaze</div>
    <nav class="flex-1 px-2 py-4 space-y-2">
      <a href="{{ url('dashboardcard') }}"
        class="flex items-center gap-3 px-4 py-2 bg-[#f5c16c] text-black rounded-r-full font-semibold">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/home.png" alt="icon" class="w-6 h-6" />
        Dashboard
      </a>
      <a href="{{ url('konfirmasiacara') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" alt="icon" />
        Konfirmasi Acara
      </a>
      <!-- <a href="{{ url('konfirmasiPTN') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" alt="icon" />
        Konfirmasi Pantia
      </a>-->
      <a href="{{ url('seminarselesai') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/checked.png" class="w-6 h-6" alt="icon" />
        Seminar Selesai
      </a>
    </nav>
  </aside>


  <!-- Main Content -->
  <main class="flex-1 p-8 relative">
    <h1 class="text-2xl font-bold mb-4">Dashboard Card</h1>
    <div x-data="{ openForm: false }" class="relative z-10">
      <!-- Tombol Tambah -->
      <button @click="openForm = true" class="mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Tambah Card
      </button>

      <!-- Overlay dan Form Modal -->
      <div x-show="openForm" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" x-cloak>
        <div @click.outside="openForm = false" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl mx-auto">
          <h2 class="text-lg font-semibold mb-4">Form Tambah Seminar</h2>
          <form enctype="multipart/form-data" method="POST" action="#">
            <!-- CSRF (jika pakai Laravel) -->
            @csrf

            <!-- Kategori Seminar -->
            <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700">Kategori Seminar</label>
              <input type="text" name="kategori"
                class="mt-1 block w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <!-- Judul Seminar -->
            <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700">Judul Seminar</label>
              <input type="text" name="judul"
                class="mt-1 block w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

          <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
              <input type="text" name="Deskripsi"
                class="mt-1 block w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <!-- Tanggal Acara -->
            <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700">Tanggal Acara</label>
              <input type="date" name="tanggal"
                class="mt-1 block w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <!-- Waktu -->
            <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700">Waktu</label>
              <input type="time" name="waktu"
                class="mt-1 block w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            </div>

            <!-- Poster -->
            <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700">Poster</label>
              <input type="file" name="poster" accept="image/*"
                class="mt-1 block w-full text-sm border rounded px-3 py-2" required>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex gap-4 justify-end mt-6">
              <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Tambah</button>
              <button type="button" @click="openForm = false"
                class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="bg-gray-300 p-4 rounded shadow">
      <table class="w-full table-auto border-collapse border border-black text-center">
        <thead class="bg-gray-400">
          <tr>
            <th class="border border-black px-2 py-2">No</th>
            <th class="border border-black px-2 py-2">Kategori Seminar</th>
            <th class="border border-black px-2 py-2">Judul Seminar</th>
            <th class="border border-black px-2 py-2">Tanggal Acara</th>
            <th class="border border-black px-2 py-2">Waktu</th>
            <th class="border border-black px-2 py-2">Poster</th>
            <th class="border border-black px-2 py-2">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="h-16">
            <td class="border border-black font-bold text-xl">1.</td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black">
              <div class="flex justify-center gap-2">
                <button class="bg-red-600 text-white px-3 py-1 rounded-full hover:bg-red-700 text-sm">Delete</button>
                <div x-data="{ openModal:false }" x-cloak>
                  <!-- Tombol Ubah -->
                  <button @click="openModal = true"
                    class="bg-green-400 text-white px-3 py-1 rounded-full hover:bg-green-500 text-sm">
                    Ubah
                  </button>
                  <!-- ===== Modal overlay ===== -->
                  <div x-show="openModal" x-transition.opacity
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
                    <div @click.away="openModal = false" x-transition.scale
                      class="bg-white w-full max-w-lg rounded-lg p-6 shadow-xl relative">
                      <button @click="openModal = false"
                        class="absolute top-2 right-2 text-gray-400 hover:text-gray-700 text-2xl leading-none">
                        &times;
                      </button>
                      @include('updatecard') {{-- file resources/views/updatecard.blade.php --}}
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr class="h-16">
            <td class="border border-black font-bold text-xl"></td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black"></td>
            <td class="border border-black">
            </td>
          </tr>

          <!-- Baris Kosong -->
          @for($i = 0; $i < 5; $i++)
        <tr class="h-16">
        <td class="border border-black">&nbsp;</td>
        <td class="border border-black"></td>
        <td class="border border-black"></td>
        <td class="border border-black"></td>
        <td class="border border-black"></td>
        <td class="border border-black"></td>
        <td class="border border-black"></td>
        </tr>
      @endfor
        </tbody>
      </table>
    </div>
    <!-- Topbar -->
    <div class="absolute top-0 right-0 p-6" x-data="{ open: false }">
      <div @click="open = !open"
        class="cursor-pointer flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow hover:bg-gray-100">
        <img src="https://img.icons8.com/ios-glyphs/30/000000/user.png" class="w-6 h-6" alt="User" />
        <span class="font-semibold text-sm">Admin</span>
        <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </div>

      <!-- Dropdown -->
      <div x-show="open" @click.away="open = false"
        class="mt-2 w-48 bg-white rounded-md shadow-lg py-2 absolute right-0 z-10">
        <a href="{{ route('profile.profilADM') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a>
        <form method="POST" action="#">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
        </form>
      </div>
    </div>

  </main>
</body>

</html>