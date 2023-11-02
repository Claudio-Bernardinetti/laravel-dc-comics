<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicsController;
use App\Http\Controllers\Guests\PageController;


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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

//Route::get('/comics.dcComics', [ComicsController::class, 'Comics'])->name('comics.dcComics');

//Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');

// Route::get('/comics', function () {
//     return view('comics.index');
// });
Route::resource('admins/comics', ComicsController::class);


