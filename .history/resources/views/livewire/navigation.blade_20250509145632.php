<!-- ========== HEADER ========== -->
<header class="flex flex-wrap md:flex-col md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200">
    <!-- Topbar -->
    <div class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between gap-x-3 pt-2">

        <!-- Dil Seçimi - Sol Tarafta -->
        <div class="flex items-center gap-x-3 text-sm text-gray-800">
          <a href="#" class="inline-flex items-center gap-x-2 hover:text-purple-600 focus:outline-none">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54"/>
              <path d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17"/>
              <path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05"/>
              <circle cx="12" cy="12" r="10"/>
            </svg>
            Türkçe
          </a>
        </div>

        <!-- Sağ tarafta Giriş/Kayıt veya Panel/Çıkış Yap -->
        <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
          @auth
            <!-- Kullanıcı giriş yaptıysa -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl bg-white border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                Logout
              </button>
            </form>
            <a href="{{ route('dashboard') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-lime-400 text-black hover:bg-lime-500 focus:outline-hidden focus:bg-lime-500 transition disabled:opacity-50 disabled:pointer-events-none">
              Dashboard
            </a>
            <a href="{{ route('profile') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-lime-400 text-black hover:bg-lime-500 focus:outline-hidden focus:bg-lime-500 transition disabled:opacity-50 disabled:pointer-events-none">
              {{ __('Profile') }}
            </a>
          @else
            <!-- Kullanıcı giriş yapmadıysa -->
            <a href="{{ route('login') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl bg-white border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
              Giriş Yap
            </a>
            <a href="{{ route('register') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-lime-400 text-black hover:bg-lime-500 focus:outline-hidden focus:bg-lime-500 transition disabled:opacity-50 disabled:pointer-events-none">
              Kayıt Ol
            </a>
          @endauth

          <!-- Mobil Menü Butonu -->
          <div class="lg:hidden">
            <button type="button" class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" data-hs-collapse="#hs-navbar-hcail">
              <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
              <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Topbar -->

    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
      <!-- Menü Collapse -->
      <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">

          <!-- Hizmetlerimiz -->
          <div>
            <a class="relative inline-block text-black focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400" href="#" aria-current="page">Hizmetlerimiz</a>
          </div>

          <!-- Diğer Menüler -->
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('news.byMenu', ['menu' => 'hakkımızda-1']) }}">Hakkımızda</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('news.byMenu', ['menu' => 'Projeler-2']) }}">Projeler</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('news.byMenu', ['menu' => 'kanser-hakkında-3']) }}">Kanser Hakkında</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('news.byMenu', ['menu' => 'haberler-4']) }}">Haberler</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('video.byMenu', ['menu' => 'umut-dolu-videolar-5']) }}">Umut Dolu Videolar</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('video.byMenu', ['menu' => 'faliyetlerimiz-6']) }}">Faaliyetlerimiz</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('video.byMenu', ['menu' => 'medya-haberlerimiz-7']) }}">Medya Haberleri</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('video.byMenu', ['menu' => 'nasıl-destek-olabilirim-8']) }}">Nasıl Destek Olunur?</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-none" href="{{ route('video.byMenu', ['menu' => 'iletisim-9']) }}">İletişim</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
