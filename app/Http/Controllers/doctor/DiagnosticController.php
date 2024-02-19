<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\DiagnosticsInterface;
use Illuminate\Http\Request;

class DiagnosticController extends Controller
{
    public $diagnostic;
    public function __construct(DiagnosticsInterface $diagnostic)
    {
        $this->diagnostic = $diagnostic;
    }


    public function store(Request $request)
    {
        return $this->diagnostic->store($request);
    }


    public function show($id)
    {
        return $this->diagnostic->show($id);
    }


    public function addReview(Request $request)
    {
        return $this->diagnostic->addReview($request);
    }
}
