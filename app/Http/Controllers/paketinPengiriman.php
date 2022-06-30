<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinPengiriman extends Controller
{
    public function display() {
        DB::table('usagelog')->insert([
            'actionName' => 'Pengiriman Visited'
        ]);
        $varlink = request()->segments();
        $user = Auth::user();
        $datapaket = DB::table('datapaket2')->where('idUsers', $user->id)->where('status', 'pengiriman')->get();
        return view('paketin.paketinPengiriman', ['datapaket' => $datapaket, 'link' => $varlink, 'userdata' => $user]);
    }

    public function confirm($request) {
        DB::table('usagelog')->insert([
            'actionName' => 'datapaket2 with ID '.$request.' has been confirmed'
        ]);
        DB::table('datapaket2')->where('id', $request)->update([
            'status' => 'keranjang'
        ]);
        return redirect('/pengiriman');
    }

    public function delete($request) {
        DB::table('datapaket2')->where('id', $request)->delete();
        DB::table('usagelog')->insert([
            'actionName' => 'datapaket2 with ID '.$request.' has been deleted'
        ]);
        return redirect('/pengiriman');
    }
}
