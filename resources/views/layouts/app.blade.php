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
    <body class="font-['Hanken_Grotesk'] bg-[#121212] min-h-screen text-white antialiased">

        <div class="container">
            <x-navbar />
            @yield('content')
        </div>