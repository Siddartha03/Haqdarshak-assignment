<?php

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/signin', function () {
//     return view('signin');
// });
// Route::get('/finance', function () {
//     return view('finance');
// });
Route::get('/','financeController@home');
Route::get('/home','financeController@home');
Route::get('/signup','financeController@signup');
Route::get('/signin','financeController@signin');
Route::get('/finance','financeController@finance');
Route::post('/validation','profileController@formSubmit');
Route::post('/logincheck','profileController@login');
Route::post('/checkdata','profileController@checkdata');
Route::get('/getcash','financeController@getcash');
Route::get('/profile','financeController@profile');