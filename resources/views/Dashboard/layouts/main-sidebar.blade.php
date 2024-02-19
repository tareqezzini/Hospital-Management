<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ route('dashboard.admin') }}"><img
                src="{{ URL::asset('Dashboard/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{ route('dashboard.admin') }}"><img
                src="{{ URL::asset('Dashboard/img/brand/logo-white.png') }}" class="main-logo dark-theme"
                alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ route('dashboard.admin') }}"><img
                src="{{ URL::asset('Dashboard/img/brand/logo.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ route('dashboard.admin') }}"><img
                src="{{ URL::asset('Dashboard/img/brand/favicon-white.png') }}" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    {{-- get the sidebar menu  --}}

    @if (\Auth::guard('admin')->check())
        @include('Dashboard.layouts.main-sidebar.admin-sidebar-main')
    @endif

    @if (\Auth::guard('doctor')->check())
        @include('Dashboard.layouts.main-sidebar.doctor-sidebar-main')
    @endif

    @if (\Auth::guard('ray_employee')->check())
        @include('Dashboard.layouts.main-sidebar.ray_employee-sidebar-main')
    @endif
    @if (\Auth::guard('laboEmployee')->check())
        @include('Dashboard.layouts.main-sidebar.labo_employee-sidebar-main')
    @endif
    @if (\Auth::guard('patient')->check())
        @include('Dashboard.layouts.main-sidebar.patient-sidebar-main')
    @endif
</aside>
<!-- main-sidebar -->
