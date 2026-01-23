<?php

namespace App\Livewire\Backend\Admin\GalleryImages;

use Livewire\Component;
use App\Enums\ActiveInactiveStatus;
use Illuminate\Support\Facades\Log;
use App\Services\GalleryImageService;
use App\Traits\Livewire\WithDataTable;
use App\Traits\Livewire\WithNotification;

class Index extends Component
{
    use WithDataTable, WithNotification;

    public $statusFilter = '';
    public $showDeleteModal = false;
    public $deleteDataId = null;
    public $bulkAction = '';
    public $showBulkActionModal = false;

    public $perPage = 15;

    protected GalleryImageService $service;

    public function boot(GalleryImageService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $datas = $this->service->getPaginatedData($this->perPage, $this->getFilters());
        $columns = [
            [
                'key' => 'image',
                'label' => 'Image',
                'sortable' => false,
                'format' => function ($data) {
                    return '<img src="' . storage_url($data->image) . '" class="w-16 h-16 object-cover rounded">';
                }
            ],
            // [
            //     'key' => 'gallery_category_id',
            //     'label' => 'Category',
            //     'sortable' => true,
            //     'format' => function ($data) {
            //         return $data->category ? $data->category->name : 'N/A';
            //     }
            // ],
            [
                'key' => 'alt',
                'label' => 'Alt Text',
                'sortable' => true
            ],
            [
                'key' => 'status',
                'label' => 'Status',
                'sortable' => true,
                'format' => function ($data) {
                    return '<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium badge badge-soft ' . $data->status->color() . '">' .
                        $data->status->label() .
                        '</span>';
                }
            ],
            [
                'key' => 'created_at',
                'label' => 'Created At',
                'sortable' => true,
                'format' => function ($data) {
                    return $data->created_at_formatted;
                }
            ],
        ];

        $actions = [
            [
                'key' => 'id',
                'label' => 'Edit',
                'route' => 'admin.gallery-image.edit',
                'encrypt' => true
            ],
            [
                'key' => 'id',
                'label' => 'Delete',
                'method' => 'confirmDelete',
                'encrypt' => true
            ],
        ];

        $bulkActions = [
            ['value' => 'delete', 'label' => 'Delete'],
            ['value' => 'activate', 'label' => 'Activate'],
            ['value' => 'inactive', 'label' => 'Inactive'],
        ];

        return view('livewire.backend.admin.gallery-images.index', [
            'datas' => $datas,
            'statuses' => ActiveInactiveStatus::options(),
            'columns' => $columns,
            'actions' => $actions,
            'bulkActions' => $bulkActions,
        ]);
    }

    public function confirmDelete($encryptedId): void
    {
        $this->deleteDataId = decrypt($encryptedId);
        $this->showDeleteModal = true;
    }

    public function delete(): void
    {
        try {
            if (!$this->deleteDataId) {
                return;
            }

            if ($this->deleteDataId == admin()->id) {
                $this->error('You cannot delete your own account');
                return;
            }

            $this->service->deleteData($this->deleteDataId);

            $this->showDeleteModal = false;
            $this->deleteDataId = null;

            $this->success('Data deleted successfully');
        } catch (\Throwable $e) {
            Log::error('Failed to delete Admin', [
                'admin_id' => $this->deleteDataId,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to delete Admin.');
        }
    }

    public function resetFilters(): void
    {
        $this->reset(['search', 'statusFilter', 'perPage', 'sortField', 'sortDirection', 'selectedIds', 'selectAll', 'bulkAction']);
        $this->resetPage();
    }

    public function confirmBulkAction(): void
    {
        if (empty($this->selectedIds) || empty($this->bulkAction)) {
            $this->warning('Please select Datas and an action');
            Log::info('No datas selected or no bulk action selected');
            return;
        }

        $this->showBulkActionModal = true;
    }

    public function executeBulkAction(): void
    {
        $this->showBulkActionModal = false;

        try {
            match ($this->bulkAction) {
                'delete' => $this->bulkDelete(),
                'activate' => $this->bulkUpdateStatus(ActiveInactiveStatus::ACTIVE),
                'inactive' => $this->bulkUpdateStatus(ActiveInactiveStatus::INACTIVE),
                default => null,
            };

            $this->selectedIds = [];
            $this->selectAll = false;
            $this->bulkAction = '';
        } catch (\Exception $e) {
            $this->error('Bulk action failed: ' . $e->getMessage());
        }
    }
     protected function bulkDelete(): void
    {
        $count = $this->service->bulkDeleteData($this->selectedIds, admin()->id);

        $this->success("{$count} Datas deleted successfully");
    }

    protected function bulkUpdateStatus(ActiveInactiveStatus $status): void
    {
        $count = $this->service->bulkUpdateStatus($this->selectedIds, $status);
        $this->success("{$count} Datas updated successfully");
    }

    protected function getFilters(): array
    {
        return [
            'search' => $this->search,
            'status' => $this->statusFilter,
            'sort_field' => $this->sortField,
            'sort_direction' => $this->sortDirection,
        ];
    }

    public function updatedStatusFilter(): void
    {
        $this->resetPage();
    }

     protected function getSelectableIds(): array
    {
        $ids = $this->service->getPaginatedData(
            perPage: $this->perPage,
            filters: $this->getFilters()
        )->pluck('id')->toArray();
        return $ids;
    }

}
