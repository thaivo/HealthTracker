<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ProfilesController;
/*
|--------------------------------------------------------------------------
| Web Routeser
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

Route::get('/record/create', [App\Http\Controllers\RecordsController::class, 'create']);
Route::get('/record/{record}', [App\Http\Controllers\RecordsController::class, 'show']);
Route::post('/record', [App\Http\Controllers\RecordsController::class, 'store']);


Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

//Route::get('/profilePic/{user}',[App\Http\Controllers\ProfilePicController::class,'index']);
Route::get('/exercises' , [ExerciseController::class, 'index']);
Route::get('/exercises/{exercise}/details' , [ExerciseController::class, 'details']);
Route::post('/exercises' , [ExerciseController::class, 'store']);
Route::get('/exercises/create' , [ExerciseController::class, 'create']);
Route::get('/exercises/{exercise}/edit', [ExerciseController::class, 'edit']);
Route::put('/exercises/{exercise}',[ExerciseController::class,'update']);
Route::delete('/exercises/{exercise}',[ExerciseController::class,'erase']);

Route::get('admin/users', [ProfilesController::class, 'loadUsers'])->middleware('admin');
Route::get('/admin/users/detail/{user}', [ProfilesController::class, 'accessAParticularUserDetail'])->middleware('admin');
Route::get('/admin/users/edit/{user}',[ProfilesController::class, 'editAParticularUser'])->middleware('admin');
Route::post('/admin/users/update/{user}', [ProfilesController::class, 'updateAParticularUser'])->middleware('admin');
