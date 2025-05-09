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
        <link rel="stylesheet" href="https://unpkg.com/trix@1.3.1/dist/trix.css">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<!-- Tiptap CSS -->
<!-- Plyr CSS -->
<script src="https://cdn.jsdelivr.net/npm/preline @1.9.0/dist/preline.min.js"></script>
<!-- Plyr JS -->
<script src="https://cdn.plyr.io/3.7.8/plyr.js "></script>
<!-- Plyr JS -->
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

<link href="https://cdn.jsdelivr.net/npm/@tiptap/core@2.0.0-beta.0/dist/tiptap.css" rel="stylesheet">
<!-- Tiptap JS -->
<link rel="stylesheet" href="{{ asset('build/assets/text.css') }}">
<!-- Swiper.js CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link href="https://vjs.zencdn.net/8.9.0/video-js.css" rel="stylesheet" />

<!-- Swiper.js JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@tiptap/core@2.0.0-beta.0/dist/tiptap.umd.min.js"></script>
<!-- Quill styles -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

        <!-- body sonunda -->
        <script src="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trix@1.3.1/dist/trix.css">
       <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
      <!-- Hero Animasyon CSS -->
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

        <!-- Scripts -->
        {{-- sbazı şeyker düzenlendi --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment@2.30.1/moment.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>
        <script src="https://vjs.zencdn.net/8.9.0/video.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/videojs-youtube/dist/Youtube.min.js"></script>
    </body>
<!-- Hero Animasyon JS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
      // Scroll animasyonları
      const heroElements = document.querySelectorAll('.hero-animate');

      const animateOnScroll = () => {
        heroElements.forEach(el => {
          const elTop = el.getBoundingClientRect().top;
          const windowHeight = window.innerHeight;

          if (elTop < windowHeight - 100) {
            el.classList.add('animated');
          }
        });
      };

      // Sayfa yüklendiğinde ve scroll yapıldığında animasyonları tetikle
      animateOnScroll();
      window.addEventListener('scroll', animateOnScroll);

      // Counter animasyonu
      const counterElement = document.getElementById('stats-counter');
      if (counterElement) {
        const targetNumber = parseInt(counterElement.getAttribute('data-target'));
        const duration = 2000; // 2 saniye
        const frameDuration = 1000 / 60; // 60 FPS
        const totalFrames = Math.round(duration / frameDuration);
        let frame = 0;

        const counter = setInterval(() => {
          frame++;
          const progress = frame / totalFrames;
          const currentNumber = Math.round(targetNumber * progress);

          counterElement.textContent = currentNumber.toLocaleString() + '+';

          if (frame === totalFrames) {
            clearInterval(counter);
          }
        }, frameDuration);
      }
    });
  </script>
</html>
