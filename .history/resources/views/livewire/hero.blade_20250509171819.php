<!-- ========== SOFT ANIMATED HERO ========== -->
<section class="relative bg-gradient-to-r from-emerald-600 to-lime-500 overflow-hidden">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <!-- Left Content - Hafif fade-up animasyonu -->
        <div class="text-center md:text-left transition-all duration-500 ease-out opacity-0 translate-y-5"
             x-data="{}"
             x-intersect="$el.classList.add('opacity-100', 'translate-y-0')">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
            Kanserle Mücadelede<br>
            <span class="text-gray-800 transition-colors duration-300 hover:text-gray-900">Yanınızdayız</span>
          </h1>

          <p class="text-xl text-white/90 mb-8 transition-all duration-500 delay-100"
             x-data="{}"
             x-intersect="$el.classList.add('opacity-100')"
             style="opacity: 0;">
            Umut dolu yarınlar için birlikte güçleniyoruz. Kanser hastaları ve aileleri için psikolojik destek, bilgilendirme ve dayanışma platformumuz.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start transition-all duration-500 delay-200"
               x-data="{}"
               x-intersect="$el.classList.add('opacity-100')"
               style="opacity: 0;">
            <a href="{{ route('news.byMenu', ['menu' => 'hizmetlerimiz']) }}"
               class="px-8 py-4 bg-white text-emerald-600 font-bold rounded-xl hover:bg-gray-100 transition-all duration-300 hover:shadow-lg text-center shadow-md transform hover:-translate-y-1">
              Hizmetlerimizi Keşfet
            </a>
            <a href="{{ route('video', ['menu' => 'nasıl-destek-olabilirim-8']) }}"
               class="px-8 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white hover:text-emerald-600 transition-all duration-300 hover:shadow-lg text-center shadow-md transform hover:-translate-y-1">
              Destek Olun
            </a>
          </div>
        </div>

        <!-- Right Image - Hafif scale animasyonu -->
        <div class="transition-all duration-500 delay-100 opacity-0 scale-95"
             x-data="{}"
             x-intersect="$el.classList.add('opacity-100', 'scale-100')">
          <div class="relative rounded-2xl overflow-hidden shadow-xl transition-all duration-500 hover:shadow-2xl">
            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                 alt="Doktor ve hasta el ele"
                 class="w-full h-auto object-cover rounded-2xl transition-transform duration-500 hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-600/40 to-transparent"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Geniş Dalga Çizgi - Hafif hareket -->
    <div class="absolute bottom-0 left-0 right-0 overflow-hidden h-20">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg"
           class="w-full h-full transition-all duration-1000"
           preserveAspectRatio="none"
           x-data="{ offset: 0 }"
           x-intersect="setInterval(() => { offset = (offset + 0.2) % 100 }, 50)"
           :style="`transform: translateX(-${offset}px)`">
        <path d="M0 60C300 60 400 0 720 0C1040 0 1140 60 1440 60V120H0V60Z" fill="white"/>
      </svg>
    </div>
  </section>
  <!-- ========== END SOFT ANIMATED HERO ========== -->

  <!-- AlpineJS CDN (app.blade.php head kısmına ekleyin) -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
