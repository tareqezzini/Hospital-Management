<?php

namespace App\Http\Controllers\Dashboard_Ray_Employee;

use App\Http\Controllers\Controller;
use App\Interfaces\RayEmployee_dashboard\RayInvoicesInterface;
use Illuminate\Http\Request;

class invoicesRayController extends Controller
{
    protected $rays;
    public function __construct(RayInvoicesInterface $rays)
    {
        $this->rays = $rays;
    }


    public function index()
    {
        return $this->rays->index();
    }

    public function completed_invoices()
    {
        return $this->rays->completed_invoices();
    }

    public function edit($id)
    {
        return $this->rays->edit($id);
    }
    public function update(Request $request, $id)
    {
        return $this->rays->update($request, $id);
    }
    public function viewXray($id)
    {
        return $this->rays->viewXray($id);
    }
}
