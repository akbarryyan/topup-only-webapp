@extends('layouts.app')

@section('content')
<!-- Register Page -->
<main class="min-h-screen flex items-center justify-center px-4 py-8">
    <div class="max-w-md w-full">
        <!-- Register Card -->
        <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-800 shadow-2xl">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('assets/images/logo.webp') }}" alt="PI TOPUP" class="h-12 w-auto" />
                </div>
                <h1 class="text-2xl font-bold text-white mb-2">Bergabung dengan PI TOPUP!</h1>
                <p class="text-gray-400 text-sm">Buat akun baru untuk mulai top up game favorit</p>
            </div>

            <!-- Register Form -->
            <form class="space-y-6">
                <!-- Full Name Input -->
                <div class="space-y-2">
                    <label for="fullname" class="block text-sm font-medium text-white">Nama Lengkap</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="text" 
                            id="fullname" 
                            name="fullname"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-10 py-3 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="Masukkan nama lengkap"
                            required
                        />
                    </div>
                </div>

                <!-- Username Input -->
                <div class="space-y-2">
                    <label for="username" class="block text-sm font-medium text-white">Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-at text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="text" 
                            id="username" 
                            name="username"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-10 py-3 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="Pilih username unik"
                            required
                        />
                    </div>
                    <p class="text-xs text-gray-400">Username akan digunakan untuk login</p>
                </div>

                <!-- Email Input -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-white">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-10 py-3 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="Masukkan alamat email"
                            required
                        />
                    </div>
                </div>

                <!-- Phone Number Input -->
                <div class="space-y-2">
                    <label for="phone" class="block text-sm font-medium text-white">Nomor Telepon</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-phone text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-10 py-3 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="08xxxxxxxxxx"
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
                            placeholder="Buat password yang kuat"
                            required
                            oninput="checkPasswordStrength()"
                        />
                        <button 
                            type="button" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center"
                            onclick="togglePassword('password')"
                        >
                            <i id="passwordIcon" class="fas fa-eye text-gray-400 text-sm hover:text-white transition-colors cursor-pointer"></i>
                        </button>
                    </div>
                    
                    <!-- Password Strength Indicator -->
                    <div class="space-y-2">
                        <div class="flex space-x-1">
                            <div id="strength-1" class="h-1 flex-1 rounded bg-gray-600 transition-colors duration-300"></div>
                            <div id="strength-2" class="h-1 flex-1 rounded bg-gray-600 transition-colors duration-300"></div>
                            <div id="strength-3" class="h-1 flex-1 rounded bg-gray-600 transition-colors duration-300"></div>
                            <div id="strength-4" class="h-1 flex-1 rounded bg-gray-600 transition-colors duration-300"></div>
                        </div>
                        <p id="password-strength-text" class="text-xs text-gray-400">Masukkan password untuk melihat kekuatan</p>
                    </div>
                    
                    <!-- Password Requirements -->
                    <div class="text-xs space-y-1">
                        <div id="req-length" class="flex items-center text-gray-400">
                            <i class="fas fa-times text-red-400 text-xs mr-2"></i>
                            <span>Minimal 8 karakter</span>
                        </div>
                        <div id="req-uppercase" class="flex items-center text-gray-400">
                            <i class="fas fa-times text-red-400 text-xs mr-2"></i>
                            <span>Mengandung huruf kapital</span>
                        </div>
                        <div id="req-lowercase" class="flex items-center text-gray-400">
                            <i class="fas fa-times text-red-400 text-xs mr-2"></i>
                            <span>Mengandung huruf kecil</span>
                        </div>
                        <div id="req-number" class="flex items-center text-gray-400">
                            <i class="fas fa-times text-red-400 text-xs mr-2"></i>
                            <span>Mengandung angka</span>
                        </div>
                    </div>
                </div>

                <!-- Confirm Password Input -->
                <div class="space-y-2">
                    <label for="password_confirmation" class="block text-sm font-medium text-white">Konfirmasi Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-10 py-3 pr-10 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="Ulangi password"
                            required
                            oninput="checkPasswordMatch()"
                        />
                        <button 
                            type="button" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center"
                            onclick="togglePassword('password_confirmation')"
                        >
                            <i id="passwordConfirmIcon" class="fas fa-eye text-gray-400 text-sm hover:text-white transition-colors cursor-pointer"></i>
                        </button>
                    </div>
                    <div id="password-match" class="text-xs text-gray-400 hidden">
                        <i class="fas fa-times text-red-400 mr-2"></i>
                        <span>Password tidak cocok</span>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="flex items-start space-x-3">
                    <input 
                        id="terms" 
                        name="terms" 
                        type="checkbox" 
                        class="h-4 w-4 bg-gray-800 border-gray-600 rounded text-blue-600 focus:ring-blue-500 focus:ring-2 mt-0.5"
                        required
                    >
                    <label for="terms" class="text-sm text-gray-300 leading-relaxed">
                        Saya menyetujui 
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">Syarat & Ketentuan</a> 
                        dan 
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">Kebijakan Privasi</a>
                    </label>
                </div>

                <!-- Register Button -->
                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg shadow-blue-500/25 transform disabled:opacity-50 disabled:cursor-not-allowed"
                    id="registerBtn"
                >
                    <i class="fas fa-user-plus mr-2"></i>
                    Daftar Sekarang
                </button>

                <!-- Divider -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-600"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-900/50 text-gray-400">atau daftar dengan</span>
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

            <!-- Login Link -->
            <div class="mt-8 text-center">
                <p class="text-gray-400 text-sm">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300 transition-colors font-medium">Masuk sekarang</a>
                </p>
            </div>
        </div>

        <!-- Benefits -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
            <div class="bg-gray-900/30 backdrop-blur-sm rounded-lg p-4 border border-gray-800/50">
                <div class="text-green-400 text-2xl mb-2">
                    <i class="fas fa-gift"></i>
                </div>
                <h3 class="text-white text-sm font-medium mb-1">Bonus Member Baru</h3>
                <p class="text-gray-400 text-xs">Dapatkan bonus 10% untuk transaksi pertama</p>
            </div>
            <div class="bg-gray-900/30 backdrop-blur-sm rounded-lg p-4 border border-gray-800/50">
                <div class="text-blue-400 text-2xl mb-2">
                    <i class="fas fa-crown"></i>
                </div>
                <h3 class="text-white text-sm font-medium mb-1">Program Loyalitas</h3>
                <p class="text-gray-400 text-xs">Kumpulkan poin dan tukar dengan reward</p>
            </div>
            <div class="bg-gray-900/30 backdrop-blur-sm rounded-lg p-4 border border-gray-800/50">
                <div class="text-orange-400 text-2xl mb-2">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="text-white text-sm font-medium mb-1">Support 24/7</h3>
                <p class="text-gray-400 text-xs">Tim customer service siap membantu kapan saja</p>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript -->
<script>
    function togglePassword(inputId) {
        const passwordInput = document.getElementById(inputId);
        const iconId = inputId === 'password' ? 'passwordIcon' : 'passwordConfirmIcon';
        const passwordIcon = document.getElementById(iconId);
        
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

    function checkPasswordStrength() {
        const password = document.getElementById('password').value;
        const strengthBars = ['strength-1', 'strength-2', 'strength-3', 'strength-4'];
        const strengthText = document.getElementById('password-strength-text');
        
        // Reset all bars
        strengthBars.forEach(id => {
            document.getElementById(id).className = 'h-1 flex-1 rounded bg-gray-600 transition-colors duration-300';
        });
        
        if (password.length === 0) {
            strengthText.textContent = 'Masukkan password untuk melihat kekuatan';
            strengthText.className = 'text-xs text-gray-400';
            return;
        }
        
        let score = 0;
        let feedback = '';
        
        // Check length
        const lengthReq = document.getElementById('req-length');
        if (password.length >= 8) {
            score++;
            lengthReq.innerHTML = '<i class="fas fa-check text-green-400 text-xs mr-2"></i><span>Minimal 8 karakter</span>';
            lengthReq.className = 'flex items-center text-green-400';
        } else {
            lengthReq.innerHTML = '<i class="fas fa-times text-red-400 text-xs mr-2"></i><span>Minimal 8 karakter</span>';
            lengthReq.className = 'flex items-center text-gray-400';
        }
        
        // Check uppercase
        const uppercaseReq = document.getElementById('req-uppercase');
        if (/[A-Z]/.test(password)) {
            score++;
            uppercaseReq.innerHTML = '<i class="fas fa-check text-green-400 text-xs mr-2"></i><span>Mengandung huruf kapital</span>';
            uppercaseReq.className = 'flex items-center text-green-400';
        } else {
            uppercaseReq.innerHTML = '<i class="fas fa-times text-red-400 text-xs mr-2"></i><span>Mengandung huruf kapital</span>';
            uppercaseReq.className = 'flex items-center text-gray-400';
        }
        
        // Check lowercase
        const lowercaseReq = document.getElementById('req-lowercase');
        if (/[a-z]/.test(password)) {
            score++;
            lowercaseReq.innerHTML = '<i class="fas fa-check text-green-400 text-xs mr-2"></i><span>Mengandung huruf kecil</span>';
            lowercaseReq.className = 'flex items-center text-green-400';
        } else {
            lowercaseReq.innerHTML = '<i class="fas fa-times text-red-400 text-xs mr-2"></i><span>Mengandung huruf kecil</span>';
            lowercaseReq.className = 'flex items-center text-gray-400';
        }
        
        // Check numbers
        const numberReq = document.getElementById('req-number');
        if (/[0-9]/.test(password)) {
            score++;
            numberReq.innerHTML = '<i class="fas fa-check text-green-400 text-xs mr-2"></i><span>Mengandung angka</span>';
            numberReq.className = 'flex items-center text-green-400';
        } else {
            numberReq.innerHTML = '<i class="fas fa-times text-red-400 text-xs mr-2"></i><span>Mengandung angka</span>';
            numberReq.className = 'flex items-center text-gray-400';
        }
        
        // Update strength bars and text
        if (score === 1) {
            document.getElementById('strength-1').className = 'h-1 flex-1 rounded bg-red-500 transition-colors duration-300';
            strengthText.textContent = 'Lemah';
            strengthText.className = 'text-xs text-red-400';
        } else if (score === 2) {
            document.getElementById('strength-1').className = 'h-1 flex-1 rounded bg-orange-500 transition-colors duration-300';
            document.getElementById('strength-2').className = 'h-1 flex-1 rounded bg-orange-500 transition-colors duration-300';
            strengthText.textContent = 'Sedang';
            strengthText.className = 'text-xs text-orange-400';
        } else if (score === 3) {
            document.getElementById('strength-1').className = 'h-1 flex-1 rounded bg-yellow-500 transition-colors duration-300';
            document.getElementById('strength-2').className = 'h-1 flex-1 rounded bg-yellow-500 transition-colors duration-300';
            document.getElementById('strength-3').className = 'h-1 flex-1 rounded bg-yellow-500 transition-colors duration-300';
            strengthText.textContent = 'Baik';
            strengthText.className = 'text-xs text-yellow-400';
        } else if (score === 4) {
            strengthBars.forEach(id => {
                document.getElementById(id).className = 'h-1 flex-1 rounded bg-green-500 transition-colors duration-300';
            });
            strengthText.textContent = 'Sangat Kuat';
            strengthText.className = 'text-xs text-green-400';
        }
    }

    function checkPasswordMatch() {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('password_confirmation').value;
        const matchIndicator = document.getElementById('password-match');
        
        if (confirmPassword.length === 0) {
            matchIndicator.classList.add('hidden');
            return;
        }
        
        if (password === confirmPassword) {
            matchIndicator.innerHTML = '<i class="fas fa-check text-green-400 mr-2"></i><span>Password cocok</span>';
            matchIndicator.className = 'text-xs text-green-400';
            matchIndicator.classList.remove('hidden');
        } else {
            matchIndicator.innerHTML = '<i class="fas fa-times text-red-400 mr-2"></i><span>Password tidak cocok</span>';
            matchIndicator.className = 'text-xs text-red-400';
            matchIndicator.classList.remove('hidden');
        }
    }

    // Form validation and submission
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = document.getElementById('registerBtn');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Memproses...';
        submitBtn.disabled = true;
        
        // Simulate registration process
        setTimeout(() => {
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Show success message (you can replace this with actual registration logic)
            alert('Registrasi berhasil! Silakan cek email untuk verifikasi.');
        }, 3000);
    });

    // Add floating animation to benefits
    document.addEventListener('DOMContentLoaded', function() {
        const benefits = document.querySelectorAll('.bg-gray-900\\/30');
        benefits.forEach((benefit, index) => {
            benefit.style.animationDelay = `${index * 0.2}s`;
            benefit.classList.add('animate-fade-in-up');
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
