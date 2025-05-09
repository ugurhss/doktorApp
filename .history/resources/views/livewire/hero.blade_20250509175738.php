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
            <path fill="#cb9d41" fill-opacity="0.31" d="M0,160L6.2,138.7C12.3,117,25,75,37,96C49.2,117,62,203,74,213.3C86.2,224,98,160,111,160C123.1,160,135,224,148,218.7C160,213,172,139,185,138.7C196.9,139,209,213,222,240C233.8,267,246,245,258,224C270.8,203,283,181,295,154.7C307.7,128,320,96,332,106.7C344.6,117,357,171,369,165.3C381.5,160,394,96,406,96C418.5,96,431,160,443,186.7C455.4,213,468,203,480,202.7C492.3,203,505,213,517,192C529.2,171,542,117,554,112C566.2,107,578,149,591,170.7C603.1,192,615,192,628,181.3C640,171,652,149,665,149.3C676.9,149,689,171,702,170.7C713.8,171,726,149,738,117.3C750.8,85,763,43,775,37.3C787.7,32,800,64,812,85.3C824.6,107,837,117,849,138.7C861.5,160,874,192,886,218.7C898.5,245,911,267,923,245.3C935.4,224,948,160,960,165.3C972.3,171,985,245,997,234.7C1009.2,224,1022,128,1034,112C1046.2,96,1058,160,1071,192C1083.1,224,1095,224,1108,192C1120,160,1132,96,1145,90.7C1156.9,85,1169,139,1182,144C1193.8,149,1206,107,1218,85.3C1230.8,64,1243,64,1255,90.7C1267.7,117,1280,171,1292,186.7C1304.6,203,1317,181,1329,176C1341.5,171,1354,181,1366,165.3C1378.5,149,1391,107,1403,101.3C1415.4,96,1428,128,1434,144L1440,160L1440,320L1433.8,320C1427.7,320,1415,320,1403,320C1390.8,320,1378,320,1366,320C1353.8,320,1342,320,1329,320C1316.9,320,1305,320,1292,320C1280,320,1268,320,1255,320C1243.1,320,1231,320,1218,320C1206.2,320,1194,320,1182,320C1169.2,320,1157,320,1145,320C1132.3,320,1120,320,1108,320C1095.4,320,1083,320,1071,320C1058.5,320,1046,320,1034,320C1021.5,320,1009,320,997,320C984.6,320,972,320,960,320C947.7,320,935,320,923,320C910.8,320,898,320,886,320C873.8,320,862,320,849,320C836.9,320,825,320,812,320C800,320,788,320,775,320C763.1,320,751,320,738,320C726.2,320,714,320,702,320C689.2,320,677,320,665,320C652.3,320,640,320,628,320C615.4,320,603,320,591,320C578.5,320,566,320,554,320C541.5,320,529,320,517,320C504.6,320,492,320,480,320C467.7,320,455,320,443,320C430.8,320,418,320,406,320C393.8,320,382,320,369,320C356.9,320,345,320,332,320C320,320,308,320,295,320C283.1,320,271,320,258,320C246.2,320,234,320,222,320C209.2,320,197,320,185,320C172.3,320,160,320,148,320C135.4,320,123,320,111,320C98.5,320,86,320,74,320C61.5,320,49,320,37,320C24.6,320,12,320,6,320L0,320Z"></path>
          </svg>

    </div>
  </div>
</section>
<!-- ========== END ANIMATED HERO ========== -->
