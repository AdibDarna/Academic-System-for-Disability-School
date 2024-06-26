<?php

namespace App\Http\Controllers;

use App\Models\Home_Extrakulikuler;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeExtrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $extrakulikuler = Home_Extrakulikuler::orderBy('created_at','DESC')->paginate(5);
            return view('Admin.admin_profil_extrakulikuler', ['extrakulikuler' => $extrakulikuler]);
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
            $tujuan_upload = 'image/extrakulikuler';
            $file->move($tujuan_upload, $nama_file);
            $query = Home_Extrakulikuler::create([
                'nama_extrakulikuler' => $request->nama,
                'pembimbing' => $request->pembimbing,
                'nomor_hp' => $request->nomorhp,
                'hari' => $request->hari,
                'waktu' => $request->waktu,
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
    public function show(Home_Extrakulikuler $home_Extrakulikuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home_Extrakulikuler $home_Extrakulikuler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home_Extrakulikuler $home_Extrakulikuler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Home_Extrakulikuler::find($id)->delete();
        return redirect()->back();
    }
}
