<?php

use App\Http\Controllers\HouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return redirect('/houses');
});
Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');

Route::middleware('auth')->group(function () {
    Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create');
    Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');
    Route::delete('/houses/{house}', [HouseController::class, 'destroy'])->name('houses.destroy');
    Route::get('/houses/{house}/edit', [HouseController::class, 'edit'])->name('houses.edit');
    Route::put('/houses/{house}', [HouseController::class, 'update'])->name('houses.update');
    Route::get('/profile/create', function () {
        return view('profile.create');
    })->name('profile.create');

    Route::post('/profile', function (Request $request) {
        $data = $request->validate([
            'phone' => 'nullable|string|max:255',
            'email_alt' => 'nullable|email|max:255',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
        ]);

        $request->user()->profile()->create($data);

        return redirect()->route('profile.show');
    })->name('profile.store');

});
Route::get('/houses/{house}', [HouseController::class, 'show'])->name('houses.show');

Route::middleware('auth')->get('/profile', function () {
    $user = Auth::user();
    abort_unless($user, 403);

    $profile = $user->profile;
    $houses = $user->houses()->latest()->get();

    return view('profile.show', compact('user', 'profile', 'houses'));
})->name('profile.show');
