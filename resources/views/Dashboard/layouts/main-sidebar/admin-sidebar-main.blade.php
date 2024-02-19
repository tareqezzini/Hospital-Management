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
        <li class="slide">
            <a class="side-menu__item" href="{{ route('dashboard.admin') }}"><svg xmlns="http://www.w3.org/2000/svg"
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
                    <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                    <path
                        d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.sections') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('sections.index') }}">{{ trans('main-sidebar_trans.view_all') }}</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                        opacity=".3" />
                    <path
                        d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.doctors') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('doctors.index') }}">{{ trans('main-sidebar_trans.view_all') }}</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3" />
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.Services') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('Service.index') }}">{{ trans('main-sidebar_trans.Single_service') }}</a>
                </li>
                <li><a class="slide-item"
                        href="{{ route('Add_GroupServices') }}">{{ trans('main-sidebar_trans.group_services') }}</a>
                </li>
                <li><a class="slide-item"
                        href="{{ route('Ambulance.index') }}">{{ trans('main-sidebar_trans.ambulance') }}</a>
                </li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3" />
                    <path
                        d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.patients') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('Patients.index') }}">{{ trans('main-sidebar_trans.patients_list') }}</a></li>
                <li><a class="slide-item"
                        href="{{ route('Patients.create') }}">{{ trans('main-sidebar_trans.add_patients') }}</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3" />
                    <path
                        d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.invoices') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('SingleInvoices') }}">{{ trans('main-sidebar_trans.invoices_list') }}</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3" />
                    <path
                        d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.appointments') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('appointments') }}">{{ trans('main-sidebar_trans.appointments_list') }}</a>
                </li>

                <li><a class="slide-item" href="{{ route('appointmentsApproved') }}">
                        {{ trans('main-sidebar_trans.appointments_confirmed') }}
                    </a></li>

                <li><a class="slide-item"
                        href="{{ route('appointmentsFinished') }}">{{ trans('main-sidebar_trans.appointments_completed') }}</a>
                </li>

            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3" />
                    <path
                        d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.finance') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('Receipt.index') }}">{{ trans('main-sidebar_trans.receipt_voucher') }}</a>
                </li>
                <li><a class="slide-item" href="{{ route('Payment.index') }}">
                        {{ trans('main-sidebar_trans.bill_exchange') }}</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3" />
                    <path
                        d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.x-ray') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('ray_employee.index') }}">{{ trans('main-sidebar_trans.employees_list') }}</a>
                </li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}"><svg
                    xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3" />
                    <path
                        d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z" />
                </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.laboratory') }}</span><i
                    class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"
                        href="{{ route('laboratory_employees.index') }}">{{ trans('main-sidebar_trans.employees_list') }}</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
