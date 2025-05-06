<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-all duration-300">
        <!-- Logo -->
        <div class="mb-6">
            <a href="/" wire:navigate>
                <x-application-logo class="w-20 h-20 fill-current text-indigo-600 dark:text-indigo-400" />
            </a>
        </div>

        <!-- Content Container -->
        <div class="w-full sm:max-w-md p-6 sm:p-10 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transform transition-all hover:scale-[1.01] duration-300">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
