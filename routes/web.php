<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItopReplaceController;
use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class);

// Itop Replace Controller
Route::resource('itop-replace', ItopReplaceController::class);

// Supervisor Controller
Route::resource('supervisor', SupervisorController::class);

Route::get('lifting', function(){
    return view('lifting');
});
Route::get('sales', function(){
    return view('sales');
});
Route::get('stock', function(){
    return view('stock');
});

Route::get('test', function(){
    return view('test');
});