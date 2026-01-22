<?php

namespace App\Livewire\Backend\Admin\Faq;

use App\Enums\ActiveInactiveStatus;
use App\Services\FAQService;
use App\Traits\Livewire\WithDataTable;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;

class Index extends Component
{
    use WithDataTable, WithNotification;

    public $statusFilter = '';

    public $showDeleteModal = false;

    public $deleteDataId = null;

    public $bulkAction = '';

    public $showBulkActionModal = false;

    protected FAQService $service;

    public $perPage = 15;

    public function boot(FAQService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        $datas = $this->service->getPaginatedData($this->perPage, $this->getFilters());

        $columns = [
            [
                'key' => 'question',
                'label' => 'Question',
                'sortable' => true,
                'format' => function ($data) {
                    return Str::limit($data->question, 30);
                },

            ],
            [
                'key' => 'answer',
                'label' => 'Answer',
                'sortable' => true,
                'format' => function ($data) {
                    return Str::limit($data->answer, 30);
                },
            ],
            [
                'key' => 'status',
                'label' => 'Status',
                'sortable' => true,
                'format' => function ($data) {
                    return '<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium badge badge-soft ' . $data->status->color() . '">' .
                        $data->status->label() .
                        '</span>';
                },
            ],

            [
                'key' => 'created_at',
                'label' => 'Created At',
                'sortable' => true,
                'format' => function ($data) {
                    return $data->created_at_formatted;
                },
            ],
        ];

        $actions = [
            [
                'key' => 'id',
                'label' => 'View',
                'route' => 'admin.faq.view',
                'encrypt' => true,
            ],
            [
                'key' => 'id',
                'label' => 'Edit',
                'route' => 'admin.faq.edit',
                'encrypt' => true,
            ],
            [
                'key' => 'id',
                'label' => 'Delete',
                'method' => 'confirmDelete',
                'encrypt' => true,
            ],
        ];

        $bulkActions = [
            ['value' => 'delete', 'label' => 'Delete'],
            ['value' => 'activate', 'label' => 'Activate'],
            ['value' => 'inactive', 'label' => 'Inactive'],
        ];

        return view('livewire.backend.admin.faq.index', [
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
                'trace' => $e->getTraceAsString(),
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

    protected function getSelectableIds(): array
    {
        $ids = $this->service->getPaginatedData(
            perPage: $this->perPage,
            filters: $this->getFilters()
        )->pluck('id')->toArray();
        return $ids;
    }

    public function updatedStatusFilter(): void
    {
        $this->resetPage();
    }
}
