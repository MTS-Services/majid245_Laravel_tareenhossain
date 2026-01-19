<?php

namespace Database\Seeders;

use App\Models\AirportPrice;
use Illuminate\Database\Seeder;

class AirportPriceSeeder extends Seeder
{
    public function run(): void
    {
        $prices = [
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'Manchester',
                // 'airport_code' => 'MAN',
                'executive_saloon_price' => 100,
                'eight_seater_price' => 130,
            ],
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'East Midlands',
                // 'airport_code' => 'EMA',
                'executive_saloon_price' => 100,
                'eight_seater_price' => 130,
            ],
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'Leeds Bradford',
                // 'airport_code' => 'LBA',
                'executive_saloon_price' => 100,
                'eight_seater_price' => 130,
            ],
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'Birmingham',
                // 'airport_code' => 'BHX',
                'executive_saloon_price' => 150,
                'eight_seater_price' => 180,
            ],
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'Liverpool John Lennon',
                // 'airport_code' => 'LPL',
                'executive_saloon_price' => 135,
                'eight_seater_price' => 195,
            ],
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'Luton',
                // 'airport_code' => 'LTN',
                'executive_saloon_price' => 250,
                'eight_seater_price' => 280,
            ],
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'Heathrow',
                // 'airport_code' => 'LHR',
                'executive_saloon_price' => 280,
                'eight_seater_price' => 310,
            ],
            [
                'route_from' => 'Sheffield',
                // 'airport_name' => 'Gatwick',
                // 'airport_code' => 'LGW',
                'executive_saloon_price' => 325,
                'eight_seater_price' => 380,
            ],
        ];

        foreach ($prices as $price) {
            AirportPrice::create($price);
        }
    }
}
