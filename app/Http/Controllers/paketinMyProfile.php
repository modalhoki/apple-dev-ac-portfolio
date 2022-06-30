<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinMyProfile extends Controller
{
    public function display() {
        $user = Auth::user();
        $link = request()->segments();
        DB::table('usagelog')->insert([
            'actionName' => 'User '.$user->name.' Visited their profile page.'
        ]);
        return view('paketin.paketinMyProfile', ['userdata' => $user, 'link' => $link]);
    }
}
