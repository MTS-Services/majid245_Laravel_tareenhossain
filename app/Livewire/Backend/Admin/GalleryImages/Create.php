<?php

namespace App\Livewire\Backend\Admin\GalleryImages;


use Livewire\Component;
use Livewire\WithFileUploads;
use App\Enums\ActiveInactiveStatus;
use Illuminate\Support\Facades\Log;
use App\Services\GalleryImageService;
use App\Services\GalleryCategoryService;
use App\Livewire\Forms\GalleryImageForm;
use App\Traits\Livewire\WithNotification;

class Create extends Component
{
    use WithNotification, WithFileUploads;

    public GalleryImageForm $form;

    protected GalleryImageService  $service;
    protected GalleryCategoryService  $categoryService;

    public function boot(GalleryImageService $service, GalleryCategoryService $categoryService)
    {
        $this->service = $service;
        $this->categoryService = $categoryService;
    }

    public function render()
    {
        return view('livewire.backend.admin.gallery-images.create', [
            'statuses' => ActiveInactiveStatus::options(),
            'categories' => $this->categoryService->getDatas()->where('status', ActiveInactiveStatus::ACTIVE),
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            if ($this->form->image) {
                $imagePath = $this->form->image->store('gallery-images', 'public');
                $validated['image'] = $imagePath;
            }

            $this->service->createData($validated);

            $this->dispatch('GalleryImageCreated');
            $this->success('Data created successfully');
            $this->resetForm();
            return $this->redirect(route('admin.gallery-image.index'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create gallery image: ' . $e->getMessage());

            $this->error('Failed to create gallery image.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }
}
