<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <!-- Font Awesome -->
    <link rel="icon" href="{!! asset('dist/img/logo1.png') !!}"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="media-body">

                            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            <span class="float-right text-sm"><i class="fas fa-sign-out-alt"></i></span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form> --}}
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}
                        <span class="float-right text-sm ml-2"><i class="fas fa-caret-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="media-body">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <span class="float-right text-sm"><i class="fas fa-sign-out-alt"></i></span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('dist/img/logo2.jpg')}}" alt="Pilih Tempat Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Pilih</b> Tempat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item py-2">
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle elevation-2">
                                </div>
                                <div class="info">
                                    <a href="#" class="d-block">
                                        {{Auth::user()->name}}
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item py-2">
                            <a href="{{route('user')}}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="{{route('coworker')}}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Coworker
                                </p>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="{{route('venue')}}" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Venue
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item py-2">
                            <a href="/dashboard/project" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    Project
                                </p>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-item py-2">
                            <a href="/dashboard/unit" class="nav-link">
                                <i class="nav-icon fas fa-puzzle-piece"></i>
                                <p>
                                    Facility
                                </p>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="/dashboard/amenity" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>
                                    Amenity
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item py-2">
                            <a href="{{route('facility')}}" class="nav-link">
                                <i class="nav-icon fas fa-plus-square"></i>
                                <p>
                                    Facility
                                </p>
                            </a>
                        </li>
                        <li class="nav-item py-2">
                            <a href="{{route('procedure')}}" class="nav-link">
                                <i class="nav-icon fab fa-product-hunt"></i>
                                <p>
                                    Procedure
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item py-2">
                            <a href="/dashboard/banner" class="nav-link">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Banner
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item py-2">
                            <a href="{{route('master')}}" class="nav-link">
                                <i class="nav-icon fa fa-asterisk"></i>
                                <p>
                                    Master
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                @yield('header')
                            </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0-rc
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
</body>

</html>