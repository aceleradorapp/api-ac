<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// EXEMPLOS DE ELQUENTS
//https://www.dialhost.com.br/blog/eloquent-simplificando-models-laravel/


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
    return view('initial');
});


Route::get('/more', function () {
    return view('more');
});

Route::get('/registration', function () {
    return view('registration');
});

Auth::routes();


Route::middleware('auth')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/type', [App\Http\Controllers\TypeController::class, 'index'])->name('type');
    Route::get('/profile', [App\Http\Controllers\PersonControlle::class, 'index'])->name('profile');

    Route::post('/profile/do', [App\Http\Controllers\PersonControlle::class, 'store'])->name('profile.do');

    Route::get('/project.config', [App\Http\Controllers\Project\projectController::class, 'config'])->name('project.config');
    Route::post('/projectType.do', [App\Http\Controllers\ProjectTypeController::class, 'store'])->name('projectType.do');

    Route::get('/project', [App\Http\Controllers\Project\projectController::class, 'index'])->name('project');
    Route::post('/project.do', [App\Http\Controllers\Project\projectController::class, 'store'])->name('project.do');
    Route::get('/project.edit/{id}', [App\Http\Controllers\Project\projectController::class, 'edit'])->name('project.edit');
    Route::post('/project.open/{id}', [App\Http\Controllers\Project\projectController::class, 'open'])->name('project.open');
    Route::put('/project.put/{id}', [App\Http\Controllers\Project\projectController::class, 'update']);
    Route::delete('/project.delete/{id}', [App\Http\Controllers\Project\projectController::class, 'destroy']);

    Route::get('/user', [App\Http\Controllers\user\UserController::class, 'index'])->name('user');

    Route::get('/bank', [App\Http\Controllers\BanckController::class, 'index'])->name('bank');
    Route::post('/bank.do', [App\Http\Controllers\BanckController::class, 'store'])->name('bank.do');

    Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
    Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'show'])->name('payment');
    Route::post('/payment.do', [App\Http\Controllers\PaymentController::class, 'store'])->name('payment.do');

});

