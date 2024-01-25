<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerAuthController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/sellerauth', [SellerAuthController::class, 'sellerreg'])->name('sellerreg');
    Route::post('/sellerauth', [SellerAuthController::class, 'sellerregPost'])->name('sellerauth');
});

Route::get('/landing', [Controller::class, 'index']);
Route::get('/customersupport', [Controller::class, 'customersupport']);

Route::get('/homee', [HomeController::class, 'home']);

Route::get('/account', [AdminController::class, 'buyeracc']);

Route::get('/sellerdashboard', [SuperAdminController::class, 'sellerdashboard']);

Route::get('/sellersa', [SuperAdminController::class, 'sellersa']);
Route::get('/selleracc', [SuperAdminController::class, 'selleracc']);
Route::get('/sales', [SuperAdminController::class, 'sellersales']);
Route::get('/sellerprofile', [SuperAdminController::class, 'sellerprofile']);
Route::get('/buyersa', [SuperAdminController::class, 'buyersa']);
