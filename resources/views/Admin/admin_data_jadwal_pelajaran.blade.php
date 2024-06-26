<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SLB ALFAQIH | Admin Dasbor</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <h1><b>SLB ALFAQIH</b></h1>
           
        </div> --}}

        <!-- Navbar -->
        @include('Admin.topnav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                &nbsp; &nbsp;
                <span class="brand-text font-weight-light">SLB ALFAQIH</span>
            </a>

            <!-- Sidebar -->
            @include('Admin.sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kelas Siswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Kelas Siswa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card card-default ">
                                <div class="card-header" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fas fa-newspaper mr-2"></i>
                                        List Kelas
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kelas</th>
                                                <th>Wali Kelas</th>
                                                <th style="width: 50px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kelas as $kel)
                                                <tr>
                                                    <td>{{ $kel->kelas }}</td>
                                                    <td>{{ $kel->wali }}</td>
                                                    <td><a href="/data_jadwal_pelajaran/{{ $kel->kelas }}"><span
                                                                class="btn btn-primary"><i class="fas fa-search">
                                                                </i> </span> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">

                            <div class="card card-default ">

                                <div class="card-header ui-sortable-handle">
                                    <h3 class="card-title">
                                        <i class="fas fa-newspaper mr-2"></i>
                                        Detail Kelas
                                    </h3>
                                </div>

                                @php
                                    $id_kelas = null;
                                @endphp
                                <div class="card-body">
                                    @foreach ($kelas as $k)
                                        @if ($k->kelas == $kelu)
                                            <div class="row">
                                                <div class="col-10">
                                                    @php
                                                        $id_kelas = $k->id_kelas;
                                                    @endphp
                                                    <div><b>Wali Kelas </b>:

                                                        {{ $k->wali }}

                                                    </div>


                                                    <div><b>Kelas </b>:

                                                        {{ $k->kelas }}

                                                    </div>
                                                </div>
                                                <div class="col-2" style="display: flex; justify-content: flex-end; ">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#modal-default"><i class="fas fa-user-cog">
                                                        </i> </button>

                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                    <br>
                                    <div class="modal fade" id="modal-default" style="display: none;"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="/data_jadwal_pelajaran/tambahjadwal" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Tambah Pelajaran</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="number" value="{{ $id_kelas }}"
                                                            name="id_kelas" hidden>
                                                        <table class="table ">
                                                            <tr>

                                                                <td>
                                                                    <select class="form-control" name="id_pelajaran">
                                                                        @foreach ($pelajaran as $pel)
                                                                            <option value="{{ $pel->id }}">
                                                                                {{ $pel->nama_pelajaran }}</option>
                                                                        @endforeach

                                                                    </select>

                                                                </td>

                                                            </tr>
                                                            <tr>

                                                                <td>
                                                                    <select class="form-control" name="semester">

                                                                        <option value="ganjil">
                                                                            Ganjil</option>
                                                                        <option value="genap">
                                                                            Genap</option>

                                                                    </select>

                                                                </td>

                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer justify-end">

                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Pelajaran</th>
                                                <th>Jam</th>
                                                <th>Aksi</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwal as $ja)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $ja->nama_pelajaran }}</td>
                                                    <td>{{ $ja->durasi }}</td>
                                                    <td><a href="/data_jadwal_pelajaran/destroy/{{ $ja->id }}"><span
                                                                class="btn btn-danger"><i class="fas fa-trash">
                                                                </i></span></a></td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Website ini dibuat oleh</strong>
            Sindi Wahyu Ramadhani
            <div class="float-right d-none d-sm-inline-block">

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
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
