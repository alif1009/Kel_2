<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Katalog Peralatan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#133b63] min-h-screen text-[#0b0b0b]">

  <!-- Header -->
  <header class="bg-[#295178] text-white px-6 py-4 shadow-md">
    <h1 class="text-2xl font-bold">Logo</h1>
  </header>

  <!-- Konten Grid -->
  <main class="p-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      
      <!-- Kartu Item -->
      @php
        $items = [
          ['title' => 'Kamera', 'img' => '/images/kamera.jpg'],
          ['title' => 'Panggung', 'img' => '/images/panggung.jpg'],
          ['title' => 'Sound System', 'img' => '/images/sound.jpg'],
          ['title' => 'Stand Bazar', 'img' => '/images/bazar.jpg'],
          ['title' => 'Tripod', 'img' => '/images/tripod.jpg'],
          ['title' => 'Lighting', 'img' => '/images/lighting.jpg'],
          ['title' => 'Tenda', 'img' => '/images/tenda.jpg'],
          ['title' => 'Speaker', 'img' => '/images/speaker.jpg'],
        ];
      @endphp

      @foreach($items as $item)
      <div class="bg-white rounded-2xl overflow-hidden shadow-md">
        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="h-40 w-full object-cover">
        <div class="p-4">
          <h2 class="text-lg font-bold">{{ $item['title'] }}</h2>
          <p class="text-[#d8a24c] font-semibold">Rp xx.xx.xx</p>
        </div>
      </div>
      @endforeach

    </div>
  </main>

</body>
</html>
