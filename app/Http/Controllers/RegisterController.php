<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validateData = $request->validate([

            'name' => ['required','min:3','max:255','unique:users'],
            'level' => 'mhs',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:255'

        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        
        // $request->session()->flash('success','please login!');
        
        return redirect('/login')->with('success','please login!');
    }
}
