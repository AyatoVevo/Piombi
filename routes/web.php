<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/foo', function () {
    Artisan::call('storage:link');
    });

Route::get('/', [PublicController::class , 'homepage'])->name('welcome');

Route::get('/index', [ProductController::class, 'index'])->name('products');


Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/byCategory/{category}', [ProductController::class, 'byCategory'])->name('product.byCategory');

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::get('/order', [ProductController::class, 'order'])->name('order');
Route::post('/order/submit', [ProductController::class, 'orderSubmit'])->name('order.submit');