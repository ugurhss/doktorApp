<!-- ========== ANIMATED HERO ========== -->
<section class="relative bg-gradient-to-r from-emerald-600 to-lime-500 overflow-hidden">
  <!-- Arkaplan animasyon elemanları -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
      <div class="absolute top-20 left-10 w-40 h-40 bg-white rounded-full mix-blend-overlay filter blur-3xl"></div>
      <div class="absolute bottom-10 right-10 w-60 h-60 bg-emerald-300 rounded-full mix-blend-overlay filter blur-3xl"></div>
    </div>
  </div>

  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative z-10">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <!-- Left Content -->
      <div class="text-center md:text-left hero-animate">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
          <span class="inline-block">Kanserle <span class="text-gray-800">Mücadelede</span></span>
          <span class="inline-block mt-2 pulse-animation">Yalnız Değilsiniz</span>
        </h1>

        <p class="text-xl text-white/90 mb-8 hero-animate" style="transition-delay: 0.2s">
          Umut dolu yarınlar için birlikte güçleniyoruz. Kanser hastaları ve aileleri için psikolojik destek, bilgilendirme ve dayanışma platformumuz.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start hero-animate" style="transition-delay: 0.4s">
          <a href="{{ route('news.byMenu', ['menu' => 'hizmetlerimiz']) }}"
             class="px-8 py-4 bg-white text-emerald-600 font-bold rounded-xl hover:bg-gray-100 transition duration-300 text-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            Hizmetlerimizi Keşfet
          </a>
          <a href="{{ route('video', ['menu' => 'nasıl-destek-olabilirim-8']) }}"
             class="px-8 py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white hover:text-emerald-600 transition duration-300 text-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
            Destek Olun
          </a>
        </div>

        <!-- Küçük istatistikler -->
        <div class="mt-12 flex flex-wrap justify-center md:justify-start gap-6 hero-animate" style="transition-delay: 0.6s">
          <div class="flex items-center">
            <div class="p-3 bg-white/20 rounded-lg mr-3 backdrop-blur-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <div>
              <p class="text-sm text-white/80">Gönüllü</p>
              <p class="text-2xl font-bold text-white stats-counter" id="stats-counter" data-target="350">0+</p>
            </div>
          </div>

          <div class="flex items-center">
            <div class="p-3 bg-white/20 rounded-lg mr-3 backdrop-blur-sm">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
              </svg>
            </div>
            <div>
              <p class="text-sm text-white/80">Başarı Hikayesi</p>
              <p class="text-2xl font-bold text-white">120+</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Image -->
      <div class="hero-animate" style="transition-delay: 0.3s">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl hero-image-hover">
          <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
               alt="Doktor ve hasta el ele"
               class="w-full h-auto object-cover rounded-2xl">
          <div class="absolute inset-0 bg-gradient-to-t from-emerald-600/40 to-transparent"></div>

          <!-- Floating testimonial -->
          <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
            <p class="text-sm italic text-gray-700 mb-2">"Bu platform sayesinde yalnız olmadığımı hissettim. Teşekkürler!"</p>
            <p class="text-xs font-semibold text-emerald-600">- Ayşe K., 2 yıllık kanser savaşçısı</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Wave Shape Bottom -->
  <div class="absolute bottom-0 left-0 right-0 overflow-hidden">
    <div class="wave-animation" style="width: 90%;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273036" fill-opacity="0.12" d="M0,96L12,90.7C24,85,48,75,72,58.7C96,43,120,21,144,26.7C168,32,192,64,216,69.3C240,75,264,53,288,58.7C312,64,336,96,360,122.7C384,149,408,171,432,165.3C456,160,480,128,504,133.3C528,139,552,181,576,176C600,171,624,117,648,96C672,75,696,85,720,85.3C744,85,768,75,792,96C816,117,840,171,864,165.3C888,160,912,96,936,64C960,32,984,32,1008,80C1032,128,1056,224,1080,245.3C1104,267,1128,213,1152,186.7C1176,160,1200,160,1224,170.7C1248,181,1272,203,1296,218.7C1320,235,1344,245,1368,245.3C1392,245,1416,235,1428,229.3L1440,224L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path>
          </svg>
    </div>
  </div>
</section>
<!-- ========== END ANIMATED HERO ========== -->
