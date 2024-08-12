<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\DocumentationPhotoController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/dokumentasi', [FrontController::class, 'documentation'])->name('front.dokumentasi');
Route::get('/dokumentasi/details/{documentation:slug}', [FrontController::class, 'details'])->name('front.dokumentasi.details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function (){
        Route::resource('documentations', DocumentationController::class);
        Route::resource('categories', CategoriesController::class);

        Route::resource('articles', ArticlesController::class);
        // Route::get('/articles/{articles}', [ArticlesController::class, 'create'])->name('articles.create');
        Route::post('/articles/save', [ArticlesController::class, 'store'])->name('articles.store');

        Route::resource('documentation_photos', DocumentationPhotoController::class);
        Route::get('/photo/{documentation}', [DocumentationPhotoController::class, 'create'])->name('documentation_photos.create');
        Route::post('/photo/save/{documentation}', [DocumentationPhotoController::class, 'store'])->name('documentation_photos.store');
    });

});

require __DIR__ . '/auth.php';
