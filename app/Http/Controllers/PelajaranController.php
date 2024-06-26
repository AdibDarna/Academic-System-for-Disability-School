<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Pelajaran;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $pelajaran = Pelajaran::orderBy('created_at','DESC')->paginate(5);
            $guru = Guru::get();
            return view('Admin.admin_data_pelajaran', ['pelajaran' => $pelajaran, 'guru' => $guru]);
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

            $query = Pelajaran::create([
                'nama_pelajaran' => $request->nama_pelajaran,
                'nip' => $request->nip,
                'durasi' => $request->durasi,
                'deskripsi' => $request->deskripsi,
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
    public function show(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pelajaran::find($id)->delete();
        return redirect()->back();
    }
}
