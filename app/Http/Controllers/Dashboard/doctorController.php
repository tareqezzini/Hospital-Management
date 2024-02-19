<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\interfaces\Doctors\doctorInterface;
use Illuminate\Http\Request;

class doctorController extends Controller
{

    protected $doctors;
    public function __construct(doctorInterface $doctors)
    {
        $this->doctors = $doctors;
    }

    public function index()
    {
        return $this->doctors->index();
    }

    public function create()
    {
        return $this->doctors->create();
    }


    public function store(Request $request)
    {
        return $this->doctors->store($request);
    }
    public function edit($id)
    {
        return $this->doctors->edit($id);
    }
    public function update(Request $request)
    {
        return $this->doctors->update($request);
    }

    public function destroy(Request $request)
    {
        return $this->doctors->destroy($request);
    }

    public function update_password(Request $request)
    {
        return $this->doctors->update_password($request);
    }
    public function update_status(Request $request)
    {
        return $this->doctors->update_status($request);
    }
}
