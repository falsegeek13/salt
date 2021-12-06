<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialiteController;

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
    return view('login.index');
});

Route::get('/login', function () {
    return view('login.index',[
        'active' => 'login'
    ]);
});
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/auth/{provider}', [SocialiteController::class,'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class,'handleProvideCallback']);
Route::get('/dashboard',function(){
    return view('dashboard.index');
});
