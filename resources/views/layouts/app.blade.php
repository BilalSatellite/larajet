<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Vendors Style-->
       {{-- <link rel="stylesheet" href="{{ mix('panel/css/vendors_css.css') }}">  --}}
       <link rel="stylesheet" href="{{ mix('panel/icons/font-awesome/css/font-awesome.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/Ionicons/css/ionicons.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/themify-icons/themify-icons.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/linea-icons/linea.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/glyphicons/glyphicon.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/flag-icon-css/css/flag-icon.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/material-design-iconic-font/css/materialdesignicons.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/simple-line-icons/css/simple-line-icons.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/cryptocoins-master/cryptocoins.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/weather-icons/css/weather-icons.min.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/iconsmind/style.css') }}">
       <link rel="stylesheet" href="{{ mix('panel/icons/font-awesome/css/font-awesome.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">



        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main>
 <!-- Vendor JS -->
 <script src="{{ mix('panel/js/vendors.min.js') }}"></script>
 <script src="{{ mix('panel/icons/feather-icons/feather.min.js') }}"></script>
 {{-- <script src="../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script> --}}
 {{-- <script src="../assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
 <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> --}}

 <!-- Sunny Admin App -->
 <script src="{{ mix('panel/js/template.js') }}"></script>
 {{-- <script src="{{ mix('panel/js/dashboard.js') }}"></script> --}}
        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
