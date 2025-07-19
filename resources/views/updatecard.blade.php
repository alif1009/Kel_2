<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Ubah Seminar</title>

    {{-- CDN Tailwind – ganti ke Vite build jika proyekmu sudah dikonfigurasi --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full bg-gray-100 flex items-start justify-center py-12">

    <div class="w-full max-w-lg bg-white shadow-lg rounded-xl p-8 sm:p-10 space-y-6">
        <h1 class="text-2xl font-semibold text-gray-800">
            Form Ubah Card Seminar
        </h1>

        <form action="{{ route('seminaradmin.update', $seminar->id) }}" method="POST" enctype="multipart/form-data" class="space-y-3">
            @csrf
            @method('PUT') {{-- spoofing HTTP PUT --}}

            <!-- Kategori Seminar -->
            <div>
                <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">
                    Kategori Seminar
                </label>
                <input id="kategori" name="kategori" type="text" required value="{{ old('kategori', $seminar->kategori) }}" class="w-full rounded-md border border-gray-300 p-3
                              focus:ring-2 focus:ring-green-500 focus:border-green-500
                              placeholder-gray-400">
            </div>

            <!-- Judul Seminar -->
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">
                    Judul Seminar
                </label>
                <input id="judul" name="judul" type="text" required value="{{ old('judul', $seminar->judul) }}" class="w-full rounded-md border border-gray-300 p-3
                              focus:ring-2 focus:ring-green-500 focus:border-green-500
                              placeholder-gray-400">
            </div>

             <div>
                <label for="Deskripsi" class="block text-sm font-medium text-gray-700 mb-1">
                    Deskripsi 
                </label>
                <input id="deskripsi" name="deskripsi" type="text" required value="{{ old('deskripsi', $seminar->deskripsi) }}" class="w-full rounded-md border border-gray-300 p-3
                              focus:ring-2 focus:ring-green-500 focus:border-green-500
                              placeholder-gray-400">
            </div>

            <!-- Tanggal Acara -->
            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">
                    Tanggal Acara
                </label>
                <input id="tanggal" name="tanggal" type="date" required value="{{ old('tanggal', $seminar->tanggal) }}" class="w-full rounded-md border border-gray-300 p-3
                              focus:ring-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <!-- Waktu -->
            <div>
                <label for="waktu" class="block text-sm font-medium text-gray-700 mb-1">
                    Waktu
                </label>
                <input id="waktu" name="waktu" type="time" required value="{{ old('waktu', $seminar->waktu) }}" class="w-full rounded-md border border-gray-300 p-3
                              focus:ring-2 focus:ring-green-500 focus:border-green-500">
            </div>

            <!-- Poster -->
            <div>
                <label for="poster" class="block text-sm font-medium text-gray-700 mb-1">
                    Poster
                </label>
                <input id="poster" name="poster" type="file" accept="image/*" class="block w-full text-sm text-gray-900
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-md file:border-0
                              file:text-sm file:font-semibold
                              file:bg-green-600 file:text-white
                              hover:file:bg-green-700 focus:outline-none">
                {{-- Tampilkan pratinjau poster lama (opsional) --}}
                {{-- <p class="mt-2 text-sm text-gray-500">Poster lama: poster_lama.jpg</p> --}}
            </div>

            <!-- Tombol aksi -->
            <div class="flex justify-between items-center pt-2">
                <a href="{{ url()->previous() }}" @click.prevent="openModal = false"
                    class="inline-flex items-center px-6 py-2 rounded-md bg-gray-500 hover:bg-gray-600 text-white">
                    Batal
                </a>

                <button type="submit" class="inline-flex items-center px-6 py-2 rounded-md
                               bg-green-600 hover:bg-green-700 text-white font-semibold">
                    Ubah
                </button>
            </div>
        </form>
    </div>

</body>

</html>