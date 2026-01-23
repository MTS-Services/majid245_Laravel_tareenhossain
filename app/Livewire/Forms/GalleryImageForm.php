<?php

namespace App\Livewire\Forms;

use App\Enums\ActiveInactiveStatus;
use Livewire\Attributes\Locked;
use Livewire\Form;

class GalleryImageForm extends Form
{

    #[Locked]
    public ?int $id = null;

    public $gallery_category_id = null;
    public $image = null;
    public $alt = null;
    public string $status = ActiveInactiveStatus::ACTIVE->value;

    public function rules(): array
    {
        $imageRule = $this->id ? 'nullable' : 'required';

        return [
            'gallery_category_id' => 'nullable|exists:gallery_categories,id',
            'image' => $imageRule . '|image|mimes:jpeg,jpg,png,gif,webp',
            'alt' => 'nullable|string|max:255',
            'status' => 'required|string|in:' . implode(',', array_column(ActiveInactiveStatus::cases(), 'value')),
        ];
    }

    public function setData($galleryImage): void
    {
        $this->id = $galleryImage->id;
        $this->gallery_category_id = $galleryImage->gallery_category_id;
        $this->alt = $galleryImage->alt;
        $this->status = $galleryImage->status->value;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->gallery_category_id = null;
        $this->image = null;
        $this->alt = null;
        $this->status = ActiveInactiveStatus::ACTIVE->value;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
