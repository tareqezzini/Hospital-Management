<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\InvoicesInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    private $invoices;
    public function __construct(InvoicesInterface $invoices)
    {
        $this->invoices = $invoices;
    }

    public function index()
    {
        return $this->invoices->index();
    }

    public function reviewInvoices()
    {
        return $this->invoices->reviewInvoices();
    }
    public function completedInvoices()
    {
        return $this->invoices->completedInvoices();
    }



    public function show($id)
    {
        return $this->invoices->show($id);
    }


    public function showLaboratorie($id)
    {
        return $this->invoices->showLaboratorie($id);
    }
}
