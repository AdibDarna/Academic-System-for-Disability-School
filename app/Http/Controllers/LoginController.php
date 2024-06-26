<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('profil_dasbor');
        } else {
            return view('Admin.login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('profil_dasbor');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }


    public function actionloginOrangtuas(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::guard('ortu')->attempt($data)) {
            return redirect('/orangtua_home');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }

    public function actionlogoutOrangtuas()
    {
        Auth::guard('ortu')->logout();
        return redirect('/orangtua_login');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
