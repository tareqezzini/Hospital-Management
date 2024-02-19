<?php

namespace App\Livewire;

use App\Events\createInvoice;
use App\Events\myEvent;
use App\Models\dashboard\doctor;
use App\Models\dashboard\FundAccount;
use App\Models\Dashboard\Invoice;
use App\Models\dashboard\Patient;
use App\Models\dashboard\PatientAccount;
use App\Models\dashboard\Service;
use App\Models\dashboard\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class SingleInvoices extends Component
{

    public $InvoiceSaved, $InvoiceUpdated;
    public $show_table = true;
    public $tax_rate = 17;
    public $userName, $patient;
    public $updateMode = false;
    public $price, $discount_value = 0, $patient_id, $doctor_id, $section_id, $type, $Service_id, $single_invoice_id, $catchError;


    public function mount()
    {
        $this->userName = auth()->user()->name;
        // $this->patient = Patient::where('id', $this->patient_id);
    }




    public function render()
    {
        return view('livewire.SingleInvoices.single-invoices', [
            'single_invoices' => Invoice::where('invoice_type', 1)->get(),
            'Patients' => Patient::all(),
            'Doctors' => Doctor::all(),
            'Services' => Service::all(),
            'subtotal' => $Total_after_discount = ((is_numeric($this->price) ? $this->price : 0)) - ((is_numeric($this->discount_value) ? $this->discount_value : 0)),
            'tax_value' => $Total_after_discount * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100)
        ]);
    }

    public function show_form_add()
    {
        $this->show_table = false;
    }

    public function print($id)
    {
        $single_invoice = Invoice::findorfail($id);
        return Redirect::route('Print_single_invoices', [
            'invoice_date' => $single_invoice->invoice_date,
            'doctor_id' => $single_invoice->Doctor->name,
            'section_id' => $single_invoice->Section->name,
            'Service_id' => $single_invoice->Service->name,
            'type' => $single_invoice->type,
            'price' => $single_invoice->price,
            'discount_value' => $single_invoice->discount_value,
            'tax_rate' => $single_invoice->tax_rate,
            'total_with_tax' => $single_invoice->total_with_tax,
        ]);
    }

    public function get_section()
    {
        $doctor_id = Doctor::with('section')->where('id', $this->doctor_id)->first();
        $this->section_id = $doctor_id->section->name;
    }

    public function get_price()
    {
        $this->price = Service::where('id', $this->Service_id)->first()->price;
    }


    public function edit($id)
    {

        $this->show_table = false;
        $this->updateMode = true;
        $single_invoice = Invoice::findOrFail($id);
        $this->single_invoice_id = $single_invoice->id;
        $this->patient_id = $single_invoice->patient_id;
        $this->doctor_id = $single_invoice->doctor_id;
        $this->section_id = DB::table('section_translations')->where('id', $single_invoice->section_id)->first()->name;
        $this->Service_id = $single_invoice->Service_id;
        $this->price = $single_invoice->price;
        $this->discount_value = $single_invoice->discount_value;
        $this->type = $single_invoice->type;
    }



    public function store()
    {
        // Cash
        if ($this->type == 1) {



            // edit Invoices
            if ($this->updateMode) {

                $single_invoices = Invoice::findorfail($this->single_invoice_id);
                $single_invoices->invoice_type = 1;
                $single_invoices->invoice_date = date('Y-m-d');
                $single_invoices->patient_id = $this->patient_id;
                $single_invoices->doctor_id = $this->doctor_id;
                $single_invoices->section_id = DB::table('section_translations')->where('name', $this->section_id)->first()->section_id;
                $single_invoices->Service_id = $this->Service_id;
                $single_invoices->price = $this->price;
                $single_invoices->discount_value = $this->discount_value;
                $single_invoices->tax_rate = $this->tax_rate;
                $single_invoices->tax_value = ($this->price - $this->discount_value) * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100);
                $single_invoices->total_with_tax = $single_invoices->price -  $single_invoices->discount_value + $single_invoices->tax_value;
                $single_invoices->type = $this->type;
                $single_invoices->save();

                $fund_accounts = FundAccount::where('invoice_id', $this->single_invoice_id)->first();
                $fund_accounts->date = date('Y-m-d');
                $fund_accounts->invoice_id = $single_invoices->id;
                $fund_accounts->Debit = $single_invoices->total_with_tax;
                $fund_accounts->credit = 0.00;
                $fund_accounts->save();
                $this->InvoiceUpdated = true;
                $this->show_table = true;
            }

            // Add invoices
            else {

                $single_invoices = new Invoice();
                $single_invoices->invoice_type = 1;
                $single_invoices->invoice_date = date('Y-m-d');
                $single_invoices->patient_id = $this->patient_id;
                $single_invoices->doctor_id = $this->doctor_id;
                $single_invoices->section_id = DB::table('section_translations')->where('name', $this->section_id)->first()->section_id;
                $single_invoices->Service_id = $this->Service_id;
                $single_invoices->price = $this->price;
                $single_invoices->discount_value = $this->discount_value;
                $single_invoices->tax_rate = $this->tax_rate;
                $single_invoices->tax_value = ($this->price - $this->discount_value) * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100);
                $single_invoices->total_with_tax = $single_invoices->price -  $single_invoices->discount_value + $single_invoices->tax_value;
                $single_invoices->type = $this->type;
                $single_invoices->invoice_status = 1;
                $single_invoices->save();

                $fund_accounts = new FundAccount();
                $fund_accounts->date = date('Y-m-d');
                $fund_accounts->invoice_id = $single_invoices->id;
                $fund_accounts->Debit = $single_invoices->total_with_tax;
                $fund_accounts->credit = 0.00;
                $fund_accounts->save();
                $this->InvoiceSaved = true;
                $this->show_table = true;


                $notifications = new Notification();
                $notifications->user_id = $this->doctor_id;
                $patient = Patient::find($this->patient_id);
                $notifications->message = "تشخيص جديد : " . $patient->name;
                $notifications->save();
                $data = [
                    'patient' => $this->patient_id,
                    'invoice_id' => $single_invoices->id,
                    'doctor_id' => $this->doctor_id,
                ];
                event(new createInvoice($data));
            }
        }


        //------------------------------------------------------------------------

        // Credit
        else {


            try {

                // Edit
                if ($this->updateMode) {
                    try {

                        DB::beginTransaction();
                        $single_invoices = Invoice::findorfail($this->single_invoice_id);
                        $single_invoices->invoice_type = 1;
                        $single_invoices->invoice_date = date('Y-m-d');
                        $single_invoices->patient_id = $this->patient_id;
                        $single_invoices->doctor_id = $this->doctor_id;
                        $single_invoices->section_id = DB::table('section_translations')->where('name', $this->section_id)->first()->section_id;
                        $single_invoices->Service_id = $this->Service_id;
                        $single_invoices->price = $this->price;
                        $single_invoices->discount_value = $this->discount_value;
                        $single_invoices->tax_rate = $this->tax_rate;
                        $single_invoices->tax_value = ($this->price - $this->discount_value) * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100);
                        $single_invoices->total_with_tax = $single_invoices->price -  $single_invoices->discount_value + $single_invoices->tax_value;
                        $single_invoices->type = $this->type;
                        $single_invoices->save();


                        $patient_accounts = PatientAccount::where('invoice_id', $this->single_invoice_id)->first();
                        $patient_accounts->date = date('Y-m-d');
                        $patient_accounts->invoice_id = $single_invoices->id;
                        $patient_accounts->patient_id = $single_invoices->patient_id;
                        $patient_accounts->Debit = $single_invoices->total_with_tax;
                        $patient_accounts->credit = 0.00;
                        $patient_accounts->save();
                        $this->InvoiceUpdated = true;
                        $this->show_table = true;
                        DB::commit();
                    } catch (\Exception $e) {
                        DB::rollback();
                        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
                    }
                }

                // Add 
                else {
                    try {
                        DB::beginTransaction();
                        $single_invoices = new Invoice();
                        $single_invoices->invoice_type = 1;
                        $single_invoices->invoice_date = date('Y-m-d');
                        $single_invoices->patient_id = $this->patient_id;
                        $single_invoices->doctor_id = $this->doctor_id;
                        $single_invoices->section_id = DB::table('section_translations')->where('name', $this->section_id)->first()->section_id;
                        $single_invoices->Service_id = $this->Service_id;
                        $single_invoices->price = $this->price;
                        $single_invoices->discount_value = $this->discount_value;
                        $single_invoices->tax_rate = $this->tax_rate;
                        $single_invoices->tax_value = ($this->price - $this->discount_value) * ((is_numeric($this->tax_rate) ? $this->tax_rate : 0) / 100);
                        $single_invoices->total_with_tax = $single_invoices->price -  $single_invoices->discount_value + $single_invoices->tax_value;
                        $single_invoices->type = $this->type;
                        $single_invoices->invoice_status = 1;
                        $single_invoices->save();

                        $patient_accounts = new PatientAccount();
                        $patient_accounts->date = date('Y-m-d');
                        $patient_accounts->invoice_id = $single_invoices->id;
                        $patient_accounts->patient_id = $single_invoices->patient_id;
                        $patient_accounts->Debit = $single_invoices->total_with_tax;
                        $patient_accounts->credit = 0.00;
                        $patient_accounts->save();
                        $this->InvoiceSaved = true;
                        $this->show_table = true;

                        DB::commit();
                    } catch (\Exception $e) {
                        DB::rollback();
                        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
                    }
                }
            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        }
    }


    public function delete($id)
    {

        $this->single_invoice_id = $id;
    }

    public function destroy()
    {
        Invoice::destroy($this->single_invoice_id);
        return redirect()->to('/single_invoices');
    }
}
