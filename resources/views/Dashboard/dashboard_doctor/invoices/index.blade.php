@extends('Dashboard.layouts.master')
@section('title')
    {{ trans('dash_doctor_trans.medical_diagnoses') }}
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('Dashboard/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('dashboard/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{ URL::asset('dashboard/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css') }}"
        rel="stylesheet">
    <link href="{{ URL::asset('dashboard/plugins/pickerjs/picker.min.css') }}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{ URL::asset('dashboard/plugins/spectrum-colorpicker/spectrum.css') }}" rel="stylesheet">
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('dash_doctor_trans.medical_diagnoses') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ trans('dash_doctor_trans.invoices') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('dashboard.messages_alert')
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('dash_doctor_trans.invoice_date') }}</th>
                                <th>{{ trans('dash_doctor_trans.service_name') }}</th>
                                <th>{{ trans('dash_doctor_trans.patient_name') }}</th>
                                <th>{{ trans('dash_doctor_trans.service_price') }}</th>
                                <th>{{ trans('dash_doctor_trans.discount') }}</th>
                                <th>{{ trans('dash_doctor_trans.tax_rate') }}</th>
                                <th>{{ trans('dash_doctor_trans.tax_value') }}</th>
                                <th>{{ trans('dash_doctor_trans.total_tax') }}</th>
                                <th>{{ trans('dash_doctor_trans.invoice_status') }}</th>
                                <th>{{ trans('dash_doctor_trans.process') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $invoice->invoice_date }}</td>
                                    <td>{{ $invoice->Service->name ?? $invoice->Group->name }}</td>
                                    <td><a
                                            href="{{ route('patient_details', $invoice->patient_id) }}">{{ $invoice->Patient->name }}</a>
                                    </td>
                                    <td>{{ number_format($invoice->price, 2) }}</td>
                                    <td>{{ number_format($invoice->discount_value, 2) }}</td>
                                    <td>{{ $invoice->tax_rate }}%</td>
                                    <td>{{ number_format($invoice->tax_value, 2) }}</td>
                                    <td>{{ number_format($invoice->total_with_tax, 2) }}</td>
                                    <td>
                                        @if ($invoice->invoice_status == 1)
                                            <span
                                                class="badge badge-danger">{{ trans('dash_doctor_trans.in_process') }}</span>
                                        @elseif($invoice->invoice_status == 2)
                                            <span
                                                class="badge badge-warning">{{ trans('dash_doctor_trans.review') }}</span>
                                        @else
                                            <span
                                                class="badge badge-success">{{ trans('dash_doctor_trans.completed') }}</span>
                                        @endif
                                    </td>

                                    <td>

                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true"
                                                class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown"
                                                type="button">{{ trans('doctors.Processes') }}<i
                                                    class="fas fa-caret-down mr-1"></i></button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#add_diagnosis{{ $invoice->id }}"><i
                                                        class="text-primary fa fa-stethoscope"></i>&nbsp;&nbsp;
                                                    {{ trans('dash_doctor_trans.add_diagnosis') }}
                                                </a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#add_review{{ $invoice->id }}"><i
                                                        class="text-warning far fa-file-alt"></i>&nbsp;&nbsp;{{ trans('dash_doctor_trans.add_review') }}
                                                </a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#xray_conversion{{ $invoice->id }}"><i
                                                        class="text-primary fas fa-x-ray"></i>&nbsp;&nbsp;
                                                    {{ trans('dash_doctor_trans.conversion_x-rays') }}
                                                </a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#laboratorie_conversion{{ $invoice->id }}"><i
                                                        class="text-warning fas fa-syringe"></i>&nbsp;&nbsp;
                                                    {{ trans('dash_doctor_trans.transfer_laboratory') }}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @include('Dashboard.dashboard_doctor.invoices.add_diagnosis')
                                @include('Dashboard.dashboard_doctor.invoices.add_review')
                                @include('Dashboard.dashboard_doctor.invoices.xray_conversion')
                                @include('Dashboard.dashboard_doctor.invoices.Laboratorie_conversion')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('dashboard.Sections.add')

    </div>
    </div>

    </div>
@endsection
@section('js')
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>

    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('dashboard/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('dashboard/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{ URL::asset('dashboard/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{ URL::asset('dashboard/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{ URL::asset('dashboard/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>
    <!-- Ionicons js -->
    <script src="{{ URL::asset('dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{ URL::asset('dashboard/plugins/pickerjs/picker.min.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('dashboard/js/form-elements.js') }}"></script>


    <script>
        $('#review_date').datetimepicker({

        })
    </script>
@endsection
