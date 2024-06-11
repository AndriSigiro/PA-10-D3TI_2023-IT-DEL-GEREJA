<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin HKBP Hutanamora</title>

    <link rel="icon shortcut" type="image/jpg" href="assets/img/gereja2.png" />
    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
    <!-- Theme style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Rowdies:wght@300&family=Tilt+Prism&display=swap');
    </style>

    @stack('keuangan.css')
    @stack('css')
    @stack('ya')
    @stack('ye')
    @stack('yu')
    @stack('yi')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li> --}}
                {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="https://api.whatsapp.com/send?phone=6281369284351" class="nav-link">Kirim Pesan Ke Developer</a>
        </li> --}}
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets/img/gereja/logo.jpeg') }}" class="img-circle elevation-2"
                            alt="User Image" style="position:relative; left: 50%;>
        </div>
  
      <div class=" info">
                        <a href="/dashboard" class="d-block" style="position:relative; left: 13%;">ADMIN HKBP
                            Hutanamora</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/datajemaat" class="nav-link">
                                <i class="nav-icon bi bi-person-vcard"></i>
                                <p>Data Jemaat </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/wartajemaat" class="nav-link">
                                <i class="nav-icon bi bi-newspaper"></i>
                                <p>Warta Jemaat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/jadwalibadah" class="nav-link">
                                <i class="nav-icon bi bi-calendar-date-fill"></i>
                                <p>Jadwal Ibadah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/keuangan" class="nav-link">
                                <i class="nav-icon bi bi-cash-coin"></i>
                                <p>Informasi Keuangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/photo" class="nav-link">
                                <i class="nav-icon far fa-image"></i>

                                <p>Galeri</p>
                            </a>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>

                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pelayan" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>pelayan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/video" class="nav-link">
                                <i class="nav-icon fas fa-video"></i>

                                <p>Video</p>
                            </a>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        @yield('content')

        <!-- End Services Section -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
    </div>
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    @stack('scripts')
    @stack('scriptss')
    @stack('scriptsss')
    @stack('scriptssss')
    @stack('scriptsssss')
    @stack('s')
    @stack('d')
    @stack('dd')
    @stack('ddd')
    @stack('ss')
    @stack('sss')
    @stack('scriptssssss')
    @stack('script')
    @stack('feby')

</body>

</html>