<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PropositionController;
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
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::resource('/products', ProductController::class);
    Route::post('/products/{product}/toggleFavorite', [ProductController::class, 'toggleFavorite'])->name('products.toggleFavorite');
    Route::post('/products/{product}/completeExchange', [ProductController::class, 'completeExchange'])->name('products.completeExchange');
    Route::resource('/propositions', PropositionController::class);

    Route::get('/products/{product}/exchange', [ProductController::class, 'exchange'])->name('products.exchange');
    Route::post('/propositions/{id}/accept', [PropositionController::class, 'acceptExchange'])->name('propositions.acceptExchange');
    







    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

