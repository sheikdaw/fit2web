<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle login form submission (POST)
Route::post('login', [AuthController::class, 'submitLogin'])->name("submitLogin");
Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.index');
    // });
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name("dashboard");
    Route::get('/ourservices', [DashboardController::class, 'ourServices'])->name("ourservices");
});
