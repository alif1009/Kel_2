<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <meta charset="UTF-8" />
  <title>Dashboard Card</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body x-data="{ dropdownOpen: false, modalOpen: null }"
      :class="{ 'overflow-hidden': modalOpen !== null }"
      class="flex min-h-screen bg-gray-100 font-sans">

  <!-- Sidebar -->
  <aside class="w-64 bg-[#0b3558] text-white flex flex-col">
  <div class="flex items-center justify-center p-5 border-b border-white">
    <img src="{{ asset('images/logonegro[1].png') }}" alt="Logo" class="h-10 object-contain">
</div>
    <nav class="flex-1 px-2 py-4 space-y-2">
      <a href="{{ url('dashboardcard') }}" class="flex items-center gap-3 px-4 py-2 bg-[#f5c16c] text-black rounded-r-full font-semibold">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/home.png" alt="icon" class="w-6 h-6" />
        Dashboard
      </a>
      <a href="{{ url('konfirmasiacara') }}" class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/to-do.png" class="w-6 h-6" alt="icon" />
        Konfirmasi Acara
      </a>
      <a href="{{ url('seminarselesai') }}" class="flex items-center gap-3 px-4 py-2 hover:bg-white hover:text-[#0b3558] rounded-r-full transition">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/checked.png" class="w-6 h-6" alt="icon" />
        Seminar Selesai
      </a>
    </nav>
  </aside>

  <!-- Dropdown Profil -->
  <div class="absolute top-0 right-0 p-6 z-[9999]">
    <div @click.stop="dropdownOpen = !dropdownOpen"
         class="cursor-pointer flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow hover:bg-gray-100">
      <img src="https://img.icons8.com/ios-glyphs/30/000000/user.png" class="w-6 h-6" alt="User" />
      <span class="font-semibold text-sm">Admin</span>
      <svg :class="{ 'rotate-180': dropdownOpen }" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </div>
    <div x-show="dropdownOpen" x-cloak @click.outside="dropdownOpen = false" @click.stop
         class="mt-2 w-48 bg-white rounded-md shadow-lg py-2 absolute right-0 z-[9999]">
      <a href="{{ route('profile.profilADMbaru') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
      </form>
    </div>
  </div>

  <!-- Main Content -->
  <main class="flex-1 p-8 relative">
    <h1 class="text-2xl font-bold mb-4">Dashboard Card</h1>

    <!-- Form Tambah -->
    <div x-data="{ openForm: false }" class="relative z-10">
      <button @click.stop="openForm = true" class="mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Tambah Card
      </button>

      <div x-show="openForm" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" x-cloak>
        <div @click.outside="openForm = false" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl mx-auto">
          <h2 class="text-lg font-semibold mb-4">Form Tambah Seminar</h2>
          <form enctype="multipart/form-data" method="POST" action="{{ route('seminaradmin.store') }}">
            @csrf
            <div class="mb-4">
              <label class="block font-semibold mb-1">Panitia</label>
              <select name="user_id" required class="w-full border rounded px-3 py-2">
                @foreach ($panitias as $panitia)
                <option value="{{ $panitia->id }}">{{ $panitia->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-4"><label class="block text-sm font-medium">Kategori Seminar</label><input type="text" name="kategori" class="w-full border rounded px-3 py-2" required></div>
            <div class="mb-4"><label class="block text-sm font-medium">Judul Seminar</label><input type="text" name="judul" class="w-full border rounded px-3 py-2" required></div>
            <div class="mb-4"><label class="block text-sm font-medium">Deskripsi</label><input type="text" name="deskripsi" class="w-full border rounded px-3 py-2" required></div>
            <div class="mb-4"><label class="block text-sm font-medium">Tanggal Acara</label><input type="date" name="tanggal" class="w-full border rounded px-3 py-2" required></div>
            <div class="mb-4"><label class="block text-sm font-medium">Waktu</label><input type="time" name="waktu" class="w-full border rounded px-3 py-2" required></div>
            <div class="mb-4"><label class="block text-sm font-medium">Poster</label><input type="file" name="poster" accept="image/*" class="w-full text-sm border rounded px-3 py-2" required></div>
            <div class="flex justify-end gap-4 mt-6">
              <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Tambah</button>
              <button type="button" @click="openForm = false" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Tabel -->
    <div class="bg-gray-300 p-4 rounded shadow">
      <table class="w-full table-auto border-collapse border border-black text-center">
        <thead class="bg-gray-400">
          <tr>
            <th class="border px-2 py-2">No</th>
            <th class="border px-2 py-2">Kategori Seminar</th>
            <th class="border px-2 py-2">Judul Seminar</th>
            <th class="border px-2 py-2">Tanggal Acara</th>
            <th class="border px-2 py-2">Waktu</th>
            <th class="border px-2 py-2">Poster</th>
            <th class="border px-2 py-2">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          @foreach($seminars as $index => $seminar)
          <tr class="h-16">
            <td class="border font-bold text-xl">{{ $index + 1 }}</td>
            <td class="border">{{ $seminar->kategori }}</td>
            <td class="border">{{ $seminar->judul }}</td>
            <td class="border">{{ $seminar->tanggal }}</td>
            <td class="border">{{ $seminar->waktu }}</td>
            <td class="border"><img src="{{ asset($seminar->poster) }}" alt="Poster" class="w-16 mx-auto"></td>
            <td class="border">
              <div class="flex justify-center gap-2">
                <form action="{{ route('seminaradmin.destroy', $seminar->id) }}" method="POST">
                  @csrf @method('DELETE')
                  <button class="bg-red-600 text-white px-3 py-1 rounded-full hover:bg-red-700 text-sm">Delete</button>
                </form>
                <div>
                  <button @click.stop="modalOpen = {{ $seminar->id }}"
                          class="bg-green-400 text-white px-3 py-1 rounded-full hover:bg-green-500 text-sm">Ubah</button>
                  <div x-show="modalOpen === {{ $seminar->id }}" x-cloak x-transition.opacity
                       @click.self="modalOpen = null"
                       class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
                    <div @click.outside="modalOpen = null" @click.stop
                         class="bg-white w-full max-w-lg rounded-lg p-6 shadow-xl relative">
                      <button @click="modalOpen = null"
                              class="absolute top-2 right-2 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
                      @include('updatecard', ['seminar' => $seminar])
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>
