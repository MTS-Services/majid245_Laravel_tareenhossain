<?php

namespace App\Livewire\Frontend;

use App\Models\AirportPrice;
use App\Models\Faq;
use Livewire\Component;
use App\Services\GoogleReviewService;

class HomePage extends Component
{

    protected GoogleReviewService $googleReviewService;

    public function boot(GoogleReviewService $googleReviewService)
    {
        $this->googleReviewService = $googleReviewService;
    }
    public function render()
    {
        $reviews = $this->googleReviewService->getReviews();
        $airportPrices = AirportPrice::active()->get();
        $faqs = Faq::active()->get();
        // dd($reviews);
        return view('livewire.frontend.home_page', compact(['reviews', 'airportPrices', 'faqs']));
    }
}
