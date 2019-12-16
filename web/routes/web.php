<?php

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

Route::get('/', function () {
    return view('pages.login');
});


    Route::get('/home', function(){
        return view('pages.dashboard');
    })->name("home");


Route::get("register",function(){
    return view('pages.register');
})->name("register");

Route::get("login",function(){
    return view('pages.dashboard');
})->name("login");


Route::resource('kamar', 'kamarcontroller');



Route::get("/lihatkamar/list",function(){
    return view('pages.lihatkamar.list');
});

Route::get("/pegawai",function(){
    return view('pages.pegawai.list');
});
Route::get("/pegawai/form",function(){
    return view('pages.pegawai.form');
});
