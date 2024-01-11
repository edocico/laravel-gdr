<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Guest\PageController;
use App\Models\Character;
use Illuminate\Support\Facades\Route;

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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    // Route::get('/', [PageController::class, 'index'])
    //     ->name('home');
    // Route::get('/characters', [CharacterController::class, 'index'])
    //     ->name('characters.index');
    // Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
    // Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('characters.show');
    // Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
    // Route::get('/characters/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
    // Route::put('/characters/{character}', [CharacterController::class, 'update'])->name('characters.update');
    // Route::delete('/characters/{character}', [CharacterController::class, 'destroy'])->name('characters.destroy');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('characters', CharacterController::class);


});
require __DIR__.'/auth.php';
