<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WomenController;
use \App\Http\Controllers\CalendarController;
use GuzzleHttp\Middleware;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\StripePaymentsController;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\ChatroomController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;



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

//最終的にホーム設定するルート
Route::get('/', [WomenController::class, 'index'])
    ->name('root');

Route::get('/payview', [StripePaymentsController::class, 'index'])
    ->name('index')
    ->middleware('auth:users,womens');

Route::post('/charge', [ChargeController::class, 'charge'])
    ->name('charge')
    ->middleware('auth:users,womens');

Route::get('/chatroom', [ChatroomController::class, 'show'])
    ->name('chatroom')

    ->middleware('auth:users,womens');


Route::post('/add', [ChatroomController::class, 'add'])
    ->name('add')
    ->middleware('auth:users,womens');

Route::resource('womens', App\Http\Controllers\WomenController::class);
// ->only(show,index)


Route::resource('users', App\Http\Controllers\UserController::class);


Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    return view('logout');
});

//出品
Route::resource('posts', PostController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy'])
    ->middleware('auth:womens');

Route::resource('posts', PostController::class)
    ->only(['show', 'index']);

require __DIR__ . '/auth.php';

// Route::get('/payment', [StripePaymentsController::class, 'payment'])
//     ->name('payment');

// Route::get('/complete', [StripePaymentsController::class, 'complete'])
//     ->name('complete');



// Route::get('/home', [HomeController::class, 'index'])
//     ->middleware('auth:users,womens');

// Route::get('/chat/{recieve}', [ChatController::class, 'index'])
//     ->name('chat')
//     ->middleware('auth:users,womens');

// Route::post('/chat/send', [ChatController::class, 'store'])
//     ->name('chatSend')
//     ->middleware('auth:users,womens');


// Route::resource('womens', WomenController::class)
//     ->middleware(['auth'])
//     ->only(['create', 'store', 'edit', 'update', 'destroy']);
// //  ->except(['index', 'show']);  // こちらでも可

// Route::resource('womens', WomenController::class)
//     ->only(['index', 'show']);
// //  ->except(['create', 'store', 'edit', 'update', 'destroy']);  // こちらでも可
