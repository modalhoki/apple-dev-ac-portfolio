<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinStatistics extends Controller
{
    public function display() {
        $varlink = request()->segments();
        $statistik = DB::table('usagelog') -> orderBy('id', 'DESC') -> paginate(10);
        $varlogin = DB::table('usagelog')->where('actionName', 'LIKE', '% Logging In');
        $countlogin = $varlogin->count();
        $user = Auth::user();
        return view('paketin.paketinStatistics', ['statistik' => $statistik, 'link' => $varlink, 'userdata' => $user, 'logincount' => $countlogin]);
    }
}
