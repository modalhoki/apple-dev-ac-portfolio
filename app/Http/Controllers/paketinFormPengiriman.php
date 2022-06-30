<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paketinFormPengiriman extends Controller
{
    public function display($request) {
        $varlink = request()->segments();
        return view('paketin.paketinFormPengiriman', ['link' => $varlink]);
    }
}
