<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/home', 'HomeController@userHome')->name('user.home')->middleware('isUser');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('isAdmin');
Route::get('superadmin/home', 'HomeController@superAdminHome')->name('superadmin.home')->middleware('isSuperAdmin');
