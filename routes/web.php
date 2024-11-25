<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('views/create', [ImageController::class, 'create'])->name('views.create');

Route::post('dashboard', [ImageController::class, 'store'])->name('views.dashboard');

Route::get(uri: 'contact', action: function(){
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');
Route::get(uri: 'create', action: function(){
    return view('create');
})->middleware(['auth', 'verified'])->name('create');
Route::get('/dashboard', [HomeController::class, 'homepage'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/deletePost/{id}', [HomeController::class, 'deletePost'])->middleware(['auth', 'verified'])->name('deletePost');
Route::get('/latestPost', [HomeController::class, 'lastId'])->middleware(['auth', 'verified'])->name('latestPost');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
