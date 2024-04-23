<?php

use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ToDoListController::class, 'index']);

Route::post('/', [ToDoListController::class, 'store']);

Route::delete('/deleteTask/{id}', [ToDoListController::class, 'deleteTask']);

Route::get('/edit/{id}', [ToDoListController::class, 'editTask']);

Route::put('/updateTask', [ToDoListController::class, 'updateTask']);

Route::get('/detail/{id}', [ToDoListController::class, 'detailTask']);

Route::put('/showTask', [ToDoListController::class, 'showTask']);

Route::get('/about', function () {
    return view('welcome');
});


