<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
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

Route::get('/', [InfoController::class, "index"])->name("index");

Route::get('/about', "App\Http\Controllers\InfoController@about");

Route::get('/user/{id}/{name}', function ($id, $name) {
    return "ID: {$id} NAME: {$name}";
});