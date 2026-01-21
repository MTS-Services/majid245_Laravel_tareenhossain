<x-admin::app>
    @switch(Route::currentRouteName())
        @case('admin.gallery-category.create')
            <x-slot name="title">{{ __('Gallery Category Create') }}</x-slot>
              <x-slot name="pageSlug">{{ __('gallery_category') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Gallery Category Create') }} </x-slot>
            <livewire:backend.admin.gallery-categories.create />
        @break

        @case('admin.gallery-category.edit')
            <x-slot name="title">{{ __('Gallery Category Edit') }}</x-slot>
              <x-slot name="pageSlug">{{ __('gallery_category') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Gallery Category Edit') }} </x-slot>
            <livewire:backend.admin.gallery-categories.edit  :model="$data"/>
        @break

        @default
            <x-slot name="pageSlug">{{ __('gallery_category') }}</x-slot>
            <x-slot name="title">{{ __('Gallery Category list') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Gallery Category list') }}</x-slot>
            <livewire:backend.admin.gallery-categories.index />
    @endswitch

</x-admin::app>
