<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ], [
            'nik.required' => 'NIK wajib diisi !',
            'password.required' => 'Password wajib diisi !',
        ]);

        $login = [
            'nik' => $request->nik,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'user') {
                return redirect('/home');
            }
            // elseif (Auth::user()->role == 'admin') {
            //     return redirect('/adminView');
            // }
        } else {
            return redirect('/')->withErrors('Username atau password yang dimasukkan salah')->withInput();
        }
    }
}
