@extends('Dashboard.layouts.master')
@section('css')
    <!--  Owl-carousel css-->
    <link href="{{ URL::asset('Dashboard/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{ URL::asset('Dashboard/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
@endsection
@section('title')
    {{ trans('dash_doctor_trans.dash_doctor') }}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">{{ trans('dash_doctor_trans.dash_doctor') }}</h2><br>
                <p class="mg-b-0">{{ trans('dash_doctor_trans.welcome') }} {{ auth()->user()->name }}</p>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-18 text-white">
                            {{ trans('dash_doctor_trans.nmb_diagnoses') }}
                        </h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">
                                    {{ App\Models\dashboard\Invoice::where('doctor_id', auth()->user()->id)->count() }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h3 class="mb-3 tx-18 text-white">
                            {{ trans('dash_doctor_trans.nmb_diagnoses_completed') }}
                        </h3>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">
                                    {{ App\Models\dashboard\Invoice::where('doctor_id', auth()->user()->id)->where('invoice_status', 3)->count() }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-18 text-white">{{ trans('dash_doctor_trans.appointments') }}</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">
                                    {{ App\Models\dashboard\Invoice::where('doctor_id', auth()->user()->id)->where('invoice_status', 2)->count() }}
                                </h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Container closed -->
@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('Dashboard/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Moment js -->
    <script src="{{ URL::asset('Dashboard/plugins/raphael/raphael.min.js') }}"></script>
    <!--Internal  Flot js-->
    <script src="{{ URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/js/chart.flot.sampledata.js') }}"></script>
    <!--Internal Apexchart js-->
    <script src="{{ URL::asset('Dashboard/js/apexcharts.js') }}"></script>
    <!-- Internal Map -->
    <script src="{{ URL::asset('Dashboard/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/js/modal-popup.js') }}"></script>
    <!--Internal  index js -->
    <script src="{{ URL::asset('Dashboard/js/index.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/js/jquery.vmap.sampledata.js') }}"></script>
@endsection
