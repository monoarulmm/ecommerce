<?php

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
$controller_path = 'App\Http\Controllers';

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/test', function () {
//     return view('content.users.main');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', $controller_path . '\Pages\HomeController@index');
Route::get('/admindashboard', $controller_path . '\Pages\HomeController@admindashboard')->name('admin.dashboard');

// category
Route::get('/category', $controller_path . '\Pages\CategoryController@category_page');
Route::post('/add_category', $controller_path . '\Pages\CategoryController@add_category');
Route::get('/delete_category/{id}',$controller_path . '\Pages\CategoryController@delete_category');
Route::get('/update_category/{id}',$controller_path . '\Pages\CategoryController@update_category');
Route::post('/update_category_confirm/{id}',$controller_path . '\Pages\CategoryController@update_category_confirm');
Route::get('/category_list',$controller_path . '\Pages\CategoryController@show_category');

// adminpages
Route::get('/admin/tablecontent', $controller_path . '\Pages\HomeController@tablecontent');


// Shop
Route::get('/shop', $controller_path . '\Pages\ShopController@Shop_page');
Route::post('/add_shop', $controller_path . '\Pages\ShopController@add_Shop');
Route::get('/delete_shop/{id}',$controller_path . '\Pages\ShopController@delete_shop');
Route::get('/update_shop/{id}',$controller_path . '\Pages\ShopController@update_shop');
Route::post('/update_shop_confirm/{id}',$controller_path . '\Pages\ShopController@update_shop_confirm');
Route::get('/shop_details/{id}', $controller_path . '\Pages\shopController@shop_details');


Route::get('/user/shop', $controller_path . '\Pages\ShopController@shop_all');
Route::get('/shop_search', $controller_path . '\Pages\ShopController@shop_search');





// product
Route::get('/product', $controller_path . '\Pages\ProductController@product_page');
Route::post('/add_product', $controller_path . '\Pages\ProductController@add_product');
Route::get('/delete_product/{id}',$controller_path . '\Pages\ProductController@delete_product');
Route::get('/update_product/{id}',$controller_path . '\Pages\ProductController@update_product');
Route::post('/update_product_confirm/{id}',$controller_path . '\Pages\ProductController@update_product_confirm');
Route::get('/product_details/{slug}', $controller_path . '\Pages\ProductController@product_details');

Route::get('/user/product', $controller_path . '\Pages\ProductController@product_all');
Route::get('/product_search', $controller_path . '\Pages\ProductController@product_search');




// review
Route::post('/add_review/{id}', $controller_path . '\Pages\ReviewController@add_review');
Route::get('/delete_review/{id}',$controller_path . '\Pages\ReviewController@delete_review');



// wishlist
Route::post('/add_wishlist/{id}', $controller_path . '\Pages\WishlistController@add_wishlist');
Route::get('/delete_wishlist/{id}',$controller_path . '\Pages\WishlistController@delete_wishlist');
Route::get('/my_wishlist', $controller_path . '\Pages\WishlistController@my_wishlist');

// cart

Route::post('/add_cart/{id}', $controller_path . '\Pages\CartController@add_cart');
Route::get('/my_cart', $controller_path . '\Pages\CartController@my_cart');
Route::get('/cart_details/{id}', $controller_path . '\Pages\CartController@cart_details');
Route::get('/delete_cart/{id}',$controller_path . '\Pages\CartController@delete_cart');

// order
Route::get('/cash_order', $controller_path . '\Pages\OrderController@cash_order');
Route::get('/show_order', $controller_path . '\Pages\OrderController@show_order');
Route::get('/cancel_order/{id}', $controller_path . '\Pages\OrderController@cancel_order');
// order admin
Route::get('/admin/my_order', $controller_path . '\Pages\OrderController@order');
Route::get('/delivered/{id}', $controller_path . '\Pages\OrderController@delivered');
Route::get('/print_pdf/{id}', $controller_path . '\Pages\OrderController@print_pdf');
Route::get('/send_email/{id}', $controller_path . '\Pages\OrderController@send_email');

Route::post('/send_user_email/{id}', $controller_path . '\Pages\OrderController@send_user_email');


