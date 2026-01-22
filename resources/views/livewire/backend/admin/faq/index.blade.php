<div>
    <div class="bg-white rounded-2xl p-6 mb-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-text-black dark:text-text-white">{{ __('FAQ Price') }}</h2>
            <div class="flex items-center gap-2">
                <x-ui.button href="{{ route('admin.faq.create') }}" class="w-auto! py-2!">
                    <flux:icon name="arrow-left"
                        class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-secondary" />
                    {{ __('Create') }}
                </x-ui.button>
            </div>
        </div>
    </div>

    {{-- Table Component --}}
    <x-ui.table :data="$datas" :columns="$columns" :actions="$actions" :bulkActions="$bulkActions" :bulkAction="$bulkAction"
        :statuses="$statuses" :selectedIds="$selectedIds" :mobileVisibleColumns="2" searchProperty="search" perPageProperty="perPage"
        :showBulkActions="true" emptyMessage="{{ __('No admins found. Create your first admin to get started.') }}" />

    {{-- Delete Confirmation Modal --}}
    <x-ui.confirmation-modal :show="'showDeleteModal'" title="{{ __('Delete this admin?') }}"
        message="{{ __('Are you sure you want to remove this admin?') }}" :method="'delete'"
        button-text="{{ __('Delete Admin') }}" />
</div>
