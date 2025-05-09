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
