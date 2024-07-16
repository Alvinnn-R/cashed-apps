<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/login', function () {
//     return view('login');
// });

// Route::post('/login', function (Request $request) {
//     return $request;
// });

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware('auth');

Route::middleware('auth')->group(function() {

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Category
// Route::get('/categories', function () {
//     return view('category.index');
// });
// Route::get('/categories/tambah', function () {
//     return view('category.create');
// });
// Route::get('/categories/edit', function () {
//     return view('category.edit');
// });

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create']);
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::resource('categories', CategoryController::class);

// Product
// Route::get('/products', function () {
//     return view('product.index');
// })->name('products.index');
// Route::get('/products/tambah', function () {
//     return view('product.create');
// });
// Route::get('/products/edit', function () {
//     return view('product.edit');
// });

Route::resource('products', ProductController::class);


// Users
Route::get('/users', function () {
    return view('user.index');
})->name('users.index');
Route::get('/users/tambah', function () {
    return view('user.create');
});
Route::get('/users/edit', function () {
    return view('user.edit');
});

});
