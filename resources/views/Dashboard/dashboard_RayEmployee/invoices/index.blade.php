@extends('Dashboard.layouts.master')
@section('title')
    {{ trans('dash_xray_trans.diagnostics') }}
@stop
@section('css')


    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('dash_xray_trans.diagnostics') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ trans('dash_xray_trans.invoices') }}</span>
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ trans('dash_xray_trans.date_invoice') }}</th>
                                    <th>{{ trans('dash_xray_trans.patient_name') }}</th>
                                    <th>{{ trans('dash_xray_trans.patient_doctor') }}</th>
                                    <th>{{ trans('dash_xray_trans.desc') }}</th>
                                    <th>{{ trans('dash_xray_trans.status_invoice') }}</th>
                                    <th>{{ trans('dash_xray_trans.processes') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $invoice->created_at }}</td>
                                        <td>{{ $invoice->Patient->name }}</td>
                                        <td>{{ $invoice->doctor->name }}</td>
                                        <td>{{ $invoice->description }}</td>
                                        <td>
                                            @if ($invoice->case == 0)
                                                <span
                                                    class="badge badge-danger">{{ trans('dash_xray_trans.in_process') }}</span>
                                            @else
                                                <span
                                                    class="badge badge-success">{{ trans('dash_xray_trans.completed') }}</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown"
                                                    type="button">{{ trans('doctors.Processes') }}<i
                                                        class="fas fa-caret-down mr-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item"
                                                        href="{{ route('rayInvoices.edit', $invoice->id) }}"><i
                                                            class="text-primary fa fa-stethoscope"></i>&nbsp;&nbsp;
                                                        {{ trans('dash_xray_trans.add_diagnosis') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->

        <!-- /row -->
    </div>
    </div>
    </div>

@endsection
@section('js')

    <!--Internal  Notify js -->
    <script src="{{ URL::asset('Dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/plugins/notify/js/notifit-custom.js') }}"></script>

@endsection
