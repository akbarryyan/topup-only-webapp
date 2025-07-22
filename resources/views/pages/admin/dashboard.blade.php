@extends('layouts.app')

@section('title', 'Admin Dashboard - PI TOPUP')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#121212] to-[#1a1a1a]">
    <!-- Admin Header -->
    <div class="bg-[#18191A] border-b border-gray-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 lg:py-6">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl lg:text-3xl font-bold text-white mb-2">Admin Dashboard</h1>
                    <p class="text-gray-400 text-sm lg:text-base">Welcome back, Administrator</p>
                </div>
                <div class="flex items-center space-x-3 lg:space-x-4">
                    <div class="bg-[#F8A208] text-black px-3 lg:px-4 py-2 rounded-lg font-semibold text-sm lg:text-base">
                        <i class="fas fa-clock mr-2"></i>
                        <span id="current-time"></span>
                    </div>
                    <div class="bg-green-600/20 text-green-400 px-3 lg:px-4 py-2 rounded-lg font-semibold text-sm lg:text-base">
                        <i class="fas fa-circle text-xs mr-2"></i>
                        Online
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-6 lg:py-8">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-6 lg:mb-8">
            <!-- Total Revenue -->
            <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700 hover:border-[#F8A208]/50 transition-colors">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 lg:w-14 lg:h-14 bg-green-500/20 rounded-xl flex items-center justify-center">
                        <i class="fas fa-dollar-sign text-green-400 text-lg lg:text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
                            <i class="fas fa-arrow-up mr-1"></i>
                            +12.5%
                        </span>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm lg:text-base font-medium mb-1">Total Revenue</h3>
                <p class="text-2xl lg:text-3xl font-bold text-white">Rp 125.8M</p>
                <p class="text-gray-500 text-xs lg:text-sm mt-1">+Rp 15.2M from last month</p>
            </div>

            <!-- Total Orders -->
            <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700 hover:border-[#F8A208]/50 transition-colors">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 lg:w-14 lg:h-14 bg-blue-500/20 rounded-xl flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-blue-400 text-lg lg:text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-500/20 text-blue-400">
                            <i class="fas fa-arrow-up mr-1"></i>
                            +8.2%
                        </span>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm lg:text-base font-medium mb-1">Total Orders</h3>
                <p class="text-2xl lg:text-3xl font-bold text-white">24,589</p>
                <p class="text-gray-500 text-xs lg:text-sm mt-1">+1,892 from last month</p>
            </div>

            <!-- Active Users -->
            <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700 hover:border-[#F8A208]/50 transition-colors">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 lg:w-14 lg:h-14 bg-purple-500/20 rounded-xl flex items-center justify-center">
                        <i class="fas fa-users text-purple-400 text-lg lg:text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-purple-500/20 text-purple-400">
                            <i class="fas fa-arrow-up mr-1"></i>
                            +15.3%
                        </span>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm lg:text-base font-medium mb-1">Active Users</h3>
                <p class="text-2xl lg:text-3xl font-bold text-white">18,249</p>
                <p class="text-gray-500 text-xs lg:text-sm mt-1">+2,103 from last month</p>
            </div>

            <!-- Conversion Rate -->
            <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700 hover:border-[#F8A208]/50 transition-colors">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 lg:w-14 lg:h-14 bg-yellow-500/20 rounded-xl flex items-center justify-center">
                        <i class="fas fa-chart-line text-yellow-400 text-lg lg:text-xl"></i>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-500/20 text-yellow-400">
                            <i class="fas fa-arrow-up mr-1"></i>
                            +3.1%
                        </span>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm lg:text-base font-medium mb-1">Conversion Rate</h3>
                <p class="text-2xl lg:text-3xl font-bold text-white">68.4%</p>
                <p class="text-gray-500 text-xs lg:text-sm mt-1">+2.1% from last month</p>
            </div>
        </div>

        <!-- Charts and Tables Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 mb-6 lg:mb-8">
            <!-- Revenue Chart -->
            <div class="lg:col-span-2">
                <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700">
                    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between mb-4 lg:mb-6">
                        <div>
                            <h3 class="text-lg lg:text-xl font-bold text-white mb-1">Revenue Analytics</h3>
                            <p class="text-gray-400 text-sm">Monthly revenue growth overview</p>
                        </div>
                        <div class="flex items-center space-x-2 mt-3 lg:mt-0">
                            <select class="bg-[#242526] border border-gray-600 rounded-lg px-3 py-2 text-white text-sm focus:border-[#F8A208] focus:outline-none">
                                <option>Last 7 days</option>
                                <option>Last 30 days</option>
                                <option>Last 3 months</option>
                                <option>Last 6 months</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Chart Placeholder -->
                    <div class="h-64 lg:h-80 bg-[#242526] rounded-lg flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#F8A208]/10 to-green-500/10"></div>
                        <div class="text-center z-10">
                            <i class="fas fa-chart-area text-4xl text-[#F8A208] mb-3"></i>
                            <p class="text-gray-400 text-sm">Chart visualization would go here</p>
                            <p class="text-gray-500 text-xs mt-1">Integration with Chart.js or similar</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="space-y-4 lg:space-y-6">
                <!-- Top Games -->
                <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700">
                    <h3 class="text-lg font-bold text-white mb-4">Top Games</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between p-3 bg-[#242526] rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-500/20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-gem text-blue-400 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-sm">Mobile Legends</p>
                                    <p class="text-gray-400 text-xs">8,456 orders</p>
                                </div>
                            </div>
                            <span class="text-green-400 text-sm font-medium">68%</span>
                        </div>
                        
                        <div class="flex items-center justify-between p-3 bg-[#242526] rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-yellow-500/20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-fire text-yellow-400 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-sm">Free Fire</p>
                                    <p class="text-gray-400 text-xs">5,234 orders</p>
                                </div>
                            </div>
                            <span class="text-green-400 text-sm font-medium">21%</span>
                        </div>
                        
                        <div class="flex items-center justify-between p-3 bg-[#242526] rounded-lg">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-star text-purple-400 text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-sm">PUBG Mobile</p>
                                    <p class="text-gray-400 text-xs">3,891 orders</p>
                                </div>
                            </div>
                            <span class="text-green-400 text-sm font-medium">11%</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700">
                    <h3 class="text-lg font-bold text-white mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="{{ route('admin.products') }}" class="flex flex-col items-center p-3 bg-[#242526] rounded-lg hover:bg-[#F8A208]/10 hover:border-[#F8A208] border border-transparent transition-all">
                            <i class="fas fa-plus text-[#F8A208] text-lg mb-2"></i>
                            <span class="text-white text-xs font-medium">Add Product</span>
                        </a>
                        
                        <a href="{{ route('admin.users') }}" class="flex flex-col items-center p-3 bg-[#242526] rounded-lg hover:bg-blue-500/10 hover:border-blue-500 border border-transparent transition-all">
                            <i class="fas fa-users text-blue-400 text-lg mb-2"></i>
                            <span class="text-white text-xs font-medium">Manage Users</span>
                        </a>
                        
                        <a href="{{ route('admin.reports') }}" class="flex flex-col items-center p-3 bg-[#242526] rounded-lg hover:bg-green-500/10 hover:border-green-500 border border-transparent transition-all">
                            <i class="fas fa-chart-bar text-green-400 text-lg mb-2"></i>
                            <span class="text-white text-xs font-medium">Reports</span>
                        </a>
                        
                        <a href="{{ route('admin.settings') }}" class="flex flex-col items-center p-3 bg-[#242526] rounded-lg hover:bg-purple-500/10 hover:border-purple-500 border border-transparent transition-all">
                            <i class="fas fa-cog text-purple-400 text-lg mb-2"></i>
                            <span class="text-white text-xs font-medium">Settings</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions and System Status -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
            <!-- Recent Transactions -->
            <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700">
                <div class="flex items-center justify-between mb-4 lg:mb-6">
                    <h3 class="text-lg lg:text-xl font-bold text-white">Recent Transactions</h3>
                    <button class="text-[#F8A208] text-sm font-medium hover:text-[#E6940B] transition-colors">
                        View All
                    </button>
                </div>
                
                <div class="space-y-3 lg:space-y-4">
                    <div class="flex items-center justify-between p-3 lg:p-4 bg-[#242526] rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-green-500/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-green-400 text-sm"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">ML Diamond 1000+150</p>
                                <p class="text-gray-400 text-xs">ID: 1234567890 | Server: 8991</p>
                                <p class="text-gray-500 text-xs">2 minutes ago</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-green-400 font-semibold text-sm">Rp 285.000</p>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
                                Success
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 lg:p-4 bg-[#242526] rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-yellow-500/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-clock text-yellow-400 text-sm"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">FF Diamond 2180</p>
                                <p class="text-gray-400 text-xs">ID: 987654321</p>
                                <p class="text-gray-500 text-xs">5 minutes ago</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-white font-semibold text-sm">Rp 315.000</p>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-500/20 text-yellow-400">
                                Processing
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 lg:p-4 bg-[#242526] rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-green-500/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-green-400 text-sm"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">PUBG UC 8100</p>
                                <p class="text-gray-400 text-xs">ID: 5647382910</p>
                                <p class="text-gray-500 text-xs">12 minutes ago</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-green-400 font-semibold text-sm">Rp 1.250.000</p>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-500/20 text-green-400">
                                Success
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 lg:p-4 bg-[#242526] rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-red-500/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-times text-red-400 text-sm"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">ML Diamond 500+100</p>
                                <p class="text-gray-400 text-xs">ID: 1111222233 | Server: 8991</p>
                                <p class="text-gray-500 text-xs">18 minutes ago</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-gray-400 font-semibold text-sm">Rp 145.000</p>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-500/20 text-red-400">
                                Failed
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Status -->
            <div class="bg-[#18191A] rounded-2xl p-4 lg:p-6 border border-gray-700">
                <h3 class="text-lg lg:text-xl font-bold text-white mb-4 lg:mb-6">System Status</h3>
                
                <div class="space-y-4 lg:space-y-6">
                    <!-- Server Status -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-300 text-sm font-medium">Server Status</span>
                            <span class="flex items-center text-green-400 text-sm">
                                <i class="fas fa-circle text-xs mr-2"></i>
                                Online
                            </span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 98%"></div>
                        </div>
                        <p class="text-gray-500 text-xs mt-1">98% uptime</p>
                    </div>
                    
                    <!-- API Response Time -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-300 text-sm font-medium">API Response Time</span>
                            <span class="text-green-400 text-sm">125ms</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                        <p class="text-gray-500 text-xs mt-1">Excellent performance</p>
                    </div>
                    
                    <!-- Database Status -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-300 text-sm font-medium">Database Status</span>
                            <span class="flex items-center text-green-400 text-sm">
                                <i class="fas fa-circle text-xs mr-2"></i>
                                Connected
                            </span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                        <p class="text-gray-500 text-xs mt-1">Response time: 45ms</p>
                    </div>
                    
                    <!-- Storage Usage -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-300 text-sm font-medium">Storage Usage</span>
                            <span class="text-yellow-400 text-sm">68%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 68%"></div>
                        </div>
                        <p class="text-gray-500 text-xs mt-1">34.2GB of 50GB used</p>
                    </div>

                    <!-- Recent Activities -->
                    <div class="bg-[#242526] rounded-lg p-4 mt-6">
                        <h4 class="text-white font-semibold text-sm mb-3">Recent Activities</h4>
                        <div class="space-y-2">
                            <div class="flex items-center space-x-2 text-xs">
                                <i class="fas fa-circle text-green-400" style="font-size: 6px;"></i>
                                <span class="text-gray-300">System backup completed</span>
                                <span class="text-gray-500 ml-auto">2m ago</span>
                            </div>
                            <div class="flex items-center space-x-2 text-xs">
                                <i class="fas fa-circle text-blue-400" style="font-size: 6px;"></i>
                                <span class="text-gray-300">New user registered</span>
                                <span class="text-gray-500 ml-auto">5m ago</span>
                            </div>
                            <div class="flex items-center space-x-2 text-xs">
                                <i class="fas fa-circle text-yellow-400" style="font-size: 6px;"></i>
                                <span class="text-gray-300">Cache cleared</span>
                                <span class="text-gray-500 ml-auto">12m ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Update current time
    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('en-US', {
            hour12: false,
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('current-time').textContent = timeString;
    }
    
    // Update time immediately and then every second
    updateTime();
    setInterval(updateTime, 1000);
    
    // Add hover effects for stat cards
    const statCards = document.querySelectorAll('.bg-\\[\\#18191A\\]');
    statCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.transition = 'transform 0.2s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Simulate real-time data updates
    function simulateDataUpdate() {
        // Update some random values to simulate real-time data
        const elements = [
            { id: 'total-revenue', baseValue: 125.8 },
            { id: 'total-orders', baseValue: 24589 },
            { id: 'active-users', baseValue: 18249 },
            { id: 'conversion-rate', baseValue: 68.4 }
        ];
        
        // This would be connected to real data in production
        console.log('Simulating real-time data updates...');
    }
    
    // Update every 30 seconds
    setInterval(simulateDataUpdate, 30000);
    
    // Add click handlers for quick action buttons
    const quickActionButtons = document.querySelectorAll('.bg-\\[\\#242526\\]');
    quickActionButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add ripple effect
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    });
});
</script>

<style>
/* Custom scrollbar for tables */
.custom-scrollbar::-webkit-scrollbar {
    width: 6px;
    height: 6px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: #374151;
    border-radius: 3px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #6B7280;
    border-radius: 3px;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #9CA3AF;
}

/* Animation classes */
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

.fade-in-up {
    animation: fadeInUp 0.5s ease-out;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .grid-responsive {
        grid-template-columns: 1fr;
    }
    
    .text-responsive {
        font-size: 0.875rem;
    }
}

/* Loading states */
.loading-skeleton {
    background: linear-gradient(90deg, #374151 25%, #4B5563 50%, #374151 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% {
        background-position: 200% 0;
    }
    100% {
        background-position: -200% 0;
    }
}

/* Interactive elements */
.hover-lift:hover {
    transform: translateY(-2px);
    transition: transform 0.2s ease;
}

.click-scale:active {
    transform: scale(0.98);
    transition: transform 0.1s ease;
}
</style>
@endsection
