<?php

namespace App\Http\Controllers;

use App\Models\Home_Prestasi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $prestasi = Home_Prestasi::orderBy('created_at','DESC')->paginate(5);
            return view('Admin.admin_profil_prestasi', ['prestasi' => $prestasi]);
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
            $this->validate($request, [
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'image/prestasi';
            $file->move($tujuan_upload, $nama_file);
            $query = Home_Prestasi::create([
                'judul_prestasi' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama_file,
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
    public function show(Home_Prestasi $home_Prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home_Prestasi $home_Prestasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home_Prestasi $home_Prestasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Home_Prestasi::find($id)->delete();
        return redirect()->back();
    }
}
