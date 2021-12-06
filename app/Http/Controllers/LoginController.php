<?php

namespace App\Http\Controllers;

use App\Rules\CheckEmailHpRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', new CheckEmailHpRule],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        
        if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $msg = 'Akun tidak ditemukan, silakan login menggunakan metode lain';
        }else{
            $msg = 'Akun tidak ditemukan, Gunakan nomor HP yang Anda daftarkan';
        }
        return back()->withErrors([
            'email' => $msg,
        ]);
    }
}
