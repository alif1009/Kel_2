<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-gray-100 to-[#002347] px-4">

     <!-- Tombol Kembali ke Beranda (Fixed di Kiri Atas) -->
     <div class="fixed top-4 left-4 z-50">
        <a href="{{ url('/') }}" class="flex items-center space-x-2 text-white bg-[#002347] hover:bg-[#001b36] px-4 py-2 rounded-full shadow transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7 7-7" />
            </svg>
            <span>Landing Page</span>
        </a>
    </div>

    <!-- Kontainer utama -->
    <div class="min-h-[90vh] flex items-center justify-center">
        <div class="w-full max-w-6xl bg-white/0 rounded-xl p-6 flex flex-col md:flex-row items-center justify-center gap-10">
            
            <!-- Gambar Ilustrasi -->
            <div class="hidden md:block w-full md:w-1/2">
                <img src="{{ asset('images/register-illustration.png') }}" alt="Register Illustration" class="w-full">
            </div>

            <!-- Form Registrasi -->
            <div class="w-full md:w-1/2 text-white px-2 sm:px-6">
                <h1 class="text-4xl font-bold mb-2">REGISTRASI</h1>
                <h2 class="text-xl font-semibold">Welcome to Event Organizer</h2>
                <p class="text-white-500 text-sm mb-6">
                    To keep connected with us please register with your personal information by email address and password
                </p>

                <form action="{{ route('register.submit') }}" method="POST" class="flex flex-col space-y-4">
                    @csrf
                    <input type="email" name="email" placeholder="Email"
                        class="px-4 py-2 rounded border text-black bg-white/15 placeholder-gray-600" required>

                    <input type="text" name="username" placeholder="Username"
                        class="px-4 py-2 rounded border text-black bg-white/15 placeholder-gray-600" required>

                    <div class="relative">
                        <input type="password" name="password" placeholder="Password"
                            class="w-full px-4 py-2 rounded border text-black pr-10 bg-white/15 placeholder-gray-600"
                            required>
                        <span class="absolute right-3 top-2.5 cursor-pointer" id="toggle-password">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 3C5 3 1.73 7.11 1 10c.73 2.89 4 7 9 7s8.27-4.11 9-7c-.73-2.89-4-7-9-7zM10 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                                <path d="M0 0h20v20H0z" fill="none"/>
                            </svg>
                        </span>
                    </div>

                    <select name="role" required
                        class="px-4 py-2 rounded border text-black bg-white/15 placeholder-gray-600">
                        <option value="" disabled selected>Pilih Register Sebagai</option>
                        <option value="mahasiswa">Customer (Mahasiswa)</option>
                    </select>

                    <button type="submit"
                        class="bg-[#002347] text-white py-2 rounded-full font-semibold hover:bg-[#001b36] transition">
                        Buat Akun
                    </button>
                </form>

                <p class="mt-4 text-center text-sm text-gray-300">Sudah punya akun?</p>
                <div class="flex justify-center mt-2">
                    <a href="/login" class="bg-[#002347] text-white py-1 px-4 rounded-full hover:bg-[#001b36] transition">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('toggle-password');
        const passwordInput = document.querySelector('input[type="password"]');
        togglePassword.addEventListener('click', () => {
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        });
    </script>
</body>
</html>
