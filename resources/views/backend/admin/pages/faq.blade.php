<x-admin::app>
    @switch(Route::currentRouteName())
        @case('admin.faq.create')
            <x-slot name="title">{{ __('Faq Create') }}</x-slot>
            <x-slot name="pageSlug">{{ __('faq') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq Create') }} </x-slot>
            <livewire:backend.admin.faq.create />
        @break

        @case('admin.faq.edit')
            <x-slot name="title">{{ __('Faq Edit') }}</x-slot>
            <x-slot name="pageSlug">{{ __('faq') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq Edit') }} </x-slot>
            <livewire:backend.admin.faq.edit :model="$data" />
        @break

        @case('admin.faq.view')
            <x-slot name="title">{{ __('Faq view') }}</x-slot>
            <x-slot name="pageSlug">{{ __('faq') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq view') }} </x-slot>
            <livewire:backend.admin.faq.view :model="$data" />
        @break

        @default
            <x-slot name="pageSlug">{{ __('faq') }}</x-slot>
            <x-slot name="title">{{ __('FAQ list') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('FAQ list') }}</x-slot>
            <livewire:backend.admin.faq.index />
    @endswitch
        
</x-admin::app>
