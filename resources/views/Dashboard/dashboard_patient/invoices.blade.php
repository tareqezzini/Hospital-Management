@extends('Dashboard.layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('Dashboard/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('title')
    {{ trans('dash_patient_trans.patient_info') }}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> {{ trans('dash_patient_trans.patient_info') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ trans('dash_patient_trans.invoice') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('Dashboard.messages_alert')
    <!-- row -->
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table style="text-align: center" class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('dash_patient_trans.patient_name') }}</th>
                                    <th>{{ trans('dash_patient_trans.patient_doctor') }}</th>
                                    <th>{{ trans('dash_patient_trans.service_name') }}</th>
                                    <th>{{ trans('dash_patient_trans.total') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $invoice->invoice_date }}</td>
                                        <td>{{ $invoice->doctor->name }}</td>
                                        <td>{{ $invoice->service->name }}</td>
                                        <td>{{ $invoice->total_with_tax }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->

        @include('Dashboard.Sections.add')
        <!-- /row -->

    </div>
    <!-- row closed -->

    </div>
    <!-- Container closed -->
    </div>

    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
