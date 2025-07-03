<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengaturan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body 
  class="min-h-screen flex items-center justify-center bg-cover bg-center relative"
  style="background-image: url('{{ asset('images/nama-file-backgroundmu.png') }}');"
>

  <!-- Back Link -->
  <a href="{{ url('profile/profileADMbaru') }}"
     class="absolute top-4 left-4 text-black font-bold hover:underline">
    Back
  </a>

  <!-- Form Container -->
  <div class="bg-white/90 rounded-xl shadow-xl w-[90%] max-w-2xl p-8 space-y-4">
    <h2 class="text-2xl font-semibold mb-2">Settings</h2>

    <form action="{{ route('profile.update') }}" method="POST" class="space-y-4">
      @csrf
      @method('PUT') <!-- jika pakai update -->
      
      <!-- Name -->
      <div>
        <label class="font-semibold">Name</label>
        <input type="text" name="name" 
               class="w-full border rounded px-3 py-2 mt-1"
               placeholder="Masukkan nama Anda">
      </div>

      <!-- About Me -->
      <div>
        <label class="font-semibold">About Me</label>
        <textarea name="about" rows="3"
                  class="w-full border rounded px-3 py-2 mt-1"
                  placeholder="Tentang Anda"></textarea>
      </div>

      <!-- Email -->
      <div>
        <label class="font-semibold">Email</label>
        <input type="email" name="email" 
               class="w-full border rounded px-3 py-2 mt-1"
               placeholder="Email aktif">
      </div>

      <!-- No. HP -->
      <div>
        <label class="font-semibold">No.Hp</label>
        <input type="text" name="phone" 
               class="w-full border rounded px-3 py-2 mt-1"
               placeholder="08123xxxxx">
      </div>

      <!-- Alamat -->
      <div>
        <label class="font-semibold">Alamat</label>
        <input type="text" name="address" 
               class="w-full border rounded px-3 py-2 mt-1"
               placeholder="Alamat lengkap">
      </div>

      <!-- Tombol Submit -->
      <div class="text-right">
        <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-full">
          Ubah
        </button>
      </div>
    </form>
  </div>
</body>
</html>

