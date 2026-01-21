<?php

namespace App\Livewire\Backend\Admin\AirportPrices;


use Livewire\Component;
use App\Enums\ActiveInactiveStatus;
use Illuminate\Support\Facades\Log;
use App\Services\AirportPriceService;
use App\Livewire\Forms\AirportPriceForm;
use App\Traits\Livewire\WithNotification;

class Create extends Component
{
    use WithNotification;

    public AirportPriceForm $form;

    protected AirportPriceService  $service;

    public function boot(AirportPriceService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.backend.admin.airport-prices.create', [
            'statuses' => ActiveInactiveStatus::options(),
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            $this->service->createData($validated);

            $this->dispatch('AirportPriceCreated');
            $this->success('Data created successfully');
            $this->resetForm();
            return $this->redirect(route('admin.airport-price.index'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create airport price: ' . $e->getMessage());

            $this->error('Failed to create airport price.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }
}
