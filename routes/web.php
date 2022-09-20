<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\ImageController as AdminImageController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;

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
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');
Route::get('/detail',[HomeController::class,'detail'])->name('detail');
Route::get('/product/{id}',[HomeController::class,'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}',[HomeController::class,'categoryproducts'])->name('categoryproducts');







//***************** ADMIN PANEL ROUTES  ***************************************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminPanelHomeController::class,'index'])->name('index');

//***************** GENERAL ROUTES  ******************************************************
    Route::get('/setting',[AdminPanelHomeController::class,'setting'])->name('setting');
    Route::post('/setting/update',[AdminPanelHomeController::class,'settingUpdate'])->name('setting.update');



//***************** ADMIN CATEGORY CONTROLLER ROUTES  ***************************************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
    });

//***************** ADMIN PRODUCT ROUTES  ***************************************
    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
    });

    //***************** ADMIN PRODUCT IMAGE GALERY ROUTES  ***************************************
    Route::prefix('/image')->name('image.')->controller(AdminImageController::class)->group(function () {
        Route::get('/{pid}','index')->name('index');
        Route::get('/create/{pid}','create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });

     //***************** ADMIN MESSAGE ROUTES  ***************************************
     Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    //***************** ADMIN FAQ ROUTES  ***************************************
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
    });

    //***************** ADMIN COMMENT ROUTES  ***************************************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    //****
});