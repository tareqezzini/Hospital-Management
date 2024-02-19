<div class="main-sidemenu">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div class="">
                <img alt="user-img" class="avatar avatar-xl brround"
                    src="{{ URL::asset('Dashboard/img/brand/doctor_default.png') }}"><span
                    class="avatar-status profile-status bg-green"></span>
            </div>
            <div class="user-info">
                <h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
                <span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <br>
        <br>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('dashboard.doctor') }}"><svg xmlns="http://www.w3.org/2000/svg"
                    class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                    <path
                        d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.index') }}</a>
        </li>


        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3" />
                    <path
                        d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z" />
                </svg><span class="side-menu__label">{{ trans('dash_doctor_trans.diagnostics') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('invoices.index') }}">{{ trans('dash_doctor_trans.list_diagnoses') }}</a></li>
                <li><a class="slide-item"
                        href="{{ route('completedInvoices') }}">{{ trans('dash_doctor_trans.list_diagnoses_completed') }}</a>
                </li>
                <li><a class="slide-item"
                        href="{{ route('reviewInvoices') }}">{{ trans('dash_doctor_trans.list_diagnoses_review') }}</a>
                </li>
            </ul>
        </li>




    </ul>
</div>
