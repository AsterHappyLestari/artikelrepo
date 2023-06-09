<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        // return view('dashboard.index');
        $user = DB::table('users')->count();
        $mhs = DB::table('tb_mahasiswa')->count();
        $jur = DB::table('tb_jurnal')->count();
        return view ('dashboard.index', compact('user','mhs','jur'));

    }

    public function halamansatu(){
        return view('halaman.halaman-satu');
    }

    public function halamandua(){
        return view('halaman.halaman-dua');
    }

}
