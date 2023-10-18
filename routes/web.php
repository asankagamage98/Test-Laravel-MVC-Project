<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//home
Route::get('/',[HomeController::class,'index'])->name('Home');


//todo

Route::prefix('/todo')->group(function(){
    Route::get('/',[TodoController::class,'getAll'])->name('Todo');
    Route::post('/store',[TodoController::class,'store'])->name('todo.store');
    Route::get('/delete/{id}',[TodoController::class,'delete'])->name('todo.delete');
    Route::get('/getOne/{id}',[TodoContrller::class,'getById'])->name('todo.getbyId');
    Route::put('/update/{id}',[TodoController::class,'update'])->name('todo.update');
});
