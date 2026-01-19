<x-frontend::app>
    <x-slot name="title">{{ __('Home') }}</x-slot>
    <x-slot name="pageSlug">{{ __('home') }}</x-slot>

    @switch(Route::currentRouteName())
        @case('home_page')
            <x-slot name="title">{{ __('Bookings Now') }}</x-slot>
            <livewire:frontend.home_page />
        @break

        @default
            <x-slot name="title">{{ __('Home') }}</x-slot>
            <livewire:frontend.home />
    @endswitch
</x-frontend::app>
