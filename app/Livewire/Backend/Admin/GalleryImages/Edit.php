<?php

namespace App\Livewire\Backend\Admin\GalleryImages;

use App\Enums\ActiveInactiveStatus;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Livewire\Forms\GalleryImageForm;
use App\Models\GalleryImage;
use App\Services\GalleryImageService;
use App\Services\GalleryCategoryService;
use App\Traits\Livewire\WithNotification;

class Edit extends Component
{
    use WithNotification, WithFileUploads;

    public GalleryImageForm $form;
    public GalleryImage $model;

    protected GalleryImageService $service;
    protected GalleryCategoryService  $categoryService;

    public function boot(GalleryImageService $service, GalleryCategoryService $categoryService)
    {
        $this->service = $service;
        $this->categoryService = $categoryService;
    }

    public function mount(GalleryImage $model): void
    {
        $this->model = $model;
        $this->form->setData($model);
    }

    public function render()
    {
        return view('livewire.backend.admin.gallery-images.edit', [
            'statuses' => ActiveInactiveStatus::options(),
            'categories' => $this->categoryService->getDatas()->where('status', ActiveInactiveStatus::ACTIVE),
        ]);
    }

    public function save()
    {
        $validated = $this->form->validate();
        try {
            if ($this->form->image) {
                if ($this->model->image && Storage::disk('public')->exists($this->model->image)) {
                    Storage::disk('public')->delete($this->model->image);
                }

                $imagePath = $this->form->image->store('gallery-images', 'public');
                $validated['image'] = $imagePath;
            } else {
                $validated['image'] = $this->model->image;
            }

            $this->service->updateData($this->model->id, $validated);
            $this->dispatch('GalleryImageUpdated');
            $this->success('Data updated successfully');
            $this->resetForm();
            return $this->redirect(route('admin.gallery-image.index'), navigate: true);
        } catch (\Throwable $e) {
            Log::error('Failed to update gallery image', [
                'gallery_image_id' => $this->model->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to update gallery image.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->setData($this->model);
    }
}
