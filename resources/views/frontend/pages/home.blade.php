<x-frontend::app>
    <x-slot name="title">{{ __('Home') }}</x-slot>
    <x-slot name="pageSlug">{{ __('home') }}</x-slot>

    @switch(Route::currentRouteName())
        @case('home_page')
            <x-slot name="title">{{ __('Admins Create') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Admin Management / Create') }}</x-slot>
            <livewire:frontend.home_page />
        @break

        @default
            <x-slot name="title">{{ __('Admins List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Admin Management / List') }}</x-slot>
            <livewire:frontend.home />
    @endswitch
</x-frontend::app>
