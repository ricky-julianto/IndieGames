
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', [GameController::class, 'home'])->name('home');

Route::get('/games', [GameController::class, 'index'])->name('games.index');

Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');

Route::get('/tentang', function () {
    return view('games.about');
})->name('games.about');

