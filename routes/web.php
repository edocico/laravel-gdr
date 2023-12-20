<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])
    ->name('home');
Route::get('/characters', [CharacterController::class, 'index'])
    ->name('characters.index');
Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('characters.show');
