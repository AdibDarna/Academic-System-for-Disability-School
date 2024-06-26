<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Home_Extrakulikuler;
use App\Models\Home_Fasilitas;
use App\Models\Home_Galeri;
use App\Models\Home_Galeri_Foto;
use App\Models\Home_Informasi;
use App\Models\Home_Prestasi;
use App\Models\Nilai;
use App\Models\Sikap;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Home_Galeri::join('home_galeri_fotos', 'home_galeri_fotos.id_galeri', 'home_galeris.id_galeri')->groupBy('home_galeris.id_galeri')->paginate(3);
        $galeriFoto = Home_Galeri_Foto::get();
        return view('HomePage.Index', ['galeri' => $galeri, 'galeriFoto' => $galeriFoto]);
    }

    public function profil()
    {

        return view('HomePage.profil',);
    }

    public function guru()
    {
        $guru = Guru::get();
        return view('HomePage.guru', ['guru' => $guru]);
    }

    public function fasilitas()
    {
        $fasilitas = Home_Fasilitas::get();
        return view('HomePage.fasilitas', ['fasilitas' => $fasilitas]);
    }
    public function extrakulikuler()
    {
        $extrakulikuler = Home_Extrakulikuler::get();
        return view('HomePage.extrakulikuler', ['extrakulikuler' => $extrakulikuler]);
    }
    public function prestasi()
    {
        $prestasi = Home_Prestasi::get();
        return view('HomePage.prestasi', ['prestasi' => $prestasi]);
    }
    public function kontak()
    {

        return view('HomePage.kontak');
    }
    public function galeri()
    {
        $galeri = Home_Galeri::join('home_galeri_fotos', 'home_galeri_fotos.id_galeri', 'home_galeris.id_galeri')->groupBy('home_galeris.id_galeri')->get();
        $galeriFoto = Home_Galeri_Foto::get();
        return view('HomePage.galeri', ['galeri' => $galeri, 'galeriFoto' => $galeriFoto]);
    }
    public function galeriDetail($id)
    {
        $galeri = Home_Galeri::where('id_galeri', $id)->get();
        $galeriFoto = Home_Galeri_Foto::where('id_galeri', $id)->get();

        return view('HomePage.galeriDetail', ['galeri' => $galeri, 'galeriFoto' => $galeriFoto]);
    }
    public function tentang()
    {
        $tentang = Home_Prestasi::get();
        return view('HomePage.tentang', ['tentang' => $tentang]);
    }
    public function siswa()
    {
        $siswa = Siswa::join('kelas', 'kelas.id_kelas', 'siswas.id_kelas')->get();
        return view('HomePage.siswa', ['siswa' => $siswa]);
    }

    public function pendaftaran()
    {
        $informasi = Home_Informasi::where('id', 1)->get();
        return view('HomePage.pendaftaran', ['informasi' => $informasi]);
    }

    public function orangtua_login()
    {
        return view('HomePage.orangtua_login');
    }

    public function orangtua_home()
    {
        if (Auth::guard('ortu')->check()) {
            $nis = Auth::guard('ortu')->user()->nis;
            $kelas = Siswa::where('nis', $nis)->value('id_kelas');
            $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')
                ->join('kelas', 'kelas.id_kelas', 'siswas.id_kelas')
                ->where('nis', $nis)->get();
            $semester = "ganjil";
            $nilai = Nilai::join('pelajarans', 'pelajarans.id', 'nilais.id_pelajaran')
                ->where('id_kelas', $kelas)
                ->where('nis', $nis)
                ->where('semester', $semester)
                ->get();
            $sikap = Sikap::where('id_kelas', $kelas)->where('nis', $nis)->where('semester', $semester)->get();
            return view('HomePage.orangtua_home', ['nilai' => $nilai, 'siswa' => $siswa, 'semester' => $semester, 'sikap' => $sikap]);
        } else {
            return redirect('/orangtua_login');
        }
    }
    public function orangtua_homes($sem)
    {
        if (Auth::guard('ortu')->check()) {
            $nis = Auth::guard('ortu')->user()->nis;
            $kelas = Siswa::where('nis', $nis)->value('id_kelas');
            $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')
                ->join('kelas', 'kelas.id_kelas', 'siswas.id_kelas')
                ->where('nis', $nis)->get();
            $semester = $sem;
            $nilai = Nilai::join('pelajarans', 'pelajarans.id', 'nilais.id_pelajaran')
                ->where('id_kelas', $kelas)
                ->where('nis', $nis)
                ->where('semester', $semester)
                ->get();
            $sikap = Sikap::where('id_kelas', $kelas)->where('nis', $nis)->where('semester', $semester)->get();
            return view('HomePage.orangtua_home', ['nilai' => $nilai, 'siswa' => $siswa, 'semester' => $semester, 'sikap' => $sikap]);
        } else {
            return redirect('/orangtua_login');
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
