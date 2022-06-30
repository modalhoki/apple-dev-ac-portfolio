<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinEditProfile extends Controller
{
    public function display() {
        DB::table('usagelog')->insert([
            'actionName' => 'Edit Profile Visited'
        ]);
        $user = Auth::user();
        $varlink = request()->segments();
        return view('paketin.paketinEditProfile', [ 'userdata' => $user, 'link' => $varlink ]);
    }

    public function edit(Request $request) {
        $user = Auth::user();
        DB::table('usagelog')->insert([
            'actionName' => 'User '.$user->name.' Edited their profile'
        ]);
        DB::table('users')->where('id', $user->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'noHp' => $request->noHp,
            'alamat' => $request->alamat
        ]);
        return redirect('myprofile');
    }
}
