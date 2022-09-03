<?php

use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SessionController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//STUDENTS ROUTES
Route::get('/class', [SclassController::class, 'Index']);
Route::post('/class/store', [SclassController::class, 'Store']);
Route::get('/class/edit/{id}', [SclassController::class, 'Edit']);
Route::put('/class/update/{id}', [SclassController::class, 'Update']);
Route::get('/class/delete/{id}', [SclassController::class, 'Delete']);


//SUBJECT ROUTES
Route::get('/subject', [SubjectController::class, 'Index']);
Route::post('/subject/store', [SubjectController::class, 'Store']);
Route::get('/subject/edit/{id}', [SubjectController::class, 'Edit']);
Route::put('/subject/update/{id}', [SubjectController::class, 'Update']);
Route::get('/subject/delete/{id}', [SubjectController::class, 'Delete']);

//SUBJECT ROUTES
Route::get('/session', [SessionController::class, 'Index']);
Route::post('/session/store', [SessionController::class, 'Store']);
Route::get('/session/edit/{id}', [SessionController::class, 'Edit']);
Route::put('/session/update/{id}', [SessionController::class, 'Update']);
Route::get('/session/delete/{id}', [SessionController::class, 'Delete']);

//SUBJECT ROUTES
Route::get('/student', [StudentController::class, 'Index']);
Route::post('/student/store', [StudentController::class, 'Store']);
Route::get('/student/edit/{id}', [StudentController::class, 'Edit']);
Route::put('/student/update/{id}', [StudentController::class, 'Update']);
Route::get('/student/delete/{id}', [StudentController::class, 'Delete']);
