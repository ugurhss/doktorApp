<header class="sticky top-0 inset-x-0 bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 px-4 sm:px-6 lg:px-8 py-2">
        <!-- Logo and Mobile Toggle -->
        <div class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600 dark:text-white">LOGO</a>
            <div class="md:hidden">
                <button type="button" class="hs-collapse-toggle" data-hs-collapse="#mobile-menu">
                    <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Items -->
        <div id="mobile-menu" class="hs-collapse hidden md:flex md:items-center w-full md:w-auto">
            <ul class="flex flex-col md:flex-row md:space-x-6 mt-4 md:mt-0">
                <li><a href="/" class="text-gray-700 dark:text-white hover:text-blue-500">Anasayfa</a></li>
                <li><a href="/dashboard" class="text-gray-700 dark:text-white hover:text-blue-500">Dashboard</a></li>
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-gray-700 dark:text-white hover:text-red-500">Çıkış</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="text-gray-700 dark:text-white hover:text-blue-500">Giriş</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-700 dark:text-white hover:text-blue-500">Kayıt</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</header>
