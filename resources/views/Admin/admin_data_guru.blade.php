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
                            <h1 class="m-0">Guru</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Guru</li>
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
                                    <h3 class="card-title">Tambah Data Guru</h3>

                                </div>
                                <div class="card-body ">
                                    <form action="/data_guru/store" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row p-2">
                                            <div class="col-sm-6 ">
                                                <div class="form-group mt-1">
                                                    <label for="nip">NIP Guru</label>
                                                    <input type="text" class="form-control" id="nip"
                                                        name="nip" placeholder="Masukan NIP Guru">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="form-group mt-1">
                                                    <label for="nama">Nama Guru</label>
                                                    <input type="Text" class="form-control" id="nama"
                                                        name="nama" placeholder="Masukan Nama Guru">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row p-2">
                                            <div class="col-sm-6 ">
                                                <div class="form-group mt-1">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" placeholder="Masukan Email Guru">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="form-group mt-1">
                                                    <label for="password">Password</label>
                                                    <input type="Text" class="form-control" id="password"
                                                        name="password" placeholder="Masukan Password">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row p-2">
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="tanggal_lahir"
                                                        name="tanggal_lahir" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <select class="form-control" id="jenis_kelamin"
                                                        name="jenis_kelamin">
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row p-2">
                                            <div class="col-sm-6">
                                                <label>Upload Foto</label>
                                                <div class="custom-file">

                                                    <label class="custom-file-label" for="foto">Upload
                                                        Foto</label>
                                                    <input type="File" class="custom-file-input" id="foto"
                                                        name="foto" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="bidang">Bidang</label>
                                                    <input type="text" class="form-control" id="bidang"
                                                        name="bidang" placeholder="Masukan Bidang" />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row p-2">
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="jabatan">Jabatan</label>
                                                    <input type="text" class="form-control" id="jabatan"
                                                        name="jabatan" placeholder="Masukan Jabatan" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mt-1">
                                                    <label for="tahun_masuk">Tahun Masuk</label>
                                                    <select class="form-control" id="tahun_masuk" name="tahun_masuk">
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group float-right">
                                                <input class="btn btn-primary" type="submit" value="Daftarkan Guru">

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fas fa-newspaper mr-2"></i>
                                        Daftar Guru
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Bidang</th>
                                                <th>Jabatan</th>
                                                <th>Tahun Masuk</th>
                                                <th>Foto</th>
                                                <th style="width: 40px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($guru as $key => $gu)
                                                <tr>
                                                    <td>{{ $guru->firstItem() + $key }}</td>
                                                    <td>{{ $gu->nip }}</td>
                                                    <td>{{ $gu->nama }}</td>
                                                    <td>{{ $gu->tanggal_lahir }}</td>
                                                    <td>{{ $gu->jenis_kelamin }}</td>
                                                    <td>{{ $gu->bidang }}</td>
                                                    <td>{{ $gu->jabatan }}</td>
                                                    <td>{{ $gu->tahun_masuk }}</td>
                                                    <td>
                                                        <a href="{{ asset('image/guru/' . $gu->foto) }}"
                                                            target="_blank">
                                                            {{ $gu->foto }}
                                                        </a>
                                                    </td>
                                                    <td><a href="/data_guru/destroy/{{ $gu->nip }}"><span
                                                                class="btn btn-danger"><i class="fas fa-trash">
                                                                </i></span></a>
                                                        <br><br>
                                                        @php
                                                            $hasmade = false;
                                                        @endphp
                                                        @foreach ($user as $us)
                                                            @if ($gu->email == $us->email)
                                                                @php
                                                                    $hasmade = true;
                                                                @endphp
                                                            @endif
                                                        @endforeach
                                                        @if ($hasmade == false)
                                                            <a href="/data_guru/adduser/{{ $gu->nip }}"><span
                                                                    class="btn btn-primary"><i class="fas fa-user">
                                                                    </i></span></a>
                                                        @else()
                                                            <span class="btn btn-success"><i class="fas fa-check">
                                                                </i></span>
                                                        @endif


                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer clearfix">
                                    {{ $guru->links() }}
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
