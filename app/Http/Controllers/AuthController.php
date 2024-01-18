<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function loginView():View
    {
        return view('login');
    }
    function loginlogic(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:8',
        ]);
        $data['email'] = str($data['email'])->lower();

        if(Auth::attempt($data)){
            $request->session()->regenerate();

            return redirect('/');
        }

        Alert::toast('Email atau Password salah', 'error');
        return redirect('/login');
    }

    public function registerView():View
    {
        return view('register');
    }

    public function registerlogic(Request $request)
    {
        $data = $request->validate([
           'email' => 'required|max:255',
           'notelp' => 'required|max:15',
           'password' => 'required|min:8',
           'passwordconfirm' => 'required|min:8'
        ]);

        if($data['password'] != $data['passwordconfirm']){
            throw ValidationException::withMessages([
                'konfirmasipassword' => 'Konfirmasi password tidak sama'
            ]);
        }

        $user = new User();
        $user->email = str($data['email'])->lower();
        $user->nomortelp = $data['notelp'];
        $user->password = Hash::make($data['password']);

        try{
            $user->save();
        }
        catch (Exception $e){
            Alert::toast('Email sudah terdaftar', 'error');
            return redirect('/register');
        }


        Alert::toast('Daftar Berhasil, silakan login', 'success');
        return redirect('/login');
    }

    public function logoutlogic(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
