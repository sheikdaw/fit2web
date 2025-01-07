<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Define the logout route manually
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Handle login form submission (POST)
Route::post('login', [AuthController::class, 'submitLogin'])->name("submitLogin");
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name("dashboard");
    Route::get('/ourservices', [DashboardController::class, 'ourServices'])->name("ourservices");
    Route::get('/project', [ProjectController::class, 'Project'])->name("admin.project");

    Route::post('/projects', [ProjectController::class, 'store'])->name('admin.store-project'); // Create project
    Route::put('/projects-update', [ProjectController::class, 'update'])->name('admin.projectUpdate'); // Update project
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('admin.projectDelete'); // Delete project
});
