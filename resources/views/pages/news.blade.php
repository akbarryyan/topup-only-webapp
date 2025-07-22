@extends('layouts.app')

@section('content')
<!-- News Page -->
<main class="min-h-screen py-8 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                <i class="fas fa-newspaper text-blue-400 mr-3"></i>
                Berita & Pengumuman
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">Dapatkan informasi terbaru seputar update website, promo spesial, maintenance, dan pengumuman penting dari PI TOPUP</p>
        </div>

        <!-- Filter Tabs -->
        <div class="bg-gray-900/50 backdrop-blur-sm rounded-2xl p-4 md:p-6 border border-gray-800 mb-8">
            <div class="flex flex-wrap gap-2 md:gap-4 justify-center">
                <button onclick="filterNews('all')" class="filter-btn active bg-blue-600 hover:bg-blue-700 text-white px-4 md:px-6 py-2 md:py-3 rounded-lg text-sm md:text-base font-medium transition-all duration-300 hover:scale-105">
                    <i class="fas fa-globe mr-2"></i>
                    Semua
                </button>
                <button onclick="filterNews('promo')" class="filter-btn bg-gray-700 hover:bg-gray-600 text-gray-300 hover:text-white px-4 md:px-6 py-2 md:py-3 rounded-lg text-sm md:text-base font-medium transition-all duration-300 hover:scale-105">
                    <i class="fas fa-tags mr-2"></i>
                    Promo & Event
                </button>
                <button onclick="filterNews('update')" class="filter-btn bg-gray-700 hover:bg-gray-600 text-gray-300 hover:text-white px-4 md:px-6 py-2 md:py-3 rounded-lg text-sm md:text-base font-medium transition-all duration-300 hover:scale-105">
                    <i class="fas fa-rocket mr-2"></i>
                    Update Website
                </button>
                <button onclick="filterNews('maintenance')" class="filter-btn bg-gray-700 hover:bg-gray-600 text-gray-300 hover:text-white px-4 md:px-6 py-2 md:py-3 rounded-lg text-sm md:text-base font-medium transition-all duration-300 hover:scale-105">
                    <i class="fas fa-tools mr-2"></i>
                    Maintenance
                </button>
                <button onclick="filterNews('announcement')" class="filter-btn bg-gray-700 hover:bg-gray-600 text-gray-300 hover:text-white px-4 md:px-6 py-2 md:py-3 rounded-lg text-sm md:text-base font-medium transition-all duration-300 hover:scale-105">
                    <i class="fas fa-bullhorn mr-2"></i>
                    Pengumuman
                </button>
            </div>
        </div>

        <!-- News Grid -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl md:text-3xl font-bold text-white flex items-center">
                    <i class="fas fa-newspaper text-green-400 mr-3"></i>
                    Berita Terbaru
                </h2>
                <div class="flex items-center space-x-2">
                    <span class="text-gray-400 text-sm">Sortir:</span>
                    <select class="bg-gray-800 border border-gray-600 rounded-lg px-3 py-2 text-white text-sm focus:border-blue-500 focus:outline-none">
                        <option>Terbaru</option>
                        <option>Terpopuler</option>
                        <option>Trending</option>
                    </select>
                </div>
            </div>

            <!-- News Cards Grid -->
            <div id="newsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- News cards will be populated here -->
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center">
            <button id="loadMoreBtn" class="bg-gradient-to-r from-gray-700 to-gray-800 hover:from-gray-600 hover:to-gray-700 text-white px-8 py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105 border border-gray-600">
                <i class="fas fa-plus mr-2"></i>
                Muat Berita Lainnya
            </button>
        </div>
    </div>
</main>

<!-- JavaScript -->
<script>
    // Sample news data
    const newsData = [
        {
            id: 1,
            title: "🎉 Promo Akhir Tahun - Diskon Hingga 60% Semua Top Up Game!",
            excerpt: "Rayakan akhir tahun dengan promo spektakuler! Dapatkan diskon fantastis untuk top up Mobile Legends, Free Fire, PUBG, dan game favorit lainnya. Buruan sebelum kehabisan!",
            image: "https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?w=400&h=250&fit=crop",
            category: "promo",
            categoryName: "Promo Spesial",
            categoryColor: "green",
            date: "22 Juli 2024",
            timeAgo: "1 jam lalu",
            views: "2.1K",
            comments: "89",
            isHot: true,
            isPromo: true
        },
        {
            id: 2,
            title: "⚡ Update Website v2.5 - Fitur Pembayaran Baru dan UI Modern",
            excerpt: "PI TOPUP kini hadir dengan tampilan yang lebih fresh dan fitur pembayaran yang lebih lengkap. Kini tersedia QRIS, ShopeePay, Dana, dan metode pembayaran lainnya...",
            image: "https://images.unsplash.com/photo-1551650975-87deedd944c3?w=400&h=250&fit=crop",
            category: "update",
            categoryName: "Update Website",
            categoryColor: "blue",
            date: "21 Juli 2024",
            timeAgo: "1 hari lalu",
            views: "1.5K",
            comments: "67"
        },
        {
            id: 3,
            title: "🔧 Maintenance Terjadwal - Server Upgrade untuk Performa Lebih Baik",
            excerpt: "Untuk memberikan pengalaman terbaik, kami akan melakukan maintenance server pada Minggu, 28 Juli 2024 pukul 02.00 - 06.00 WIB. Mohon maaf atas ketidaknyamanannya...",
            image: "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=250&fit=crop",
            category: "maintenance",
            categoryName: "Maintenance",
            categoryColor: "orange",
            date: "20 Juli 2024",
            timeAgo: "2 hari lalu",
            views: "890",
            comments: "34"
        },
        {
            id: 4,
            title: "📢 Pengumuman Penting - Perubahan Jam Operasional Customer Service",
            excerpt: "Mulai tanggal 1 Agustus 2024, jam operasional customer service kami berubah menjadi 24/7. Tim support kami siap membantu Anda kapan saja!",
            image: "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=250&fit=crop",
            category: "announcement",
            categoryName: "Pengumuman",
            categoryColor: "purple",
            date: "19 Juli 2024",
            timeAgo: "3 hari lalu",
            views: "756",
            comments: "45"
        },
        {
            id: 5,
            title: "🎮 Game Baru Tersedia - Wuthering Waves dan Zenless Zone Zero",
            excerpt: "Kabar gembira untuk para gamers! Kini PI TOPUP mendukung top up untuk Wuthering Waves dan Zenless Zone Zero dengan harga terbaik dan proses instan...",
            image: "https://images.unsplash.com/photo-1511512578047-dfb367046420?w=400&h=250&fit=crop",
            category: "update",
            categoryName: "Update Website",
            categoryColor: "blue",
            date: "18 Juli 2024",
            timeAgo: "4 hari lalu",
            views: "1.2K",
            comments: "78"
        },
        {
            id: 6,
            title: "💰 Event Cashback 25% untuk Member VIP",
            excerpt: "Khusus untuk member VIP kami, dapatkan cashback 25% untuk setiap transaksi top up minimal Rp 100.000. Event berlaku sampai 31 Juli 2024!",
            image: "https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=250&fit=crop",
            category: "promo",
            categoryName: "Promo Member",
            categoryColor: "yellow",
            date: "17 Juli 2024",
            timeAgo: "5 hari lalu",
            views: "1.8K",
            comments: "156",
            isPromo: true
        },
        {
            id: 7,
            title: "🛡️ Keamanan Ditingkatkan - Sistem Verifikasi 2 Langkah",
            excerpt: "Untuk melindungi akun Anda dengan lebih baik, kami telah mengimplementasikan sistem keamanan berlapis dengan verifikasi 2 langkah via SMS dan email...",
            image: "https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=400&h=250&fit=crop",
            category: "update",
            categoryName: "Keamanan",
            categoryColor: "red",
            date: "16 Juli 2024",
            timeAgo: "6 hari lalu",
            views: "923",
            comments: "41"
        },
        {
            id: 8,
            title: "🏆 Program Referral Baru - Ajak Teman, Dapat Bonus!",
            excerpt: "Ajak teman untuk bergabung dengan PI TOPUP dan dapatkan bonus saldo hingga Rp 50.000 untuk setiap referral yang berhasil. Semakin banyak teman, semakin besar bonusnya!",
            image: "https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=250&fit=crop",
            category: "promo",
            categoryName: "Program Referral",
            categoryColor: "green",
            date: "15 Juli 2024",
            timeAgo: "1 minggu lalu",
            views: "1.4K",
            comments: "92"
        },
        {
            id: 9,
            title: "📱 Aplikasi Mobile PI TOPUP Segera Hadir!",
            excerpt: "Kami sedang mengembangkan aplikasi mobile PI TOPUP untuk iOS dan Android. Dengan aplikasi ini, top up game akan menjadi lebih mudah dan praktis. Coming soon!",
            image: "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=250&fit=crop",
            category: "announcement",
            categoryName: "Coming Soon",
            categoryColor: "indigo",
            date: "14 Juli 2024",
            timeAgo: "1 minggu lalu",
            views: "2.3K",
            comments: "198"
        },
        {
            id: 10,
            title: "⭐ Testimoni Customer - Rating 4.9/5 dari 10,000+ User",
            excerpt: "Terima kasih atas kepercayaan Anda! PI TOPUP telah melayani lebih dari 10,000 customer dengan rating kepuasan 4.9/5. Komitmen kami adalah memberikan layanan terbaik...",
            image: "https://images.unsplash.com/photo-1556761175-4b46a572b786?w=400&h=250&fit=crop",
            category: "announcement",
            categoryName: "Milestone",
            categoryColor: "cyan",
            date: "13 Juli 2024",
            timeAgo: "1 minggu lalu",
            views: "1.1K",
            comments: "67"
        }
    ];

    let currentFilter = 'all';
    let displayedNews = 6; // Show 6 news initially

    function getCategoryColor(color) {
        const colors = {
            blue: 'bg-blue-500/20 text-blue-400 border-blue-500/30',
            orange: 'bg-orange-500/20 text-orange-400 border-orange-500/30',
            purple: 'bg-purple-500/20 text-purple-400 border-purple-500/30',
            green: 'bg-green-500/20 text-green-400 border-green-500/30',
            yellow: 'bg-yellow-500/20 text-yellow-400 border-yellow-500/30',
            red: 'bg-red-500/20 text-red-400 border-red-500/30',
            gray: 'bg-gray-500/20 text-gray-400 border-gray-500/30',
            indigo: 'bg-indigo-500/20 text-indigo-400 border-indigo-500/30',
            cyan: 'bg-cyan-500/20 text-cyan-400 border-cyan-500/30'
        };
        return colors[color] || colors.blue;
    }

    function renderNewsCard(news) {
        return `
            <article class="bg-gray-900/50 backdrop-blur-sm rounded-xl overflow-hidden border border-gray-800 hover:border-gray-700 transition-all duration-300 group hover:scale-105 animate-fade-in-up">
                <!-- Image -->
                <div class="relative overflow-hidden">
                    <img src="${news.image}" alt="${news.title}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500" />
                    
                    <!-- Badges -->
                    <div class="absolute top-3 left-3 flex flex-col gap-2">
                        ${news.isHot ? '<span class="bg-red-500/90 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs font-medium"><i class="fas fa-fire mr-1"></i>HOT</span>' : ''}
                        ${news.isPromo ? '<span class="bg-green-500/90 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs font-medium"><i class="fas fa-tags mr-1"></i>PROMO</span>' : ''}
                    </div>
                    
                    <!-- Time -->
                    <div class="absolute top-3 right-3">
                        <span class="bg-black/50 backdrop-blur-sm text-white px-2 py-1 rounded-full text-xs">
                            <i class="fas fa-clock mr-1"></i>
                            ${news.timeAgo}
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-5">
                    <!-- Category -->
                    <div class="mb-3">
                        <span class="px-3 py-1 rounded-full text-xs font-medium border ${getCategoryColor(news.categoryColor)}">
                            ${news.categoryName}
                        </span>
                    </div>
                    
                    <!-- Title -->
                    <h3 class="text-lg font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-300 line-clamp-2 leading-tight">
                        ${news.title}
                    </h3>
                    
                    <!-- Excerpt -->
                    <p class="text-gray-400 text-sm mb-4 line-clamp-3 leading-relaxed">
                        ${news.excerpt}
                    </p>
                    
                    <!-- Footer -->
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <div class="flex items-center space-x-3">
                            <span class="flex items-center">
                                <i class="fas fa-calendar mr-1"></i>
                                ${news.date}
                            </span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="flex items-center">
                                <i class="fas fa-eye mr-1"></i>
                                ${news.views}
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-comment mr-1"></i>
                                ${news.comments}
                            </span>
                        </div>
                    </div>
                </div>
            </article>
        `;
    }

    function filterNews(category) {
        currentFilter = category;
        displayedNews = 6; // Reset to show 6 news
        
        // Update filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active', 'bg-blue-600', 'hover:bg-blue-700', 'text-white');
            btn.classList.add('bg-gray-700', 'hover:bg-gray-600', 'text-gray-300', 'hover:text-white');
        });
        
        event.target.classList.remove('bg-gray-700', 'hover:bg-gray-600', 'text-gray-300', 'hover:text-white');
        event.target.classList.add('active', 'bg-blue-600', 'hover:bg-blue-700', 'text-white');
        
        renderNews();
    }

    function renderNews() {
        const newsGrid = document.getElementById('newsGrid');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        
        let filteredNews = newsData;
        if (currentFilter !== 'all') {
            filteredNews = newsData.filter(news => news.category === currentFilter);
        }
        
        const newsToShow = filteredNews.slice(0, displayedNews);
        
        newsGrid.innerHTML = newsToShow.map(news => renderNewsCard(news)).join('');
        
        // Show/hide load more button
        if (displayedNews >= filteredNews.length) {
            loadMoreBtn.style.display = 'none';
        } else {
            loadMoreBtn.style.display = 'block';
        }
        
        // Add stagger animation
        setTimeout(() => {
            document.querySelectorAll('.animate-fade-in-up').forEach((el, index) => {
                el.style.animationDelay = `${index * 0.1}s`;
            });
        }, 100);
    }

    function loadMoreNews() {
        displayedNews += 6;
        renderNews();
    }

    // Initialize page
    document.addEventListener('DOMContentLoaded', function() {
        renderNews();
        
        // Load more button event
        document.getElementById('loadMoreBtn').addEventListener('click', loadMoreNews);
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
    
    /* Line clamp utility */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Hover effects */
    article:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
    }
    
    /* Button animations */
    button:hover {
        transform: translateY(-1px);
    }
    
    /* Custom scrollbar for select */
    select::-webkit-scrollbar {
        width: 6px;
    }
    
    select::-webkit-scrollbar-track {
        background: rgba(75, 85, 99, 0.3);
        border-radius: 3px;
    }
    
    select::-webkit-scrollbar-thumb {
        background: rgba(59, 130, 246, 0.6);
        border-radius: 3px;
    }
    
    select::-webkit-scrollbar-thumb:hover {
        background: rgba(59, 130, 246, 0.8);
    }
</style>
@endsection
