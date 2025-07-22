<!-- Header -->
        <header class="bg-[#191A1B] px-4 py-3 border-b border-gray-800 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('assets/images/logo.webp') }}" alt="PI TOPUP" class="h-6" />
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

                    <!-- Menu Button -->
                    <button class="bg-transparent border border-gray-600 hover:bg-gray-600 px-4 py-2 rounded-full transition-colors group">
                        <i class="fas fa-bars text-sm group-hover:text-white"></i>
                    </button>
                </div>
            </div>
        </header>