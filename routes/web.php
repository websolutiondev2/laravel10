<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route ::view('/test','test');
Route::get('/users',[Auth::class,'index'])->middleware('Abc');

Route::view('/user','found')->middleware('Abc');
// Route::view('/user','found');
Route :: view('/notfound','notfound');

Route::get('/nesting-view',[Auth::class,'nesting_view']);
Route::get('/exit-view',[Auth::class,'viewexist']);

//Passing Data
Route::get('/name_array',[Auth::class,'nameArray']);
Route::get('/compact_function',[Auth::class,'compactFunction']);
Route::get('/with_function',[Auth::class,'withfunction']);
