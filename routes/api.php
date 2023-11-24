<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/imagecreate', [ImageController::class, 'create']);
Route::post('/imagestore', [ImageController::class, 'store'])->name('imagestore');
Route::get('/imageshow', [ImageController::class, 'show'])->name('imageshow');
Route::get('/imagedelete/{id}', [ImageController::class, 'delete'])->name('imagedelete');
Route::get('/imageedit/{id}', [ImageController::class, 'edit'])->name('imageedit');
Route::put('/imageupdate/{id}', [ImageController::class, 'update'])->name('imageupdate');

Route::get('/questioncreate', [QuestionController::class, 'create']);
Route::post('/questionstore', [QuestionController::class, 'store'])->name('questionstore');
Route::get('/questionindex', [QuestionController::class, 'index'])->name('questionindex');
Route::get('/questiondelete/{id}', [QuestionController::class, 'delete'])->name('questiondelete');
Route::get('/questionedit/{id}', [QuestionController::class, 'edit'])->name('questionedit');
Route::put('/questionupdate/{id}', [QuestionController::class, 'update'])->name('questionupdate');
Route::get('/questionview/{id}', [QuestionController::class, 'view'])->name('questionview');