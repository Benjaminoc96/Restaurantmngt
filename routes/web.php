<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('foods')->group(function () {
    Route::get('', [FoodController::class, 'index'])->name('food.index');
    Route::get('/create', [FoodController::class, 'create'])->name('food.add-form');
    Route::post('/store', [FoodController::class, 'store'])->name('food.store');
    Route::get('/{id}/edit', [FoodController::class, 'edit'])->name('food.edit-form');
    Route::get('/{id}', [FoodController::class, 'show'])->name('food.display-item');
    Route::patch('/{id}', [FoodController::class, 'update'])->name('food.update');
    Route::delete('/{id}', [FoodController::class, 'destroy'])->name('food.delete');
    });

    Route::prefix('restaurants')->group(function () {
        Route::get('', [RestaurantController::class, 'index'])->name('restaurant.index');
        Route::get('/create', [RestaurantController::class, 'create'])->name('restaurant.add-form');
        Route::post('/store', [RestaurantController::class, 'store'])->name('restaurant.store');
        Route::get('/{id}/edit', [RestaurantController::class, 'edit'])->name('restaurant.edit-form');
        Route::get('/{id}', [RestaurantController::class, 'show'])->name('restaurant.display-item');
        Route::patch('/{id}', [RestaurantController::class, 'update'])->name('restaurant.update');
        Route::delete('/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete');
        });


require __DIR__.'/auth.php';
