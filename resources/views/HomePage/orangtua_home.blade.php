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
                            <div class="col-sm-12 d-flex flex-column justify-content-center align-items-center"
                                style=" height:100%; background-image: url('{{ asset('/image/slb.png') }}'); background-size: fit; z-index: 1;">
                                <h1 class="m-0" style=" font-size:40x; color:white; text-shadow:2px 2px 6px #000"><b>Home Orangtua</b>
                                </h1>
                                <span style="color: white">
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-4 mt-4 ">
                        <div class="col-sm-12 mb-5 d-flex justify-content-center align-items-center">
                            <h1 class="m-0" style=" font-size:25x"><b>SLB Al Faqih Pekanbaru</b>
                            </h1>
                        </div>

                        @foreach ($siswa as $s)
                            <div class="col-6 mb-5">
                                <table class="table">
                                    <tr>
                                        <td><b>NIS</b></td>
                                        <td>:</td>
                                        <td>{{ $s->nis }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Nama</b></td>
                                        <td>:</td>
                                        <td>{{ $s->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tanggal Lahir</b></td>
                                        <td>:</td>
                                        <td>{{ $s->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tahun Masuk</b></td>
                                        <td>:</td>
                                        <td>{{ $s->tahun_masuk }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Jenis Kelamin</b></td>
                                        <td>:</td>
                                        <td>{{ $s->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Kebutuhan Spesial</b></td>
                                        <td>:</td>
                                        <td>{{ $s->nama_disabilitas }}</td>
                                    </tr>
                                </table>
                            </div>
                        @endforeach

                        <div class="col-12 mb-4">
                            <a href="/orangtua_home/ganjil" class="btn btn-primary">Ganjil</a>
                            <a href="/orangtua_home/genap" class="btn btn-primary">Genap</a>
                        </div>

                        <div class="col-12 mb-4">
                            <h4>Nilai Siswa Kelas <b>{{ $s->kelas }}</b> - Semester <b>{{ $semester }}</b></h4>
                        </div>
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Pelajaran</th>
                                        <th>Catatan</th>
                                        <th>Nilai</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilai as $key => $ni)
                                        <tr>

                                            <td>
                                                {{ $ni->nama_pelajaran }}
                                            </td>
                                            <td>
                                                <label>Pengetahuan</label><br>
                                                {{ $ni->note_pengetahuan }}<br>
                                                <label>Keterampilan</label><br>
                                                {{ $ni->note_keterampilan }}<br>
                                            </td>
                                            <td>
                                                <label>Pengetahuan</label><br>
                                                {{ $ni->nilai_pengetahuan }}<br>
                                                <label>Keterampilan</label><br>
                                                {{ $ni->nilai_keterampilan }}<br>
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mb-4">
                            <h4>Sikap Siswa Kelas <b>{{ $s->kelas }}</b> - Semester <b>{{ $semester }}</b></h4>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal Input</th>

                                        <th>Spiritual</th>
                                        <th>Sosial</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($sikap as $key => $ni)
                                        <tr>
                                            <td>
                                                @php
                                                    setlocale(LC_TIME, 'Indonesia');
                                                    echo $ni->created_at->formatLocalized('%A ,%d %B %Y');
                                                @endphp

                                                <br>
                                            </td>
                                            <td>
                                                {{ $ni->spiritual }}<br>
                                            </td>
                                            <td>
                                                {{ $ni->sosial }}<br>
                                            </td>


                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 d-flex justify-content-center ">
                            <a href="/orangtua_logout" class="btn btn-primary w-100">Logout</a>
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