<?php

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

Route::get('/', function () {
    $meta = [
        'title' => 'Home',
        'description' => 'This is home page',
        'keywords' => 'damarmas, home, page, printer, running text',
    ];
    $products = [
        [
            'title' => 'Product 1',
            'price' => 1000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
        [
            'title' => 'Product 2',
            'price' => 2000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
        [
            'title' => 'Product 3',
            'price' => 3000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
        [
            'title' => 'Product 4',
            'price' => 4000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
    ];
    return view('homepage', compact('meta', 'products'));
});

Route::get('/product', function () {
    $meta = [
        'title' => 'Product',
        'description' => 'This is product page',
        'keywords' => 'damarmas, product, page, printer, running text',
    ];
    $products = [
        [
            'title' => 'Product 1',
            'price' => 1000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
        [
            'title' => 'Product 2',
            'price' => 2000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
        [
            'title' => 'Product 3',
            'price' => 3000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
        [
            'title' => 'Product 4',
            'price' => 4000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg',
        ],
        [
            'title' => 'Product 5',
            'price' => 5000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg'
        ],
        [
            'title' => 'Product 6',
            'price' => 6000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg'
        ],
        [
            'title' => 'Product 7',
            'price' => 7000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg'
        ],
        [
            'title' => 'Product 8',
            'price' => 8000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg'
        ],
        [
            'title' => 'Product 9',
            'price' => 9000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg'
        ],
        [
            'title' => 'Product 10',
            'price' => 10000,
            'image' => 'https://i.pcmag.com/imagery/roundups/06msR0ZNV3Oc2GfpqCu9AcT-22..v1644880252.jpg'
        ],
    ];
    $categories = [
        ['name' => 'Category 1'],
        ['name' => 'Category 2'],
        ['name' => 'Category 3'],
        ['name' => 'Category 4'],
        ['name' => 'Category 5'],
        ['name' => 'Category 6'],
        ['name' => 'Category 7'],
        ['name' => 'Category 8'],
        ['name' => 'Category 9'],
        ['name' => 'Category 10'],
    ];
    return view('product', compact('meta', 'products', 'categories'));
});

Route::get('/product/detail', function () {
    $meta = [
        'title' => 'Product',
        'description' => 'This is product page',
        'keywords' => 'damarmas, product, page, printer, running text',
    ];

    return view('product-detail', compact('meta'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('category', \App\Http\Controllers\CategoryController::class, [
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
    Route::resource('subcategory', \App\Http\Controllers\SubcategoryController::class, [
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
    Route::resource('product', \App\Http\Controllers\ProductController::class, [
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
    Route::delete('/product-image/{productImage}', [\App\Http\Controllers\ProductImageController::class, 'destroy'])->name('product.removeImage');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
