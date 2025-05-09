<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .hero-animate {
              opacity: 0;
              transform: translateY(20px);
              transition: all 0.6s ease-out;
            }

            .hero-animate.animated {
              opacity: 1;
              transform: translateY(0);
            }

            .hero-image-hover {
              transition: transform 0.5s ease;
            }

            .hero-image-hover:hover {
              transform: rotate(-1deg) scale(1.02);
            }

            .pulse-animation {
              animation: pulse 2s infinite;
            }

            @keyframes pulse {
              0% { transform: scale(1); }
              50% { transform: scale(1.05); }
              100% { transform: scale(1); }
            }

            .wave-animation {
              animation: wave 8s linear infinite;
            }

            @keyframes wave {
              0% { transform: translateX(0); }
              100% { transform: translateX(-50%); }
            }

            .stats-counter {
              font-variant-numeric: tabular-nums;
            }
          </style>
    </head>
    <body class="antialiased font-sans">


<livewire:navigation/>
<livewire:hero/>
<livewire:teams-doctors/>
<livewire:user-news-id-list/>

<livewire:specialist-cards/>
<livewire:footers/>





    </body>
</html>
