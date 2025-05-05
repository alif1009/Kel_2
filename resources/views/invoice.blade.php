<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 font-serif">

    <!-- Header -->
    <div class="bg-gray-300 p-4 shadow-md">
        <h1 class="text-lg font-bold">Invoice</h1>
    </div>

    <!-- Form Invoice -->
    <div class="flex justify-center items-center min-h-screen">
        <form class="bg-white p-6 shadow-md rounded-md w-[400px] space-y-4 border">

            <!-- Nama -->
            <div>
                <label class="block font-semibold mb-1">Nama</label>
                <input type="text" name="nama"
                    class="w-full border border-black px-3 py-2 rounded-md bg-gray-100 focus:outline-none">
            </div>

            <!-- Kategori -->
            <div>
                <label class="block font-semibold mb-1">Kategori yang Dipilih</label>
                <input type="text" name="kategori"
                    class="w-full border border-black px-3 py-2 rounded-md bg-gray-100 focus:outline-none">
            </div>

            <!-- Peralatan -->
            <div>
                <label class="block font-semibold mb-1">Peralatan</label>
                <input type="text" name="peralatan"
                    class="w-full border border-black px-3 py-2 rounded-md bg-gray-100 focus:outline-none">
            </div>

            <!-- Tempat -->
            <div>
                <label class="block font-semibold mb-1">Tempat</label>
                <input type="text" name="tempat"
                    class="w-full border border-black px-3 py-2 rounded-md bg-gray-100 focus:outline-none">
            </div>

            <!-- Total -->
            <div>
                <label class="block font-semibold mb-1">Total</label>
                <input type="text" name="total"
                    class="w-full border border-black px-3 py-2 rounded-md bg-gray-100 focus:outline-none">
            </div>

            <!-- Rekening dan Bukti -->
            <div>
                <p class="font-semibold mb-1">Rekening : 109002314589</p>
                <label class="block font-semibold mb-1">Bukti Pembayaran</label>
                <input type="text" name="bukti"
                    class="w-full border border-black px-3 py-2 rounded-md bg-gray-100 focus:outline-none">
            </div>

            <!-- Tombol Submit -->
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
