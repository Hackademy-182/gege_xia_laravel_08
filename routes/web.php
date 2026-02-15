<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');
Route::middleware('auth')->group(function () {
    Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create');
    Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');
    Route::get('/houses/{house}', [HouseController::class, 'show'])->name('houses.show');

});
