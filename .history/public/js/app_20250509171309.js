// <!-- Hero Animasyon JS -->
// <script>
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
