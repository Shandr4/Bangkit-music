<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('index');


// Route::get('/', function () {
//     return view('index
//     ');
// });
