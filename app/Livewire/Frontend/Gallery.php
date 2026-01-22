<?php

namespace App\Livewire\Frontend;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use Livewire\Component;

class Gallery extends Component
{
    public $selectedCategory = 'All';
    public $images = []; // 🔥 REQUIRED for entangle

    public function mount()
    {
        $this->loadImages();
    }

    public function selectCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->loadImages();
    }

    protected function loadImages()
    {
        $query = GalleryImage::with('category')
            ->active()
            ->orderBy('sort_order');

        if ($this->selectedCategory !== 'All') {
            $query->where('gallery_category_id', $this->selectedCategory);
        }

        $this->images = $query->get()->values()->toArray(); // ✅ ARRAY
    }

    public function render()
    {
        return view('livewire.frontend.gallery', [
            'categories' => GalleryCategory::active()->orderBy('sort_order')->get(),
        ]);
    }
}
