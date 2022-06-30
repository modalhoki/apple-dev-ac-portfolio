<?php

use App\Http\Controllers\jemputin;
use App\Http\Controllers\paketinCourrierList;
use App\Http\Controllers\paketinCustomerList;
use App\Http\Controllers\paketinEditProfile;
use App\Http\Controllers\paketinFormPengiriman;
use App\Http\Controllers\paketinHistory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paketinLogin;
use App\Http\Controllers\paketinHome;
use App\Http\Controllers\paketinInvoice;
use App\Http\Controllers\paketinKeranjang;
use App\Http\Controllers\paketinMyProfile;
use App\Http\Controllers\paketinPaketList;
use App\Http\Controllers\paketinPemaketan;
use App\Http\Controllers\paketinPengiriman;
use App\Http\Controllers\paketinRegis;
use App\Http\Controllers\paketinStatistics;
use App\Http\Controllers\paketinTrace;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//paketin
//need login
Route::middleware(['auth'])->group(function () {
    Route::controller(paketinHome::class)->group(function () {
        Route::get('/', 'display')->name('home');
        Route::get('/logout', 'doLogout')->name('logout');
    });

    Route::controller(paketinMyProfile::class)->group(function () {
        Route::get('/myprofile', 'display')->name('myprofile');
    });

    Route::controller(paketinEditProfile::class)->group(function () {
        Route::get('/editprofile', 'display')->name('editprofile');
        Route::post('/editprofile', 'edit')->name('posteditprofile');
    });

    Route::controller(paketinPemaketan::class)->group(function () {
        Route::get('/pemaketan', 'display')->name('pemaketan');
        Route::post('/pemaketan', 'store')->name('postpemaketan');
    });

    Route::controller(paketinPengiriman::class)->group(function () {
        Route::get('/pengiriman', 'display')->name('pengiriman');
        Route::get('/pengiriman/confirm/{id}', 'confirm')->name('konfirmasipengiriman');
        Route::get('/pengiriman/delete/{id}', 'delete')->name('hapuspengiriman');
    });

    Route::controller(paketinFormPengiriman::class)->group(function () {
        Route::get('/pengiriman/form/{id}', 'display')->name('formpengiriman');
    });

    Route::controller(paketinKeranjang::class)->group(function () {
        Route::get('/keranjang', 'display')->name('keranjang');
        Route::get('/keranjang/delete/{id}', 'delete')->name('hapuskeranjang');
        Route::get('/keranjang/pay/{id}', 'pay')->name('bayar');
    });

    Route::controller(paketinInvoice::class)->group(function () {
        Route::get('/invoice', 'display')->name('invoice');
    });

    Route::controller(paketinCustomerList::class)->group(function () {
        Route::get('/customerlist', 'display')->name('customerlist');
        Route::get('/customerlist/delete/{id}', 'delete')->name('deletecustomer');
        Route::get('/customerlist/resetpwd/{id}', 'resetpwd')->name('resetpwdcustomer');
    });

    Route::controller(paketinCourrierList::class)->group(function () {
        Route::get('/courrierlist', 'display')->name('courrierlist');
        Route::get('/courrierlist/delete/{id}', 'delete')->name('deletecourrier');
        Route::get('/courrierlist/resetpwd/{id}', 'resetpwd')->name('resetpwdcourrier');
    });

    Route::controller(paketinStatistics::class)->group(function () {
        Route::get('/statistics', 'display')->name('statistics');
    });

    Route::controller(paketinPaketList::class)->group(function () {
        Route::get('/listpaket', 'display')->name('listpaket');
    });

    Route::controller(paketinHistory::class)->group(function () {
        Route::get('/history', 'display')->name('history');
    });

    Route::controller(paketinTrace::class)->group(function () {
        Route::get('/trace-track', 'display')->name('trace-track');
    });
});

//pre-login
Route::middleware(['guest'])->group(function () {
    Route::controller(paketinRegis::class)->group(function () {
        Route::get('/registrasi', 'display')->name('regis');
        Route::post('/registrasi', 'doRegis')->name('postregis');
    });

    Route::controller(paketinLogin::class)->group(function () {
        Route::get('/login', 'display')->name('login');
        Route::post('/login', 'doLogin')->name('postlogin');
    });
});

// jemputin
Route::get('/jemputin', [jemputin::class, 'halamanUtama'])->name('jemputinhome');

Route::get('/jemputin/product', [jemputin::class, 'halamanProduct'])->name('product');

Route::get('/jemputin/about-us', [jemputin::class, 'halamanAboutUs'])->name('aboutUs');

Route::get('/jemputin/contact-us', [jemputin::class, 'halamanContactUs'])->name('contactUs');

Route::get('/jemputin/order', [jemputin::class, 'halamanOrder'])->name('order');