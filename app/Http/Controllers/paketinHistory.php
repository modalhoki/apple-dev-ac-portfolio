<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinHistory extends Controller
{
    public function display() {
        DB::table('usagelog')->insert([
            'actionName' => 'Transaction History Visited'
        ]);
        $user = Auth::user();
        $varlink = request()->segments();
        $varpaket = DB::table('datapaket2')->where('idUsers', $user->id)->get();
        return view('paketin.paketinHistory', ['datapaket' => $varpaket, 'link' => $varlink, 'userdata' => $user]);
    }    
}
