<?php


namespace App\Repository\doctor_dashboard;

use App\Interfaces\doctor_dashboard\InvoicesInterface;
use App\Models\Dashboard\Invoice;
use App\Models\dashboard\Laboratorie;
use App\Models\dashboard\Ray;
use Illuminate\Support\Facades\Auth;

class InvoicesRepository implements InvoicesInterface
{

     public function index()
     {
          $invoices = Invoice::where('doctor_id',  Auth::user()->id)->where('invoice_status', 1)->get();
          return view('Dashboard.dashboard_doctor.invoices.index', compact('invoices'));
     }


     public function reviewInvoices()
     {
          $invoices = Invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 2)->get();
          return view('Dashboard.dashboard_doctor.invoices.review_invoices', compact('invoices'));
     }


     public function completedInvoices()

     {
          $invoices = Invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 3)->get();
          return view('Dashboard.dashboard_doctor.invoices.completed_invoices', compact('invoices'));
     }

     public function show($id)
     {
          $rays = Ray::findOrFail($id);
          return view('Dashboard.dashboard_doctor.invoices.view_rays', compact('rays'));
     }


     public function showLaboratorie($id)
     {
          $laboratories = Laboratorie::findorFail($id);
          if ($laboratories->doctor_id != auth()->user()->id) {
               //abort(404);
               return redirect()->route('404');
          }
          return view('Dashboard.dashboard_doctor.invoices.view_laboratories', compact('laboratories'));
     }
}
