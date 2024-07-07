<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

// Category
Route::get('/categories', function () {
    return view('category.index');
});
Route::get('/categories/tambah', function () {
    return view('category.create');
});
Route::get('/categories/edit', function () {
    return view('category.edit');
});

// Product
Route::get('/products', function () {
    return view('product.index');
});
Route::get('/products/tambah', function () {
    return view('product.create');
});
Route::get('/products/edit', function () {
    return view('product.edit');
});

// Users
Route::get('/users', function () {
    return view('user.index');
});
Route::get('/users/tambah', function () {
    return view('user.create');
});
Route::get('/users/edit', function () {
    return view('user.edit');
});
