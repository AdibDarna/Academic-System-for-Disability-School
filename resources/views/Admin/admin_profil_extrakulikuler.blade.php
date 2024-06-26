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

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <h1><b>SLB ALFAQIH</b></h1>
            {{-- <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> --}}
        </div>

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
                            <h1 class="m-0">Extrakulikuler</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Profil</li>
                                <li class="breadcrumb-item active">Extrakulikuler</li>
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">Tambah Info Extrakulikuler</h3>

                                </div>
                                <div class="card-body ">
                                    <form action="/profil_extrakulikuler/store" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <div class="row p-2">
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="nama">Nama Extrakulikuler</label>
                                                    <input type="Text" class="form-control" id="nama"
                                                        name="nama" placeholder="Masukan Nama Extrakulikuler">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="pembimbing">Pembimbing</label>
                                                    <input type="Text" class="form-control" id="pembimbing"
                                                        name="pembimbing" placeholder="Masukan Nama Pembimbing">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="nomorhp">Nomor Hp Pembimbing</label>
                                                    <input type="number" class="form-control" id="nomorhp"
                                                        name="nomorhp" placeholder="Masukan Nomor Hp Pembimbing">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="hari">Hari</label>
                                                    <select class="form-control" id="hari" name="hari">
                                                        <option value="" selected disabled>Pilih Hari</option>
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jum'at">Jum'at</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row p-2">
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">

                                                    <label for="waktu">Waktu</label>
                                                    <input type="Time" class="form-control" id="waktu"
                                                        name="waktu">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Upload Foto</label>
                                                <div class="custom-file">

                                                    <label class="custom-file-label" for="foto">Upload
                                                        Foto</label>
                                                    <input type="File" class="custom-file-input" id="foto"
                                                        name="foto" placeholder="Masukan Nama Pembimbing"
                                                        accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group float-right">
                                                <input class="btn btn-primary" type="submit"
                                                    value="Daftarkan Extrakulikuler">

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fas fa-newspaper mr-2"></i>
                                        Daftar Extrakulikuler
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Nama Extrakulikuler</th>
                                                <th>Pembimbing</th>
                                                <th>Nomor Hp</th>
                                                <th>Hari</th>
                                                <th>Waktu</th>
                                                <th>Foto</th>
                                                <th style="width: 40px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($extrakulikuler as $key => $ex)
                                                <tr>
                                                    <td>{{ $extrakulikuler->firstItem() + $key }}</td>
                                                    <td>{{ $ex->nama_extrakulikuler }}</td>
                                                    <td>{{ $ex->pembimbing }}</td>
                                                    <td>{{ $ex->nomor_hp }}</td>
                                                    <td>{{ $ex->hari }}</td>
                                                    <td>{{ $ex->waktu }}</td>
                                                    <td>
                                                        <a href="{{ asset('image/extrakulikuler/' . $ex->foto) }}"
                                                            target="_blank">
                                                            {{ $ex->foto }}
                                                        </a>
                                                    </td>
                                                    <td><a href="/profil_extrakulikuler/destroy/{{$ex->id_extrakulikuler}}"><span class="btn btn-danger"><i class="fas fa-trash"> </i></span></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer clearfix">
                                    {{ $extrakulikuler->links() }}
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
