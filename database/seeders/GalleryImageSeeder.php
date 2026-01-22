<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            [
                'gallery_category_id' => 1,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Luxury wedding car service',
            ],
            [
                'gallery_category_id' => 1,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Premium wedding transportation',
            ],
            [
                'gallery_category_id' => 2,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Corporate event transportation',
            ],
            [
                'gallery_category_id' => 2,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Business class service',
            ],
            [
                'gallery_category_id' => 3,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Professional airport transfer',
            ],
            [
                'gallery_category_id' => 3,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Reliable airport service',
            ],
            [
                'gallery_category_id' => 4,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Special occasion transportation',
            ],
            [
                'gallery_category_id' => 5,
                'image' => 'https://placehold.co/800x600',
                'alt' => 'Premium luxury vehicle',
            ],
        ];

        foreach ($images as $image) {
            GalleryImage::create($image);
        }
    }
}
