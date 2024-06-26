<?php

namespace App\Http\Controllers;

use App\Models\Absen_Siswa;
use App\Models\Disabilitas;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dis = null;
        $kel = null;

        if (Auth::check()) {
            
            $kels = Kelas::where('wali',Auth::user()->name)->get();
            foreach($kels as $k){
                $dis = $k->id_disabilitas;
                $kel = $k->id_kelas;
                break;
            };
            
            $kelas = Kelas::get();
            $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', '=', 'siswas.id_disabilitas')->get();
            $absensi = Absen_Siswa::get();
            $disabilitas = Disabilitas::get();
            return view('Admin.admin_data_absen_siswa', ['absensi' => $absensi, 'siswa' => $siswa, 'disabilitas' => $disabilitas, 'kelas' => $kelas,'dis'=>$dis,'kel'=>$kel]);
        } else {
            return view('Admin.login');
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
        try {
            $inputCount = $request->nis;
            for ($i = 0; $i < count($inputCount); $i++) {
                Absen_Siswa::create([
                    'nis' => $request->nis[$i],
                    'id_disabilitas' => $request->id_disabilitas[$i],
                    'id_kelas' => $request->kelas[$i],
                    'kehadiran' => $request->absensi[$i],

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
    public function show(Absen_Siswa $absen_Siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen_Siswa $absen_Siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen_Siswa $absen_Siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen_Siswa $absen_Siswa)
    {
        //
    }
}
