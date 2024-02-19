<?php


namespace App\Repository\Sections;


use App\interfaces\Sections\SectionsInterface;
use App\Models\dashboard\Section;

class SectionsRepository implements SectionsInterface
{
     public function index()
     {
          $sections = Section::all();
          return view('dashboard.sections.index', compact('sections'));
     }

     public function addSections($request)
     {
          Section::create([
               'name' => $request->input('name'),
          ]);

          session()->flash('add');
          return redirect()->route('sections.index');
     }


     public function editSections($request)
     {
          $section = Section::findOrFail($request->id);

          $section->update([
               'name' => $request->input('name')
          ]);

          session()->flash('update');
          return redirect()->route('sections.index');
     }

     // Delete Sections
     public function deleteSections($request)
     {
          $section = Section::findOrFail($request->id);
          $section->delete();
          session()->flash('update');
          return redirect()->route('sections.index');
     }
}
