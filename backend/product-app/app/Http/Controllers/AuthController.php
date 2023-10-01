<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate(
            $request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
        ], [
            'required' => 'Form Tidak Boleh Kosong!',
            'unique' => 'Email sudah terdaftar!',
        ]);

        $data = $request->all();
        $password = Str::random(6);
        $data['password'] = bcrypt($password);
        $data['role'] = 2;

        User::create($data);
        return redirect('/login')->with('status', 'Registrasi berhasil. Password : ' . $password);
    }
    
    public function view_register()
    {
        return view('auth.register');
    }

    public function view_login()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(auth()->user()->role == 2) {
                if(auth()->user()->status == 0) {
                    return redirect()->back()->with('error', 'Akun anda belum diapprove');
                }
                return redirect('/');
            } else {
                return redirect('/dashboard');
            }
        }
        return redirect()->back()->with('error', 'Username/Password tidak sesuai');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
