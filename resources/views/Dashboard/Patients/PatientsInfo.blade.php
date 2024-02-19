@extends('Dashboard.layouts.master')
@section('css')
@endsection
@section('title')
    {{ trans('patients_trans.patient_info') }}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('patients_trans.patients') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ trans('patients_trans.patient_info') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card" id="basic-alert">
                <div class="card-body">
                    <div class="text-wrap">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-1">
                                <div class=" tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs main-nav-line">
                                            <li class="nav-item"><a href="#infoPatient" class="nav-link active"
                                                    data-toggle="tab">{{ trans('patients_trans.patient_info') }}</a></li>
                                            <li class="nav-item"><a href="#invoices" class="nav-link"
                                                    data-toggle="tab">{{ trans('patients_trans.invoices') }}</a>
                                            </li>
                                            <li class="nav-item"><a href="#receipt" class="nav-link"
                                                    data-toggle="tab">{{ trans('patients_trans.payments') }}</a>
                                            </li>
                                            <li class="nav-item"><a href="#payment" class="nav-link"
                                                    data-toggle="tab">{{ trans('patients_trans.account_statement') }}</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body main-content-body-right border-top-0 border">
                                    <div class="tab-content">


                                        {{-- Strat Show Information Patient --}}

                                        <div class="tab-pane active" id="infoPatient">
                                            <br>
                                            <div class="table-responsive">
                                                <table class="table table-hover text-md-nowrap text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>{{ trans('patients_trans.patient_name') }}</th>
                                                            <th>{{ trans('patients_trans.phone') }}</th>
                                                            <th>{{ trans('patients_trans.email') }}</th>
                                                            <th>{{ trans('patients_trans.birth_day') }}</th>
                                                            <th>{{ trans('patients_trans.gender') }}</th>
                                                            <th>{{ trans('patients_trans.blood_type') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>{{ $Patient->name }}</td>
                                                            <td>{{ $Patient->Phone }}</td>
                                                            <td>{{ $Patient->email }}</td>
                                                            <td>{{ $Patient->Date_Birth }}</td>
                                                            <td>{{ $Patient->Gender == 1 ? trans('patients_trans.male') : trans('patients_trans.female') }}
                                                            </td>
                                                            <td>{{ $Patient->Blood_Group }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        {{-- End Show Information Patient --}}



                                        {{-- Start Invices Patient --}}

                                        <div class="tab-pane" id="invoices">

                                            <div class="table-responsive">
                                                <table class="table table-hover text-md-nowrap text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>{{ trans('patients_trans.service') }}</th>
                                                            <th>{{ trans('patients_trans.invoice_date') }}</th>
                                                            <th>{{ trans('patients_trans.total_tax') }}</th>
                                                            <th>{{ trans('patients_trans.invoice_type') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($invoices as $invoice)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $invoice->Service->name ?? $invoice->Group->name }}
                                                                </td>
                                                                <td>{{ $invoice->invoice_date }}</td>
                                                                <td>{{ $invoice->total_with_tax }}</td>
                                                                <td>{{ $invoice->type == 1 ? trans('patients_trans.cash') : trans('patients_trans.credit') }}
                                                                </td>
                                                            </tr>
                                                            <br>
                                                        @endforeach
                                                        <tr>
                                                            <th colspan="4" scope="row" class="alert alert-success">
                                                                {{ trans('patients_trans.total') }}
                                                            </th>
                                                            <td class="alert alert-primary">
                                                                {{ number_format($invoices->sum('total_with_tax'), 2) }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        {{-- End Invices Patient --}}



                                        {{-- Start Receipt Patient  --}}

                                        <div class="tab-pane" id="receipt">
                                            <div class="table-responsive">
                                                <table class="table table-hover text-md-nowrap text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>{{ trans('patients_trans.date_added') }}</th>
                                                            <th>{{ trans('patients_trans.amount') }}</th>
                                                            <th>{{ trans('patients_trans.statement') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($receipt_accounts as $receipt_account)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $receipt_account->date }}</td>
                                                                <td>{{ $receipt_account->amount }}</td>
                                                                <td>{{ $receipt_account->description }}</td>
                                                            </tr>
                                                            <br>
                                                        @endforeach
                                                        <tr>
                                                            <th scope="row" class="alert alert-success">
                                                                {{ trans('patients_trans.total') }}
                                                            </th>
                                                            <td colspan="4" class="alert alert-primary">
                                                                {{ number_format($receipt_accounts->sum('amount'), 2) }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        {{-- End Receipt Patient  --}}


                                        {{-- Start payment accounts Patient --}}
                                        <div class="tab-pane" id="payment">
                                            <div class="table-responsive">
                                                <table class="table table-hover text-md-nowrap text-center" id="example1">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>{{ trans('patients_trans.date_added') }}</th>
                                                            <th>{{ trans('patients_trans.desc') }}</th>
                                                            <th>{{ trans('patients_trans.debtor') }}</th>
                                                            <th>{{ trans('patients_trans.creditor') }}</th>
                                                            <th>{{ trans('patients_trans.final_balance') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($Patient_accounts as $Patient_account)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $Patient_account->date }}</td>
                                                                <td>
                                                                    @if ($Patient_account->invoice_id == true)
                                                                        {{ $Patient_account->invoice->Service->name ?? $Patient_account->invoice->Group->name }}
                                                                    @elseif($Patient_account->receipt_id == true)
                                                                        {{ $Patient_account->ReceiptAccount->description }}
                                                                    @elseif($Patient_account->Payment_id == true)
                                                                        {{ $Patient_account->PaymentAccount->description }}
                                                                    @endif

                                                                </td>
                                                                <td>{{ $Patient_account->Debit }}</td>
                                                                <td>{{ $Patient_account->credit }}</td>
                                                                <td></td>
                                                            </tr>
                                                            <br>
                                                        @endforeach
                                                        <tr>
                                                            <th colspan="3" scope="row" class="alert alert-success">
                                                            <th>{{ trans('patients_trans.total') }}</th>
                                                            </th>
                                                            <td class="alert alert-primary">
                                                                {{ number_format($Debit = $Patient_accounts->sum('Debit'), 2) }}
                                                            </td>
                                                            <td class="alert alert-primary">
                                                                {{ number_format($credit = $Patient_accounts->sum('credit'), 2) }}
                                                            </td>
                                                            <td class="alert alert-danger">
                                                                <span class="text-danger"> {{ $Debit - $credit }}
                                                                    {{ $Debit - $credit > 0 ? trans('patients_trans.creditor') : trans('patients_trans.debtor') }}</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                            <br>

                                        </div>

                                        {{-- End payment accounts Patient --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Prism Precode -->
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
@endsection
@section('js')
@endsection
