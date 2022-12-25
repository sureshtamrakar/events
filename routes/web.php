<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Front\FrontController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('front.event');
Route::group(['prefix' => '/dashboard', 'middleware' => 'auth'], function () {
    Route::view('/', 'dashboard.home');
    Route::resource('/event', EventController::class);
});

//Route defined for authentication
Auth::routes(['register' => false]);
