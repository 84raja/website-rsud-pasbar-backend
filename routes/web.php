<?php

use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\Polyclinics\PolyclinicController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Schedule\ScheduleController;
use App\Http\Controllers\Admin\Services\ServiceController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\DoctorController as FrontendDoctorController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController as FrontendProfileController;
use App\Http\Controllers\Frontend\ScheduleController as FrontendScheduleController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
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



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route group for area admin
Route::prefix('/area-admin')->group(function () {

    Auth::routes();

    Route::middleware(['auth'])->group(function () {
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

        //Polyclinic Route
        Route::prefix('/polyclinic')->group(function () {
            Route::get('/', [PolyclinicController::class, 'index'])->name('polyclinic.index');
            Route::get('/add', [PolyclinicController::class, 'add'])->name('polyclinic.add');
            Route::post('/store', [PolyclinicController::class, 'store'])->name('polyclinic.store');
            Route::get('/edit/{polyclinic}', [PolyclinicController::class, 'edit'])->name('polyclinic.edit');
            Route::put('/update/{polyclinic}', [PolyclinicController::class, 'update'])->name('polyclinic.update');
            Route::delete('/destroy/{polyclinic}', [PolyclinicController::class, 'destroy'])->name('polyclinic.destroy');
        });

        //Doctors Route
        Route::prefix('/doctor')->group(function () {
            Route::get('/', [DoctorController::class, 'index'])->name('doctor.index');
            Route::get('/add', [DoctorController::class, 'add'])->name('doctor.add');
            Route::post('/store', [DoctorController::class, 'store'])->name('doctor.store');
            Route::get('/edit/{doctor}', [DoctorController::class, 'edit'])->name('doctor.edit');
            Route::put('/update/{doctor}', [DoctorController::class, 'update'])->name('doctor.update');
            Route::delete('/destroy/{doctor}', [DoctorController::class, 'destroy'])->name('doctor.destroy');
        });

        // schedule polyclinic
        Route::prefix('/schedule')->group(function () {
            Route::get('/', [ScheduleController::class, 'index'])->name('schedule.index');
            Route::get('/add/{doctor}', [ScheduleController::class, 'add'])->name('schedule.add');
            Route::post('/store/{doctor}', [ScheduleController::class, 'store'])->name('schedule.store');
        });
    });
});

//route for guest
Route::get('/', [HomeController::class, 'index'])->name('fHome');
Route::get('/profile', [FrontendProfileController::class, 'index'])->name('fProfile');
Route::get('/service', [FrontendServiceController::class, 'index'])->name('fService');
Route::get('/doctor', [FrontendDoctorController::class, 'index'])->name('fDoctor');
Route::get('/schedule', [FrontendScheduleController::class, 'index'])->name('fSchedule');
Route::get('/contac', [FrontendContactController::class, 'index'])->name('fContact');
//route search schedule
Route::post('/search', [FrontendScheduleController::class, 'search'])->name('fSearch');
