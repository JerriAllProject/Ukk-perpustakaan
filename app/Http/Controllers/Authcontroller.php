<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use Illuminate\Contracts\Session\Session;

class Authcontroller extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        // cek apakah login valid
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1 || Auth::user()->role_id == 3){
                return redirect('dashboard');
            }

            $request->session()->regenerate();
            if(Auth::user()->role_id == 2 ){
                $request->session()->regenerate();
                return redirect('profile');
            }

            // $request->session()->regenerate();
            // return redirect()->intended('dashboard');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'login gagal');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    public function registerproses(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $check = User::where('username',$request->input('username'))->get()->count();
    if($check==0){
        $user = User::create($data);
        Session::flash('status', 'success');
        Session::flash('message', 'register berhasil,tunggu sebentar');
        return redirect('login');
    }else{
        Session::flash('status', 'success');
        Session::flash('message', 'username sudah digunakan!!');
        return redirect('register') ;
    }
        

    }

}
