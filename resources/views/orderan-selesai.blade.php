<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Orderan Selesai</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen bg-gray-100 font-sans">

  <!-- Sidebar -->
  <aside class="w-64 bg-[#0b3558] text-white flex flex-col">
    <div class="text-2xl font-semibold p-5 border-b border-white">Logo</div>

    <nav class="flex-1 px-2 py-4 space-y-2">
      <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/home.png" alt="icon" class="w-6 h-6" />
        Dashboard
      </a>
      <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" alt="icon" />
        List Orderan
      </a>
      <a href="#" class="flex items-center gap-3 px-4 py-2 bg-[#f5c16c] text-black rounded-r-full font-semibold">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/checked.png" class="w-6 h-6" alt="icon" />
        Orderan Selesai
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <h1 class="text-2xl font-bold mb-4">Orderan Selesai</h1>

    <div class="bg-gray-300 p-4 rounded shadow">
      <table class="w-full table-auto border-collapse border border-black text-center text-lg">
        <thead class="bg-gray-400">
          <tr>
            <th class="border border-black px-2 py-2">No</th>
            <th class="border border-black px-2 py-2">Nama</th>
            <th class="border border-black px-2 py-2">Kategori yg dipilih</th>
            <th class="border border-black px-2 py-2">Tempat</th>
            <th class="border border-black px-2 py-2">Perlatan</th>
            <th class="border border-black px-2 py-2">Status Pembayaran</th>
          </tr>
        </thead>
        <tbody class="bg-gray-300">
          <tr class="h-16">
            <td class="border border-black font-bold text-xl">1.</td>
            <td class="border border-black">Putri</td>
            <td class="border border-black">Seminar</td>
            <td class="border border-black">1</td>
            <td class="border border-black">Kamera</td>
            <td class="border border-black"></td>
          </tr>

          <!-- Tambahan baris kosong untuk estetika -->
          @for ($i = 0; $i < 4; $i++)
          <tr class="h-16">
            <td class="border border-black">&nbsp;</td>
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
  </main>
</body>
</html>
