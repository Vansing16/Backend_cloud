<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminAuthController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::get('/admin/signup', [AdminAuthController::class, 'showSignUpForm'])->name('admin.signup');
Route::post('/admin/signup', [AdminAuthController::class, 'signUp'])->name('admin.signup.post');
Route::get('/admin/signin', [AdminAuthController::class, 'showSignInForm'])->name('admin.signin');
Route::post('/admin/signin', [AdminAuthController::class, 'signIn'])->name('admin.signin.post');
Route::post('/admin/signout', [AdminAuthController::class, 'signOut'])->name('admin.signout');

// Protected Routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/create/user', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{id}/edit/{type}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');



    Route::get('/admin/approvals', [ApprovalController::class, 'index'])->name('admin.approvals');
    Route::get('/admin/create/service', [ApprovalController::class, 'create'])->name('admin.post_services');
    Route::post('/admin/create/service/store', [ApprovalController::class, 'store'])->name('admin.store_services');
    Route::delete('/admin/service/{id}', [ApprovalController::class, 'destroy'])->name('service.destroy');
    Route::get('/admin/service/{id}/edit', [ApprovalController::class, 'edit'])->name('service.edit');
    Route::put('/admin/service/{id}', [ApprovalController::class, 'update'])->name('service.update');


    Route::get('/admin/reviews', [ReviewController::class, 'index'])->name('admin.reviews');
    Route::get('/admin/create/review', [ReviewController::class, 'create'])->name('admin.create_review');
    Route::post('/admin/create/review/store', [ReviewController::class, 'store'])->name('admin.store_review');
    Route::delete('admin/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');
    Route::get('/admin/create', function () {
        $user = auth()->user();
        return view('admin.create');
    });
});

// Redirect /admin to the admin dashboard or another specific route
Route::get('/admin', function () {
    return redirect('/admin/users');
})->middleware('auth:admin');

