<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/secteurs', [SectorController::class, 'index'])->name('secteurs');
Route::get('/carrieres', [CareerController::class, 'index'])->name('carrieres');
Route::post('/carrieres', [CareerController::class, 'store'])->name('carrieres.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/candidatures/{application}', [AdminDashboardController::class, 'showApplication'])->name('applications.show');
        Route::patch('/candidatures/{application}', [AdminDashboardController::class, 'updateApplication'])->name('applications.update');
        Route::get('/candidatures/{application}/cv', [AdminDashboardController::class, 'downloadCv'])->name('applications.cv');
        Route::get('/messages/{message}', [AdminDashboardController::class, 'showMessage'])->name('messages.show');
    });
});
