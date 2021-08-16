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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

/* NOTE: namespaces <=> folders? Example: this would go to Controllers/Site/HomeController.php
 * 	Route::namespace('Site')->group( function () {
 *		Route::get('/', 'HomeController@index');
 *  })
 **/

// TODO: Would it be better to use strings instead of ::classes? this seems more robust.
Route::get('/', HomeController::class);
Auth::routes();
// Route::get('/login', 'LoginController');

// Default values in this file
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
