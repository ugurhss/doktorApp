<!-- HERO SECTION -->
<section class="relative bg-cover bg-center bg-no-repeat h-screen flex items-center justify-center text-white"
         style="background-image: url('https://images.unsplash.com/photo-1586053473296-d7e1b22796f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80 ');">
  <!-- Siyah şeffaf overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- İçerik -->
  <div class="max-w-4xl mx-auto px-6 relative z-10 text-center space-y-8">
    <!-- Başlık animasyonlu şekilde -->
    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight animate-fade-in-down">
      Umut Her Zaman Yanınızda
    </h1>

    <!-- Alt başlık -->
    <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-300">
      Kanser tedavisi gören bireylere destek olmak, umut dolu anlar yaratmak için buradayız.
    </p>

    <!-- Dinamik yazılar -->
    <div class="space-y-2">
      <p class="text-md md:text-lg font-light italic text-emerald-200 opacity-0 animate-slide-in delay-500" id="dynamic-text">Umut sadece bir kelime değil, bir yaşam yoludur.</p>
    </div>

    <!-- Butonlar -->
    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
      <a href="{{ route('video', ['menu' => 'umut-dolu-videolar-5']) }}"
         class="inline-flex items-center justify-center px-6 py-3 rounded-full font-medium bg-green-600 hover:bg-green-700 text-white shadow-lg hover:shadow-xl transform transition-all duration-300 hover:-translate-y-1">
        Umut Dolu Videolar
      </a>
      {{-- <a href="{{ route('donate') }}" --}}
         class="inline-flex items-center justify-center px-6 py-3 rounded-full font-medium border-2 border-white text-white hover:bg-white hover:text-green-700 bg-transparent shadow-lg hover:shadow-xl transform transition-all duration-300 hover:-translate-y-1">
        Destek Ol
      </a>
    </div>
  </div>

  <!-- Dalga efekti alt kısım -->
  <svg class="absolute bottom-0 left-0 w-full text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="currentColor" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,176C384,171,480,181,576,197.3C672,213,768,235,864,218.7C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</section>
<!-- END HERO SECTION -->

{{-- <style>
  @keyframes fade-in-down {
    from {
      opacity: 0;
      transform: translateY(-30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slide-in {
    from {
      opacity: 0;
      transform: translateX(-20px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .animate-fade-in-down {
    animation: fade-in-down 1s ease-out forwards;
  }

  .animate-slide-in {
    animation: slide-in 1s ease-out forwards;
  }

  .delay-300 {
    animation-delay: 0.3s;
  }

  .delay-500 {
    animation-delay: 0.5s;
  }
</style> --}}
