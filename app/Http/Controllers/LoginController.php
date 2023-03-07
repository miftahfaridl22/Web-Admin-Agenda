<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.v_login');
    }

    public function prosesLogin(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'password' => 'required'
        ],[
            'nip.required' => 'NIP harus diisi!',
            'password.required' => 'Password harus diisi!'
        ]);

        $user = User::where('nip', $request->nip)->first();

        if($user && Hash::check($request->password, $user->password) && $user->platform == 'web') {

            $request->session()->regenerate();
        
            return redirect()->intended('agenda');
        }

        return redirect('/')->withSuccess('NIP atau Username anda tidak valid!');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }

}
