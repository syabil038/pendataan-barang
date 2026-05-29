<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {

    $totalProducts = Product::count();
    $totalCategories = Category::count();
    $totalStock = Product::sum('stock');

    return view('dashboard', compact(
        'totalProducts',
        'totalCategories',
        'totalStock'
    ));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Category CRUD
    Route::resource('categories', CategoryController::class);

    // Product CRUD
    Route::resource('products', ProductController::class);

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
