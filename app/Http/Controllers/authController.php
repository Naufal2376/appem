<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function clogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            return redirect()->route('masyarakat');
        }
        return back()->with('error', 'email atau password salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nik' => 'unique:users,nik',
            'email' => 'unique:users,email',
        ],[
            'nik.unique' => 'nik sudah terdaftar',
            'email.unique' => 'email sudah terdaftar',
        ]);
        $password = Hash::make($request->password);
        $data = [
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'telp' => $request->telp,
        ];

        User::create($data);
        return redirect()->route('login')->with('success', 'Berhasil register user baru');
    }

    public function login2()
    {
        return view('auth.admin');
    }

    public function clogin2(Request $request)
    {
        $data = $request->only('email', 'password');
        $role = Admin::where('email', $request->email)->first();

        if(Auth::guard('admin')->attempt($data)){
            if(!$role){
                return back()->with('error', 'email atau password salah');
            }
            elseif($role->role == 'admin'){
                return redirect()->route('admin');
            }
            elseif($role->role == 'petugas'){
                return redirect()->route('petugas');
            }
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('login');
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect()->route('login2');
        }

        return redirect()->route('login');
    }
}