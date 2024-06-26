<?php

namespace App\Http\Controllers;

use App\Models\Disabilitas;
use App\Models\Guru;
use App\Models\jadwal;
use App\Models\Kelas;
use App\Models\Pelajaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $guru = Guru::get();
            $disab = "";
            $kelu = "";
            $pelajaran = Pelajaran::get();
            $jadwal = array();
            $kelas = Kelas::get();
            $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', '=', 'siswas.id_disabilitas')->join('kelas','kelas.id_kelas','siswas.id_kelas');
            $disabilitas = Disabilitas::get();
            return view('Admin.admin_data_jadwal_pelajaran', ['pelajaran'=>$pelajaran, 'jadwal'=>$jadwal, 'siswa' => $siswa, 'disabilitas' => $disabilitas, 'kelas' => $kelas, 'disab' => $disab, 'kelu' => $kelu, 'guru' => $guru]);
        } else {
            return view('Admin.login');
        }
    }
    public function jadwalDetail($kelu)
    {
        $guru = Guru::get();
        $kelas = Kelas::get();
        $pelajaran = Pelajaran::get();
        $jadwal = jadwal::join('pelajarans','pelajarans.id','jadwals.id_pelajaran')
        ->join('kelas','kelas.id_kelas','jadwals.id_kelas')->where('kelas', $kelu)->get();
        $siswa = Siswa::join('disabilitas','disabilitas.id_disabilitas','siswas.id_disabilitas')->join('kelas','kelas.id_kelas','siswas.id_kelas')->where('siswas.id_kelas', $kelu)->paginate(10);
        $disabilitas = Disabilitas::get();
        return view('Admin.admin_data_jadwal_pelajaran', ['pelajaran'=>$pelajaran, 'jadwal'=>$jadwal, 'siswa' => $siswa, 'disabilitas' => $disabilitas, 'kelas' => $kelas, 'kelu' => $kelu, 'guru' => $guru]);
    }


    public function tambahjadwal(Request $request){
        jadwal::create([
            'id_kelas' => $request->id_kelas,
            'id_pelajaran' => $request->id_pelajaran,
            'semester' => $request->semester,

        ]);
        return redirect()->back();
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
        jadwal::find($id)->delete();
    }
}
