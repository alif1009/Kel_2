<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pemesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 font-serif">

    <!-- Header -->
    <div class="bg-gray-300 p-4 shadow-md">
        <h1 class="text-lg font-bold">Formulir Pemesanan</h1>
    </div>

    <!-- Form -->
    <div class="flex justify-center items-center min-h-screen">
        <form class="bg-white p-6 shadow-md rounded-md w-[400px] space-y-4 border">

            <!-- Nama -->
            <div>
                <label class="block font-semibold mb-1">Nama Costumer</label>
                <input type="text" name="nama"
                    class="w-full border border-black px-3 py-2 rounded focus:outline-none bg-gray-100">
            </div>

            <!-- Alamat -->
            <div>
                <label class="block font-semibold mb-1">Alamat</label>
                <input type="text" name="alamat"
                    class="w-full border border-black px-3 py-2 rounded focus:outline-none bg-gray-100">
            </div>

            <!-- No Hp -->
            <div>
                <label class="block font-semibold mb-1">No Hp</label>
                <input type="text" name="no_hp"
                    class="w-full border border-black px-3 py-2 rounded focus:outline-none bg-gray-100">
            </div>

            <!-- Email -->
            <div>
                <label class="block font-semibold mb-1">Email (Opsional)</label>
                <input type="email" name="email"
                    class="w-full border border-black px-3 py-2 rounded focus:outline-none bg-gray-100">
            </div>

            <!-- Peralatan -->
            <div>
                <label class="block font-semibold mb-1">Peralatan yang Dipilih</label>
                <div class="grid grid-cols-2 gap-x-4 gap-y-1 text-sm text-gray-800">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Sound System" class="form-checkbox">
                        <span>Sound System</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Kamera" class="form-checkbox">
                        <span>Kamera</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Panggung" class="form-checkbox">
                        <span>Panggung</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Tripod" class="form-checkbox">
                        <span>Tripod</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Stand Bazar" class="form-checkbox">
                        <span>Stand Bazar</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Speaker" class="form-checkbox">
                        <span>Speaker</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Tenda" class="form-checkbox">
                        <span>Tenda</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="peralatan[]" value="Lighting" class="form-checkbox">
                        <span>Lighting</span>
                    </label>
                </div>
            </div>

            <!-- Tempat -->
            <div>
                <label class="block font-semibold mb-1">Tempat yang Dipilih</label>
                <select name="tempat" class="w-full border border-black px-3 py-2 rounded bg-white">
                    <option value="Auditorium">Auditorium - Rp.300.000</option>
                    <option value="Gedung Tekno">Gedung Tekno - Rp.500.000</option>
                    <option value="Lapangan">Lapangan - Rp.300.000</option>
                </select>
            </div>

            <!-- Kategori -->
            <div>
                <label class="block font-semibold mb-1">Tempat yang Dipilih</label>
                <select name="kategori" class="w-full border border-black px-3 py-2 rounded bg-white">
                    <option value="Bazar">Bazar Preloved - Rp.250.000</option>
                    <option value="Bazar">Bazar Makanan - Rp.300.000</option>
                    <option value="Seminar">Seminar Mentality - Rp.400.000</option>
                    <option value="Seminar">Seminar Informatika - Rp.350.000</option>
                    <option value="Festival">Festival Budaya - Rp.1.000.000</option>
                    <option value="Festival">Festival Konser - Rp.1.500.000</option>
                    <option value="Pameran">Pameran Seni - Rp.800.000</option>
                    <option value="Pameran">Pameran Projek - Rp.650.000</option>
                </select>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between mt-4">
                <button type="button" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-full shadow">Batal</button>
                <button type="submit" class="bg-green-400 hover:bg-green-500 text-white font-semibold px-6 py-2 rounded-full shadow">Pembayaran</button>
            </div>
        </form>
    </div>

</body>
</html>
