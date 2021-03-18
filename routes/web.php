<?php

use Illuminate\Support\Facades\Auth;
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

/**FRONTEND**/
Route::get('/', function () {
    return view('/index');
});
Route::get('/contactformulier', 'App\Http\Controllers\ContactController@create')->name('contactformulier.create');
Route::post('/contactformulier', 'App\Http\Controllers\ContactController@store')->name('contactformulier.store');
Route::get('/post/{slug}', 'App\Http\Controllers\AdminPostsController@post')->name('home.post');
Route::get('/shop', 'App\Http\Controllers\FrontendController@index')->name('shop');
Route::get('/products/brand/{id}','App\Http\Controllers\FrontendController@productsPerBrand')->name('productsperbrand');
//cart
Route::get('/addToCart/{id}','App\Http\Controllers\FrontendController@addToCart')->name('addtocart');
Route::get('/checkout','App\Http\Controllers\FrontendController@cart')->name('checkout');
Route::post('/checkout','App\Http\Controllers\FrontendController@updateQuantity')->name('quantity');
Route::get('/removeItem/{id}','App\Http\Controllers\FrontendController@removeItem')->name('removeItem');



/***BACKEND**/
Auth::routes(['verify' =>true]);
/**Bij het surfen naar het admin gedeelte worden enkel geregistreerde users doorgeleid naar
 de onderstaande route. In het andere geval worden ze naar het logingedeelte geredirect**/




/**BEVEILIGDE ROUTES**/
Route::group(['prefix'=>'admin', 'middleware'=>['auth','verified']], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

});

Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin','verified']], function(){
    Route::resource('users', App\Http\Controllers\AdminUsersController::class);
    Route::get('users/restore/{user}','App\Http\Controllers\AdminUsersController@userRestore')->name('admin.userrestore');
    Route::resource('posts', App\Http\Controllers\AdminPostsController::class);
    Route::resource('categories',App\Http\Controllers\AdminCategoriesController::class);
    Route::resource('comments', App\Http\Controllers\PostComments::class);
    Route::resource('replies', App\Http\Controllers\AdminPostCommentReplies::class);
    Route::resource('products', App\Http\Controllers\AdminProductsController::class);

    Route::resource('brands', App\Http\Controllers\AdminBrandsController::class);
    Route::get('products/brand/{id}', 'App\Http\Controllers\AdminProductsController@productsPerBrand')->name('admin.productsperbrand');
    Route::resource('productcategories', App\Http\Controllers\AdminProductCategory::class);
});



