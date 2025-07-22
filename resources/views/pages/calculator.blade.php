@extends('layouts.app')

@section('content')
<!-- Calculator Page -->
<main class="min-h-screen py-8 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                <i class="fas fa-calculator text-blue-400 mr-3"></i>
                Gaming Calculator
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">Hitung kebutuhan diamond dan probabilitas dengan calculator gaming terlengkap</p>
        </div>

        <!-- Calculator Selection -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Zodiac Calculator -->
            <div class="calculator-card bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800 hover:border-purple-500/50 transition-all duration-300 group cursor-pointer" onclick="selectCalculator('zodiac')">
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500/30 transition-colors duration-300">
                        <i class="fas fa-star text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Zodiac Calculator</h3>
                    <p class="text-gray-400 text-sm mb-4">Hitung berapa diamond yang dibutuhkan untuk mendapatkan skin Zodiac di Mobile Legends</p>
                    <div class="text-purple-400 font-medium">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Pilih Calculator
                    </div>
                </div>
            </div>

            <!-- Winrate Calculator -->
            <div class="calculator-card bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800 hover:border-green-500/50 transition-all duration-300 group cursor-pointer" onclick="selectCalculator('winrate')">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500/30 transition-colors duration-300">
                        <i class="fas fa-chart-line text-2xl text-green-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Winrate Calculator</h3>
                    <p class="text-gray-400 text-sm mb-4">Hitung berapa match yang dibutuhkan untuk mencapai winrate target yang diinginkan</p>
                    <div class="text-green-400 font-medium">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Pilih Calculator
                    </div>
                </div>
            </div>

            <!-- Magic Wheel Calculator -->
            <div class="calculator-card bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800 hover:border-yellow-500/50 transition-all duration-300 group cursor-pointer" onclick="selectCalculator('magic-wheel')">
                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-500/30 transition-colors duration-300">
                        <i class="fas fa-dharmachakra text-2xl text-yellow-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Magic Wheel Calculator</h3>
                    <p class="text-gray-400 text-sm mb-4">Hitung probabilitas dan diamond yang dibutuhkan untuk mendapatkan item dari Magic Wheel</p>
                    <div class="text-yellow-400 font-medium">
                        <i class="fas fa-arrow-right mr-2"></i>
                        Pilih Calculator
                    </div>
                </div>
            </div>
        </div>

        <!-- Calculator Content -->
        <div id="calculator-content" class="hidden">
            <!-- Zodiac Calculator -->
            <div id="zodiac-calculator" class="calculator-section hidden">
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-white flex items-center">
                            <i class="fas fa-star text-purple-400 mr-3"></i>
                            Zodiac Calculator
                        </h2>
                        <button onclick="closeCalculator()" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Input Section -->
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-gem text-purple-400 mr-2"></i>
                                    Diamond yang Dimiliki
                                </label>
                                <input 
                                    type="number" 
                                    id="zodiac-diamonds"
                                    placeholder="Masukkan jumlah diamond"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20 focus:outline-none transition-all duration-300"
                                />
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-bullseye text-purple-400 mr-2"></i>
                                    Target Skin Zodiac
                                </label>
                                <select 
                                    id="zodiac-target"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20 focus:outline-none transition-all duration-300"
                                >
                                    <option value="">Pilih skin Zodiac</option>
                                    <option value="300">Basic Zodiac (300 points)</option>
                                    <option value="600">Premium Zodiac (600 points)</option>
                                    <option value="1000">Elite Zodiac (1000 points)</option>
                                </select>
                            </div>
                            
                            <button 
                                onclick="calculateZodiac()"
                                class="w-full bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-500 hover:to-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105"
                            >
                                <i class="fas fa-calculator mr-2"></i>
                                Hitung Kebutuhan
                            </button>
                        </div>
                        
                        <!-- Result Section -->
                        <div id="zodiac-result" class="bg-gray-800/30 rounded-xl p-6 hidden">
                            <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-purple-400 mr-2"></i>
                                Hasil Perhitungan
                            </h3>
                            <div id="zodiac-result-content" class="space-y-3">
                                <!-- Results will be populated here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Winrate Calculator -->
            <div id="winrate-calculator" class="calculator-section hidden">
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-white flex items-center">
                            <i class="fas fa-chart-line text-green-400 mr-3"></i>
                            Winrate Calculator
                        </h2>
                        <button onclick="closeCalculator()" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Input Section -->
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-trophy text-green-400 mr-2"></i>
                                    Total Match Dimainkan
                                </label>
                                <input 
                                    type="number" 
                                    id="total-matches"
                                    placeholder="Contoh: 1000"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-500/20 focus:outline-none transition-all duration-300"
                                />
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-check-circle text-green-400 mr-2"></i>
                                    Total Kemenangan
                                </label>
                                <input 
                                    type="number" 
                                    id="total-wins"
                                    placeholder="Contoh: 650"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-500/20 focus:outline-none transition-all duration-300"
                                />
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-bullseye text-green-400 mr-2"></i>
                                    Target Winrate (%)
                                </label>
                                <input 
                                    type="number" 
                                    id="target-winrate"
                                    placeholder="Contoh: 75"
                                    min="0"
                                    max="100"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-green-500 focus:ring-2 focus:ring-green-500/20 focus:outline-none transition-all duration-300"
                                />
                            </div>
                            
                            <button 
                                onclick="calculateWinrate()"
                                class="w-full bg-gradient-to-r from-green-600 to-green-700 hover:from-green-500 hover:to-green-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105"
                            >
                                <i class="fas fa-calculator mr-2"></i>
                                Hitung Winrate
                            </button>
                        </div>
                        
                        <!-- Result Section -->
                        <div id="winrate-result" class="bg-gray-800/30 rounded-xl p-6 hidden">
                            <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-green-400 mr-2"></i>
                                Hasil Perhitungan
                            </h3>
                            <div id="winrate-result-content" class="space-y-3">
                                <!-- Results will be populated here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Magic Wheel Calculator -->
            <div id="magic-wheel-calculator" class="calculator-section hidden">
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-white flex items-center">
                            <i class="fas fa-dharmachakra text-yellow-400 mr-3"></i>
                            Magic Wheel Calculator
                        </h2>
                        <button onclick="closeCalculator()" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Input Section -->
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-gem text-yellow-400 mr-2"></i>
                                    Diamond per Spin
                                </label>
                                <select 
                                    id="wheel-cost"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 focus:outline-none transition-all duration-300"
                                >
                                    <option value="30">30 Diamond (1x spin)</option>
                                    <option value="270">270 Diamond (10x spin)</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-gift text-yellow-400 mr-2"></i>
                                    Target Item
                                </label>
                                <select 
                                    id="wheel-target"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 focus:outline-none transition-all duration-300"
                                >
                                    <option value="">Pilih target item</option>
                                    <option value="epic">Epic Skin (20 spins guaranteed)</option>
                                    <option value="elite">Elite Skin (15 spins guaranteed)</option>
                                    <option value="special">Special Skin (10 spins guaranteed)</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-white mb-2">
                                    <i class="fas fa-dice text-yellow-400 mr-2"></i>
                                    Spin Sudah Dilakukan
                                </label>
                                <input 
                                    type="number" 
                                    id="wheel-spins"
                                    placeholder="Berapa kali sudah spin?"
                                    min="0"
                                    class="w-full bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 focus:outline-none transition-all duration-300"
                                />
                            </div>
                            
                            <button 
                                onclick="calculateMagicWheel()"
                                class="w-full bg-gradient-to-r from-yellow-600 to-yellow-700 hover:from-yellow-500 hover:to-yellow-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105"
                            >
                                <i class="fas fa-calculator mr-2"></i>
                                Hitung Magic Wheel
                            </button>
                        </div>
                        
                        <!-- Result Section -->
                        <div id="wheel-result" class="bg-gray-800/30 rounded-xl p-6 hidden">
                            <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                                <i class="fas fa-chart-bar text-yellow-400 mr-2"></i>
                                Hasil Perhitungan
                            </h3>
                            <div id="wheel-result-content" class="space-y-3">
                                <!-- Results will be populated here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tips & Info -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Zodiac Tips -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800">
                <div class="flex items-center mb-4">
                    <i class="fas fa-lightbulb text-purple-400 text-xl mr-3"></i>
                    <h3 class="text-lg font-bold text-white">Tips Zodiac</h3>
                </div>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li>• Zodiac event biasanya berlangsung 1 bulan</li>
                    <li>• Semakin tinggi poin, semakin bagus skin yang didapat</li>
                    <li>• Beli zodiac pass untuk point bonus</li>
                    <li>• Kumpulkan point setiap hari untuk efisiensi</li>
                </ul>
            </div>

            <!-- Winrate Tips -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800">
                <div class="flex items-center mb-4">
                    <i class="fas fa-lightbulb text-green-400 text-xl mr-3"></i>
                    <h3 class="text-lg font-bold text-white">Tips Winrate</h3>
                </div>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li>• Main dengan teman untuk komunikasi yang baik</li>
                    <li>• Fokus pada hero yang dikuasai</li>
                    <li>• Jangan main saat sedang emosi</li>
                    <li>• Pelajari meta terbaru setiap season</li>
                </ul>
            </div>

            <!-- Magic Wheel Tips -->
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800">
                <div class="flex items-center mb-4">
                    <i class="fas fa-lightbulb text-yellow-400 text-xl mr-3"></i>
                    <h3 class="text-lg font-bold text-white">Tips Magic Wheel</h3>
                </div>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li>• Spin 10x lebih hemat daripada 1x berulang</li>
                    <li>• Epic skin guaranteed di spin ke-20</li>
                    <li>• Tunggu event diskon untuk lebih hemat</li>
                    <li>• Perhatikan reset timer setiap hari</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript -->
<script>
    function selectCalculator(type) {
        // Show calculator content
        document.getElementById('calculator-content').classList.remove('hidden');
        
        // Hide all calculator sections
        document.querySelectorAll('.calculator-section').forEach(section => {
            section.classList.add('hidden');
        });
        
        // Show selected calculator
        document.getElementById(type + '-calculator').classList.remove('hidden');
        
        // Update card appearances
        document.querySelectorAll('.calculator-card').forEach(card => {
            card.classList.remove('ring-2', 'ring-blue-500', 'bg-blue-900/20');
        });
        
        // Highlight selected card
        event.currentTarget.classList.add('ring-2', 'ring-blue-500', 'bg-blue-900/20');
        
        // Scroll to calculator
        document.getElementById('calculator-content').scrollIntoView({ 
            behavior: 'smooth', 
            block: 'start' 
        });
    }

    function closeCalculator() {
        document.getElementById('calculator-content').classList.add('hidden');
        
        // Remove highlights
        document.querySelectorAll('.calculator-card').forEach(card => {
            card.classList.remove('ring-2', 'ring-blue-500', 'bg-blue-900/20');
        });
        
        // Hide all results
        document.querySelectorAll('[id$="-result"]').forEach(result => {
            result.classList.add('hidden');
        });
    }

    function calculateZodiac() {
        const diamonds = parseInt(document.getElementById('zodiac-diamonds').value) || 0;
        const targetPoints = parseInt(document.getElementById('zodiac-target').value) || 0;
        
        if (!targetPoints) {
            showToast('Pilih target skin Zodiac terlebih dahulu', 'error');
            return;
        }
        
        // Zodiac calculation logic (1 diamond = 1 point approximately)
        const neededPoints = targetPoints;
        const neededDiamonds = Math.max(0, neededPoints - diamonds);
        const currentProgress = Math.min(100, (diamonds / neededPoints) * 100);
        
        const resultContent = document.getElementById('zodiac-result-content');
        resultContent.innerHTML = `
            <div class="bg-purple-500/10 rounded-lg p-4 border border-purple-500/30">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Target Points:</span>
                    <span class="text-purple-400 font-bold">${targetPoints.toLocaleString()}</span>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Diamond Dimiliki:</span>
                    <span class="text-white font-bold">${diamonds.toLocaleString()}</span>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Diamond Dibutuhkan:</span>
                    <span class="text-${neededDiamonds > 0 ? 'red' : 'green'}-400 font-bold">
                        ${neededDiamonds > 0 ? neededDiamonds.toLocaleString() : 'Sudah Cukup!'}
                    </span>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-gray-400 text-sm">Progress:</span>
                        <span class="text-purple-400 text-sm font-bold">${currentProgress.toFixed(1)}%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2">
                        <div class="bg-purple-500 h-2 rounded-full transition-all duration-500" style="width: ${currentProgress}%"></div>
                    </div>
                </div>
            </div>
            ${neededDiamonds > 0 ? `
                <div class="bg-blue-500/10 rounded-lg p-4 border border-blue-500/30">
                    <div class="text-blue-400 font-medium mb-2">💎 Estimasi Biaya Top Up:</div>
                    <div class="text-gray-400 text-sm">
                        Rp ${(neededDiamonds * 15).toLocaleString()} (${neededDiamonds} diamond)
                    </div>
                </div>
            ` : ''}
        `;
        
        document.getElementById('zodiac-result').classList.remove('hidden');
    }

    function calculateWinrate() {
        const totalMatches = parseInt(document.getElementById('total-matches').value) || 0;
        const totalWins = parseInt(document.getElementById('total-wins').value) || 0;
        const targetWinrate = parseFloat(document.getElementById('target-winrate').value) || 0;
        
        if (totalMatches === 0 || targetWinrate === 0) {
            showToast('Isi semua field dengan benar', 'error');
            return;
        }
        
        if (totalWins > totalMatches) {
            showToast('Total kemenangan tidak boleh lebih besar dari total match', 'error');
            return;
        }
        
        const currentWinrate = (totalWins / totalMatches) * 100;
        const targetWinrateDecimal = targetWinrate / 100;
        
        // Calculate matches needed
        let matchesNeeded = 0;
        let winsNeeded = 0;
        
        if (currentWinrate < targetWinrate) {
            // Need to win consecutive matches
            matchesNeeded = Math.ceil((targetWinrateDecimal * totalMatches - totalWins) / (1 - targetWinrateDecimal));
            winsNeeded = matchesNeeded;
        }
        
        const resultContent = document.getElementById('winrate-result-content');
        resultContent.innerHTML = `
            <div class="bg-green-500/10 rounded-lg p-4 border border-green-500/30">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Winrate Saat Ini:</span>
                    <span class="text-green-400 font-bold">${currentWinrate.toFixed(2)}%</span>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Target Winrate:</span>
                    <span class="text-white font-bold">${targetWinrate}%</span>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Status:</span>
                    <span class="text-${currentWinrate >= targetWinrate ? 'green' : 'yellow'}-400 font-bold">
                        ${currentWinrate >= targetWinrate ? 'Target Tercapai!' : 'Perlu Ditingkatkan'}
                    </span>
                </div>
            </div>
            ${currentWinrate < targetWinrate ? `
                <div class="bg-yellow-500/10 rounded-lg p-4 border border-yellow-500/30">
                    <div class="text-yellow-400 font-medium mb-2">🎯 Untuk Mencapai Target:</div>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-gray-400">Match yang harus dimenangkan:</span>
                        <span class="text-yellow-400 font-bold">${winsNeeded} match</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400">Tidak boleh kalah:</span>
                        <span class="text-red-400 font-bold">${matchesNeeded} match berikutnya</span>
                    </div>
                </div>
            ` : `
                <div class="bg-blue-500/10 rounded-lg p-4 border border-blue-500/30">
                    <div class="text-blue-400 font-medium">🎉 Selamat! Target winrate sudah tercapai!</div>
                </div>
            `}
        `;
        
        document.getElementById('winrate-result').classList.remove('hidden');
    }

    function calculateMagicWheel() {
        const spinCost = parseInt(document.getElementById('wheel-cost').value) || 30;
        const target = document.getElementById('wheel-target').value;
        const currentSpins = parseInt(document.getElementById('wheel-spins').value) || 0;
        
        if (!target) {
            showToast('Pilih target item terlebih dahulu', 'error');
            return;
        }
        
        // Magic wheel guaranteed spins
        const guaranteedSpins = {
            'epic': 20,
            'elite': 15,
            'special': 10
        };
        
        const maxSpins = guaranteedSpins[target];
        const remainingSpins = Math.max(0, maxSpins - currentSpins);
        const totalCost = remainingSpins * spinCost;
        const progress = Math.min(100, (currentSpins / maxSpins) * 100);
        
        const resultContent = document.getElementById('wheel-result-content');
        resultContent.innerHTML = `
            <div class="bg-yellow-500/10 rounded-lg p-4 border border-yellow-500/30">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Spin Dilakukan:</span>
                    <span class="text-yellow-400 font-bold">${currentSpins}/${maxSpins}</span>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Spin Tersisa:</span>
                    <span class="text-white font-bold">${remainingSpins}</span>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-400">Total Biaya:</span>
                    <span class="text-${remainingSpins > 0 ? 'red' : 'green'}-400 font-bold">
                        ${remainingSpins > 0 ? `${totalCost.toLocaleString()} 💎` : 'Sudah Dapat!'}
                    </span>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-gray-400 text-sm">Progress:</span>
                        <span class="text-yellow-400 text-sm font-bold">${progress.toFixed(1)}%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2">
                        <div class="bg-yellow-500 h-2 rounded-full transition-all duration-500" style="width: ${progress}%"></div>
                    </div>
                </div>
            </div>
            ${remainingSpins > 0 ? `
                <div class="bg-blue-500/10 rounded-lg p-4 border border-blue-500/30">
                    <div class="text-blue-400 font-medium mb-2">💰 Estimasi Biaya Top Up:</div>
                    <div class="text-gray-400 text-sm">
                        Rp ${(totalCost * 15).toLocaleString()} (${totalCost} diamond)
                    </div>
                </div>
            ` : ''}
        `;
        
        document.getElementById('wheel-result').classList.remove('hidden');
    }

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
        
        // Auto remove after 3 seconds
        setTimeout(() => {
            toast.classList.add('translate-x-full');
            setTimeout(() => {
                if (toast.parentNode) {
                    document.body.removeChild(toast);
                }
            }, 300);
        }, 3000);
    }

    // Input validation and formatting
    document.addEventListener('DOMContentLoaded', function() {
        const numberInputs = document.querySelectorAll('input[type="number"]');
        
        numberInputs.forEach(input => {
            input.addEventListener('input', function() {
                // Remove negative values
                if (this.value < 0) this.value = 0;
                
                // Format large numbers with commas in placeholder
                if (this.value > 999) {
                    const formatted = parseInt(this.value).toLocaleString();
                    this.setAttribute('data-formatted', formatted);
                }
            // Show selected calculator based on URL hash or localStorage
            document.addEventListener('DOMContentLoaded', function() {
                const hash = window.location.hash.substring(1);
                const selectedCalculator = hash || localStorage.getItem('selectedCalculator') || 'zodiac';
                
                showCalculator(selectedCalculator);
                
                // Update active tab
                document.querySelectorAll('.tab-button').forEach(btn => {
                    btn.classList.remove('bg-blue-500', 'text-white');
                    btn.classList.add('bg-gray-700/50', 'text-gray-400');
                });
                
                const activeTab = document.querySelector(`[onclick="showCalculator('${selectedCalculator}')"]`);
                if (activeTab) {
                    activeTab.classList.remove('bg-gray-700/50', 'text-gray-400');
                    activeTab.classList.add('bg-blue-500', 'text-white');
                }
            });
        });
    });
</script>

<!-- Custom CSS -->
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
    
    /* Calculator card hover effects */
    .calculator-card {
        transition: all 0.3s ease;
    }
    
    .calculator-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
    }
    
    /* Select styling */
    select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
        padding-right: 2.5rem;
    }
    
    /* Progress bar animation */
    .progress-bar {
        transition: width 0.5s ease-in-out;
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
    
    /* Button animations */
    button:hover:not(:disabled) {
        transform: translateY(-1px);
    }
    
    /* Input focus effects */
    input:focus, select:focus {
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
</style>
@endsection
