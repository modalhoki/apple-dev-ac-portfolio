<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;


class paketinRegis extends Controller
{
  public function display()
  {
    DB::table('usagelog')->insert([
      'actionName' => 'Registration Page Visited'
    ]);
    return view('paketin.paketinRegis');
  }

  public function doRegis(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6',
    ]);

    $data = $request->all();
    $check = $this->create($data);

    $user = DB::table('users')->orderBy('id', 'desc')->first();
    DB::table('usagelog')->insert([
      'actionName' => 'User ' . $user->name . ' has been registered'
    ]);

    return redirect('/')->withSuccess('Registration successful.');
  }


  public function create(array $data)
  {
    return User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'sebagai' => 'Administrator'
    ]);
  }
}
