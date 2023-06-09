<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Jurnal;
use File;

class HalamanController extends Controller
{

    public function index(){
        $data = DB::table('tb_jurnal')->get();
        return view('halaman.index',compact('data'));
        // return view('halaman.index');
    }

    public function halamansatu(){
        return view('halaman.halaman-satu');
    }

    public function halamandua(){
        return view('halaman.halaman-dua');
    }

}
