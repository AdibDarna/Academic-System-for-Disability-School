<?php

namespace App\Http\Controllers;

use App\Models\Home_Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $informasi = Home_Informasi::orderBy('created_at','DESC')->get();
            return view('Admin.admin_profil_informasi', ['informasi' => $informasi]);
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
    public function show(Home_Informasi $home_Informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home_Informasi $home_Informasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $query = Home_Informasi::where('id', $request->id)->update(['informasi' => $request->informasi]);
        if ($query) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home_Informasi $home_Informasi)
    {
        //
    }
}
