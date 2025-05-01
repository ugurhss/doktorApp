<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TAKIM-UZMANLIK</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <!-- ========== HEADER ========== -->
            <livewire:navigation />
        <!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content">
  <div class="py-12 bg-gray-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:featured-doctors :speciality_id="$id"/>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

    </body>
</html>
