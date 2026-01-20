<?php

namespace App\Livewire\Frontend;

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
        // dd($reviews);
        return view('livewire.frontend.home_page', compact('reviews'));
    }
}
