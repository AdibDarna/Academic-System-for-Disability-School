<?php

namespace App\Http\Controllers;

use App\Models\Home_Feedback;
use Illuminate\Http\Request;

class HomeFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        Home_Feedback::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_hp' => $request->notelp,
            'isi_pesan' => $request->isi_pesan,

        ]);
        return redirect()->back()->with('message', 'Terima Kasih Atas Masukan Anda');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home_Feedback $home_Feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home_Feedback $home_Feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home_Feedback $home_Feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home_Feedback $home_Feedback)
    {
        //
    }
}
