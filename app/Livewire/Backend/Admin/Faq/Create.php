<?php

namespace App\Livewire\Backend\Admin\Faq;

use App\Enums\ActiveInactiveStatus;
use App\Livewire\Forms\FaqForm;
use App\Services\FaqService;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    use WithNotification;

    public FaqForm $form;

    protected FaqService $service;

    public function boot(FaqService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.backend.admin.faq.create', [
            'statuses' => ActiveInactiveStatus::options(),
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            $this->service->createData($validated);
            $this->success('Data created successfully');
            $this->resetForm();
            return $this->redirect(route('admin.faq.index'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create data: ' . $e->getMessage());

            $this->error('Failed to create data.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }
}
