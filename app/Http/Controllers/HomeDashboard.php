<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeDashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $countJk = Siswa::select(DB::raw('COUNT(*) as total'),'jenis_kelamin')->groupBy('jenis_kelamin')->get();
            $countDis = Siswa::select(DB::raw('COUNT(*) as total'),'jenis_kelamin')->join('disabilitas','disabilitas.id_disabilitas','siswas.id_disabilitas')->groupBy('nama_disabilitas')->get();
            $guru = Guru::orderBy('created_at','DESC')->paginate(5);
            return view('Admin.admin_dashboard', ['guru' => $guru,'countJK' => $countJk,'countDis'=> $countDis]);
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
