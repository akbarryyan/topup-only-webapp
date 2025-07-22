@extends('layouts.app')

@section('content')
<!-- Main Content -->
        <main class="px-4 mt-6">
            <div class="max-w-7xl mx-auto space-y-8">
                <!-- Promotional Banner -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('assets/images/banner.jpg') }}" alt="banner.png" class="w-full h-auto rounded-xl" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-xl"></div>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-gray-800/60 border border-gray-700/50 rounded-lg p-4 text-center hover:bg-gray-800/80 transition-colors duration-300">
                        <div class="text-xl md:text-2xl font-bold text-white mb-1">24/7</div>
                        <div class="text-gray-300 text-xs md:text-sm">Online</div>
                    </div>
                    <div class="bg-gray-800/60 border border-gray-700/50 rounded-lg p-4 text-center hover:bg-gray-800/80 transition-colors duration-300">
                        <div class="text-xl md:text-2xl font-bold text-white mb-1">1M+</div>
                        <div class="text-gray-300 text-xs md:text-sm">Transaksi</div>
                    </div>
                    <div class="bg-gray-800/60 border border-gray-700/50 rounded-lg p-4 text-center hover:bg-gray-800/80 transition-colors duration-300">
                        <div class="text-xl md:text-2xl font-bold text-white mb-1">100%</div>
                        <div class="text-gray-300 text-xs md:text-sm">Aman</div>
                    </div>
                </div>

                <!-- Best Seller Section -->
                <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-2xl font-bold text-white">BEST SELLER</h2>
                            <div class="animate-bounce">
                                <i class="fas fa-fire text-orange-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-orange-500 text-sm font-medium bg-orange-500/20 px-3 py-1 rounded-full">Paling Laris!</span>
                    </div>
                    
                    <!-- Best Seller Products Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer group">
                            <img src="{{ asset('assets/images/ml.jpg') }}" alt="Mobile Legends" class="w-full h-32 object-cover" />
                            <div class="p-3">
                                <h3 class="text-white font-medium text-sm text-center">Mobile Legends</h3>
                                <p class="text-gray-400 text-xs text-center mt-1">Diamond</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer group">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Roblox" class="w-full h-32 object-cover" />
                            <div class="p-3">
                                <h3 class="text-white font-medium text-sm text-center">Roblox</h3>
                                <p class="text-gray-400 text-xs text-center mt-1">Robux</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer group">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="PUBG Mobile" class="w-full h-32 object-cover" />
                            <div class="p-3">
                                <h3 class="text-white font-medium text-sm text-center">PUBG Mobile</h3>
                                <p class="text-gray-400 text-xs text-center mt-1">UC</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer group">
                            <img src="{{ asset('assets/images/steam.jpg') }}" alt="Steam Wallet" class="w-full h-32 object-cover" />
                            <div class="p-3">
                                <h3 class="text-white font-medium text-sm text-center">Steam Wallet</h3>
                                <p class="text-gray-400 text-xs text-center mt-1">Voucher</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Specialist MLBB Section -->
                <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold text-white">SPECIALIST MLBB</h2>
                        <span class="text-blue-400 text-sm">Diamond • Starlight • Weekly Pass</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/ml.jpg') }}" alt="MLBB Diamond" class="h-48 w-full object-cover" />
                            <div class="p-4">
                                <h3 class="text-white font-semibold">Diamond MLBB</h3>
                                <p class="text-gray-300 text-sm">Mulai dari Rp 15.000</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/ml.jpg') }}" alt="Starlight Member" class="h-48 w-full object-cover" />
                            <div class="p-4">
                                <h3 class="text-white font-semibold">Starlight Member</h3>
                                <p class="text-gray-300 text-sm">Rp 95.000/bulan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Games Section -->
                <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold text-white">SEMUA GAME</h2>
                        <button class="text-blue-400 text-sm hover:text-blue-300 transition-colors">Lihat Semua →</button>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Roblox" class="h-40 w-full object-cover" />
                            <div class="p-4">
                                <h3 class="text-white font-semibold">Roblox</h3>
                                <p class="text-gray-400 text-sm">Robux</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Free Fire" class="h-40 w-full object-cover" />
                            <div class="p-4">
                                <h3 class="text-white font-semibold">Free Fire</h3>
                                <p class="text-gray-400 text-sm">Diamond</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Genshin Impact" class="h-40 w-full object-cover" />
                            <div class="p-4">
                                <h3 class="text-white font-semibold">Genshin Impact</h3>
                                <p class="text-gray-400 text-sm">Genesis Crystal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Voucher Section -->
                <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold text-white">VOUCHER</h2>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/steam.jpg') }}" alt="Steam Wallet" class="h-40 w-full object-cover" />
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/steam.jpg') }}" alt="Google Play" class="h-40 w-full object-cover" />
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-gradient-to-r from-blue-600 to-purple-700 rounded-xl p-8 text-center">
                    <h2 class="text-2xl font-bold text-white mb-4">Mulai Top Up Sekarang!</h2>
                    <p class="text-blue-100 mb-6">Nikmati kemudahan top up dengan proses yang cepat dan aman</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-white text-blue-600 font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition-colors">
                            <i class="fas fa-play mr-2"></i>Mulai Top Up
                        </button>
                        <button class="bg-transparent border-2 border-white text-white font-bold py-3 px-6 rounded-lg hover:bg-white hover:text-blue-600 transition-colors">
                            <i class="fas fa-question-circle mr-2"></i>Bantuan
                        </button>
                    </div>
                </div>
            </div>
        </main>

        <!-- Floating WhatsApp Button -->
        <div class="fixed bottom-6 right-6 z-50">
            <button class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 animate-pulse">
                <i class="fab fa-whatsapp text-2xl"></i>
            </button>
        </div>

        <!-- JavaScript for interactivity -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add click handlers for game cards
                const gameCards = document.querySelectorAll('.cursor-pointer');
                gameCards.forEach(card => {
                    card.addEventListener('click', function() {
                        // Add selection effect
                        gameCards.forEach(c => c.classList.remove('ring-2', 'ring-blue-500'));
                        this.classList.add('ring-2', 'ring-blue-500');
                        
                        // Show notification
                        const gameName = this.querySelector('h3').textContent;
                        console.log(`Selected: ${gameName}`);
                    });
                });

                // Smooth scroll for CTA button
                document.querySelector('.bg-gradient-to-r button').addEventListener('click', function() {
                    document.querySelector('.bg-gray-900\\/50').scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                });
            });
        </script>
@endsection