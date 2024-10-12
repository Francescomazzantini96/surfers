<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('/pages/surfers');
});