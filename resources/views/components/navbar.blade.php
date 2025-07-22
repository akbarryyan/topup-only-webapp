<!-- Header -->
        <header class="bg-[#191A1B] px-4 py-3 border-b border-gray-800 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="PI TOPUP" class="h-6 hover:scale-105 transition-transform duration-300" />
                    </a>
                </div>

                <!-- Search Bar (Desktop) -->
                <div class="hidden md:flex flex-1 max-w-md mx-8">
                    <div class="relative w-full">
                        <input 
                            type="text" 
                            placeholder="Cari game favorit..." 
                            class="w-full bg-gray-800 border border-gray-600 rounded-full px-4 py-2 pl-4 pr-10 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:outline-none transition-colors"
                        />
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-search text-sm"></i>
                        </button>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="flex items-center space-x-3">
                    <!-- Desktop Menu -->
                    <nav class="hidden lg:flex items-center space-x-6 mr-6">
                        <a href="{{ url('/') }}" class="flex items-center space-x-2 {{ request()->is('/') ? 'text-orange-400 bg-orange-400/10' : 'text-gray-300 hover:text-white' }} transition-all duration-300 hover:scale-105 px-3 py-2 rounded-lg {{ request()->is('/') ? 'hover:bg-orange-400/20' : 'hover:bg-gray-700/30' }}">
                            <i class="fas fa-coins text-sm"></i>
                            <span class="text-sm font-medium">Top up</span>
                        </a>
                        <a href="{{ route('check-order') }}" class="flex items-center space-x-2 {{ request()->routeIs('check-order') ? 'text-blue-400 bg-blue-400/10' : 'text-gray-300 hover:text-white' }} transition-all duration-300 hover:scale-105 px-3 py-2 rounded-lg {{ request()->routeIs('check-order') ? 'hover:bg-blue-400/20' : 'hover:bg-gray-700/30' }}">
                            <i class="fas fa-receipt text-sm"></i>
                            <span class="text-sm font-medium">Check Order</span>
                        </a>
                        <a href="{{ route('news') }}" class="flex items-center space-x-2 {{ request()->routeIs('news') ? 'text-green-400 bg-green-400/10' : 'text-gray-300 hover:text-white' }} transition-all duration-300 hover:scale-105 px-3 py-2 rounded-lg {{ request()->routeIs('news') ? 'hover:bg-green-400/20' : 'hover:bg-gray-700/30' }}">
                            <i class="fas fa-newspaper text-sm"></i>
                            <span class="text-sm font-medium">News</span>
                        </a>
                        <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white transition-all duration-300 hover:scale-105 px-3 py-2 rounded-lg hover:bg-gray-700/30">
                            <i class="fas fa-calculator text-sm"></i>
                            <span class="text-sm font-medium">Calculator</span>
                        </a>
                    </nav>

                    <!-- Login Button (Desktop) -->
                    <a href="{{ route('login') }}" class="hidden lg:flex items-center space-x-2 {{ request()->routeIs('login') || request()->routeIs('register') ? 'bg-gradient-to-r from-green-600 to-green-700 hover:from-green-500 hover:to-green-600 shadow-green-500/25' : 'bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 shadow-blue-500/25' }} text-white px-6 py-2.5 rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg border border-blue-500/20">
                        <i class="fas fa-sign-in-alt text-sm"></i>
                        <span class="text-sm font-semibold">{{ request()->routeIs('login') || request()->routeIs('register') ? 'Account' : 'Login' }}</span>
                    </a>

                    <!-- Search Button (Mobile) -->
                    <button
                        class="md:hidden bg-transparent border border-gray-600 hover:bg-gray-600 py-2 px-4 rounded-full transition-colors"
                    >
                        <i class="fas fa-search text-sm"></i>
                    </button>

                    <!-- Language Selector -->
                    <div class="flex items-center border border-gray-600 rounded-full px-3 py-2 cursor-pointer hover:bg-gray-700 transition-colors">
                        <div class="w-5 h-5 rounded-full mr-2 overflow-hidden">
                            <svg viewBox="0 0 64 64" class="w-full h-full">
                                <rect width="64" height="32" fill="#ff0000"/>
                                <rect y="32" width="64" height="32" fill="#ffffff"/>
                            </svg>
                        </div>
                        <span class="text-white text-sm font-medium">ID</span>
                        <i class="fas fa-chevron-down text-gray-400 text-xs ml-1"></i>
                    </div>

                    <!-- Menu Button (Mobile/Tablet only) -->
                    <button id="menuToggle" class="lg:hidden bg-transparent border border-gray-600 hover:bg-gray-600 px-4 py-2 rounded-full transition-colors group">
                        <i class="fas fa-bars text-sm group-hover:text-white"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Sidebar Overlay -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 opacity-0 invisible transition-all duration-300"></div>

        <!-- Sidebar Menu -->
        <div id="sidebar" class="fixed top-0 right-0 h-full w-80 bg-[#191A1B] border-l border-gray-800 z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-800">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/images/logo.webp') }}" alt="Logo" class="h-6" />
                </div>
                <button id="closeSidebar" class="text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <!-- Sidebar Content -->
            <div class="px-3 py-4 space-y-6">
                <!-- User Section -->
                <div class="bg-gray-800/50 rounded-lg p-4 {{ request()->routeIs('login') || request()->routeIs('register') ? 'border border-green-400/30' : '' }}">
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="w-10 h-10 {{ request()->routeIs('login') || request()->routeIs('register') ? 'bg-gradient-to-r from-green-500 to-blue-600' : 'bg-gradient-to-r from-blue-500 to-purple-600' }} rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold">Guest User</h3>
                            <p class="text-gray-400 text-sm">{{ request()->routeIs('login') || request()->routeIs('register') ? 'Sedang mengakses akun' : 'Masuk untuk pengalaman terbaik' }}</p>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('login') }}" class="flex-1 {{ request()->routeIs('login') ? 'bg-green-600 hover:bg-green-700' : 'bg-blue-600 hover:bg-blue-700' }} text-white text-sm font-medium py-2 px-3 rounded-lg transition-colors text-center">
                            {{ request()->routeIs('login') ? 'Login Aktif' : 'Masuk' }}
                        </a>
                        <a href="{{ route('register') }}" class="flex-1 {{ request()->routeIs('register') ? 'bg-green-700 hover:bg-green-600' : 'bg-gray-700 hover:bg-gray-600' }} text-white text-sm font-medium py-2 px-3 rounded-lg transition-colors text-center">
                            {{ request()->routeIs('register') ? 'Register Aktif' : 'Daftar' }}
                        </a>
                    </div>
                </div>

                <!-- Menu Items -->
                <nav class="space-y-2">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3 px-3 py-3 rounded-lg {{ request()->is('/') ? 'bg-orange-400/20 border border-orange-400/30' : 'hover:bg-gray-800' }} transition-colors group">
                        <i class="fas fa-home {{ request()->is('/') ? 'text-orange-400' : 'text-gray-400 group-hover:text-blue-400' }} transition-colors"></i>
                        <span class="{{ request()->is('/') ? 'text-orange-400' : 'text-white group-hover:text-blue-400' }} transition-colors">Beranda</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-lg hover:bg-gray-800 transition-colors group">
                        <i class="fas fa-gamepad text-gray-400 group-hover:text-blue-400 transition-colors"></i>
                        <span class="text-white group-hover:text-blue-400 transition-colors">Semua Game</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-lg hover:bg-gray-800 transition-colors group">
                        <i class="fas fa-fire text-gray-400 group-hover:text-orange-400 transition-colors"></i>
                        <span class="text-white group-hover:text-orange-400 transition-colors">Best Seller</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-lg hover:bg-gray-800 transition-colors group">
                        <i class="fas fa-gift text-gray-400 group-hover:text-green-400 transition-colors"></i>
                        <span class="text-white group-hover:text-green-400 transition-colors">Promo</span>
                    </a>
                    <a href="{{ route('check-order') }}" class="flex items-center space-x-3 px-3 py-3 rounded-lg {{ request()->routeIs('check-order') ? 'bg-blue-400/20 border border-blue-400/30' : 'hover:bg-gray-800' }} transition-colors group">
                        <i class="fas fa-receipt {{ request()->routeIs('check-order') ? 'text-blue-400' : 'text-gray-400 group-hover:text-blue-400' }} transition-colors"></i>
                        <span class="{{ request()->routeIs('check-order') ? 'text-blue-400' : 'text-white group-hover:text-blue-400' }} transition-colors">Check Order</span>
                    </a>
                    <a href="{{ route('news') }}" class="flex items-center space-x-3 px-3 py-3 rounded-lg {{ request()->routeIs('news') ? 'bg-green-400/20 border border-green-400/30' : 'hover:bg-gray-800' }} transition-colors group">
                        <i class="fas fa-newspaper {{ request()->routeIs('news') ? 'text-green-400' : 'text-gray-400 group-hover:text-green-400' }} transition-colors"></i>
                        <span class="{{ request()->routeIs('news') ? 'text-green-400' : 'text-white group-hover:text-green-400' }} transition-colors">News & Updates</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-3 py-3 rounded-lg hover:bg-gray-800 transition-colors group">
                        <i class="fas fa-headset text-gray-400 group-hover:text-blue-400 transition-colors"></i>
                        <span class="text-white group-hover:text-blue-400 transition-colors">Bantuan</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- JavaScript for Sidebar -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const menuToggle = document.getElementById('menuToggle');
                const sidebar = document.getElementById('sidebar');
                const sidebarOverlay = document.getElementById('sidebarOverlay');
                const closeSidebar = document.getElementById('closeSidebar');

                function openSidebar() {
                    sidebar.classList.remove('translate-x-full');
                    sidebarOverlay.classList.remove('opacity-0', 'invisible');
                    document.body.style.overflow = 'hidden';
                    // Add blur to main content
                    document.querySelector('main').style.filter = 'blur(4px)';
                    document.querySelector('header').style.filter = 'blur(4px)';
                    document.querySelector('footer').style.filter = 'blur(4px)';
                }

                function closeSidebarFunc() {
                    sidebar.classList.add('translate-x-full');
                    sidebarOverlay.classList.add('opacity-0', 'invisible');
                    document.body.style.overflow = '';
                    // Remove blur from main content
                    document.querySelector('main').style.filter = '';
                    document.querySelector('header').style.filter = '';
                    document.querySelector('footer').style.filter = '';
                }

                menuToggle.addEventListener('click', openSidebar);
                closeSidebar.addEventListener('click', closeSidebarFunc);
                sidebarOverlay.addEventListener('click', closeSidebarFunc);

                // Close sidebar on escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        closeSidebarFunc();
                    }
                });
            });
        </script>