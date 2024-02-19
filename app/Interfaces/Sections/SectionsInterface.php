<?php

namespace App\interfaces\Sections;


interface SectionsInterface
{
     public function index();
     public function addSections($request);
     public function editSections($request);
     public function deleteSections($request);
}
