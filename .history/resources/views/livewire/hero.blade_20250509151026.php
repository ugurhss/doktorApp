<!-- HERO SECTION -->
<section class="relative bg-gradient-to-br from-emerald-50 to-lime-100 py-20 md:py-32 overflow-hidden">
    <!-- Arka plan deseni (isteğe bağlı filigran veya yumuşak desen) -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="2" cy="2" r="2" fill="currentColor" class="text-green-600"></circle>
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#dots)" />
      </svg>
    </div>

    <!-- İçerik -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
      <h1 class="text-3xl md:text-5xl font-bold tracking-tight text-gray-900 mb-6 leading-tight">
        Umut Işığına Birlikte Ulaşalım
      </h1>
      <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto mb-10 leading-relaxed">
        Kanser tedavisi gören her bireye destek olmak için buradayız.
        Bir anlık yardım, bir hayat boyu umut olabilir.
      </p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="{{ route('video', ['menu' => 'umut-dolu-videolar-5']) }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200">
          Umut Dolu Videolar
        </a>
        <a href="{{ route('donate') }}" class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 shadow-sm transition-all duration-200">
          Destek Ol
        </a>
      </div>
    </div>

    <!-- Dekoratif dalga alt sınır -->
    <div class="absolute bottom-0 left-0 w-full overflow-x-hidden">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
        <path d="M0 30C0 30 288 0 720 0C1152 0 1440 30 1440 30V120H0V30Z" fill="#f0fdf4"/>
      </svg>
    </div>
  </section>
  <!-- END HERO SECTION -->
