<!-- All Games Section -->
                <div class="bg-gray-900/50 rounded-xl p-4 md:p-6 border border-gray-800">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 md:mb-6 space-y-2 sm:space-y-0">
                        <h2 class="text-lg md:text-xl font-bold text-white">SEMUA GAME</h2>
                        <button class="text-blue-400 text-xs md:text-sm hover:text-blue-300 transition-colors self-start sm:self-auto">Lihat Semua →</button>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-2 sm:gap-3 md:gap-4 lg:gap-6">
                        <!-- Mobile Legends - Featured -->
                        <a href="{{ route('product.mobile-legends') }}" class="bg-gradient-to-br from-blue-600/20 to-purple-600/20 border border-blue-500/30 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg hover:border-blue-400 transition-all duration-300 cursor-pointer relative group">
                            <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                                HOT
                            </div>
                            <img src="{{ asset('assets/images/ml.jpg') }}" alt="Mobile Legends" class="h-32 sm:h-36 md:h-40 lg:h-44 w-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            <div class="p-2 sm:p-3 md:p-4">
                                <h3 class="text-white font-semibold text-xs sm:text-sm md:text-base">Mobile Legends</h3>
                                <p class="text-blue-400 text-xs md:text-sm font-medium">Diamond</p>
                            </div>
                        </a>
                        
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Roblox" class="h-32 sm:h-36 md:h-40 lg:h-44 w-full object-cover" />
                            <div class="p-2 sm:p-3 md:p-4">
                                <h3 class="text-white font-semibold text-xs sm:text-sm md:text-base">Roblox</h3>
                                <p class="text-gray-400 text-xs md:text-sm">Robux</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Free Fire" class="h-32 sm:h-36 md:h-40 lg:h-44 w-full object-cover" />
                            <div class="p-2 sm:p-3 md:p-4">
                                <h3 class="text-white font-semibold text-xs sm:text-sm md:text-base">Free Fire</h3>
                                <p class="text-gray-400 text-xs md:text-sm">Diamond</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Genshin Impact" class="h-32 sm:h-36 md:h-40 lg:h-44 w-full object-cover" />
                            <div class="p-2 sm:p-3 md:p-4">
                                <h3 class="text-white font-semibold text-xs sm:text-sm md:text-base">Genshin Impact</h3>
                                <p class="text-gray-400 text-xs md:text-sm">Genesis Crystal</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="PUBG Mobile" class="h-32 sm:h-36 md:h-40 lg:h-44 w-full object-cover" />
                            <div class="p-2 sm:p-3 md:p-4">
                                <h3 class="text-white font-semibold text-xs sm:text-sm md:text-base">PUBG Mobile</h3>
                                <p class="text-gray-400 text-xs md:text-sm">UC</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Valorant" class="h-32 sm:h-36 md:h-40 lg:h-44 w-full object-cover" />
                            <div class="p-2 sm:p-3 md:p-4">
                                <h3 class="text-white font-semibold text-xs sm:text-sm md:text-base">Valorant</h3>
                                <p class="text-gray-400 text-xs md:text-sm">VP Points</p>
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 hover:shadow-lg transition-all duration-300 cursor-pointer">
                            <img src="{{ asset('assets/images/roblox.jpg') }}" alt="Call of Duty" class="h-32 sm:h-36 md:h-40 lg:h-44 w-full object-cover" />
                            <div class="p-2 sm:p-3 md:p-4">
                                <h3 class="text-white font-semibold text-xs sm:text-sm md:text-base">Call of Duty</h3>
                                <p class="text-gray-400 text-xs md:text-sm">CP Points</p>
                            </div>
                        </div>
                    </div>
                </div>