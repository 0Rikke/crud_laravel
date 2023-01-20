<?php

use App\Http\Controllers\PostsController;
use App\Models\Posts;
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



Route::get("/index",[PostsController::class,"index"]);

Route::get("/create",[PostsController::class,"criar"]);

Route::post("/store",[PostsController::class,"store"]);

Route::get("/alterar/{id}",[PostsController::class,"alterar"]);

Route::get("/deletar/{id}",[PostsController::class,"deletar"]);

Route::post("/update",[PostsController::class, "update"]);
