<x-admin::app>
    @switch(Route::currentRouteName())
        @case('admin.gallery-image.create')
            <x-slot name="title">{{ __('Gallery Image Create') }}</x-slot>
              <x-slot name="pageSlug">{{ __('gallery_image') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Gallery Image Create') }} </x-slot>
            <livewire:backend.admin.gallery-images.create />
        @break

        @case('admin.gallery-image.edit')
            <x-slot name="title">{{ __('Gallery Image Edit') }}</x-slot>
              <x-slot name="pageSlug">{{ __('gallery_image') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Gallery Image Edit') }} </x-slot>
            <livewire:backend.admin.gallery-images.edit  :model="$data"/>
        @break

        @default
            <x-slot name="pageSlug">{{ __('gallery_image') }}</x-slot>
            <x-slot name="title">{{ __('Gallery Image list') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Gallery Image list') }}</x-slot>
            <livewire:backend.admin.gallery-images.index />
    @endswitch

</x-admin::app>
