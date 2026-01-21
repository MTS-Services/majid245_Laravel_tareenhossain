<?php

namespace App\Livewire\Backend\Admin\GalleryCategories;


use Livewire\Component;
use App\Enums\ActiveInactiveStatus;
use Illuminate\Support\Facades\Log;
use App\Services\GalleryCategoryService;
use App\Livewire\Forms\GalleryCategoryForm;
use App\Traits\Livewire\WithNotification;

class Create extends Component
{
    use WithNotification;

    public GalleryCategoryForm $form;

    protected GalleryCategoryService  $service;

    public function boot(GalleryCategoryService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.backend.admin.gallery-categories.create', [
            'statuses' => ActiveInactiveStatus::options(),
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            $this->service->createData($validated);

            $this->dispatch('GalleryCategoryCreated');
            $this->success('Data created successfully');
            $this->resetForm();
            return $this->redirect(route('admin.gallery-category.index'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create gallery category: ' . $e->getMessage());

            $this->error('Failed to create gallery category.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }
}
