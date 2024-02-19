<?php

namespace App\Interfaces\LaboEmployee_dashboard;

interface LaboInvoicesInterface
{
     public function index();
     public function edit($id);
     public function view_laboratories($id);
     public function completed_invoices();
     public function update($request, $id);
}
