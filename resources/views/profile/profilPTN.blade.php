<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white font-[Comic Sans MS]">

    <!-- Header -->
    <div class="flex items-center justify-between p-4 border-b-2 border-blue-400 shadow">
        <a href="{{ url('/') }}" class="flex items-center space-x-2 border border-black px-3 py-1 rounded-md text-black hover:bg-gray-100">    
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="text-lg font-semibold">Back</span>
        </a>
        <h1 class="text-2xl font-bold">Profil</h1>
    </div>

    <!-- Profil Card -->
    <div class="flex justify-center mt-10">
        <div class="bg-gray-200 p-6 rounded-2xl shadow-lg w-full max-w-md">
            <div class="flex flex-col items-center">
                <!-- Avatar -->
                <img src="{{ asset('images/profile.jpg') }}" alt="profile" class="w-24 h-24 rounded-full shadow-md mb-2 object-cover">
            </div>

            <!-- Data Profil (View Mode) -->
            <div id="viewMode" class="mt-6 space-y-2 text-black">
                <p><span class="font-bold">Username:</span> <span id="viewUsername">john_doe</span></p>
                <p><span class="font-bold">Nama Lengkap:</span> <span id="viewNama">John Doe</span></p>
                <p><span class="font-bold">Email:</span> <span id="viewEmail">john@example.com</span></p>
                <p><span class="font-bold">No. HP:</span> <span id="viewHp">08123456789</span></p>
                <p><span class="font-bold">Alamat:</span> <span id="viewAlamat">Jl. Mawar No. 123</span></p>
            </div>

            <!-- Form Edit (Hidden by Default) -->
            <form id="editForm" class="hidden mt-6 space-y-4">
                <input type="text" id="username" placeholder="Username" class="w-full px-4 py-2 rounded border" required>
                <input type="text" id="nama" placeholder="Nama Lengkap" class="w-full px-4 py-2 rounded border" required>
                <input type="email" id="email" placeholder="Email" class="w-full px-4 py-2 rounded border" required>
                <input type="text" id="hp" placeholder="No. HP" class="w-full px-4 py-2 rounded border" required>
                <input type="text" id="alamat" placeholder="Alamat" class="w-full px-4 py-2 rounded border" required>

                <div class="flex space-x-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
                    <button type="button" onclick="batalEdit()" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Batal</button>
                </div>
            </form>

            <!-- Tombol Ubah -->
            <div id="editButtonContainer" class="mt-6 flex justify-start">
                <button onclick="ubahProfil()" class="px-6 py-1 rounded-full border border-black font-semibold hover:bg-gray-100">Ubah</button>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        function ubahProfil() {
            // Ambil data dari view untuk isi form
            document.getElementById("username").value = document.getElementById("viewUsername").innerText;
            document.getElementById("nama").value = document.getElementById("viewNama").innerText;
            document.getElementById("email").value = document.getElementById("viewEmail").innerText;
            document.getElementById("hp").value = document.getElementById("viewHp").innerText;
            document.getElementById("alamat").value = document.getElementById("viewAlamat").innerText;

            document.getElementById("viewMode").classList.add("hidden");
            document.getElementById("editForm").classList.remove("hidden");
            document.getElementById("editButtonContainer").classList.add("hidden");
        }

        function batalEdit() {
            document.getElementById("editForm").reset();
            document.getElementById("editForm").classList.add("hidden");
            document.getElementById("viewMode").classList.remove("hidden");
            document.getElementById("editButtonContainer").classList.remove("hidden");
        }

        document.getElementById("editForm").addEventListener("submit", function (e) {
            e.preventDefault();

            // Simpan ke tampilan
            document.getElementById("viewUsername").innerText = document.getElementById("username").value;
            document.getElementById("viewNama").innerText = document.getElementById("nama").value;
            document.getElementById("viewEmail").innerText = document.getElementById("email").value;
            document.getElementById("viewHp").innerText = document.getElementById("hp").value;
            document.getElementById("viewAlamat").innerText = document.getElementById("alamat").value;

            // Kembali ke view mode
            batalEdit();
        });
    </script>

</body>

</html>
