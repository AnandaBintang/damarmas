<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BannerController;
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

Route::get('/', [GuestController::class, 'index'])->name('homepage');
Route::get('/products/{id}', [GuestController::class, 'show'])->name('products');
Route::get('/product-details/{id}', [GuestController::class, 'showProductDetail'])->name('product-details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/admin/product-image/{productImage}', [ProductImageController::class, 'destroy'])->name('product.removeImage');

    Route::resource('admin/category', CategoryController::class, [
        'names' => [
            'index' => 'category.index',
            'create' => 'category.create',
            'store' => 'category.store',
            'show' => 'category.show',
            'edit' => 'category.edit',
            'update' => 'category.update',
            'destroy' => 'category.destroy',
        ]
    ]);
    Route::resource('admin/subcategory', SubcategoryController::class, [
        'names' => [
            'index' => 'subcategory.index',
            'create' => 'subcategory.create',
            'store' => 'subcategory.store',
            'show' => 'subcategory.show',
            'edit' => 'subcategory.edit',
            'update' => 'subcategory.update',
            'destroy' => 'subcategory.destroy',
        ]
    ]);
    Route::resource('admin/product', ProductController::class, [
        'names' => [
            'index' => 'product.index',
            'create' => 'product.create',
            'store' => 'product.store',
            'show' => 'product.show',
            'edit' => 'product.edit',
            'update' => 'product.update',
            'destroy' => 'product.destroy',
        ]
    ]);
    Route::resource('admin/about', AboutController::class, [
        'names' => [
            'index' => 'about.index',
            'create' => 'about.create',
            'store' => 'about.store',
            'show' => 'about.show',
            'edit' => 'about.edit',
            'update' => 'about.update',
            'destroy' => 'about.destroy',
        ]
    ]);
    Route::resource('admin/testimonial', TestimonialController::class, [
        'names' => [
            'index' => 'testimonial.index',
            'create' => 'testimonial.create',
            'store' => 'testimonial.store',
            'show' => 'testimonial.show',
            'edit' => 'testimonial.edit',
            'update' => 'testimonial.update',
            'destroy' => 'testimonial.destroy',
        ]
    ]);
    Route::resource('admin/banner', BannerController::class, [
        'names' => [
            'index' => 'banner.index',
            'create' => 'banner.create',
            'store' => 'banner.store',
            'show' => 'banner.show',
            'edit' => 'banner.edit',
            'update' => 'banner.update',
            'destroy' => 'banner.destroy',
        ]
    ]);
});

require __DIR__ . '/auth.php';
