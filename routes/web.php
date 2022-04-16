<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//lấy bên namespace HomeController
use App\Http\Controllers\AdminController;//lấy bên namespace HomeController

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

Route::get('',[HomeController::class,'home'])->name('home'); // khai báo router 
Route::get('about',[HomeController::class,'about'])->name('about'); // gioi thieu là người dùng nhập trên URL
Route::get('address',[HomeController::class,'address'])->name('address'); // gioi thieu là người dùng nhập trên URL
Route::get('product',[HomeController::class,'product'])->name('product');// ->name('product') goi ra link veiw master
Route::group(['prefix'=>'admin'], function(){ //group truyền 2 tham sô : mảng và function
    Route::get('',[AdminController::class,'dashboard'])->name('admin');
});