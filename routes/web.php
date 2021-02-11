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
    return view('welcome');
});


Auth::routes();
/**Bij het surfen naar het admin gedeelte worden enkel geregistreerde users doorgeleid naar
 de onderstaande route. In het andere geval worden ze naar het logingedeelte geredirect**/
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/**BEVEILIGDE ROUTES**/

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::resource('users', App\Http\Controllers\AdminUsersController::class);
});



