<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', function(){
        return view('admin.index');
    });
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/categories','AdminCategoriesController');
    Route::resource('admin/roles','AdminRolesController');
    Route::resource('admin/medias','AdminMediasController');
    Route::resource('admin/reviews','AdminReviewsController');
    Route::resource('admin/awards','AdminAwardsController');
    Route::resource('admin/products','AdminProductsController');
    Route::resource('admin/discounts','AdminDiscountsController');
});

Route::get('admin/roles/restore/{role}','AdminRolesController@roleRestore')->name('admin.roleRestore');
Route::get('admin/users/restore/{user}','AdminUsersController@userRestore')->name('admin.userRestore');
Route::get('admin/products/restore/{product}','AdminProductsController@productRestore')->name('admin.productRestore');
Route::get('/home', 'HomeController@index')->name('home');

//FRONT-END ROUTES
Route::get('/','FrontendController@index')->name('homepage');
Route::get('/contact','FrontendController@contact')->name('contactPage');
//search
Route::post('/search','FrontendController@search')->name('searchProduct');
//shop
Route::get('/shop','FrontendController@shop')->name('shopPage');
Route::post('/shop','FrontendController@productsPerPage')->name('productsPerPage');
Route::get('/shop/quickview/{id}','Frontendcontroller@quickview')->name('quickView');

//product
Route::get('/product/{slug}','FrontendController@product')->name('productDetailPage');

//cart
Route::get('/products/addToCart/{id}','Frontendcontroller@addToCart')->name('addToCart');
Route::get('/cart','FrontendController@cart')->name('shoppingCart');
Route::post('/cart','Frontendcontroller@updateQuantity')->name('quantity');
Route::get('/removeitem/{id}','FrontendController@removeItem')->name('removeItem');

//discounts
Route::get('/discounts','FrontendController@discounts')->name('discounts');
