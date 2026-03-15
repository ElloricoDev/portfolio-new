<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/resume', [ResumeController::class, 'show']);