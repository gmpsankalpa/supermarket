<?php

use App\Http\Controllers\orderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('order');
});

Route::get('/register',[userController::class,'viewregister'])->name('viewRegsiter');
Route::post('/register',[userController::class,'insertuser'])->name('insertuser');

Route::get('/login',[userController::class,'viewlogin'])->name('login');
Route::post('/login',[userController::class,'authlogin'])->name('userlogin');



Route::get('/order',[orderController::class,'viewOder'])->name('vieworder');

Route::get('/placeorder',[orderController::class,'viewplaceorder'])->name('placeorder');
Route::post('/placeorder',[orderController::class,'ordernow'])->name('placeorder');

Route::get('editorder/{id}',[orderController::class,'editorderview'])->name('editorder');

Route::put('update/{id}',[orderController::class,'updateorder'])->name('updateorder');
Route::get('deleteorder/{id}',[orderController::class,'deleteorder'])->name('deleteorder');



