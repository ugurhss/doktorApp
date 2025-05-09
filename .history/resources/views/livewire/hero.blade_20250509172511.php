<!-- ========== MINIMAL HERO ========== -->
<section class="relative bg-gradient-to-r from-emerald-600 to-lime-500 overflow-hidden">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <!-- Left Content -->
        <div class="text-center md:text-left">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
            Kanserle Mücadelede<br>
            <span class="text-gray-800">Yanınızdayız</span>
          </h1>

          <p class="text-xl text-white/90 mb-8">
            Umut dolu yarınlar için birlikte güçleniyoruz. Kanser hastaları ve aileleri için psikolojik destek, bilgilendirme ve dayanışma platformumuz.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
            <a href="{{ route('news.byMenu', ['menu' => 'hizmetlerimiz']) }}"
               class="px-8 py-4 bg-white text-emerald-600 font-bold rounded-xl hover:bg-gray-100 transition duration-200 text-center shadow-md">
              Hizmetlerimizi Keşfet
            </a>
            <a href="{{ route('video', ['menu' => 'nasıl-destek-olabilirim-8']) }}"
               class="px-8 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white hover:text-emerald-600 transition duration-200 text-center shadow-md">
              Destek Olun
            </a>
          </div>
        </div>

        <!-- Right Image -->
        <div>
          <div class="relative rounded-2xl overflow-hidden shadow-xl">
            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                 alt="Doktor ve hasta el ele"
                 class="w-full h-auto object-cover rounded-2xl">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-600/40 to-transparent"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Geniş Dalga Çizgi -->
    <div class="absolute bottom-0 left-0 right-0">
      <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 40L120 30C240 20 480 0 720 0C960 0 1200 20 1320 30L1440 40V60H0V40Z" fill="white"/>
      </svg>
    </div>
  </section>
  <!-- ========== END MINIMAL HERO ========== -->
