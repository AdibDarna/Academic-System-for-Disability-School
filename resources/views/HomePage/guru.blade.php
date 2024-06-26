<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SLB ALFAQIH</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="layout-top-nav layout-navbar-fixed" style="height: auto; ">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <h1><b>SLB ALFAQIH</b></h1>
        </div>

        <!-- Navbar -->
        @include('HomePage.navbar')
        <!-- /.navbar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 760.207px; background-color:white">

            <div class="content-header">
                <div class="container">
                    <div class="row mb-4 " style="height:50vh;">
                        <div
                            style=" background-color: rgba(0, 0, 0, 1);

                        width: 100%;
                        height: 100%;
                      
                        z-index: 2;">
                            <div class="col-sm-12 d-flex justify-content-center align-items-center"
                                style=" height:100%; background-image: url('{{ asset('/image/slb.png') }}'); background-size: fit; z-index: 1;">
                                <h1 class="m-0" style=" font-size:40x; color:white"><b>SLB Al Faqih Pekanbaru</b>
                                </h1>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-4 mt-4 ">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <h1 class="m-0" style=" font-size:25x; text-shadow:2px 2px 6px #000"><b>SLB Al Faqih Pekanbaru</b>
                            </h1>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-12 d-flex" style="flex-direction:column; justify-content:center; ">
                            <div class="row ">
                                @foreach ($guru as $g)
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-header border-0">
                                                <div class="d-flex justify-content-between">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <p
                                                        class="d-flex flex-column justify-content-center align-items-center w-100">
                                                        <span><img width="300"
                                                                src="{{ asset('image/guru/'.$g->foto) }}" /></span>
                                                        <span >Nama</span>
                                                        <span class="text-bold text-lg">{{$g->nama}}</span>
                                                        <span >NIP</span>
                                                        <span class="text-bold text-lg">{{ $g->nip}}</span>
                                                        <span >Pelajaran</span>
                                                        <span class="text-bold text-lg">{{ $g->bidang}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        @include('HomePage.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
