<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MyPHPProjectsController;
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
Route::post('/set_language', "App\Http\Controllers\InfoController@set_language");

Route::get('/', "App\Http\Controllers\InfoController@index");
// Route::match(['get', 'post'], '/', "App\Http\Controllers\InfoController@index");
// Route::get('/', [InfoController::class, "index"])->name("index");
// Route::match(['get', 'post'], '/', [InfoController::class, "index"])->name("index");

Route::get('/about', "App\Http\Controllers\InfoController@about");
// Route::match(['get', 'post'], '/about', "App\Http\Controllers\InfoController@about");
// Route::match(['get', 'post'], '/about', [InfoController::class, "about"])->name("about");

Route::get('/my_project', "App\Http\Controllers\MyPHPProjectsController@myProject");
Route::get('/my_project/web', "App\Http\Controllers\MyPHPProjectsController@listWebProgects");
Route::get('/my_project/web/laravel_site', "App\Http\Controllers\MyPHPProjectsController@laravelSite");

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return "ID: {$id} NAME: {$name}";
// });