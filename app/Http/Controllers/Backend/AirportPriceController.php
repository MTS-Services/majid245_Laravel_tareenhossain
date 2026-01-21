<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\AirportPriceService;
use Illuminate\Http\Request;

class AirportPriceController extends Controller
{
    private $masterFile = 'backend.admin.pages.airport_price'; 
    
    protected AirportPriceService $service;

    public function __construct(AirportPriceService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        return view($this->masterFile);
    }
    public function create()
    {
        return view($this->masterFile);
    }
    public function edit($id)
    {
        $data = $this->service->findData(decrypt($id));
        return view($this->masterFile, [
            'data' => $data
        ]);
    }
    public function view($id)
    {
        $data = $this->service->findData(decrypt($id));
        return view($this->masterFile, [
            'data' => $data
        ]);
    }

}
