<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Sikap;
use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SikapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dis = null;
        $kel = null;
        $nis = null;
        $id_kelas = null;
        $sem = null;


        if (Auth::check()) {
            $orang = array();

            $kels = Kelas::where('wali', Auth::user()->name)->get();
            foreach ($kels as $k) {
                $dis = $k->id_disabilitas;
                $kel = $k->kelas;
                break;
            };
            $jadwal = array();
            $kelas = Kelas::where('wali', Auth::user()->name)->get();
            $siswa = array();
            $nilai = array();
            $orang = array();


            return view('Admin.admin_sikap_siswa', ['sem' => $sem, 'id_kelas' => $id_kelas, 'nis' => $nis, 'orang' => $orang, 'nilai' => $nilai, 'jadwal' => $jadwal, 'siswa' => $siswa, 'kelas' => $kelas, 'dis' => $dis, 'kel' => $kel]);
        } else {
            return redirect('/login');
        }
    }
    public function detailKelas($kelu)
    {
        $nis = null;
        $id_kelas = null;
        $sem = null;

        $nilai = Sikap::get();
        $orang = array();
        $kelas = Kelas::where('wali', Auth::user()->name)->get();
        $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')->join('kelas', 'kelas.id_kelas', 'siswas.id_kelas')->where('siswas.id_kelas', $kelu)->paginate(10);
        $jadwal = array();
        return view('Admin.admin_sikap_siswa', ['sem' => $sem, 'id_kelas' => $id_kelas, 'nis' => $nis, 'orang' => $orang, 'nilai' => $nilai, 'jadwal' => $jadwal, 'siswa' => $siswa,  'kelas' => $kelas, 'kelu' => $kelu]);
    }

    public function detailNilai($kelu, $nis, $semester)
    {

        $orang = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')->where('nis', $nis)->get();
        $kelas = Kelas::where('wali', Auth::user()->name)->get();
        $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')->join('kelas', 'kelas.id_kelas', 'siswas.id_kelas')->where('siswas.id_kelas', $kelu)->paginate(10);
        $nilai = Sikap::where('id_kelas', $kelu)->where('nis', $nis)->where('semester', $semester)->get();
        $nis = $nis;
        $jadwal = array();
        $id_kelas = $kelu;
        $sem = $semester;
        return view('Admin.admin_sikap_siswa', ['sem' => $sem, 'id_kelas' => $id_kelas, 'nis' => $nis, 'orang' => $orang, 'nilai' => $nilai, 'jadwal' => $jadwal, 'siswa' => $siswa,  'kelas' => $kelas, 'kelu' => $kelu]);
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
        try {

            Sikap::create([
                'nis' => $request->nis,
                'id_kelas' => $request->kelas,
                'spiritual' => $request->spiritual,
                'sosial' => $request->sosial,
                'semester' => $request->semester,


            ]);
            return redirect()->back();
        } catch (Exception $e) {
            echo ($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Sikap $sikap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sikap $sikap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sikap $sikap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sikap $sikap)
    {
        //
    }
}
