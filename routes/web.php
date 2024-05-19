<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MessageController;


Route::get('/news/{region}', [NewsController::class, 'getNewsByRegion']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/message', [MessageController::class, 'send'])->name('message.send');
});

use App\Http\Controllers\DonationController;

// Route::get('/donations/sum', [DonationController::class, 'sum']);
Route::get('/donations/sum', [DonationController::class, 'totalDonations']);

Route::post('/donate', [DonationController::class, 'store'])->name('donate');



Route::get('/news', [NewsController::class, 'index']);

require __DIR__ . '/auth.php';
