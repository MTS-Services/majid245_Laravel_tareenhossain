<x-admin::app>
    @switch(Route::currentRouteName())
        @case('admin.airport-price.create')
            <x-slot name="title">{{ __('Airport Pice Create') }}</x-slot>
              <x-slot name="pageSlug">{{ __('airport_price') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Airport Pice Create') }} </x-slot>
            <livewire:backend.admin.airport-prices.create />
        @break

        @case('admin.airport-price.edit')
            <x-slot name="title">{{ __('Airport Pice Edit') }}</x-slot>
              <x-slot name="pageSlug">{{ __('airport_price') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Airport Pice Edit') }} </x-slot>
            <livewire:backend.admin.airport-prices.edit  :model="$data"/>
        @break

        @default
            <x-slot name="pageSlug">{{ __('airport_price') }}</x-slot>
            <x-slot name="title">{{ __('Airport Price list') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Airport Price list') }}</x-slot>
            <livewire:backend.admin.airport-prices.index />
    @endswitch

</x-admin::app>