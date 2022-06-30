<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class paketinKeranjang extends Controller
{
    public function display() {
        DB::table('usagelog')->insert([
            'actionName' => 'Keranjang Visited'
        ]);
        $user = Auth::user();
        $varlink = request() -> segments();
        $datapaket = DB::table('datapaket2')->where('idUsers', $user->id)->where('status', 'keranjang')->get();
        return view('paketin.paketinKeranjang', ['link' => $varlink, 'datakeranjang' => $datapaket, 'userdata' => $user]);
    }

    public function delete($request) {
        DB::table('usagelog')->insert([
            'actionName' => 'datapaket2 with ID '.$request.' has been deleted from keranjang'
        ]);
        DB::table('datapaket2')->where('id', $request)->delete();
        return redirect('/keranjang');
    }

    public function pay($request) {
        DB::table('usagelog')->insert([
            'actionName' => 'datapaket2 with ID '.$request.' has been paid'
        ]);
        DB::table('datapaket2')->where('id', $request)->update([
            'status' => 'paid',
            'noResi' => mt_rand(100000000000,999999999999)
        ]);
        return redirect('/keranjang');
    }
}
