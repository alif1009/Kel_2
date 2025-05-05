<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 font-serif">

    <!-- Header -->
    <div class="bg-white shadow-md px-6 py-4">
        <h1 class="text-lg font-semibold">Logo</h1>
    </div>

    <!-- Tabel -->
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="table-fixed border-collapse w-full bg-white shadow-md border border-gray-400">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="border border-black px-2 py-2 w-10">No</th>
                        <th class="border border-black px-2 py-2">Nama</th>
                        <th class="border border-black px-2 py-2">Kategori</th>
                        <th class="border border-black px-2 py-2">Tempat</th>
                        <th class="border border-black px-2 py-2">Barang</th>
                        <th class="border border-black px-2 py-2">Status</th>
                        <th class="border border-black px-2 py-2">Total</th>
                        <th class="border border-black px-2 py-2">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-black px-2 py-2 text-xl font-bold text-center">1.</td>
                        <td class="border border-black px-2 py-2">Petra</td>
                        <td class="border border-black px-2 py-2">Bazar - Preloved</td>
                        <td class="border border-black px-2 py-2">Auditorium</td>
                        <td class="border border-black px-2 py-2">Kamera</td>
                        <td class="border border-black px-2 py-2">Lunas</td>
                        <td class="border border-black px-2 py-2">Rp.2.00.000</td>
                        <td class="border border-black px-2 py-2">21/12/2015</td>
                    </tr>
                    <!-- Baris tambahan kosong -->
                    @for ($i = 0; $i < 5; $i++)
                    <tr>
                        @for ($j = 0; $j < 8; $j++)
                        <td class="border border-black px-2 py-6">&nbsp;</td>
                        @endfor
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
