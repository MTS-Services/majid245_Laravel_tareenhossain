<?php

namespace App\Livewire\Backend\Admin\Faq;

use App\Enums\ActiveInactiveStatus;
use App\Livewire\Forms\FaqForm;
use App\Models\Faq;
use App\Services\FaqService;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Edit extends Component
{
    use WithNotification;

    public FaqForm $form;

    public Faq $model;

    protected FaqService $service;

    public function boot(FaqService $service): void
    {
        $this->service = $service;
    }

    public function mount(Faq $model): void
    {
        $this->model = $model;
        $this->form->setData($model);
    }

    public function render()
    {
        return view('livewire.backend.admin.faq.edit', [
            'statuses' => ActiveInactiveStatus::options(),
        ]);
    }

    public function save()
    {
        $validated = $this->form->validate();

        try {
            $this->service->updateData($this->model->id, $validated);

            $this->dispatch('FaqUpdated');
            $this->success('FAQ updated successfully.');

            return $this->redirect(route('admin.faq.index'), navigate: true);

        } catch (\Throwable $e) {
            Log::error('Failed to update FAQ', [
                'faq_id' => $this->model->id,
                'error' => $e->getMessage(),
            ]);

            $this->error('Failed to update FAQ.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->setData($this->model);
    }
}
