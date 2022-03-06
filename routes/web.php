<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Customer\DisplayController@index')->name('customer.view.index'); 
Route::get('product', 'Customer\DisplayController@product')->name('customer.view.product'); 
Route::get('category', 'Customer\DisplayController@category')->name('customer.view.category'); 
Route::get('cart', 'Customer\DisplayController@cart')->name('customer.view.cart'); 

// Payment
Route::post('payment', 'PaymentController@create_pay')->name('customer.create_pay');
Route::get('return-vnpay', 'PaymentController@return_pay')->name('customer.return_vnpay');

Route::middleware(['AuthCustomer:auth'])->group(function () {
    Route::get('/login', 'Customer\DisplayController@login')->name('customer.view.login');
    Route::get('/register', 'Customer\DisplayController@register')->name('customer.view.register');
    // Route::post('/login', 'Customer\AuthController@login')->name('customer.login');

    Route::post('/register', 'Customer\AuthController@register')->name('customer.register');
    Route::post('login', 'Customer\AuthController@login')->name('customer.login');
});
Route::middleware(['AuthCustomer:logined'])->group(function () { 
    Route::post('logout', 'Customer\AuthController@logout')->name('customer.logout');
    Route::get('profile', 'Customer\DisplayController@profile')->name('customer.view.profile');
    Route::get('checkout', 'Customer\DisplayController@checkout')->name('customer.view.checkout'); 
}); 

Route::prefix('customer')->group(function () {
    Route::prefix('apip')->group(function () {
        Route::prefix('category')->group(function () {
            Route::get('get', 'Customer\CategoryController@get')->name('customer.category.get');
        });
        Route::prefix('product')->group(function () {
            Route::get('get-all', 'Customer\ProductController@get_all')->name('customer.product.get.all');
            // 
            // 
            // Route::get('get-discount', 'Customer\ProductController@get_discount')->name('customer.product.get.discount');
            // Route::get('get-discount-first', 'Customer\ProductController@get_discount_first')->name('customer.product.get.discount');

            // 
            // 
            // Route::get('get-related/{id}', 'Customer\ProductController@get_related')->name('customer.product.get.related');
            // Route::get('get-data-category', 'Customer\ProductController@get_data_category')->name('admin.product.get_data_category');

            Route::get('get-one-cart/{id}', 'Customer\ProductController@get_one_cart')->name('customer.product.get.cart');
            Route::get('get-related/{id}', 'Customer\ProductController@get_related')->name('customer.product.get.related');
            Route::get('get-one/{id}', 'Customer\ProductController@get_one')->name('customer.product.get.one');
            Route::get('get-trending', 'Customer\ProductController@get_trending')->name('customer.product.get.trending');
            Route::get('get-best-sale', 'Customer\ProductController@get_best_sale')->name('customer.product.get.best_sale');
            Route::get('get-new-arrivals', 'Customer\ProductController@get_new_arrivals')->name('customer.product.get.new_arrivals');
            Route::get('get-with-category/{id}', 'Customer\ProductController@get_with_category')->name('admin.product.get_with_category');
        });
        Route::prefix('order')->group(function () {
            Route::post('create', 'Customer\OrderController@create')->name('customer.order.create');
            Route::get('get/{id}', 'Customer\OrderController@get')->name('customer.order.get');
        });
        Route::prefix('profile')->group(function () {
            Route::get('get', 'Customer\CustomerController@get_profile')->name('customer.profile.get');
            Route::post('update-profile', 'Customer\CustomerController@update_profile')->name('customer.profile.update');
            Route::get('get-order', 'Customer\CustomerController@get_order')->name('customer.profile.get_order');

            Route::post('update-password', 'Customer\CustomerController@update_password')->name('customer.password.update');

        });
    });
});



Route::middleware(['AuthAdmin:auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', 'Admin\DisplayController@login')->name('admin.login');
        Route::post('/login', 'Admin\AuthController@login')->name('admin.login');
    });
});
Route::middleware(['AuthAdmin:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');
        
        Route::get('/', 'Admin\DisplayController@statistic')->name('admin.statistic');

        Route::prefix('category')->group(function () {
            Route::get('/', 'Admin\CategoryController@index')->name('admin.category.index');
        });
        Route::prefix('product')->group(function () {
            Route::get('/', 'Admin\ProductController@index')->name('admin.product.index');
        });
        Route::prefix('discount')->group(function () {
            Route::get('/', 'Admin\ProductController@discount')->name('admin.discount.index');
        });
        Route::prefix('warehouse')->group(function () {
            Route::get('/', 'Admin\WarehouseController@index')->name('admin.warehouse.index');
        });
        Route::prefix('order')->group(function () {
            Route::get('/', 'Admin\OrderController@index')->name('admin.order.index');
        });
    });

    Route::prefix('apip')->group(function () {
        Route::post('post-image', 'Admin\ProductController@imageUpload')->name('admin.image.post');
        Route::prefix('category')->group(function () {
            Route::get('get', 'Admin\CategoryController@get')->name('admin.category.get');
            Route::get('/get-one/{id}', 'Admin\CategoryController@get_one')->name('admin.category.get_one');
            Route::post('store', 'Admin\CategoryController@store')->name('admin.category.store');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.category.update');
            Route::get('/delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');
        });

        Route::prefix('product')->group(function () {
            Route::get('get', 'Admin\ProductController@get')->name('admin.product.get');
            Route::get('getfree', 'Admin\ProductController@getfree')->name('admin.product.getfree');
            Route::get('get-discount', 'Admin\ProductController@get_discount')->name('admin.product.get_discount');

            Route::get('/get-one/{id}', 'Admin\ProductController@get_one')->name('admin.product.get_one');
            Route::post('store', 'Admin\ProductController@store')->name('admin.product.store');
            Route::put('/update-trending', 'Admin\ProductController@update_trending')->name('admin.product.trending.update');
            Route::post('/update', 'Admin\ProductController@update')->name('admin.product.update');
            Route::post('/update-discount', 'Admin\ProductController@update_discount')->name('admin.product.update_discount');
            Route::get('/delete-discount/{id}', 'Admin\ProductController@delete_discount')->name('admin.product.delete_discount');
            Route::get('/delete/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');
        });

        Route::prefix('warehouse')->group(function () {
            Route::get('get-item', 'Admin\WarehouseController@get_item')->name('admin.warehouse.item.get');
            Route::get('get-history', 'Admin\WarehouseController@get_history')->name('admin.warehouse.history.get');
            Route::post('store', 'Admin\WarehouseController@store')->name('admin.warehouse.store');
            Route::get('/get-ware-one/{id}', 'Admin\WarehouseController@get_ware_one')->name('admin.warehouse.get_ware_one');

            Route::get('/get-one/{id}', 'Admin\ProductController@get_one')->name('admin.warehouse.get_one');
            Route::post('/update', 'Admin\ProductController@update')->name('admin.warehouse.update');
        });

        Route::prefix('order')->group(function () {
            Route::get('get', 'Admin\OrderController@get')->name('admin.order.get');
            Route::get('get-one', 'Admin\OrderController@get_one')->name('admin.order.get');
            Route::post('/update', 'Admin\OrderController@update')->name('admin.order.update');

        });

        Route::prefix('statistic')->group(function () {
            Route::get('get-total', 'Admin\OrderController@get_total')->name('admin.order.get_total');
            Route::get('get-best-sale', 'Admin\OrderController@get_best_sale')->name('admin.order.get_best_sale');
            Route::get('get-customer', 'Admin\OrderController@get_customer')->name('admin.order.get_customer');

        });

    });
});