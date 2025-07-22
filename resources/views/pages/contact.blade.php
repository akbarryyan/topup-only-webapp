@extends('layouts.app')

@section('content')
<!-- Contact Page -->
<main class="min-h-screen py-8 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                <i class="fas fa-headset text-blue-400 mr-3"></i>
                Hubungi Kami
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">Tim customer service PI TOPUP siap membantu Anda 24/7. Jangan ragu untuk menghubungi kami kapan saja!</p>
        </div>

        <!-- Contact Methods Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- WhatsApp -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800 hover:border-green-500/50 transition-all duration-300 group hover:scale-105">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500/30 transition-colors duration-300">
                        <i class="fab fa-whatsapp text-2xl text-green-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">WhatsApp</h3>
                    <p class="text-gray-400 text-sm mb-4">Chat langsung dengan tim support kami</p>
                    <div class="space-y-2">
                        <a href="https://wa.me/6281234567890" target="_blank" class="block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                            <i class="fab fa-whatsapp mr-2"></i>
                            +62 812-3456-7890
                        </a>
                        <p class="text-xs text-gray-500">Online 24/7</p>
                    </div>
                </div>
            </div>

            <!-- Telegram -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800 hover:border-blue-500/50 transition-all duration-300 group hover:scale-105">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-500/30 transition-colors duration-300">
                        <i class="fab fa-telegram text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Telegram</h3>
                    <p class="text-gray-400 text-sm mb-4">Join grup official kami</p>
                    <div class="space-y-2">
                        <a href="https://t.me/pitopup_official" target="_blank" class="block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                            <i class="fab fa-telegram mr-2"></i>
                            @pitopup_official
                        </a>
                        <p class="text-xs text-gray-500">Respon cepat</p>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800 hover:border-purple-500/50 transition-all duration-300 group hover:scale-105">
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500/30 transition-colors duration-300">
                        <i class="fas fa-envelope text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Email</h3>
                    <p class="text-gray-400 text-sm mb-4">Kirim pertanyaan detail via email</p>
                    <div class="space-y-2">
                        <a href="mailto:support@pitopup.com" class="block bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                            <i class="fas fa-envelope mr-2"></i>
                            support@pitopup.com
                        </a>
                        <p class="text-xs text-gray-500">Respon 1-3 jam</p>
                    </div>
                </div>
            </div>

            <!-- Live Chat -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800 hover:border-orange-500/50 transition-all duration-300 group hover:scale-105">
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-500/30 transition-colors duration-300">
                        <i class="fas fa-comments text-2xl text-orange-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Live Chat</h3>
                    <p class="text-gray-400 text-sm mb-4">Chat real-time di website</p>
                    <div class="space-y-2">
                        <button onclick="openLiveChat()" class="w-full bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
                            <i class="fas fa-comments mr-2"></i>
                            Mulai Chat
                        </button>
                        <p class="text-xs text-gray-500">
                            <span class="inline-flex items-center">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-1 animate-pulse"></span>
                                Online sekarang
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Contact Form -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-paper-plane text-blue-400 mr-3"></i>
                        Kirim Pesan
                    </h2>
                    <p class="text-gray-400">Isi form di bawah ini dan kami akan segera merespon pesan Anda</p>
                </div>

                <form id="contactForm" class="space-y-6">
                    <!-- Name & Email Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-white mb-2">
                                <i class="fas fa-user text-blue-400 mr-2"></i>
                                Nama Lengkap
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name"
                                required
                                class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                                placeholder="Masukkan nama lengkap"
                            />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-white mb-2">
                                <i class="fas fa-envelope text-blue-400 mr-2"></i>
                                Email
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                required
                                class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                                placeholder="nama@email.com"
                            />
                        </div>
                    </div>

                    <!-- Phone & Subject Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-white mb-2">
                                <i class="fas fa-phone text-blue-400 mr-2"></i>
                                Nomor WhatsApp
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone"
                                class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                                placeholder="08xxxxxxxxxx"
                            />
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-white mb-2">
                                <i class="fas fa-tag text-blue-400 mr-2"></i>
                                Kategori
                            </label>
                            <select 
                                id="subject" 
                                name="subject"
                                required
                                class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            >
                                <option value="">Pilih kategori</option>
                                <option value="top-up">Masalah Top Up</option>
                                <option value="payment">Masalah Pembayaran</option>
                                <option value="account">Masalah Akun</option>
                                <option value="promo">Promo & Event</option>
                                <option value="suggestion">Saran & Masukan</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-white mb-2">
                            <i class="fas fa-comment-alt text-blue-400 mr-2"></i>
                            Pesan
                        </label>
                        <textarea 
                            id="message" 
                            name="message"
                            rows="5"
                            required
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300 resize-none"
                            placeholder="Tuliskan pesan atau pertanyaan Anda dengan detail..."
                        ></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105 hover:shadow-lg shadow-blue-500/25 transform"
                    >
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- FAQ & Info -->
            <div class="space-y-6">
                <!-- FAQ Section -->
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-white mb-2 flex items-center">
                            <i class="fas fa-question-circle text-green-400 mr-3"></i>
                            FAQ
                        </h2>
                        <p class="text-gray-400">Pertanyaan yang sering diajukan</p>
                    </div>

                    <div class="space-y-4">
                        <div class="faq-item">
                            <button onclick="toggleFAQ(1)" class="w-full text-left p-4 bg-gray-800/30 hover:bg-gray-800/50 rounded-lg transition-colors duration-300 flex items-center justify-between">
                                <span class="text-white font-medium">Berapa lama proses top up?</span>
                                <i id="faq-icon-1" class="fas fa-chevron-down text-gray-400 transform transition-transform duration-300"></i>
                            </button>
                            <div id="faq-content-1" class="hidden p-4 text-gray-400 text-sm bg-gray-800/20 rounded-b-lg">
                                Proses top up biasanya instan (1-5 menit). Jika lebih dari 15 menit, silakan hubungi customer service kami.
                            </div>
                        </div>

                        <div class="faq-item">
                            <button onclick="toggleFAQ(2)" class="w-full text-left p-4 bg-gray-800/30 hover:bg-gray-800/50 rounded-lg transition-colors duration-300 flex items-center justify-between">
                                <span class="text-white font-medium">Metode pembayaran apa saja yang tersedia?</span>
                                <i id="faq-icon-2" class="fas fa-chevron-down text-gray-400 transform transition-transform duration-300"></i>
                            </button>
                            <div id="faq-content-2" class="hidden p-4 text-gray-400 text-sm bg-gray-800/20 rounded-b-lg">
                                Kami menerima QRIS, E-Wallet (Dana, OVO, ShopeePay), Virtual Account, dan Transfer Bank.
                            </div>
                        </div>

                        <div class="faq-item">
                            <button onclick="toggleFAQ(3)" class="w-full text-left p-4 bg-gray-800/30 hover:bg-gray-800/50 rounded-lg transition-colors duration-300 flex items-center justify-between">
                                <span class="text-white font-medium">Apakah data saya aman?</span>
                                <i id="faq-icon-3" class="fas fa-chevron-down text-gray-400 transform transition-transform duration-300"></i>
                            </button>
                            <div id="faq-content-3" class="hidden p-4 text-gray-400 text-sm bg-gray-800/20 rounded-b-lg">
                                Ya, kami menggunakan enkripsi SSL dan tidak menyimpan data sensitif. Privasi Anda adalah prioritas kami.
                            </div>
                        </div>

                        <div class="faq-item">
                            <button onclick="toggleFAQ(4)" class="w-full text-left p-4 bg-gray-800/30 hover:bg-gray-800/50 rounded-lg transition-colors duration-300 flex items-center justify-between">
                                <span class="text-white font-medium">Bagaimana jika top up gagal?</span>
                                <i id="faq-icon-4" class="fas fa-chevron-down text-gray-400 transform transition-transform duration-300"></i>
                            </button>
                            <div id="faq-content-4" class="hidden p-4 text-gray-400 text-sm bg-gray-800/20 rounded-b-lg">
                                Hubungi customer service dengan melampirkan screenshot bukti pembayaran. Kami akan proses refund dalam 1x24 jam.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-white mb-2 flex items-center">
                            <i class="fas fa-clock text-yellow-400 mr-3"></i>
                            Jam Operasional
                        </h2>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-gray-800/30 rounded-lg">
                            <div class="flex items-center">
                                <i class="fab fa-whatsapp text-green-400 mr-3"></i>
                                <span class="text-white font-medium">WhatsApp</span>
                            </div>
                            <div class="text-right">
                                <div class="text-green-400 font-semibold">24/7</div>
                                <div class="text-xs text-gray-400">Selalu online</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-800/30 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-purple-400 mr-3"></i>
                                <span class="text-white font-medium">Email</span>
                            </div>
                            <div class="text-right">
                                <div class="text-blue-400 font-semibold">24/7</div>
                                <div class="text-xs text-gray-400">Respon 1-3 jam</div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-gray-800/30 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-comments text-orange-400 mr-3"></i>
                                <span class="text-white font-medium">Live Chat</span>
                            </div>
                            <div class="text-right">
                                <div class="text-green-400 font-semibold">24/7</div>
                                <div class="text-xs text-gray-400">Respon instan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media & Additional Info -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Social Media -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-share-alt text-blue-400 mr-3"></i>
                        Media Sosial
                    </h2>
                    <p class="text-gray-400">Follow kami untuk update terbaru</p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="flex items-center justify-center p-4 bg-blue-600/20 hover:bg-blue-600/30 border border-blue-600/30 rounded-lg transition-all duration-300 hover:scale-105 group">
                        <i class="fab fa-facebook text-blue-400 text-2xl mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="text-white font-medium">Facebook</span>
                    </a>
                    <a href="#" class="flex items-center justify-center p-4 bg-pink-600/20 hover:bg-pink-600/30 border border-pink-600/30 rounded-lg transition-all duration-300 hover:scale-105 group">
                        <i class="fab fa-instagram text-pink-400 text-2xl mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="text-white font-medium">Instagram</span>
                    </a>
                    <a href="#" class="flex items-center justify-center p-4 bg-red-600/20 hover:bg-red-600/30 border border-red-600/30 rounded-lg transition-all duration-300 hover:scale-105 group">
                        <i class="fab fa-youtube text-red-400 text-2xl mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="text-white font-medium">YouTube</span>
                    </a>
                    <a href="#" class="flex items-center justify-center p-4 bg-sky-600/20 hover:bg-sky-600/30 border border-sky-600/30 rounded-lg transition-all duration-300 hover:scale-105 group">
                        <i class="fab fa-twitter text-sky-400 text-2xl mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="text-white font-medium">Twitter</span>
                    </a>
                </div>
            </div>

            <!-- Office Info -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-white mb-2 flex items-center">
                        <i class="fas fa-building text-green-400 mr-3"></i>
                        Informasi Perusahaan
                    </h2>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                        <div>
                            <div class="text-white font-medium">Alamat</div>
                            <div class="text-gray-400 text-sm">Jl. Teknologi Digital No. 123<br>Jakarta Selatan, DKI Jakarta 12345</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <i class="fas fa-phone text-green-400 mr-3"></i>
                        <div>
                            <div class="text-white font-medium">Telepon</div>
                            <div class="text-gray-400 text-sm">+62 21 1234 5678</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-purple-400 mr-3"></i>
                        <div>
                            <div class="text-white font-medium">Email Bisnis</div>
                            <div class="text-gray-400 text-sm">business@pitopup.com</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <i class="fas fa-globe text-yellow-400 mr-3"></i>
                        <div>
                            <div class="text-white font-medium">Website</div>
                            <div class="text-gray-400 text-sm">www.pitopup.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript -->
<script>
    // FAQ Toggle Function
    function toggleFAQ(id) {
        const content = document.getElementById(`faq-content-${id}`);
        const icon = document.getElementById(`faq-icon-${id}`);
        
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        }
    }

    // Live Chat Function
    function openLiveChat() {
        // Simulate opening live chat
        showToast('Live chat akan segera tersedia! Sementara gunakan WhatsApp untuk bantuan cepat.', 'info');
    }

    // Contact Form Submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
        submitBtn.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Show success message
            showToast('Pesan berhasil dikirim! Kami akan segera merespon via email.', 'success');
            
            // Reset form
            e.target.reset();
        }, 2000);
    });

    // Toast Notification Function
    function showToast(message, type = 'info') {
        const toast = document.createElement('div');
        toast.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full max-w-sm ${
            type === 'success' ? 'bg-green-500/90 text-white' : 
            type === 'error' ? 'bg-red-500/90 text-white' : 
            'bg-blue-500/90 text-white'
        }`;
        toast.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-${type === 'success' ? 'check' : type === 'error' ? 'exclamation-triangle' : 'info'}-circle mr-2"></i>
                <span class="text-sm">${message}</span>
                <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-white/80 hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        
        document.body.appendChild(toast);
        
        // Animate in
        setTimeout(() => {
            toast.classList.remove('translate-x-full');
        }, 100);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            toast.classList.add('translate-x-full');
            setTimeout(() => {
                if (toast.parentNode) {
                    document.body.removeChild(toast);
                }
            }, 300);
        }, 5000);
    }

    // Form Validation Enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const inputs = document.querySelectorAll('input, select, textarea');
        
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
                
                // Basic validation
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('border-red-500');
                    this.classList.remove('border-gray-600');
                } else {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-gray-600');
                }
            });
        });
    });
</script>

<!-- Custom CSS for animations and effects -->
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
    
    /* Pulse animation for online indicator */
    @keyframes pulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
    
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    /* Form focus effects */
    .focused {
        transform: translateY(-2px);
        transition: transform 0.2s ease;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
    }
    
    ::-webkit-scrollbar-track {
        background: rgba(75, 85, 99, 0.3);
        border-radius: 3px;
    }
    
    ::-webkit-scrollbar-thumb {
        background: rgba(59, 130, 246, 0.6);
        border-radius: 3px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: rgba(59, 130, 246, 0.8);
    }
    
    /* Hover effects */
    .group:hover .group-hover\:scale-110 {
        transform: scale(1.1);
    }
    
    /* Button animations */
    button:hover:not(:disabled) {
        transform: translateY(-1px);
    }
    
    button:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
    
    /* Select styling for better appearance */
    select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }
    
    /* FAQ transition */
    .faq-item .hidden {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }
    
    .faq-item .show {
        max-height: 200px;
        transition: max-height 0.3s ease;
    }
</style>
@endsection
