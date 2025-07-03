<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Settings Panitia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white min-h-screen flex items-center justify-center relative overflow-hidden">

    <!-- Tombol Back -->
    <a href="{{ route('profile.profilPTNbaru') }}" class="absolute top-4 left-4 text-white underline">Back</a>

    <!-- BACKGROUND -->
  <div class="absolute top-0 left-0 w-[300px] h-[300px] bg-blue-900 rounded-full blur-[120px] opacity-60 -z-10"></div>
  <div class="absolute top-0 right-0 w-[300px] h-[300px] bg-green-700 rounded-full blur-[120px] opacity-60 -z-10"></div>

    <!-- Form Settings Panitia -->
    <div class="bg-black border border-white rounded-xl shadow-xl p-8 w-[90%] max-w-lg">
        <h2 class="text-xl font-semibold mb-4 text-white">Settings Panitia</h2>
        <form action="{{ route('settings.ptn.update') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-white font-semibold mb-1">Name</label>
                <input type="text" name="name" class="w-full rounded-md border px-3 py-2 bg-transparent text-white">
            </div>

            <div>
                <label class="block text-white font-semibold mb-1">About Me</label>
                <textarea name="about" rows="3" class="w-full rounded-md border px-3 py-2 bg-transparent text-white"></textarea>
            </div>

            <div>
                <label class="block text-white font-semibold mb-1">Email</label>
                <input type="email" name="email" class="w-full rounded-md border px-3 py-2 bg-transparent text-white">
            </div>

            <div>
                <label class="block text-white font-semibold mb-1">No.Hp</label>
                <input type="text" name="phone" class="w-full rounded-md border px-3 py-2 bg-transparent text-white">
            </div>

            <div>
                <label class="block text-white font-semibold mb-1">Alamat</label>
                <input type="text" name="address" class="w-full rounded-md border px-3 py-2 bg-transparent text-white">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md font-bold">
                    Ubah
                </button>
            </div>
        </form>
    </div>
</body>
</html>
