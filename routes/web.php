<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
    // agregamos los controladores 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


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


/*
Route::get('/', function () {
    return view('auth.login');
});


Route::get('/', function () {
    return view('auth.register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware'=>'auth:sanctum'], function(){
*/
    Route::get('/',function(){
        return view('princ');
        })->name('princ');

    Route::resource('users', App\Http\Controllers\UserController::class)->names('users');
    Route::resource('requerimientos', App\Http\Controllers\RequerimientoController::class)->names('requerimientos');
    Route::resource('asignacions', App\Http\Controllers\AsignacionController::class)->names('asignacions');
    Route::resource('transferencias', App\Http\Controllers\TransferenciaController::class)->names('transferencias');
    Route::resource('confidens', App\Http\Controllers\ConfidenController::class)->names('confidens');

    Route::get('asignacions/create/{id}', 'App\Http\Controllers\AsignacionController@create')->name('asigcrea');

    Route::post('/asigna', 'App\Http\Controllers\AsignacionController@solicirecarga')->name('asigna');

    Route::post('/confi', 'App\Http\Controllers\ConfidenController@solicirecarga')->name('confi');

    Route::post('/requeri', 'App\Http\Controllers\RequerimientoController@solicirecarga')->name('requeri');

    Route::get('/transfer', 'App\Http\Controllers\RequerimientoController@solicirecarga')->name('transfer');

    Route::post('/transfer', 'App\Http\Controllers\TransferenciaController@solicirecarga')->name('transfer');


    //  Reportes PDF 
    //Route::get('report/pdf/{user}/{type}/{f1}/{f2}', App\Http\Controllers\ExportController::class)->name('reportPDF');
    //Route::get('report/pdf/{user}/{type}', App\Http\Controllers\ExportController::class)->name('reportPDF');

    //  Reporte EXCEL
    





//});
