<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\GalleryCategoryService;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    private $masterFile = 'backend.admin.pages.gallery_category';

    protected GalleryCategoryService $service;

    public function __construct(GalleryCategoryService $service)
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
