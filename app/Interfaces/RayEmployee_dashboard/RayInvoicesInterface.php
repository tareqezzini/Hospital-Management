<?php

namespace App\Interfaces\RayEmployee_dashboard;

interface RayInvoicesInterface
{
     public function index();
     public function edit($id);
     public function update($request, $id);

     public function completed_invoices();
     public function viewXray($id);
}
