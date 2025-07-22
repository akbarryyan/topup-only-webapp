@extends('layouts.app')

@section('title', 'Mobile Legends: Bang Bang - Diamond Top Up')

@section('content')
<div class="min-h-screen">
    <!-- Product Header -->
    <div class="bg-transparent backdrop-blur-sm border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="flex flex-col lg:flex-row items-start lg:items-center gap-6">
                <!-- Game Icon -->
                <div class="flex-shrink-0">
                    <div class="w-24 h-24 lg:w-32 lg:h-32 rounded-2xl overflow-hidden shadow-xl">
                        <img src="{{ asset('assets/images/ml.jpg') }}" 
                             alt="Mobile Legends" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
                
                <!-- Game Info -->
                <div class="flex-1">
                    <h1 class="text-2xl lg:text-3xl font-bold text-white mb-2">Mobile Legends: Bang Bang</h1>
                    <p class="text-gray-400 mb-4">Moonton</p>
                    
                    <!-- Features -->
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center space-x-2 bg-blue-500/20 px-3 py-1 rounded-full">
                            <i class="fas fa-check-circle text-blue-400 text-sm"></i>
                            <span class="text-blue-400 text-sm font-medium">Official Product</span>
                        </div>
                        <div class="flex items-center space-x-2 bg-yellow-500/20 px-3 py-1 rounded-full">
                            <i class="fas fa-bolt text-yellow-400 text-sm"></i>
                            <span class="text-yellow-400 text-sm font-medium">Fast Delivery</span>
                        </div>
                        <div class="flex items-center space-x-2 bg-green-500/20 px-3 py-1 rounded-full">
                            <i class="fas fa-shield-alt text-green-400 text-sm"></i>
                            <span class="text-green-400 text-sm font-medium">Secure Payment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Account Details -->
                <div class="bg-[#18191A] backdrop-blur-sm rounded-2xl p-6">
                    <h3 class="text-xl font-bold text-white mb-6">Enter account details</h3>
                    
                    <!-- User ID -->
                    <div class="mb-4">
                        <label class="block text-gray-300 text-sm font-medium mb-2">User ID</label>
                        <div class="relative">
                            <input type="text" id="userIdSelect" class="w-full bg-transparent border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-blue-500 focus:outline-none transition-colors appearance-none" placeholder="Enter User ID">
                        </div>
                    </div>
                    
                    <!-- Server ID -->
                    <div class="mb-6">
                        <label class="block text-gray-300 text-sm font-medium mb-2">Server ID</label>
                        <input type="text" 
                               id="serverId"
                               placeholder="Enter Server ID" 
                               class="w-full bg-transparent border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-blue-500 focus:outline-none transition-colors">
                    </div>
                    
                    <!-- Terms -->
                    <div class="flex items-start space-x-3 mb-6">
                        <input type="checkbox" id="agreeTerms" class="mt-1 rounded border-gray-600 bg-gray-900 text-yellow-500 focus:ring-yellow-500 focus:ring-offset-0">
                        <label for="agreeTerms" class="text-gray-300 text-sm">
                            I agree to the <a href="#" class="text-yellow-400 hover:text-yellow-300 underline italic">terms and conditions</a>
                        </label>
                    </div>
                </div>
                
                <!-- How to Order -->
                <div class="bg-[#18191A] backdrop-blur-sm rounded-2xl p-6 ">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 bg-blue-500/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-question text-blue-400 text-sm"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-white">How to Order</h3>
                    </div>
                    
                    <div class="space-y-3 text-sm text-gray-400">
                        <div class="flex items-start space-x-3">
                            <span class="bg-blue-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">1</span>
                            <span>Enter your Mobile Legends User ID and Server ID</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-blue-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">2</span>
                            <span>Select the diamond package you want</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-blue-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">3</span>
                            <span>Choose your payment method</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-blue-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">4</span>
                            <span>Complete payment and diamonds will be added instantly</span>
                        </div>
                    </div>
                </div>
                
                <!-- Need Help -->
                <div class="bg-[#855A0D] rounded-2xl px-4 py-3">
                    <div class="flex items-center space-x-3 mb-3">
                        <i class="fas fa-headset text-white text-xl"></i>
                        <div>
                            <h3 class="text-white font-semibold">Need help?</h3>
                            <p class="text-yellow-100 text-sm">We are ready to help you 24/7</p>
                        </div>
                    </div>
                </div>
                
                <!-- User Reviews -->
                <div class="bg-[#18191A] backdrop-blur-sm rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">User Reviews</h3>
                    
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="text-4xl font-bold text-white">5.0</div>
                        <div>
                            <div class="flex space-x-1 mb-1">
                                <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                <i class="fas fa-star text-yellow-400 text-4xl"></i>
                            </div>
                            <p class="text-white text-md">From 18K Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content Area -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Top up Section -->
                <div class="bg-[#18191A] backdrop-blur-sm rounded-2xl p-6">
                    <!-- Tab Navigation -->
                    <div class="flex space-x-1 mb-6 bg-transparent rounded-lg p-1">
                        <button class="tab-btn active flex-1 py-2 px-4 text-sm font-medium transition-colors border-b border-[#F8A208] text-white" data-tab="topup">
                            <i class="fas fa-bolt mr-2"></i>
                            Top up
                        </button>
                        <button class="tab-btn flex-1 py-2 px-4 rounded-md text-sm font-medium transition-colors text-gray-400" data-tab="description">
                            <i class="fas fa-info-circle mr-2"></i>
                            Description
                        </button>
                    </div>
                    
                    <!-- Top up Content -->
                    <div id="topup-content" class="tab-content">
                        <!-- Select Nominal -->
                        <div class="mb-8">
                            <div class="flex items-center space-x-2 mb-4">
                                <div class="w-8 h-8 bg-[#F8A208] rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">1</span>
                                </div>
                                <h3 class="text-lg font-semibold text-white">Select Nominal</h3>
                            </div>
                            
                            <!-- Category Tabs -->
                            <div class="mb-4">
                                <p class="text-gray-400 text-sm mb-3">Sub Category</p>
                                <div class="flex flex-wrap gap-3">
                                    <button class="category-btn active flex flex-col items-center space-y-2 bg-transparent border-2 border-orange-500 px-6 py-4 rounded-xl transition-colors relative" data-category="diamond">
                                        <div class="w-12 h-12 flex items-center justify-center mb-1">
                                            <img src="{{ asset('assets/images/dm-ml.webp') }}" alt="Diamond" class="w-10 h-10">
                                        </div>
                                        <span class="text-white font-semibold text-sm">DIAMOND</span>
                                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-orange-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-info text-white text-xs"></i>
                                        </div>
                                    </button>
                                    <button class="category-btn flex flex-col items-center space-y-2 bg-transparent border border-gray-600 px-6 py-4 rounded-xl transition-colors hover:border-purple-500/50 relative" data-category="weekly">
                                        <div class="w-12 h-12 bg-transparent flex items-center justify-center mb-1">
                                            <img src="{{ asset('assets/images/weekly-ml.webp') }}" alt="Weekly Pass" class="w-10 h-10">
                                        </div>
                                        <span class="text-white font-semibold text-sm">Weekly Pass</span>
                                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-gray-600 rounded-full flex items-center justify-center">
                                            <i class="fas fa-info text-gray-400 text-xs"></i>
                                        </div>
                                    </button>
                                    <button class="category-btn flex flex-col items-center space-y-2 bg-transparent border border-gray-600 px-6 py-4 rounded-xl transition-colors hover:border-red-500/50 relative" data-category="double">
                                        <div class="w-12 h-12 bg-transparent flex items-center justify-center mb-1">
                                            <img src="{{ asset('assets/images/double-ml.webp') }}" alt="Double Topup" class="w-10 h-10">
                                        </div>
                                        <span class="text-white font-semibold text-sm">Double Topup</span>
                                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-gray-600 rounded-full flex items-center justify-center">
                                            <i class="fas fa-info text-gray-400 text-xs"></i>
                                        </div>
                                    </button>
                                    <button class="category-btn flex flex-col items-center space-y-2 bg-transparent border border-gray-600 px-6 py-4 rounded-xl transition-colors hover:border-purple-500/50 relative" data-category="twilight">
                                        <div class="w-12 h-12 bg-transparent flex items-center justify-center mb-1">
                                            <img src="{{ asset('assets/images/twilight-ml.webp') }}" alt="Twilight Pass" class="w-10 h-10">
                                        </div>
                                        <span class="text-white font-semibold text-sm">TWILIGHT PA...</span>
                                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-gray-600 rounded-full flex items-center justify-center">
                                            <i class="fas fa-info text-gray-400 text-xs"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Diamond Packages -->
                            <div id="diamond-packages" class="category-content">
                                <p class="text-gray-400 text-sm mb-4">Item</p>
                                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                                    <!-- Small packages -->
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="5" data-price="1472">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">5 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">5 + 0 Bonus</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 1.472</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="8" data-price="2497">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">8 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">8 + 0 Bonus</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 2.497</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="10" data-price="2916">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">10 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">10 + 0 Bonus</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 2.916</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="12" data-price="3433">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">12 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">11 + 1 Bonus</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 3.433</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Medium packages -->
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="14" data-price="7008">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">14 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">13 + 1 Diamonds</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 7.008</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="18" data-price="14080">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">18 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">17 + 1 Diamonds</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 14.080</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="19" data-price="21120">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">19 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">17 + 2 Diamonds</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 21.120</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-transparent border border-gray-600 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors" data-diamonds="22" data-price="28160">
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-gem text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">22 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">21 + 1 Diamonds</p>
                                            <div class="bg-blue-500/10 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-gem text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 28.160</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Large packages with special styling -->
                                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mt-6">
                                    <div class="diamond-package bg-gradient-to-br from-yellow-600/20 to-yellow-800/20 border border-yellow-500/30 rounded-lg p-4 cursor-pointer hover:border-yellow-400 transition-colors relative overflow-hidden" data-diamonds="10050" data-price="2415484">
                                        <div class="absolute top-2 right-2 bg-yellow-500 text-black text-xs font-bold px-2 py-1 rounded">
                                            2415
                                        </div>
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-yellow-500/30 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-crown text-yellow-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">10050 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">8540 + 1510 Bonus</p>
                                            <div class="bg-yellow-500/20 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-crown text-yellow-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 2.415.484</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-gradient-to-br from-purple-600/20 to-purple-800/20 border border-purple-500/30 rounded-lg p-4 cursor-pointer hover:border-purple-400 transition-colors relative overflow-hidden" data-diamonds="14490" data-price="3478292">
                                        <div class="absolute top-2 right-2 bg-purple-500 text-white text-xs font-bold px-2 py-1 rounded">
                                            3478
                                        </div>
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-purple-500/30 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-crown text-purple-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">14490 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">12009 + 2481 Bonus</p>
                                            <div class="bg-purple-500/20 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-crown text-purple-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 3.478.292</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-gradient-to-br from-blue-600/20 to-blue-800/20 border border-blue-500/30 rounded-lg p-4 cursor-pointer hover:border-blue-400 transition-colors relative overflow-hidden" data-diamonds="16080" data-price="3864774">
                                        <div class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">
                                            3865
                                        </div>
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-blue-500/30 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-crown text-blue-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">16080 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">13664 + 2416 Bonus</p>
                                            <div class="bg-blue-500/20 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-crown text-blue-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 3.864.774</p>
                                        </div>
                                    </div>
                                    
                                    <div class="diamond-package bg-gradient-to-br from-red-600/20 to-red-800/20 border border-red-500/30 rounded-lg p-4 cursor-pointer hover:border-red-400 transition-colors relative overflow-hidden" data-diamonds="20100" data-price="4830968">
                                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                                            4831
                                        </div>
                                        <div class="text-center">
                                            <div class="w-12 h-12 bg-red-500/30 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <i class="fas fa-crown text-red-400 text-lg"></i>
                                            </div>
                                            <h4 class="text-white font-semibold mb-1">20100 Diamonds</h4>
                                            <p class="text-gray-400 text-xs mb-3">17080 + 3020 Bonus</p>
                                            <div class="bg-red-500/20 rounded px-2 py-1 mb-3">
                                                <i class="fas fa-crown text-red-400 text-xs"></i>
                                            </div>
                                            <p class="text-green-400 font-bold">Rp 4.830.968</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Payment Method -->
                        <div class="mb-8">
                            <div class="flex items-center space-x-2 mb-4">
                                <div class="w-8 h-8 bg-[#F8A208] rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">2</span>
                                </div>
                                <h3 class="text-xl font-bold text-white">Select Payment Method</h3>
                            </div>
                            
                            <div class="flex flex-wrap gap-3 mb-6">
                                <button class="payment-method active bg-[#F8A208] text-black px-6 py-3 rounded-full font-semibold transition-colors" data-method="system">
                                    System
                                </button>
                                <button class="payment-method bg-transparent border border-gray-600 text-gray-300 hover:bg-gray-600/30 px-6 py-3 rounded-full font-semibold transition-colors" data-method="qris">
                                    QRIS
                                </button>
                                <button class="payment-method bg-transparent border border-gray-600 text-gray-300 hover:bg-gray-600/30 px-6 py-3 rounded-full font-semibold transition-colors" data-method="ewallet">
                                    E-Wallet
                                </button>
                                <button class="payment-method bg-transparent border border-gray-600 text-gray-300 hover:bg-gray-600/30 px-6 py-3 rounded-full font-semibold transition-colors" data-method="virtual">
                                    Virtual Account
                                </button>
                                <button class="payment-method bg-transparent border border-gray-600 text-gray-300 hover:bg-gray-600/30 px-6 py-3 rounded-full font-semibold transition-colors" data-method="gerai">
                                    Gerai Ritel
                                </button>
                            </div>
                            
                            <!-- Credits Info -->
                            <div class="bg-[#18191A] rounded-lg p-4 border border-gray-700">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-[#F8A208] rounded-full flex items-center justify-center">
                                            <i class="fas fa-coins text-black text-sm"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold text-lg">PiCredits</h4>
                                            <p class="text-red-400 text-sm font-medium">Rp 0</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- No admin fee banner -->
                                <div class="mt-3 bg-[#292034] border border-purple-600/30 px-4 py-3 rounded-lg">
                                    <p class="text-purple-300 text-sm font-medium">No admin fee</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact -->
                        <div class="mb-8">
                            <div class="flex items-center space-x-2 mb-4">
                                <div class="w-8 h-8 bg-[#F8A208] rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">3</span>
                                </div>
                                <h3 class="text-xl font-bold text-white">Contactable contact</h3>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-phone text-gray-400"></i>
                                    </div>
                                    <input type="tel" 
                                           id="phoneNumber" 
                                           placeholder="Enter phone number" 
                                           class="w-full bg-transparent border border-gray-600 rounded-lg pl-10 pr-4 py-4 text-white placeholder-gray-400 focus:border-blue-500 focus:outline-none transition-colors">
                                </div>
                                
                                <!-- Info message with styled border -->
                                <div class="bg-[#242526] border border-gray-600 rounded-lg p-4">
                                    <p class="text-gray-400 text-sm flex items-center space-x-2">
                                        <i class="fas fa-info-circle text-gray-500"></i>
                                        <span>This number will be contacted if a problem occurs.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Description Content -->
                    <div id="description-content" class="tab-content hidden">
                        <div class="prose prose-invert max-w-none">
                            <h3 class="text-xl font-bold text-white mb-4">About Mobile Legends: Bang Bang</h3>
                            <p class="text-gray-300 mb-4">
                                Mobile Legends: Bang Bang is a mobile multiplayer online battle arena (MOBA) game developed and published by Moonton. 
                                The game is a 5v5 MOBA where players compete against each other to destroy the enemy base while defending their own.
                            </p>
                            <p class="text-gray-300 mb-4">
                                Diamonds are the premium currency in Mobile Legends that can be used to purchase heroes, skins, and other in-game items. 
                                With our fast and secure top-up service, you can get diamonds instantly delivered to your account.
                            </p>
                            
                            <h4 class="text-lg font-semibold text-white mb-3">What you can buy with Diamonds:</h4>
                            <ul class="text-gray-300 space-y-2">
                                <li class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-400"></i>
                                    <span>Heroes and Hero Skins</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-400"></i>
                                    <span>Battle Pass and Elite Pass</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-400"></i>
                                    <span>Magic Wheel spins</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-400"></i>
                                    <span>Event items and exclusive content</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Floating Bottom Footer -->
<div class="fixed bottom-0 left-0 right-0 z-50 p-4">
    <div class="max-w-7xl mx-auto">
        <div class="bg-[#18191A] border border-gray-700 rounded-2xl p-4 shadow-xl">
            <div class="flex items-center justify-between">
                <!-- Total Price -->
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-shopping-cart text-[#F8A208] text-lg"></i>
                        <span class="text-gray-400 text-sm">:</span>
                        <span id="totalPrice" class="text-[#F8A208] font-bold text-lg">Rp 0</span>
                    </div>
                </div>
                
                <!-- Select Voucher and Pay Button -->
                <div class="flex items-center space-x-3">
                    <!-- Select Voucher Button -->
                    <button class="flex items-center space-x-2 bg-transparent border border-[#F8A208] text-[#F8A208] px-4 py-2 rounded-lg hover:bg-[#F8A208]/10 transition-colors" onclick="toggleVoucherModal()">
                        <span class="text-sm font-medium">Select Voucher</span>
                        <i class="fas fa-chevron-right text-xs"></i>
                    </button>
                    
                    <!-- Pay Now Button -->
                    <button id="payNowBtn" class="bg-[#F8A208] text-black px-6 py-3 rounded-lg font-semibold hover:bg-[#E6940B] transition-colors disabled:bg-gray-600 disabled:text-gray-400 disabled:cursor-not-allowed disabled:hover:bg-gray-600" disabled>
                        Pay Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Voucher Modal -->
<div id="voucherModal" class="fixed inset-0 bg-black/50 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-[#18191A] rounded-2xl p-6 max-w-md w-full border border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold text-white">Select Voucher</h3>
                <button onclick="toggleVoucherModal()" class="text-gray-400 hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="space-y-3">
                <!-- No Voucher Option -->
                <div class="voucher-option active flex items-center justify-between p-3 border border-gray-600 rounded-lg cursor-pointer hover:border-[#F8A208] transition-colors" data-discount="0" data-name="No Voucher">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gray-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-times text-gray-400 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium">No Voucher</h4>
                            <p class="text-gray-400 text-sm">0% discount</p>
                        </div>
                    </div>
                    <div class="w-4 h-4 border-2 border-gray-600 rounded-full flex items-center justify-center">
                        <div class="w-2 h-2 bg-[#F8A208] rounded-full hidden voucher-selected"></div>
                    </div>
                </div>
                
                <!-- Sample Vouchers -->
                <div class="voucher-option flex items-center justify-between p-3 border border-gray-600 rounded-lg cursor-pointer hover:border-[#F8A208] transition-colors" data-discount="5" data-name="NEWUSER5">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center">
                            <i class="fas fa-ticket-alt text-blue-400 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium">NEWUSER5</h4>
                            <p class="text-gray-400 text-sm">5% discount</p>
                        </div>
                    </div>
                    <div class="w-4 h-4 border-2 border-gray-600 rounded-full flex items-center justify-center">
                        <div class="w-2 h-2 bg-[#F8A208] rounded-full hidden voucher-selected"></div>
                    </div>
                </div>
                
                <div class="voucher-option flex items-center justify-between p-3 border border-gray-600 rounded-lg cursor-pointer hover:border-[#F8A208] transition-colors" data-discount="10" data-name="WELCOME10">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center">
                            <i class="fas fa-gift text-green-400 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-medium">WELCOME10</h4>
                            <p class="text-gray-400 text-sm">10% discount</p>
                        </div>
                    </div>
                    <div class="w-4 h-4 border-2 border-gray-600 rounded-full flex items-center justify-center">
                        <div class="w-2 h-2 bg-[#F8A208] rounded-full hidden voucher-selected"></div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 flex space-x-3">
                <button onclick="toggleVoucherModal()" class="flex-1 bg-gray-700 text-white py-2 rounded-lg hover:bg-gray-600 transition-colors">
                    Cancel
                </button>
                <button onclick="applyVoucher()" class="flex-1 bg-[#F8A208] text-black py-2 rounded-lg hover:bg-[#E6940B] transition-colors">
                    Apply
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    let selectedPackage = null;
    let selectedPaymentMethod = 'system';
    let selectedVoucher = { discount: 0, name: 'No Voucher' };
    
    // Tab functionality
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.dataset.tab;
            
            // Update active tab button
            tabBtns.forEach(b => {
                b.classList.remove('active', 'border-b', 'border-[#F8A208]','text-white');
                b.classList.add('text-gray-400');
            });
            this.classList.add('active', 'border-b', 'border-[#F8A208]','text-white');
            this.classList.remove('text-gray-400');
            
            // Show corresponding content
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });
            document.getElementById(tabId + '-content').classList.remove('hidden');
        });
    });
    
    // Category functionality
    const categoryBtns = document.querySelectorAll('.category-btn');
    
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            categoryBtns.forEach(b => {
                b.classList.remove('active', 'border-orange-500');
                b.classList.add('border-gray-600');
                
                // Reset text colors
                const text = b.querySelector('span');
                const infoIcon = b.querySelector('.fas.fa-info');
                text.classList.remove('text-white');
                text.classList.add('text-gray-400');
                infoIcon.classList.remove('text-white');
                infoIcon.classList.add('text-gray-400');
                
                // Reset info icon background
                const infoBg = infoIcon.parentElement;
                infoBg.classList.remove('bg-orange-500');
                infoBg.classList.add('bg-gray-600');
            });
            
            this.classList.add('active', 'border-orange-500');
            this.classList.remove('border-gray-600');
            
            // Set active text colors
            const text = this.querySelector('span');
            const infoIcon = this.querySelector('.fas.fa-info');
            text.classList.remove('text-gray-400');
            text.classList.add('text-white');
            infoIcon.classList.remove('text-gray-400');
            infoIcon.classList.add('text-white');
            
            // Set active info icon background
            const infoBg = infoIcon.parentElement;
            infoBg.classList.remove('bg-gray-600');
            infoBg.classList.add('bg-orange-500');
        });
    });
    
    // Diamond package selection
    const diamondPackages = document.querySelectorAll('.diamond-package');
    
    diamondPackages.forEach(package => {
        package.addEventListener('click', function() {
            diamondPackages.forEach(p => {
                p.classList.remove('ring-2', 'ring-blue-500', 'border-blue-500');
            });
            
            this.classList.add('ring-2', 'ring-blue-500', 'border-blue-500');
            
            selectedPackage = {
                diamonds: this.dataset.diamonds,
                price: this.dataset.price
            };
            
            updateTotalPrice();
        });
    });
    
    // Payment method selection
    const paymentMethods = document.querySelectorAll('.payment-method');
    
    paymentMethods.forEach(method => {
        method.addEventListener('click', function() {
            paymentMethods.forEach(m => {
                m.classList.remove('active', 'bg-[#F8A208]', 'text-black');
                m.classList.add('bg-transparent', 'border', 'border-gray-600', 'text-gray-300');
            });
            
            this.classList.add('active', 'bg-[#F8A208]', 'text-black');
            this.classList.remove('bg-transparent', 'border', 'border-gray-600', 'text-gray-300');
            
            selectedPaymentMethod = this.dataset.method;
        });
    });
    
    // Update total price
    function updateTotalPrice() {
        const totalPriceElement = document.getElementById('totalPrice');
        if (selectedPackage) {
            const originalPrice = parseInt(selectedPackage.price);
            const discount = (originalPrice * selectedVoucher.discount) / 100;
            const finalPrice = originalPrice - discount;
            totalPriceElement.textContent = 'Rp ' + finalPrice.toLocaleString('id-ID');
        } else {
            totalPriceElement.textContent = 'Rp 0';
        }
        
        // Enable/disable pay button
        const payBtn = document.getElementById('payNowBtn');
        const userId = document.getElementById('userIdSelect').value;
        const serverId = document.getElementById('serverId').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const agreeTerms = document.getElementById('agreeTerms').checked;
        
        if (selectedPackage && userId && serverId && phoneNumber && agreeTerms) {
            payBtn.disabled = false;
        } else {
            payBtn.disabled = true;
        }
    }
    
    // Voucher Modal Functions
    window.toggleVoucherModal = function() {
        const modal = document.getElementById('voucherModal');
        modal.classList.toggle('hidden');
    }
    
    window.applyVoucher = function() {
        const selectedVoucherOption = document.querySelector('.voucher-option.active');
        if (selectedVoucherOption) {
            selectedVoucher = {
                discount: parseInt(selectedVoucherOption.dataset.discount),
                name: selectedVoucherOption.dataset.name
            };
            updateTotalPrice();
            toggleVoucherModal();
        }
    }
    
    // Voucher Selection
    document.querySelectorAll('.voucher-option').forEach(option => {
        option.addEventListener('click', function() {
            // Remove active class from all options
            document.querySelectorAll('.voucher-option').forEach(opt => {
                opt.classList.remove('active', 'border-[#F8A208]');
                opt.classList.add('border-gray-600');
                opt.querySelector('.voucher-selected').classList.add('hidden');
            });
            
            // Add active class to selected option
            this.classList.add('active', 'border-[#F8A208]');
            this.classList.remove('border-gray-600');
            this.querySelector('.voucher-selected').classList.remove('hidden');
        });
    });
    
    // Form validation
    const userIdSelect = document.getElementById('userIdSelect');
    const serverId = document.getElementById('serverId');
    const phoneNumber = document.getElementById('phoneNumber');
    const agreeTerms = document.getElementById('agreeTerms');
    
    [userIdSelect, serverId, phoneNumber, agreeTerms].forEach(element => {
        element.addEventListener('change', updateTotalPrice);
        element.addEventListener('input', updateTotalPrice);
    });
    
    // Convert User ID select to input on click
    userIdSelect.addEventListener('click', function() {
        if (this.tagName === 'SELECT') {
            const input = document.createElement('input');
            input.type = 'text';
            input.id = 'userIdSelect';
            input.placeholder = 'Enter User ID';
            input.className = this.className.replace('appearance-none cursor-pointer', '');
            input.value = this.value;
            
            this.parentNode.replaceChild(input, this);
            input.focus();
            
            input.addEventListener('change', updateTotalPrice);
            input.addEventListener('input', updateTotalPrice);
        }
    });
    
    // Pay Now button
    document.getElementById('payNowBtn').addEventListener('click', function() {
        if (!this.disabled) {
            // Add loading class and disable button
            this.classList.add('loading');
            this.disabled = true;
            this.textContent = 'Processing...';
            
            // Show success toast
            showToast('Order processed! Redirecting to payment...', 'success');
            
            // Simulate redirect after 2 seconds
            setTimeout(() => {
                // Here you would normally redirect to payment gateway
                console.log('Order Details:', {
                    game: 'Mobile Legends',
                    userId: document.getElementById('userIdSelect').value,
                    serverId: document.getElementById('serverId').value,
                    package: selectedPackage,
                    paymentMethod: selectedPaymentMethod,
                    phone: document.getElementById('phoneNumber').value
                });
                
                // Reset button state (in real app, this would redirect)
                this.classList.remove('loading');
                this.disabled = false;
                this.textContent = 'Pay Now';
                updateTotalPrice(); // Re-validate form
            }, 2000);
        }
    });
    
    // Toast notification function
    function showToast(message, type = 'info') {
        const toast = document.createElement('div');
        toast.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full ${
            type === 'success' ? 'bg-green-600 text-white' : 
            type === 'error' ? 'bg-red-600 text-white' : 
            'bg-blue-600 text-white'
        }`;
        toast.innerHTML = `
            <div class="flex items-center space-x-3">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'}"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(toast);
        
        // Animate in
        setTimeout(() => {
            toast.classList.remove('translate-x-full');
        }, 100);
        
        // Animate out and remove
        setTimeout(() => {
            toast.classList.add('translate-x-full');
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 300);
        }, 3000);
    }
    
    // Initialize active tab - ensure topup tab has correct styling on load
    const activeTab = document.querySelector('.tab-btn[data-tab="topup"]');
    activeTab.classList.add('active', 'border-b', 'border-[#F8A208]', 'text-white');
    activeTab.classList.remove('text-gray-400');
});
</script>

<style>
.tab-btn:not(.active) {
    @apply text-gray-400 hover:text-white hover:bg-gray-700/50;
}

.category-btn:not(.active):hover {
    @apply border-gray-500;
}

.category-btn:not(.active):hover span {
    @apply text-gray-300;
}

.diamond-package:hover {
    transform: translateY(-2px);
}

.payment-method:not(.active):hover {
    @apply bg-gray-600 text-white;
}

/* Loading animation for pay button */
#payNowBtn:disabled {
    @apply bg-gray-600 text-gray-400 cursor-not-allowed;
}

#payNowBtn.loading {
    position: relative;
}

#payNowBtn.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 16px;
    height: 16px;
    margin: -8px 0 0 -8px;
    border: 2px solid transparent;
    border-top: 2px solid currentColor;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    opacity: 0.7;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
@endsection
