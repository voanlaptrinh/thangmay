<?php

use App\Http\Controllers\Admin\ConfigServeController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboadController;
use App\Http\Controllers\Admin\ThangmayController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\ContactFormController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route contact form cho clients
Route::post('/lien-he/gui', [ContactFormController::class, 'store'])->name('contact.store');

// Routes cho Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('password/change', [LoginController::class, 'changePassword'])->name('password.change')->middleware('auth');

// Route ví dụ cho trang cần đăng nhập
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboadController::class, 'index'])->name('dashboard.index');
    });
    Route::get('/lien-he', [ContactController::class, 'index'])->name('lien_he.index.admin');
     Route::prefix('web-config')->name('web-config.')->group(function () {
        Route::get('/', [ConfigServeController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ConfigServeController::class, 'update'])->name('update');
    });
    Route::resource('thangmay', ThangmayController::class);
    Route::post('thangmay/{id}/toggle-status', [ThangmayController::class, 'toggleStatus']);

    Route::resource('project', ProjectController::class);
    Route::post('project/{id}/toggle-status', [ProjectController::class, 'toggleStatus']);
});
