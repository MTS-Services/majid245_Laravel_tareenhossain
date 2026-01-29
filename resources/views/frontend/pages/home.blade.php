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

        @case('booking')
            <x-slot name="title">{{ __('Booking') }}</x-slot>
            <x-slot name="pageSlug">{{ __('booking') }}</x-slot>
            <livewire:frontend.booking />
        @break

        @case('booking.success')
            <x-slot name="title">{{ __('Booking Success') }}</x-slot>
            <x-slot name="pageSlug">{{ __('booking-success') }}</x-slot>
            <livewire:frontend.booking-success />
        @break

        @case('account')
            <x-slot name="title">{{ __('My Account | Central Executive Transfers') }}</x-slot>
            <x-slot name="pageSlug">{{ __('account') }}</x-slot>
            <livewire:frontend.account />
        @break

        @default
            <x-slot name="title">{{ __('Home') }}</x-slot>
            <x-slot name="pageSlug">{{ __('home') }}</x-slot>
            <x-slot name="title">{{ __('Home') }}</x-slot>
            <livewire:frontend.home_page />
    @endswitch
</x-frontend::app>
