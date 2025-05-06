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

<div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
    <div class="hidden bg-cover lg:block lg:w-1/2"
        style="background-image: url('https://images.unsplash.com/photo-1606660265514-358ebbadc80d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1575&q=80');">
    </div>

    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
        <div class="flex justify-center mx-auto">
            <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/logo.svg" alt="">
        </div>

        <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
            Welcome back!
        </p>

        @if (session('status'))
            <div class="mt-4 text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form wire:submit.prevent="login">
            <!-- Email -->
            <div class="mt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Email Address</label>
                <input wire:model="form.email" id="email" type="email" name="email" required autofocus
                    class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                @error('form.email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <div class="flex justify-between">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Password</label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-xs text-gray-500 dark:text-gray-300 hover:underline">Forgot Password?</a>
                    @endif
                </div>
                <input wire:model="form.password" id="password" type="password" name="password" required
                    class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                @error('form.password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember" class="inline-flex items-center">
                    <input wire:model="form.remember" id="remember" type="checkbox" name="remember"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                </label>
            </div>

            <!-- Submit -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    Log In
                </button>
            </div>
        </form>

        <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
            <a href="#" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">or sign up</a>
            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
        </div>
    </div>
</div>

