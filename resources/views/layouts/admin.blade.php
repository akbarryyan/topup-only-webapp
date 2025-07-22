<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Admin Dashboard - PI TOPUP')</title>
        <meta name="description" content="PI TOPUP Admin Dashboard - Kelola platform top up game digital dengan mudah dan efisien">

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

        <div class="min-h-screen">
            <!-- Admin Sidebar Navigation (Optional - untuk navigasi antar halaman admin) -->
            <aside id="admin-sidebar" class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
                <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-[#18191A] border-r border-gray-700 px-6 pb-4">
                    <!-- Logo -->
                    <div class="flex h-16 shrink-0 items-center">
                        <h2 class="text-xl font-bold text-white">
                            <span class="text-[#F8A208]">PI</span> ADMIN
                        </h2>
                    </div>
                    
                    <!-- Navigation -->
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="{{ route('admin.dashboard') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.dashboard') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-home w-6 h-6 shrink-0"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.products') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.products') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-box w-6 h-6 shrink-0"></i>
                                            Products
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.orders') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.orders') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-shopping-cart w-6 h-6 shrink-0"></i>
                                            Orders
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.users') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.users') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-users w-6 h-6 shrink-0"></i>
                                            Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.transactions') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.transactions') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-credit-card w-6 h-6 shrink-0"></i>
                                            Transactions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.reports') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.reports') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-chart-bar w-6 h-6 shrink-0"></i>
                                            Reports
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.analytics') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.analytics') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-chart-line w-6 h-6 shrink-0"></i>
                                            Analytics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.settings') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.settings') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                            <i class="fas fa-cog w-6 h-6 shrink-0"></i>
                                            Settings
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <!-- Logout -->
                            <li class="mt-auto">
                                <a href="/" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold text-gray-300 hover:text-white hover:bg-gray-700">
                                    <i class="fas fa-arrow-left w-6 h-6 shrink-0"></i>
                                    Back to Site
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <div class="flex items-center justify-between bg-[#18191A] px-4 py-4 border-b border-gray-700">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="text-lg font-bold text-white">
                        <span class="text-[#F8A208]">PI</span> ADMIN
                    </h2>
                    <div class="w-6"></div>
                </div>
            </div>

            <!-- Main Content -->
            <main class="lg:pl-72">
                @yield('content')
            </main>
        </div>

        <!-- Mobile Sidebar Overlay -->
        <div id="mobile-overlay" class="hidden fixed inset-0 z-50 lg:hidden">
            <div class="fixed inset-0 bg-black/50" id="mobile-backdrop"></div>
            <div class="fixed inset-y-0 left-0 z-50 w-72 bg-[#18191A] border-r border-gray-700">
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-700">
                    <h2 class="text-lg font-bold text-white">
                        <span class="text-[#F8A208]">PI</span> ADMIN
                    </h2>
                    <button id="mobile-close-btn" class="text-gray-300 hover:text-white">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <!-- Mobile Navigation -->
                <nav class="flex flex-1 flex-col px-6 py-4">
                    <ul role="list" class="space-y-1">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.dashboard') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-home w-6 h-6 shrink-0"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.products') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.products') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-box w-6 h-6 shrink-0"></i>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.orders') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.orders') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-shopping-cart w-6 h-6 shrink-0"></i>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.users') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-users w-6 h-6 shrink-0"></i>
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.transactions') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.transactions') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-credit-card w-6 h-6 shrink-0"></i>
                                Transactions
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.reports') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.reports') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-chart-bar w-6 h-6 shrink-0"></i>
                                Reports
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.analytics') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.analytics') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-chart-line w-6 h-6 shrink-0"></i>
                                Analytics
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.settings') }}" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('admin.settings') ? 'bg-[#F8A208] text-black' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                                <i class="fas fa-cog w-6 h-6 shrink-0"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                    
                    <div class="mt-auto pt-6">
                        <a href="/" class="group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold text-gray-300 hover:text-white hover:bg-gray-700">
                            <i class="fas fa-arrow-left w-6 h-6 shrink-0"></i>
                            Back to Site
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <script>
            // Mobile menu toggle functionality
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuBtn = document.getElementById('mobile-menu-btn');
                const mobileCloseBtn = document.getElementById('mobile-close-btn');
                const mobileOverlay = document.getElementById('mobile-overlay');
                const mobileBackdrop = document.getElementById('mobile-backdrop');
                
                function openMobileMenu() {
                    mobileOverlay.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
                
                function closeMobileMenu() {
                    mobileOverlay.classList.add('hidden');
                    document.body.style.overflow = '';
                }
                
                if (mobileMenuBtn) {
                    mobileMenuBtn.addEventListener('click', openMobileMenu);
                }
                
                if (mobileCloseBtn) {
                    mobileCloseBtn.addEventListener('click', closeMobileMenu);
                }
                
                if (mobileBackdrop) {
                    mobileBackdrop.addEventListener('click', closeMobileMenu);
                }
                
                // Close mobile menu on escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        closeMobileMenu();
                    }
                });
            });
        </script>
    </body>
</html>
