<x-frontend::app>

    @switch(Route::currentRouteName())
        @case('home')
            <x-slot name="title">{{ __('Home') }}</x-slot>
            <x-slot name="pageSlug">{{ __('home') }}</x-slot>
            <x-slot name="title">{{ __('Bookings Now') }}</x-slot>
            <livewire:frontend.home_page />
        @break

        @case('gallery')
            <x-slot name="title">{{ __('Gallery') }}</x-slot>
            <x-slot name="pageSlug">{{ __('gallery') }}</x-slot>
            <livewire:frontend.gallery />
        @break

        @default
            <x-slot name="title">{{ __('Home') }}</x-slot>
            <x-slot name="pageSlug">{{ __('home') }}</x-slot>
            <x-slot name="title">{{ __('Home') }}</x-slot>
            <livewire:frontend.home />
    @endswitch
</x-frontend::app>
