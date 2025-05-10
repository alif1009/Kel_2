<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-serif">

    <!-- Header -->
    <div class="bg-gray-300 p-4 shadow-md">
        <h1 class="text-lg font-semibold">Invoice</h1>
    </div>

    <!-- Form Container -->
    <div class="flex justify-center items-center min-h-screen">
        <form action="/invoice" method="POST" enctype="multipart/form-data"
              class="bg-gray-300 p-6 rounded-xl shadow-xl w-[370px] space-y-4 border border-gray-400">
            @csrf

            @if(session('success'))
                <div class="bg-green-200 text-green-800 text-sm p-2 rounded shadow">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Nama -->
            <div>
                <label class="block text-sm font-bold mb-1">Nama</label>
                <input type="text" name="nama"
                       class="w-full border border-black rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <!-- Kategori -->
            <div>
                <label class="block text-sm font-bold mb-1">Kategori yang Dipilih</label>
                <input type="text" name="kategori"
                       class="w-full border border-black rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <div>
                <label class="block text-sm font-bold mb-1">Tempat yang Dipilih</label>
                <input type="text" name="kategori"
                       class="w-full border border-black rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <div>
                <label class="block text-sm font-bold mb-1">Alamat</label>
                <input type="text" name="kategori"
                       class="w-full border border-black rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <div>
                <label class="block text-sm font-bold mb-1">No hp</label>
                <input type="text" name="kategori"
                       class="w-full border border-black rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <!-- Total -->
            <div>
                <label class="block text-sm font-bold mb-1">Total</label>
                <input type="number" name="total"
                       class="w-full border border-black rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-400"
                       required>
            </div>

            <!-- Rekening -->
            <div class="text-sm font-bold">
                Rekening : 109002314589
            </div>

            <!-- Bukti -->
            <div>
                <label class="block text-sm font-bold mb-1">Bukti Pembayaran</label>
                <input type="file" name="bukti"
                       class="w-full border border-black rounded px-2 py-1 bg-white"
                       required>
            </div>

            <!-- Submit -->
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-green-400 hover:bg-green-500 text-white font-semibold px-6 py-2 rounded-full shadow">
                    Submit
                </button>
            </div>
        </form>
    </div>

</body>
</html>
