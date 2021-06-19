<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\DisqueraController;

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
    return view('auth.login');
});
/*Route::get('/Disquera', function () {
    return view('Disquera.index');
});*/


//Route::get('/Disquera/create', [DisqueraController::class,'create']);

Route::resource('Disquera',DisqueraController::class)->middleware('auth');
//Route::resource('Disquera',DisqueraController::class);
Auth::routes();





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Disquera');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/', [App\Http\Controllers\DisqueraController::class, 'index'])->name('Disquera');
});

Route::get('Disquera/{id}/active',[DisqueraController::class,'active'])->name('active');
