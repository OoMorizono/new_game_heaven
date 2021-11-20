<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WomenController;


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


Route::get('/', [WomenController::class, 'index'])
    ->name('root');

Route::resource('womens', App\Http\Controllers\WomenController::class);

Route::get('/dashboard', function () {
    return view('welcome');
});


// Route::resource('womens', WomenController::class)
//     ->middleware(['auth'])
//     ->only(['create', 'store', 'edit', 'update', 'destroy']);
// //  ->except(['index', 'show']);  // こちらでも可

// Route::resource('womens', WomenController::class)
//     ->only(['index', 'show']);
// //  ->except(['create', 'store', 'edit', 'update', 'destroy']);  // こちらでも可

require __DIR__ . '/auth.php';

