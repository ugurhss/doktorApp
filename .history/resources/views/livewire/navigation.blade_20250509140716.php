<!-- ========== HEADER ========== -->
<header class="flex flex-wrap md:flex-col md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200">
    <!-- Topbar -->
    <div class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8">
      <div class="flex-1 flex items-center justify-end gap-x-3 pt-2">
        <a class="inline-flex justify-center items-center gap-x-2 font-medium text-sm text-gray-800 hover:text-neutral-500 focus:outline-hidden focus:text-neutral-500" href="#">
          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.54 15H17a2 2 0 0 0-2 2v4.54"/><path d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17"/><path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05"/><circle cx="12" cy="12" r="10"/></svg>
          English (US)
        </a>

        <!-- Button Group -->
        <div class="flex flex-wrap items-center gap-x-1.5">

          @auth
            <!-- Kullanıcı giriş yaptıysa -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100">
                Logout
              </button>
            </form>
            <a href="{{ route('dashboard') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
              Dashboard
            </a>
          @else
            <a class="py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100" href="{{ route('login') }}">
              Sign in
            </a>
            <a class="py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('register') }}">
              Get started
            </a>
          @endauth

        </div>
        <!-- End Button Group -->
      </div>
    </div>
    <!-- End Topbar -->

    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center gap-x-1">
        <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80" href="#" aria-label="Brand">Brand</a>

        <!-- Collapse Button -->
        <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-sm rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation" data-hs-collapse="#hs-header-base">
          <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- End Collapse Button -->
      </div>

      <!-- Collapse -->
      <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-base-collapse">
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
          <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
            <div class="grow">
              <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">

                <!-- Menüler buraya eklenecek -->
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="#">Hizmetlerimiz</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('news.byMenu', ['menu' => 'hakkımızda-1']) }}">Hakkımızda</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('news.byMenu', ['menu' => 'Projeler-2']) }}">Projeler</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('news.byMenu', ['menu' => 'kanser-hakkında-3']) }}">Kanser Hakkında</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('news.byMenu', ['menu' => 'haberler-4']) }}">Haberler</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('video', ['menu' => 'umut-dolu-videolar-5']) }}">Umut Dolu Videolar</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('video', ['menu' => 'faliyetlerimiz-6']) }}">Faaliyetlerimiz</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('video', ['menu' => 'medya-haberlerimiz-7']) }}">Medya Haberlerimiz</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('video', ['menu' => 'nasıl-destek-olabilirim-8']) }}">Nasıl Destek Olabilirim</a>
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100" href="{{ route('video', ['menu' => 'iletisim-9']) }}">İletişim</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
