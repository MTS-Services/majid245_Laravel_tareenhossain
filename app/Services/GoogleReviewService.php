<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleReviewService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getReviews()
    {
        $response = Http::get(
            'https://maps.googleapis.com/maps/api/place/details/json',
            [
                'place_id' => config('services.google.place_id'),
                'fields'   => 'reviews,rating,user_ratings_total',
                'key'      => config('services.google.api_key'),
            ]
        );
        // dd($response->json());

        return $response->json('result.reviews') ?? [];
    }
}
