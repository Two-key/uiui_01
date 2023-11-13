<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::prefix('/')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/home', [ShopController::class, 'home'])->name('shops.home');
    Route::get('/overview', [ShopController::class, 'overview'])->name('overview');
    Route::get('/addInformation', [ShopController::class, 'addInformation'])->name('addInformation');
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/{town}/about', [SearchController::class, 'about'])->name('about');
    Route::post('/{town}/towns', [RegisterController::class, 'registerTown'])->name('registerTown');
    Route::get('/articles/{town}', [BoardController::class, 'article'])->name('article');
    Route::get('/trouble/{town}', [BoardController::class, 'trouble'])->name('trouble');
    Route::get('/{town}/shops', [SearchController::class, 'shopsearch'])->name('shopsearch');
    Route::get('/rules/{town}', [SearchController::class, 'rule'])->name('rule');
});
 });
require __DIR__.'/auth.php';