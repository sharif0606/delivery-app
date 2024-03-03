<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as home;
use App\Http\Controllers\AuthenticationController as auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [home::class,'index'])->name('home');
Route::get('/order-track', [home::class,'orderTrack'])->name('orderTrack');

/* auth route*/
Route::get('/sign-in', [auth::class,'login'])->name('login');

