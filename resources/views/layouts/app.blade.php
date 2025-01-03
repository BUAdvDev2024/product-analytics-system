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

<body x-data="{
    sidebarToggle: window.innerWidth > 768,
    darkMode: true,
    handleResize() { this.sidebarToggle = window.innerWidth > 768 }
}" x-init="
    window.addEventListener('resize', handleResize);
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)));
    "
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
     class="font-sans antialiased transition-all duration-300 ease-in-out">
    <div class="flex overflow-hidden">
        <x-sidebar />
    
        <div class="bg-gray-100 dark:bg-gray-900 grow overflow-x-hidden overflow-y-auto h-screen">
            @include('layouts.navigation')
    
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset
    
    
            <!-- Page Content -->
            <main class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
