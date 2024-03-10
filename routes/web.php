<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as home;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\Backend\DashboardController as dash;
use App\Http\Controllers\Backend\AdminCalcController as calc;
use App\Http\Controllers\Backend\TypeController as dtype;

use App\Http\Controllers\Backend\LocationController as loc;
use App\Http\Controllers\Backend\OrderController as order;
use App\Http\Controllers\Backend\LocationController as dloc;
use App\Http\Controllers\Backend\OrderControllerCus as corder;





use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isCustomer;
use App\Http\Middleware\isDelivaryMan;
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
Route::get('/log-in', [auth::class,'loggedin'])->name('loggedin');
Route::get('/sign-in', [auth::class,'signin'])->name('signin');
Route::post('/sign-up', [auth::class,'register'])->name('register');
Route::post('/sign-in', [auth::class,'login'])->name('login');

Route::group(['middleware'=>isAdmin::class],function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [dash::class,'adminDashboard'])->name('admin.dashboard');
        /* settings */
        Route::resource('type',dtype::class,['as'=>'admin']);

        Route::resource('order',order::class,['as'=>'admin']);
        Route::resource('location',dloc::class,['as'=>'admin']);

        //Route::resource('user',user::class,['as'=>'admin']);
    });
});

Route::group(['middleware'=>isDelivaryMan::class],function(){
    Route::prefix('deliveryman')->group(function(){
        Route::get('/dashboard', [dash::class,'deliverymanDashboard'])->name('deliveryman.dashboard');
        
        /* settings */
    });
});

Route::group(['middleware'=>isCustomer::class],function(){
    Route::prefix('customer')->group(function(){
        Route::get('/dashboard', [dash::class,'deliverymanDashboard'])->name('customer.dashboard');
        /* settings */
        Route::resource('order',corder::class,['as'=>'customer']);

    });
});


Route::get('/costset', [calc::class,'costset'])->name('costcalc');

