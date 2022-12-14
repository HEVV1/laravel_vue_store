<?php

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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [\App\Http\Controllers\Category\IndexController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\Category\CreateController::class, 'index'])->name('category.create');
    Route::post('/', [\App\Http\Controllers\Category\StoreController::class, 'index'])->name('category.store');
    Route::get('/{category}/edit', [\App\Http\Controllers\Category\EditController::class, 'index'])->name('category.edit');
    Route::get('/{category}', [\App\Http\Controllers\Category\ShowController::class, 'index'])->name('category.show');
    Route::patch('/{category}', [\App\Http\Controllers\Category\UpdateController::class, 'index'])->name('category.update');
    Route::delete('/{category}', [\App\Http\Controllers\Category\DeleteController::class, 'index'])->name('category.delete');
});
