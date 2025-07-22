@extends('layouts.app')

@section('content')
<!-- Login Page -->
<main class="min-h-screen flex items-center justify-center px-4 py-8">
    <div class="max-w-md w-full">
        <!-- Login Card -->
        <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-800 shadow-2xl">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('assets/images/logo.webp') }}" alt="PI TOPUP" class="h-12 w-auto" />
                </div>
                <h1 class="text-2xl font-bold text-white mb-2">Selamat Datang Kembali!</h1>
                <p class="text-gray-400 text-sm">Masuk ke akun Anda untuk melanjutkan</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-6">
                <!-- Email Input -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-white">Email atau Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-10 py-3 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="Masukkan email atau username"
                            required
                        />
                    </div>
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-white">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-10 py-3 pr-10 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="Masukkan password"
                            required
                        />
                        <button 
                            type="button" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center"
                            onclick="togglePassword()"
                        >
                            <i id="passwordIcon" class="fas fa-eye text-gray-400 text-sm hover:text-white transition-colors cursor-pointer"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            id="remember" 
                            name="remember" 
                            type="checkbox" 
                            class="h-4 w-4 bg-gray-800 border-gray-600 rounded text-blue-600 focus:ring-blue-500 focus:ring-2"
                        >
                        <label for="remember" class="ml-2 text-sm text-gray-300">Ingat saya</label>
                    </div>
                    <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition-colors">Lupa password?</a>
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg shadow-blue-500/25 transform"
                >
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Masuk
                </button>

                <!-- Divider -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-900/50 text-gray-400">atau masuk dengan</span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-3">
                    <button 
                        type="button" 
                        class="flex justify-center items-center px-4 py-2 border border-gray-600 rounded-lg text-sm font-medium text-white bg-gray-800/50 hover:bg-gray-700/50 transition-all duration-300 hover:scale-105"
                    >
                        <i class="fab fa-google text-red-400 mr-2"></i>
                        Google
                    </button>
                    <button 
                        type="button" 
                        class="flex justify-center items-center px-4 py-2 border border-gray-600 rounded-lg text-sm font-medium text-white bg-gray-800/50 hover:bg-gray-700/50 transition-all duration-300 hover:scale-105"
                    >
                        <i class="fab fa-facebook text-blue-400 mr-2"></i>
                        Facebook
                    </button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="mt-8 text-center">
                <p class="text-gray-400 text-sm">
                    Belum punya akun? 
                    <a href="/register" class="text-blue-400 hover:text-blue-300 transition-colors font-medium">Daftar sekarang</a>
                </p>
            </div>
        </div>

        <!-- Features -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
            <div class="bg-gray-900/30 backdrop-blur-sm rounded-lg p-4 border border-gray-800/50">
                <div class="text-blue-400 text-2xl mb-2">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-white text-sm font-medium mb-1">Aman & Terpercaya</h3>
                <p class="text-gray-400 text-xs">Data Anda dilindungi dengan enkripsi tingkat tinggi</p>
            </div>
            <div class="bg-gray-900/30 backdrop-blur-sm rounded-lg p-4 border border-gray-800/50">
                <div class="text-green-400 text-2xl mb-2">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-white text-sm font-medium mb-1">Proses Cepat</h3>
                <p class="text-gray-400 text-xs">Top up instan dalam hitungan detik</p>
            </div>
            <div class="bg-gray-900/30 backdrop-blur-sm rounded-lg p-4 border border-gray-800/50">
                <div class="text-orange-400 text-2xl mb-2">
                    <i class="fas fa-gift"></i>
                </div>
                <h3 class="text-white text-sm font-medium mb-1">Bonus Menarik</h3>
                <p class="text-gray-400 text-xs">Dapatkan bonus dan promo eksklusif</p>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript -->
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }

    // Form validation and submission
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
        submitBtn.disabled = true;
        
        // Simulate login process
        setTimeout(() => {
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Show success message (you can replace this with actual login logic)
            alert('Login berhasil! Redirecting...');
        }, 2000);
    });

    // Add floating animation to features
    document.addEventListener('DOMContentLoaded', function() {
        const features = document.querySelectorAll('.bg-gray-900\\/30');
        features.forEach((feature, index) => {
            feature.style.animationDelay = `${index * 0.2}s`;
            feature.classList.add('animate-fade-in-up');
        });
    });
</script>

<!-- Custom CSS for animations -->
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    /* Custom focus states */
    input:focus {
        transform: translateY(-1px);
    }
    
    /* Hover effects for social buttons */
    button:hover i {
        transform: scale(1.1);
        transition: transform 0.2s ease;
    }
</style>
@endsection
