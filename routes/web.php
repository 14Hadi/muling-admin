<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ModelController;
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
    return view('dashboard', [
        'page' => 'Dashboard'
    ]);
})->name('dashboard');

Route::get('/model', [ModelController::class, 'index'])->name('model');
Route::post('/model', [ModelController::class, 'store'])->name('post_model');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
