<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinTrace extends Controller
{
    public function display() {
        DB::table('usagelog')->insert([
            'actionName' => 'Trace & Track Visited'
        ]);
        $varlink = request()->segments();
        $user = Auth::user();
        return view('paketin.paketinTrace', ['link' => $varlink, 'userdata' => $user]);
    }
}
