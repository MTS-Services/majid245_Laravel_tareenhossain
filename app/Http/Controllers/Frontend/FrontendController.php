<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    protected $masterView = 'frontend.pages.home';

    public function index()
    {
        return view($this->masterView);
    }

    public function home()
    {
        return view($this->masterView);
    }
    public function gallery()
    {
        return view($this->masterView);
    }
    public function booking()
    {
        return view($this->masterView);
    }
    public function bookingSuccess()
    {
        return view($this->masterView);
    }
    public function success()
    {
        return view($this->masterView);
    }
}
