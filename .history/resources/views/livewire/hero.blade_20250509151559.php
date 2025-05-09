<!-- ========== HERO ========== -->
<section class="relative bg-gradient-to-r from-emerald-500 to-lime-400 overflow-hidden">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-20">
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <!-- Left Content -->
        <div class="text-center md:text-left">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4">
            Kanserle Mücadelede <span class="text-gray-800">Yanınızdayız</span>
          </h1>
          <p class="text-lg md:text-xl text-white opacity-90 mb-8">
            Umut dolu yarınlar için birlikte güçleniyoruz. Kanser hastaları ve aileleri için psikolojik destek, bilgilendirme ve dayanışma platformumuz.
          </p>
          <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
            <a href="{{ route('news.byMenu', ['menu' => 'hizmetlerimiz']) }}" class="px-6 py-3 bg-white text-emerald-600 font-medium rounded-xl hover:bg-gray-100 transition duration-300 text-center">
              Hizmetlerimizi Keşfet
            </a>
            <a href="{{ route('video', ['menu' => 'nasıl-destek-olabilirim-8']) }}" class="px-6 py-3 border-2 border-white text-white font-medium rounded-xl hover:bg-white hover:text-emerald-600 transition duration-300 text-center">
              Destek Olun
            </a>
          </div>
        </div>

        <!-- Right Image -->
        <div class="hidden md:block relative">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl transform rotate-1">
            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                 alt="Doktor ve hasta el ele"
                 class="w-full h-auto object-cover rounded-2xl">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-600/30 to-transparent"></div>
          </div>

          <!-- Stats -->
          <div class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg">
            <div class="flex items-center">
              <div class="p-2 bg-emerald-100 rounded-lg mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <div>
                <p class="text-sm text-gray-600">Desteklenen Hasta</p>
                <p class="text-xl font-bold text-gray-800">1,250+</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Wave Shape Bottom -->
    <div class="absolute bottom-0 left-0 right-0">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0 60L60 45C120 30 240 0 360 0C480 0 600 30 720 45C840 60 960 60 1080 45C1200 30 1320 0 1380 0L1440 0V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V60Z" fill="white"/>
      </svg>
    </div>
  </section>
  <!-- ========== END HERO ========== -->
