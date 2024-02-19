@extends('Dashboard.layouts.master2')
@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{ URL::asset('Dashboard/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}"
        rel="stylesheet">
    <style>
        .panel {
            display: none;
        }
    </style>
@endsection
@section('title')
    Login
@endsection
@section('content')
    <!-- Page -->
    <div class="page">
        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- The content half -->
                <div class="col-md-12">
                    <div class="login d-flex align-items-center justify-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-xl-6 mx-auto">
                                    <div class="card-sigin">
                                        <div class="mb-4 d-flex"> <a href=""><img
                                                    src="{{ URL::asset('Dashboard/img/brand/logo.png') }}"
                                                    class="sign-favicon ht-40" alt="logo"></a>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="main-signup-header">
                                                <h2>{{ trans('dashboard/login_trans.Welcome') }}</h2>
                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlSelect1">{{ trans('dashboard/login_trans.Select_Enter') }}</label>
                                                    <select class="form-control" id="sectionChooser">
                                                        <option value="" selected disabled>
                                                            {{ trans('dashboard/login_trans.Choose_list') }}</option>
                                                        <option value="patient">{{ trans('dashboard/login_trans.user') }}
                                                        </option>
                                                        <option value="admin">{{ trans('dashboard/login_trans.admin') }}
                                                        <option value="doctor">{{ trans('dashboard/login_trans.doctor') }}
                                                        <option value="ray_employee">
                                                            {{ trans('dashboard/login_trans.ray_employee') }}</option>
                                                        </option>
                                                        <option value="Labo_employee">
                                                            {{ trans('dashboard/login_trans.labo_employee') }}</option>
                                                        </option>
                                                    </select>
                                                </div>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                {{-- Patient login --}}
                                                <div id="patient" class="panel">
                                                    <form method="POST" action="{{ route('login.patient') }}">
                                                        @csrf
                                                        <h2>Patient Login</h2>
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control"
                                                                placeholder="Enter your email" type="email" name="email"
                                                                :value="old('email')" required autofocus
                                                                autocomplete="username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control"
                                                                placeholder="Enter your password" type="password"
                                                                name="password" required autocomplete="current-password">
                                                        </div><button class="btn btn-main-primary btn-block">Sign
                                                            In</button>

                                                    </form>
                                                    <div class="main-signin-footer mt-5">
                                                        <p><a href="">Forgot password?</a></p>

                                                    </div>
                                                </div>
                                                {{-- Admin Login Form  --}}
                                                <div id="admin" class="panel">
                                                    <form method="POST" action="{{ route('admin.login') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control"
                                                                placeholder="Enter your email" type="email" name="email"
                                                                :value="old('email')" required autofocus
                                                                autocomplete="username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control"
                                                                placeholder="Enter your password" type="password"
                                                                name="password" required autocomplete="current-password">
                                                        </div><button class="btn btn-main-primary btn-block">Sign
                                                            In</button>

                                                    </form>
                                                    <div class="main-signin-footer mt-5">
                                                        <p><a href="">Forgot password?</a></p>

                                                    </div>
                                                </div>
                                                {{-- Doctor Login Form  --}}
                                                <div id="doctor" class="panel">
                                                    <form method="POST" action="{{ route('doctor.login') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control"
                                                                placeholder="Enter your email" type="email" name="email"
                                                                :value="old('email')" required autofocus
                                                                autocomplete="username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control"
                                                                placeholder="Enter your password" type="password"
                                                                name="password" required autocomplete="current-password">
                                                        </div><button class="btn btn-main-primary btn-block">Sign
                                                            In</button>

                                                    </form>
                                                    <div class="main-signin-footer mt-5">
                                                        <p><a href="">Forgot password?</a></p>

                                                    </div>
                                                </div>
                                                {{-- X-Ray Employee Login Form  --}}
                                                <div class="panel" id="ray_employee">
                                                    <form method="POST" action="{{ route('login.ray_employee') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control"
                                                                placeholder="Enter your email" type="email" name="email"
                                                                :value="old('email')" required autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control"
                                                                placeholder="Enter your password"
                                                                type="password"name="password" required
                                                                autocomplete="current-password">
                                                        </div><button type="submit"
                                                            class="btn btn-main-primary btn-block">Sign In</button>

                                                    </form>
                                                    <div class="main-signin-footer mt-5">
                                                        <p><a href="">Forgot password?</a></p>

                                                    </div>
                                                </div>
                                                {{-- Labo Employee Login Form  --}}
                                                <div class="panel" id="Labo_employee">
                                                    <form method="POST" action="{{ route('login.labo_employee') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Email</label> <input class="form-control"
                                                                placeholder="Enter your email" type="email"
                                                                name="email" :value="old('email')" required autofocus>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label> <input class="form-control"
                                                                placeholder="Enter your password"
                                                                type="password"name="password" required
                                                                autocomplete="current-password">
                                                        </div><button type="submit"
                                                            class="btn btn-main-primary btn-block">Sign In</button>

                                                    </form>
                                                    <div class="main-signin-footer mt-5">
                                                        <p><a href="">Forgot password?</a></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection
@section('js')
    <script>
        $('#sectionChooser').change(function() {
            var myID = $(this).val();
            $('.panel').each(function() {
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    </script>
@endsection
