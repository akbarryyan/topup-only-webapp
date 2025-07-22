<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PI TOPUP - Top Up Game Digital Terpercaya & Termurah</title>
        <meta name="description" content="PI TOPUP - Platform top up diamond, UC, gold dan item game favorit dengan harga termurah. Proses instant 24/7 dan 100% aman. Weekly Diamond Pass hanya Rp 22.500!">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-['Hanken_Grotesk'] bg-gradient-to-br from-[#121212] to-[#1a1a1a] min-h-screen text-white antialiased">

        <div class="min-h-screen flex flex-col">
            <x-navbar />
            
            <main class="flex-1">
                @yield('content')
            </main>
            
            <!-- Footer -->
            <footer class="bg-[#191A1B] border-t border-gray-800 py-8 px-4 mt-12">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-trophy text-black text-sm"></i>
                                </div>
                                <span class="text-white font-bold text-lg">PI TOPUP</span>
                            </div>
                            <p class="text-gray-400 text-sm">Platform top up game digital terpercaya dengan harga termurah dan proses tercepat.</p>
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fab fa-telegram text-xl"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-4">Game Populer</h3>
                            <ul class="space-y-2 text-sm text-gray-400">
                                <li><a href="#" class="hover:text-white transition-colors">Mobile Legends</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">PUBG Mobile</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">Free Fire</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">Roblox</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-4">Pembayaran</h3>
                            <ul class="space-y-2 text-sm text-gray-400">
                                <li><a href="#" class="hover:text-white transition-colors">DANA</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">OVO</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">GoPay</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">QRIS</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-4">Bantuan</h3>
                            <ul class="space-y-2 text-sm text-gray-400">
                                <li><a href="#" class="hover:text-white transition-colors">Cara Pembelian</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">Hubungi Kami</a></li>
                                <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-t border-gray-800 mt-8 pt-6 text-center">
                        <p class="text-gray-400 text-sm">© 2025 PI TOPUP. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Loading Overlay -->
        <div id="loading-overlay" class="hidden fixed inset-0 bg-black/50 z-50 items-center justify-center">
            <div class="bg-gray-800 rounded-lg p-8 text-center">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500 mx-auto mb-4"></div>
                <p class="text-white">Memproses transaksi...</p>
            </div>
        </div>
    </body>