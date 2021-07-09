<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WisataController;
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

Route::get('/blank', function () {
    return view('admin.blank');
})->name('blank');

Auth::routes();

Route::get('/main', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::put('/profile/{id}', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('profile.update');
Route::put('/profile/password/{id}', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('profile.update.password');
Route::put('/profile/image/{id}', [App\Http\Controllers\UserController::class, 'updateImage'])->name('profile.update.image');

Route::resource('wisata', WisataController::class);

Route::get('/',[PageController::class,'index'])->middleware('visitor')->name('user.home');
Route::get('listing',[PageController::class,'wisata'])->name('wisata.all');
Route::get('search/{nama}',[PageController::class,'search'])->name('wisata.search');
Route::get('wisata/detail/{wisata}',[PageController::class,'detail_wisata'])->name('wisata.detail');