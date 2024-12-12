<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'AuthLogin'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('forgot-password', [AuthController::class, 'forgotpassword'])->name('forgot-password');
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword'])->name('post-forgot-password');
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'PostReset'])->name('PostReset');


// Middleware
Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/admin/list', [AdminController::class, 'list'])->name('admin.list');
    Route::get('admin/admin/add', [AdminController::class, 'add'])->name('admin.add');
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'update']);
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

    // Class Routes
    Route::get('admin/class/list', [ClassController::class, 'list'])->name('class.list');
    Route::get('admin/class/add', [ClassController::class, 'add'])->name('class.add');
    Route::post('admin/class/add', [ClassController::class, 'insert']);
    Route::get('admin/class/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
    Route::post('admin/class/edit/{id}', [ClassController::class, 'update']);
    Route::get('admin/class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');
});

Route::group(['middleware' => 'teacher'], function () {
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'parent'], function () {
    Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);
});
