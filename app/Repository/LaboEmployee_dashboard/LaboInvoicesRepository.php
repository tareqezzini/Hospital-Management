<?php

namespace App\Repository\LaboEmployee_dashboard;

use App\Interfaces\LaboEmployee_dashboard\LaboInvoicesInterface;
use App\Models\dashboard\Laboratorie;
use App\Traits\UploadTrait;

class LaboInvoicesRepository implements LaboInvoicesInterface
{
     use UploadTrait;
     public function index()
     {
          $invoices = Laboratorie::where('case', 0)->get();
          return view('Dashboard.dashboard_LaboEmployee.invoices.index', compact('invoices'));
     }

     public function completed_invoices()
     {
          $invoices = Laboratorie::where('case', 1)->where('employee_id', auth()->user()->id)->get();
          return view('Dashboard.dashboard_LaboEmployee.invoices.completed_invoices', compact('invoices'));
     }

     public function edit($id)
     {
          $invoice = Laboratorie::findorFail($id);
          return view('Dashboard.dashboard_LaboEmployee.invoices.add_diagnosis', compact('invoice'));
     }

     public function update($request, $id)
     {
          $invoice = Laboratorie::findorFail($id);

          $invoice->update([
               'employee_id' => auth()->user()->id,
               'description_employee' => $request->description_employee,
               'case' => 1,
          ]);

          //Upload img
          $this->uploadImage($request, 'photo', 'laboratories', 'upload_image', $invoice->id, 'App\Models\dashboard\Laboratorie');

          session()->flash('edit');
          return redirect()->route('laboInvoices.index');
     }

     public function view_laboratories($id)
     {
          $laboratorie = Laboratorie::findorFail($id);
          if ($laboratorie->employee_id != auth()->user()->id) {
               //abort(404);
               return redirect()->route('404');
          }
          return view('Dashboard.dashboard_LaboEmployee.invoices.patient_details', compact('laboratorie'));
     }
}
