<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/check-order', function () {
    return view('pages.check-order');
})->name('check-order');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/calculator', function () {
    return view('pages.calculator');
})->name('calculator');

// Product routes
Route::get('/product/mobile-legends', function () {
    return view('pages.product.mobile-legends');
})->name('product.mobile-legends');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/products', function () { return view('pages.admin.products'); })->name('products');
    Route::get('/orders', function () { return view('pages.admin.orders'); })->name('orders');
    Route::get('/users', function () { return view('pages.admin.users'); })->name('users');
    Route::get('/reports', function () { return view('pages.admin.reports'); })->name('reports');
    Route::get('/settings', function () { return view('pages.admin.settings'); })->name('settings');
    Route::get('/transactions', function () { return view('pages.admin.transactions'); })->name('transactions');
    Route::get('/analytics', function () { return view('pages.admin.analytics'); })->name('analytics');
});
