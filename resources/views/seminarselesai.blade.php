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
    <div class="text-2xl font-semibold p-5 border-b border-white">EventAmaze</div>

    <nav class="flex-1 px-2 py-4 space-y-2">
      <a href="{{ url('dashboardcard') }}" class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/home.png" alt="icon" class="w-6 h-6" />
        Dashboard
      </a>
      <a href="{{ url('konfirmasiacara') }}" class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" alt="icon" />
        Konfirmasi Acara
      </a>
      <!--<a href="{{ url('konfirmasiPTN') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" alt="icon" />
        Konfirmasi Pantia
      </a>-->
      <a href="{{ url('seminarselesai') }}" class="flex items-center gap-3 px-4 py-2 bg-[#f5c16c] text-black rounded-r-full font-semibold">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/checked.png" class="w-6 h-6" alt="icon" />
        Seminar Selesai
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <h1 class="text-2xl font-bold mb-4">Seminar Selesai</h1>

    <div class="bg-gray-300 p-4 rounded shadow">
      <table class="w-full table-auto border-collapse border border-black text-center text-lg">
        <thead class="bg-gray-400">
          <tr>
            <th class="border border-black px-2 py-2">No</th>
            <th class="border border-black px-2 py-2">Nama Panitia</th>
            <th class="border border-black px-2 py-2">Kategori yg dipilih</th>
            <th class="border border-black px-2 py-2">Judul Seminar</th>
            <th class="border border-black px-2 py-2">Deskripsi</th>
            <th class="border border-black px-2 py-2">Tanggal</th>
          </tr>
        </thead>
        <tbody class="bg-gray-300">
          @foreach ($data as $i => $item)
          <tr>
            <td class="border">{{ $i + 1 }}</td>
            <td class="border">{{ $item->konfirmasiAdmin->acara->user->name ?? '-' }}</td>
            <td class="border">{{ $item->konfirmasiAdmin->acara->kategori_seminar }}</td>
            <td class="border">{{ $item->konfirmasiAdmin->acara->judul }}</td>
            <td class="border">{{ $item->konfirmasiAdmin->acara->deskripsi }}</td>
            <td class="border">{{ $item->konfirmasiAdmin->acara->tanggal }}</td>
          </tr>
          @endforeach
          <!-- Tambahan baris kosong untuk estetika -->
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>