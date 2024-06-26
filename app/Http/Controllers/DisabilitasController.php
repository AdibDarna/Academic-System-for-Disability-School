<?php

namespace App\Http\Controllers;

use App\Models\Disabilitas;
use App\Models\Kelas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisabilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $disabilitas = Disabilitas::orderBy('created_at','DESC')->paginate(5);
            return view('Admin.admin_data_disabilitas', ['disabilitas' => $disabilitas]);
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
            $randId = time();
          

            $query = Disabilitas::create([
                'id_disabilitas' => $randId,
                'nama_disabilitas' => $request->nama_disabilitas,
                
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
    public function show(Disabilitas $disabilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disabilitas $disabilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disabilitas $disabilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Disabilitas::find($id)->delete();
        return redirect()->back();
    }
}
