<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function postlogin(Request $request){
        //dd($request->all());

        if (Auth::guard('mahasiswa')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/halaman');
        }else if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/dashboard');
        }
        return redirect('login');
    }

    public function logout(Request $request){
        if (Auth::guard('mahasiswa')->check()){
            Auth::guard('mahasiswa')->logout();
        }elseif(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('login');
    }

    public function tampilprofil(){
        $data = DB::table('users')->get();
        // ->leftJoin('tb_mahasiswa','tb_mahasiswa.id_mhs','=','users.id')->get();
        // ->leftjoin('tb_mahasiswa','tb_mahasiswa.id_mhs','=','users.id')->get();
        return view('login.profil',compact('data'));
    }

}
