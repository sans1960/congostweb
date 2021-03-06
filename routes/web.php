<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PobleController;
use App\Http\Controllers\ImageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('/pobles',PobleController::class)->middleware(['auth'])->names('pobles');
Route::resource('/imatges',ImageController::class)->middleware(['auth'])->names('images');
