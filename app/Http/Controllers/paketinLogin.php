<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class paketinLogin extends Controller
{
    public function display()
    {
        DB::table('usagelog')->insert([
            'actionName' => 'Login Page Visited'
        ]);
        return view('paketin.paketinLogin');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $user = Auth::user()->name;
            DB::table('usagelog')->insert([
                'actionName' => 'User '.$user.' Logging In'
            ]);
            return redirect()->intended('/');
        }

        session()->flash('error', 'Email atau Password Salah.');
        return redirect('/login');
    }
}
