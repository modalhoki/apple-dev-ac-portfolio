<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paketinInvoice extends Controller
{
    public function display() {
        $varlink = request()->segments();
        return view('paketin.paketinInvoice', ['link' => $varlink]);
    }
}
