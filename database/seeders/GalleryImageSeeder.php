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
                'image' => 'wedding-1.jpg',
                'alt' => 'Luxury wedding car service',
            ],
            [
                'gallery_category_id' => 1,
                'image' => 'wedding-2.jpg',
                'alt' => 'Premium wedding transportation',
            ],
            [
                'gallery_category_id' => 2,
                'image' => 'corporate-1.jpg',
                'alt' => 'Corporate event transportation',
            ],
            [
                'gallery_category_id' => 2,
                'image' => 'corporate-2.jpg',
                'alt' => 'Business class service',
            ],
            [
                'gallery_category_id' => 3,
                'image' => 'airport-1.jpg',
                'alt' => 'Professional airport transfer',
            ],
            [
                'gallery_category_id' => 3,
                'image' => 'airport-2.jpg',
                'alt' => 'Reliable airport service',
            ],
            [
                'gallery_category_id' => 4,
                'image' => 'special-1.jpg',
                'alt' => 'Special occasion transportation',
            ],
            [
                'gallery_category_id' => 5,
                'image' => 'luxury-1.jpg',
                'alt' => 'Premium luxury vehicle',
            ],
        ];

        foreach ($images as $image) {
            GalleryImage::create($image);
        }
    }
}
