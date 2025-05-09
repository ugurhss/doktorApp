<!-- ========== HEADER ========== -->
<header class="flex flex-wrap md:flex-col md:justify-start md:flex-nowrap z-50 w-full bg-gradient-to-r from-lime-500 to-green-400 border-b border-gray-200 shadow-md rounded-b-xl overflow-hidden">
    <!-- Topbar -->
    <div class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8">
      <div class="flex-1 flex items-center justify-between gap-x-3 pt-2 text-white">
        <!-- Logo -->
        <a class="flex items-center gap-2 font-bold text-lg text-white focus:outline-none" href="#" aria-label="Preline Logo">
          <img src="https://preline.co/assets/svg/logo.svg " alt="Preline Logo" class="h-7 w-auto">
          <span class="hidden md:inline">Preline</span>
        </a>

        <!-- Giriş/Kayıt Butonları -->
        <div class="flex items-center gap-x-1.5">

          @auth
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-white/30 bg-white/20 text-white hover:bg-white/30 focus:outline-none focus:ring-2 focus:ring-white/40 transition-all duration-200">
                Çıkış Yap
              </button>
            </form>
            <a href="{{ route('dashboard') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white text-green-700 hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-white transition-all duration-200">
              Panel
            </a>
          @else
            <a href="{{ route('login') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-white/30 bg-white/20 text-white hover:bg-white/30 focus:outline-none focus:ring-2 focus:ring-white/40 transition-all duration-200">
              Giriş Yap
            </a>
            <a href="{{ route('register') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white text-green-700 hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-white transition-all duration-200">
              Kayıt Ol
            </a>
          @endauth

        </div>

        <!-- Mobile Menu Button -->
        <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-xl border border-white/30 text-white hover:bg-white/10 focus:outline-none focus:bg-white/20 transition-all" id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">
          <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Menüyü Aç/Kapa</span>
        </button>
      </div>
    </div>
    <!-- End Topbar -->

    <!-- Collapse Menü -->
    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
      <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-base-collapse">
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-white/20 [&::-webkit-scrollbar-thumb]:bg-white/40">
          <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
            <div class="grow">
              <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">

                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="#">Hizmetlerimiz</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('news.byMenu', ['menu' => 'hakkımızda-1']) }}">Hakkımızda</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('news.byMenu', ['menu' => 'Projeler-2']) }}">Projeler</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('news.byMenu', ['menu' => 'kanser-hakkında-3']) }}">Kanser Hakkında</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('news.byMenu', ['menu' => 'haberler-4']) }}">Haberler</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('video', ['menu' => 'umut-dolu-videolar-5']) }}">Umut Dolu Videolar</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('video', ['menu' => 'faliyetlerimiz-6']) }}">Faaliyetlerimiz</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('video', ['menu' => 'medya-haberlerimiz-7']) }}">Medya Haberleri</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('video', ['menu' => 'nasıl-destek-olabilirim-8']) }}">Destek Ol</a>
                <a class="p-2 flex items-center text-sm text-white hover:bg-white/10 rounded-xl focus:outline-none focus:bg-white/20 transition-all" href="{{ route('video', ['menu' => 'iletisim-9']) }}">İletişim</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
