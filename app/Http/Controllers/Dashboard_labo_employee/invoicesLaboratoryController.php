<?php

namespace App\Http\Controllers\Dashboard_labo_employee;

use App\Http\Controllers\Controller;
use App\Interfaces\LaboEmployee_dashboard\LaboInvoicesInterface;
use Illuminate\Http\Request;

class invoicesLaboratoryController extends Controller
{
    protected $invoices;
    public function __construct(LaboInvoicesInterface $invoices)
    {
        $this->invoices = $invoices;
    }
    public function index()
    {
        return $this->invoices->index();
    }


    public function edit($id)
    {
        return $this->invoices->edit($id);
    }
    public function update(Request $request, $id)
    {
        return $this->invoices->update($request, $id);
    }

    public function viewTestLabo($id)
    {
        return $this->invoices->view_laboratories($id);
    }
    public function completed_invoices()
    {
        return $this->invoices->completed_invoices();
    }
}
