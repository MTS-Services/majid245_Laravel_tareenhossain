<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\GalleryImageService;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    private $masterFile = 'backend.admin.pages.gallery_image';

    protected GalleryImageService $service;

    public function __construct(GalleryImageService $service)
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
