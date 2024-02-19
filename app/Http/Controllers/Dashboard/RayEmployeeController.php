<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\dashboard\RayEmployee;
use App\Http\Controllers\Controller;
use App\interfaces\RayEmployee\RayEmployeeInterface;
use Illuminate\Http\Request;

class RayEmployeeController extends Controller
{
    private $employee;

    public function __construct(RayEmployeeInterface $employee)
    {
        $this->employee = $employee;
    }
    public function index()
    {
        return $this->employee->index();
    }



    public function store(Request $request)
    {
        return $this->employee->store($request);
    }



    public function update(Request $request, $id)
    {
        return $this->employee->update($request, $id);
    }


    public function destroy($id)
    {
        return $this->employee->destroy($id);
    }
}
