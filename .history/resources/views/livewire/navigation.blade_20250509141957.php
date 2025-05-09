<!-- ========== HEADER ========== -->
<header class="flex flex-wrap md:flex-col md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200 shadow-sm">
    <!-- Topbar -->
    <div class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8">
      <div class="flex-1 flex items-center justify-end gap-x-3 pt-2 text-gray-800">
        <a class="inline-flex justify-center items-center gap-x-2 font-medium text-sm hover:text-purple-600 focus:outline-none" href="#">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.54 15H17a2 2 0 0 0-2 2v4.54"/><path d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17"/><path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05"/><circle cx="12" cy="12" r="10"/></svg>
          English (US)
        </a>

        <!-- Giriş/Kayıt Butonları -->
        <div class="flex flex-wrap items-center gap-x-1.5">

          @auth
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-purple-300 bg-purple-100 text-purple-800 hover:bg-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-300 transition-all duration-200">
                Çıkış Yap
              </button>
            </form>
            <a href="{{ route('dashboard') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition-all duration-200">
              Panel
            </a>
          @else
            <a href="{{ route('login') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-300 bg-white text-gray-800 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 transition-all duration-200">
              Giriş Yap
            </a>
            <a href="{{ route('register') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-orange-500 text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-300 transition-all duration-200">
              Kayıt Ol
            </a>
          @endauth

        </div>
      </div>
    </div>
    <!-- End Topbar -->

    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center gap-x-1">
        <a class="flex-none font-bold text-xl text-black focus:outline-none" href="#" aria-label="Brand">Logo</a>

        <!-- Hamburger Menü -->
        <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-xl border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base" data-hs-collapse="#hs-header-base">
          <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Menüyü Aç/Kapa</span>
        </button>
      </div>

      <!-- Collapse Menü -->
      <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-base-collapse">
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
          <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
            <div class="grow">
              <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">

                <!-- Ana Sayfa -->
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-purple-100 rounded-xl focus:outline-none focus:bg-purple-100 transition-all" href="#" aria-current="page">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                  Anasayfa
                </a>

                <!-- Dropdown Menü -->
                <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--adaptive:adaptive] [--is-collapse:true] md:[--is-collapse:false]">
                  <button id="hs-header-base-dropdown" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-purple-100 rounded-xl focus:outline-none focus:bg-purple-100" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>
                    Menüler
                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                  </button>
                  <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-xl md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-4.5 after:w-0.5 after:h-[calc(100%-4px)] after:bg-gray-100" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                    <div class="py-1 md:px-1 space-y-0.5">
                      <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-xl hover:bg-purple-100 focus:outline-none focus:bg-purple-100 transition-all" href="#">Hakkımızda</a>
                      <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-xl hover:bg-purple-100 focus:outline-none focus:bg-purple-100 transition-all" href="#">İletişim</a>
                    </div>
                  </div>
                </div>

                <!-- Diğer Menü Öğeleri -->
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-purple-100 rounded-xl focus:outline-none focus:bg-purple-100 transition-all" href="#">
                  Projeler
                </a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-purple-100 rounded-xl focus:outline-none focus:bg-purple-100 transition-all" href="#">
                  Blog
                </a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-purple-100 rounded-xl focus:outline-none focus:bg-purple-100 transition-all" href="#">
                  İletişim
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
