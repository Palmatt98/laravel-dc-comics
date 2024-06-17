<?php

use App\Http\Controllers\DcComicsController;
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

Route::get('/', function () {
    return view('home');
});

// Route::get('/dc_comics', [DcComicsController::class, 'index'])->name('dc_comics.index');

// Route::get('/dc_comics/create',[DcComicsController::class, 'create'])->name('/dc_comics/create.create');


Route::resource('dc_comics', DcComicsController::class);