<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\interfaces\Sections\SectionsInterface;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $sections;

    public function __construct(SectionsInterface $sections)
    {
        $this->sections = $sections;
    }


    public function index()
    {
        return $this->sections->index();
    }


    public function store(Request $request)
    {
        return $this->sections->addSections($request);
    }


    public function update(Request $request)
    {
        return $this->sections->editSections($request);
    }

    public function destroy(Request $request)
    {
        return $this->sections->deleteSections($request);
    }
}