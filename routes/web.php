<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create_project',[ProjectController::class,'home']);
Route::post('store',[ProjectController::class,'store'])->name('project.store');

Route::get('/create_task',[TaskController::class,'task']);
Route::post('task_store',[TaskController::class,'storeTask'])->name('task.store');
Route::get('task_list',[TaskController::class,'tasklist'] )->name('task.list');
Route::get('in_progress/{id}',[TaskController::class,'inProgress'])->name('task.inProfress');
Route::get('deliver/{id}',[TaskController::class,'deliver'])->name('task.complete');

Route::get('mytasks/{id}',[TaskController::class,'mytasks'])->name('tasks.count');
