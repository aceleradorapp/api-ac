<?php

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return auth('api')->user();
});

Route::get('/test', function () {
    return [10, 20 ,30];
});


Route::middleware('client')->get('/products', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/userAuthenticated', function (Request $request) {    
    return auth('api')->user();
});


Route::middleware('auth:api')->get('/project', [App\Http\Controllers\Project\projectController::class, 'show'])->name('project');
Route::middleware('auth:api')->get('/project/user', [App\Http\Controllers\Project\projectController::class, 'projectsUser'])->name('project.user');

Route::middleware('auth:api')->post('/dataContents', [App\Http\Controllers\DataContentController::class, 'store'])->name('dataContents');
Route::middleware('auth:api')->get('/dataContents/load/{id}', [App\Http\Controllers\DataContentController::class, 'load'])->name('/dataContents.load');

Route::middleware('auth:api')->get('/projectType', [App\Http\Controllers\ProjectTypeController::class, 'show'])->name('projectType');

