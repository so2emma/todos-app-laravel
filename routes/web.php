<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
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

Route::post("todo/{todo}/update-todo", [TodosController::class, "update"]);
Route::get("todo/{todo}/delete", [TodosController::class, "destroy"]);
Route::get("todo", [TodosController::class, "index"]);
Route ::get("todo/{todo}", [TodosController::class, "show"]);
Route ::get("todo/{todo}/edit", [TodosController::class, "edit"]);
Route ::get("new-todo", [TodosController::class, "create"]);
Route::post("store-todo", [TodosController::class, "store"]);

Route::get("todo/{todo}/complete", [TodosController::class, "complete"]);


