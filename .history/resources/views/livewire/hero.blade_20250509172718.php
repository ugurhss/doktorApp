<!-- ========== ELEGANT HERO DESIGN ========== -->
<section class="relative bg-white overflow-hidden">
    <!-- Dekoratif arkaplan elementleri -->
    <div class="absolute inset-0 z-0">
      <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-br from-emerald-50 to-lime-50"></div>
      <div class="absolute bottom-0 left-0 w-32 h-32 rounded-full bg-emerald-100 opacity-30 blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- İçerik Alanı -->
        <div class="text-center lg:text-left space-y-6">
          <div class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-100 text-emerald-800 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span class="text-sm font-medium">Yanınızdayız</span>
          </div>

          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
            Kanserle <span class="text-emerald-600">Mücadelede</span><br>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-500 to-lime-500">Birlikte Güçleniyoruz</span>
          </h1>

          <p class="text-xl text-gray-600 max-w-2xl mx-auto lg:mx-0">
            Kanser hastaları ve aileleri için kapsamlı destek, bilgi ve dayanışma platformu. Umut dolu yarınlar için buradayız.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
            <a href="{{ route('news.byMenu', ['menu' => 'hizmetlerimiz']) }}"
               class="px-8 py-4 bg-gradient-to-r from-emerald-500 to-lime-500 text-white font-bold rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 shadow-md">
              Hizmetlerimizi Keşfedin
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
            <a href="{{ route('video', ['menu' => 'nasıl-destek-olabilirim-8']) }}"
               class="px-8 py-4 border-2 border-emerald-500 text-emerald-600 font-bold rounded-xl hover:bg-emerald-50 transition-all duration-300 shadow-sm">
              Destek Olun
            </a>
          </div>
        </div>

        <!-- Görsel Alanı -->
        <div class="relative">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                 alt="Doktor ve hasta el ele"
                 class="w-full h-auto object-cover aspect-video">
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-600/20 to-transparent"></div>
          </div>

          <!-- İstatistik Kartları -->
          <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-lg p-6 w-64">
            <div class="flex items-center">
              <div class="p-3 bg-emerald-100 rounded-lg mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <div>
                <p class="text-sm text-gray-500">Desteklenen Hasta</p>
                <p class="text-2xl font-bold text-gray-800">1,250+</p>
              </div>
            </div>
          </div>

          <div class="absolute -top-6 -right-6 bg-white rounded-xl shadow-lg p-6 w-64">
            <div class="flex items-center">
              <div class="p-3 bg-lime-100 rounded-lg mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-lime-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <p class="text-sm text-gray-500">Başarı Hikayesi</p>
                <p class="text-2xl font-bold text-gray-800">320+</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Dekoratif dalga efekti -->
    <div class="absolute bottom-0 left-0 right-0 h-24 overflow-hidden">
      <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-full">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
              fill="#f8fafc"
              class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
              fill="#ecfdf5"
              class="shape-fill"
              opacity="0.5"></path>
      </svg>
    </div>
  </section>
  <!-- ========== END ELEGANT HERO DESIGN ========== -->
