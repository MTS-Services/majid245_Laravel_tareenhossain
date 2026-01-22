<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\FAQService;

class FaqController extends Controller
{
    private $masterFile = 'backend.admin.pages.faq';

    protected FAQService $service;

    public function __construct(FAQService $service)
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
            'data' => $data,
        ]);
    }

    public function view($id)
    {
        $data = $this->service->findData(decrypt($id));

        return view($this->masterFile, [
            'data' => $data,
        ]);
    }
}
