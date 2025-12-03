<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\JobController;

use App\Http\Controllers\RegisteredUserController;
use App\Livewire\Search;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::get('/search', Search::class)->name('search');

#Route::resource('jobs', JobController::class);

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);    
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit')
         ->middleware('auth')
         ->can('edit', 'job');

    Route::patch('/jobs/{job}', 'update')
        ->middleware('auth')
         ->can('edit', 'job');
    Route::delete('/jobs/{job}', 'destroy')
        ->middleware('auth')
         ->can('edit', 'job');
});