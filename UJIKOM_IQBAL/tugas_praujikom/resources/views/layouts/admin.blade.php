<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/chartjs/Chart.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <!-- sidebar -->
        @include('layouts.component.sidebar');
        <!-- endsidebar -->
        <div id="main">
            <!-- navbar -->
            @include('layouts.component.navbar');
            <!-- endnavbar -->

            <!-- content -->
            @yield('content')
            <!-- endcontent -->

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2020 &copy; ULER</p>
                    </div>
                    <div class="float-end">
                        <p>Create By <span class='text-danger'><i data-feather="heart"></i></span> by <a
                                href="http://ahmadsaugi.com">Iqbal Naufal</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset ('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{asset ('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset ('assets/js/app.js') }}"></script>

    <script src="{{asset ('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{asset ('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{asset ('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{asset ('assets/js/main.js') }}"></script>
    {{-- @include('sweetalert::alert') --}}
</body>

</html>