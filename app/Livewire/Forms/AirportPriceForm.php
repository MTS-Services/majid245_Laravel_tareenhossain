<?php

namespace App\Livewire\Forms;

use App\Enums\ActiveInactiveStatus;
use Livewire\Attributes\Locked;
use Livewire\Form;

class AirportPriceForm extends Form
{

    #[Locked]
    public ?int $id = null;

    public string $route_from = '';
    public $executive_saloon_price = null;
    public $eight_seater_price = null;
    public string $status = ActiveInactiveStatus::ACTIVE->value;

    public function rules(): array
    {
        return [
            'route_from' => 'required|string',
            'executive_saloon_price' => 'required|numeric',
            'eight_seater_price' => 'required|numeric',
            'status' => 'required|string|in:' . implode(',', array_column(ActiveInactiveStatus::cases(), 'value')),
        ];
    }

    public function setData($airportPrice): void
    {
        $this->id = $airportPrice->id;
        $this->route_from = $airportPrice->route_from;
        $this->executive_saloon_price = $airportPrice->executive_saloon_price;
        $this->eight_seater_price = $airportPrice->eight_seater_price;
        $this->status = $airportPrice->status->value;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->route_from = '';
        $this->executive_saloon_price = null;
        $this->eight_seater_price = null;
        $this->status = ActiveInactiveStatus::ACTIVE->value;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
