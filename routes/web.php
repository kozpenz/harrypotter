<?php

use App\Http\Controllers\CharacterController;
use App\Models\Character;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CharacterController::class, 'index'])->name('characters.index');

Route::get('/characters/{id}', [CharacterController::class, 'show'])->name('characters.show');

Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');

Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');

Route::delete('/characters/{id}', [CharacterController::class, 'destroy'])->name('characters.destroy');