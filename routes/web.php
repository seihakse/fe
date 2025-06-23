<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{EventController, ProjectController, SpeakerController, SponsorController};

// Public Routes
Route::get('/', [EventController::class, 'index'])->name('home');
Route::resource('events', EventController::class)->only(['index', 'show']);
Route::resource('projects', ProjectController::class)->only(['index', 'show']);
Route::resource('speakers', SpeakerController::class)->only(['index', 'show']);
Route::resource('sponsors', SponsorController::class)->only(['index', 'show']);

// Admin Routes (Requires Auth + Admin Role)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('projects', ProjectController::class)->except(['index', 'show']);
    Route::resource('speakers', SpeakerController::class)->except(['index', 'show']);
    Route::resource('sponsors', SponsorController::class)->except(['index', 'show']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
