<!-- ========== HEADER ========== -->
<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-gray-200">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Topbar -->
      <div class="flex flex-col md:flex-row justify-end items-center gap-3 pt-2">
        <a class="inline-flex justify-center items-center gap-x-2 font-medium text-sm text-gray-800 hover:text-neutral-500" href="#">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.54 15H17a2 2 0 0 0-2 2v4.54"/><path d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17"/><path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05"/><circle cx="12" cy="12" r="10"/></svg>
          English (US)
        </a>

        <!-- Giriş / Kayıt Butonları -->
        <div class="flex flex-wrap justify-center md:justify-end items-center gap-x-1.5 pb-2 md:pb-0">
          @auth
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none">
                Çıkış Yap
              </button>
            </form>
            <a href="{{ route('dashboard') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none">
              Panel
            </a>
          @else
            <a href="{{ route('login') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none">
              Giriş Yap
            </a>
            <a href="{{ route('register') }}" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none">
              Kayıt Ol
            </a>
          @endauth
        </div>
      </div>
      <!-- End Topbar -->

      <!-- Navbar Menü -->
      <nav class="relative flex flex-wrap items-center justify-between py-2">
        <div class="flex items-center justify-between w-full">
          <a class="font-semibold text-xl text-black focus:outline-none" href="#">Brand</a>

          <!-- Hamburger Menü (sadece mobilde görünür) -->
          <button type="button" class="hs-collapse-toggle md:hidden inline-flex justify-center items-center size-9 rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none" data-hs-collapse="#navbar-menu" aria-controls="navbar-menu" aria-label="Toggle navigation">
            <span class="sr-only">Menüyü Aç/Kapa</span>
            <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:block hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>

        <!-- Menü Öğeleri -->
        <div id="navbar-menu" class="hs-collapse hidden md:block overflow-hidden transition-all duration-300 basis-full grow md:w-auto mt-2 md:mt-0">
          <ul class="flex flex-col md:flex-row md:items-center md:justify-end gap-2 md:gap-6 text-sm text-gray-800">
            <li><a class="block py-1 hover:text-blue-600" href="#">Anasayfa</a></li>
            <li><a class="block py-1 hover:text-blue-600" href="#">Hizmetlerimiz</a></li>
            <li><a class="block py-1 hover:text-blue-600" href="#">Hakkımızda</a></li>
            <li><a class="block py-1 hover:text-blue-600" href="#">İletişim</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
