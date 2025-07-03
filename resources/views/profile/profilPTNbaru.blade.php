<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');
    body {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body class="relative text-white min-h-screen overflow-hidden">

  <!-- BACKGROUND RADIAL GRADIENT -->
  <div class="absolute inset-0 -z-10"
       style="background: radial-gradient(circle at center, #000 0%, #1e3a8a 40%, #065f46 100%);">
  </div>

  <!-- BACK BUTTON -->
  <a href="{{ url('berandaPTN') }}"
     class="absolute top-6 left-6 z-50 text-white text-lg font-bold hover:underline">
    Back
  </a>

  <!-- SETTINGS ICON -->
  <a href="{{ route('settings.panitia') }}"
     class="absolute top-6 right-6 z-50 hover:opacity-80">
    <img src="{{ asset('images/iconsettingsputih.png') }}" alt="Settings" class="w-6 h-6">
  </a>

  <!-- PROFILE CONTENT -->
  <div class="relative z-10 flex flex-col items-center text-center px-6 py-12">
    <h1 class="text-4xl font-bold mb-10">Profile</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 max-w-7xl w-full items-center gap-10">

      <!-- ABOUT ME -->
      <div class="md:text-left px-4">
        <h2 class="text-2xl font-semibold mb-4">About Me</h2>
        <p class="text-white/90 text-base leading-relaxed">
          saya iqbal ramadhan mahasiswa Poli Batam jurusan Teknik Informatika Kelas Malam C semester 2.
          saya meminati jurusan ini sejak kecil sehingga saya sekarang ingin mengembangkan ilmu ini.
        </p>
      </div>

      <!-- AVATAR & NAMA -->
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/iqbal.jpeg') }}"
             class="w-48 h-48 rounded-full object-cover shadow-lg border-4 border-gray-300 mb-4" alt="Avatar">
        <h3 class="text-2xl font-bold leading-snug">Iqbal<br>Mahasiswa</h3>
      </div>

      <!-- DETAILS -->
      <div class="md:text-left px-4">
        <h2 class="text-2xl font-semibold mb-4">Details</h2>
        <p class="mb-2"><span class="font-bold">Name :</span> Iqbal Ramadhan</p>
        <p class="mb-2"><span class="font-bold">Email :</span> IqbalRamadhan@gmail.com</p>
        <p class="mb-2"><span class="font-bold">No. HP :</span> 08123456789</p>
        <p class="mb-2"><span class="font-bold">Alamat :</span> Jl. Mawar no. 123</p>
      </div>
    </div>
  </div>

</body>
</html>
