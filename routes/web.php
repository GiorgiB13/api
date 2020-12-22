<?php

use Illuminate\Support\Facades\Http;
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

    $response = Http::post('http://example.com/login', [
        'name' => 'Steve',
        'role' => 'Network Administrator',
    ]);

    return $response->status();

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users/create', [\App\Http\Controllers\Users\UserController::class, 'create'])->name('users.create');

Route::post('users/store', [\App\Http\Controllers\Users\UserController::class, 'store'])->name('users.store');

Route::get('users/{user}', [\App\Http\Controllers\Users\UserController::class, 'show'])->name('users.show');





