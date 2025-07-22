@extends('layouts.app')

@section('content')
<!-- Check Order Page -->
<main class="min-h-screen py-8 px-4">
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                <i class="fas fa-search text-blue-400 mr-3"></i>
                Cek Status Pesanan
            </h1>
            <p class="text-gray-300 text-lg">Lacak dan pantau status transaksi Anda secara real-time</p>
        </div>

        <!-- Search Section -->
        <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800 shadow-2xl mb-8">
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Invoice Input -->
                <div class="flex-1">
                    <label for="invoice" class="block text-sm font-medium text-white mb-2">
                        <i class="fas fa-receipt text-blue-400 mr-2"></i>
                        Nomor Invoice
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-hashtag text-gray-400 text-sm"></i>
                        </div>
                        <input 
                            type="text" 
                            id="invoice" 
                            name="invoice"
                            class="w-full bg-gray-800/50 border border-gray-600 rounded-xl px-12 py-4 text-white placeholder-gray-400 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300"
                            placeholder="Masukkan nomor invoice (contoh: INV-240722-001)"
                        />
                    </div>
                </div>
                
                <!-- Search Button -->
                <div class="flex items-end">
                    <button 
                        type="button" 
                        onclick="searchOrder()"
                        class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg shadow-blue-500/25 transform whitespace-nowrap"
                    >
                        <i class="fas fa-search mr-2"></i>
                        Cari Pesanan
                    </button>
                </div>
            </div>
            
            <!-- Quick Search Tips -->
            <div class="mt-4 p-4 bg-blue-500/10 rounded-lg border border-blue-500/20">
                <p class="text-blue-300 text-sm">
                    <i class="fas fa-lightbulb text-yellow-400 mr-2"></i>
                    <strong>Tips:</strong> Nomor invoice dapat ditemukan di email konfirmasi atau WhatsApp setelah melakukan pemesanan
                </p>
            </div>
        </div>

        <!-- Order Result Section -->
        <div id="orderResult" class="hidden bg-gray-900/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800 shadow-2xl mb-8">
            <!-- Order Details will be populated here -->
        </div>

        <!-- Recent Transactions Section -->
        <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl border border-gray-800 shadow-2xl overflow-hidden">
            <!-- Section Header -->
            <div class="p-6 md:p-8 border-b border-gray-700">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-xl md:text-2xl font-bold text-white mb-2">
                            <i class="fas fa-history text-green-400 mr-3"></i>
                            Transaksi Terbaru
                        </h2>
                        <p class="text-gray-400">Pantau semua aktivitas transaksi secara real-time</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Auto Refresh Toggle -->
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-400">Auto Refresh</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="autoRefresh" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                        <!-- Refresh Button -->
                        <button 
                            onclick="refreshTransactions()"
                            class="bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-lg transition-all duration-300 hover:scale-105"
                        >
                            <i id="refreshIcon" class="fas fa-sync-alt text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Transactions Content -->
            <!-- Desktop Table View -->
            <div class="hidden md:block overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-800/50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-calendar mr-2"></i>Tanggal
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-gamepad mr-2"></i>Kategori
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-money-bill mr-2"></i>Harga
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-receipt mr-2"></i>No Invoice
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                                <i class="fas fa-info-circle mr-2"></i>Status
                            </th>
                        </tr>
                    </thead>
                    <tbody id="transactionsTableBody" class="bg-gray-900/30 divide-y divide-gray-700">
                        <!-- Transaction rows will be populated here -->
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="md:hidden" id="transactionsMobileContainer">
                <div id="transactionsMobileList" class="space-y-4 p-4">
                    <!-- Transaction cards will be populated here -->
                </div>
            </div>

            <!-- Empty State -->
            <div id="emptyState" class="hidden p-8 md:p-12 text-center">
                <div class="text-gray-400 text-4xl md:text-6xl mb-4">
                    <i class="fas fa-inbox"></i>
                </div>
                <h3 class="text-lg md:text-xl font-semibold text-white mb-2">Belum Ada Transaksi</h3>
                <p class="text-gray-400 text-sm md:text-base mb-6">Mulai melakukan top up game favorit Anda sekarang!</p>
                <a 
                    href="{{ url('/') }}" 
                    class="inline-flex items-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 hover:scale-105 text-sm"
                >
                    <i class="fas fa-plus mr-2"></i>
                    Mulai Top Up
                </a>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800 hover:border-blue-500/30 transition-all duration-300">
                <div class="flex items-center">
                    <div class="bg-blue-500/20 p-3 rounded-lg">
                        <i class="fas fa-shopping-cart text-blue-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-400 text-sm">Total Transaksi</p>
                        <p id="totalTransactions" class="text-2xl font-bold text-white">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800 hover:border-green-500/30 transition-all duration-300">
                <div class="flex items-center">
                    <div class="bg-green-500/20 p-3 rounded-lg">
                        <i class="fas fa-check-circle text-green-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-400 text-sm">Berhasil</p>
                        <p id="successTransactions" class="text-2xl font-bold text-white">0</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl p-6 border border-gray-800 hover:border-orange-500/30 transition-all duration-300">
                <div class="flex items-center">
                    <div class="bg-orange-500/20 p-3 rounded-lg">
                        <i class="fas fa-clock text-orange-400 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-gray-400 text-sm">Pending</p>
                        <p id="pendingTransactions" class="text-2xl font-bold text-white">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript -->
<script>
    // Sample transaction data (replace with actual API calls)
    const sampleTransactions = [
        {
            id: 1,
            date: '2024-07-22 14:30',
            category: 'Mobile Legends',
            price: 'Rp 15.000',
            invoice: 'INV-240722-001',
            status: 'success',
            details: '86 Diamonds + 8 Bonus'
        },
        {
            id: 2,
            date: '2024-07-22 13:15',
            category: 'Free Fire',
            price: 'Rp 25.000',
            invoice: 'INV-240722-002',
            status: 'pending',
            details: '250 Diamonds'
        },
        {
            id: 3,
            date: '2024-07-22 12:00',
            category: 'PUBG Mobile',
            price: 'Rp 50.000',
            invoice: 'INV-240722-003',
            status: 'success',
            details: '690 UC'
        },
        {
            id: 4,
            date: '2024-07-21 16:45',
            category: 'Genshin Impact',
            price: 'Rp 75.000',
            invoice: 'INV-240721-004',
            status: 'success',
            details: '980 Genesis Crystals'
        },
        {
            id: 5,
            date: '2024-07-21 10:20',
            category: 'Honkai Star Rail',
            price: 'Rp 30.000',
            invoice: 'INV-240721-005',
            status: 'pending',
            details: '300 Oneiric Shards'
        }
    ];

    function getStatusBadge(status) {
        if (status === 'success') {
            return `
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400 border border-green-500/30">
                    <i class="fas fa-check-circle mr-1"></i>
                    Berhasil
                </span>
            `;
        } else if (status === 'pending') {
            return `
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-orange-500/20 text-orange-400 border border-orange-500/30">
                    <i class="fas fa-clock mr-1"></i>
                    Pending
                </span>
            `;
        } else {
            return `
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-500/20 text-red-400 border border-red-500/30">
                    <i class="fas fa-times-circle mr-1"></i>
                    Gagal
                </span>
            `;
        }
    }

    function populateTransactions(transactions = sampleTransactions) {
        const tableBody = document.getElementById('transactionsTableBody');
        const mobileList = document.getElementById('transactionsMobileList');
        const emptyState = document.getElementById('emptyState');
        
        if (transactions.length === 0) {
            tableBody.innerHTML = '';
            mobileList.innerHTML = '';
            emptyState.classList.remove('hidden');
            return;
        }
        
        emptyState.classList.add('hidden');
        
        // Populate desktop table
        tableBody.innerHTML = transactions.map((transaction, index) => `
            <tr class="hover:bg-gray-800/50 transition-colors duration-200 animate-fade-in-up" style="animation-delay: ${index * 0.1}s">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-white font-medium">${transaction.date.split(' ')[0]}</div>
                    <div class="text-xs text-gray-400">${transaction.date.split(' ')[1]}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-white">${transaction.category}</div>
                    <div class="text-xs text-gray-400">${transaction.details}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-semibold text-blue-400">${transaction.price}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-mono text-gray-300 bg-gray-800/50 px-2 py-1 rounded">${transaction.invoice}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    ${getStatusBadge(transaction.status)}
                </td>
            </tr>
        `).join('');
        
        // Populate mobile cards
        mobileList.innerHTML = transactions.map((transaction, index) => `
            <div class="bg-gray-800/50 backdrop-blur-sm rounded-xl p-4 border border-gray-700 hover:border-gray-600 transition-all duration-300 animate-fade-in-up" style="animation-delay: ${index * 0.1}s">
                <!-- Header with Status -->
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-gamepad text-blue-400 text-sm"></i>
                        <span class="text-white font-medium text-sm">${transaction.category}</span>
                    </div>
                    ${getStatusBadge(transaction.status)}
                </div>
                
                <!-- Transaction Details -->
                <div class="space-y-2">
                    <!-- Invoice & Date -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-receipt text-gray-400 text-xs"></i>
                            <span class="text-gray-400 text-xs">Invoice:</span>
                        </div>
                        <span class="text-white font-mono text-xs bg-gray-700/50 px-2 py-1 rounded">${transaction.invoice}</span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-calendar text-gray-400 text-xs"></i>
                            <span class="text-gray-400 text-xs">Tanggal:</span>
                        </div>
                        <span class="text-gray-300 text-xs">${transaction.date}</span>
                    </div>
                    
                    <!-- Product Details -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-gift text-gray-400 text-xs"></i>
                            <span class="text-gray-400 text-xs">Produk:</span>
                        </div>
                        <span class="text-gray-300 text-xs text-right">${transaction.details}</span>
                    </div>
                    
                    <!-- Price -->
                    <div class="flex items-center justify-between pt-2 border-t border-gray-700">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-money-bill text-green-400 text-xs"></i>
                            <span class="text-gray-400 text-xs">Total:</span>
                        </div>
                        <span class="text-blue-400 font-bold text-sm">${transaction.price}</span>
                    </div>
                </div>
            </div>
        `).join('');
        
        updateStatistics(transactions);
    }

    function updateStatistics(transactions) {
        const total = transactions.length;
        const success = transactions.filter(t => t.status === 'success').length;
        const pending = transactions.filter(t => t.status === 'pending').length;
        
        document.getElementById('totalTransactions').textContent = total;
        document.getElementById('successTransactions').textContent = success;
        document.getElementById('pendingTransactions').textContent = pending;
    }

    function searchOrder() {
        const invoiceInput = document.getElementById('invoice');
        const invoice = invoiceInput.value.trim();
        const orderResult = document.getElementById('orderResult');
        
        if (!invoice) {
            alert('Silakan masukkan nomor invoice terlebih dahulu');
            invoiceInput.focus();
            return;
        }
        
        // Show loading state
        orderResult.innerHTML = `
            <div class="flex items-center justify-center py-8">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500 mr-3"></div>
                <span class="text-white">Mencari pesanan...</span>
            </div>
        `;
        orderResult.classList.remove('hidden');
        
        // Simulate API call
        setTimeout(() => {
            const foundOrder = sampleTransactions.find(t => t.invoice.toLowerCase() === invoice.toLowerCase());
            
            if (foundOrder) {
                orderResult.innerHTML = `
                    <div class="bg-gradient-to-r from-green-500/10 to-blue-500/10 rounded-xl p-6 border border-green-500/20">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold text-white">
                                <i class="fas fa-check-circle text-green-400 mr-2"></i>
                                Pesanan Ditemukan
                            </h3>
                            ${getStatusBadge(foundOrder.status)}
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-gray-400 text-sm mb-1">No Invoice</p>
                                <p class="text-white font-mono text-lg">${foundOrder.invoice}</p>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm mb-1">Tanggal Transaksi</p>
                                <p class="text-white">${foundOrder.date}</p>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm mb-1">Kategori</p>
                                <p class="text-white font-semibold">${foundOrder.category}</p>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm mb-1">Total Harga</p>
                                <p class="text-blue-400 font-bold text-lg">${foundOrder.price}</p>
                            </div>
                            <div class="md:col-span-2">
                                <p class="text-gray-400 text-sm mb-1">Detail Produk</p>
                                <p class="text-white">${foundOrder.details}</p>
                            </div>
                        </div>
                    </div>
                `;
            } else {
                orderResult.innerHTML = `
                    <div class="bg-gradient-to-r from-red-500/10 to-orange-500/10 rounded-xl p-6 border border-red-500/20 text-center">
                        <div class="text-red-400 text-4xl mb-4">
                            <i class="fas fa-search-minus"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Pesanan Tidak Ditemukan</h3>
                        <p class="text-gray-400 mb-4">Nomor invoice "${invoice}" tidak ditemukan dalam sistem kami.</p>
                        <div class="bg-yellow-500/10 rounded-lg p-4 border border-yellow-500/20">
                            <p class="text-yellow-300 text-sm">
                                <i class="fas fa-lightbulb mr-2"></i>
                                Pastikan nomor invoice yang Anda masukkan benar atau hubungi customer service untuk bantuan.
                            </p>
                        </div>
                    </div>
                `;
            }
        }, 1500);
    }

    function refreshTransactions() {
        const refreshIcon = document.getElementById('refreshIcon');
        refreshIcon.classList.add('fa-spin');
        
        // Simulate API refresh
        setTimeout(() => {
            populateTransactions();
            refreshIcon.classList.remove('fa-spin');
            
            // Show toast notification
            showToast('Transaksi berhasil diperbarui', 'success');
        }, 1000);
    }

    function showToast(message, type = 'info') {
        const toast = document.createElement('div');
        toast.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full ${
            type === 'success' ? 'bg-green-500/90 text-white' : 'bg-blue-500/90 text-white'
        }`;
        toast.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-${type === 'success' ? 'check' : 'info'}-circle mr-2"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(toast);
        
        // Animate in
        setTimeout(() => {
            toast.classList.remove('translate-x-full');
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
            toast.classList.add('translate-x-full');
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 300);
        }, 3000);
    }

    // Auto refresh functionality
    let autoRefreshInterval;
    
    function toggleAutoRefresh() {
        const autoRefreshCheckbox = document.getElementById('autoRefresh');
        
        if (autoRefreshCheckbox.checked) {
            autoRefreshInterval = setInterval(refreshTransactions, 30000); // Refresh every 30 seconds
        } else {
            clearInterval(autoRefreshInterval);
        }
    }

    // Initialize page
    document.addEventListener('DOMContentLoaded', function() {
        populateTransactions();
        
        // Setup auto refresh
        document.getElementById('autoRefresh').addEventListener('change', toggleAutoRefresh);
        toggleAutoRefresh(); // Start auto refresh if enabled
        
        // Enter key search
        document.getElementById('invoice').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                searchOrder();
            }
        });
    });
</script>

<!-- Custom CSS for animations -->
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
    
    /* Custom scrollbar for table */
    .overflow-x-auto::-webkit-scrollbar {
        height: 4px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-track {
        background: rgba(75, 85, 99, 0.3);
        border-radius: 2px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: rgba(59, 130, 246, 0.6);
        border-radius: 2px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: rgba(59, 130, 246, 0.8);
    }
    
    /* Hover effects */
    tbody tr:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
