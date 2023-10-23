<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\SubTaskController;
//home
Route::get('/',[HomeController::class,'index'])->name('Home');


//todo

Route::prefix('/todo')->group(function(){
    Route::get('/',[TodoController::class,'getAll'])->name('todo');
    Route::post('/store',[TodoController::class,'store'])->name('todo.store');
    Route::get('/delete/{id}',[TodoController::class,'delete'])->name('todo.delete');
    Route::get('/getOne/{id}',[TodoController::class,'getById'])->name('todo.getbyId');
    Route::post('/update/{id}',[TodoController::class,'update'])->name('todo.update');

    //nomal routers
    Route::get('/editDetials',[TodoController::class,'getDetailUpdate'])->name('todo.getUpdate');
    Route::get('/sub/{id}',[TodoController::class,'sub'])->name('todo.sub');

    //subtask

    Route::post('subTask/store', [SubTaskController::class,'store'])->name('todo.sub.store');

});
