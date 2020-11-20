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

Route::get('/', function () {
    return view('pages.site.index');
});

Auth::routes();

//Route::get('/personal', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => '/personal'], static function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('personal');
//    Route::get('profile', 'User@index');
});
