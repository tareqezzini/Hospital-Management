<?php


namespace App\Repository\RayEmployee_dashboard;

use App\Interfaces\RayEmployee_dashboard\RayInvoicesInterface;
use App\Models\dashboard\Ray;
use App\Traits\UploadTrait;


class RayInvoicesRepository implements RayInvoicesInterface
{
     use UploadTrait;

     public function index()
     {
          $invoices = Ray::where('case', 0)->get();
          return view('Dashboard.dashboard_RayEmployee.invoices.index', compact('invoices'));
     }

     public function completed_invoices()
     {
          $invoices = Ray::where('case', 1)->where('employee_id', auth()->user()->id)->get();
          return view('Dashboard.dashboard_RayEmployee.invoices.completed_invoices', compact('invoices'));
     }

     public function edit($id)
     {
          $invoice = Ray::findOrFail($id);
          return view('Dashboard.dashboard_RayEmployee.invoices.add_diagnosis', compact('invoice'));
     }

     public function update($request, $id)
     {
          $invoice = Ray::findOrFail($id);

          $invoice->update([
               'employee_id' => auth()->user()->id,
               'description_employee' => $request->description_employee,
               'case' => 1,
          ]);

          //Upload img
          $this->uploadImage($request, 'photo', 'Rays', 'upload_image', auth()->user()->id, 'App\Models\dashboard\Ray');

          session()->flash('edit');
          return redirect()->route('rayInvoices.index');
     }


     public function viewXray($id)
     {
          $rays = Ray::findOrFail($id);
          if ($rays->employee_id != auth()->user()->id) {
               abort(404);
          }
          return view('Dashboard.dashboard_RayEmployee.invoices.patient_Xray', compact('rays'));
     }
}
