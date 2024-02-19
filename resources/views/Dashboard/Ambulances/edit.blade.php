@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('title')
    {{ trans('ambulance_trans.edit_car') }}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('ambulance_trans.ambulance') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/{{ trans('ambulance_trans.edit_car') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('Dashboard.messages_alert')
    <!-- row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('Ambulance.update', 'test') }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label>{{ trans('ambulance_trans.car_number') }}</label>
                                <input type="text" name="car_number" value="{{ $ambulance->car_number }}"
                                    class="form-control @error('car_number') is-invalid @enderror">
                                <input type="hidden" name="id" value="{{ $ambulance->id }}">
                            </div>

                            <div class="col">
                                <label>{{ trans('ambulance_trans.car_model') }}</label>
                                <input type="text" name="car_model" value="{{ $ambulance->car_model }}"
                                    class="form-control @error('car_model') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>{{ trans('ambulance_trans.manufacturing_year') }}</label>
                                <input type="number" name="car_year_made" value="{{ $ambulance->car_year_made }}"
                                    class="form-control @error('car_year_made') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>{{ trans('ambulance_trans.type_car') }}</label>
                                <select class="form-control" name="car_type">
                                    <option value="1" {{ $ambulance->car_type == 1 ? 'selected' : '' }}>
                                        {{ trans('ambulance_trans.owned') }}
                                    </option>
                                    <option value="2" {{ $ambulance->car_type == 2 ? 'selected' : '' }}>
                                        {{ trans('ambulance_trans.rent') }}</option>
                                </select>
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3">
                                <label>{{ trans('ambulance_trans.driver_name') }}</label>
                                <input type="text" name="driver_name" value="{{ $ambulance->driver_name }}"
                                    class="form-control @error('driver_name') is-invalid @enderror">
                            </div>

                            <div class="col-3">
                                <label>{{ trans('ambulance_trans.license_number') }}</label>
                                <input type="number" name="driver_license_number"
                                    value="{{ $ambulance->driver_license_number }}"
                                    class="form-control @error('driver_license_number') is-invalid @enderror">
                            </div>

                            <div class="col-6">
                                <label>{{ trans('ambulance_trans.phone') }}</label>
                                <input type="number" name="driver_phone" value="{{ $ambulance->driver_phone }}"
                                    class="form-control @error('driver_phone') is-invalid @enderror">
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>{{ trans('ambulance_trans.description') }}</label>
                                <textarea rows="5" cols="10" class="form-control" name="notes">{{ $ambulance->notes }}</textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="status">{{ trans('ambulance_trans.status') }}</label>
                                &nbsp;
                                <input name="is_available" {{ $ambulance->is_available == 1 ? 'checked' : '' }}
                                    value="1" type="checkbox" class="form-check-input" id="status">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">{{ trans('ambulance_trans.save') }}</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
