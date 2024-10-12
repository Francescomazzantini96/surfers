<?php

use App\Mail\SurfersMail;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Models\User;


Route::get('/', function () {
    return view('/pages/surfers');
});

Route::get('surfersMail', function () {
    $user = User::get()->first();
    return new SurfersMail($user);
    //$mail = new SurfersMail($user);
    //Mail::send($mail);
});