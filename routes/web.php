<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use \App\Models\recruitments;

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
    $recruitments = recruitments::get();
    return view('home.home', ['recruitments' => $recruitments]);
});

Route::get('/event', [IndexController::class,'viewEvent']);
Route::get('/event/{id}', [IndexController::class,'detailEvent']);
Route::get('/blog', [IndexController::class,'viewBlog']);
Route::get('/contact', [IndexController::class,'viewContact']);
Route::get('/recruitment/{id}', [IndexController::class,'viewRecruitment']);

