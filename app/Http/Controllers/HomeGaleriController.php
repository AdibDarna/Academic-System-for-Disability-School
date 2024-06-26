<?php

namespace App\Http\Controllers;

use App\Models\Home_Galeri;
use App\Models\Home_Galeri_Foto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $galeri = Home_Galeri::orderBy('created_at','DESC')->paginate(5);
            $galeri_foto = Home_Galeri_Foto::get();
            return view('Admin.admin_profil_galeri', ['galeri' => $galeri, 'galeri_foto' => $galeri_foto]);
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
        $idGaleriRand = rand(1, 10000);
        try {
            $this->validate($request, [
                'foto' => 'required',
                'foto.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
            ]);



            if ($request->hasfile('foto')) {
                $files = [];
                foreach ($request->file('foto') as $file) {
                    $name = time() . rand(1, 100) . '.' . $file->extension();
                    $tujuan_upload = 'image/galeri';
                    $file->move($tujuan_upload, $name);
                    $files[] = [
                        'id_galeri' => strval($idGaleriRand),
                        'foto' => $name,
                    ];
                }
                Home_Galeri_Foto::insert($files);
                $query = Home_Galeri::create([
                    'id_galeri' => $idGaleriRand,
                    'judul' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                ]);


                if ($query) {
                    return redirect()->back();
                }
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Home_Galeri $home_Galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home_Galeri $home_Galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home_Galeri $home_Galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Home_Galeri::find($id)->delete();
            Home_Galeri_Foto::where('id_galeri', strval($id))->delete();
            return redirect()->back();
        } catch (Exception $e) {
            dd($e);
        }
    }
}
