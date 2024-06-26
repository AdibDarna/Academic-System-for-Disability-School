<?php

namespace App\Http\Controllers;

use App\Models\Disabilitas;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $kelas = Kelas::orderBy('created_at','DESC')->get();
            $siswa = Siswa::join('disabilitas', 'disabilitas.id_disabilitas', '=', 'siswas.id_disabilitas')->orderBy('siswas.created_at','DESC')->paginate(5);
            $disabilitas = Disabilitas::get();
            return view('Admin.admin_data_siswa', ['siswa' => $siswa, 'disabilitas' => $disabilitas, 'kelas' => $kelas]);
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
           if ($request->has("foto")) {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'image/siswa';
            $file->move($tujuan_upload, $nama_file);
            $query = Siswa::create([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tahun_masuk' => $request->tahun_masuk,
                'id_disabilitas' => $request->disabilitas,
                'id_kelas' => $request->kelas,
                'catatan' => $request->catatan,
                'foto' => $nama_file,
            ]);
           }else{
            $query = Siswa::create([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tahun_masuk' => $request->tahun_masuk,
                'id_disabilitas' => $request->disabilitas,
                'id_kelas' => $request->kelas,
                'catatan' => $request->catatan,
            ]);
           }

           

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
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect()->back();
    }
}
