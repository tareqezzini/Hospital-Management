<?php

namespace App\Repository\LaboratoryEmployees;

use App\Interfaces\LaboratoryEmployees\LaboratoryEmployeeInterface;
use App\Models\dashboard\Laboratory_employee;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class LaboratoryEmployeeRepository implements LaboratoryEmployeeInterface
{
     public function index()
     {
          $Laboratory_employees = Laboratory_employee::all();
          return view('Dashboard.Laboratory_employees.index', compact('Laboratory_employees'));
     }

     public function store($request)
     {
          try {

               $laboratorie_employee = new Laboratory_employee();
               $laboratorie_employee->name = $request->name;
               $laboratorie_employee->email = $request->email;
               $laboratorie_employee->password = Hash::make($request->password);
               $laboratorie_employee->save();
               session()->flash('add');
               return back();
          } catch (\Exception $e) {
               return redirect()->back()->withErrors(['error' => $e->getMessage()]);
          }
     }

     public function update($request, $id)
     {
          $input = $request->all();

          if (!empty($input['password'])) {
               $input['password'] = Hash::make($input['password']);
          } else {
               $input = Arr::except($input, ['password']);
          }

          $ray_employee = Laboratory_employee::find($id);
          $ray_employee->update($input);

          session()->flash('edit');
          return redirect()->back();
     }

     public function destroy($id)
     {
          try {
               Laboratory_employee::destroy($id);
               session()->flash('delete');
               return redirect()->back();
          } catch (\Exception $e) {
               return redirect()->back()->withErrors(['error' => $e->getMessage()]);
          }
     }
}
