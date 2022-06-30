<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinCourrierList extends Controller
{
    public function display()
    {
        DB::table('usagelog')->insert([
            'actionName' => 'Courrier List Visited'
        ]);
        $user = Auth::user();
        $varcustomer = DB::select('select * from users where sebagai = "Courrier"');
        $varlink = request()->segments();
        return view('paketin.paketinCourrierList', ['daftarcourrier' => $varcustomer, 'link' => $varlink, 'userdata' => $user]);
    }

    public function delete($request)
    {
        $courrier = User::all()->where('id', $request)->first();
        DB::table('usagelog')->insert([
            'actionName' => 'A Courrier account ' . $courrier->name . ' has been deleted'
        ]);
        $user = User::find($request);
        $user->delete();
        return redirect('/courrierlist');
    }

    public function resetpwd($request)
    {
        $courrier = User::all()->where('id', $request)->first();
        DB::table('usagelog')->insert([
            'actionName' => 'A Courier ' . $courrier->name . ' password has been reset'
        ]);
        $user = User::find($request);
        $user->update([
            'password' => '$2y$10$lYfH6YTcwRGmNR5QKrDOEu0GONv02YZ8kmFfw2iv8ZwmR5v9yNHD.'
        ]);
        return redirect('/courrierlist');
    }
}
