<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Card Seminar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6 bg-gray-100">

  <!-- Tombol Tambah Card -->
  <button id="toggleFormBtn" class="mb-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
    Tambah Card
  </button>

  <!-- Form Tambah Seminar -->
  <div id="formCard" class="hidden bg-white p-6 rounded-lg shadow-md w-full max-w-xl">
    <h2 class="text-xl font-semibold mb-4">Form Tambah Seminar</h2>
    <form id="seminarForm" enctype="multipart/form-data">
      <!-- Kategori Seminar -->
      <div class="mb-4">
        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori Seminar</label>
        <input type="text" id="kategori" name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>

      <!-- Judul Seminar -->
      <div class="mb-4">
        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Seminar</label>
        <input type="text" id="judul" name="judul" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>

      <!-- Narasumber -->
      <div class="mb-4">
        <label for="Narasumber" class="block text-sm font-medium text-gray-700">Narasumber</label>
        <input type="text" id="Narasumber" name="Narasumber" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>


      <!-- Tanggal Acara -->
      <div class="mb-4">
        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Acara</label>
        <input type="date" id="tanggal" name="tanggal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>

      <!-- Waktu -->
      <div class="mb-4">
        <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu</label>
        <input type="time" id="waktu" name="waktu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
      </div>

      <!-- Poster -->
      <div class="mb-4">
        <label for="poster" class="block text-sm font-medium text-gray-700">Poster</label>
        <input type="file" id="poster" name="poster" accept="image/*" class="mt-1 block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
      </div>

      <!-- Tombol Tambah dan Batal -->
      <div class="flex gap-4">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Tambah</button>
        <button type="button" id="cancelBtn" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Batal</button>
      </div>
    </form>
  </div>

    <!-- Script JS -->
    <script>
      const toggleBtn = document.getElementById('toggleFormBtn');
    const formCard = document.getElementById('formCard');
    const cancelBtn = document.getElementById('cancelBtn');

    toggleBtn.addEventListener('click', () => {
      formCard.classList.toggle('hidden');
    });

    cancelBtn.addEventListener('click', () => {
      formCard.classList.add('hidden');
    });

    document.getElementById('seminarForm').addEventListener('submit', function(event) {
      event.preventDefault();
      // Proses data di sini, misalnya kirim ke backend Laravel atau tampilkan di UI
      alert('Data seminar berhasil ditambahkan!');
      this.reset();
      formCard.classList.add('hidden');
    });
  </script>
</body>
</html>
