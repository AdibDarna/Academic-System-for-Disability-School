<nav class="main-header navbar navbar-expand-md navbar-light navbar-dark ">
    <div class="container">
        <a class="navbar-brand">
            <img src="{{ asset('image/logo_kemdikbud.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">

        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">

        </div>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link active"  href="/">
                    Utama
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link"  href="/tentang">
                    Tentang
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link"  href="/guru">
                    Guru
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="/siswa">
                    Siswa
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link"  href="/pendaftaran">
                    Pendaftaran
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                    Lainnya  <i class="fas fa-chevron-down" style="width: 5px"></i>
                </a> 
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                    style="left: inherit; right: 0px;">

                    <div class="dropdown-divider"></div>
                    <a href="/profil" class="dropdown-item">
                        Profil
                    </a>
                    {{-- <div class="dropdown-divider"></div>
                    <a href="/extrakulikuler" class="dropdown-item">
                        Extrakulikuler
                    </a> --}}
                    <div class="dropdown-divider"></div>
                    <a href="/prestasi" class="dropdown-item">
                        Prestasi
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/galeri" class="dropdown-item">
                        Galeri
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/fasilitas" class="dropdown-item">
                        Fasilitas
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="/kontak">
                    Kontak
                </a>
            </li>
            <li class="nav-item dropdown">
                @if (Auth::guard('ortu')->check())
                <a class="nav-link" href="/orangtua_home">
                    {{Auth::guard('ortu')->user()->nama_orangtua}}
                </a>
                @else
                <a class="nav-link" href="/orangtua_login">
                    Login
                </a>
                @endif
               
            </li>
        </ul>
    </div>
</nav>
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