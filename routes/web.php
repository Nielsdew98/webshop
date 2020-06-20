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

Auth::routes(['verify'=>true]);

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
    Route::get('admin/orders','OrderController@index')->name('adminorder.index');
});

Route::get('admin/roles/restore/{role}','AdminRolesController@roleRestore')->name('admin.roleRestore');
Route::get('admin/users/restore/{user}','AdminUsersController@userRestore')->name('admin.userRestore');
Route::get('admin/products/restore/{product}','AdminProductsController@productRestore')->name('admin.productRestore');
Route::get('/home', 'HomeController@index')->name('home');

//FRONT-END ROUTES
Route::get('/','FrontendController@index')->name('homepage');
Route::get('/contact','FrontendController@contact')->name('contactPage');
Route::post('/contact', 'ContactController@saveContact')->name('contactus.store');

//search
Route::post('/search','FrontendController@search')->name('searchProduct');
//shop
Route::get('/shop','FrontendController@shop')->name('shopPage');
Route::post('/shop/perpage','FrontendController@productsPerPage')->name('productsPerPage');
Route::post('/shop/sort','FrontendController@sort')->name('sort');
Route::get('/shop/quickview/{id}','Frontendcontroller@quickview')->name('quickView');
Route::get('/shop/category/{id}','Frontendcontroller@productsPerCategory')->name('productsPerCategory');

//user
Route::get('/user/{id}','FrontendController@userpage')->name('profilePage');

//product
Route::get('/product/{slug}','FrontendController@product')->name('productDetailPage');

//cart
Route::get('/products/addToCart/{id}','Frontendcontroller@addToCart')->name('addToCart');
Route::get('/cart','FrontendController@cart')->name('shoppingCart');
Route::post('/cart','Frontendcontroller@updateQuantity')->name('quantity');
Route::get('/removeitem/{id}','FrontendController@removeItem')->name('removeItem');

//discounts
Route::get('/discounts','FrontendController@discounts')->name('discounts');

//checkout
Route::get('/checkout','FrontendController@checkout')->name('checkout');
Route::post('/checkout/order','OrderController@createOrder')->name('createOrder');
Route::get('/checkout/order/pay/{id}','PaymentController@preparepayment')->name('payment.mollie');
Route::get('/checkout/order/payment-succes/{id}','PaymentController@paymentSuccess')->name('payment.success');
Route::get('/checkout/order/payment-failed/{id}','PaymentController@paymentFailed')->name('payment.failed');
Route::get('/account','FrontendController@accountPage')->name('account');

Route::post('/newsletter','FrontendController@newsletter')->name('newsletter');
