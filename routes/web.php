<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

use App\Http\Controllers\LoopsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Form;

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
Route::get('/with_function/{id}',[Auth::class,'withfunction']);

//Looping Controller Routes
Route::get('/loopdemo',[LoopsController::class,'loop_demo']);

Route::get('/demo', function () {
    return view('demo');
    });

    Route::get('/sample', function () {
        return view('sample');
        });

// Component
Route ::get('/alert_component',[LoopsController::class,'alertController']);

//Helper
Route ::get('/array-helper',[UserController::class,'arrayHelpers']);

//String Helper
Route ::get('/string-helper',[UserController::class,'stringHelpers']);
Route ::get('/string-fluent',[UserController::class,'fluentStringHelpers']);
Route ::get('/url-helper',[UserController::class,'urlHelpers']);

// HTTP Client
Route ::get('/http-client',[UserController::class,'httpClient']);

Route::View('login','sample');

Route ::post('/login-method',[UserController::class,'loginmethod']);

// Working On Session
Route ::get('/session-method',[UserController::class,'sessionmethod']);

// Submiting Form Data 
Route::View('/form','form');
Route::post('/Form',[Form::class,'formdata']);

// Creating tempalate
Route::get('/temp', function()

{

   return View::make('pages.home');

});
