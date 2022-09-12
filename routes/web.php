<?php

use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Services\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/area-admin')->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/', function () {
            return view('admin.users.index');
        });
    });

    //Profile Route
    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::put('/update/{profile}', [ProfileController::class, 'update'])->name('profile.update');
    });

    //Services Route
    Route::prefix('/services')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('service.index');
        Route::get('/add', [ServiceController::class, 'add'])->name('service.add');
        Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/edit/{service}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::put('/update/{service}', [ServiceController::class, 'update'])->name('service.update');
        Route::delete('/destroy/{service}', [ServiceController::class, 'destroy'])->name('service.destroy');
    });
});
