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
                            <h1 class="m-0">Siswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Siswa</li>
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
                                                    <td><a href="/nilai_siswa/{{ $kel->id_kelas }}"><span
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
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fas fa-newspaper mr-2"></i>
                                        Daftar Siswa
                                    </h3>
                                </div>
                                <div class="card-body">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th style="width: 150px">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $kelas = $kel;
                                                
                                                $dateIndikator = null;
                                                $absenIndikator = false;
                                            @endphp

                                            @csrf
                                            @foreach ($siswa as $key => $si)
                                                <tr>
                                                    <td>
                                                        <input type="text" name="nis[]"
                                                            value="{{ $si->nis }}" hidden />
                                                        <input type="number" name="id_disabilitas[]"
                                                            value="{{ $si->id_disabilitas }}" hidden />
                                                        <input type="text" name="kelas[]"
                                                            value="{{ $si->kelas }}" hidden />
                                                        {{ $si->nama }}
                                                    </td>
                                                    <td>
                                                        <a href="/nilai_siswa/{{ $si->id_kelas }}/{{ $si->nis }}/ganjil"
                                                            class="btn btn-primary p-1">Ganjil</a>
                                                        <a href="/nilai_siswa/{{ $si->id_kelas }}/{{ $si->nis }}/genap"
                                                            class="btn btn-primary p-1">Genap </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        <div class="col-lg-8">

                            <div class="card">
                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                    <h3 class="card-title">
                                        <i class="fas fa-newspaper mr-2"></i>
                                        Input Nilai Siswa
                                    </h3>
                                </div>
                                <form action="/nilai_siswa/inputnilai" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div>
                                            Nama :
                                            @if (empty($orang))
                                                <span id="nama">
                                                    <div class="btn btn-warning"> Pilih Siswa Terlebih Dahulu</div>
                                                </span>
                                            @else
                                                @foreach ($orang as $o)
                                                    <span id="nama">
                                                        <div class="btn btn-primary"> {{ $o->nama }}</div>
                                                    </span>
                                                @endforeach
                                            @endif
                                        </div>
                                        <br>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Catatan</th>
                                                    <th style="width: 100px">Nilai</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $kelas = $kel;
                                                    
                                                    $dateIndikator = null;
                                                    $absenIndikator = false;
                                                @endphp


                                                <input id="nis" type="text" name="nis"
                                                    value="{{ $nis }}" hidden />
                                                @if (collect($nilai)->contains('nis', $nis) && collect($nilai)->contains('id_kelas', $id_kelas))
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
                                                @else
                                                    @foreach ($jadwal as $key => $jad)
                                                        <tr>

                                                            <td>
                                                                <input type="text" name="pelajaran[]"
                                                                    value="{{ $jad->id }}" hidden />
                                                                <input type="text" name="kelas[]"
                                                                    value="{{ $jad->id_kelas }}" hidden />
                                                                    <input type="text" name="semester[]"
                                                                    value="{{ $jad->semester }}" hidden />
                                                                {{ $jad->nama_pelajaran }}
                                                            </td>
                                                            <td>
                                                                <label>Pengetahuan </label>
                                                                <input class="form-control"
                                                                    placeholder="Masukan Catatan" type="text"
                                                                    name="note_pengetahuan[]" required>
                                                                <label>Keterampilan </label>
                                                                <input class="form-control"
                                                                    placeholder="Masukan Catatan" type="text"
                                                                    name="note_keterampilan[]" required>
                                                            </td>
                                                            <td>
                                                                <label>Pengetahuan</label>
                                                                <input class="form-control" placeholder="Nilai"
                                                                    type="number" name="nilai_pengetahuan[]" required>
                                                                <label>Keterampilan</label>
                                                                <input class="form-control" placeholder="Nilai"
                                                                    type="number" name="nilai_keterampilan[]" required>
                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer ">
                                        @if (collect($nilai)->contains('nis', $nis) && collect($nilai)->contains('id_kelas', $id_kelas))
                                        @else
                                            <button class="btn btn-primary float-right" type="submit">Input
                                                Nilai</button>
                                        @endif
                                    </div>
                                </form>
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
    <script>
        var spanNama = document.getElementById("nama");
        var inputNis = document.getElementById("nis");



        function detailNilai(nama, nis) {
            spanNama.innerHTML =
                '<div class=" btn btn-primary" ><span class="spinner-border text-light" role="status" aria-hidden="true"> </span><span class="sr-only">Loading...</span></div>';

            setTimeout(() => {
                spanNama.innerHTML = '<div class="btn btn-primary">' + nama + '</div>';
                document.cookie = "nis = " + nis;
            }, 2000);
            inputNis.value = nis;


            console.log(nama);
            console.log(nis);

        }
    </script>

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
