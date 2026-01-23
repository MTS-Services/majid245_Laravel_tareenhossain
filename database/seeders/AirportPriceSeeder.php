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
                'route_from' => 'Manchester (MAN)',
                'executive_saloon_price' => 100,
                'eight_seater_price' => 130,
            ],
            [
                'route_from' => 'East Midlands (EMA)',
                'executive_saloon_price' => 100,
                'eight_seater_price' => 130,
            ],
            [
                'route_from' => 'Leeds Bradford (LBA)',
                'executive_saloon_price' => 100,
                'eight_seater_price' => 130,
            ],
            [
                'route_from' => 'Liverpool John Lennon (LPL)',
                'executive_saloon_price' => 135,
                'eight_seater_price' => 195,
            ],
            [
                'route_from' => 'Birmingham (BHX)',
                'executive_saloon_price' => 145,
                'eight_seater_price' => 175,
            ],
            [
                'route_from' => 'Luton (LTN)',
                'executive_saloon_price' => 250,
                'eight_seater_price' => 290,
            ],
            [
                'route_from' => 'Stansted (STN)',
                'executive_saloon_price' => 280,
                'eight_seater_price' => 330,
            ],
            [
                'route_from' => 'Heathrow (LHR)',
                'executive_saloon_price' => 280,
                'eight_seater_price' => 330,
            ],
            [
                'route_from' => 'Gatwick (LGW)',
                'executive_saloon_price' => 350,
                'eight_seater_price' => 420,
            ],
        ];

        foreach ($prices as $price) {
            AirportPrice::create($price);
        }
    }
}
