<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Download1Controller;
use App\Http\Controllers\ListCertificateControler;
use App\Http\Controllers\ParticipantController;
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

Auth::routes([
    'register' => false
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'CheckUserLogin:pinpinan']], function () {
    Route::group(['middleware' => []], function () {
        Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
        Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
        Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
        Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
        Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::PATCH('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
        Route::get('/list1', [EmployeeController::class, 'list1'])->name('employee.list');
    });
});

Route::group(['middleware' => ['auth', 'CheckUserLogin:admin']], function () {
    Route::group(['middleware' => []], function () {
        Route::group(['prefix' => 'filemanager'], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });

        Route::get('/participant', [ParticipantController::class, 'index'])->name('participant.index');
        Route::get('/participant/create', [ParticipantController::class, 'create'])->name('participant.create');
        Route::post('/participant', [ParticipantController::class, 'store'])->name('participant.store');
        Route::delete('/participant/{id}', [ParticipantController::class, 'destroy'])->name('participant.delete');
        Route::get('/participant/{id}/edit', [ParticipantController::class, 'edit'])->name('participant.edit');
        Route::PATCH('/participant/{id}', [ParticipantController::class, 'update'])->name('participant.update');

        Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate.index');
        Route::post('/certificate', [CertificateController::class, 'store'])->name('certificate.store');
        Route::delete('/certificate/{id}', [CertificateController::class, 'destroy'])->name('certificate.delete');

        Route::get('/list', [ListCertificateControler::class, 'index'])->name('list.index');
        Route::post('/list', [ListCertificateControler::class, 'store'])->name('list.store');
        Route::delete('/list/{id}', [ListCertificateControler::class, 'destroy'])->name('list.delete');
    });
});

Route::group(['middleware' => ['auth', 'CheckUserLogin:peserta']], function () {
    Route::group(['middleware' => []], function () {
        Route::get('/download', [Download1Controller::class, 'index'])->name('download.index');
    });
});
