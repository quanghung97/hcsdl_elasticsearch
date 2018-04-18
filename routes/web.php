<?php

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
include_once 'backend/admin.php';


Route::get('/generic',function(){
  return view('generic');
})->name('generic');
Route::get('/elements',function(){
  return view('elements');
})->name('elements');
Route::get('/layouts',function(){
  return view('layouts.layouts');
});
