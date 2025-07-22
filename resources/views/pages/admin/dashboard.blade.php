@extends('layouts.admin')

@section('title', 'Admin Dashboard - PI TOPUP')

@section('content')
    <!-- Admin Header -->
    <div class="relative bg-black/90 backdrop-blur-xl border-b border-cyan-500/20 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/20 via-blue-900/20 to-cyan-900/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute top-0 right-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6 py-8 lg:py-12">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg shadow-cyan-500/25">
                            <i class="fas fa-chart-line text-black text-xl font-bold"></i>
                        </div>
                        <div>
                            <h1 class="text-4xl lg:text-5xl font-black bg-gradient-to-r from-white via-cyan-200 to-purple-300 bg-clip-text text-transparent">
                                ADMIN CONTROL
                            </h1>
                            <p class="text-cyan-300 text-lg font-medium tracking-wide">Advanced Analytics Dashboard</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <!-- Real-time Clock -->
                    <div class="bg-gradient-to-r from-cyan-500/20 to-purple-500/20 backdrop-blur-sm border border-cyan-400/30 px-6 py-4 rounded-2xl shadow-xl shadow-cyan-500/10">
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-cyan-400 rounded-full animate-ping"></div>
                            <span class="text-white font-mono text-lg font-bold" id="current-time"></span>
                        </div>
                    </div>
                    
                    <!-- Status Indicator -->
                    <div class="bg-gradient-to-r from-emerald-500/20 to-green-500/20 backdrop-blur-sm border border-emerald-400/30 px-6 py-4 rounded-2xl shadow-xl shadow-emerald-500/10">
                        <div class="flex items-center space-x-3">
                            <div class="relative">
                                <div class="w-3 h-3 bg-emerald-400 rounded-full"></div>
                                <div class="absolute inset-0 w-3 h-3 bg-emerald-400 rounded-full animate-ping opacity-75"></div>
                            </div>
                            <span class="text-emerald-300 font-bold tracking-wide">SYSTEM ONLINE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="min-h-screen bg-black relative overflow-hidden">
        <!-- Futuristic Background Effects -->
        <div class="absolute inset-0 bg-gradient-to-br from-purple-900/20 via-black to-cyan-900/20"></div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/6 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 right-1/6 w-80 h-80 bg-cyan-500/10 rounded-full blur-3xl animate-pulse delay-500"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-pink-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6 py-10">
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8 mb-12">
                <!-- Total Revenue -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/20 to-green-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-black/80 backdrop-blur-xl border border-emerald-500/30 rounded-3xl p-8 hover:border-emerald-400/50 transition-all duration-500 hover:scale-105">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-400 to-green-600 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover:rotate-12 transition-transform duration-500">
                                <i class="fas fa-dollar-sign text-black text-2xl font-bold"></i>
                            </div>
                            <div class="text-right">
                                <div class="bg-emerald-500/20 backdrop-blur-sm border border-emerald-400/40 px-4 py-2 rounded-full">
                                    <span class="text-emerald-300 text-sm font-bold">↗ +12.5%</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-emerald-300 text-sm font-bold uppercase tracking-widest">TOTAL REVENUE</h3>
                            <p class="text-4xl font-black text-white">Rp 125.8M</p>
                            <p class="text-emerald-400 text-base font-medium">+Rp 15.2M from last month</p>
                        </div>
                        <!-- Glow Effect -->
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-emerald-500/5 to-green-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <!-- Total Orders -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-black/80 backdrop-blur-xl border border-blue-500/30 rounded-3xl p-8 hover:border-blue-400/50 transition-all duration-500 hover:scale-105">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-cyan-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:rotate-12 transition-transform duration-500">
                                <i class="fas fa-shopping-cart text-black text-2xl font-bold"></i>
                            </div>
                            <div class="text-right">
                                <div class="bg-blue-500/20 backdrop-blur-sm border border-blue-400/40 px-4 py-2 rounded-full">
                                    <span class="text-blue-300 text-sm font-bold">↗ +8.2%</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-blue-300 text-sm font-bold uppercase tracking-widest">TOTAL ORDERS</h3>
                            <p class="text-4xl font-black text-white">24,589</p>
                            <p class="text-blue-400 text-base font-medium">+1,892 from last month</p>
                        </div>
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500/5 to-cyan-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <!-- Active Users -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-black/80 backdrop-blur-xl border border-purple-500/30 rounded-3xl p-8 hover:border-purple-400/50 transition-all duration-500 hover:scale-105">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:rotate-12 transition-transform duration-500">
                                <i class="fas fa-users text-black text-2xl font-bold"></i>
                            </div>
                            <div class="text-right">
                                <div class="bg-purple-500/20 backdrop-blur-sm border border-purple-400/40 px-4 py-2 rounded-full">
                                    <span class="text-purple-300 text-sm font-bold">↗ +15.3%</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-purple-300 text-sm font-bold uppercase tracking-widest">ACTIVE USERS</h3>
                            <p class="text-4xl font-black text-white">18,249</p>
                            <p class="text-purple-400 text-base font-medium">+2,103 from last month</p>
                        </div>
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <!-- Conversion Rate -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-black/80 backdrop-blur-xl border border-yellow-500/30 rounded-3xl p-8 hover:border-yellow-400/50 transition-all duration-500 hover:scale-105">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg shadow-yellow-500/30 group-hover:rotate-12 transition-transform duration-500">
                                <i class="fas fa-chart-line text-black text-2xl font-bold"></i>
                            </div>
                            <div class="text-right">
                                <div class="bg-yellow-500/20 backdrop-blur-sm border border-yellow-400/40 px-4 py-2 rounded-full">
                                    <span class="text-yellow-300 text-sm font-bold">↗ +3.1%</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <h3 class="text-yellow-300 text-sm font-bold uppercase tracking-widest">CONVERSION RATE</h3>
                            <p class="text-4xl font-black text-white">68.4%</p>
                            <p class="text-yellow-400 text-base font-medium">+2.1% from last month</p>
                        </div>
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-yellow-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>

            <!-- Charts and Analytics Section -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-10 mb-12">
                <!-- Revenue Analytics -->
                <div class="xl:col-span-2 group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-purple-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-black/80 backdrop-blur-xl border border-cyan-500/30 rounded-3xl p-8 hover:border-cyan-400/50 transition-all duration-500">
                        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between mb-8">
                            <div>
                                <h3 class="text-3xl font-black text-white mb-3">REVENUE ANALYTICS</h3>
                                <p class="text-cyan-300 text-lg font-medium">Real-time financial performance</p>
                            </div>
                            <div class="mt-4 lg:mt-0">
                                <select class="bg-black/60 backdrop-blur-sm border border-cyan-500/30 rounded-2xl px-6 py-3 text-white text-base font-medium focus:border-cyan-400 focus:outline-none focus:ring-2 focus:ring-cyan-400/20 transition-all">
                                    <option>Last 7 days</option>
                                    <option>Last 30 days</option>
                                    <option>Last 3 months</option>
                                    <option>Last 6 months</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Chart Area -->
                        <div class="relative h-96 bg-gradient-to-br from-purple-900/20 via-black/40 to-cyan-900/20 rounded-2xl border border-cyan-500/20 overflow-hidden">
                            <!-- Grid Pattern -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="h-full w-full" style="background-image: linear-gradient(cyan 1px, transparent 1px), linear-gradient(90deg, cyan 1px, transparent 1px); background-size: 50px 50px;"></div>
                            </div>
                            
                            <!-- Chart Placeholder with Neon Effect -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center space-y-6">
                                    <div class="w-24 h-24 bg-gradient-to-br from-cyan-400 to-purple-600 rounded-3xl flex items-center justify-center mx-auto shadow-2xl shadow-cyan-500/30 animate-pulse">
                                        <i class="fas fa-chart-area text-black text-4xl font-bold"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-white text-2xl font-bold mb-2">NEURAL CHART SYSTEM</h4>
                                        <p class="text-cyan-300 text-lg">Advanced Analytics Engine</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Animated Glow Lines -->
                            <div class="absolute inset-0 overflow-hidden">
                                <div class="absolute top-1/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-cyan-400 to-transparent animate-pulse"></div>
                                <div class="absolute top-2/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-purple-400 to-transparent animate-pulse delay-500"></div>
                                <div class="absolute top-3/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-pink-400 to-transparent animate-pulse delay-1000"></div>
                            </div>
                        </div>
                        
                        <!-- Glow Effect -->
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-cyan-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="space-y-8">
                    <!-- Top Games Performance -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500/20 to-purple-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                        <div class="relative bg-black/80 backdrop-blur-xl border border-pink-500/30 rounded-3xl p-8 hover:border-pink-400/50 transition-all duration-500">
                            <h3 class="text-2xl font-black text-white mb-6 tracking-wide">TOP GAMES</h3>
                            <div class="space-y-5">
                                <div class="bg-gradient-to-r from-blue-900/30 to-purple-900/30 backdrop-blur-sm border border-blue-500/20 rounded-2xl p-5 hover:border-blue-400/40 transition-all duration-300 group/item">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover/item:rotate-12 transition-transform duration-300">
                                                <i class="fas fa-gem text-black text-lg font-bold"></i>
                                            </div>
                                            <div>
                                                <p class="text-white font-bold text-lg">Mobile Legends</p>
                                                <p class="text-blue-300 text-sm">8,456 orders today</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-cyan-300 text-2xl font-black">68%</span>
                                            <p class="text-gray-400 text-sm">dominance</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bg-gradient-to-r from-yellow-900/30 to-orange-900/30 backdrop-blur-sm border border-yellow-500/20 rounded-2xl p-5 hover:border-yellow-400/40 transition-all duration-300 group/item">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-yellow-500/30 group-hover/item:rotate-12 transition-transform duration-300">
                                                <i class="fas fa-fire text-black text-lg font-bold"></i>
                                            </div>
                                            <div>
                                                <p class="text-white font-bold text-lg">Free Fire</p>
                                                <p class="text-yellow-300 text-sm">5,234 orders today</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-cyan-300 text-2xl font-black">21%</span>
                                            <p class="text-gray-400 text-sm">market</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bg-gradient-to-r from-purple-900/30 to-pink-900/30 backdrop-blur-sm border border-purple-500/20 rounded-2xl p-5 hover:border-purple-400/40 transition-all duration-300 group/item">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-600 rounded-xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover/item:rotate-12 transition-transform duration-300">
                                                <i class="fas fa-star text-black text-lg font-bold"></i>
                                            </div>
                                            <div>
                                                <p class="text-white font-bold text-lg">PUBG Mobile</p>
                                                <p class="text-purple-300 text-sm">3,891 orders today</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-cyan-300 text-2xl font-black">11%</span>
                                            <p class="text-gray-400 text-sm">share</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                        <div class="relative bg-black/80 backdrop-blur-xl border border-emerald-500/30 rounded-3xl p-8 hover:border-emerald-400/50 transition-all duration-500">
                            <h3 class="text-2xl font-black text-white mb-6 tracking-wide">QUICK ACTIONS</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <a href="{{ route('admin.products') }}" class="group/action relative bg-gradient-to-br from-yellow-900/30 to-orange-900/30 backdrop-blur-sm border border-yellow-500/30 rounded-2xl p-6 hover:border-yellow-400/60 transition-all duration-300 hover:scale-105">
                                    <div class="text-center space-y-4">
                                        <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-orange-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg shadow-yellow-500/30 group-hover/action:rotate-12 transition-transform duration-300">
                                            <i class="fas fa-plus text-black text-xl font-bold"></i>
                                        </div>
                                        <span class="block text-white text-base font-bold">ADD PRODUCT</span>
                                    </div>
                                </a>
                                
                                <a href="{{ route('admin.users') }}" class="group/action relative bg-gradient-to-br from-blue-900/30 to-cyan-900/30 backdrop-blur-sm border border-blue-500/30 rounded-2xl p-6 hover:border-blue-400/60 transition-all duration-300 hover:scale-105">
                                    <div class="text-center space-y-4">
                                        <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg shadow-blue-500/30 group-hover/action:rotate-12 transition-transform duration-300">
                                            <i class="fas fa-users text-black text-xl font-bold"></i>
                                        </div>
                                        <span class="block text-white text-base font-bold">USERS</span>
                                    </div>
                                </a>
                                
                                <a href="{{ route('admin.reports') }}" class="group/action relative bg-gradient-to-br from-emerald-900/30 to-green-900/30 backdrop-blur-sm border border-emerald-500/30 rounded-2xl p-6 hover:border-emerald-400/60 transition-all duration-300 hover:scale-105">
                                    <div class="text-center space-y-4">
                                        <div class="w-14 h-14 bg-gradient-to-br from-emerald-400 to-green-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg shadow-emerald-500/30 group-hover/action:rotate-12 transition-transform duration-300">
                                            <i class="fas fa-chart-bar text-black text-xl font-bold"></i>
                                        </div>
                                        <span class="block text-white text-base font-bold">REPORTS</span>
                                    </div>
                                </a>
                                
                                <a href="{{ route('admin.settings') }}" class="group/action relative bg-gradient-to-br from-purple-900/30 to-pink-900/30 backdrop-blur-sm border border-purple-500/30 rounded-2xl p-6 hover:border-purple-400/60 transition-all duration-300 hover:scale-105">
                                    <div class="text-center space-y-4">
                                        <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-pink-600 rounded-2xl flex items-center justify-center mx-auto shadow-lg shadow-purple-500/30 group-hover/action:rotate-12 transition-transform duration-300">
                                            <i class="fas fa-cog text-black text-xl font-bold"></i>
                                        </div>
                                        <span class="block text-white text-base font-bold">SETTINGS</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Live Data Section -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-10">
                <!-- Real-time Transactions -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/20 to-blue-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-black/80 backdrop-blur-xl border border-emerald-500/30 rounded-3xl p-8 hover:border-emerald-400/50 transition-all duration-500">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-3xl font-black text-white tracking-wide">LIVE TRANSACTIONS</h3>
                            <button class="bg-gradient-to-r from-yellow-500/20 to-orange-500/20 backdrop-blur-sm border border-yellow-400/40 text-yellow-300 px-6 py-3 rounded-2xl font-bold hover:border-yellow-300/60 transition-all duration-300 hover:scale-105">
                                VIEW ALL
                            </button>
                        </div>
                        
                        <div class="space-y-5">
                            <!-- Success Transaction -->
                            <div class="bg-gradient-to-r from-emerald-900/30 to-green-900/30 backdrop-blur-sm border border-emerald-500/20 rounded-2xl p-6 hover:border-emerald-400/40 transition-all duration-300 group/tx">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-5">
                                        <div class="w-14 h-14 bg-gradient-to-br from-emerald-400 to-green-600 rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover/tx:rotate-12 transition-transform duration-300">
                                            <i class="fas fa-check text-black text-xl font-bold"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-bold text-xl">ML Diamond 1000+150</p>
                                            <p class="text-emerald-300 text-base">ID: 1234567890 | Server: 8991</p>
                                            <p class="text-gray-400 text-sm">2 minutes ago</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-emerald-300 font-black text-2xl">Rp 285K</p>
                                        <div class="bg-emerald-500/20 backdrop-blur-sm border border-emerald-400/40 px-4 py-2 rounded-full mt-2">
                                            <span class="text-emerald-300 text-sm font-bold">SUCCESS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Processing Transaction -->
                            <div class="bg-gradient-to-r from-yellow-900/30 to-orange-900/30 backdrop-blur-sm border border-yellow-500/20 rounded-2xl p-6 hover:border-yellow-400/40 transition-all duration-300 group/tx">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-5">
                                        <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg shadow-yellow-500/30 group-hover/tx:rotate-12 transition-transform duration-300 animate-pulse">
                                            <i class="fas fa-clock text-black text-xl font-bold"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-bold text-xl">FF Diamond 2180</p>
                                            <p class="text-yellow-300 text-base">ID: 987654321</p>
                                            <p class="text-gray-400 text-sm">5 minutes ago</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-white font-black text-2xl">Rp 315K</p>
                                        <div class="bg-yellow-500/20 backdrop-blur-sm border border-yellow-400/40 px-4 py-2 rounded-full mt-2">
                                            <span class="text-yellow-300 text-sm font-bold">PROCESSING</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- High Value Transaction -->
                            <div class="bg-gradient-to-r from-purple-900/30 to-pink-900/30 backdrop-blur-sm border border-purple-500/20 rounded-2xl p-6 hover:border-purple-400/40 transition-all duration-300 group/tx">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-5">
                                        <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover/tx:rotate-12 transition-transform duration-300">
                                            <i class="fas fa-crown text-black text-xl font-bold"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-bold text-xl">PUBG UC 8100</p>
                                            <p class="text-purple-300 text-base">ID: 5647382910</p>
                                            <p class="text-gray-400 text-sm">12 minutes ago</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-purple-300 font-black text-2xl">Rp 1.25M</p>
                                        <div class="bg-purple-500/20 backdrop-blur-sm border border-purple-400/40 px-4 py-2 rounded-full mt-2">
                                            <span class="text-purple-300 text-sm font-bold">VIP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Failed Transaction -->
                            <div class="bg-gradient-to-r from-red-900/30 to-rose-900/30 backdrop-blur-sm border border-red-500/20 rounded-2xl p-6 hover:border-red-400/40 transition-all duration-300 group/tx">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-5">
                                        <div class="w-14 h-14 bg-gradient-to-br from-red-400 to-rose-600 rounded-2xl flex items-center justify-center shadow-lg shadow-red-500/30 group-hover/tx:rotate-12 transition-transform duration-300">
                                            <i class="fas fa-times text-black text-xl font-bold"></i>
                                        </div>
                                        <div>
                                            <p class="text-white font-bold text-xl">ML Diamond 500+100</p>
                                            <p class="text-red-300 text-base">ID: 1111222233 | Server: 8991</p>
                                            <p class="text-gray-400 text-sm">18 minutes ago</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-gray-400 font-black text-2xl">Rp 145K</p>
                                        <div class="bg-red-500/20 backdrop-blur-sm border border-red-400/40 px-4 py-2 rounded-full mt-2">
                                            <span class="text-red-300 text-sm font-bold">FAILED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Glow Effect -->
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-emerald-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <!-- System Performance -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-purple-500/20 rounded-3xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <div class="relative bg-black/80 backdrop-blur-xl border border-cyan-500/30 rounded-3xl p-8 hover:border-cyan-400/50 transition-all duration-500">
                        <h3 class="text-3xl font-black text-white mb-8 tracking-wide">SYSTEM STATUS</h3>
                        
                        <div class="space-y-8">
                            <!-- Server Performance -->
                            <div class="bg-gradient-to-r from-emerald-900/30 to-green-900/30 backdrop-blur-sm border border-emerald-500/20 rounded-2xl p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-white text-xl font-bold">Neural Server</span>
                                    <div class="flex items-center space-x-3">
                                        <div class="relative">
                                            <div class="w-4 h-4 bg-emerald-400 rounded-full"></div>
                                            <div class="absolute inset-0 w-4 h-4 bg-emerald-400 rounded-full animate-ping opacity-75"></div>
                                        </div>
                                        <span class="text-emerald-300 text-lg font-bold">OPTIMAL</span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-800/50 rounded-full h-4 overflow-hidden mb-3">
                                    <div class="bg-gradient-to-r from-emerald-400 to-green-500 h-4 rounded-full transition-all duration-1000 shadow-lg shadow-emerald-500/30" style="width: 98%"></div>
                                </div>
                                <p class="text-emerald-300 text-base font-medium">98% uptime - Neural network active</p>
                            </div>
                            
                            <!-- API Response -->
                            <div class="bg-gradient-to-r from-blue-900/30 to-cyan-900/30 backdrop-blur-sm border border-blue-500/20 rounded-2xl p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-white text-xl font-bold">API Response</span>
                                    <span class="text-cyan-300 text-lg font-bold">125ms</span>
                                </div>
                                <div class="w-full bg-gray-800/50 rounded-full h-4 overflow-hidden mb-3">
                                    <div class="bg-gradient-to-r from-blue-400 to-cyan-500 h-4 rounded-full transition-all duration-1000 shadow-lg shadow-blue-500/30" style="width: 85%"></div>
                                </div>
                                <p class="text-blue-300 text-base font-medium">Lightning fast response</p>
                            </div>
                            
                            <!-- Database -->
                            <div class="bg-gradient-to-r from-purple-900/30 to-pink-900/30 backdrop-blur-sm border border-purple-500/20 rounded-2xl p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-white text-xl font-bold">Database Core</span>
                                    <div class="flex items-center space-x-3">
                                        <div class="relative">
                                            <div class="w-4 h-4 bg-purple-400 rounded-full"></div>
                                            <div class="absolute inset-0 w-4 h-4 bg-purple-400 rounded-full animate-ping opacity-75"></div>
                                        </div>
                                        <span class="text-purple-300 text-lg font-bold">SYNCED</span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-800/50 rounded-full h-4 overflow-hidden mb-3">
                                    <div class="bg-gradient-to-r from-purple-400 to-pink-500 h-4 rounded-full transition-all duration-1000 shadow-lg shadow-purple-500/30" style="width: 92%"></div>
                                </div>
                                <p class="text-purple-300 text-base font-medium">Response: 45ms</p>
                            </div>
                            
                            <!-- Storage -->
                            <div class="bg-gradient-to-r from-yellow-900/30 to-orange-900/30 backdrop-blur-sm border border-yellow-500/20 rounded-2xl p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-white text-xl font-bold">Quantum Storage</span>
                                    <span class="text-yellow-300 text-lg font-bold">68%</span>
                                </div>
                                <div class="w-full bg-gray-800/50 rounded-full h-4 overflow-hidden mb-3">
                                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-4 rounded-full transition-all duration-1000 shadow-lg shadow-yellow-500/30" style="width: 68%"></div>
                                </div>
                                <p class="text-yellow-300 text-base font-medium">34.2GB of 50GB used</p>
                            </div>

                            <!-- Neural Activity Log -->
                            <div class="bg-gradient-to-br from-gray-900/50 to-black/50 backdrop-blur-sm border border-gray-500/20 rounded-2xl p-6">
                                <h4 class="text-white font-black text-xl mb-5 tracking-wide">NEURAL ACTIVITY</h4>
                                <div class="space-y-4">
                                    <div class="flex items-center space-x-4 text-base">
                                        <div class="w-3 h-3 bg-emerald-400 rounded-full animate-pulse shadow-lg shadow-emerald-500/30"></div>
                                        <span class="text-emerald-300 font-medium">Quantum backup synchronized</span>
                                        <span class="text-gray-400 ml-auto">2m ago</span>
                                    </div>
                                    <div class="flex items-center space-x-4 text-base">
                                        <div class="w-3 h-3 bg-blue-400 rounded-full animate-pulse shadow-lg shadow-blue-500/30"></div>
                                        <span class="text-blue-300 font-medium">Neural user authenticated</span>
                                        <span class="text-gray-400 ml-auto">5m ago</span>
                                    </div>
                                    <div class="flex items-center space-x-4 text-base">
                                        <div class="w-3 h-3 bg-purple-400 rounded-full animate-pulse shadow-lg shadow-purple-500/30"></div>
                                        <span class="text-purple-300 font-medium">Cache matrix optimized</span>
                                        <span class="text-gray-400 ml-auto">12m ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Glow Effect -->
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-cyan-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- JavaScript -->
<script>
// Futuristic Cyberpunk Admin Dashboard JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Neural Real-time Clock System
    function updateQuantumClock() {
        const now = new Date();
        const timeOptions = {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false
        };
        const dateOptions = {
            weekday: 'short',
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        };
        
        const timeString = now.toLocaleTimeString('en-US', timeOptions);
        const dateString = now.toLocaleDateString('en-US', dateOptions);
        
        // Update clock element
        const clockElement = document.getElementById('current-time');
        if (clockElement) {
            clockElement.innerHTML = timeString;
        }
    }

    // Neural Progress Animation System
    function animateNeuralProgress() {
        const progressBars = document.querySelectorAll('.neural-progress-bar');
        progressBars.forEach((bar, index) => {
            setTimeout(() => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                    bar.style.transition = 'width 2s cubic-bezier(0.4, 0, 0.2, 1)';
                }, 100);
            }, index * 200);
        });
    }

    // Holographic Card Interaction System
    function initHolographicCards() {
        const cards = document.querySelectorAll('.holo-card');
        
        cards.forEach(card => {
            let isHovering = false;
            
            card.addEventListener('mouseenter', function() {
                isHovering = true;
                this.style.transform = 'translateY(-12px) scale(1.03)';
                this.style.boxShadow = '0 25px 50px rgba(6, 182, 212, 0.3), 0 0 30px rgba(139, 92, 246, 0.2)';
                
                // Add energy ripple effect
                const ripple = document.createElement('div');
                ripple.className = 'absolute inset-0 border-2 border-cyan-400/30 rounded-3xl animate-ping pointer-events-none';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    if (ripple.parentNode) {
                        ripple.remove();
                    }
                }, 1000);
            });
            
            card.addEventListener('mouseleave', function() {
                isHovering = false;
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.3)';
            });
        });
    }

    // Quantum Button Enhancement System
    function enhanceQuantumButtons() {
        const buttons = document.querySelectorAll('.quantum-btn');
        
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Create quantum ripple effect
                const ripple = document.createElement('div');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.className = 'absolute rounded-full bg-cyan-400/30 animate-ping pointer-events-none';
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
                
                // Add button feedback
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });
    }

    // Live Transaction Stream Simulation
    function simulateLiveTransactions() {
        const transactionContainer = document.querySelector('.space-y-4.max-h-80.overflow-y-auto');
        if (!transactionContainer) return;

        const gameTypes = [
            { name: 'ML Diamond Purchase', amount: 25.99, status: 'COMPLETED', color: 'emerald' },
            { name: 'PUBG UC Top-up', amount: 19.99, status: 'PROCESSING', color: 'yellow' },
            { name: 'Free Fire Diamonds', amount: 15.99, status: 'COMPLETED', color: 'purple' },
            { name: 'Genshin Impact', amount: 49.99, status: 'COMPLETED', color: 'cyan' },
            { name: 'Honor of Kings', amount: 29.99, status: 'PROCESSING', color: 'pink' },
            { name: 'Call of Duty Mobile', amount: 39.99, status: 'COMPLETED', color: 'emerald' }
        ];

        function addNewTransaction() {
            const game = gameTypes[Math.floor(Math.random() * gameTypes.length)];
            const userId = Math.floor(Math.random() * 9999) + 1000;
            const timeAgo = ['Just now', '1 min ago', '2 min ago'][Math.floor(Math.random() * 3)];

            const transactionHTML = `
                <div class="bg-gradient-to-r from-black/50 to-gray-900/30 rounded-xl p-4 border border-${game.color}-500/20 hover:border-${game.color}-500/50 transition-all duration-300 opacity-0 transform translate-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-${game.color}-500 rounded-full animate-pulse shadow-lg shadow-${game.color}-500/50"></div>
                            <div>
                                <p class="text-white font-medium">${game.name}</p>
                                <p class="text-gray-400 text-sm">User #${userId} • ${timeAgo}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-${game.color}-400 font-bold">+$${game.amount}</p>
                            <p class="text-xs ${game.status === 'COMPLETED' ? 'text-gray-500' : 'text-' + game.color + '-500'}">${game.status}</p>
                        </div>
                    </div>
                </div>
            `;

            // Remove oldest transaction if more than 5
            const transactions = transactionContainer.children;
            if (transactions.length >= 5) {
                const lastTransaction = transactions[transactions.length - 1];
                lastTransaction.style.opacity = '0';
                lastTransaction.style.transform = 'translateX(-100%)';
                setTimeout(() => {
                    if (lastTransaction.parentNode) {
                        lastTransaction.remove();
                    }
                }, 300);
            }

            // Add new transaction at the top
            transactionContainer.insertAdjacentHTML('afterbegin', transactionHTML);
            
            // Animate in
            const newTransaction = transactionContainer.firstElementChild;
            setTimeout(() => {
                newTransaction.style.opacity = '1';
                newTransaction.style.transform = 'translate(0)';
                newTransaction.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
            }, 100);
        }

        // Add new transaction every 10-15 seconds
        setInterval(addNewTransaction, 10000 + Math.random() * 5000);
    }

    // System Performance Real-time Updates
    function updateSystemPerformance() {
        const metrics = [
            { name: 'CPU Cores', element: null, min: 15, max: 35 },
            { name: 'Neural Memory', element: null, min: 60, max: 75 },
            { name: 'Network Bandwidth', element: null, min: 40, max: 55 },
            { name: 'Quantum Storage', element: null, min: 80, max: 88 }
        ];

        setInterval(() => {
            const progressBars = document.querySelectorAll('.neural-progress-bar');
            progressBars.forEach((bar, index) => {
                if (metrics[index]) {
                    const metric = metrics[index];
                    const newValue = (metric.min + Math.random() * (metric.max - metric.min)).toFixed(1);
                    bar.style.width = newValue + '%';
                    
                    // Update percentage text
                    const parentDiv = bar.closest('.space-y-6 > div');
                    if (parentDiv) {
                        const valueSpan = parentDiv.querySelector('.text-white.font-bold');
                        if (valueSpan) {
                            valueSpan.textContent = newValue + '%';
                        }
                    }
                }
            });
        }, 4000);
    }

    // Parallax Effect for Background Orbs
    function initParallaxEffect() {
        const orbs = document.querySelectorAll('.absolute.inset-0 > div');
        
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            orbs.forEach((orb, index) => {
                const speed = (index + 1) * 0.3;
                const x = (mouseX - 0.5) * speed * 15;
                const y = (mouseY - 0.5) * speed * 15;
                
                orb.style.transform = `translate(${x}px, ${y}px)`;
                orb.style.transition = 'transform 0.3s ease-out';
            });
        });
    }

    // Terminal-like Console Effects
    function initConsoleEffects() {
        console.log('%c⚡ QUANTUM ADMIN DASHBOARD INITIALIZED ⚡', 'color: #06b6d4; font-size: 16px; font-weight: bold; text-shadow: 0 0 10px #06b6d4;');
        console.log('%c🔮 Neural Networks: ONLINE', 'color: #8b5cf6; font-size: 14px; text-shadow: 0 0 5px #8b5cf6;');
        console.log('%c🌐 Data Streams: ACTIVE', 'color: #10b981; font-size: 14px; text-shadow: 0 0 5px #10b981;');
        console.log('%c⭐ Cyberpunk Mode: ENGAGED', 'color: #f59e0b; font-size: 14px; text-shadow: 0 0 5px #f59e0b;');
        console.log('%cSystem Status: All neural pathways operational. Welcome to the future.', 'color: #06b6d4; font-style: italic;');
    }

    // Initialize All Quantum Systems
    updateQuantumClock();
    setInterval(updateQuantumClock, 1000);
    
    setTimeout(() => {
        animateNeuralProgress();
        initHolographicCards();
        enhanceQuantumButtons();
        simulateLiveTransactions();
        updateSystemPerformance();
        initParallaxEffect();
        initConsoleEffects();
    }, 800);

    // Re-animate progress bars on visibility change
    document.addEventListener('visibilitychange', () => {
        if (!document.hidden) {
            setTimeout(animateNeuralProgress, 1000);
        }
    });

    // Add smooth scroll behavior
    document.documentElement.style.scrollBehavior = 'smooth';
});

// Expose Quantum Dashboard API
window.QuantumDashboard = {
    version: '2.1.0',
    mode: 'CYBERPUNK_NEURAL',
    status: 'OPERATIONAL',
    theme: 'FUTURISTIC_DARK'
};
</script>

<style>
/* Futuristic Cyberpunk Admin Dashboard Styles */

/* Custom Scrollbar - Neon Style */
.custom-scrollbar::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.5);
    border-radius: 6px;
    border: 1px solid rgba(6, 182, 212, 0.2);
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg, #06b6d4, #8b5cf6);
    border-radius: 6px;
    border: 1px solid rgba(139, 92, 246, 0.3);
    box-shadow: 0 0 10px rgba(6, 182, 212, 0.3);
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg, #0891b2, #7c3aed);
    box-shadow: 0 0 15px rgba(6, 182, 212, 0.5);
}

/* Neural Network Animations */
@keyframes neuralPulse {
    0%, 100% {
        opacity: 0.3;
        transform: scale(1);
    }
    50% {
        opacity: 1;
        transform: scale(1.1);
    }
}

@keyframes dataStream {
    0% {
        transform: translateX(-100%);
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        transform: translateX(100%);
        opacity: 0;
    }
}

@keyframes holographicGlow {
    0%, 100% {
        box-shadow: 0 0 20px rgba(6, 182, 212, 0.3);
    }
    50% {
        box-shadow: 0 0 40px rgba(139, 92, 246, 0.5), 0 0 60px rgba(6, 182, 212, 0.3);
    }
}

@keyframes quantumFloat {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
    }
    33% {
        transform: translateY(-10px) rotate(120deg);
    }
    66% {
        transform: translateY(5px) rotate(240deg);
    }
}

@keyframes matrixRain {
    0% {
        background-position: 0% 0%;
    }
    100% {
        background-position: 100% 100%;
    }
}

@keyframes energyRipple {
    0% {
        transform: scale(0.8);
        opacity: 1;
    }
    100% {
        transform: scale(2.5);
        opacity: 0;
    }
}

/* Neural Background Effect */
.neural-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 50%, rgba(6, 182, 212, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(236, 72, 153, 0.1) 0%, transparent 50%);
    animation: neuralPulse 4s ease-in-out infinite;
    pointer-events: none;
}

/* Holographic Cards */
.holo-card {
    position: relative;
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(6, 182, 212, 0.3);
    border-radius: 24px;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.holo-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(6, 182, 212, 0.1), transparent);
    animation: dataStream 3s ease-in-out infinite;
}

.holo-card:hover {
    transform: translateY(-8px) scale(1.02);
    border-color: rgba(6, 182, 212, 0.6);
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.3),
        0 0 30px rgba(6, 182, 212, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

/* Quantum Buttons */
.quantum-btn {
    position: relative;
    background: linear-gradient(135deg, rgba(6, 182, 212, 0.2), rgba(139, 92, 246, 0.2));
    border: 1px solid rgba(6, 182, 212, 0.4);
    border-radius: 16px;
    padding: 16px 24px;
    color: #ffffff;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    overflow: hidden;
}

.quantum-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.quantum-btn:hover::before {
    left: 100%;
}

.quantum-btn:hover {
    transform: translateY(-2px);
    border-color: rgba(6, 182, 212, 0.8);
    box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);
}

/* Neural Progress Bars */
.neural-progress {
    background: rgba(0, 0, 0, 0.5);
    border-radius: 10px;
    overflow: hidden;
    position: relative;
}

.neural-progress::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    animation: dataStream 2s ease-in-out infinite;
}

.neural-progress-bar {
    height: 100%;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(6, 182, 212, 0.3);
}

.neural-progress-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.1), transparent, rgba(255, 255, 255, 0.1));
    animation: dataStream 1.5s ease-in-out infinite;
}

/* Quantum Text Effects */
.quantum-text {
    background: linear-gradient(135deg, #06b6d4, #8b5cf6, #ec4899);
    background-size: 200% 200%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: matrixRain 3s ease-in-out infinite;
}

/* Energy Rings */
.energy-ring {
    position: relative;
}

.energy-ring::before,
.energy-ring::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    border: 2px solid rgba(6, 182, 212, 0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    animation: energyRipple 2s ease-out infinite;
}

.energy-ring::after {
    animation-delay: 1s;
    border-color: rgba(139, 92, 246, 0.3);
}

/* Holographic Status Indicators */
.status-indicator {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.status-indicator::before {
    content: '';
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: radial-gradient(circle, #10b981, #059669);
    box-shadow: 0 0 20px rgba(16, 185, 129, 0.6);
    animation: neuralPulse 2s ease-in-out infinite;
}

/* Neural Grid Pattern */
.neural-grid {
    background-image: 
        linear-gradient(rgba(6, 182, 212, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(6, 182, 212, 0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: matrixRain 10s linear infinite;
}

/* Cyberpunk Glow Text */
.cyber-glow {
    text-shadow: 
        0 0 5px rgba(6, 182, 212, 0.5),
        0 0 10px rgba(6, 182, 212, 0.3),
        0 0 15px rgba(6, 182, 212, 0.2);
}

/* Responsive Quantum Effects */
@media (max-width: 768px) {
    .holo-card:hover {
        transform: translateY(-4px) scale(1.01);
    }
    
    .quantum-btn {
        padding: 12px 20px;
        font-size: 14px;
    }
    
    .neural-progress {
        height: 12px;
    }
}

/* Performance Optimizations */
.will-change-transform {
    will-change: transform;
}

.hardware-accel {
    transform: translateZ(0);
    backface-visibility: hidden;
}

/* Dark Theme Scrollbar for Body */
html {
    scrollbar-width: thin;
    scrollbar-color: rgba(6, 182, 212, 0.6) rgba(0, 0, 0, 0.8);
}

body::-webkit-scrollbar {
    width: 12px;
}

body::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.8);
}

body::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg, #06b6d4, #8b5cf6);
    border-radius: 6px;
    border: 1px solid rgba(139, 92, 246, 0.3);
}

body::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg, #0891b2, #7c3aed);
}

/* Advanced Focus States */
.focus-quantum:focus {
    outline: none;
    border-color: rgba(6, 182, 212, 0.8);
    box-shadow: 
        0 0 0 3px rgba(6, 182, 212, 0.2),
        0 0 20px rgba(6, 182, 212, 0.3);
}

/* Neural Loading Animation */
@keyframes neuralLoad {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.neural-spinner {
    border: 3px solid rgba(6, 182, 212, 0.3);
    border-top: 3px solid #06b6d4;
    border-radius: 50%;
    animation: neuralLoad 1s linear infinite;
}
</style>
@endsection
