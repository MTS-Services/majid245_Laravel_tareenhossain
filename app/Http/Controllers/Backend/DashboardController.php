<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\AirportPriceService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $masterFile = 'backend.admin.pages.dashboard';


    public function index()
    {
        return view($this->masterFile);
    }
}
