<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use Illuminate\Database\Seeder;

class GalleryCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Wedding',
            ],
            [
                'name' => 'Corporate',
            ],
            [
                'name' => 'Airport Transfer',
            ],
            [
                'name' => 'Special Events',
            ],
            [
                'name' => 'Luxury Cars',
            ],
        ];

        foreach ($categories as $category) {
            GalleryCategory::create($category);
        }
    }
}
