<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('room',[RoomController::class, 'index'])->name('room');


Route::prefix('users')->name('users.')->group(function(){
    Route::get('/',[UsersController::class,'index'])->name('list');

   Route::delete('/delete/{user}',[UsersController::class,'delete'])->name('delete');

   Route::get('create',[UsersController::class,'create'])->name('create');
   Route::post('/store',[UsersController::class,'store'])->name('store');

   Route::get('edit/{id}', [UsersController::class, 'edit'])->name('edit');
   Route::post('update/{id}', [UsersController::class, 'update'])->name('update');
});

Route::prefix('auth')->name('auth.')->group(function(){
    Route::get('/login',[AuthController::class,'getLogin'])->name('getLogin');
    Route::post('/login',[AuthController::class,'postLogin'])->name('postLogin');
});

Route::get('/auth/logout',[AuthController::class,'logout'])->middleware('auth');

