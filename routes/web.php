<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LinkController;
use App\Models\User;
use App\Models\Link;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::get('/create', [UserController::class,'create'])->name('ad.create');

Route::post('/store', [UserController::class,'store'])->name('ad.store');

Route::get('/finish', [UserController::class,'store']);


Route::get('/login', [AuthController::class, 'LoginForm']);

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/main', [AuthController::class, 'login']);

Route::get('/main', [LinkController::class, 'index']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/shorten', [LinkController::class, 'get_url']);

// Route::get('/complete', [LinkController::class, 'profile']);


Route::get('/complete{id}', [LinkController::class, 'show'])->name('complete');
