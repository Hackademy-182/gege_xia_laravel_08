<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');

Route::middleware('auth')->group(function () {
    Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create');
    Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');
});
Route::get('/houses/{house}', [HouseController::class, 'show'])->name('houses.show');

Route::middleware('auth')->get('/profile', function () {
    $user = Auth::user();
    abort_unless($user, 403);
    $houses = $user->houses()->latest()->get();

    return view('profile.show', compact('user', 'houses'));
})->name('profile.show');
