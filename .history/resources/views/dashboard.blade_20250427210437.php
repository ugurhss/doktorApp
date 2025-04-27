<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kullanucı Dashboard') }}
        </h2>
    </x-app-layout>
    <livewire:featured-doctors :speciality_id="0"/>
    <livewire:specialist-cards/>
    {{-- <livewire:recent-appointments/> --}}
    {{-- <livewire:hero/> --}}
