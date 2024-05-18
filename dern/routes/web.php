<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\KnowladgebaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Models\knowladgebase;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;

Route::get('/', [CustomerController::class,'index']);
Route::resource('knowladgebase',KnowladgebaseController::class);
Route::resource('login',LoginController::class);
Route::get('register',function(){
    return view('register');
});

Route::resource('customers',CustomerController::class);
Route::resource('jobs',JobController::class);
Route::resource('tickets',TicketController::class);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
