<?php

namespace App\Http\Controllers;

use App\Models\Absen_Siswa;
use App\Models\Disabilitas;
use App\Models\jadwal;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
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
        $sem=null;


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


            return view('Admin.admin_nilai_siswa', ['sem'=>$sem,'id_kelas'=>$id_kelas,'nis'=>$nis,'orang'=>$orang,'nilai' => $nilai, 'jadwal' => $jadwal, 'siswa' => $siswa, 'kelas' => $kelas, 'dis' => $dis, 'kel' => $kel]);
        } else {
            return redirect('/login');
        }
    }

    public function detailKelas($kelu)
    {
        $nis = null; 
        $id_kelas = null;
        $sem=null;

        $nilai = Nilai::get();
        $orang = array();
        $kelas = Kelas::where('wali', Auth::user()->name)->get();
        $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')->join('kelas','kelas.id_kelas','siswas.id_kelas')->where('siswas.id_kelas', $kelu)->paginate(10);
        $jadwal = array();
        return view('Admin.admin_nilai_siswa', ['sem'=>$sem,'id_kelas'=>$id_kelas,'nis'=>$nis,'orang'=>$orang,'nilai' => $nilai, 'jadwal' => $jadwal, 'siswa' => $siswa,  'kelas' => $kelas, 'kelu' => $kelu]);
    }

    public function detailNilai($kelu,$nis,$semester)
    {
      
        $orang = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')->where('nis',$nis)->get();
        $kelas = Kelas::where('wali', Auth::user()->name)->get();
        $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', 'siswas.id_disabilitas')->join('kelas','kelas.id_kelas','siswas.id_kelas')->where('siswas.id_kelas', $kelu)->paginate(10);
        $jadwal = jadwal::join('pelajarans', 'pelajarans.id', 'jadwals.id_pelajaran')
            ->join('kelas', 'kelas.id_kelas', 'jadwals.id_kelas')->where('jadwals.id_kelas', $kelu)->where('semester',$semester)->get();
        $nilai = Nilai::join('pelajarans','pelajarans.id','nilais.id_pelajaran')->where('id_kelas',$kelu)->where('nis',$nis)->where('semester',$semester)->get();
        $nis = $nis;    
        $id_kelas = $kelu;
        $sem=$semester;
        return view('Admin.admin_nilai_siswa', ['sem'=>$sem,'id_kelas'=>$id_kelas,'nis'=>$nis,'orang'=>$orang,'nilai' => $nilai, 'jadwal' => $jadwal, 'siswa' => $siswa,  'kelas' => $kelas, 'kelu' => $kelu]);
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
            $inputCount = $request->pelajaran;
            for ($i = 0; $i < count($inputCount); $i++) {
                Nilai::create([
                    'nis' => $request->nis,
                    'id_pelajaran' => $request->pelajaran[$i],
                    'id_kelas' => $request->kelas[$i],
                    'nilai_pengetahuan' => $request->nilai_pengetahuan[$i],
                    'nilai_keterampilan' => $request->nilai_keterampilan[$i],
                    'note_pengetahuan' => $request->note_pengetahuan[$i],
                    'note_keterampilan' => $request->note_keterampilan[$i],
                    'semester' => $request->semester[$i],
                ]);
            }

            return redirect()->back();
        } catch (Exception $e) {
            echo ($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
