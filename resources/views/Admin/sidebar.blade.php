<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #userImage {
            width: 35px;
            height: 35px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                &nbsp; &nbsp;
                <span class="brand-text font-weight-light">SLB ALFAQIH</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('image/guru/' . Auth::user()->foto) }}" id="userImage"
                            class=" img-circle elevation-2" onerror="this.src='{{asset('dist/img/user2-160x160.jpg')}}';">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="/profil_dasbor" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dasbor
                                </p>
                            </a>
                        </li>
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-header">Kelola Situs</li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <i class="nav-icon fas fa-tshirt"></i>
                                    <p>
                                        Profil
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/profil_informasi" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Informasi</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/profil_galeri" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Galeri</p>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="/profil_extrakulikuler" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Extrakulikuler</p>
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="/profil_fasilitas" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Fasilitas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/profil_prestasi" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Prestasi</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-header">Akademik</li>

                        <li class="nav-item">
                            <a href="/nilai_siswa" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Nilai Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/sikap_siswa" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Sikap Siswa</p>
                            </a>
                        </li>
                        @if (Auth::user()->role == 'guru')
                        <li class="nav-item">
                            <a href="/absen_siswa" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Absen Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/absen_guru" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Absen Guru</p>
                            </a>
                        </li>

                        @endif


                        @if (Auth::user()->role == 'admin')
                        <li class="nav-header">Kelola Data</li>
                       
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Siswa
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/data_siswa" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data_kelas" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kelas Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/absen_siswa" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Absen Siswa</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                      
                        <li class="nav-item">
                            <a href="/data_orangtua" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Orang Tua
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    Guru
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if (Auth::user()->role == 'admin')
                                    <li class="nav-item">
                                        <a href="/data_guru" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Guru</p>
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a href="/absen_guru" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Absen Guru</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/data_disabilitas" class="nav-link">
                                <i class="nav-icon fas fa-wheelchair"></i>
                                <p>
                                    Kebutuhan Spesial
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data_pelajaran" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pelajaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data_jadwal_pelajaran" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Jadwal Pelajaran
                                </p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>





    </div>
    <script>
        window.onload = (event) => {
            var url = window.location.pathname;
            var links = document.getElementsByTagName('a'),
                hrefs = [];
            for (var i = 0; i < links.length; i++) {
                if (url === links[i].pathname) {
                    links[i].classList.add("active");
                    console.log(links[i].pathname);
                }
            }
            console.log(url);
        }
    </script>
</body>

</html>
