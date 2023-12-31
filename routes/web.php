<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[ProductController::class, 'index'])->middleware(['admin'])->name('dashboard');

Route::middleware('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/productAdd', [ProductController::class, 'productAdd'])->name('productAdd');
    Route::post('/store_jobs', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/updateProduct/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/details/{id}', [ProductController::class, 'candidateDetails'])->name('candidateDetails');
    Route::get('/appliedJobs', [ProductController::class, 'appliedJobs'])->name('AppliedJobs');
    Route::get('/total_candidate', [ProductController::class, 'totalCandidate'])->name('totalCandidate');

});
Route::get('/apply/{id}', [ProductController::class, 'apply'])->name('product.apply');
Route::post('/job_applied/{id}', [ProductController::class, 'applyed'])->name('applied');



require __DIR__.'/auth.php';
