<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\AirportPrice;
use App\Models\Faq;
use App\Services\GoogleReviewService;

class HomePage extends Component
{
    public array $reviews = [];

    public function boot(GoogleReviewService $googleReviewService)
    {
        $this->reviews = $googleReviewService->getReviews();
    }

    public function render()
    {
        return view('livewire.frontend.home_page', [
            'reviews' => $this->reviews,
            'airportPrices' => AirportPrice::active()->get(),
            'faqs' => Faq::active()->get(),
        ]);
    }
}
