<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketinPemaketan extends Controller
{
    public function display() {
        DB::table('usagelog')->insert([
            'actionName' => 'Pemaketan Visited'
        ]);
        $varlink = request()->segments();
        $user = Auth::user();
        return view('paketin.paketinPemaketan', ['link' => $varlink, 'userdata' => $user]);
    }

    public function store(Request $request) {
        DB::table('usagelog')->insert([
            'actionName' => 'Saving Pemaketan into datapaket2'
        ]);
        $id = Auth::id();
        DB::table('datapaket2')->insert([
            'namaPenerima' => $request->NamaPenerima,
            'alamatPengiriman' => $request->alamat,
            'namaBarang' => $request->NamaBarang,
            'materialBarang' => $request->MaterialBarang,
            'noPenerima' => $request->NoTelp,
            'typeBarang' => $request->TypeBarang,
            'bahanPengemasan' => $request->BahanPengemasan,
            'status' => 'pengiriman',
            'idUsers' => $id
        ]);

        return redirect('/pengiriman');
    }
}
