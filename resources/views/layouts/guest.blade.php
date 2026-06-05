<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin Portal</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('build/assets/img/logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-200 antialiased bg-slate-950">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative overflow-hidden px-4">
            <!-- Glowing background gradients matching Tripanca theme (Blue & Cyan) -->
            <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] rounded-full bg-blue-600/15 blur-[120px] pointer-events-none animate-pulse" style="animation-duration: 8s;"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] rounded-full bg-cyan-500/15 blur-[120px] pointer-events-none animate-pulse" style="animation-duration: 12s;"></div>

            <!-- Main Container -->
            <div class="w-full sm:max-w-md z-10 my-8">
                <!-- Logo & Heading -->
                <div class="flex flex-col items-center mb-6">
                    <a href="/" class="transition-transform hover:scale-105 duration-300">
                        <img src="{{ asset('build/assets/img/logo.png') }}" class="h-20 w-auto object-contain filter drop-shadow-[0_4px_20px_rgba(0,209,249,0.25)]" alt="Tripanca Logo">
                    </a>
                    <h2 class="text-white text-2xl font-bold mt-4 tracking-wide">Portal Admin</h2>
                    <p class="text-cyan-400/80 text-xs mt-1 tracking-wider uppercase font-semibold">PT Tirta Panca Anugrah</p>
                </div>

                <!-- Glassmorphism Card -->
                <div class="w-full px-8 py-10 bg-slate-900/60 backdrop-blur-xl border border-slate-800 rounded-3xl shadow-[0_25px_60px_-15px_rgba(0,0,0,0.7)]">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>

