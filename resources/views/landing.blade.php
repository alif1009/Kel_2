<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EventAmaze - Seminar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap');
    body {
      font-family: 'Playfair Display', serif;
    }
  </style>
  <style>
  @keyframes fade-in-up {
    0% {
      opacity: 0;
      transform: translateY(1rem);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in-up {
    animation: fade-in-up 1s ease-out forwards;
  }
</style>
<style>
  html {
    scroll-behavior: smooth;
  }
</style>


</head>
<body class="bg-gray-900 text-white">

  <!-- Navbar -->
  <nav class="bg-black bg-opacity-90 p-4 flex justify-between items-center fixed top-0 w-full z-50">
    <a href="#" class="text-white font-bold text-xl ml-4">EventAmaze</a>

    <!-- Hamburger Button -->
    <button id="menu-toggle" class="sm:hidden text-white focus:outline-none mr-4">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Menu Items -->
    <ul id="nav-menu" class="transition-all duration-300 ease-in-out transform hidden sm:flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6 absolute sm:static top-16 left-0 w-full sm:w-auto bg-black sm:bg-transparent text-center sm:text-left py-4 sm:py-0 z-40">
  <li><a href="#Tentang Kami" class="block px-4 hover:text-blue-400 transition duration-300">Tentang Kami</a></li>
  <li><a href="#Visi" class="block px-4 hover:text-blue-400 transition duration-300">Visi</a></li>
  <li><a href="#Misi" class="block px-4 hover:text-blue-400 transition duration-300">Misi</a></li>
  <li><a href="#Kontak" class="block px-4 hover:text-blue-400 transition duration-300">Kontak</a></li>
</ul>
  </nav>

  <!-- Hero Section -->
  <section class="relative h-screen bg-cover bg-center flex flex-col justify-center items-center text-center pt-16"
  style="background-image: url('/images/landing3.jpg');">
  <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
  <div class="relative z-10">
    <h2 class="text-white text-xl sm:text-4xl opacity-0 translate-y-4 transition-opacity transition-transform duration-1000 ease-out delay-200 animate-fade-in-up">
      Tempat Terbaik
    </h2>
    <h1 class="text-white text-5xl sm:text-7xl font-bold mt-2 opacity-0 translate-y-4 transition-opacity transition-transform duration-1000 ease-out delay-500 animate-fade-in-up">
      Konferensi<br>Seminar
    </h1>
    <div class="mt-6 flex space-x-4 justify-center">
      <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 px-5 py-2 rounded text-white font-semibold transition duration-300 ease-in-out">Register</a>
      <a href="{{ route('login') }}" class="bg-gray-800 hover:bg-gray-700 px-5 py-2 rounded text-white font-semibold transition duration-300 ease-in-out">Login</a>
    </div>
  </div>
</section>


  <!-- Seminar Planners -->
  <section id="Tentang Kami" class="bg-blue-900 py-12 px-4 sm:px-8 md:px-16 text-white text-left">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-6">
      <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
  <img src="/images/landing1.jpg" class="rounded shadow-lg transform hover:scale-105 transition duration-500">
  <img src="/images/landing4.jpg" class="rounded shadow-lg transform hover:scale-105 transition duration-500">
  <img src="/images/landing5.jpg" class="rounded shadow-lg transform hover:scale-105 transition duration-500">
</div>
      <div class="flex-1 mt-4">
        <h3 class="text-3xl font-bold mb-2">Tentang Kami</h3>
        <h2 class="text-xl font-extrabold mb-4">SEMINAR PLANNERS</h2>
        <p>
          EventAmaze adalah salah satu event organizer terbaik yang ada di sini. Kami bisa membuktikannya dengan memberikan ide dan solusi yang baik untuk membantu kostumer membuat event seminar yang ingin dibuat untuk di kampus.
        </p>
      </div>
    </div>
  </section>

  <!-- Visi Section -->
  <section id="Visi" class="min-h-[500px] bg-cover bg-center text-left flex items-start justify-start" style="background-image: url('/images/Frame3.png');">
    <div class="p-8 sm:p-12 text-white max-w-4xl">
      <h2 class="text-3xl font-bold mb-4">Visi</h2>
      <p class="text-lg sm:text-xl md:text-xl lg:text-2xl">
        Menjadi event organizer terdepan dalam penyelenggaraan seminar edukatif, inspiratif, dan berkualitas yang memberikan dampak positif bagi masyarakat dan dunia profesional.
      </p>
    </div>
  </section>

  <!-- Misi Section -->
  <section id="Misi" class="min-h-[500px] bg-cover bg-center flex items-center justify-end px-6 md:px-20 text-white" style="background-image: url('/images/Frame2.png');">
    <div class="max-w-3xl w-full">
      <h2 class="text-4xl font-bold mb-6 text-right">Misi</h2>
      <ol class="list-decimal list-outside pl-5 space-y-4 text-justify text-lg">
        <li>Menyelenggarakan seminar-seminar yang relevan dengan kebutuhan zaman dan perkembangan industri.</li>
        <li>Menjalin kerja sama dengan narasumber, institusi, dan sponsor yang kredibel dan berkompeten.</li>
        <li>Memberikan pengalaman seminar yang profesional, informatif, dan bernilai bagi seluruh peserta.</li>
        <li>Mengadopsi teknologi dan inovasi terbaru dalam pelaksanaan event untuk meningkatkan efektivitas dan kenyamanan.</li>
        <li>Membangun komunitas pembelajar dan profesional melalui kegiatan seminar yang berkelanjutan.</li>
      </ol>
    </div>
  </section>

  <!-- Memory Section -->
  <section class="min-h-[500px] bg-cover bg-center text-center flex items-center justify-center relative" style="background-image: url('/images/Frame1.png');">
    <div class="absolute inset-0"></div>
    <div class="relative z-10 p-4 sm:p-8">
      <h2 class="text-4xl sm:text-5xl font-bold">Buat Memori Terindah<br>Dengan Membuat Event Seminar</h2>
    </div>
  </section>

  <!-- Footer -->
  <footer id="Kontak" class="bg-black text-white py-6 px-4 text-center">
  <h3 class="text-lg font-bold mb-2">EventAmaze</h3>
    <div class="flex justify-center space-x-4 mb-2">
      <a href="https://www.instagram.com/___.lipp/"><img src="https://img.icons8.com/ios-filled/25/ffffff/instagram-new.png" /></a>
      <a href="https://wa.me/6282287825959"target="_blank"rel="noopener noreferrer">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png"alt="WhatsApp" class="w-6 h-6"></a>
    </div>
    <p class="text-sm">&copy; 2025 Your Website. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
  </footer>

  <!-- Script for navbar toggle -->
 <script>
  const toggleBtn = document.getElementById('menu-toggle');
  const navMenu = document.getElementById('nav-menu');

  toggleBtn.addEventListener('click', () => {
    navMenu.classList.toggle('hidden');
    navMenu.classList.toggle('opacity-0');
    navMenu.classList.toggle('opacity-100');
    navMenu.classList.toggle('translate-y-[-10px]');
    navMenu.classList.toggle('translate-y-0');
  });
</script>

</body>
</html>
