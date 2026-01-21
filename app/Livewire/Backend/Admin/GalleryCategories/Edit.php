<?php

namespace App\Livewire\Backend\Admin\GalleryCategories;

use App\Enums\ActiveInactiveStatus;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Livewire\Forms\GalleryCategoryForm;
use App\Models\GalleryCategory;
use App\Services\GalleryCategoryService;
use App\Traits\Livewire\WithNotification;

class Edit extends Component
{
    use WithNotification;

    public GalleryCategoryForm $form;
    public GalleryCategory $model;

    protected GalleryCategoryService $service;

    public function boot(GalleryCategoryService $service)
    {
        $this->service = $service;
    }

    public function mount(GalleryCategory $model): void
    {
        $this->model = $model;
        $this->form->setData($model);
    }

    public function render()
    {
        return view('livewire.backend.admin.gallery-categories.edit', [
            'statuses' => ActiveInactiveStatus::options(),
        ]);
    }

    public function save()
    {
        $validated = $this->form->validate();
        try {
            $this->service->updateData($this->model->id, $validated);
            $this->dispatch('GalleryCategoryUpdated');
            $this->success('Data updated successfully');
            $this->resetForm();
            return $this->redirect(route('admin.gallery-category.index'), navigate: true);
        } catch (\Throwable $e) {
            Log::error('Failed to update gallery category', [
                'gallery_category_id' => $this->model->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to update gallery category.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->setData($this->model);
    }
}
