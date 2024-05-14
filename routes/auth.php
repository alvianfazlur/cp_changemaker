<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Models\blogs;
use App\Models\partnerships;
use Illuminate\Support\Facades\Route;
use \App\Models\events;
use App\Http\Controllers\AdminController;

Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    //             ->name('password.request');

    // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    //             ->name('password.email');

    // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    //             ->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])
    //             ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    // Route::get('verify-email', EmailVerificationPromptController::class)
    //             ->name('verification.notice');

   

    // Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //             ->middleware(['signed', 'throttle:6,1'])
    //             ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //             ->middleware('throttle:6,1')
    //             ->name('verification.send');

    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //             ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::get('/home', function () {
        $events = events::take(3)->get();
        $blogs = blogs::take(2)->get();
        $partnerships = partnerships::take(5)->get();
        return view('admin.dashboard', ['events' => $events, 'partnerships' =>$partnerships, 'blogs' => $blogs]);
    });
    
    //CRUD Admin Recruitment
    Route::get('/admin/recruitments', [AdminController::class,'open_recruitment']);
    Route::get('/admin/new-recruitment', [AdminController::class,'new_recruitment']);
    Route::post('/admin/store-recruitment', [AdminController::class,'storeRecruitment']);
    Route::get('/admin/delete-recruitment/{id}', [AdminController::class,'delete_recruitment']);
    Route::get('/admin/update-recruitment/{id}', [AdminController::class,'edit_recruitment']);
    Route::post('/admin/updateDataRecruitments', [AdminController::class,'update_recruitments']);
    
    //CRUD Admin Events
    Route::get('/admin/events', [AdminController::class,'open_events']);
    Route::get('/admin/new-event', [AdminController::class,'new_event']);
    Route::post('/admin/store-event', [AdminController::class,'storeEvents']);
    Route::get('/admin/edit-events/{id}', [AdminController::class,'edit_events']);
    Route::get('/admin/delete-event/{id}', [AdminController::class,'delete_event']);
    Route::get('/admin/delete-events/{id}', [AdminController::class,'delete_events']);
    Route::post('/admin/updateDataEvents', [AdminController::class,'update_events']);
    
    //CRUD Admin Blogs
    Route::get('/admin/blogs', [AdminController::class,'open_blogs']);
    Route::get('/admin/new-blog', [AdminController::class,'new_blog']);
    Route::post('/admin/store-blog', [AdminController::class,'storeBlog']);
    Route::get('/admin/delete-blog/{id}', [AdminController::class,'delete_blog']);
    Route::get('/admin/update-blog/{id}', [AdminController::class,'edit_blog']);
    Route::post('/admin/updateDataBlog', [AdminController::class,'update_blog']);

    //CRUD Admin Partnberships
    Route::get('/admin/partnerships', [AdminController::class,'open_partnership']);
    Route::get('/admin/new-partnership', [AdminController::class,'new_partnership']);
    Route::post('/admin/store-partnership', [AdminController::class,'storePartnership']);
    Route::get('/admin/delete-partnership/{id}', [AdminController::class,'delete_partnership']);
    Route::get('/admin/update-partnership/{id}', [AdminController::class,'edit_partnership']);
    Route::post('/admin/updateDataPartnership', [AdminController::class,'update_partnership']);
});
