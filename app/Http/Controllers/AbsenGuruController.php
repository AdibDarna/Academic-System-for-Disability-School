<?php

namespace App\Http\Controllers;

use App\Models\Absen_Guru;
use App\Models\Guru;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role == "admin") {
       
            $guru = Guru::get();
            $absenGuru = Guru::join('absen_gurus', 'absen_gurus.id_guru', '=', 'gurus.nip')->get();
            return view('Admin.admin_data_absen_guru', ['guru' => $guru, 'absenguru' => $absenGuru]);
        } elseif (Auth::check() && Auth::user()->role == "guru") {
            $nip = Guru::select('nip')->where('email', Auth::user()->email)->first();
            $guru = Guru::where('nip', $nip->nip)->get();
            $absenGuru = Guru::join('absen_gurus', 'absen_gurus.id_guru', '=', 'gurus.nip')->where('gurus.nip', $nip->nip)->get();
            return view('Admin.admin_data_absen_guru', ['guru' => $guru, 'absenguru' => $absenGuru]);
        } else {
            return redirect('/login');
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
            Absen_Guru::create([
                'id_guru' => $request->nip,
                'kehadiran' => $request->absensi,
            ]);

            return redirect()->back();
        } catch (Exception $e) {
            echo ($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Absen_Guru $absen_Guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen_Guru $absen_Guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen_Guru $absen_Guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen_Guru $absen_Guru)
    {
        //
    }
}
