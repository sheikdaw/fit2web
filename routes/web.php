<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project');
Route::get('/project', [ProjectController::class, 'showProject'])->name('projects');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Define the logout route manually
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Handle login form submission (POST)
Route::post('login', [AuthController::class, 'submitLogin'])->name("submitLogin");
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name("dashboard");
    Route::get('/ourservices', [DashboardController::class, 'ourServices'])->name("ourservices");
    Route::get('/project', [ProjectController::class, 'Project'])->name("admin.project");
    Route::post('/projects', [ProjectController::class, 'store'])->name('admin.store-project');
    Route::post('/admin/update-project', [ProjectController::class, 'update'])->name('admin.projectUpdate');
    Route::delete('admin/project/{id}', [ProjectController::class, 'destroy'])->name('admin.project.destroy');

    // Store a new blog
    Route::post('/admin/store-blog', [BlogController::class, 'store'])->name('admin.store-blog');

    Route::get('/blog', [BlogController::class, 'index'])->name("admin.blog");
    Route::post('/admin/update-blog/{blog}', [BlogController::class, 'update'])->name('blogs.update');

    // Delete a blog
    Route::delete('/admin/blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
});
