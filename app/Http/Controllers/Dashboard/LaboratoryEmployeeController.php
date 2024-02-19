<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\dashboard\Laboratory_employee;
use App\Http\Controllers\Controller;
use App\Interfaces\LaboratoryEmployees\LaboratoryEmployeeInterface;
use Illuminate\Http\Request;

class LaboratoryEmployeeController extends Controller
{
    protected $laboratory_employee;
    public function __construct(LaboratoryEmployeeInterface $laboratory_employee)
    {
        $this->laboratory_employee = $laboratory_employee;
    }
    public function index()
    {
        return $this->laboratory_employee->index();
    }

    public function store(Request $request)
    {
        return $this->laboratory_employee->store($request);
    }


    public function update(Request $request, $id)
    {
        return $this->laboratory_employee->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->laboratory_employee->destroy($id);
    }
}
