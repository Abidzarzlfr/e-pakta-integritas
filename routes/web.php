<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('login');
    });
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::post('/update-pdf', [HomeController::class, 'updatePdf'])->name('update-pdf');
    Route::post('/upload-pdf', [HomeController::class, 'uploadPdf'])->name('upload-pdf');
    Route::post('/upload-pdf', [HomeController::class, 'uploadPdf'])->name('upload-pdf');
    Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change-password');

    // Admin Page
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/users/store', [AdminController::class, 'store'])->name('users.store');
    Route::get('/users/search', [AdminController::class, 'search'])->name('users.search');
    Route::delete('/users/delete/{id}', [AdminController::class, 'delete'])->name('users.delete');
    Route::put('/users/{id}/update', [AdminController::class, 'update'])->name('users.update');
    Route::get('/admin/download-all-pakta', [AdminController::class, 'downloadAllPdf'])->name('admin.downloadAllPakta');

    // Route untuk download Excel berdasarkan upload_status
    Route::get('/admin/download-excel-uploaded', [AdminController::class, 'downloadExcelUploaded'])->name('admin.downloadExcelUploaded');
    Route::get('/admin/download-excel-not-uploaded', [AdminController::class, 'downloadExcelNotUploaded'])->name('admin.downloadExcelNotUploaded');
    Route::get('/admin/download-excel-all', [AdminController::class, 'downloadExcelAll'])->name('admin.downloadExcelAll');
});
