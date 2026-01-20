<?php

namespace App\Livewire\Backend\Admin\AirportPrices;

use App\Enums\ActiveInactiveStatus;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Livewire\Forms\AirportPriceForm;
use App\Models\AirportPrice;
use App\Services\AirportPriceService;
use App\Traits\Livewire\WithNotification;

class Edit extends Component
{
    use WithNotification;

    public AirportPriceForm $form;
    public AirportPrice $model;

    protected AirportPriceService $service;

    public function boot(AirportPriceService $service)
    {
        $this->service = $service;
    }

    public function mount(AirportPrice $model): void
    {
        $this->model = $model;
        $this->form->setData($model);
    }

    public function render()
    {
        return view('livewire.backend.admin.airport-prices.edit', [
            'statuses' => ActiveInactiveStatus::options(),
        ]);
    }

    public function save()
    {
        $validated = $this->form->validate();
        try {
            $this->service->updateData($this->model->id, $validated);
            $this->dispatch('AirportPriceUpdated');
            $this->success('Data updated successfully');
            $this->resetForm();
            return $this->redirect(route('admin.airport-price.index'), navigate: true);
        } catch (\Throwable $e) {
            Log::error('Failed to update airport price', [
                'airport_price_id' => $this->model->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to update airport price.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->setData($this->model);
    }
}
