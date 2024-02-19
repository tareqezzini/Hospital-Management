@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{ URL::asset('dashboard/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('title')
    {{ trans('patients_trans.edit_patient') }}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('patients_trans.patients') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/{{ trans('patients_trans.edit_patient') }}</span>
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
                    <form action="{{ route('Patients.update', 'test') }}" method="post" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-3">
                                <label>{{ trans('patients_trans.patient_name') }}</label>
                                <input type="text" name="name" value="{{ $Patient->name }}"
                                    class="form-control @error('name') is-invalid @enderror ">
                                <input type="hidden" name="id" value="{{ $Patient->id }}">
                            </div>

                            <div class="col">
                                <label>{{ trans('patients_trans.email') }}</label>
                                <input type="email" name="email" value="{{ $Patient->email }}"
                                    class="form-control @error('email') is-invalid @enderror" required>
                            </div>

                            <div class="col">
                                <label>{{ trans('patients_trans.birth_day') }}</label>
                                <input class="form-control fc-datepicker" value="{{ $Patient->Date_Birth }}"
                                    name="Date_Birth" type="text" required>
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3">
                                <label>{{ trans('patients_trans.phone') }}</label>
                                <input type="number" name="Phone" value="{{ $Patient->Phone }}"
                                    class="form-control @error('Phone') is-invalid @enderror" required>
                            </div>

                            <div class="col">
                                <label>{{ trans('patients_trans.gender') }}</label>
                                <select class="form-control" name="Gender" required>
                                    <option value="1" {{ $Patient->Gender == 1 ? 'selected' : '' }}>
                                        {{ trans('patients_trans.male') }}</option>
                                    <option value="2" {{ $Patient->Gender == 2 ? 'selected' : '' }}>
                                        {{ trans('patients_trans.female') }}</option>
                                </select>
                            </div>

                            <div class="col">
                                <label>{{ trans('patients_trans.blood_type') }}</label>
                                <select class="form-control" name="Blood_Group" required>
                                    <option value="O-"{{ $Patient->Blood_Group == 'O-' ? 'selected' : '' }}>O-</option>
                                    <option value="O+" {{ $Patient->Blood_Group == 'O+' ? 'selected' : '' }}>O+
                                    </option>
                                    <option value="A+" {{ $Patient->Blood_Group == 'A+' ? 'selected' : '' }}>A+
                                    </option>
                                    <option value="A-" {{ $Patient->Blood_Group == 'A-' ? 'selected' : '' }}>A-
                                    </option>
                                    <option value="B+" {{ $Patient->Blood_Group == 'B+' ? 'selected' : '' }}>B+
                                    </option>
                                    <option value="B-" {{ $Patient->Blood_Group == 'B-' ? 'selected' : '' }}>B-
                                    </option>
                                    <option value="AB+"{{ $Patient->Blood_Group == 'AB+' ? 'selected' : '' }}>AB+
                                    </option>
                                    <option value="AB-"{{ $Patient->Blood_Group == 'AB-' ? 'selected' : '' }}>AB-
                                    </option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>{{ trans('patients_trans.address') }}</label>
                                <textarea rows="5" cols="10" class="form-control" name="Address">{{ $Patient->Address }}</textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">{{ trans('patients_trans.save') }}</button>
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
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    </script>
    <script src="{{ URL::asset('dashboard/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
