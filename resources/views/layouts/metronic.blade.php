<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Metronic CSS -->
    <link href="{{ asset('adminpanel/demo1/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminpanel/demo1/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    @yield('styles')
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed">
    @yield('content')

    <!-- Metronic JS -->
    <script src="{{ asset('adminpanel/demo1/assets/vendors/base/vendors.bundle.js') }}"></script>
    <script src="{{ asset('adminpanel/demo1/assets/demo/default/base/scripts.bundle.js') }}"></script>

    @yield('scripts')
</body>
</html>
