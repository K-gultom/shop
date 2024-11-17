<?php

use App\Models\produk;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    
    return view('Home.home');
});

Route::get('/shop', function () {

    $data = produk::all();
    return view('shop.shop',  compact('data'));
});