<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PI TOPUP - Top Up Game Digital Terpercaya & Termurah</title>
        <meta name="description" content="PI TOPUP - Platform top up diamond, UC, gold dan item game favorit dengan harga termurah. Proses instant 24/7 dan 100% aman. Weekly Diamond Pass hanya Rp 22.500!">

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

        <div class="min-h-screen flex flex-col">
            <x-navbar />
            
            <main class="flex-1">
                @yield('content')
            </main>
            
        </div>

        <!-- Loading Overlay -->
        <div id="loading-overlay" class="hidden fixed inset-0 bg-black/50 z-50 items-center justify-center">
            <div class="bg-gray-800 rounded-lg p-8 text-center">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500 mx-auto mb-4"></div>
                <p class="text-white">Memproses transaksi...</p>
            </div>
        </div>
    </body>