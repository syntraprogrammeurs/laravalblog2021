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

Route::get('/', function () {
    return view('/contactformulier');
});
Route::get('/contactformulier', 'App\Http\Controllers\ContactController@create')->name('contactformulier.create');
Route::post('/contactformulier', 'App\Http\Controllers\ContactController@store')->name('contactformulier.store');



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
});



