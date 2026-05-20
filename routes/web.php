<?php

use App\Models\Seo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $seo = Seo::forPage('home');
    return view('main', compact('seo'));
});
