<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penonton</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-lg bg-white rounded shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4 border-b pb-2">Formulir Penonton</h2>

        @if(session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded font-semibold text-center">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('formpenonton.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-1">Nama</label>
                <input type="text" name="nama" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Jurusan/Prodi</label>
                <input type="text" name="jurusan" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Email</label>
                <input type="email" name="email" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">No. Hp</label>
                <input type="text" name="hp" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <input type="hidden" name="seminar_id" value="{{ $seminar->id }}">

            <div class="mb-4">
                <label class="block font-semibold mb-1">Seminar yang diikuti</label>
                <input type="text" name="seminar" value="{{ $seminar->judul }}" readonly class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-1">KTM</label>
                <input type="file" name="ktm" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            <div class="flex justify-between mt-6">
                <!-- Tombol Back -->
                <a href="{{ route('beranda') }}" class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition">
                    ← Back
                </a>

                <!-- Tombol Submit -->
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition">
                    Submit
                </button>
            </div>

        </form>
    </div>

</body>

</html>