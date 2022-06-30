<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinCustomerList extends Controller
{
    public function display()
    {
        DB::table('usagelog')->insert([
            'actionName' => 'Customer List Visited'
        ]);
        $varlink = request()->segments();
        $varcustomer = DB::select('select * from users where sebagai = "Customer"');
        $user = Auth::user();
        return view('paketin.paketinCustomerList', ['daftarcustomer' => $varcustomer, 'link' => $varlink, 'userdata' => $user]);
    }

    public function delete($request)
    {
        $courrier = User::all()->where('id', $request)->first();
        DB::table('usagelog')->insert([
            'actionName' => 'A Customer account ' . $courrier->name . ' has been deleted'
        ]);
        $user = User::find($request);
        $user->delete();
        return redirect('/customerlist');
    }

    public function resetpwd($request)
    {
        $customer = User::all()->where('id', $request)->first();
        DB::table('usagelog')->insert([
            'actionName' => 'A Customer ' . $customer->name . ' password has been reset'
        ]);
        $user = User::find($request);
        $user->update([
            'password' => '$2y$10$lYfH6YTcwRGmNR5QKrDOEu0GONv02YZ8kmFfw2iv8ZwmR5v9yNHD.'
        ]);
        return redirect('/customerlist');
    }
}
