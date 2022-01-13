<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link type="text/css" href="{{ asset('assets/vendor/simplebar.min.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/css/app.css?v=1.0.1') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/css/vendor-material-icons.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/css/vendor-select2.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/css/vendor-flatpickr.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/css/vendor-flatpickr-airbnb.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('assets/css/vendor-bootstrap-image-checkbox.css') }}" rel="stylesheet">
</head>

<body class="layout-login-centered-boxed">
    <div class="layout-login-centered-boxed__form card">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light">
            <a href="{{ url('/login') }}" class="navbar-brand flex-column mb-2 align-items-center mr-0">
                @if(get_system_setting('application_logo'))
                    <img class="navbar-brand-icon" src="{{ get_system_setting('application_logo') }}" width="125" alt="{{ get_system_setting('application_name') }}">
                @else
                    <span>{{ get_system_setting('application_name') }}</span>
                @endif
            </a>
        </div>

        @yield('content')
    </div>

    <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>
<script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>
<script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>
<script src="{{ asset('assets/js/check-selected-row.js') }}"></script>
<script src="{{ asset('assets/js/dropdown.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
<script src="{{ asset('assets/js/jquery.priceformat.min.js') }}"></script>
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/custom.js?v=1.0.2') }}"></script>
</body>
</html>