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
                    <div class="row mb-4 mt-4">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="color:royalblue; font-size:40px"><b>SLB Al Faqih Pekanbaru</b>
                            </h1>
                        </div>

                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 d-flex"
                            style="flex-direction:column; justify-content:center; align-items:center"><img
                                width="240" src="{{ asset('image/logo_kemdikbud.png') }}">
                            <a href="/kontak" class="btn btn-primary p-2" style="width:200px">Hubungi Kami</a>
                        </div>
                        <div class="col-sm-8" style="object-fit: cover"><img style="width:100%"
                                src="{{ asset('image/anak-anak.png') }}"></div>
                    </div>
                    <div class="row mb-2 d-flex p-5 "
                        style="flex-direction:row; justify-content:center; align-items:center;  ">
                        <div class="col-sm-6 d-flex" style="flex-direction:column; align-items:center">
                            <video width="600" controls style="width: 400px">
                                <source src="video/video.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-sm-6" style="object-fit: cover;" id="sambutan">
                            <h3>Sambutan Kepala Sekolah
                                <br>
                                SLB Alfaqih Pekanbaru
                            </h3>
                            <br>
                            <p>Puji sukur saya</p>
                        </div>

                    </div>
                    <div class="row p-5" style="height: 50vh; background-color:#f4f6f9;">
                        <div class="col-sm-4 d-flex" style="flex-direction:column; justify-content:center;">
                            <h3><b>Profil Sekolah</b></h3>
                            <br>
                            <p>Puji sukur saya</p>
                            <a href="/profil" class="btn btn-primary p-1" style="width:200px">Lebih Lanjut</a>
                        </div>
                        <div class="col-sm-1">

                        </div>
                        <div class="col-sm-7 d-flex" style="flex-direction:column; justify-content:center; ">
                            <div class="row ">
                                <div class="col-sm-6">
                                    <a href="/fasilitas">
                                        <div class="card">
                                            <div class="card-header border-0">
                                                <div class="d-flex justify-content-between">

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <p class="d-flex flex-column">
                                                        <span><img width="35"
                                                                src="{{ asset('image/icon/fasilitas.png') }}" /></span>
                                                        <span class="text-bold text-lg">Fasilitas</span>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="/lokasi">
                                        <div class="card">
                                            <div class="card-header border-0">
                                                <div class="d-flex justify-content-between">

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <p class="d-flex flex-column">
                                                        <span><img width="35"
                                                                src="{{ asset('image/icon/lokasi.png') }}" /></span>
                                                        <span class="text-bold text-lg">Lokasi</span>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="/sejarah">
                                        <div class="card">
                                            <div class="card-header border-0">
                                                <div class="d-flex justify-content-between">

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <p class="d-flex flex-column">
                                                        <span><img width="35"
                                                                src="{{ asset('image/icon/sejarah.png') }}" /></span>
                                                        <span class="text-bold text-lg">Sejarah</span>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="/prestasi">
                                        <div class="card">
                                            <div class="card-header border-0">
                                                <div class="d-flex justify-content-between">

                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <p class="d-flex flex-column">
                                                        <span><img width="29"
                                                                src="{{ asset('image/icon/prestasi.png') }}" /></span>
                                                        <span class="text-bold text-lg">Prestasi</span>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row p-5 flex-column" style="background-color:#f4f6f9;">
                        <div class="row mb-2 mt-4">

                            <div class="col-sm-12">
                                <h3><b>Galeri</b></h3>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-12"> 
                            <div class="row ">
                                @foreach ($galeri as $g)
                                    @php
                                        $gambar = null;
                                    @endphp
                                  
                                    <div class="col-sm-4">
                                        <a href="/galeri/{{ $g->id_galeri }}">
                                            <div class="card">

                                                <div class="card-body p-0"
                                                    style=" background-image:url('{{ asset('image/galeri/' . $g->foto) }}'); background-size:cover; height:250px">
                                                    <div class="d-flex  align-items-end" style="height:100% ">
                                                        <p class="d-flex bg-primary  mb-0 flex-column justify-content-center align-items-center w-100"
                                                            style="opacity:0.8; height: 20%">

                                                            <span class="text-bold text-lg">{{ $g->judul }}</span>


                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            </div>
                            <div class="row mb-2 mt-4" style=" width: 100%">

                                <div class="col-sm-12 d-flex" style="justify-content:center;">
                                    <a href="/galeri" class="btn btn-primary p-1" style="width:200px">Lebih Lanjut</a>

                                </div>

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
