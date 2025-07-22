@extends('layouts.app')

@section('content')
<!-- Main Content -->
        <main class="px-4 mt-6">
            <div class="max-w-7xl mx-auto space-y-8">
                <!-- Promotional Banner -->
                <div class="relative overflow-hidden rounded-xl shadow-2xl">
                    <img src="{{ asset('assets/images/banner.jpg') }}" alt="banner.png" class="w-full h-auto rounded-xl" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-xl"></div>
                </div>

                <x-best-seller-section />

                <x-specialist-m-l-section />

                <x-all-games-section />

                <x-voucher-section />

                <x-news-section />
            </div>
        </main>

        <!-- Floating WhatsApp Button -->
        <div class="fixed bottom-6 right-6 z-50">
            <button class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 animate-pulse">
                <i class="fab fa-whatsapp text-2xl"></i>
            </button>
        </div>

        <!-- JavaScript for interactivity -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add click handlers for game cards
                const gameCards = document.querySelectorAll('.cursor-pointer');
                gameCards.forEach(card => {
                    card.addEventListener('click', function() {
                        // Add selection effect
                        gameCards.forEach(c => c.classList.remove('ring-2', 'ring-blue-500'));
                        this.classList.add('ring-2', 'ring-blue-500');
                        
                        // Show notification
                        const gameName = this.querySelector('h3').textContent;
                        console.log(`Selected: ${gameName}`);
                    });
                });

                // Smooth scroll for CTA button
                document.querySelector('.bg-gradient-to-r button').addEventListener('click', function() {
                    document.querySelector('.bg-gray-900\\/50').scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                });
            });
        </script>
@endsection