<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LoginController;
use App\Models\profile;
use App\Models\testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use \App\Models\recruitments;
use \App\Models\events;
use \App\Models\blogs;
use \App\Models\partnerships;
use \App\Models\team;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

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
    $partnerships = partnerships::get();
    $teams = team::get();
    $profile = profile::first();
    $testimonial = testimonial::get();
    $events = events::orderBy('event_date', 'desc')->take(2)->get();
    $blogs = blogs::orderBy('publication_date', 'desc')->take(3)->get();
    return view('home.home', ['recruitments' => $recruitments, 'events' => $events,
        'blogs' => $blogs, 'partnerships' => $partnerships,
        'teams' => $teams, 'testimonial' => $testimonial,
        'profile' => $profile
    ]);
});



Route::get('/event', [IndexController::class,'viewEvent']);
Route::get('/event/{title}', [IndexController::class,'detailEvent']);
Route::get('/blog', [IndexController::class,'viewBlog']);
Route::get('/blog/{title}', [IndexController::class,'detailBlog']);
Route::get('/search-blog/{title}', [IndexController::class,'searchBlog']);
Route::get('/search-event/{title}', [IndexController::class,'searchEvent']);
Route::get('/contact', [IndexController::class,'viewContact']);
Route::get('/about', [IndexController::class,'viewInfo']);
Route::get('/recruitment/{title}', [IndexController::class,'viewRecruitment']);
Route::get('/partnership', [IndexController::class,'viewPartnership']);
Route::get('/gallery', [IndexController::class,'viewGallery']);

//Admin
// Route::get('/admin/recruitments', [AdminController::class,'open_recruitment']);

// Route::get('/login', [LoginController::class,'formLogin']);

Route::get('/logout', [AuthenticatedSessionController::class,'destroy'])->name('logout');
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';




