<?php

namespace App\Livewire\Frontend;

use App\Models\GalleryImage;
use Livewire\Component;

class Gallery extends Component
{
    public $images = []; // required for entangle

    public function mount()
    {
        $this->loadImages();
    }

    protected function loadImages()
    {
        $this->images = GalleryImage::active()
            ->orderBy('sort_order')
            ->get()
            ->values()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.frontend.gallery');
    }
}
