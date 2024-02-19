<!DOCTYPE html>
<html lang="en">

@include('Website.layouts.head')

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Start Main Header -->
        @include('Website.layouts.header')

        <!-- Start Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- @if (session('success'))
            <div class="alrt alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('success') }}
            </div>
        @endif --}}
        @if (session('success'))
            <div class="alert alert-success notification">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger notification">{{ session('error') }}</div>
        @endif
        <!-- End Errors -->
        @yield('content')





        <!--Main Footer-->
        @include('Website.layouts.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Scroll to top-->





    @include('Website.layouts.script')

</body>

</html>
