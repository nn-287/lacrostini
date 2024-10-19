<?php

use App\Http\Controllers\Merchant\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Merchant\ProductController;

Route::group(['namespace' => 'Merchant', 'as' => 'merchant.'], function () 
{
    /*authentication*/
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth.'], function () 
    {
        Route::get('login', [LoginController::class, 'login'])->name('login');
        Route::post('login', [LoginController::class, 'submit']);
        
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });


    

    Route::group(['middleware' => ['merchant']], function () 
    {
        Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

        Route::group(['prefix' => 'product', 'as' => 'product.'], function () 
        {
            Route::get('add-new', [ProductController::class, 'index'])->name('add-new');
            Route::post('store', [ProductController::class, 'store'])->name('store');
            Route::get('view/{id}', [ProductController::class, 'view'])->name('view');
            Route::get('list', [ProductController::class, 'list'])->name('list');
            Route::get('status/{id}/{status}', [ProductController::class, 'status'])->name('status');
            Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
            Route::post('variant-combination', [ProductController::class, 'variant_combination'])->name('variant-combination');
            Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [ProductController::class, 'delete_product'])->name('delete');
            Route::post('search', [ProductController::class, 'search'])->name('search');
            Route::get('bulk-import', [ProductController::class, 'bulk_import_index'])->name('bulk-import');
            Route::post('bulk-import', [ProductController::class, 'bulk_import_data']);
            Route::get('bulk-export', [ProductController::class, 'bulk_export_data'])->name('bulk-export');
            Route::get('get-categories', [ProductController::class, 'get_categories'])->name('get-categories');
            Route::post('update-attributes-images/{id}', [ProductController::class, 'update_attributes_images'])->name('update-attributes-images');
            Route::get('attributes-images/{id}', [ProductController::class, 'view_attributes_images'])->name('attributes-images');
            Route::get('delete-attribute/{key}/{product_id}', [ProductController::class, 'delete_attribute'])->name('delete-attribute');
            Route::post('store-attribute', [ProductController::class, 'store_attribute'])->name('store-attribute');
        });


        


    });
   

});