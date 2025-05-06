<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();
        if(Auth::user()->role==0) {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
        } elseif(Auth::user()->role==1) {
            $this->redirectIntended(default: route('doctor.dashboard', absolute: false), navigate: true);
        } elseif(Auth::user()->role==2) {
            $this->redirectIntended(default: route('admin.dashboard', absolute: false), navigate: true);
        }


    }
}; ?>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 px-4">
    <div class="max-w-md w-full space-y-8 p-10 bg-white dark:bg-gray-800 rounded-2xl shadow-xl transform transition-all hover:scale-[1.01]">
        <!-- Logo & Title -->
        <div class="text-center">
            <div class="mx-auto h-12 w-12 text-indigo-600 dark:text-indigo-400">
                <!-- Heroicon name: outline/user-circle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                Hesabınıza Giriş Yapın
            </h2>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                Güvenli alanımıza erişmek için kimlik bilgilerinizi girin
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form wire:submit="login" class="mt-8 space-y-6">
            <!-- Email Address -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                </div>
                <x-text-input
                    wire:model="form.email"
                    id="email"
                    class="pl-10 w-full py-3 border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 dark:bg-gray-700 dark:text-white transition duration-200"
                    type="email"
                    name="email"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="E-posta adresiniz"
                />
                <x-input-error :messages="$errors->get('form.email')" class="mt-1 text-sm text-red-500 dark:text-red-400" />
            </div>

            <!-- Password -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </div>
                <x-text-input
                    wire:model="form.password"
                    id="password"
                    class="pl-10 w-full py-3 border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 dark:bg-gray-700 dark:text-white transition duration-200"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    placeholder="Şifreniz"
                />
                <x-input-error :messages="$errors->get('form.password')" class="mt-1 text-sm text-red-500 dark:text-red-400" />
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <label for="remember" class="flex items-center">
                    <input wire:model="form.remember" id="remember" type="checkbox" class="h-4 w-4 text-indigo-600 dark:text-indigo-400 focus:ring-indigo-500 dark:focus:ring-indigo-400 border-gray-300 dark:border-gray-600 rounded transition duration-200" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">Beni hatırla</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 transition duration-150 ease-in-out" href="{{ route('password.request') }}" wire:navigate>
                        Şifremi unuttum
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div>
                <x-primary-button class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 ease-in-out transform hover:-translate-y-0.5">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-indigo-400 group-hover:text-indigo-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Giriş Yap
                </x-primary-button>
            </div>
        </form>

        <!-- Divider -->
        <div class="relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400">
                    veya
                </span>
            </div>
        </div>

        <!-- Social Login -->
        <div class="grid grid-cols-2 gap-3">
            <button type="button" class="inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 transition duration-150 ease-in-out">
                <svg class="h-5 w-5 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                <span class="ml-2">Facebook</span>
            </button>
            <button type="button" class="inline-flex justify-center py-2 px-4 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-600 transition duration-150 ease-in-out">
                <svg class="h-5 w-5 text-red-600" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12.545 10.239v3.821h5.445c-0.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866 0.549 3.921 1.453l2.814-2.814c-1.787-1.665-4.12-2.637-6.735-2.637-5.523 0-10 4.477-10 10s4.477 10 10 10c8.837 0 10.725-7.498 10.725-7.498l-4.707 4.706z"/>
                </svg>
                <span class="ml-2">Google</span>
            </button>
        </div>
    </div>
</div>
