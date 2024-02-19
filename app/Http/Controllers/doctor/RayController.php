<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\RaysInterface;
use Illuminate\Http\Request;

class RayController extends Controller
{
    protected $ray;
    public function __construct(RaysInterface $ray)
    {
        $this->ray = $ray;
    }

    public function store(Request $request)
    {
        return $this->ray->store($request);
    }


    public function update(Request $request, $id)
    {
        return $this->ray->update($request, $id);
    }


    public function destroy($id)
    {
        return $this->ray->destroy($id);
    }
}