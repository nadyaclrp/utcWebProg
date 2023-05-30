<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\PostController;
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
    return view('home');
});
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home',[PostController::class,'show']);
Route::get('/home',[PostController::class,'find']);
Route::get('/home',[HighlightController::class,'calculate']);

Route::get('/detail/{id}',[DetailController::class,'index']);
Route::get('/home',[PostController::class,'latest']);
