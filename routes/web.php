<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::group(['controller' => TaskController::class], function () {
    Route::get('/', 'viewTasks');
    Route::get('/createTask', 'viewCreateTask')->name('create');
    Route::get('/updateTask/{task}', 'viewUpdateTask')->name('update');
    Route::post('/createTask', 'createTask')->name('create.task');
    Route::put('/updateTask/{task}', 'updateTask')->name('update.task');
    Route::delete('/deleteTask/{task}', 'deleteTask')->name('delete.task');
});