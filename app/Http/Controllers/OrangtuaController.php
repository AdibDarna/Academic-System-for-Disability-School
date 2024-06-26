<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
           $dataSiswa = Siswa::get();
            $siswa = Siswa::join('orangtuas', 'orangtuas.nis', '=', 'siswas.nis')->orderBy('orangtuas.created_at','DESC')->paginate(5);
          
            return view('Admin.admin_data_orangtua', ['siswa' => $siswa,'dataSiswa' => $dataSiswa ]);
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

            $query = Orangtua::create([
                'nama_orangtua' => $request->nama_orangtua,
                'notelp' => $request->notelp,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'nis' => $request->nis,

            ]);

            if ($query) {
                return redirect()->back();
            }
        } catch (Exception $e) {
            echo ($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Orangtua $orangtua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orangtua $orangtua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orangtua $orangtua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Orangtua::find($id)->delete();
        return redirect()->back();
    }
}
