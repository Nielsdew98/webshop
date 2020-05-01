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
});

Route::get('admin/roles/restore/{role}','AdminRolesController@roleRestore')->name('admin.roleRestore');
Route::get('admin/users/restore/{user}','AdminUsersController@userRestore')->name('admin.userRestore');
Route::get('admin/products/restore/{product}','AdminProductsController@productRestore')->name('admin.productRestore');




Route::get('/home', 'HomeController@index')->name('home');
