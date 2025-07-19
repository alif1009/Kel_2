<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Konfirmasi Acara</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<body class="flex min-h-screen bg-gray-100 font-sans" x-data="{ openAlasan: null }">

  <!-- Sidebar -->
  <aside class="w-64 bg-[#0b3558] text-white flex flex-col">
    <div class="text-2xl font-semibold p-5 border-b border-white">EventAmaze</div>

    <nav class="flex-1 px-2 py-4 space-y-2">
      <a href="{{ url('dashboardcard') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/home.png" class="w-6 h-6" />
        Dashboard
      </a>
      <a href="{{ url('konfirmasiacara') }}"
        class="flex items-center gap-3 px-4 py-2 bg-[#f5c16c] text-black rounded-r-full font-semibold">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" />
        Konfirmasi Acara
      </a>
      <a href="{{ url('seminarselesai') }}"
        class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/checked.png" class="w-6 h-6" />
        Seminar Selesai
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <h1 class="text-2xl font-bold mb-4">Konfirmasi Acara</h1>

    <div class="bg-gray-300 p-4 rounded shadow">
      <table class="w-full table-auto border-collapse border border-black text-center text-lg">
        <thead class="bg-gray-400">
          <tr>
            <th class="border border-black px-2 py-2">No</th>
            <th class="border border-black px-2 py-2">Nama Panitia</th>
            <th class="border border-black px-2 py-2">Kategori Seminar</th>
            <th class="border border-black px-2 py-2">Judul</th>
            <th class="border border-black px-2 py-2">Deskripsi</th>
            <th class="border border-black px-2 py-2">TOR</th>
            <th class="border border-black px-2 py-2">Rundown</th>
            <th class="border border-black px-2 py-2">Borang Tempat</th>
            <th class="border border-black px-2 py-2">Waktu</th>
            <th class="border border-black px-2 py-2">Tanggal</th>
            <th class="border border-black px-2 py-2">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-gray-300">
          @forelse ($data as $i => $item)
          <tr>
            <td class="border">{{ $i + 1 }}</td>
            <td class="border">
              {{ $item->user->name ?? '-' }} {{-- Ambil dari user --}}
            </td>
            <td class="border">{{ $item->kategori_seminar }}</td>
            <td class="border">{{ $item->judul }}</td>
            <td class="border">{{ $item->deskripsi }}</td>

            <td class="border">
              @if ($item->tor)
              <a href="{{ asset('storage/' . $item->tor) }}" download class="text-blue-600 underline">Download</a>
              @else - @endif
            </td>

            <td class="border">
              @if ($item->rundown)
              <a href="{{ asset('storage/' . $item->rundown) }}" download class="text-blue-600 underline">Download</a>
              @else - @endif
            </td>

            <td class="border">
              @if ($item->borang_tempat)
              <a href="{{ asset('storage/' . $item->borang_tempat) }}" download class="text-blue-600 underline">Download</a>
              @else - @endif
            </td>

            <td class="border">{{ $item->waktu }}</td>
            <td class="border">{{ $item->tanggal }}</td>
            <td class="border">
              @php $status = optional($item->konfirmasi)->status; @endphp

              @if ($status == null)
              <!-- Tombol Konfirmasi -->
              <form action="{{ route('acara.konfirmasi', $item->id) }}" method="POST" class="inline">
                @csrf @method('PUT')
                <button class="bg-green-500 text-white px-3 py-1 rounded-full">Konfirmasi</button>
              </form>

              <!-- Tombol Tolak (Trigger Popup) -->
              <button
                @click="openAlasan = {{ $item->id }}"
                class="bg-red-600 text-white px-3 py-1 rounded-full">
                Tolak
              </button>

              <!-- Popup Input Alasan Penolakan -->
              <div
                x-show="openAlasan === {{ $item->id }}"
                class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50"
                x-transition>
                <div class="bg-white p-6 rounded-lg shadow-lg w-[350px]">
                  <h2 class="text-lg font-bold mb-3">Alasan Penolakan</h2>
                  <form action="{{ route('acara.tolak', $item->id) }}" method="POST">
                    @csrf @method('PUT')
                    <textarea name="alasan" rows="3" class="w-full p-2 border border-gray-300 rounded mb-4" placeholder="Contoh: Dokumen kurang lengkap" required></textarea>
                    <div class="flex justify-end gap-2">
                      <button type="button" @click="openAlasan = null" class="px-3 py-1 bg-gray-300 rounded">Batal</button>
                      <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded">Kirim</button>
                    </div>
                  </form>
                </div>
              </div>

              @elseif ($status == 'diterima')
              <span class="text-green-700 font-semibold">Terkonfirmasi</span>
              @elseif ($status == 'ditolak')
              <span class="text-red-700 font-semibold">Ditolak</span>
              <br>
              <small class="text-gray-700">Alasan: {{ $item->konfirmasi->alasan }}</small>
              @endif
            </td>
          </tr> <!-- ← Ini penutup baris TR -->

          @empty
          <tr>
            <td colspan="11" class="border py-4 text-center text-gray-600">Belum ada data acara.</td>
          </tr>
          @endforelse

        </tbody>
      </table>
    </div>
  </main>
</body>

</html>