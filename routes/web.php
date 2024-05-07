<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use \App\Models\recruitments;
use \App\Models\events;
use \App\Models\blogs;

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
    $events = events::orderBy('event_date', 'desc')->take(2)->get();
    $blogs = blogs::orderBy('publication_date', 'desc')->take(3)->get();
    return view('home.home', ['recruitments' => $recruitments, 'events' => $events, 'blogs' => $blogs]);
});

Route::get('/event', [IndexController::class,'viewEvent']);
Route::get('/event/{id}', [IndexController::class,'detailEvent']);
Route::get('/blog', [IndexController::class,'viewBlog']);
Route::get('/blog/{id}', [IndexController::class,'detailBlog']);
Route::get('/contact', [IndexController::class,'viewContact']);
Route::get('/recruitment/{id}', [IndexController::class,'viewRecruitment']);
Route::get('/partnership', [IndexController::class,'viewPartnership']);


