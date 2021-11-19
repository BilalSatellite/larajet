{{-- <!DOCTYPE html>
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

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <x-jet-banner />
        @livewire('navigation-menu')

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

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../images/favicon.ico">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
         <!-- Vendors Style-->
      {{-- <link rel="stylesheet" href="{{ mix('panel/css/vendors_css.css') }}"> --}}
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

      {{-- {{  mix('vendor_components/animate/animate.css') --}}
      <!-- Style-->

      <link rel="stylesheet" href="{{ mix('panel/css/style.css') }}">
      <link rel="stylesheet" href="{{ mix('panel/css/skin_color.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>


    </head>

  <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

  <div class="wrapper">
   <!-- Page Heading -->
    <header class="main-header">
      <!-- Header Navbar -->
      @livewire('navigation-menu')

    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar">

          <div class="user-profile">
              <div class="ulogo">
                   <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                       <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('panel/images/logo-dark.png') }}" alt="">
                            <h3><b>Satellite</b> Mobile</h3>
                       </div>
                  </a>
              </div>
          </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

          <li>
            <a href="index.html">
              <i data-feather="pie-chart"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="header nav-small-cap">User Interface</li>

          <li class="treeview">
            <a href="#">
              <i data-feather="grid"></i>
              <span>Components</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
              <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            </ul>
          </li>
          <!-- Authentication -->
          <x-jet-nav-link href="{{ route('logout') }}"
          onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i data-feather="lock"></i>
                  <span>{{ __('Log out') }}</span>
           </x-jet-nav-link>

<form method="POST" id="logout-form" action="{{ route('logout') }}">
@csrf
</form>
        </ul>
      </section>

        <div class="sidebar-footer">
          <!-- item-->
          <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
          <!-- item-->
          <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
          <!-- item-->
          <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">

          <!-- Main content -->
          {{ $slot }}
          <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right d-none d-sm-inline-block">
          <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Purchase Now</a>
            </li>
          </ul>
      </div>
        &copy; 2021 <a href="#">Satellite mobile Institute</a>. All Rights Reserved.
    </footer>

  </div>
  <!-- ./wrapper -->


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

