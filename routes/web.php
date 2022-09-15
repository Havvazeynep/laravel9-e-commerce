<?php

use App\Http\Controllers\AdminPanel\CategoryController as AdminCateoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/index',[HomeController::class,'index'])->name('index');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/detail',[HomeController::class,'detail'])->name('detail');

//***************** ADMIN PANEL CONTROLLER  ***************************************
Route::get('/admin',[AdminPanelHomeController::class,'index'])->name('admin');
Route::get('/admin/category',[AdminCateoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[AdminCateoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[AdminCateoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCateoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[AdminCateoryController::class,'update'])->name('admin_category_update');
