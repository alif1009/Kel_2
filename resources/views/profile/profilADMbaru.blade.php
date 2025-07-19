<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black font-serif min-h-screen">

  <!-- Header -->
  <div class="flex justify-between items-center p-6">
    <a href="{{ url('dashboardcard') }}" class="text-lg font-bold hover:underline">Back</a>
    <h1 class="text-4xl font-bold text-center absolute left-1/2 transform -translate-x-1/2">Profile</h1>
    <!-- Icon Settings (Gambar JPG) -->
    <a href="{{ url('profile/settingadm') }}" class="w-6 h-6">
      <img src="/images/iconsettings.png" alt="Settings Icon" class="w-12 h-12 object-cover hover:opacity-80">
    </a>
  </div>
  </div>

  <!-- Main Content Container -->
  <div class="flex items-center justify-center min-h-[calc(100vh-150px)]">
    <div class="flex flex-col lg:flex-row items-center justify-center gap-20 px-6 py-10">

      <!-- About Me -->
      <div class="max-w-md text-center lg:text-left">
        <h2 class="text-3xl font-bold mb-4">About Me</h2>
        <p class="text-lg leading-relaxed">
          {{ $user->about }}
        </p>
      </div>

      <!-- Foto dan Nama -->
      <div class="flex flex-col items-center">
        <img src="{{ $user->photo ? asset('storage/photos/' . $user->photo) : asset('images/default.jpg') }}" class="w-52 h-52 object-cover rounded-full shadow-lg mb-4" />
        <h3 class="text-2xl font-bold">{{ $user->name }}</h3>
        <p class="text-xl">Admin</p>
      </div>

      <!-- Details -->
      <div class="max-w-md text-left">
        <h2 class="text-3xl font-bold mb-4">Details</h2>
        <p class="text-lg"><strong>Name :</strong> {{ $user->name ?? '-' }}</p>
        <p class="text-lg"><strong>Email :</strong> {{ $user->email ?? '-' }}</p>
        <p class="text-lg"><strong>No. HP :</strong> {{ $user->phone ?? '-' }}</p>
        <p class="text-lg"><strong>Alamat :</strong> {{ $user->address ?? '-' }}</p>
      </div>

    </div>
  </div>
  <!-- Background Decoration (optional) -->
  <img src="{{ asset('images/dekor1.png') }}" alt="dekor"
    class="absolute bottom-0 left-0 w-80 opacity-80 hidden md:block">
  <img src="{{ asset('images/dekor2.png') }}" alt="dekor"
    class="absolute bottom-0 right-0 w-90 opacity-80 hidden md:block">

</body>

</html>