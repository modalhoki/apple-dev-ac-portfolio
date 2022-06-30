<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinHome extends Controller
{
    public function display()
    {
        if (Auth::check()) {
            DB::table('usagelog')->insert([
                'actionName' => 'Home Page Visited'
            ]);
            $user = Auth::user();
            $varlink = request()->segments();
            return view('paketin.paketinHome', ['link' => $varlink, 'userdata' => $user]);
        } else {
            return redirect('/login');
        }
    }

    public function doLogout()
    {
        $user = Auth::user()->name;
        DB::table('usagelog')->insert([
            'actionName' => 'User '. $user .' Logging Out'
        ]);
        Auth::logout();
        return redirect('/');
    }
}
