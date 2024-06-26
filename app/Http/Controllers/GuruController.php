<?php

namespace App\Http\Controllers;

use App\Models\Disabilitas;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $guru = Guru::orderBy('created_at','DESC')->paginate(5);
            $user = User::get();
            return view('Admin.admin_data_guru', ['guru' => $guru, 'user' => $user]);
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
            $tujuan_upload = 'image/guru';
            $file->move($tujuan_upload, $nama_file);
            $query = Guru::create([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'bidang' => $request->bidang,
                'jabatan' => $request->bidang,
                'tahun_masuk' => $request->tahun_masuk,
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
    public function adduser($id)
    {

        $guru = Guru::where('nip', $id)->get();
        foreach ($guru as $gu) {
            User::factory()->create([
                'name' => $gu->nama,
                'email' => $gu->email,
                'password' => Hash::make($gu->password),
                'foto'=> $gu->foto,
                'role' => 'guru'
            ]);
        }
        return redirect()->back();
    }

    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Guru::find($id)->delete();
        return redirect()->back();
    }
}
