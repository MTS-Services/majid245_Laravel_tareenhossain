<?php

namespace App\Livewire\Forms;

use App\Enums\ActiveInactiveStatus;
use Livewire\Attributes\Locked;
use Livewire\Form;

class GalleryCategoryForm extends Form
{

    #[Locked]
    public ?int $id = null;

    public string $name = '';
    public string $status = ActiveInactiveStatus::ACTIVE->value;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'status' => 'required|string|in:' . implode(',', array_column(ActiveInactiveStatus::cases(), 'value')),
        ];
    }

    public function setData($galleryCategory): void
    {
        $this->id = $galleryCategory->id;
        $this->name = $galleryCategory->name;
        $this->status = $galleryCategory->status->value;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->name = '';
        $this->status = ActiveInactiveStatus::ACTIVE->value;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
