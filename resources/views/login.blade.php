<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - Event Organizer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-white to-[#002347] px-4">

    <!-- Tombol Kembali ke Beranda (Fixed di Kiri Atas) -->
    <div class="fixed top-4 left-4 z-50">
        <a href="{{ url('/') }}" class="flex items-center space-x-2 text-white bg-[#002347] hover:bg-[#001b36] px-4 py-2 rounded-full shadow transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7 7-7" />
            </svg>
            <span>Beranda</span>
        </a>
    </div>

    <div class="w-full max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between">

        <!-- Form Bagian Kiri -->
        <div class="w-full md:w-1/2 text-center md:text-left px-4">
            <h1 class="text-4xl font-bold text-blue-900 mb-2">LOGIN</h1>
            <h2 class="text-2xl font-bold text-blue-900 mb-2">Welcome to Event Organizer</h2>
            <p class="text-white-300 text-sm mb-6">
                To keep connected with us please login with your personal information by email address and password
            </p>

            <form action="{{ route('login') }}" method="POST" class="flex flex-col space-y-4">
                @csrf
                <input type="text" name="username" placeholder="Username"
                    class="px-4 py-2 rounded border border-gray-300 bg-white/15 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>

                <div class="relative">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 rounded border border-gray-300 bg-white/15 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10"
                        required>

                    <span class="absolute right-3 top-2.5 cursor-pointer" id="togglePassword">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10 3C5 3 1.73 7.11 1 10c.73 2.89 4 7 9 7s8.27-4.11 9-7c-.73-2.89-4-7-9-7zM10 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" />
                            <path d="M0 0h20v20H0z" fill="none" />
                        </svg>
                    </span>
                </div>

                <!-- Pilihan Login Sebagai -->
                <select name="role" required
                    class="px-4 py-2 rounded border text-black bg-white/15 placeholder-gray-600">
                    <option value="" disabled selected>Pilih Login Sebagai</option>
                    <option value="customer">Customer (Mahasiswa)</option>
                    <option value="admin">Admin</option>
                </select>

                <button type="submit"
                    class="bg-[#002347] text-white py-2 rounded-full font-semibold hover:bg-[#001b36] transition">
                    Login
                </button>
            </form>

            <p class="mt-4 text-center text-sm text-gray-500">Belum punya akun?</p>
            <div class="flex justify-center mt-2">
                <a href="/register"
                    class="bg-[#002347] text-white py-1 px-4 rounded-full hover:bg-[#001b36] transition">
                    Register
                </a>
            </div>
        </div>

        <!-- Gambar Bagian Kanan -->
        <div class="hidden md:block w-full md:w-1/2 p-15">
            <img src="{{ asset('images/login-illustration.png') }}" alt="Login Illustration" class="w-full">
        </div>

    </div>

    <!-- Script untuk toggle show/hide password -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.querySelector('input[name="password"]');
        togglePassword.addEventListener('click', function () {
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        });
    </script>

</body>

</html>
