<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BoardsController;

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

// Route::get('/', function () {
//     return view('boards/index');
// });

Auth::routes();

Route::prefix('boards')->middleware('auth:users')->group(function () {
  Route::post('create', [BoardsController::class, 'create'])->name('boards.create');
  Route::get('new', function () {
    return view('boards/new');
});
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [BoardsController::class, 'index'])->name('boards.index');
