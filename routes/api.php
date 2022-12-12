<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['controller' => TaskController::class], function () {
    Route::get('/tasks', 'getTasks');
    Route::get('/task/{task}', 'getTask');
    Route::post('/createTask', 'createTask');
    Route::put('/updateTask/{task}', 'updateTask');
    Route::delete('/deleteTask/{task}', 'deleteTask');
});
