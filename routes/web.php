<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//lấy bên namespace HomeController
use App\Http\Controllers\AdminController;//lấy bên namespace HomeController
use App\Http\Controllers\UserController;//lấy bên namespace HomeController
use App\Http\Controllers\CategoryController;
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
    Route::group(['prefix'=>'category'], function(){
        Route::get('',[CategoryController::class,'index'])->name('category.index');
        Route::get('creat',[CategoryController::class,'creat'])->name('admin.category.creat');
        Route::post('store',[CategoryController::class,'store'])->name('admin.category.store');
        Route::delete('delete/{category}',[CategoryController::class,'delete'])->name('admin.category.delete');
        Route::get('edit/{category}',[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::put('update/{category}',[CategoryController::class,'update'])->name('admin.category.update');
    });
});
Route::group(['prefix'=>'user'], function(){ //group truyền 2 tham sô : mảng và function
    Route::get('',[UserController::class,'home'])->name('user');
   
});