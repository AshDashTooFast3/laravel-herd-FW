<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;


Route::view('/', 'home');


//jobs routes

Route::resource('jobs', JobController::class);


//contact routes

Route::view('/contact', 'contact');
