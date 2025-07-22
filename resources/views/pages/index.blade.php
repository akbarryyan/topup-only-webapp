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

                <!-- News Section -->
                <div class="bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-2">
                            <h2 class="text-xl font-bold text-white">NEWS & UPDATES</h2>
                            <div class="animate-pulse">
                                <i class="fas fa-newspaper text-blue-400 text-lg"></i>
                            </div>
                        </div>
                        <span class="text-blue-400 text-sm hover:text-blue-300 transition-colors cursor-pointer">Lihat Semua →</span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- News Item 1 -->
                        <div class="bg-gray-800/50 rounded-lg p-4 border border-gray-700/50 hover:border-blue-500/50 hover:bg-gray-800/70 transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="bg-blue-500 rounded-full p-2 flex-shrink-0">
                                    <i class="fas fa-gift text-white text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-white font-semibold text-sm mb-2">Promo Spesial Mobile Legends!</h3>
                                    <p class="text-gray-300 text-xs mb-2">Dapatkan bonus diamond hingga 20% untuk setiap pembelian diamond Mobile Legends. Promo berlaku sampai akhir bulan!</p>
                                    <div class="flex items-center text-gray-400 text-xs">
                                        <i class="fas fa-clock mr-1"></i>
                                        <span>2 hari yang lalu</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Item 2 -->
                        <div class="bg-gray-800/50 rounded-lg p-4 border border-gray-700/50 hover:border-green-500/50 hover:bg-gray-800/70 transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="bg-green-500 rounded-full p-2 flex-shrink-0">
                                    <i class="fas fa-shield-alt text-white text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-white font-semibold text-sm mb-2">Keamanan Transaksi Ditingkatkan</h3>
                                    <p class="text-gray-300 text-xs mb-2">Kami telah menambahkan lapisan keamanan baru untuk melindungi setiap transaksi Anda. 100% aman dan terpercaya!</p>
                                    <div class="flex items-center text-gray-400 text-xs">
                                        <i class="fas fa-clock mr-1"></i>
                                        <span>5 hari yang lalu</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Item 3 -->
                        <div class="bg-gray-800/50 rounded-lg p-4 border border-gray-700/50 hover:border-purple-500/50 hover:bg-gray-800/70 transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="bg-purple-500 rounded-full p-2 flex-shrink-0">
                                    <i class="fas fa-gamepad text-white text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-white font-semibold text-sm mb-2">Game Baru Tersedia!</h3>
                                    <p class="text-gray-300 text-xs mb-2">Sekarang kami support top up untuk Honkai Star Rail dan Zenless Zone Zero. Buruan coba sekarang!</p>
                                    <div class="flex items-center text-gray-400 text-xs">
                                        <i class="fas fa-clock mr-1"></i>
                                        <span>1 minggu yang lalu</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News Item 4 -->
                        <div class="bg-gray-800/50 rounded-lg p-4 border border-gray-700/50 hover:border-orange-500/50 hover:bg-gray-800/70 transition-all duration-300">
                            <div class="flex items-start space-x-3">
                                <div class="bg-orange-500 rounded-full p-2 flex-shrink-0">
                                    <i class="fas fa-bolt text-white text-sm"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-white font-semibold text-sm mb-2">Server Maintenance Selesai</h3>
                                    <p class="text-gray-300 text-xs mb-2">Maintenance server telah selesai. Sekarang proses top up lebih cepat hingga 50% dari sebelumnya!</p>
                                    <div class="flex items-center text-gray-400 text-xs">
                                        <i class="fas fa-clock mr-1"></i>
                                        <span>2 minggu yang lalu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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