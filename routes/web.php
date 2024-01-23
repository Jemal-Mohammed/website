<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignatureController;

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
})->name('/');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/user/register', [UserController::class, 'store'])->name('user.register');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
// protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/logout', [UserController::class, 'userlogout']);
});
Route::get('/send', function () {
    $token = 'uxLLsgoxujB6JswnsDTYNcG6orqcLSN1';
    $userPhone = "+251715783940";
    $message = "hay ";
    $response = Http::post('https://api.geezsms.com/api/v1/sms/send', [
        'token' => $token,
        'phone' => $userPhone,
        'msg' => $message,
    ]);
    return $response;
});
// routes/web.php
Route::get('/signature', function () {
    return view('signature');
});

Route::post('/save-signature', [SignatureController::class, 'saveSignature']); // routes/web.php
Route::get('/signatures', [SignatureController::class, 'index']);