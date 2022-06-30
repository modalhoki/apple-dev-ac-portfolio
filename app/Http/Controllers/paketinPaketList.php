<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinPaketList extends Controller
{
    public function display() {
        DB::table('usagelog')->insert([
            'actionName' => 'All Transactions Visited'
        ]);
        $varlink = request()->segments();
        $datapaket = DB::table('datapaket2')->paginate();
        $user = Auth::user();
        return view('paketin.paketinPaketList', ['datapaket' => $datapaket, 'link' => $varlink, 'userdata' => $user]);
    }
}
