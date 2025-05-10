<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <meta charset="UTF-8" />
  <title>Stock Peralatan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex min-h-screen bg-gray-100 font-sans">
  <!-- Sidebar -->
  <aside class="w-64 bg-[#0b3558] text-white flex flex-col">
    <div class="text-2xl font-semibold p-5 border-b border-white">Logo</div>
    <nav class="flex-1 px-2 py-4 space-y-2">
      <a href="{{ url('stock-peralatan') }}"
        class="flex items-center gap-3 px-4 py-2 bg-[#f5c16c] text-black rounded-r-full font-semibold">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/home.png" alt="icon" class="w-6 h-6" />
        Dashboard
      </a>
      <a href="{{ url('list-orderan') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" alt="icon" />
        List Orderan
      </a>
      <a href="{{ url('orderan-selesai') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/checked.png" class="w-6 h-6" alt="icon" />
        Orderan Selesai
      </a>
    </nav>
  </aside>


  <!-- Main Content -->
  <main class="flex-1 p-8 relative">
    <h1 class="text-2xl font-bold mb-4">Stock Peralatan</h1>

    <!--<button class="mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
      Tambah Peralatan
    </button>-->
    <div class="bg-gray-300 p-4 rounded shadow">
      <table class="w-full table-auto border-collapse border border-black text-center">
        <thead class="bg-gray-400">
          <tr>
            <th class="border border-black px-2 py-2">No</th>
            <th class="border border-black px-2 py-2">Nama Barang</th>
            <th class="border border-black px-2 py-2">Stock</th>
            <th class="border border-black px-2 py-2">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="h-16">
            <td class="border border-black font-bold text-xl">1.</td>
            <td class="border border-black">Kamera</td>
            <td class="border border-black">50</td>
            <td class="border border-black">
              <div class="flex justify-center gap-2">
                <button class="bg-red-600 text-white px-3 py-1 rounded-full hover:bg-red-700 text-sm">Delete</button>
                <button class="bg-green-400 text-white px-3 py-1 rounded-full hover:bg-green-500 text-sm">Ubah</button>
              </div>
            </td>
          </tr>
          <tr class="h-16">
            <td class="border border-black font-bold text-xl">2.</td>
            <td class="border border-black">Speaker</td>
            <td class="border border-black">50</td>
            <td class="border border-black">
              <div class="flex justify-center gap-2">
                <button class="bg-red-600 text-white px-3 py-1 rounded-full hover:bg-red-700 text-sm">Delete</button>
                <button class="bg-green-400 text-white px-3 py-1 rounded-full hover:bg-green-500 text-sm">Ubah</button>
              </div>
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
        </tr>
      @endfor
        </tbody>
      </table>
    </div>
    <!-- Topbar -->
<div class="absolute top-0 right-0 p-6" x-data="{ open: false }">
  <div @click="open = !open" class="cursor-pointer flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow hover:bg-gray-100">
    <img src="https://img.icons8.com/ios-glyphs/30/000000/user.png" class="w-6 h-6" alt="User" />
    <span class="font-semibold text-sm">Admin</span>
    <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </div>

  <!-- Dropdown -->
  <div x-show="open" @click.away="open = false" class="mt-2 w-48 bg-white rounded-md shadow-lg py-2 absolute right-0 z-10">
    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a>
    <form method="POST" action="#">
      @csrf
      <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
    </form>
  </div>
</div>

  </main>
</body>

</html>